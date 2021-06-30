<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Controller {

	function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model('Berita_model');
		$this->load->model('Video_model');
		$this->load->model('Tag_model');

    /* memanggil function dari masing2 model yang akan digunakan */

  }

	public function read($id)
	{
    /* menyiapkan data yang akan disertakan/ ditampilkan pada view */
		$this->data['title'] = "Portal Berita CI";

    /* memanggil function buat_captcha */
    $cap = $this->buat_captcha();
    $this->data['cap_img'] = $cap['image'];
    $this->session->set_userdata('kode_captcha', $cap['word']);

    /* mengambil data berdasarkan id */
		$row = $this->Berita_model->get_by_id($id);

    /* melakukan pengecekan data, apabila ada maka akan ditampilkan */
		if ($row)
    {
      /* memanggil function dari masing2 model yang akan digunakan */
				$page1 = 'Y';
				$this->data['post_new_random'] 						= $this->Berita_model->get_all_rand2();
				$this->data['post_popular'] 						= $this->Berita_model->get_all_popular();

				$this->data['post_nasional'] 						= $this->Berita_model->get_all_ambon($ambon);
				$this->data['post_utama'] 						= $this->Berita_model->get_all_utama($utama);
				$this->data['post_utama1'] 						= $this->Berita_model->get_all_utama1($utama,'id_berita','DESC',0,3);

				$this->data['post_pilihan'] 						= $this->Berita_model->get_all_pilihan();


				$this->data['post_nasional'] 						= $this->Berita_model->get_all_nasional($nasional);
				$this->data['post_nasional_2'] 						= $this->Berita_model->get_all_nasional_2($nasional,'id_berita','DESC',1,4);
				$this->data['post_daerah'] 						= $this->Berita_model->get_all_daerah($daerah);
				$this->data['post_daerah_2'] 						= $this->Berita_model->get_all_daerah_2($daerah,'id_berita','DESC',1,4);
				$this->data['post_olahraga'] 						= $this->Berita_model->get_all_olahraga($olahraga);
				$this->data['post_olahraga_2'] 						= $this->Berita_model->get_all_olahraga_2($olahraga,'id_berita','DESC',1,3);
				$this->data['post_wisata'] 						= $this->Berita_model->get_all_wisata($wisata);
				$this->data['post_wisata_2'] 						= $this->Berita_model->get_all_wisata_2($wisata,'id_berita','DESC',1,2);
				$this->data['post_terbaru'] 						= $this->Berita_model->get_all_new_home();
				$this->data['post_terbaru2'] 						= $this->Berita_model->get_all_new_home2('id_berita','DESC',2,3);

				$this->data['get_all_tag_sidebar'] = $this->Tag_model->get_all_tag_sidebar();
				$this->data['post_new_video'] 						= $this->Video_model->get_all_new_video();



		    	$this->data['post_new_random'] 						= $this->Berita_model->get_all_random();
          $this->data['berita']            = $this->Berita_model->get_by_id($id);
		    	$this->add_count($id);

      /* memanggil view yang telah disiapkan dan passing data dari model ke view*/
			$this->load->view('fronts/singel/vsingel', $this->data);
		}
		else
    {
			$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>Berita tidak ditemukan</b></div>');
      redirect(base_url());
    }
	}
	public function video($id)
	{
		/* menyiapkan data yang akan disertakan/ ditampilkan pada view */
		$this->data['title'] = "Portal Berita CI";

		/* memanggil function buat_captcha */
		$cap = $this->buat_captcha();
		$this->data['cap_img'] = $cap['image'];
		$this->session->set_userdata('kode_captcha', $cap['word']);

		/* mengambil data berdasarkan id */
		$page1 = 'Y';
		$row = $this->Video_model->get_by_id($id);

		/* melakukan pengecekan data, apabila ada maka akan ditampilkan */
		if ($row)
		{
			/* memanggil function dari masing2 model yang akan digunakan */
			$this->data['post_terbaru'] 						= $this->Berita_model->get_all_new_home();
			$this->data['post_new_random'] 						= $this->Berita_model->get_all_random();

			$this->data['berita']            = $this->Video_model->get_by_id($id);

			/* memanggil view yang telah disiapkan dan passing data dari model ke view*/
			$this->load->view('fronts/video/singel/vsingel', $this->data);
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>Berita tidak ditemukan</b></div>');
			redirect(base_url());
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

  public function komen($id)
  {
    /* set aturan form validasi pada form */
    $this->form_validation->set_rules('kode_captcha', 'Kode Captcha', 'required|callback_cek_captcha');

    /* memanggil function dari masing2 model yang akan digunakan */
    $this->data['berita']                   = $this->Berita_model->get_by_id($id);
    $this->data['get_komentar']             = $this->Berita_model->get_komentar($id);
    $this->data['get_all_random']           = $this->Berita_model->get_all_random();

    /* pengecekan form_validation */
    if ($this->form_validation->run() === FALSE)
    {
      /* buat captcha */
      $cap = $this->buat_captcha();
      $this->data['cap_img'] = $cap['image'];
      $this->session->set_userdata('kode_captcha', $cap['word']);

      $this->load->view('front/berita/body', $this->data);
    }
      else
      {
        /* menyiapkan/ menyimpan data ke dalam array */
        $data = array(
          'id_berita'     => $this->input->post('id_berita'),
          'isi_komentar'  => $this->input->post('isi_komentar'),
          'nama'          => $this->session->userdata('identity'),
          'status'        => 'tidak'
        );

        /* proses insert ke database melalui function yang ada pada model */
        $this->Berita_model->insert_komentar($data);

        /* menghapus session captcha */
        $this->session->unset_userdata('kode_captcha');

        /* membuat notifikasi pada halaman yang dituju */
        $this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>Komentar berhasil terkirim dan akan diverifikasi Admin terlebih dahulu</b></div>');

        redirect(base_url());
      }
  }

  public function cek_captcha($input)
  {
    /* pengecekan hasil input captcha */
    if($input === $this->session->userdata('kode_captcha'))
    {
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('cek_captcha', '%s yang anda input salah!');
      $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert">', '</div>');
      return FALSE;
    }
  }

	public function cari_berita()
  {
    /* menyiapkan data yang akan disertakan/ ditampilkan pada view */
  	$this->data['page'] = 'Hasil Pencarian Anda';

		$page1 = 'Y';
    /* memanggil function dari model yang akan digunakan */
    $this->data['hasil_pencarian'] = $this->Berita_model->get_cari_berita();
		$this->data['post_new_random'] 						= $this->Berita_model->get_all_random();


    /* memanggil view yang telah disiapkan dan passing data dari model ke view*/
    $this->load->view('fronts/pencarian/vcari', $this->data);
  }
	public function news()
	{
		$this->load->library('pagination');

		/* menghitung jumlah total data */
		$jumlah = $this->Berita_model->total_rows();

		// Mengatur base_url
		$config['base_url'] = base_url().'berita/news/halaman/';
		//menghitung total baris
		$config['total_rows'] = $jumlah;
		//mengatur total data yang tampil per halamannya
		$config['per_page'] = 3;
		// tag pagination bootstrap
		$config['full_tag_open']    = "<ul class='pagination'>";
		$config['full_tag_close']   = "</ul>";
		$config['num_tag_open']     = "<li>";
		$config['num_tag_close']    = "</li>";
		$config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
		$config['next_link']        = "Selanjutnya";
		$config['next_tag_open']    = "<li>";
		$config['next_tagl_close']  = "</li>";
		$config['prev_link']        = "Sebelumnya";
		$config['prev_tag_open']    = "<li>";
		$config['prev_tagl_close']  = "</li>";
		$config['first_link']       = "Awal";
		$config['first_tag_open']   = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_link']        = 'Terakhir';
		$config['last_tag_open']    = "<li>";
		$config['last_tagl_close']  = "</li>";

		// mengambil uri segment ke-4
		$dari = $this->uri->segment('4');
		/* memanggil model untuk ditampilkan pada masing2 modul*/
		$this->data['post_new_random'] 						= $this->Berita_model->get_all_random();
		$this->data['post_terbaru'] 						= $this->Berita_model->get_all_news($config['per_page'],$dari);
		$this->pagination->initialize($config);
		$this->load->view('fronts/news/vnews', $this->data);
	}
	public function kategori(){
		$query = $this->model_utama->view_where('kategori',array('kategori_seo' => $this->uri->segment(3)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('berita',array('id_kategori' => $row['id_kategori']))->num_rows();
			$config['full_tag_open']    = "<ul class='pagination'>";
			$config['full_tag_close']   = "</ul>";
			$config['num_tag_open']     = "<li>";
			$config['num_tag_close']    = "</li>";
			$config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
			$config['next_link']        = "Selanjutnya";
			$config['next_tag_open']    = "<li>";
			$config['next_tagl_close']  = "</li>";
			$config['prev_link']        = "Sebelumnya";
			$config['prev_tag_open']    = "<li>";
			$config['prev_tagl_close']  = "</li>";
			$config['first_link']       = "Awal";
			$config['first_tag_open']   = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_link']        = 'Terakhir';
			$config['last_tag_open']    = "<li>";
			$config['last_tagl_close']  = "</li>";
			$config['base_url'] = base_url().'berita/kategori/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 2;

			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Berita Kategori $row[id_kategori]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			$page1 = 'Y';
			$nasional = '61';
				$daerah = '63';
				$olahraga = '2';
				$politik = '22';
				$wisata = '44';
				$utama='1';


			if (is_numeric($dari)) {

				$data['get_all_tag_sidebar'] = $this->Tag_model->get_all_tag_sidebar();
				$data['post_pilihan'] 						= $this->Berita_model->get_all_pilihan();
				$data['post_popular'] 						= $this->Berita_model->get_all_popular();

				$data['beritakategori'] = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.status' => 'Y','berita.id_kategori' => $row['id_kategori']),'id_berita','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->load->view('fronts/kategori/vkategori', $data);
		}
	}
	public function tag(){
		$query = $this->model_utama->view_where('tag',array('tag_seo' => $this->uri->segment(3)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->db->query("SELECT * FROM vendor_tbl where tag LIKE '%$row[tag_seo]%'")->num_rows();
			$config['full_tag_open']    = "<ul class='pagination'>";
			$config['full_tag_close']   = "</ul>";
			$config['num_tag_open']     = "<li>";
			$config['num_tag_close']    = "</li>";
			$config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
			$config['next_link']        = "Selanjutnya";
			$config['next_tag_open']    = "<li>";
			$config['next_tagl_close']  = "</li>";
			$config['prev_link']        = "Sebelumnya";
			$config['prev_tag_open']    = "<li>";
			$config['prev_tagl_close']  = "</li>";
			$config['first_link']       = "Awal";
			$config['first_tag_open']   = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_link']        = 'Terakhir';
			$config['last_tag_open']    = "<li>";
			$config['last_tagl_close']  = "</li>";
			$config['base_url'] = base_url().'vendor/tag/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 3;
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Berita Tag $row[nama_tag]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			$page1 = 'Y';
			$nasional = 'Nasional';
			$daerah = 'Daerah';
			$olahraga = 'Olahraga';
			$politik = 'Politik';
			$wisata = 'wisata';
			$utama='Berita Utama';
			if (is_numeric($dari)) {
				$data['post_new_random'] 	= $this->Berita_model->get_all_random();
				$data['post_utama'] 						= $this->Berita_model->get_all_utama($utama);
				$data['post_utama1'] 						= $this->Berita_model->get_all_utama1($utama,'id_berita','DESC',0,3);
				$data['post_pilihan'] 						= $this->Berita_model->get_all_pilihan();

				$data['post_nasional'] 						= $this->Berita_model->get_all_nasional($nasional);
				$data['post_nasional_2'] 						= $this->Berita_model->get_all_nasional_2($nasional,'id_berita','DESC',1,4);
				$data['post_daerah'] 						= $this->Berita_model->get_all_daerah($daerah);
				$data['post_daerah_2'] 						= $this->Berita_model->get_all_daerah_2($daerah,'id_berita','DESC',1,4);
				$data['post_olahraga'] 						= $this->Berita_model->get_all_olahraga($olahraga);
				$data['post_olahraga_2'] 						= $this->Berita_model->get_all_olahraga_2($olahraga,'id_berita','DESC',1,3);
				$data['post_wisata'] 						= $this->Berita_model->get_all_wisata($wisata);
				$data['post_wisata_2'] 						= $this->Berita_model->get_all_wisata_2($wisata,'id_berita','DESC',1,2);
				$data['post_terbaru'] 						= $this->Berita_model->get_all_new_home();
				$data['post_terbaru2'] 						= $this->Berita_model->get_all_new_home2('id_berita','DESC',2,3);
				$data['post_popular'] 						= $this->Berita_model->get_all_popular();

				$data['get_all_tag_sidebar'] = $this->Tag_model->get_all_tag_sidebar();
				$data['post_new_video'] 						= $this->Video_model->get_all_new_video();


				$data['beritatag'] = $this->db->query("SELECT vendor_tbl.*, users.nama_lengkap, kategori.nama_kategori, kategori.kategori_seo FROM vendor_tbl
															left join users on vendor_tbl.username=users.username
																left join kategori on vendor_tbl.id_kategori=kategori.id_kategori
																	WHERE  vendor_tbl.status='Y' AND vendor_tbl.tag LIKE '%$row[tag_seo]%'
																		ORDER BY id_berita DESC LIMIT $dari,$config[per_page]");
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->load->view('fronts/tags/vtags', $data);
		}
	}

	public function videos()
	  {
	 	 $this->load->model('Berita_model');
	 	 $this->load->model('Video_model');
	 	 $this->load->model('Kategori_model');

	 	 $this->load->library('pagination');
	 	 $jumlah_data = $this->Video_model->get_count_new_video();
	 	 //$config['full_tag_open']="<li>";
	 	 //$config['full_tag_close']="</li>";
	 	 $config['attributes'] = array('class' => 'page-numbers')	;
	 	 //$config['prev_tag_open'] = '<a class="prev page-numbers" href="#">';
	 	 //$config['prev_tag_close'] = '</a>';
	 	 //$config['next_tag_open'] = '<a class="prev page-numbers" href="#">';
	 	 //$config['next_tag_close'] = '</a>';
	 	 $config['prev_tag_open'] = '<li>';
	 	 $config['prev_tag_close'] = '</li>';
	 	 $config['next_tag_open'] = '<li>';
	 	 $config['next_tag_close'] = '</li>';

	 	 $config['num_tag_open'] = '<li>';
	 	 $config['num_tag_close'] = '</li>';

	 	 $config['first_tag_open'] = '<li>';
	 	 $config['first_tag_close'] = '</li>';
	 	 $config['last_tag_open'] = '<li>';
	 	 $config['last_tag_close'] = '</li>';

	 	 $config['cur_tag_open'] = '<li><span class="page-numbers current">';
	 	 $config['cur_tag_close'] = '</span></li>';
	 	 $config['base_url'] = base_url().'/berita/videos';
	 	 $config['total_rows'] = $jumlah_data;
	 	 $config['per_page'] = 3;
	 	 $from = $this->uri->segment(3);
	 	 $this->pagination->initialize($config);

		 $this->data['post_terbaru'] 						= $this->Berita_model->get_all_new_home();
		 $this->data['post_new_random'] 						= $this->Berita_model->get_all_random();

	 	 $this->data['post_new_video'] = $this->Video_model->get_all_new_video_paging($config['per_page'],$from);

	 	 $this->load->view('fronts/video/vkategori', $this->data);
	  }


    // This is the counter function..
    function add_count($id)
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
            $this->Berita_model->update_counter(urldecode($id));
        }
    }
}
