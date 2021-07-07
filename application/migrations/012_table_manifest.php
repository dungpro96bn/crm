<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_manifest extends CI_Migration
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
                    'from' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'mawb' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'no_of_pcs' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'to' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'flight_no' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'shipper' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'consignee' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'hawb' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'shipper_form' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'consignee_form' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'no_of_form' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'nature_of_goods' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'g_w_form' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'payment_form' => array(
                        'type' => 'TEXT',
                        'null' => true,
                ),


            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('manifest_table');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('manifest_table');
                }
};
?>
