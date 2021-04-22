<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_barang extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('keranjang_model');
	}
	public function index()
		{
			$data['produk'] = $this->keranjang_model->get_produk_all();
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('admin/data_barang',$data);
			$this->load->view('template/footer');
		}
	public function tambah_aksi()
	{
		$id_produk		= $this->input->post('id_produk');
		$nama_produk	= $this->input->post('nama_produk');
		$deskripsi		= $this->input->post('deskripsi');
		$kategori		= $this->input->post('kategori');
		$harga			= $this->input->post('harga');
		$gambar			= $_FILES['gambar']['name'];
		if ($gambar=''){}else{
			$config ['upload_path'] = './assets/images';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal Di Upload!";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array(
			'id_produk' => $id_produk, 
			'nama_produk' => $nama_produk, 
			'deskripsi' => $deskripsi, 
			'kategori' => $kategori, 
			'harga' => $harga,
			'gambar' => $gambar,  

		);
		$this->keranjang_model->tambah_barang($data, 'tbl_produk');
		redirect('admin/data_barang/index');
		 
	}
	
	public function edit($id_produk)
	{
		$where = array('id_produk'=>$id_produk);
		$data['produk'] = $this->keranjang_model->edit_barang($where,'tbl_produk')->result();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('admin/edit_barang',$data);
			$this->load->view('template/footer');

	}

	public function update(){
		$id_produk		=$this->input->post('id_produk');
		$nama_produk	=$this->input->post('nama_produk');
		$deskripsi		=$this->input->post('deskripsi');
		$kategori		=$this->input->post('kategori');
		$harga			=$this->input->post('harga');

		$data = array(
			'nama_produk'	=>	$nama_produk,
			'deskripsi'		=>	$deskripsi,
			'kategori'		=>	$kategori,
			'harga'			=>	$harga
		);
		$where = array (
			'id_produk'	=> $id_produk
		);
		$this->keranjang_model->update_data($where,$data,'tbl_produk');
		redirect('admin/data_barang/index');
	}

	public function hapus ($id_produk)
	{
		$where = array('id_produk' => $id_produk);
		$this->keranjang_model->hapus_data($where, 'tbl_produk');
		redirect('admin/data_barang/index');
	}
	
}
	

	// public function index()
	// 	{
    //         $data['produk'] = $this->keranjang_model->get_produk_all();
	// 		$data['kategori'] = $this->keranjang_model->get_kategori_all()->result;
    //         // $data['tbl_produk'] = $this->keranjang_model->get_produk_all()->result;
	// 		$this->load->view('template/header');
	// 		$this->load->view('template/sidebar');
	// 		$this->load->view('admin/data_barang',$data);
	// 		$this->load->view('template/footer');
	// 	}
		

