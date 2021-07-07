<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_price_table_email extends CI_Migration {

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
                        'a_l' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => true,
                        ),
                        'kg_45' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => true,
                        ),
                        'kg_100' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => true,
                        ),
                        'kg_300' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'kg_500' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'kg_1000' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'myc_iss' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'scc' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'cgc' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'awb' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'routing' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        'frequency' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                            'null' => true,
                        ),
                        't_t' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                         'null' => true,
                    ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('price_table_email');
        }

        public function down()
        {
                $this->dbforge->drop_table('price_table_email');
        }
}