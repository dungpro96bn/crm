<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Form_email_template extends MY_Controller {

	 function __construct() {
        parent::__construct();
        $this->load->model('Template_email_model');
         $this->load->model('Price_table_email_model');

    }

    function save(){
        $id = $this->input->post('id');
        foreach($_POST['value'] as $value)
        {
            $id=$value['id_price_item'];
            $data= array(
                "estimate_id"=>$this->input->post("estimate_id"),
                "a_l"=>$value['a_l'],
                "kg_45" => $value['kg_45'],
                "kg_100" =>$value['kg_100'],
                "kg_300" =>$value['kg_300'],
                "kg_500" =>$value['kg_500'],
                "kg_1000" =>$value['kg_1000'],
                "myc_iss" =>$value['myc_iss'],
                "scc" => $value['scc'],
                "cgc" =>$value['cgc'],
                "awb" =>$value['awb'],
                "routing" =>$value['routing'],
                "frequency" =>$value['frequency'],
                "t_t" =>$value['t_t'],
            );
            $data = clean_data($data);
            $this->Price_table_email_model->save($data,$id);
        };

        $id_price =$this->input->post('id_price');
        $data = array(
                 "estimate_id"=>$this->input->post("estimate_id"),
                "code_air"=>$this->input->post('code_air'),
                "awb_fee" => $this->input->post('awb_fee'),
                "airport_terminal_fee" => $this->input->post('airport_terminal_fee'),
                "customs_export" =>$this->input->post('customs_export'),
                "airport_handing_fee" => $this->input->post('airport_handing_fee'),
                "fumigation_fee" => $this->input->post('fumigation_fee'),
                "pick_up" => $this->input->post('pick_up'),
        );
        $data = clean_data($data);
        $this->Template_email_model->save($data,$id_price);

        echo json_encode(array("success" => true, 'message' => 'save success'));
        }

        function ajax_delete(){
            $id =$this->input->post('id');
            if($this->Price_table_email_model->delete_row($id)){
                echo json_encode(array("success" => true,'message' => lang('record_deleted')));
        } else {
                echo json_encode(array("success" => true,'message' => lang('record_error!')));
            }
        }

}

 ?>