<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Huongdan_guihang extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Huongdan_guihang_model');
        $this->load->model('Hd_guihang_ncts_model');
        $this->load->model('Hd_guihang_acsv_model');
        $this->load->model('Table_hawb_model');
        $this->load->model('Table_mawb_model');
        $this->load->model('Table_debit_model');
        $this->load->model('Table_debit_fob_chgs_model');
        $this->load->model('Table_booking_model');
        $this->load->model('Table_manifest_model');
        $this->load->model('Table_uyquyen_model');
        $this->load->model('Livax_nhan_hang_model');
        $this->load->model('Livax_giao_hang_model');
        $this->load->model('Livax_phieu_thu_model');
        $this->load->model('Shint_nhan_model');
        
    }



    function save() {
        $value=$this->input->post('value');
        $id = $this->input->post('id');
        $status_id=$this->input->post('status_id');
        if ($value==3&&$status_id==8){
                    $data = array(
                        "task_id" => $this->input->post('task_id'),
                        "status_id" => $this->input->post('status_id'),
                        "shipper" => $this->input->post('shipper'),
                        "ma_daily" => $this->input->post('ma_daily'),
                        "mst_shipper" => $this->input->post('mst_shipper'),
                        "consignee" => $this->input->post('consignee'),
                        "payer" => $this->input->post('payer'),
                        "mst_payer" => $this->input->post('mst_payer'),
                        "awb" => $this->input->post('awb'),
                        "booking" => $this->input->post('booking'),
                        "so_kien" => $this->input->post('so_kien'),
                        "trong_luong" => $this->input->post('trong_luong'),
                        "sanbay_khoihanh" => $this->input->post('sanbay_khoihanh'),
                        "sanbay_den" => $this->input->post('sanbay_den'),
                        "hanhtrinh" => $this->input->post('hanhtrinh'),
                        "loaibaobi" => $this->input->post('loaibaobi'),
                        "ten_hang" => $this->input->post('ten_hang'),
                        "huongdan_phucvu" => $this->input->post('huongdan_phucvu'),
                        "giatri_vc" => $this->input->post('giatri_vc'),
                        "giatri_haiquan" => $this->input->post('giatri_haiquan'),
                        "hinhthuc_thanhtoan" => $this->input->post('hinhthuc_thanhtoan'),
                        "tongkien_nv" => $this->input->post('tongkien_nv'),
                        "trongluong_nv" => $this->input->post('trongluong_nv'),
                        "kinhthuoc_nv" => $this->input->post('kinhthuoc_nv'),
                        "ma_alsc" => $this->input->post('ma_alsc'),
                        "ma_iata" => $this->input->post('ma_iata'),
                        "other_sevices" => $this->input->post('other_sevices'),
                        "start_date" => $this->input->post('start_date'),
                        "finish_date" => $this->input->post('finish_date'),
                        "date" => $this->input->post('date')
                    );
                     $data = clean_data($data);
                     $this->Huongdan_guihang_model->save($data, $id);
//                     redirect('projects/all_tasks');
                    }
        if ($value==1&&$status_id==8){
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "shipper" => $this->input->post('shipper'),
                "mst_shipper" => $this->input->post('mst_shipper'),
                "consignee" => $this->input->post('consignee'),
                "payer" => $this->input->post('payer'),
                "mst_payer" => $this->input->post('mst_payer'),
                "awb" => $this->input->post('awb'),
                "booking" => $this->input->post('booking'),
                "so_kien" => $this->input->post('so_kien'),
                "trong_luong" => $this->input->post('trong_luong'),
                "sanbay_khoihanh" => $this->input->post('sanbay_khoihanh'),
                "sanbay_den" => $this->input->post('sanbay_den'),
                "hanhtrinh" => $this->input->post('hanhtrinh'),
                "loaibaobi" => $this->input->post('loaibaobi'),
                "ten_hang" => $this->input->post('ten_hang'),
                "huongdan_phucvu" => $this->input->post('huongdan_phucvu'),
                "giatri_vc" => $this->input->post('giatri_vc'),
                "giatri_haiquan" => $this->input->post('giatri_haiquan'),
                "iata_code" => $this->input->post('iata_code'),
                "hinhthuc_thanhtoan" => $this->input->post('hinhthuc_thanhtoan'),
                "tongkien_nv" => $this->input->post('tongkien_nv'),
                "trongluong_nv" => $this->input->post('trongluong_nv'),
                "kichthuoc_nv" => $this->input->post('kinhthuoc_nv'),
                "ma_xuly" => $this->input->post('ma_xuly'),
                "ma_luukho" => $this->input->post('ma_luukho'),
                "other_sevices" => $this->input->post('other_sevices'),
                "start_date" => $this->input->post('start_date'),
                "finish_date" => $this->input->post('finish_date'),
                "date" => $this->input->post('date')
            );
            $data = clean_data($data);
            $this->Hd_guihang_ncts_model->save($data, $id);
        }
        if ($value==2&&$status_id==8){
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "awb1" => $this->input->post('awb1'),
                "awb2" => $this->input->post('awb2'),
                "awb3" => $this->input->post('awb3'),
                "awb4" => $this->input->post('awb4'),
                "awb5" => $this->input->post('awb5'),
                "awb6" => $this->input->post('awb6'),
                "awb7" => $this->input->post('awb7'),
                "awb8" => $this->input->post('awb8'),
                "awb9" => $this->input->post('awb9'),
                "awb10" => $this->input->post('awb10'),
                "awb11" => $this->input->post('awb11'),
                "booking_flight" => $this->input->post('booking_flight'),
                "date_send" => $this->input->post('date_send'),
                "departure" => $this->input->post('departure'),
                "destination" => $this->input->post('destination'),
                "routing" => $this->input->post('routing'),
                "no_of_pcs" => $this->input->post('no_of_pcs'),
                "gross_weight" => $this->input->post('gross_weight'),
                "package" => $this->input->post('package'),
                "commodity_of_goods" => $this->input->post('commodity_of_goods'),
                "shipper_name" => $this->input->post('shipper_name'),
                "shipper_code" => $this->input->post('shipper_code'),
                "payer" => $this->input->post('payer'),
                "payer_code" => $this->input->post('payer_code'),
                "consignee" => $this->input->post('consignee'),
                "no_of_pcs_staff" => $this->input->post('no_of_pcs_staff'),
                "gross_weight_staff" => $this->input->post('gross_weight_staff'),
                "special_handing_staff" => $this->input->post('special_handing_staff'),
                "dimensions" => $this->input->post('dimensions'),
                "begin_date" => $this->input->post('begin_date'),
                "finish_date" => $this->input->post('finish_date'),
                "date" => $this->input->post('date')
            );
            $data = clean_data($data);
            $this->Hd_guihang_acsv_model->save($data, $id);
        }
        if ($status_id==6){
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "code1" => $this->input->post('code1'),
                "code2" => $this->input->post('code2'),
                "code3" => $this->input->post('code3'),
                "code4" => $this->input->post('code4'),
                "shipper" => $this->input->post('shipper'),
                "shipper_number" => $this->input->post('shipper_number'),
                "air_waybill" => $this->input->post('air_waybill'),
                "consignee" => $this->input->post('consignee'),
                "consignee_number" => $this->input->post('consignee_number'),
                "iata_Code" => $this->input->post('iata_Code'),
                "account_no" => $this->input->post('account_no'),
                "information" => $this->input->post('information'),
                "airport_departure" => $this->input->post('airport_departure'),
                "currency" => $this->input->post('currency'),
                "chgs_Code" => $this->input->post('chgs_Code'),
                "wt_val" => $this->input->post('wt_val'),
                "other" => $this->input->post('other'),
                "carriage" => $this->input->post('carriage'),
                "customs" => $this->input->post('customs'),
                "airport_of_destination" => $this->input->post('airport_of_destination'),
                "requested_flight_date" => $this->input->post('requested_flight_date'),
                "amount_of_insurance" => $this->input->post('amount_of_insurance'),
                "handling_information" => $this->input->post('handling_information'),
                "pieces_rcp" => $this->input->post('pieces_rcp'),
                "gross_weight" => $this->input->post('gross_weight'),
                "kg_ib" => $this->input->post('kg_ib'),
                "rate_class" => $this->input->post('rate_class'),
                "commodity_item" => $this->input->post('commodity_item'),
                "chargeable_weight" => $this->input->post('chargeable_weight'),
                "rate_charge" => $this->input->post('rate_charge'),
                "total" => $this->input->post('total'),
                "Nature" => $this->input->post('Nature'),
                "dim" => $this->input->post('dim'),
                "Vol" => $this->input->post('Vol'),
                "sap_no" => $this->input->post('sap_no'),
                "mark" => $this->input->post('mark'),
                "ciq_no" => $this->input->post('ciq_no'),
                "code" => $this->input->post('code'),
                "qty" => $this->input->post('qty'),
                "total1" => $this->input->post('total1'),
                "other_charges" => $this->input->post('other_charges'),
                "weight_charge" => $this->input->post('weight_charge'),
                "valuation_charge" => $this->input->post('valuation_charge'),
                "tax" => $this->input->post('tax'),
                "due_agent" => $this->input->post('due_agent'),
                "due_carrier" => $this->input->post('due_carrier'),
                "total_prepaid_collect" => $this->input->post('total_prepaid_collect'),
                "currency_conversion" => $this->input->post('currency_conversion'),
                "at_destination" => $this->input->post('at_destination'),
                "date" => $this->input->post('date')
            );
            $data = clean_data($data);
            $this->Table_hawb_model->save($data, $id);
        }
        if ($status_id==10&&$value==1){
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "no_add" => $this->input->post('no_add'),
                "date" => $this->input->post('date'),
                "messrs_add" => $this->input->post('messrs_add'),
                "description" => $this->input->post('description'),
                "air_freight_volume" => $this->input->post('air_freight_volume'),
                "air_freight_rate" => $this->input->post('air_freight_rate'),
                "air_freight_amount" => $this->input->post('air_freight_amount'),
                "x_ray_rate" => $this->input->post('x_ray_rate'),
                "x_ray_amount" => $this->input->post('x_ray_amount'),
                "cgc_amount" => $this->input->post('cgc_amount'),
                "mawb_amount" => $this->input->post('mawb_amount'),
                "profit_rate" => $this->input->post('profit_rate'),
                "profit_amount" => $this->input->post('profit_amount'),
                "total_galaxy" => $this->input->post('total_galaxy'),
                "in_words_total" => $this->input->post('in_words_total')
            );
            $data = clean_data($data);
            $this->Table_debit_model->save($data, $id);
        }
        if ($status_id==10&&$value==2){
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "no_add" => $this->input->post('no_add'),
                "date" => $this->input->post('date'),
                "messrs_add" => $this->input->post('messrs_add'),
                "description" => $this->input->post('description'),
                "air_freight_volume" => $this->input->post('air_freight_volume'),
                "air_freight_rate" => $this->input->post('air_freight_rate'),
                "air_freight_amount" => $this->input->post('air_freight_amount'),
                "x_ray_rate" => $this->input->post('x_ray_rate'),
                "x_ray_amount" => $this->input->post('x_ray_amount'),
                "ams_mawb_rate" => $this->input->post('ams_mawb_rate'),
                "ams_mawb_amount" => $this->input->post('ams_mawb_amount'),
                "pick_up_rate" => $this->input->post('pick_up_rate'),
                "pick_up_amount" => $this->input->post('pick_up_amount'),
                "customs_export_volume" => $this->input->post('customs_export_volume'),
                "customs_export_rate" => $this->input->post('customs_export_rate'),
                "customs_export_amount" => $this->input->post('customs_export_amount'),
                "airport_teminal_fee_rate" => $this->input->post('airport_teminal_fee_rate'),
                "airport_teminal_fee_amount" => $this->input->post('airport_teminal_fee_amount'),
                "airport_handling_amount" => $this->input->post('airport_handling_amount'),
                "hawb_fee_amount" => $this->input->post('hawb_fee_amount'),
                "overtime_charge_amount" => $this->input->post('overtime_charge_amount'),
                "profit_galaxy_amount" => $this->input->post('profit_galaxy_amount'),
                "profit_for_galaxy_rate" => $this->input->post('profit_for_galaxy_rate'),
                "profit_for_galaxy_amount" => $this->input->post('profit_for_galaxy_amount'),
                "total_galaxy" => $this->input->post('total_galaxy'),
                "in_words_total" => $this->input->post('in_words_total')
            );
            $data = clean_data($data);
            $this->Table_debit_fob_chgs_model->save($data, $id);
        }
        if ($status_id==5){
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "to" => $this->input->post('to'),
                "attn" => $this->input->post('attn'),
                "date" => $this->input->post('date'),
                "re" => $this->input->post('re'),
                "total_all" => $this->input->post('total_all'),
                "flight_from" => $this->input->post('flight_from'),
                "flight_from_1" => $this->input->post('flight_from_1'),
                "flight_to" => $this->input->post('flight_to'),
                "flight_to_1" => $this->input->post('flight_to_1'),
                "time_delivery" => $this->input->post('time_delivery'),
                "cut_off_time" => $this->input->post('cut_off_time'),
                "warehouse" => $this->input->post('warehouse'),
                "code" => $this->input->post('code')
            );
            $data = clean_data($data);
            $this->Table_booking_model->save($data, $id);
        }
        if ($status_id==7){
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "from" => $this->input->post('from'),
                "mawb" => $this->input->post('mawb'),
                "no_of_pcs" => $this->input->post('no_of_pcs'),
                "to" => $this->input->post('to'),
                "flight_no" => $this->input->post('flight_no'),
                "shipper" => $this->input->post('shipper'),
                "consignee" => $this->input->post('consignee'),
                "hawb" => $this->input->post('hawb'),
                "shipper_form" => $this->input->post('shipper_form'),
                "consignee_form" => $this->input->post('consignee_form'),
                "no_of_form" => $this->input->post('no_of_form'),
                "nature_of_goods" => $this->input->post('nature_of_goods'),
                "g_w_form" => $this->input->post('g_w_form'),
                "payment_form" => $this->input->post('payment_form')
            );
            $data = clean_data($data);
            $this->Table_manifest_model->save($data, $id);
        }
        if($status_id==9){

            $config['upload_path'] = APPPATH . './uploads/images/';
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $url_img = $this->input->post('url_img');
            } else {
                $img = $this->upload->data();
                 $url_img = $img['file_name'];
            }

            $id = $this->input->post('id');
            $status_id=$this->input->post('status_id');

            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "code1" => $this->input->post('code1'),
                "code2" => $this->input->post('code2'),
                "code3" => $this->input->post('code3'),
                "code4" => $this->input->post('code4'),
                "logo_img" => $url_img,
                "name" => $this->input->post('name'),
                "shipper" => $this->input->post('shipper'),
                "shipper_number" => $this->input->post('shipper_number'),
                "consignee" => $this->input->post('consignee'),
                "consignee_number" => $this->input->post('consignee_number'),
                "iata_Code" => $this->input->post('iata_code'),
                "account_no" => $this->input->post('account_no'),
                "information" => $this->input->post('information'),
                "airport_departure" => $this->input->post('airport_departure'),
                "currency" => $this->input->post('currency'),
                "chgs_Code" => $this->input->post('chgs_Code'),
                "wt_val" => $this->input->post('wt_val'),
                "other" => $this->input->post('other'),
                "carriage" => $this->input->post('carriage'),
                "customs" => $this->input->post('customs'),
                "airport_of_destination" => $this->input->post('airport_of_destination'),
                "requested_flight_date" => $this->input->post('requested_flight_date'),
                "amount_of_insurance" => $this->input->post('amount_of_insurance'),
                "handling_information" => $this->input->post('handling_information'),
                "pieces_rcp" => $this->input->post('pieces_rcp'),
                "gross_weight" => $this->input->post('gross_weight'),
                "kg_ib" => $this->input->post('kg_ib'),
                "rate_class" => $this->input->post('rate_class'),
                "commodity_item" => $this->input->post('commodity_item'),
                "chargeable_weight" => $this->input->post('chargeable_weight'),
                "rate_charge" => $this->input->post('rate_charge'),
                "total" => $this->input->post('total'),
                "quantity_of_goods" => $this->input->post('quantity_of_goods'),
                "dim" => $this->input->post('dim'),
                "vol" => $this->input->post('vol'),
                "sap_no" => $this->input->post('sap_no'),
                "mark" => $this->input->post('mark'),
                "ciq_no" => $this->input->post('ciq_no'),
                "code" => $this->input->post('code'),
                "qty" => $this->input->post('qty'),
                "total_all" => $this->input->post('total_all'),
                "other_charges" => $this->input->post('other_charges'),
                "weight_charge" => $this->input->post('weight_charge'),
                "valuation_charge" => $this->input->post('valuation_charge'),
                "tax" => $this->input->post('tax'),
                "total_other_agent" => $this->input->post('total_other_agent'),
                "total_other_carrier" => $this->input->post('total_other_carrier'),
                "total_prepaid_collect" => $this->input->post('total_prepaid_collect'),
                "conversion_rates" => $this->input->post('conversion_rates'),
                "charges_at_destination" => $this->input->post('charges_at_destination'),
                "date" => $this->input->post('date')
            );
            $data = clean_data($data);
            $this->Table_mawb_model->save($data, $id);
        }
        if ($status_id==14) {
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "date_time" => $this->input->post('date_time'),
                "send" => $this->input->post('send'),
                "go" => $this->input->post('go'),
                "to" => $this->input->post('to'),
                "goods" => $this->input->post('goods'),
                "mawb" => $this->input->post('mawb'),
                "hawb" => $this->input->post('hawb'),
                "weight" => $this->input->post('weight'),
                "no_of" => $this->input->post('no_of'),
                "shipper" => $this->input->post('shipper'),
                "go_to" => $this->input->post('go_to'),
                "flight" => $this->input->post('flight'),
                "kho" => $this->input->post('kho'),
                "ma_kho" => $this->input->post('ma_kho'),
                "giay" => $this->input->post('giay'),
                "prepaid" => $this->input->post('prepaid'),
                "fees_for_vouchers" => $this->input->post('fees_for_vouchers'),
                "user" => $this->input->post('user'),
            );
            $data = clean_data($data);
            $this->Shint_nhan_model->save($data, $id);
        }


        if ($status_id==15){
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "date" => $this->input->post('date'),
                "from" => $this->input->post('from'),
                "to" => $this->input->post('to'),
                "mawb" => $this->input->post('mawb'),
                "hawb" => $this->input->post('hawb'),
                "no_of_pcs" => $this->input->post('no_of_pcs'),
                "kgs" => $this->input->post('kgs'),
                "tenhang" => $this->input->post('tenhang'),
                "uyquyen" => $this->input->post('uyquyen'),
                "address" => $this->input->post('address')
            );
            $data = clean_data($data);
            $this->Table_uyquyen_model->save($data, $id);
        }

        if ($status_id==20) {
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "date_hn" => $this->input->post('date_hn'),
                "kinh_gui" => $this->input->post('kinh_gui'),
                "thong_bao" => $this->input->post('thong_bao'),
                "cap_cang" => $this->input->post('cap_cang'),
                "commodity" => $this->input->post('commodity'),
                "bill_of_lading" => $this->input->post('bill_of_lading'),
                "form" => $this->input->post('form'),
                "container_seal_no" => $this->input->post('container_seal_no'),
                "weight" => $this->input->post('weight'),
                "measurement" => $this->input->post('measurement'),
                "cang_do_hang" => $this->input->post('cang_do_hang'),
                "kho" => $this->input->post('kho'),
                "ma_kho" => $this->input->post('ma_kho'),
                "giay_gioi_thieu" => $this->input->post('giay_gioi_thieu'),
                "van_don" => $this->input->post('van_don'),
                "cuoc_van_chuyen" => $this->input->post('cuoc_van_chuyen'),
                "phi_chung_tu" => $this->input->post('phi_chung_tu'),
                "handling" => $this->input->post('handling'),
                "phi_cfs" => $this->input->post('phi_cfs'),
                "phi_thc" => $this->input->post('phi_thc'),
                "phi_cic" => $this->input->post('phi_cic'),
                "phi_boc_xep" => $this->input->post('phi_boc_xep'),
                "phi_xang_dau" => $this->input->post('phi_xang_dau'),
                "user" => $this->input->post('user'),
            );
            $data = clean_data($data);
            $this->Livax_nhan_hang_model->save($data, $id);
        }

        if ($status_id==21) {
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "date_hanoi" => $this->input->post('date_hanoi'),
                "to" => $this->input->post('to'),
                "tau" => $this->input->post('tau'),
                "date_time_tau" => $this->input->post('date_time_tau'),
                "mb_no" => $this->input->post('mb_no'),
                "hb_no" => $this->input->post('hb_no'),
                "hang_hoa" => $this->input->post('hang_hoa'),
                "khoi_luong" => $this->input->post('khoi_luong'),
                "container_no" => $this->input->post('container_no'),
                "giao_hang_cho" => $this->input->post('giao_hang_cho'),
                "address" => $this->input->post('address'),
            );
            $data = clean_data($data);
            $this->Livax_giao_hang_model->save($data, $id);
        }

        if ($status_id==22) {
            $data = array(
                "task_id" => $this->input->post('task_id'),
                "status_id" => $this->input->post('status_id'),
                "date_time" => $this->input->post('date_time'),
                "so_phieu" => $this->input->post('so_phieu'),
                "nguoi_nop_phieu" => $this->input->post('nguoi_nop_phieu'),
                "so_van_don" => $this->input->post('so_van_don'),
                "ty_gia" => $this->input->post('ty_gia'),
                "ten_tau" => $this->input->post('ten_tau'),
                "don_gia_1" => $this->input->post('don_gia_1'),
                "so_luong_1" => $this->input->post('so_luong_1'),
                "thanh_tien_1" => $this->input->post('thanh_tien_1'),
                "don_gia_2" => $this->input->post('don_gia_2'),
                "so_luong_2" => $this->input->post('so_luong_2'),
                "thanh_tien_2" => $this->input->post('thanh_tien_2'),
                "don_gia_3" => $this->input->post('don_gia_3'),
                "so_luong_3" => $this->input->post('so_luong_3'),
                "thanh_tien_3" => $this->input->post('thanh_tien_3'),
                "don_gia_4" => $this->input->post('don_gia_4'),
                "so_luong_4" => $this->input->post('so_luong_4'),
                "thanh_tien_4" => $this->input->post('thanh_tien_4'),
                "don_gia_5" => $this->input->post('don_gia_5'),
                "so_luong_5" => $this->input->post('so_luong_5'),
                "thanh_tien_5" => $this->input->post('thanh_tien_5'),
                 "don_gia_6" => $this->input->post('don_gia_6'),
                "so_luong_6" => $this->input->post('so_luong_6'),
                "thanh_tien_6" => $this->input->post('thanh_tien_6'),
                 "don_gia_7" => $this->input->post('don_gia_7'),
                "so_luong_7" => $this->input->post('so_luong_7'),
                "thanh_tien_7" => $this->input->post('thanh_tien_7'),
                "sub_total" => $this->input->post('sub_total'),
                "don_gia_vat" => $this->input->post('don_gia_vat'),
                "total_vat" => $this->input->post('total_vat'),
                "total" => $this->input->post('total'),
                "bang_chu" => $this->input->post('bang_chu'),
            );
            $data = clean_data($data);
            $this->Livax_phieu_thu_model->save($data, $id);
        }



