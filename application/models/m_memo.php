<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_memo extends CI_model{

    public function tampildata()
    {
      $query = $this->db->select("*")
        ->from('memo')
        ->order_by('id_memo', 'ASC')
        ->get();
        return $query->result();
       // return $this->db->get('memo');

    }

    public function input_data($data,$table)
    {
         $this->db->insert($table,$data);
    }

    public function hapus_data($where,$table)
    {
         $this->db->where($where);
         $this->db->delete($table);
    }


    //   public function m()
    // {
    //   $data = "SELECT memo.*, user.nama as nama, user.id_user as id_user FROM memo 
    //   LEFT JOIN user ON memo.admin = user.id_user";
    //   return $this->db->query($data)->result();
    // }

    public function getwhere($field, $where, $table)
    {
        $this->db->where($field, $where);
        $query = $this->db->get($table);
        return $query;
    }

    public function update($field, $where, $data, $table)
    {
        $this->db->where($field, $where);
        $this->db->update($table, $data);
    }

     public function gabungann()
    {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->join('memo','memo.user_id=user.id_user');
       $this->db->where('memo.status', 0);
      $this->db->order_by('id_memo','DESC');
      $query = $this->db->get();
      return $query;
    }

     public function limitmemo()
    {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->join('memo','memo.user_id=user.id_user');
      $this->db->order_by('memo.id_memo','DESC');
      $this->db->limit(1);
      $query = $this->db->get();
      return $query->result();
    }





}