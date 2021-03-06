<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email_templates extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->access_only_admin();
    }

    private function _templates() {
        return array(

            "send_estimate" => array("CONTACT_FIRST_NAME", "code_air", "CONTACT_LAST_NAME","al_1","kg_45_1","kg_100_1","kg_300_1","kg_500_1","kg_1000_1","myc_iss_1","scc_1","cgc_1","awb_1","routing_1","frequency_1","tt_1","al_2","kg_45_2","kg_100_2","kg_300_2","kg_500_2","kg_1000_2","myc_iss_2","scc_2","cgc_2","awb_2","routing_2","frequency_2","tt_2","frequency_2","awb_fee","airport_terminal_fee","airport_handing_fee","fumigation_fee","pick_up"),

            "login_info" => array("USER_FIRST_NAME", "USER_LAST_NAME", "DASHBOARD_URL", "USER_LOGIN_EMAIL", "USER_LOGIN_PASSWORD", "LOGO_URL", "SIGNATURE"),
            "reset_password" => array("ACCOUNT_HOLDER_NAME", "RESET_PASSWORD_URL", "SITE_URL", "LOGO_URL","SIGNATURE"),
            "team_member_invitation" => array("INVITATION_SENT_BY", "INVITATION_URL", "SITE_URL", "LOGO_URL", "SIGNATURE"),
            "client_contact_invitation" => array("INVITATION_SENT_BY", "INVITATION_URL", "SITE_URL", "LOGO_URL", "SIGNATURE"),
            "send_invoice" => array("INVOICE_ID", "CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "PROJECT_TITLE", "BALANCE_DUE", "DUE_DATE", "SIGNATURE", "INVOICE_URL", "LOGO_URL","SIGNATURE"),
            
            
            "invoice_payment_confirmation" => array("INVOICE_ID", "PAYMENT_AMOUNT", "INVOICE_URL", "LOGO_URL", "SIGNATURE"),
            "ticket_created" => array("TICKET_ID", "TICKET_TITLE", "USER_NAME", "TICKET_CONTENT", "TICKET_URL", "LOGO_URL", "SIGNATURE"),
            "ticket_commented" => array("TICKET_ID", "TICKET_TITLE", "USER_NAME", "TICKET_CONTENT", "TICKET_URL", "LOGO_URL", "SIGNATURE"),
            "ticket_closed" => array("TICKET_ID", "TICKET_TITLE", "USER_NAME", "TICKET_URL", "LOGO_URL", "SIGNATURE"),
            "ticket_reopened" => array("TICKET_ID", "TICKET_TITLE", "USER_NAME", "TICKET_URL", "SIGNATURE", "LOGO_URL"),
            "general_notification" => array("EVENT_TITLE", "EVENT_DETAILS", "APP_TITLE", "COMPANY_NAME", "NOTIFICATION_URL", "LOGO_URL", "SIGNATURE"),
            "message_received" => array("SUBJECT", "USER_NAME", "MESSAGE_CONTENT", "MESSAGE_URL", "APP_TITLE", "LOGO_URL", "SIGNATURE"),
            "signature" => array(),
            
        );
    }

    function index() {
        $this->template->rander("email_templates/index");
    }

    function save() {
        validate_submitted_data(array(
            "id" => "required|numeric"
        ));

        $id = $this->input->post('id');

        $data = array(
            "email_subject" => $this->input->post('email_subject'),
            "custom_message" => decode_ajax_post_data($this->input->post('custom_message'))
        );
        $save_id = $this->Email_templates_model->save($data, $id);
        if ($save_id) {
            echo json_encode(array("success" => true, 'id' => $save_id, 'message' => lang('record_saved')));
        } else {
            echo json_encode(array("success" => false, 'message' => lang('error_occurred')));
        }
    }

    function restore_to_default() {

        validate_submitted_data(array(
            "id" => "required|numeric"
        ));

        $template_id = $this->input->post('id');

        $data = array(
            "custom_message" => ""
        );
        $save_id = $this->Email_templates_model->save($data, $template_id);
        if ($save_id) {
            $default_message = $this->Email_templates_model->get_one($save_id)->default_message;
            echo json_encode(array("success" => true, "data" => $default_message, 'message' => lang('template_restored')));
        } else {
            echo json_encode(array("success" => false, 'message' => lang('error_occurred')));
        }
    }

    function list_data() {
        $list = array();
        foreach ($this->_templates() as $template_name => $variables) {

            $list[] = array("<span class='template-row' data-name='$template_name'>" . lang($template_name) . "</span>");
        }
        echo json_encode(array("data" => $list));
    }

    /* load template edit form */

    function form($template_name = "") {
        $view_data['model_info'] = $this->Email_templates_model->get_one_where(array("template_name" => $template_name));
        $variables = get_array_value($this->_templates(), $template_name);
        $view_data['variables'] = $variables ? $variables : array();
        $this->load->view('email_templates/form', $view_data);
    }

}

/* End of file email_templates.php */
/* Location: ./application/controllers/email_templates.php */