<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_shint_nhan_hang extends CI_Migration
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
            'date_time' => array(
              'type' => 'DATE',
              'null' => true,
            ),
            'send' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'go' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'to' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'goods' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'mawb' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'hawb' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'weight' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'no_of' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'shipper' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'go_to' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'flight' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'kho' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'ma_kho' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'giay' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'prepaid' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'fees_for_vouchers' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),
            'user' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'null' => true,
            ),

		));
		 $this->dbforge->add_key('id', TRUE);
		 $this->dbforge->create_table('shint_nhan');
	}

	public	function down(){
			$this->dbforge->drop_table('shint_nhan');
		}

}
?>