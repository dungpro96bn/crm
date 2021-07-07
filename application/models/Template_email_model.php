<?php 
/**
* 
*/
class Template_email_model extends Crud_model
{
	private $table=null;
	function __construct()
	{
	    $this->table = 'tempalte_email';
		parent::__construct($this->table);

	}

	public function get_details($options = array())
	{
		$table = $this->db->dbprefix('tempalte_email');
        $where = "";
        $id = get_array_value($options, "id");
        $estimates_id = get_array_value($options, "estimate_id");
        if ($id) {
            $where = "$table.id=$id";
        }
        if ($estimates_id) {
            $where = "$table.estimate_id=$estimates_id";
        }
		
		$sql = "SELECT * FROM $table WHERE $where ";
		return $this->db->query($sql);

	}
	
	
}


 ?>