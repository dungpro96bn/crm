<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Messages extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Table_e_mail_model');
        $this->load->model('Reply_e_mail_model');
    }

    function index() {
        redirect("messages/inbox");
    }

    /* show new message modal */

    function modal_form($user_id = 0) {
        /*
         * team members can send message to all team members
         * clients can only send message to team members (as defined on Client settings)
         * team members can send message to clients (as defined on Client settings)
         */
        $client_message_users = get_setting("client_message_users");
        if ($this->login_user->user_type === "staff") {
            //user is team member
            $client_message_users_array = explode(",", $client_message_users);
            if (in_array($this->login_user->id, $client_message_users_array)) {
                //user can send message to clients
                $users = $this->Users_model->get_team_members_and_clients("", "", $this->login_user->id)->result();
            } else {
                //user can send message only to team members
                $users = $this->Users_model->get_team_members_and_clients("staff", "", $this->login_user->id)->result();
            }
        } else {
            //user is a client contact
            if ($client_message_users) {
                $users = $this->Users_model->get_team_members_and_clients("staff", $client_message_users)->result();
            } else {
                //client can't send message to any team members
                redirect("forbidden");
            }
        }


        $view_data['users_dropdown'] = array("" => "-");
        if ($user_id) {
            $view_data['message_user_info'] = $this->Users_model->get_one($user_id);
        } else {
            foreach ($users as $user) {
                $client_tag = "";
                if ($user->user_type === "client" && $user->company_name) {
                    $client_tag = "  - " . lang("client") . ": " . $user->company_name . "";
                }
                $view_data['users_dropdown'][$user->id] = $user->first_name . " " . $user->last_name . $client_tag;
            }
            /// $view_data['users_dropdown'] = array("" => "-") + $this->Users_model->get_dropdown_list(array("first_name", "last_name"), "id", array("user_type" => "staff", "id !=" => $this->login_user->id));
        }

        $this->load->view('messages/modal_form', $view_data);
    }

    /* show inbox */

    function inbox($auto_select_index = "") {
        $this->check_module_availability("module_message");
        $this->save_mail();
        $view_data['mode'] = "inbox";
        $view_data['auto_select_index'] = $auto_select_index;
        $this->template->rander("messages/index", $view_data);
    }

    /* show sent items */

    function sent_items($auto_select_index = "") {
        $this->check_module_availability("module_message");

        $view_data['mode'] = "sent_items";
        $view_data['auto_select_index'] = $auto_select_index;
        $this->template->rander("messages/index", $view_data);
    }

    /* list of messages, prepared for datatable  */

    function list_data($mode = "inbox") {
        if ($mode !== "inbox") {
            $mode = "sent_items";
        }

        $options = array("user_id" => $this->login_user->id, "mode" => $mode);
        $list_data = $this->Messages_model->get_list($options)->result();
        if ($mode == "inbox") {
        $result_mail=$this->list_mail();
        }
        $result = array();

        foreach ($list_data as $data) {
            $result[] = $this->_make_row($data, $mode);
        }
        $result=array_merge($result,$result_mail);
        echo json_encode(array("data" => $result));
    }
    function list_mail()
    {   $user_id=$_SESSION['user_id'];
        $option = array("user_id"=>$user_id);
        $output = '';
        $data = $this->Table_e_mail_model->get_details($option)->result();
        foreach ($data as $overview) {
            $output .= '<div class="pull-left message-row '.($overview->status ).'"   data-index="" data-reply="">
                        <div class="media-left">
                        <span class="avatar avatar-xs">
                        <img src="'.base_url().'assets/images/avatar.jpg.'.'"/>
                        </span>
                    </div>
                    <div class="media-body">
                    <div class="media-heading">
                    <strong>' .$overview->from_address. '</strong>
                    <span class="text-off pull-right">' .$overview->date. '</span>
                    </div> ' .$overview->subject. '
                    </div>';
            $output .= '<input hidden="hidden" id="number_mail"  value="'.$overview->email_number.'">';
            $output .= '</div>';
            $date = $overview->date;
            $result[] = array(
                $output,
                $date,
                ($overview->seen ? 'read' : 'unread')
            );
            $output = '';
        }
        return $result;
    }
    function ajax_reader($email_number){
        $user_id=$_SESSION['user_id'];
        $options = array("email_number" => $email_number,
                            "user_id"=> $user_id);
        $msg =  $this->Table_e_mail_model->get_details($options)->row();
        $reply_mail = $this->Reply_e_mail_model->get_details($options)->result();
        $reply='';
        foreach ($reply_mail as  $reply_info){
            $view_data['reply_info']=$reply_info;
        $reply.= $this->load->view("messages/reply_mail", $view_data, true);
        }
        $body='<div class=" b-b p15 m0 bg-white">
        <div class="media-left"> 
            <span class="avatar avatar-sm">
                <img src="'.base_url().'assets/images/avatar.jpg.'.'" alt="..." />
            </span>
        </div>
        <div class="media-body w100p">
            <div class="media-heading clearfix">
               <span style="text-transform: uppercase;font-weight: bold">'.$msg->from_address.'</span>
                <span class="text-off pull-right">'.$msg->date.'</span>
                <span class="pull-right dropdown" style="position: absolute; right: 30px; margin-top: 15px;">
                    <div class="text-off dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true" >
                        <i class="fa fa-chevron-down clickable"></i>
                    </div>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" id="delete_mail"><i class="fa fa-times"> Delete</i> </li>
                    </ul>
                </span>
            </div>
            <p class="pt5 pb10 b-b">
                '. lang("subject").':'. $msg->subject.' 
            </p>

            <p>
                '.$msg->body.'
            </p>
            <p>
   
            </p>

        </div>
    </div>';
        $body.=$reply;
        $body.='<div id="reply-form">
        <div id="reply-dropzone" class="post-dropzone">';
         $body.='<form method="post" action="'.get_uri("messages/send_mail").'" id="reply_mail"  name="reply_mail">
                <div class="p15 box b-b">
                <div class="box-content avatar avatar-md pr15">
                    <img src="'.base_url().'assets/images/avatar.jpg.'.'" alt="..." />
                </div>
                <div class="box-content form-group">
                     <input type="hidden" name="form" value="'.$msg->from_address.'">
                    <input type="hidden" name="email_number" id="email_number" value="'.$msg->email_number.'">';
           $body.=' <textarea id="reply_message_mail" name="reply_message_mail" rows="5" cols="10" class="form-control" placeholder= "write_a_reply" ></textarea>
                    <div id="preview"></div>
                    <footer class="panel-footer b-a clearfix ">
                    <button class="btn btn-default upload-file-button pull-left btn-sm round" type="button" style="color:#7988a2"><i class="fa fa-camera"></i> Upload_file</button>
                        <button class="btn btn-primary pull-right btn-sm " type="submit"><i class="fa fa-reply"></i> Reply</button>
                    </footer>
                </div>
            </div></form>
        </div>
    </div>';
        $data = array(
            "email_number" =>$msg->email_number,
            "from_address" => $msg->from_address,
            "date" =>  $msg->date,
            "subject" => $msg->subject,
            "body" => $msg->body,
            "status" =>'read',
        );
        $this->Table_e_mail_model->save($data, $msg->id);
        echo $body;
    }
    /* return a message details */

    function view($encrypted_id = 0, $mode = "", $reply = 0) {
        $message_id = decode_id($encrypted_id, "message_id");
        check_required_hidden_fields(array($message_id));

        $message_mode = $mode;
        if ($reply == 1 && $mode == "inbox") {
            $message_mode = "sent_items";
        } else if ($reply == 1 && $mode == "sent_items") {
            $message_mode = "inbox";
        }

        $options = array("id" => $message_id, "user_id" => $this->login_user->id, "mode" => $message_mode);
        $view_data["message_info"] = $this->Messages_model->get_details($options)->row();

        //change message status to read
        $this->Messages_model->set_message_status_as_read($view_data["message_info"]->id, $this->login_user->id);

        $replies_options = array("message_id" => $message_id, "user_id" => $this->login_user->id);
        $view_data["replies"] = $this->Messages_model->get_details($replies_options)->result();

        $view_data["encrypted_message_id"] = $encrypted_id;
        $view_data["mode"] = $mode;
        $view_data["is_reply"] = $reply;
        echo json_encode(array("success" => true, "data" => $this->load->view("messages/view", $view_data, true), "test" => $options));
    }

    /* prepare a row of message list table */

    private function _make_row($data, $mode = "") {
        $image_url = get_avatar($data->user_image);
        $created_at = format_to_relative_time($data->created_at);
        $encrypted_id = encode_id($data->main_message_id, "message_id");
        $label = "";
        $reply = "";
        $status = "";
        $attachment_icon = "";
        $subject = $data->subject;
        if ($mode == "inbox") {
            $status = $data->status;
        }
        if ($data->reply_subject) {
            $label = " <label class='label label-success inline-block'>" . lang('reply') . "</label>";
            $reply = "1";
            $subject = $data->reply_subject;
        }

        if ($data->files && count(unserialize($data->files))) {
            $attachment_icon = "<i class='fa fa-paperclip font-16 mr15'></i>";
        }

        $message = "<div class='pull-left message-row $status' data-id='$encrypted_id' data-index='$data->main_message_id' data-reply='$reply'><div class='media-left'>
                        <span class='avatar avatar-xs'>
                            <img src='$image_url' />
                        </span>
                    </div>
                    <div class='media-body'>
                        <div class='media-heading'>
                            <strong> $data->user_name</strong>
                                  <span class='text-off pull-right'>$attachment_icon $created_at</span>
                        </div>
                        $label $subject
                    </div></div>
                  
                ";
        return array(
            $message,
            $data->created_at,
            $status
        );
    }

    /* send new message */

    function send_message() {

        $target_path = get_setting("timeline_file_path");
        $files_data = move_files_from_temp_dir_to_permanent_dir($target_path, "message");

        $message_data = array(
            "from_user_id" => $this->login_user->id,
            "to_user_id" => $this->input->post('to_user_id'),
            "subject" => $this->input->post('subject'),
            "message" => $this->input->post('message'),
            "created_at" => get_current_utc_time(),
            "deleted_by_users" => "",
        );

        $message_data = clean_data($message_data);
        
        $message_data["files"] = $files_data; //don't clean serilized data
         
        $save_id = $this->Messages_model->save($message_data);
        if ($save_id) {
            log_notification("new_message_sent", array("actual_message_id" => $save_id));
            echo json_encode(array("success" => true, 'message' => lang('message_sent')));
        } else {
            echo json_encode(array("success" => false, 'message' => lang('error_occurred')));
        }
    }

    /* reply to an existing message */

    function reply() {
        $encrypted_message_id = $this->input->post('message_id');
        $message_id = decode_id($encrypted_message_id, "message_id");
        check_required_hidden_fields(array($message_id));

        $message_info = $this->Messages_model->get_one($message_id);
        if ($message_info->id) {
            //check, where we have to send this message
            $to_user_id = 0;
            if ($message_info->from_user_id === $this->login_user->id) {
                $to_user_id = $message_info->to_user_id;
            } else {
                $to_user_id = $message_info->from_user_id;
            }

            $target_path = get_setting("timeline_file_path");
            $files_data = move_files_from_temp_dir_to_permanent_dir($target_path, "message");

            $message_data = array(
                "from_user_id" => $this->login_user->id,
                "to_user_id" => $to_user_id,
                "message_id" => $message_id,
                "subject" => "",
                "message" => $this->input->post('reply_message'),
                "created_at" => get_current_utc_time(),
                "deleted_by_users" => "",
            );
            
            $message_data = clean_data($message_data);
            $message_data["files"] = $files_data; //don't clean serilized data
            
            
            $save_id = $this->Messages_model->save($message_data);

            if ($save_id) {
                 log_notification("message_reply_sent", array("actual_message_id" => $save_id, "parent_message_id" => $message_id));
                //clear the delete status, if the mail deleted
                $this->Messages_model->clear_deleted_status($message_id);

                $options = array("id" => $save_id, "user_id" => $this->login_user->id);
                $view_data['reply_info'] = $this->Messages_model->get_details($options)->row();
                echo json_encode(array("success" => true, 'message' => lang('message_sent'), 'data' => $this->load->view("messages/reply_row", $view_data, true)));
                return;
            }
        }
        echo json_encode(array("success" => false, 'message' => lang('error_occurred')));
    }

    /* prepare notifications */

    function get_notifications() {
        $notifiations = $this->Messages_model->get_notifications($this->login_user->id, $this->login_user->message_checked_at);
        $view_data['notifications'] = $notifiations->result();
        echo json_encode(array("success" => true, 'total_notifications' => $notifiations->num_rows(), 'notification_list' => $this->load->view("messages/notifications", $view_data, true)));
    }

    function update_notification_checking_status() {
        $now = get_current_utc_time();
        $user_data = array("message_checked_at" => $now);
        $this->Users_model->save($user_data, $this->login_user->id);
    }

    /* upload a file */

    function upload_file() {
        upload_file_to_temp();
    }

    /* check valid file for message */

    function validate_message_file() {
        return validate_post_file($this->input->post("file_name"));
    }

    /* download files by zip */

    function download_message_files($encrypted_id = "") {
        $message_id = decode_id($encrypted_id, "message_id");
        check_required_hidden_fields(array($message_id));


        $files = $this->Messages_model->get_one($message_id)->files;
        $timeline_file_path = get_setting("timeline_file_path");
        download_app_files($timeline_file_path, $files);
    }

    function delete_my_messages($id = 0) {

        if (!$id) {
            exit();
        }

        //delete messages for current user.
        $this->Messages_model->delete_messages_for_user($id, $this->login_user->id);
    }
    function save_mail(){

        //begin by opening connection
        $user_id=$_SESSION['user_id'];
        $options = array("id"=>$user_id);
        $user = $this->Users_model->get_details($options)->row();
        $server = $user->imap_host;
        $username = $user->email_smtp_user2;
        $password = $user->email_smtp_pass2;
        if($server && $username &&$password) {
            $inbox = imap_open("$server", "$username", "$password") or die(imap_last_error());
            $email = imap_search($inbox, 'ALL');
            rsort($email);
            if ($email > 0) {
                $counter = 0;
                $email = array_slice($email, 0, 100);
                foreach ($email as $email_number) {
                    //get imap header info for obj thang
                    $options = array("email_number" => $email_number,
                        "user_id" => $user_id,);
                    $check = $this->Table_e_mail_model->get_details($options)->row();
                    if ($check == null) {
                        $overview = imap_fetch_overview($inbox, $email_number, 0);
                        $status = ($overview[0]->seen ? 'read' : 'unread');
                        $fromaddress = imap_utf8($overview[0]->from);
                        $subject = imap_utf8($overview[0]->subject);
                        $nowUtc = new \DateTime($overview[0]->date, new \DateTimeZone('UTC'));
                        $date = $nowUtc->format('Y-m-d H:i:s');

                        $structure = imap_fetchstructure($inbox, $email_number);
                        if (isset($structure->parts) && is_array($structure->parts) && isset($structure->parts[1])) {
                            $part = $structure->parts[1];
                            $message = imap_fetchbody($inbox, $email_number, 2);
                            if ($part->encoding == 3) {
                                $message = imap_base64($message);
                            } else if ($part->encoding == 1) {
                                $message = imap_8bit($message);
                            } else {
                                $message = imap_qprint($message);
                            }
                        }
                        $id = $this->input->post('id');
                        $data = array(
                            "from_address" => $fromaddress,
                            "subject" => $subject,
                            "date" => $date,
                            "body" => $message,
                            "email_number" => $email_number,
                            "status" => $status,
                            "user_id" => $user_id,
                        );
                        $this->Table_e_mail_model->save($data, $id);
                        $counter++;
                    }
                    if ($counter == 5) {
                        break;
                    }
                }
            }
        }
        //close connection
    }
    function send_mail(){
        $user_id=$_SESSION['user_id'];
        $from = $this->input->post("form");
        $reply_id = $this->input->post("email_number");
        $options = array("email_number"=>$reply_id,"user_id"=>$user_id);
        $data = $this->Table_e_mail_model->get_details($options)->row();
        $to =$this->get_string_between($from,'<','>');
        $subject =$data->subject;
        $body = $this->input->post("reply_message_mail");
        $id = $this->input->post('id');
        $options = array("id"=>$user_id);
        $user = $this->Users_model->get_details($options)->row();
        $from = $user->email_smtp_user2;
        $date = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
        $date = $date->format('Y-m-d H:i:sP');
        $data = array(
            "subject" => $subject,
            "from" => $from,
            "to" => $to,
            "date" =>$date,
            "body" => $body,
            "reply_id" => $reply_id,
            "user_id"=>$user_id,
        );
        $this->Reply_e_mail_model->save($data, $id);


        if (send_app_mail($to,$subject, $body)) {
            $view_data['reply_info']= $this->Reply_e_mail_model->new_reply()->row();;
            echo json_encode(array('success' => true, 'message' =>'Reply mail successfully', 'data' => $this->load->view("messages/reply_mail", $view_data, true)));
            return;
        } else {
            echo json_encode(array('success' => false, 'message' =>'error_send mail'));
        }
    }
    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    function delete_mail ($email_number){
        $user_id=$_SESSION['user_id'];
        $options = array("id"=>$user_id);
        $user = $this->Users_model->get_details($options)->row();
        $server = $user->imap_host;
        $username = $user->email_smtp_user2;
        $password = $user->email_smtp_pass2;
        if($server&&$username&&$password){
        $mbox = imap_open($server, $username, $password)  or die("Can't connect: " . imap_last_error());
        if ($mbox){
            imap_delete($mbox, $email_number);
            $options =array("user_id"=>$user_id,"email_number"=>$email_number);
            $data = $this->Table_e_mail_model->get_details($options)->row();
            $reply = $this->Reply_e_mail_model->get_details($options)->result();
            $this->Table_e_mail_model->delete($data->id);
            if($reply){
            foreach ($reply as $value){
                $this->Reply_e_mail_model->delete($value->id);
            }}
            echo json_encode(array('success' => true, 'message' =>'Delete mail successfully'));
        }else{
            echo json_encode(array('success' => false, 'message' =>'error_Delete mail'));
        }
    }else{ echo json_encode(array('success' => false,  'message' =>'Can\'t connect mail'));}
    }

}

/* End of file messages.php */
/* Location: ./application/controllers/messages.php */