<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_debitfob_chgs extends CI_Migration
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
                    'no_add' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'date' => array(
                        'type' => 'DATE',
                        'null' => true,
                    ),
                    'messrs_add' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'description' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'air_freight_volume' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'air_freight_rate' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'air_freight_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'x_ray_rate' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'x_ray_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'ams_mawb_rate' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'ams_mawb_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'pick_up_rate' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                     'pick_up_amount' => array(
                    'type' => 'text',
                    'null' => true,
                    ),
                    'customs_export_volume' => array(
                    'type' => 'TEXT',
                    'null' => true,
                    ),
                    'customs_export_rate' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'customs_export_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'airport_teminal_fee_rate' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'airport_teminal_fee_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'airport_handling_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'hawb_fee_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'overtime_charge_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'profit_galaxy_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'profit_for_galaxy_rate' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'profit_for_galaxy_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'total_galaxy' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'in_words_total' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),


            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('debit_fob_chgs_table');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('debit_fob_chgs_table');
                }
};
?>
