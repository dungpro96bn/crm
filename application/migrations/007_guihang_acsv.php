<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_guihang_acsv extends CI_Migration
{
function up(){
            $this->dbforge->add_field(array(
                    'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'task_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'status_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb1' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb2' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb3' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb4' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb5' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb6' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb7' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb8' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb9' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb10' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'awb11' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                     'booking_flight' => array(
                    'type' => 'text',
                    'null' => true,
                    ),
                    'date_send' => array(
                        'type' => 'DATE',
                        'null' => true,
                    ),
                    'departure' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'destination' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'routing' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'no_of_pcs' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'gross_weight' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'package' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'commodity_of_goods' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'shipper_name' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'shipper_code' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'payer' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'payer_code' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'consignee' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'no_of_pcs_staff' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'gross_weight_staff' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'special_handing_staff' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'dimensions' => array(
                    'type' => 'text',
                    'null' => true,
                    ),
                    'begin_date' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'finish_date' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'date' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('hd_guihang_acsv');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('hd_guihang_acsv');
                }
};
?>
