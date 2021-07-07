<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_e_mail extends CI_Migration
{
function up(){
            $this->dbforge->add_field(array(
                    'id' => array(
                        'type' => 'INT',
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'email_number' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'from_address' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'subject' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'date' => array(
                        'type' => 'DATETIME',
                        'null' => true,
                    ),
                    'body' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'status' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'user_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('e_mail');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('e_mail');
                }
};
?>
