<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_form_email extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE,
                        ),
                        'estimate_id' => array(
                            'type' => 'INT',
                            'null' => true,
                        ),
                        'code_air' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'awb_fee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                            'null' => true,
                        ),
                        'airport_terminal_fee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                            'null' => true,
                        ),
                        'customs_export' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                            'null' => true,
                        ),
                        'airport_handing_fee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                            'null' => true,
                        ),
                        'fumigation_fee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                            'null' => true,
                        ),
                        'pick_up' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                            'null' => true,
                        ),

                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('tempalte_email');
        }

        public function down()
        {
                $this->dbforge->drop_table('tempalte_email');
        }
}