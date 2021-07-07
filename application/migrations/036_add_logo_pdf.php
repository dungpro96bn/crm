<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_logo_pdf extends CI_Migration
{

      public function up(){
             $data = array(
                  
            'logo_name' => 'logo_pdf',
            'logo_value' => 'logo-glx.png',           
            );
             
             $this->db->insert('pdf_logo', $data);
      }

      public function down(){
                  $this->dbforge->drop_table('pdf_logo');
            }

}
?>