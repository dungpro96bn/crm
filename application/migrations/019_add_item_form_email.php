<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_item_form_email extends CI_Migration{	
	
	function up(){
        $data = array(
            'code_air' => "HAN - JNB",
            'al_1' => "EY",
            'kg_45_1' => "5.4",
            'kg_100_1' => "4.75",
            'kg_300_1' => "4.65",
            'kg_500_1' => "3.45",
            'kg_1000_1' => "3.35",
            'myc_iss_1' => "ALL IN",
            'scc_1' => "0.019",
            'cgc_1' => "10",
            'awb_1' => "2",
            'routing_1' => "HAN-AUH-JNB",
            'frequency_1' => "D2.4.6.7",
            'tt_1' => "5-7 DAYS",
            'al_2' => "QR",
            'kg_45_2' => "5.05",
            'kg_100_2' => "4.65",
            'kg_300_2' => "4.25",
            'kg_500_2' => "3.65",
            'kg_1000_2' => '3.55',
            'myc_iss_2' => "ALL IN",
            'scc_2' => "0.017",
            'cgc_2' => "10",
            'awb_2' => "5",
            'routing_2' => "HAN-DOH-JNB",
            'frequency_2' => "DAILY",
            'tt_2' => "5-6 DAYS",
            'awb_fee' => "USD 20.00",
            'airport_terminal_fee' => "USD 0.15/k (Min USD 15)",
            'customs_export' => "USD 50.00",
            'airport_handing_fee' => "USD 20.00",
            'fumigation_fee' => "USD 35.00",
            'pick_up' => "USD 110.00 for + 100k upto 1000k, USD 55 for +45k",
             
        );

        $this->db->insert("form_email_tempalte", $data);       
    }

    public function down()
        {
                $this->dbforge->drop_table('form_email_tempalte');
        }
}

 ?>