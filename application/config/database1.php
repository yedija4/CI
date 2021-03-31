<?php
/**
*
*/
class Praktikum_model extends CI_Model
 {
      Function _construct ()
      {
         parent::_construct
         $this->load->database();
      }
      public function get()
      {
      $query = $this->db->get()
      Return $query->Result_array();
      }
 }
 >?