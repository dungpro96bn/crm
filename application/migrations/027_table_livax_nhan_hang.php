<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_livax_nhan_hang extends CI_Migration
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
            'date_timer' => array(
            	'type' =>'DATE',
            	'null' => TRUE,
            ),
            'kinh_gui' => array(
            	'type' => 'TEXT',
            	'null' => TRUE,
            ),
            'thong_bao' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'cap_cang' => array(
            	'type' => 'DATE',
            	'null' => TRUE,
            ),
            'commodity' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'bill_of_lading' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'form' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'container_seal_no' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'weight' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'measurement' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'cang_do_hang' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'kho' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'ma_kho' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'giay_gioi_thieu' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'van_don' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ), 
            'cuoc_van_chuyen' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'phi_chung_tu' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'handling' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'phi_cfs' => array(
            	'type' => "VARCHAR",
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'phi_thc' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'phi_cic' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'phi_boc_xep' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'phi_xang_dau' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
            'user' => array(
            	'type' => 'VARCHAR',
            	'constraint' => 200,
            	'null' => TRUE,
            ),
		));
		 $this->dbforge->add_key('id', TRUE);
		 $this->dbforge->create_table('livax_nhan_hang');
	}

	public	function down(){
			$this->dbforge->drop_table('livax_nhan_hang');
		}

}
?>