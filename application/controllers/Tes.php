<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {
	public function index()
	{
	    $this->data['identitas']= $this->model_app->get_by_id_identitas($id='1');
		$this->data['header']   = 'Mantenbaru Wedding Organizer - Mempermudah Calon Pasangan Pengantin Dalam Memilih Vendor Pernikahan Yang Tepat Demi Terwujudnya Pernikahan Yang Sangat Istimewa Sehingga Menciptakan Keluarga Yang Bahagia Selamanya';
		$this->data['post_news']= $this->model_app->view_join_three('harga','users_bisnis','kategori','kabupaten','id_harga','DESC');
		$this->data['post_artikel']= $this->model_app->view_join_one_limit('blogs_tbl','kategori_blogs','id_kategori','id_berita','DESC');
        $this->data['post_kategori'] = $this->model_app->view_ordering_limits('kategori','kategori_seo','ASC',$dari,$config['per_page2']);
		$this->load->view('fronts/beranda/v', $this->data);
	}
	public function about()
	{
		$this->load->view('fronts/aboutz/v');
	}
}
