<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_rate extends CI_Migration
{
function up(){
                $this->load->dbforge();

                $fields = array(
                    'rate_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                );

                $this->dbforge->add_column('estimate_items', $fields);


            }
      public function down()
                {
                    $this->load->dbforge();
                    $this->dbforge->drop_column('estimate_items','rate_id');
                }
};
?>
