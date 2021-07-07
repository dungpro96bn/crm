<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_debit extends CI_Migration
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
                    'cgc_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'mawb_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                     'profit_rate' => array(
                    'type' => 'text',
                    'null' => true,
                    ),
                    'profit_amount' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'total_galaxy' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'in_words_total' => array(
                        'type' => 'text',
                        'null' => true,
                    ),


            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('debit_table');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('debit_table');
                }
};
?>