//
//        view pdf
        $this->load->library('Pdf');
        $task_id= $this->input->post('task_id');
        $options = array(
            "task_id" => $task_id,
            "status_id" => $status_id,
        );
        if($status_id==8){
            $vl= $_SESSION["value"];
            if($vl==1||$vl==null){
                $view_data['info1'] =$this->Hd_guihang_ncts_model->get_details($options)->result();
                $html = $this->load->view("projects/template_pdf/shipping_ncts",$view_data, true);
            }
            if($vl==2){
                $view_data['info2'] =$this->Hd_guihang_acsv_model->get_details($options)->result();
                $html = $this->load->view("projects/template_pdf/shipping_acsv",$view_data, true);
            }
            if($vl==3){
                $view_data['info'] =$this->Huongdan_guihang_model->get_details($options)->result();
                $html = $this->load->view("projects/template_pdf/hd_guihang",$view_data, true);
            }
        }
        if($status_id==5){
            $view_data['info'] =$this->Table_booking_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/booking",$view_data, true);
        }
        if($status_id==6){
            $view_data['info'] =$this->Table_hawb_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/hawb-form",$view_data, true);
        }
        if($status_id==7){
            $view_data['info'] =$this->Table_manifest_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/manifest",$view_data, true);
        }
        if($status_id==9){
            $view_data['info'] =$this->Table_mawb_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/mawb-form",$view_data, true);
        }
        if($status_id==10){
            $vl= $_SESSION["value"];
            if($vl==1){
             $view_data['info1'] =$this->Table_debit_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/debit",$view_data, true);
            }
            if($vl==2){
                $view_data['info2'] =$this->Table_debit_fob_chgs_model->get_details($options)->result();
                $html = $this->load->view("projects/template_pdf/debit_fob_chgs",$view_data, true);
            }
        }
        if($status_id==15){
            $view_data['info'] =$this->Table_uyquyen_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/shint_bvt",$view_data, true);
        }
        if($status_id==14){
            $view_data['info'] =$this->Shint_nhan_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/shint_nhan",$view_data, true);
        }
        if ($status_id==20) {
            $view_data['info'] = $this->Livax_nhan_hang_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/livax_nhan_hang",$view_data, true);
        }
        if ($status_id==21) {
            $view_data['info'] = $this->Livax_giao_hang_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/livax_giao_hang",$view_data, true);
        }
        if ($status_id==22) {
            $view_data['info'] = $this->Livax_phieu_thu_model->get_details($options)->result();
            $html = $this->load->view("projects/template_pdf/livax_phieu_thu",$view_data, true);
        }


        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetTitle('My Title');
        $pdf->setImageScale(1.42);
        $pdf->SetTopMargin(0);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->setFooterMargin(5);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('');
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('My-File-Name.pdf', 'I');


    }

}

/* End of file task_status.php */
/* Location: ./application/controllers/task_status.php */