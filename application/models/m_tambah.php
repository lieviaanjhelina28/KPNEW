<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tambah extends CI_model
{



    public function tampildata()
    {
        $query = $this->db->select('*')
            ->from('user')
            ->order_by('id_user', 'ASC')
            ->get();
        return $query->result();
    }

     public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

     public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

     
    public function gabunganv()
    {
        $query = "SELECT `surat`.*, `user_role`.`role`
                  FROM `surat` 
                  JOIN `user_role`
                  ON `surat`.`role_id` = `user_role`.`id`
                ";
        return $this->db->query($query)->result_array();

        //  $this->db->select('*');
        // $this->db->from('user_role');
        // $this->db->join('surat', 'surat.role_id=user_role');
        // $this->db->where('surat.role_id', 2,3);
        // $this->db->order_by('id_surat', 'DESC');
        // $query = $this->db->get();
        // return $query;
    }
    }
