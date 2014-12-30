<?php
Class Edito_model extends CI_Model
{
	
	public function insert_file($filename,$name_edito, $name_serie, $publication,$photographer,$hair,$makeup,$stylist,$sexe)
    {
        $data = array(
        	'name_edito' 		=> $name_edito,
        	'name_serie'		=> $name_serie,
        	'publication'		=> $publication,
        	'photographer'		=> $photographer,
        	'hair'				=> $hair,
        	'makeup'			=> $makeup,
        	'stylist'			=> $stylist,
        	'sexe'				=> $sexe,
            'filename'      	=> $filename
          
        );
        $this->db->insert('edito', $data);
        
    }
}
?>
