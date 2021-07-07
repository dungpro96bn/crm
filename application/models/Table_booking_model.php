<?php

class Table_booking_model extends Crud_model {

    private $table = null;

    function __construct() {
        $this->table = 'booking_table';
        parent::__construct($this->table);
    }

    function get_details($options = array()) {
        $table = $this->db->dbprefix('booking_table');
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
