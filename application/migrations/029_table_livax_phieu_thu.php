<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_livax_phieu_thu extends CI_Migration
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
              'null' => TRUE,
            ),
            'so_phieu' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'nguoi_nop_phieu' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'so_van_don' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'ty_gia' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'ten_tau' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'don_gia_1' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'so_luong_1' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'thanh_tien_1' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'don_gia_2' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'so_luong_2' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'thanh_tien_2' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'don_gia_3' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'so_luong_3' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'thanh_tien_3' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'don_gia_4' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'so_luong_4' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'thanh_tien_4' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'don_gia_5' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'so_luong_5' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'thanh_tien_5' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'don_gia_6' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'so_luong_6' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'thanh_tien_6' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'don_gia_7' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'so_luong_7' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'thanh_tien_7' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'sub_total' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'don_gia_vat' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'total_vat' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'total' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),
            'bang_chu' => array(
              'type' => 'VARCHAR',
              'constraint' => 255,
              'null' => TRUE,
            ),

            

		));
		 $this->dbforge->add_key('id', TRUE);
		 $this->dbforge->create_table('livax_phieu_thu');
	}

	public	function down(){
			$this->dbforge->drop_table('livax_phieu_thu');
		}

}
?>