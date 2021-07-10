<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendors extends CI_Controller {

	public function all()
		{

		$jumlah= $this->model_app->view_join_row('users_bisnis','kategori','id_kategori','id_bisnis','ASC');

			$config['base_url'] = base_url().'vendors/all/page/';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 100;

			$config['full_tag_open']    = "<ul class='cp_content color-1'>";
			$config['full_tag_close']   = "</ul>";
			$config['num_tag_open']     = "<li>";
			$config['num_tag_close']    = "</li>";
			$config['cur_tag_open']     = "<li class='active'><a href='#'>";
			$config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
			$config['next_link']        = "<i class='fa fa-angle-right'></i>";
			$config['next_tag_open']    = "<li>";
			$config['next_tagl_close']  = "</li>";
			$config['prev_link']        = "<i class='fa fa-angle-left'></i>";
			$config['prev_tag_open']    = "<li>";
			$config['prev_tagl_close']  = "</li>";
			$config['first_link']       = "<i class='fa fa-angle-left'></i><i class='fa fa-angle-left'></i>";
			$config['first_tag_open']   = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_link']        = "<i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i>";
			$config['last_tag_open']    = "<li>";
			$config['last_tagl_close']  = "</li>";


			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}

			if (is_numeric($dari)) {

				$this->data['promo_stat']   = 'class="active"';
				$this->data['identitas']= $this->model_app->get_by_id_identitas($id='1');
				$this->data['post_bisnis']= $this->model_app->view_join_three_limit('users_bisnis','kategori','kabupaten','harga','id_kategori','id_harga','kabupaten','id','id_bisnis','RANDOM',$dari,$config['per_page']);
        $this->data['post_kategori'] = $this->model_app->view_ordering_limits('kategori','kategori_seo','ASC',$dari,$config['per_page2']);
			}else{
				redirect('main');
			}
			$this->data['identitas']= $this->model_app->get_by_id_identitas($id='1');
			$this->pagination->initialize($config);
			$this->load->view('fronts/vendors/v', $this->data);
		}

	public function read($id)
    	{
            $cap = $this->buat_captcha();
            $this->data['cap_img'] = $cap['image'];
            $this->session->set_userdata('kode_captcha', $cap['word']);
    		$row = $this->model_app->get_by_id_vendors($id);
    		if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}

    		if ($row)
                {
                $this->data['post_v']            = $this->model_app->get_by_id_vendors($id);
    			$this->add_count_vendor($id);
    			$this->data['post_harga']= $this->model_app->view_ones('harga','id_harga','DESC');
    			$this->data['post_projek']= $this->model_app->view_ones('projek','id_projek','DESC');
    			$this->data['submenu'] = "vendors";
    			$this->data['identitas']= $this->model_app->get_by_id_identitas($id='1');
    		    $this->load->view('fronts/vendors/single', $this->data);
    		    }
    		    else
                {
        			$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>Berita tidak ditemukan</b></div>');
              redirect(base_url());
            }
    	}
	public function readprojek($id)
    	{
            $cap = $this->buat_captcha();
            $this->data['cap_img'] = $cap['image'];
            $this->session->set_userdata('kode_captcha', $cap['word']);
    		$row = $this->model_app->get_by_id_projek($id);
    		if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}

    		if ($row)
                {
                $this->data['post_v']            = $this->model_app->get_by_id_projek($id);
    			$this->add_count_projek($id);
    			$this->data['post_harga']= $this->model_app->view_join_ones('users_bisnis','harga','username','id_bisnis','DESC');
    			$this->data['post_projek']= $this->model_app->view_join_ones('users_bisnis','projek','username','id_bisnis','DESC');
    			$this->data['identitas']= $this->model_app->get_by_id_identitas($id='1');
    		    $this->load->view('fronts/vendors/singles', $this->data);
    		    }
    		    else
                {
        			$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>Berita tidak ditemukan</b></div>');
              redirect(base_url());
            }
    	}

    	public function readharga($id)
    	{
            $cap = $this->buat_captcha();
            $this->data['cap_img'] = $cap['image'];
            $this->session->set_userdata('kode_captcha', $cap['word']);
    		$row = $this->model_app->get_by_id_harga($id);
    		if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}

    		if ($row)
                {
                $this->data['post_h']            = $this->model_app->get_by_id_harga($id);
    			$this->add_count_harga($id);
    			$this->data['identitas']= $this->model_app->get_by_id_identitas($id='1');
    			$this->data['submenu'] = "vendors";
    		    $this->load->view('fronts/vendors/hargas', $this->data);
    		    }
    		    else
                {
        			$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>Berita tidak ditemukan</b></div>');
              redirect(base_url());
            }
    	}

		public function kategori()
		{
			$query = $this->model_utama->view_where('kategori',array('kategori_seo' => $this->uri->segment(3)));
			if ($query->num_rows()<=0){
				redirect('main');
			}else{
				$row = $query->row_array();
				$jumlah= $this->model_utama->view_where('users_bisnis',array('id_kategori' => $row['id_kategori']),'id_bisnis','asc')->num_rows();
				$config['base_url'] = base_url().'vendors/kategori/'.$this->uri->segment(3);
				$config['total_rows'] = $jumlah;
				$config['per_page'] = 6;
				$config['per_page2'] = 12;
				$config['full_tag_open']    = "<ul class='cp_content color-1'>";
				$config['full_tag_close']   = "</ul>";
				$config['num_tag_open']     = "<li>";
				$config['num_tag_close']    = "</li>";
				$config['cur_tag_open']     = "<li class='active'><a href='#'>";
				$config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
				$config['next_link']        = "<i class='fa fa-angle-right'></i>";
				$config['next_tag_open']    = "<li>";
				$config['next_tagl_close']  = "</li>";
				$config['prev_link']        = "<i class='fa fa-angle-left'></i>";
				$config['prev_tag_open']    = "<li>";
				$config['prev_tagl_close']  = "</li>";
				$config['first_link']       = "<i class='fa fa-angle-left'></i><i class='fa fa-angle-left'></i>";
				$config['first_tag_open']   = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_link']        = "<i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i>";
				$config['last_tag_open']    = "<li>";
				$config['last_tagl_close']  = "</li>";

				if ($this->uri->segment('4')==''){
					$dari = 0;
				}else{
					$dari = $this->uri->segment('4');
				}
				$data['title'] = "Berita Kategori $row[id_kategori]";
				$data['description'] = description();
				$data['keywords'] = keywords();
				$data['rows'] = $row;

				if (is_numeric($dari)) {
				    $this->data['identitas']= $this->model_app->get_by_id_identitas($id='1');
					$this->data['post_news'] = $this->model_app->view_join_where_kategori('users_bisnis','kategori','harga','kabupaten','id_kategori',array('kategori_seo' => $this->uri->segment(3),'users_bisnis.id_kategori' => $row['id_kategori']),'id_bisnis','RANDOM',$dari,$config['per_page']);
					$this->data['header']   = 'Daftar vendor wedding planner di mantenbaru yang menyediakan jasa wedding organizer yang mempermudah calon pasangan pengantin dalam memilih vendor pernikahan yang tepat';
                    $this->data['post_kategori'] = $this->model_app->view_ordering_limits('kategori','kategori_seo','ASC',$dari,$config['per_page2']);
				}else{
					redirect('main');
				}

				$this->pagination->initialize($config);
				$this->load->view('fronts/vendors/kategori', $this->data);
			}
		}


		public function buat_captcha()
	  {
	    /* memanggil helper captcha dan string */
	    $this->load->helper('captcha');

	    /* menyiapkan data variabel vals melalui array untuk proses pembuatan captcha */
	    $vals = array(
	      /* lokasi gambar captcha, ex: captcha */
	      'img_path'      => './captcha/',
	      /* alamat gambar captcha, ex: www.abcd.com/captcha */
	      'img_url'       => base_url().'captcha/',
	      /* tinggi gambar */
	      'img_height'    => 30,
	      /* waktu berlaku captcha disimpan pada folder aplikasi (100 = dalam detik) */
	      'expiration'    => 100,
	      /* jumlah huruf/ karakter yang ditampilkan */
	      'word_length'   => 5,
	      // pengaturan warna dan background captcha
	      'colors'        => array(
	                          'background' => array(255, 255, 255),
	                          'border' => array(0, 0, 0),
	                          'text' => array(0, 0, 0),
	                          'grid' => array(255, 240, 0)
	                        )
	    );

	    $cap = create_captcha($vals);
	    return $cap;
	  }

		function add_count_projek($id)
 {
		 // load cookie helper
		 $this->load->helper('cookie');
		 // this line will return the cookie which has slug name
		 $check_visitor = $this->input->cookie(urldecode($id), FALSE);
		 // this line will return the visitor ip address
		 $ip = $this->input->ip_address();
		 // if the visitor visit this article for first time then //
		 // //set new cookie and update article_views column ..
		 // //you might be notice we used slug for cookie name and ip
		 // //address for value to distinguish between articles views
		 if ($check_visitor == false) {
				 $cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => time() + 10, "secure" => false);
				 $this->input->set_cookie($cookie);
				 $this->Berita_model->update_counter_projek(urldecode($id));
		 }
 }

 		function add_count_vendor($id)
 {
		 // load cookie helper
		 $this->load->helper('cookie');
		 // this line will return the cookie which has slug name
		 $check_visitor = $this->input->cookie(urldecode($id), FALSE);
		 // this line will return the visitor ip address
		 $ip = $this->input->ip_address();
		 // if the visitor visit this article for first time then //
		 // //set new cookie and update article_views column ..
		 // //you might be notice we used slug for cookie name and ip
		 // //address for value to distinguish between articles views
		 if ($check_visitor == false) {
				 $cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => time() + 10, "secure" => false);
				 $this->input->set_cookie($cookie);
				 $this->Berita_model->update_counter_vendors(urldecode($id));
		 }
 }

	function add_count_harga($id)
 {
		 // load cookie helper
		 $this->load->helper('cookie');
		 // this line will return the cookie which has slug name
		 $check_visitor = $this->input->cookie(urldecode($id), FALSE);
		 // this line will return the visitor ip address
		 $ip = $this->input->ip_address();
		 // if the visitor visit this article for first time then //
		 // //set new cookie and update article_views column ..
		 // //you might be notice we used slug for cookie name and ip
		 // //address for value to distinguish between articles views
		 if ($check_visitor == false) {
				 $cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => time() + 10, "secure" => false);
				 $this->input->set_cookie($cookie);
				 $this->Berita_model->update_counter_harga(urldecode($id));
		 }
 }



}
