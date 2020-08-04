<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_surat');
    }

    public function index()
    {
        $data['title'] = 'Data Surat Dosen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['namas'] = $this->m_surat->tampildata();
        // $data['user_role'] = $this->db->get('user_role')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/data');
        $this->load->view('templates/footer');
        } 

    public function tambah()
    {
         $nama_surat     = $this->input->post('nama_surat');

         $data = [
            'nama_surat' => $nama_surat,
                
            ];

            $this->m_surat->input_data($data,'surat');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Surat berhasil ditambah!</div>');
            redirect('admin/surat');
    }
    public function hapus($id_surat)
        {
            $where = array('id_surat' => $id_surat);
            $this->m_surat->hapus_data($where, 'surat');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil di Hapus</div>');
            redirect('admin/surat');
        }


      public function surat2()
    {
        $data['title'] = 'Data Surat Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['si'] = $this->m_surat->tampildata2();
        // $data['user_role'] = $this->db->get('user_role')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/data2');
        $this->load->view('templates/footer');
        } 

    public function tambah2()
    {
         $surat_mhs     = $this->input->post('surat_mhs');
         $data = [
            'surat_mhs' => $surat_mhs,
                
            ];

            $this->m_surat->input_data2($data,'surat2');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Surat berhasil ditambah!</div>');
            redirect('admin/surat/surat2');
            
    }
    public function hapus2($id_suratmhs)
        {
            $where = array('id_suratmhs' => $id_suratmhs);
            $this->m_surat->hapusdata($where, 'surat2');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil di Hapus</div>');
            redirect('admin/surat/surat2');
        }

        }