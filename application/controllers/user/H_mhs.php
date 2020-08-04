<?php
defined('BASEPATH') or exit('No direct script access allowed');



class H_mhs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('auth');
			$this->load->model('mahasiswa_m');
		}
	}
	public function index()
	{
		$data['title'] = 'Halaman Awal';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/user_topbar', $data);


		$this->load->view('user/home_mhs', $data);
		$this->load->view('templates/footer');
	}

	 public function download($nama)
        {

            $name = $nama;
            $data = file_get_contents('assets/files/' . $nama);
            force_download($name, $data);

            //     $this->load->library('zip'); //untuk mengkonversi kedalam zip
            //     $file_path = 'assets/files/';
            //     $zip_file_name ='Download';
            //     $selected_files = $_POST['files'];
            //     foreach($selected_files as $key=>$file)
            // {
            //     $this->zip->read_file($file_path.$file);
            // }
            // $this->zip->download($zip_file_name);


            // force_download('assets/files/surat.docx', NULL);
            // redirect('admin/data_dosen');

        }
}
