<?php
class Data extends CI_Model
{    
    
  public function add_values($db,$value)
  {
     $this->db->insert($db,$value);
     return ($this->db->affected_rows() > 0) ? true:false;
     
  }
}
?>