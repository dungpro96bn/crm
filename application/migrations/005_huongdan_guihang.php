<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_huongdan_guihang extends CI_Migration
{
function up(){
            $this->dbforge->add_field(array(
                    'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
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
                     'shipper' => array(
                    'type' => 'text',
                    'null' => true,
                    ),
                    'ma_daily' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'mst_shipper' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'payer' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'mst_payer' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'consignee' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'awb' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'booking' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'so_kien' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'trong_luong' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'sanbay_khoihanh' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'sanbay_den' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'hanhtrinh' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'loaibaobi' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'ten_hang' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'huongdan_phucvu' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'giatri_vc' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'giatri_haiquan' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'hinhthuc_thanhtoan' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'tongkien_nv' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'trongluong_nv' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'kinhthuoc_nv' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'ma_alsc' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'ma_iata' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'other_sevices' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'start_date' => array(
                        'type' => 'DATE',
                        'null' => true,
                    ),
                    'finish_date' => array(
                        'type' => 'DATE',
                        'null' => true,
                    ),
                    'date' => array(
                        'type' => 'DATE',
                        'null' => true,
                    ),
            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('huongdan_guihang');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('huongdan_guihang');
                }
};
?>
