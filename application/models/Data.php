<?php
class Data extends CI_Model
{    
    
  public function add_values($db,$value)
  {
     $this->db->insert($db,$value);
     
  }
}
?>