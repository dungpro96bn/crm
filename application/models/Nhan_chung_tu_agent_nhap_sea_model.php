<?php

class Nhan_chung_tu_agent_nhap_sea_model extends Crud_model {

    private $table = null;

    function __construct() {
        $this->table = 'table_nhan_chung_tu_nhap_sea';
        parent::__construct($this->table);
    }

    function get_details($options = array()) {
        $table = $this->db->dbprefix('table_nhan_chung_tu_nhap_sea');
        $where = "";
        $id = get_array_value($options, "id");
        $status_id = get_array_value($options, "status_id");
        $task_id = get_array_value($options, "task_id");


        if ($id) {
            $where = "$table.id=$id";
        }
        if ($status_id&&$task_id) {
            $where = "$table.status_id=$status_id AND $table.task_id=$task_id ";
        }

        $sql = "SELECT * FROM $table WHERE $where ";
        return $this->db->query($sql);
    }

}
