<?php

class Table_e_mail_model extends Crud_model {

    private $table = null;

    function __construct() {
        $this->table = 'e_mail';
        parent::__construct($this->table);
    }

    function get_details($options = array()) {
        $table = $this->db->dbprefix('e_mail');
        $where = "";
        $id = get_array_value($options, "id");
        $email_number = get_array_value($options, "email_number");
        $user_id = get_array_value($options, "user_id");

        if ($id) {
            $where = "WHERE $table.id=$id";
        }
        if ($email_number && $user_id) {
            $where = "WHERE $table.email_number=$email_number AND $table.user_id=$user_id";
        }else{ $where = "WHERE $table.user_id=$user_id";}

        $sql = "SELECT * FROM $table  $where ";
        return $this->db->query($sql);
    }
    public function delete($id) {
        $table = $this->db->dbprefix('e_mail');
        $this->db->where('id', $id);
        $this->db->delete($table);

    }
}
