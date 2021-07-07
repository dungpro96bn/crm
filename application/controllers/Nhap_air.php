<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nhap_air extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Table_nhan_agent_model');
        $this->load->model('Table_thubao_nhanhang_model');
        $this->load->model('Nhan_chung_tu_agent_nhap_sea_model');
        $this->load->model('Table_hang_tau_thong_bao_model');
    }



    function save() {
        $task_id = $this->input->post('task_id');
        $id = $this->input->post('id');
        $status_id=$this->input->post('status_id');
        $name_file = $this->input->post('name_file');
        if($status_id==12){
            if($_FILES) {
                $config['upload_path'] = APPPATH . '../uploads/pdf/';
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'jpg|jpeg|png|pdf';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());

                } else {
                    $img = $this->upload->data();
                    $name_file = $img['file_name'];
                }
            }
            $id = $this->input->post('id');
            $status_id=$this->input->post('status_id');

            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "name_file" => $name_file,
            );
            $data = clean_data($data);
            $this->Table_nhan_agent_model->save($data, $id);
            echo json_encode(array("success" => true, 'message' => 'success uploads'));
        }
        if($status_id==13){
            if($_FILES) {
                $config['upload_path'] = APPPATH . '../uploads/pdf/';
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'jpg|jpeg|png|pdf';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());

                } else {
                    $img = $this->upload->data();
                    $name_file = $img['file_name'];
                }
            }
            $id = $this->input->post('id');
            $status_id=$this->input->post('status_id');

            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "name_file" => $name_file,
            );
            $data = clean_data($data);
            $this->Table_thubao_nhanhang_model->save($data, $id);
            echo json_encode(array("success" => true, 'message' => 'success uploads'));
        }
        if($status_id==18){
            if($_FILES) {
                $config['upload_path'] = APPPATH . '../uploads/pdf/';
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'jpg|jpeg|png|pdf';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());

                } else {
                    $img = $this->upload->data();
                    $name_file = $img['file_name'];
                }
            }
            $id = $this->input->post('id');
            $status_id=$this->input->post('status_id');

            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "name_file" => $name_file,
            );
            $data = clean_data($data);
            $this->Nhan_chung_tu_agent_nhap_sea_model->save($data, $id);
            echo json_encode(array("success" => true, 'message' => 'success uploads'));
        }
        if($status_id==19){
            if($_FILES) {
                $config['upload_path'] = APPPATH . '../uploads/pdf/';
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'jpg|jpeg|png|pdf';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());

                } else {
                    $img = $this->upload->data();
                    $name_file = $img['file_name'];
                }
            }
            $id = $this->input->post('id');
            $status_id=$this->input->post('status_id');

            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "name_file" => $name_file,
            );
            $data = clean_data($data);
            $this->Table_hang_tau_thong_bao_model->save($data, $id);
            echo json_encode(array("success" => true, 'message' => 'success uploads'));
        }

    }

}

/* End of file task_status.php */
/* Location: ./application/controllers/task_status.php */