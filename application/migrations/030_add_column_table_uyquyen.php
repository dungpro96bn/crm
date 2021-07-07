<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_column_table_uyquyen extends CI_Migration
{
    public function up(){
                $this->load->dbforge();

                $fields = array(
                    'from' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'null' => TRUE,
                    ),
                    'to' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'null' => TRUE,
                    ),
                );

                $this->dbforge->add_column('uyquyen_table', $fields);


            }
    public function down()
                {
                    $this->load->dbforge();
                    $this->dbforge->drop_column('uyquyen_table','from','to');
                }
};
?>
