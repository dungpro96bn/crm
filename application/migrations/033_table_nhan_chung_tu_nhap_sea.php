<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_nhan_chung_tu_nhap_sea extends CI_Migration
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
                    'name_file' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),

            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('table_nhan_chung_tu_nhap_sea');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('table_nhan_chung_tu_nhap_sea');
                }
};
?>
