<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_logo_pdf extends CI_Migration
{

	public function up(){
		 $this->dbforge->add_field(array(
 			
            'logo_name' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
            'logo_value' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 255,
                  'null' => TRUE,
            ),
           
		));
		 
		 $this->dbforge->create_table('pdf_logo');
	}

	public	function down(){
			$this->dbforge->drop_table('pdf_logo');
		}

}
?>