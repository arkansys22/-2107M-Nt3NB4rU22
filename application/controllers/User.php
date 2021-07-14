<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation', 'email','upload'));
	}

	public function login()	{
					$this->form_validation->set_rules('a','','trim|required', array('trim' => '', 'required' => 'Email belum diisi'));
					$this->form_validation->set_rules('b','','trim|required', array('trim' => '', 'required' => 'Password belum diisi'));
					if($this->form_validation->run() != false){
						if (isset($_POST['submit'])){
							$username = $this->input->post('a');
							$password = hash("sha512", md5($this->input->post('b')));
							$cek = $this->model_app->cek_login($username,$password,'users');
						    $row = $cek->row_array();
						    $total = $cek->num_rows();
							if ($total > 0){
								$this->session->set_userdata('upload_image_file_manager',true);
								$this->session->set_userdata(
									array('username'=>$row['username'], 'level'=>$row['level'],'id_users'=>$row['id_users'],'id_session'=>$row['id_session']));
								redirect('user/home');
							}else{
								$data['title'] = 'Periksa kembali email dan password Anda!';
								$this->load->view('fronts/user/v_login',$data);
							}
					}else{
						$data['title'] = 'Periksa kembali email dan password Anda!';
						$this->load->view('fronts/user/v_login',$data);
					}

				}	else{
						$data['title'] = 'Periksa kembali email dan password Anda!';
						$this->load->view('fronts/user/v_login',$data);
					}
		}
    function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
	public function register()	{
			$this->form_validation->set_rules('namadepan','','trim|required', array('trim' => '', 'required' => 'Nama depan belum diisi'));
			$this->form_validation->set_rules('namabelakang','','trim|required', array('trim' => '', 'required' => 'Nama belakang belum diisi'));
			$this->form_validation->set_rules('username','','trim|required|is_unique[users.username]', array('trim' => '', 'required' => 'Username belum diisi','is_unique' => 'Username telah digunakan, silahkan gunakan username lain.'));
			$this->form_validation->set_rules('email','','trim|required|valid_email|is_unique[users.email]', array('trim' => '', 'required' => 'Email belum diisi','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
			$this->form_validation->set_rules('password','','trim|required', array('trim' => '', 'required' => 'Password belum diisi'));
			$this->form_validation->set_rules('konfirmpassword','','trim|required|matches[password]', array('trim' => '', 'required' => 'Konfirmasi Password belum diisi','matches'=>'Password tidak sama! Cek kembali password Anda'));
			$this->form_validation->set_rules('nowhatsapp','','trim|required', array('trim' => '', 'required' => 'Nomer whatsapp belum diisi'));
			$this->form_validation->set_rules('kategori','','trim|required', array('trim' => '', 'required' => 'Kategori belum diisi'));
			if($this->form_validation->run() != false){
				if (isset($_POST['submit']))
				{
					$namadepan = $this->input->post('namadepan');
					$namabelakang = $this->input->post('namabelakang');
					$username = $this->input->post('username');
					$email = $this->input->post('email');
					$nowhatsapp = $this->input->post('nowhatsapp');
					$level = $this->input->post('kategori');
					$password = hash("sha512", md5($this->input->post('password')));
					$cek = $this->model_app->cek_register($username,$email,'users');
				    $total = $cek->num_rows();
					if ($total > 0)
						{
						$data['title'] = 'Periksa kembali email dan password Anda!';
						redirect(site_url('daftar'));
						}else{
			        $saltid   = md5($email);
							$aktivasi   = 0;
							$data = array('username'=>$this->db->escape_str($this->input->post('username')),
															'password'=>hash("sha512", md5($this->input->post('password'))),
															'namadepan'=>$this->input->post('namadepan'),
															'namabelakang'=>$this->input->post('namabelakang'),
															'email'=>$this->db->escape_str($this->input->post('email')),
															'aktivasi'=> $aktivasi,
															'hari'=>hari_ini(date('w')),
                              'tanggal'=>date('Y-m-d'),
                              'jam'=>date('H:i:s'),
															'nowhatsapp'=>$this->db->escape_str($this->input->post('nowhatsapp')),
															'level'=>$this->db->escape_str($this->input->post('kategori')),
															'blokir'=>'N',
															'id_session'=>md5($this->input->post('a')).'-'.date('YmdHis'));

							$data2 = array('username'=>$this->db->escape_str($this->input->post('username')));


							if($this->model_app->insert('users',$data) AND $this->model_app->insert('users_bisnis',$data2))

							{
								if($this->sendemail($email, $saltid,$username))
                  				    {
                			            $this->session->set_flashdata('msg','<div class="alert bg-5 text-center">Segera lakukan aktivasi akun mantenbaru dari email anda. Harap merefresh pesan masuk di email Anda.</div>');
                			            redirect(base_url('daftar')

                			            );
                 					}else
                  				    {
                      					$this->session->set_flashdata('msg','<div class="alert bg-5 text-center">Coba lagi ...</div>');
                          			    redirect(base_url('daftar'));
                  				    }
							}
							$data['title'] = 'Sukses mendaftar';
							$this->load->view('fronts/user/v_register',$data);

							}
					}
					else
					{
						$this->load->view('fronts/user/v_register',$data);
					}

				}	else{
				$data['title'] = 'Ops.. Masih ada yang kurang. Silahkan dicek kembali.';
				$this->load->view('fronts/user/v_register',$data);
			}

		}
	function sendemail($email,$saltid,$username){
		  // configure the email setting
					$config['protocol'] = 'smtp';
					$config['smtp_host'] = 'ssl://mail.mantenbaru.com'; //smtp host name
					$config['smtp_port'] = '465'; //smtp port number
					$config['smtp_user'] = 'aktivasi@mantenbaru.com';
					$config['smtp_pass'] = 'dh4wy3p1c'; //$from_email password
					$config['mailtype'] = 'html';
					$config['charset'] = 'iso-8859-1';
					$config['wordwrap'] = TRUE;
					$config['newline'] = "\r\n"; //use double quotes
					$this->email->initialize($config);
					$url = base_url()."user/confirmation/".$saltid;
					$this->email->from('aktivasi@mantenbaru.com', 'Mantenbaru');
					$this->email->to($email);
					$this->email->subject('Verifikasi Email - Mantenbaru');
					$message = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body><p><strong>Hallo, $username</strong></p><p>Hanya tinggal 1 langkah lagi untuk bisa bergabung dengan Mantenbaru.</p><p>Silahkan mengklik link di bawah ini</p>".$url."<br/><p>Salam Hangat</p><p>Mantenbaru Team</p></body></html>";
					$this->email->message($message);
					return $this->email->send();
		}
	public function confirmation($key){
				if($this->model_app->verifyemail($key))
				{
					$this->session->set_flashdata('msg','<div class="alert bg-3 text-center">Selamat Anda telah Resmi Bergabung! Silahkan Login.</div>');
					redirect(base_url('login'));
				}	else {
					$this->session->set_flashdata('msg','<div class="alert bg-3 text-center">Ops. Anda gagal, silahkan coba lagi.</div>');
					redirect(base_url('login'));
				}
		}


	function home(){
					if ($this->session->level=='admin'){
				$this->template->load('administrator/template','administrator/view_home_admin');
					}
					elseif ($this->session->username==$this->uri->segment(3) OR $this->session->level=='vendor'){
						$data['records'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
						$data['users'] = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
						$data['users2'] = $this->model_app->view_where('users_bisnis',array('username'=>$this->session->username))->row_array();
						$data['provinsi'] = $this->model_app->view_ordering('provinsi','id','DESC');
						$data['kabupaten'] = $this->model_app->view_ordering('kabupaten','id','DESC');
						$data['kecamatan'] = $this->model_app->view_ordering('kecamatan','id','DESC');
	                    $data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
	                    $data['identitas']= $this->model_app->get_by_id_identitas($id='1');
	                    $data['katharga'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
	                    $data['katbisnis'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
						$this->load->view('fronts/user/v_home',$data);
					}
					elseif ($this->session->level=='calon'){
				$this->template->load('administrator/template','administrator/view_home_admin');
					}
					else{
						$this->template->load('administrator/template','administrator/view_home_users',$data);
					}
		}
	function edit_vendor(){
			cek_session_akses2('home',$this->session->id_session);
			$id = $this->uri->segment(3);
						if (isset($_POST['submit']))
						{
							$config['upload_path'] = 'asset/foto_user/';
            	            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            	            $config['max_size'] = '1000'; // kb
            	            $this->load->library('upload', $config);
            	            $this->upload->do_upload('foto');
            	            $hasil=$this->upload->data();
							if ($hasil['file_name']==''){
							$data = array(
								'namadepan'=>$this->input->post('namadepan'),
								'namabelakang'=>$this->input->post('namabelakang'),
								'password'=>hash("sha512", md5($this->input->post('password'))),
								'nowhatsapp'=>$this->input->post('nowhatsapp'));
							}else{
								$data = array(
									'namadepan'=>$this->input->post('namadepan'),
									'namabelakang'=>$this->input->post('namabelakang'),
									'nowhatsapp'=>$this->input->post('nowhatsapp'),
									'password'=>hash("sha512", md5($this->input->post('password'))),
									'foto'=>$hasil['file_name']);
							$where = array('id_users' => $this->input->post('id'));
							$_image = $this->db->get_where('users',$where)->row();
							$query = $this->model_app->update('users',$data,$where);
							if($query){
					                unlink("asset/foto_user/".$_image->foto);
					      }

							}
							$where = array('id_users' => $this->input->post('id'));
							$this->model_app->update('users',$data,$where);

							redirect('user/home/'.$this->input->post('id'));
						}else{
							if ($this->session->id_users==$this->uri->segment(3) OR $this->session->level=='vendor'){
							$data['users'] = $this->model_app->edit('users', array('id_users' => $id))->row_array();
							$data['users2'] = $this->model_app->view_where('users_bisnis',array('username'=>$this->session->username))->row_array();
							$data['propinsi'] = $this->db->get('provinsi');
							$data['records'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
							$data['record'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
							$data['provinsi'] = $this->model_app->view_join_where_2('users_bisnis','provinsi','propinsi','id');
							$data['kabupaten'] = $this->model_app->view_join_where_2('users_bisnis','kabupaten','kabupaten','id');
							$data['kecamatan'] = $this->model_app->view_join_where_2('users_bisnis','kecamatan','kecamatan','id');
							$data['identitas']= $this->model_app->get_by_id_identitas($id='1');
							$data['katharga'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
	                        $data['katbisnis'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
		                    $data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
							$this->load->view('fronts/user/v_edit',$data);
							}else{
									redirect('user/edit_vendor/'.$this->session->username);
							}
						}

		}

	function projek(){
			cek_session_akses2('hargas',$this->session->id_session);
			$data['identitas']= $this->model_app->get_by_id_identitas($id='1');
			$data['records'] = $this->model_app->view_where_ordering('projek',array('username'=>$this->session->username),'id_projek','DESC');
			$data['users2'] = $this->model_app->view_where('users_bisnis',array('username'=>$this->session->username))->row_array();
			$data['users'] = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
			$data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
			$this->load->view('fronts/user/v_projek',$data);
		}
	function tambah_projek(){
			cek_session_akses2('projek',$this->session->id_session);
						if (isset($_POST['submit']))
						{
							$config['upload_path'] = 'asset/projek/';
							$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';

							$this->upload->initialize($config);
							$this->upload->do_upload('foto1');
							$hasil=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$this->upload->initialize($config);
							$this->upload->do_upload('foto2');
							$hasil2=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil2['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil2['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$this->upload->initialize($config);
							$this->upload->do_upload('foto3');
							$hasil3=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil3['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil3['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$this->upload->initialize($config);
							$this->upload->do_upload('foto4');
							$hasil4=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil4['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil4['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$this->upload->initialize($config);
							$this->upload->do_upload('foto5');
							$hasil5=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil5['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil5['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							if ($hasil['file_name']=='' && $hasil2['file_name']=='' && $hasil3['file_name']=='' && $hasil4['file_name']=='' && $hasil5['file_name']==''){
								$data = array(
									'username'=>$this->input->post('id'),
									'judul'=>$this->input->post('judul'),
									'judul_seo'=>seo_title($this->input->post('judul')),
									'youtube'=>$this->input->post('youtube'),
									'deskripsi'=>$this->input->post('deskripsi'),
									'hari'=>hari_ini(date('w')),
                  'tanggal'=>date('Y-m-d'),
                  'jam'=>date('H:i:s'),
									'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
									'keyword'=>$this->input->post('keyword'));
								}elseif ($hasil2['file_name']=='' && $hasil3['file_name']=='' && $hasil4['file_name']=='' && $hasil5['file_name']==''){
									$data = array(
										'username'=>$this->input->post('id'),
										'judul'=>$this->input->post('judul'),
										'judul_seo'=>seo_title($this->input->post('judul')),
										'youtube'=>$this->input->post('youtube'),
										'foto1'=>$hasil['file_name'],
										'deskripsi'=>$this->input->post('deskripsi'),
										'hari'=>hari_ini(date('w')),
                    'tanggal'=>date('Y-m-d'),
                    'jam'=>date('H:i:s'),
										'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
										'keyword'=>$this->input->post('keyword'));
									}elseif ($hasil3['file_name']=='' && $hasil4['file_name']=='' && $hasil5['file_name']==''){
										$data = array(
											'username'=>$this->input->post('id'),
											'judul'=>$this->input->post('judul'),
											'judul_seo'=>seo_title($this->input->post('judul')),
											'youtube'=>$this->input->post('youtube'),
											'foto1'=>$hasil['file_name'],
											'foto2'=>$hasil2['file_name'],
											'deskripsi'=>$this->input->post('deskripsi'),
											'hari'=>hari_ini(date('w')),
                      'tanggal'=>date('Y-m-d'),
                      'jam'=>date('H:i:s'),
											'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
											'keyword'=>$this->input->post('keyword'));
										}elseif ($hasil4['file_name']=='' && $hasil5['file_name']==''){
											$data = array(
												'username'=>$this->input->post('id'),
												'judul'=>$this->input->post('judul'),
												'judul_seo'=>seo_title($this->input->post('judul')),
												'youtube'=>$this->input->post('youtube'),
												'foto1'=>$hasil['file_name'],
												'foto2'=>$hasil2['file_name'],
												'foto3'=>$hasil3['file_name'],
												'deskripsi'=>$this->input->post('deskripsi'),
												'hari'=>hari_ini(date('w')),
                        'tanggal'=>date('Y-m-d'),
                        'jam'=>date('H:i:s'),
												'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
												'keyword'=>$this->input->post('keyword'));

											}elseif ($hasil5['file_name']==''){
												$data = array(
													'username'=>$this->input->post('id'),
													'judul'=>$this->input->post('judul'),
													'judul_seo'=>seo_title($this->input->post('judul')),
													'youtube'=>$this->input->post('youtube'),
													'foto1'=>$hasil['file_name'],
													'foto2'=>$hasil2['file_name'],
													'foto3'=>$hasil3['file_name'],
													'foto4'=>$hasil4['file_name'],
													'deskripsi'=>$this->input->post('deskripsi'),
													'hari'=>hari_ini(date('w')),
                          'tanggal'=>date('Y-m-d'),
                          'jam'=>date('H:i:s'),
													'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
													'keyword'=>$this->input->post('keyword'));
								}else {
									$data = array(
										'username'=>$this->input->post('id'),
										'judul'=>$this->input->post('judul'),
										'judul_seo'=>seo_title($this->input->post('judul')),
										'youtube'=>$this->input->post('youtube'),
										'deskripsi'=>$this->input->post('deskripsi'),
										'hari'=>hari_ini(date('w')),
                    'tanggal'=>date('Y-m-d'),
                    'jam'=>date('H:i:s'),
										'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
										'foto1'=>$hasil['file_name'],
										'foto2'=>$hasil2['file_name'],
										'foto3'=>$hasil3['file_name'],
										'foto4'=>$hasil4['file_name'],
										'foto5'=>$hasil5['file_name'],
										'keyword'=>$this->input->post('keyword'));
									}
									$this->model_app->insert('projek',$data);
									redirect('user/projek');
						}else{
							if ($this->session->username==$this->uri->segment(3) OR $this->session->level=='vendor'){
							$data['record'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
							$data['identitas']= $this->model_app->get_by_id_identitas($id='1');
							$data['users'] = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
					    $data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
							$this->load->view('fronts/user/v_tambah_projek',$data);
							}else{
									redirect('user/tambah_projek/'.$this->session->username);
							}
						}

		}
	function edit_projek(){
			cek_session_akses2('projek',$this->session->id_session);
			$id_projek = $this->uri->segment(3);

						if (isset($_POST['submit']))
						{
							$config['upload_path'] = 'asset/projek/';
							$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';

							$this->upload->initialize($config);
							$this->upload->do_upload('foto1');
							$hasil=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$this->upload->initialize($config);
							$this->upload->do_upload('foto2');
							$hasil2=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil2['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil2['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$this->upload->initialize($config);
							$this->upload->do_upload('foto3');
							$hasil3=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil3['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil3['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$this->upload->initialize($config);
							$this->upload->do_upload('foto4');
							$hasil4=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil4['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil4['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$this->upload->initialize($config);
							$this->upload->do_upload('foto5');
							$hasil5=$this->upload->data();
							$config['image_library']='gd2';
							$config['source_image'] = 'asset/projek/'.$hasil5['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '80%';
							$config['new_image']= 'asset/projek/'.$hasil5['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							if ($hasil['file_name']=='' && $hasil2['file_name']=='' && $hasil3['file_name']=='' && $hasil4['file_name']=='' && $hasil5['file_name']==''){
							$data = array(
								'username'=>$this->input->post('ids'),
								'judul'=>$this->input->post('judul'),
								'judul_seo'=>seo_title($this->input->post('judul')),
								'youtube'=>$this->input->post('youtube'),
								'deskripsi'=>$this->input->post('deskripsi'),
								'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
								'keyword'=>$this->input->post('keyword'));
								$where = array('id_projek' => $this->input->post('id_projek'));
							  $this->db->update('projek',$data,$where);

							}elseif ($hasil2['file_name']=='' && $hasil3['file_name']=='' && $hasil4['file_name']=='' && $hasil5['file_name']==''){
								$data = array(
									'username'=>$this->input->post('ids'),
									'judul'=>$this->input->post('judul'),
									'judul_seo'=>seo_title($this->input->post('judul')),
									'youtube'=>$this->input->post('youtube'),
									'deskripsi'=>$this->input->post('deskripsi'),
									'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
									'foto1'=>$hasil['file_name'],
									'keyword'=>$this->input->post('keyword'));
									$where = array('id_projek' => $this->input->post('id_projek'));
									$_image = $this->db->get_where('projek',$where)->row();
									$query = $this->db->update('projek',$data,$where);
									if($query){
										unlink("asset/projek/".$_image->foto1);
									}
								}elseif ($hasil['file_name']=='' && $hasil3['file_name']=='' && $hasil4['file_name']=='' && $hasil5['file_name']==''){
									$data = array(
										'username'=>$this->input->post('ids'),
										'judul'=>$this->input->post('judul'),
										'judul_seo'=>seo_title($this->input->post('judul')),
										'youtube'=>$this->input->post('youtube'),
										'deskripsi'=>$this->input->post('deskripsi'),
										'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
										'foto2'=>$hasil2['file_name'],
										'keyword'=>$this->input->post('keyword'));
										$where = array('id_projek' => $this->input->post('id_projek'));
										$_image = $this->db->get_where('projek',$where)->row();
										$query = $this->db->update('projek',$data,$where);
										if($query){
											unlink("asset/projek/".$_image->foto2);
										}
									}elseif ($hasil['file_name']=='' && $hasil2['file_name']=='' && $hasil4['file_name']=='' && $hasil5['file_name']==''){
										$data = array(
											'username'=>$this->input->post('ids'),
											'judul'=>$this->input->post('judul'),
											'judul_seo'=>seo_title($this->input->post('judul')),
											'youtube'=>$this->input->post('youtube'),
											'deskripsi'=>$this->input->post('deskripsi'),
											'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
											'foto3'=>$hasil3['file_name'],
											'keyword'=>$this->input->post('keyword'));
											$where = array('id_projek' => $this->input->post('id_projek'));
											$_image = $this->db->get_where('projek',$where)->row();
											$query = $this->db->update('projek',$data,$where);
											if($query){
												unlink("asset/projek/".$_image->foto3);
											}
										}elseif ($hasil['file_name']=='' && $hasil2['file_name']=='' && $hasil3['file_name']=='' && $hasil5['file_name']==''){
											$data = array(
												'username'=>$this->input->post('ids'),
												'judul'=>$this->input->post('judul'),
												'judul_seo'=>seo_title($this->input->post('judul')),
												'youtube'=>$this->input->post('youtube'),
												'deskripsi'=>$this->input->post('deskripsi'),
												'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
												'foto4'=>$hasil4['file_name'],
												'keyword'=>$this->input->post('keyword'));
												$where = array('id_projek' => $this->input->post('id_projek'));
												$_image = $this->db->get_where('projek',$where)->row();
												$query = $this->db->update('projek',$data,$where);
												if($query){
													unlink("asset/projek/".$_image->foto4);
												}
											}elseif ($hasil['file_name']=='' && $hasil2['file_name']=='' && $hasil3['file_name']=='' && $hasil4['file_name']==''){
												$data = array(
													'username'=>$this->input->post('ids'),
													'judul'=>$this->input->post('judul'),
													'judul_seo'=>seo_title($this->input->post('judul')),
													'youtube'=>$this->input->post('youtube'),
													'deskripsi'=>$this->input->post('deskripsi'),
													'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
													'foto5'=>$hasil5['file_name'],
													'keyword'=>$this->input->post('keyword'));
													$where = array('id_projek' => $this->input->post('id_projek'));
													$_image = $this->db->get_where('projek',$where)->row();
													$query = $this->db->update('projek',$data,$where);
													if($query){
														unlink("asset/projek/".$_image->foto5);
													}
											}elseif ($hasil3['file_name']=='' && $hasil4['file_name']=='' && $hasil5['file_name']==''){
									$data = array(
										'username'=>$this->input->post('ids'),
										'judul'=>$this->input->post('judul'),
										'judul_seo'=>seo_title($this->input->post('judul')),
										'youtube'=>$this->input->post('youtube'),
										'deskripsi'=>$this->input->post('deskripsi'),
										'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
										'foto1'=>$hasil['file_name'],
										'foto2'=>$hasil2['file_name'],
										'keyword'=>$this->input->post('keyword'));
										$where = array('id_projek' => $this->input->post('id_projek'));
										$_image = $this->db->get_where('projek',$where)->row();
										$query = $this->db->update('projek',$data,$where);
										if($query){
											unlink("asset/projek/".$_image->foto1);
											unlink("asset/projek/".$_image->foto2);
										}

								}elseif ($hasil['file_name']=='' && $hasil2['file_name']=='' ){
								$data = array(
									'username'=>$this->input->post('ids'),
									'judul'=>$this->input->post('judul'),
									'judul_seo'=>seo_title($this->input->post('judul')),
									'youtube'=>$this->input->post('youtube'),
									'deskripsi'=>$this->input->post('deskripsi'),
									'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
									'foto3'=>$hasil3['file_name'],
									'foto4'=>$hasil4['file_name'],
									'foto5'=>$hasil5['file_name'],
									'keyword'=>$this->input->post('keyword'));
									$where = array('id_projek' => $this->input->post('id_projek'));
									$_image = $this->db->get_where('projek',$where)->row();
									$query = $this->db->update('projek',$data,$where);
									if($query){
										unlink("asset/projek/".$_image->foto3);
										unlink("asset/projek/".$_image->foto4);
										unlink("asset/projek/".$_image->foto5);
									}

								}elseif ($hasil['file_name']=='' && $hasil2['file_name']=='' && $hasil3['file_name']==''){
								$data = array(
									'username'=>$this->input->post('ids'),
									'judul'=>$this->input->post('judul'),
									'judul_seo'=>seo_title($this->input->post('judul')),
									'youtube'=>$this->input->post('youtube'),
									'deskripsi'=>$this->input->post('deskripsi'),
									'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
									'foto4'=>$hasil4['file_name'],
									'foto5'=>$hasil5['file_name'],
									'keyword'=>$this->input->post('keyword'));
									$where = array('id_projek' => $this->input->post('id_projek'));
									$_image = $this->db->get_where('projek',$where)->row();
									$query = $this->db->update('projek',$data,$where);
									if($query){
										unlink("asset/projek/".$_image->foto4);
										unlink("asset/projek/".$_image->foto5);
									}
								}else{
									$data = array(
									'username'=>$this->input->post('ids'),
									'judul'=>$this->input->post('judul'),
									'judul_seo'=>seo_title($this->input->post('judul')),
									'youtube'=>$this->input->post('youtube'),
									'deskripsi'=>$this->input->post('deskripsi'),
									'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
									'foto1'=>$hasil['file_name'],
									'foto2'=>$hasil2['file_name'],
									'foto3'=>$hasil3['file_name'],
									'foto4'=>$hasil4['file_name'],
									'foto5'=>$hasil5['file_name'],
									'keyword'=>$this->input->post('keyword'));
									$where = array('id_projek' => $this->input->post('id_projek'));
									$_image = $this->db->get_where('projek',$where)->row();
									$query = $this->db->update('projek',$data,$where);
									if($query){
						                unlink("asset/projek/".$_image->foto1);
														unlink("asset/projek/".$_image->foto2);
														unlink("asset/projek/".$_image->foto3);
														unlink("asset/projek/".$_image->foto4);
														unlink("asset/projek/".$_image->foto5);
						                }
								}
								redirect('user/projek');
						}else{
							if ($this->session->username==$this->uri->segment(3) OR $this->session->level=='vendor'){
								$data['projek'] = $this->model_app->edit('projek', array('id_projek' => $id_projek, 'username' => $this->session->username))->row_array();
                $data['users2'] = $this->model_app->view_where('users_bisnis',array('username'=>$this->session->username))->row_array();
							  $data['users'] = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
							  $data['identitas']= $this->model_app->get_by_id_identitas($id='1');
					      $data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
							$this->load->view('fronts/user/v_edit_projek',$data);
						}else{
								redirect('user/edit_projek/'.$this->session->username);
						}
							}
		}
	function delete_projek(){
	    cek_session_akses2('projek',$this->session->id_session);
			$id_projek = $this->uri->segment(3);

			$_id = $this->db->get_where('projek',['id_projek' => $id_projek])->row();
			$query = $this->db->delete('projek',['id_projek'=>$id_projek]);
			if($query){
                unlink("asset/projek/".$_id->foto1);
								unlink("asset/projek/".$_id->foto2);
								unlink("asset/projek/".$_id->foto3);
								unlink("asset/projek/".$_id->foto4);
								unlink("asset/projek/".$_id->foto5);
      }
			redirect('user/projek');
		}

    function hargas(){
			cek_session_akses2('hargas',$this->session->id_session);
			$data['records'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
			$data['record'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
			$data['users'] = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
			$data['users2'] = $this->model_app->view_where('users_bisnis',array('username'=>$this->session->username))->row_array();
			$data['provinsi'] = $this->model_app->view_ordering('provinsi','id','DESC');
			$data['kabupaten'] = $this->model_app->view_ordering('kabupaten','id','DESC');
			$data['kecamatan'] = $this->model_app->view_ordering('kecamatan','id','DESC');
			$data['identitas']= $this->model_app->get_by_id_identitas($id='1');
			$data['katharga'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
	        $data['katbisnis'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
			$data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
			$this->load->view('fronts/user/v_harga',$data);
		}
	function tambah_harga(){
			cek_session_akses2('hargas',$this->session->id_session);
						if (isset($_POST['submit']))
						{

				$config['upload_path'] = 'asset/harga/';
	            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
	            $this->upload->initialize($config);
	            $this->upload->do_upload('foto');
	            $hasil=$this->upload->data();
				$config['image_library']='gd2';
                $config['source_image'] = './asset/harga/'.$hasil['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 1080;
                $config['height']= 810;
                $config['new_image']= './asset/harga/'.$hasil['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

							if ($hasil['file_name']==''){
								$data = array(
									'username'=>$this->input->post('id'),
									'judul'=>$this->input->post('judul'),
									'judul_seo'=>seo_title($this->input->post('judul')),
									'harga'=>$this->input->post('harga'),
									'harga_spec'=>$this->input->post('harga_spec'),
									'deskripsi'=>$this->input->post('deskripsi'),
									'hari'=>hari_ini(date('w')),
                                    'tanggal'=>date('Y-m-d'),
                                    'jam'=>date('H:i:s'),
									'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
									'keyword'=>$this->input->post('keyword'));
								}else {
									$data = array(
										'username'=>$this->input->post('id'),
										'judul'=>$this->input->post('judul'),
										'judul_seo'=>seo_title($this->input->post('judul')),
										'harga'=>$this->input->post('harga'),
										'harga_spec'=>$this->input->post('harga_spec'),
										'deskripsi'=>$this->input->post('deskripsi'),
										'hari'=>hari_ini(date('w')),
                                        'tanggal'=>date('Y-m-d'),
                                        'jam'=>date('H:i:s'),
										'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
										'foto_h'=>$hasil['file_name'],
										'keyword'=>$this->input->post('keyword'));
									}
									$this->model_app->insert('harga',$data);
									redirect('user/hargas');
						}else{
							if ($this->session->id_users==$this->uri->segment(3) OR $this->session->level=='vendor'){
							$data['users'] = $this->model_app->edit('users', array('username' => $id))->row_array();
							$data['propinsi'] = $this->db->get('provinsi');
							$data['record'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
							$data['users'] = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
							$data['users2'] = $this->model_app->view_where('users_bisnis',array('username'=>$this->session->username))->row_array();
							$data['provinsi'] = $this->model_app->view_join_where_2('users_bisnis','provinsi','propinsi','id');
							$data['kabupaten'] = $this->model_app->view_join_where_2('users_bisnis','kabupaten','kabupaten','id');
							$data['kecamatan'] = $this->model_app->view_join_where_2('users_bisnis','kecamatan','kecamatan','id');
							$data['identitas']= $this->model_app->get_by_id_identitas($id='1');
							$data['katharga'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
	                        $data['katbisnis'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
		          $data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
							$this->load->view('fronts/user/v_tambah_harga',$data);
							}else{
									redirect('user/tambah_harga/'.$this->session->username);
							}
						}

		}
	function edit_harga(){
			cek_session_akses2('hargas',$this->session->id_session);
			$id_harga = $this->uri->segment(3);

						if (isset($_POST['submit']))
						{


				$config['upload_path'] = 'asset/harga/';
	            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
	            $this->upload->initialize($config);
	            $this->upload->do_upload('foto');
	            $hasil=$this->upload->data();
				$config['image_library']='gd2';
                $config['source_image'] = './asset/harga/'.$hasil['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 1080;
                $config['height']= 810;
                $config['new_image']= './asset/harga/'.$hasil['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

							if ($hasil['file_name']==''){
								$data = array(
									'username'=>$this->input->post('ids'),
									'judul'=>$this->input->post('judul'),
									'judul_seo'=>seo_title($this->input->post('judul')),
									'harga'=>$this->input->post('harga'),
									'harga_spec'=>$this->input->post('harga_spec'),
									'deskripsi'=>$this->input->post('deskripsi'),
									'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
									'keyword'=>$this->input->post('keyword'));
									$where = array('id_harga' => $this->input->post('id_harga'));
    								$query = $this->db->update('harga',$data,$where);
								}else{
									$data = array(
									'username'=>$this->input->post('ids'),
									'judul'=>$this->input->post('judul'),
									'judul_seo'=>seo_title($this->input->post('judul')),
									'harga'=>$this->input->post('harga'),
									'harga_spec'=>$this->input->post('harga_spec'),
									'deskripsi'=>$this->input->post('deskripsi'),
									'meta_deskripsi'=>$this->input->post('meta_deskripsi'),
									'foto_h'=>$hasil['file_name'],
									'keyword'=>$this->input->post('keyword'));
									$where = array('id_harga' => $this->input->post('id_harga'));
    								$_image = $this->db->get_where('harga',$where)->row();
    								$query = $this->db->update('harga',$data,$where);
    								if($query){
    					                unlink("asset/harga/".$_image->foto_h);
    					                }
								}
								redirect('user/hargas');
						}else{
							if ($this->session->id_users==$this->uri->segment(3) OR $this->session->level=='vendor'){
							$data['harga'] = $this->model_app->edit('harga', array('id_harga' => $id_harga, 'username' => $this->session->username))->row_array();
							$data['propinsi'] = $this->db->get('provinsi');
							$data['record'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
							$data['users2'] = $this->model_app->view_where('users_bisnis',array('username'=>$this->session->username))->row_array();
							$data['users'] = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
							$data['provinsi'] = $this->model_app->view_join_where_2('users_bisnis','provinsi','propinsi','id');
							$data['kabupaten'] = $this->model_app->view_join_where_2('users_bisnis','kabupaten','kabupaten','id');
							$data['kecamatan'] = $this->model_app->view_join_where_2('users_bisnis','kecamatan','kecamatan','id');
							$data['identitas']= $this->model_app->get_by_id_identitas($id='1');
							$data['katharga'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
	                        $data['katbisnis'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
		                    $data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
							$this->load->view('fronts/user/v_edit_harga',$data);
						}else{
								redirect('user/tambah_harga/'.$this->session->username);
						}
							}
		}
	function delete_harga(){
	    cek_session_akses2('hargas',$this->session->id_session);
			$id_harga = $this->uri->segment(3);

			$_id = $this->db->get_where('harga',['id_harga' => $id_harga])->row();
			$query = $this->db->delete('harga',['id_harga'=>$id_harga]);
			if($query){
                unlink("asset/harga/".$_id->foto_h);
      }
			redirect('user/hargas');
		}

	function edit_bisnis(){
			cek_session_akses2('home',$this->session->id_session);
			$id = $this->uri->segment(3);
						if (isset($_POST['submit']))
						{

						    $config['upload_path'] = 'asset/gambar_bisnis/';
            	            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG';
            	            $this->upload->initialize($config);
            	            $this->upload->do_upload('foto');
            	            $hasil2=$this->upload->data();
            				$config['image_library']='gd2';
                            $config['source_image'] = './asset/gambar_bisnis/'.$hasil2['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= FALSE;
                            $config['quality']= '50%';
                            $config['width']= 400;
                            $config['height']= 400;
                            $config['new_image']= './asset/gambar_bisnis/'.$hasil2['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();

            	            if ($hasil2['file_name']==''){
								$data = array(
									'username' => $this->input->post('id'),
									'id_kategori'=>$this->input->post('id_kategori'),
									'id_harga'=>$this->input->post('id_harga'),
									'namabisnis'=>$this->input->post('namabisnis'),
									'namabisnis_seo'=>seo_title($this->input->post('namabisnis')),
									'tentangbisnis'=>$this->input->post('tentangbisnis'),
									'nomerbisnis'=>$this->input->post('nomerbisnis'),
									'propinsi'=>$this->input->post('provinsi'),
									'kabupaten'=>$this->input->post('kabupaten'),
									'kecamatan'=>$this->input->post('kecamatan'),
									'kodepos'=>$this->input->post('kodepos'),
									'hari'=>hari_ini(date('w')),
                                    'tanggal'=>date('Y-m-d'),
                                    'jam'=>date('H:i:s'),
									'fb'=>$this->input->post('fb'),
									'ig'=>$this->input->post('ig'),
									'twitter'=>$this->input->post('twitter'),
									'alamat'=>$this->input->post('alamat'));

								}else{
								$data = array(
								    'username' => $this->input->post('id'),
									'id_kategori'=>$this->input->post('id_kategori'),
									'id_harga'=>$this->input->post('id_harga'),
									'namabisnis'=>$this->input->post('namabisnis'),
									'namabisnis_seo'=>seo_title($this->input->post('namabisnis')),
									'tentangbisnis'=>$this->input->post('tentangbisnis'),
									'nomerbisnis'=>$this->input->post('nomerbisnis'),
									'propinsi'=>$this->input->post('provinsi'),
									'kabupaten'=>$this->input->post('kabupaten'),
									'kecamatan'=>$this->input->post('kecamatan'),
									'kodepos'=>$this->input->post('kodepos'),
									'hari'=>hari_ini(date('w')),
                                    'tanggal'=>date('Y-m-d'),
                                    'jam'=>date('H:i:s'),
									'fb'=>$this->input->post('fb'),
									'ig'=>$this->input->post('ig'),
									'gambar'=>$hasil2['file_name'],
									'twitter'=>$this->input->post('twitter'),
									'alamat'=>$this->input->post('alamat'));

										$where = array('username' => $this->input->post('id'));
            							$_image = $this->db->get_where('users_bisnis',$where)->row();
            							$query = $this->model_app->update('users_bisnis',$data,$where);
            							if($query){
            					                unlink("asset/gambar_bisnis/".$_image->gambar);
            					            }

								}
							$where = array('username' => $this->input->post('id'));
							$this->model_app->update('users_bisnis',$data,$where);

							redirect('user/home/'.$this->input->post('id'));
						}else{
							if ($this->session->username==$this->uri->segment(3) OR $this->session->level=='vendor'){
							$data['users2'] = $this->model_app->view_where('users_bisnis',array('username'=>$this->session->username))->row_array();
							$data['users'] = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
							$data['user'] = $this->model_app->edit('users_bisnis', array('username' => $id))->row_array();
							$data['propinsi'] = $this->db->get('provinsi');
							$data['records'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
							$data['record'] = $this->model_app->view_ordering('kategori','id_kategori','DESC');
							$data['provinsi'] = $this->model_app->view_ordering2('provinsi','id','DESC');
							$data['kabupaten'] = $this->model_app->view_ordering2('kabupaten','id','DESC');
							$data['kecamatan'] = $this->model_app->view_ordering2('kecamatan','id','DESC');
							$data['identitas']= $this->model_app->get_by_id_identitas($id='1');
							$data['katbisnis'] = $this->model_app->view_join_where_2('users_bisnis','kategori','id_kategori','id_kategori');
							$data['harga'] = $this->model_app->view_where_ordering('harga',array('username'=>$this->session->username),'id_harga','DESC');
		                    $data['modul'] = $this->model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
							$this->load->view('fronts/user/v_edit_bisnis',$data);
							}else{
									redirect('user/edit_vendor/'.$this->session->username);
							}
						}

		}
	function kabupaten(){
        $propinsiID = $_GET['id'];
        if($propinsiID == ''){
		     foreach ($kabupaten->result() as $k)
        {
            if ($users2['kabupaten'] == $k->id){
                                                echo "<option class='drop-list' value='$k->id' selected>$k->nama</option>";
                                                }else{
                                                  echo "<option class='drop-list' value='$k->id'>$k->nama</option>";
                                                }


        }
		}else{
        $kabupaten   = $this->db->get_where('kabupaten',array('id_prov'=>$propinsiID));
        foreach ($kabupaten->result() as $k)
        {
            if ($users2['kabupaten'] == $k->id){
                                                echo "<option class='drop-list' value='$k->id' selected>$k->nama</option>";
                                                }else{
                                                  echo "<option class='drop-list' value='$k->id'>$k->nama</option>";
                                                }


        }

		}

		}
    function kecamatan(){
        $kabupatenID = $_GET['id'];
        if($kabupatenID == ''){
		     exit;
		}else{
        $kecamatan   = $this->db->get_where('kecamatan',array('id_kabupaten'=>$kabupatenID));
        foreach ($kecamatan->result() as $k)
        {
            if ($users2['kecamatan'] == $k->id){
                echo "<option class='drop-list' value='$k->id' selected>$k->nama_kec</option>";
                                                  }else{
                                                  echo "<option class='drop-list' value='$k->id'>$k->nama_kec</option>";
                                                }


        }

		}

        exit;
    }



}
