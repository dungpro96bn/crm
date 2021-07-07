<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_form_email extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE,
                        ),
                        'code_air' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'al_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_45_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_100_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_300_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_500_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_1000_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'myc_iss_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'scc_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'cgc_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'awb_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'routing_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'frequency_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'tt_1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'al_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_45_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_100_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_300_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_500_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'kg_1000_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'myc_iss_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'scc_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'cgc_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'awb_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'routing_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'frequency_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'tt_2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'awb_fee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'airport_terminal_fee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'customs_export' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'airport_handing_fee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'fumigation_fee' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'pick_up' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),

                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('form_email_tempalte');
        }

        public function down()
        {
                $this->dbforge->drop_table('form_email_tempalte');
        }
}