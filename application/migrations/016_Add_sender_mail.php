<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_sender_mail extends CI_Migration{
    public function up()
    {
        $fields = array(
            'email_sent_from_address2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email_sent_from_name2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email_protocol2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email_smtp_host2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email_smtp_user2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email_smtp_pass2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email_smtp_port2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email_smtp_security_type2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'send_test_mail_to2' => array('type' => 'VARCHAR',
                'constraint' => '50',
            ),
        );
        $this->dbforge->add_column('users', $fields);
    }

}
