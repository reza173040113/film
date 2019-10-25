<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mfilm');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil(){
		
		$data['dat'] = $this->Mfilm->tampil_film();
		$this->load->view('vfilm',$data);
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'kode' => $this->input->post("kode"),
			'judul' => $this->input->post("judul"),
			'genre' => $this->input->post("genre"),
			'tahun_terbit' => $this->input->post("tahun_terbit"),
		);
		$this->Mfilm->tambah_data($insert);
		redirect('Film/tampil');
	}

	public function delete_data($kode){
		$this->Mfilm->delete_data($kode);
		redirect('Film/tampil');
	}

	public function ubah($id)
	{
		$data['film'] = $this->Mfilm->getFilmById($id);



		$this->form_validation->set_rules('kode','Kode','required|numeric');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('genre','Genre','required');
		$this->form_validation->set_rules('tahun_terbit','Tahun Terbit','required');

		if($this->form_validation->run()==false){
			$this->load->view('vubah_data',$data);

		}else{

			$this->Mfilm->ubahDataFilm();
			$this->session->set_flashdata('flash','Diubah');
			redirect('Film/tampil');
		}
	}
}
