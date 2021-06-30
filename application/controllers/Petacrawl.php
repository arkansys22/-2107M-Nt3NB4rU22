<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus diawali dengan kapital, walaupun nama file semua kecil
class Petacrawl extends CI_Controller {

 public function index(){
     $this->load->helper('url');
     $this->load->model('Sitemap_model');
     $data['datavendors'] = $this->Sitemap_model->generate_bisnis('users_bisnis');
     $data['dataprojek'] = $this->Sitemap_model->generate_projek('projek');
     $data['dataharga'] = $this->Sitemap_model->generate_harga('harga');
     $data['dataartikel'] = $this->Sitemap_model->generate('blogs_tbl');
     $data['katvendor'] = $this->Sitemap_model->generate_kategori('kategori');
     $data['katblogs'] = $this->Sitemap_model->generate_kategori('kategori_blogs');
     
     $this->load->view('v_sitemap',$data);
 }

}
