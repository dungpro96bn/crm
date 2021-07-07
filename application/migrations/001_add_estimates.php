<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_estimates extends CI_Migration
{
function up(){
                $this->load->dbforge();

                $fields = array(
                    'title' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'project_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'assign_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                );

                $this->dbforge->add_column('estimates', $fields);


            }
      public function down()
                {

                    $this->load->dbforge();

                    $this->dbforge->drop_column('estimates', 'project_id');
                    $this->dbforge->drop_column('estimates', 'assign_id');
                    $this->dbforge->drop_column('estimates', 'title');
                }
};
?>
