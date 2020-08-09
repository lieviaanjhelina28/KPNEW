<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_memos extends CI_model{

    public function tampildata()
    {
      $query = $this->db->select("*")
        ->from('memo')
        ->order_by('id_memo', 'ASC')
        ->get();
        return $query->result();
       // return $this->db->get('memo');

    }
 
    }
}