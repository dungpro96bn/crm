<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_status extends CI_Migration
{
function up(){
                $this->load->dbforge();

                $fields = array(
                    'style' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'status' => array(
                        'type' => 'INT',
                        'null' => true,
                    )
                );

                $this->dbforge->add_column('task_status', $fields);

                $data = array(
                    'status' => '1'
                );

                $this->db->where('id', 1);
                $this->db->update('task_status', $data);

                        }
      public function down()
                {

                    $this->load->dbforge();
                    $this->dbforge->drop_column('task_status', 'style');
                    $this->dbforge->drop_column('task_status', 'status');
                }
};
?>
