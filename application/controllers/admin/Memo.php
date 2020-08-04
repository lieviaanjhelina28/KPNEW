<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Memo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_memo');
    }



    public function index()
    {
        $data['title'] = 'memo';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['memo'] = $this->m_memo->tampildata();
         $data['memo2'] = $this->m_memo->gabungann();

         $data['memo3'] = $this->m_memo->getwhere('status',0,'memo')->result();
        $data['bb'] = $this->m_memo->getwhere('status',0,'memo')->num_rows();

          $this->form_validation->set_rules('nama','nama','required|trim', [

                'required' => 'Nama harus di isi!'
        ]);

         $this->form_validation->set_rules('pesan','pesan','required|trim', [

                'required' => 'Pesan harus di isi!'
        ]);

 if($this->form_validation->run() == false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('admin/vmemo',$data);
            $this->load->view('templates/footer');
     }else{

      $data = [
            'user_id'=>$this->session->userdata('id_user'),
            'nama' => $this->input->post('nama'),
            'pesan' => $this->input->post('pesan')

      ];
      $this->db->insert('memo', $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert" class="text-center">memo berhasil dikirim</div>');
            redirect('admin/memo');
        }


     }


//      public function tambah()
//     {
//         $pesan= $this->input->post('pesan');

//          $data = array
//         (
//             'user_id'=>$this->session->userdata('id_user'),
//             'pesan' => $pesan,
         
//               );

//         $this->m_memo->input_data($data,'memo');
//              $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">memo berhasil ditambah</div>');
//         redirect('admin/memo');

// }
      public function hapus($id_memo)
{
    $where = array ('id_memo' => $id_memo);
    $this->m_memo->hapus_data($where, 'memo');
         $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">memo berhasil dihapus</div>');
    redirect('admin/memo');
   
}
 public function memo_selesai()
    {
         $data['title'] = 'Selesai';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    // $id_mhs = $id;
    // $where   = array('id_mhs' => $id_mhs);
    $data    = $this->input->post();
    // unset($data['id_mhs']);
    $update   = array(
        'status' => $this->input->post('status')
    );
    // $where = array ('id_mhs' => $id_mhs);
    // $this->m_memo->selesai($where, 'form_mahasiswa');
    //      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Sudah Selesai</div>');
    $this->m_memo->update('id_memo',$data['id'],$update,'memo');
    echo json_encode('success');
    // redirect('admin/form_mahasiswa');
}

 public function get_memo()
    {
        $this->db->select('COUNT(id_memo) as jumlah')->from('memo');
        $this->db->where("status", 0);
        $data = $this->db->get()->row_array();
        echo json_encode($data);
    }

    public function memos()
    {
       $data['memo'] = $this->m_memo->limitmemo();
       $data['jumlah_memo'] = $this->m_memo->gabungann()->num_rows();
       echo json_encode($data);
    }

public function cektotalmemo()
{
    $data = $this->m_memo->getwhere('status',0,'memo')->num_rows();
    // print_r($data); 
    echo json_encode($data);
}

public function cekseluruhmemo()
{
    $data = $this->m_memo->getwhere('status',0,'memo')->row_array();
    // print_r($data); 
    echo json_encode($data);
}

}

