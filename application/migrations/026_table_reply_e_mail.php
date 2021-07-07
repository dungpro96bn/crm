<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_reply_e_mail extends CI_Migration
{
function up(){
            $this->dbforge->add_field(array(
                    'id' => array(
                        'type' => 'INT',
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'from' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'to' => array(
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
                    'reply_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'user_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('reply_mail');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('reply_mail');
                }
};
?>
