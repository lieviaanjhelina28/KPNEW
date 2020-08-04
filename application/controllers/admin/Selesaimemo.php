 <?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Selesaimemo extends CI_Controller 
{
		public function __construct()
	{
		parent::__construct();
            is_logged_in();
             $this->load->model('m_memo');

   }

            // $this->load->library('form_validation');
        
        
      public function index()
    {

    $data['title'] = 'Memo Selesai';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
     // $data['selesaimahasiswa'] = $this->m_mahasiswa->selesai()->result();

      $data['selesai'] = $this->m_memo->getwhere('status',1,'memo')->result();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
       $this->load->view('templates/topbar',$data);
        $this->load->view('admin/vmemoselesai',$data);
        $this->load->view('templates/footer');


    // $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data telah selesai dikerjakan</div>');
    //     redirect('admin/Form_mahasiswa');

        
}

  public function hapus($id_memo)
{
    $where = array ('id_memo' => $id_memo);
    $this->m_memo->hapus_data($where, 'memo');
         $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
    redirect('admin/vmemoselesai');
   
}
}
