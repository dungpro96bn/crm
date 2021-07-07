<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_livax_giao_hang extends CI_Migration
{

	public function up(){
		 $this->dbforge->add_field(array(
 			'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'task_id' => array(
                'type' => 'INT',
                'null' => true,
            ),
            'status_id' => array(
                'type' => 'INT',
                'null' => true,
            ),
            'date_hanoi' => array(
                  'type' => 'DATE',
                  'null' => TRUE,
            ),
            'to' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'tau' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'date_time_tau' => array(
                  'type' => 'DATE',
                  'null' => TRUE,
            ),
            'mb_no' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'hb_no' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'hang_hoa' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'khoi_luong' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'container_no' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'giao_hang_cho' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'address' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            

		));
		 $this->dbforge->add_key('id', TRUE);
		 $this->dbforge->create_table('livax_giao_hang');
	}

	public	function down(){
			$this->dbforge->drop_table('livax_giao_hang');
		}

}
?>