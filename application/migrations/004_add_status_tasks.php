<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_status_tasks extends CI_Migration
{
    function up()
    {
        $this->load->dbforge();

        $data = array(
            array(
                'title' => 'Xuat Air',
                'key_name' => '0',
                'color' => '#33CC33',
                'sort' => '0',
                'deleted' => '0',
                'status' => '1',
                'style' => '1'
            ),
            array(
                'title' => 'Booking',
                'key_name' => '0',
                'color' => '#CCCCFF',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '1'
            ),
            array(
                'title' => 'HAWB',
                'key_name' => '0',
                'color' => '#99CCFF',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '1'
            ),
            array(
                'title' => 'MANIFEST',
                'key_name' => '0',
                'color' => '#66CCFF',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '1'
            ),
            array(
                'title' => 'Phieu Can',
                'key_name' => '0',
                'color' => '#33CCFF',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '1'
            ),
            array(
                'title' => 'MAWB',
                'key_name' => '0',
                'color' => '#00CCFF',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '1'
            ),
            array(
                'title' => 'DEBIT',
                'key_name' => '0',
                'color' => '#00CC33',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '1'
            ),
            array(
                'title' => 'Nhap Air',
                'key_name' => '0',
                'color' => '#FFFF00',
                'sort' => '0',
                'deleted' => '0',
                'status' => '1',
                'style' => '2'
            ),
            array(
                'title' => 'Nhan Chung Tu Tu Agent',
                'key_name' => '0',
                'color' => '#009900',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '2'
            ),
            array(
                'title' => 'Kho Kang Gui Bao Hang',
                'key_name' => '0',
                'color' => '#008800',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '2'
            ),
            array(
                'title' => 'Lam Bao Hang Gui Khach',
                'key_name' => '0',
                'color' => '#007700',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '2'
            ),
            array(
                'title' => 'Lam Uy Quyen/Lenh',
                'key_name' => '0',
                'color' => '#006600',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '2'
            ),
            array(
                'title' => 'Len Hoa Don Thu Phi Chung Tu',
                'key_name' => '0',
                'color' => '#00FFCC',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '2'
            ),
            array(
                'title' => 'Nhap Sea',
                'key_name' => '0',
                'color' => '#00CC00',
                'sort' => '0',
                'deleted' => '0',
                'status' => '1',
                'style' => '3'
            ),
            array(
                'title' => 'Nhan Chung Tu Tu Agent',
                'key_name' => '0',
                'color' => '#0000FF',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '3'
            ),
            array(
                'title' => 'Hang Tau Gui Bao Hang',
                'key_name' => '0',
                'color' => '#0000AA',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '3'
            ),
            array(
                'title' => 'Lam Bao Hang Gui Khach',
                'key_name' => '0',
                'color' => '#002200',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '3'
            ),
            array(
                'title' => 'Lam Uy Quyen/Lenh',
                'key_name' => '0',
                'color' => '#000033',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '3'
            ),
            array(
                'title' => 'Len Hoa Don Thu Phi Chung Tu',
                'key_name' => '0',
                'color' => '#660000',
                'sort' => '0',
                'deleted' => '0',
                'status' => '0',
                'style' => '3'
            ),
            array(
                'title' => 'Xuat Sea',
                'key_name' => '0',
                'color' => '#00CC66',
                'status' => '1',
                'sort' => '0',
                'deleted' => '0',
                'status' => '1',
                'style' => '4'
            )
        );

            $this->db->insert_batch('task_status', $data);


    }
    public function down()
    {

        $this->load->dbforge();
        $this->dbforge->drop_column('task_status', 'style');
        $this->dbforge->drop_column('task_status', 'status');
    }
}

;

?>
