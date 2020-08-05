<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_tambah');
    }

    public function index()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tambah'] = $this->m_tambah->tampildata();
        $data['user_role'] = $this->db->get('user_role')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambah');
        $this->load->view('templates/footer');
        } 

    public function add()
    {
         $nama           = $this->input->post('nama');
         $email          = $this->input->post('email');
         $NIK            = $this->input->post('NIK');
         $NPM            = $this->input->post('NPM');
         $role_id        = $this->input->post('role_id');
         $aktif          = $this->input->post('aktif');


         $data = [
            'nama'       => $nama,
            'email'      => $email,
            'NIK'        => $NIK,
            'NPM'        => $NPM,
            'role_id'    => $role_id,
            'aktif'      => $aktif,

                
            ];

            // var_dump($data);
            // die;

            $this->m_tambah->input_data($data,'user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Surat berhasil ditambah!</div>');
            redirect('admin/tambah');
    }
    public function hapus($id_user)
        {
            $where = array('id_user' => $id_user);
            $this->m_tambah->hapus_data($where, 'user');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil di Hapus</div>');
            redirect('admin/tambah');
        }
}
