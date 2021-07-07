<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_uyquyen extends CI_Migration
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
                    'date' => array(
                        'type' => 'date',
                        'null' => true,
                    ),
                    'mawb' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'null' => true,
                    ),
                    'hawb' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'null' => true,
                    ),
                    'no_of_pcs' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'null' => true,
                    ),
                    'kgs' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'null' => true,
                    ),
                    'tenhang' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'null' => true,
                    ),
                    'uyquyen' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'null' => true,
                    ),
                    'address' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '500',
                        'null' => true,
                    ),


            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('uyquyen_table');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('uyquyen_table');
                }
};
?>
