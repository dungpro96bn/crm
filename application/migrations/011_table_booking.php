<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_booking extends CI_Migration
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
                    'to' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'attn' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'date' => array(
                        'type' => 'DATE',
                        'null' => true,
                    ),
                    're' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'total_all' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'flight_from' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'flight_from_1' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'flight_to' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'flight_to_1' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'time_delivery' => array(
                        'type' => 'DATE',
                        'null' => true,
                    ),
                    'cut_off_time' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'warehouse' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'code' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),


            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('booking_table');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('booking_table');
                }
};
?>
