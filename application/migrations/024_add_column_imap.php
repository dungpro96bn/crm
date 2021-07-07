<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_column_imap extends CI_Migration
{
function up(){
                $this->load->dbforge();

                $fields = array(
                    'imap_host' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                );

                $this->dbforge->add_column('users', $fields);

                        }
      public function down()
                {
                    $this->dbforge->drop_column('users', 'imap_host');
                }
};
?>
