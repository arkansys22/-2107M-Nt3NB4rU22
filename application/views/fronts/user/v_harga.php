<!DOCTYPE html>
<html lang="id">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $this->load->view('fronts/utama/meta')?>
    <?php $this->load->view('fronts/utama/css')?>
    <?php $this->load->view('fronts/utama/wilayah')?>
  </head>
  <body data-color="theme-1">
    <?php $this->load->view('fronts/utama/loading')?>
    <?php $this->load->view('fronts/utama/header2')?>
    <div class="main-wraper bg-grey-2 padd-90">
    <br><br><br>
    </div>

    <div class="main-wraper bg-grey-2 padd-90">
    	<?php $this->load->view('fronts/user/menu')?>

    	<div class="container">
    		<div class="accordion-filter row">
    			<div class="col-xs-12 col-sm-3">
    				<div class="accordion-chooser">
    					<a data-fifter=".pengguna" href="#">Data Pengguna</a>
    					<a data-fifter=".bisnis" href="#">Data Bisnis</a>
    					<a data-fifter=".harga" href="#" class="active" >Daftar Harga</a>


    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-9">
    		   <div class="accordion style-5">
    		     <div class="acc-panel pengguna">
    		             <div class="acc-title "><span class="acc-icon"></span>Data <span><?php echo $users['level'] ?></span></div>
    		              <div class="acc-body ">
    										<h5>Nama Anda</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    										<span><?php echo $users['namadepan'] ?> <?php echo $users['namabelakang'] ?></span>
    										</div>
                        <br><br>
    				 						<h5>Nomer WhatsApp</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<span><?php echo $users['nowhatsapp'] ?></span>
    										</div>
                        <br><br>
                        <h5>Username</h5>
    										<div class="input-style-1 b-50 brd-0 type-2 color-3">
    											<span><?php echo $users['username'] ?></span>
    										</div>
                        <br><br>
    				 						<h5>Alamat Email</h5>
    										<div class="input-style-1 b-50 brd-0 type-2 color-3">
    											<span><?php echo $users['email'] ?></span>
    										</div>
                        <br><br>
    				 						<h5>Password</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<span>*******</span>
    										</div>
                        <br><br>
    				 						<h5>Foto</h5>
    										<p><?php $usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
                              if (trim($usr['foto'])==''){ $foto = 'blank.png'; }else{ $foto = $usr['foto']; } ?>
                          <img src="<?php echo base_url(); ?>/asset/foto_user/<?php echo $foto; ?>" class="img-circle" alt="User Image"></p>
                        <br><br>
                        <a class="button-s-2 bg-1 m-right" title="Edit Data" href="<?php echo base_url(); ?>user/edit_vendor/<?php echo $this->session->id_users; ?>"><span>Edit Profile</span></a>
    									</div>

    		     </div>
             <?php $this->load->view('fronts/user/part/2bisnis')?>
    				 <div class="acc-panel harga">
    									 <div class="acc-title active"><span class="acc-icon"></span>Daftar Harga</div>
    									 <div class="acc-body first">
                          <a class="button-s-2 bg-1 m-right" title="Edit Data" href="<?php echo base_url(); ?>user/tambah_harga/"><span>Tambah Paket Harga</span></a>
                          <br><br>
                          <div class="main-wraper padd-90">
                            <div class="row">
                              <?php
                              $no = 1;
                              foreach ($records as $row){
                              $tgl_posting = tgl_indo($row['tanggal']);
                              if ($row['status']=='Y'){ $status = '<span style="color:green">Published</span>'; }else{ $status = '<span style="color:red">Unpublished</span>'; }
                              echo "
                              <div class='col-mob-12 col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                                  <div class='hotel-item style-4'>
                                      <div class='radius-top'>
                                        <img src='".base_url()."asset/harga/$row[foto_h]' alt=''>
                                      </div>
                                      <div class='title'>
                                        <div class='hotel-place color-dark-2 clearfix'>Rp. "; ?><?php echo number_format($row[harga]) ?><?php echo"</div>
                                          <h4><b><a href='".base_url()."vendor/$row[judul_seo]' >$row[judul]</a></b></h4>
                                             <div class='rate-wrap'>
                                             <i>$row[views_h] Views</i>
                                            </div>
                                        <div class='clearfix'>
                                          <a href='".base_url()."user/delete_harga/$row[id_harga]' class='c-button bg-grey-3-t hv-grey-3-t fl'>Hapus</a>
                                          <a href='".base_url()."user/edit_harga/$row[id_harga]' class='c-button bg-sea hv-sea-o fr'>Edit</a>
                                        </div>
                                      </div>
                                    </div>
                            </div>";
                                $no++;
                              }
                              ?>



                        		</div>

    									 </div>
    			   </div>
    			</div>
    		</div>
    	</div>
    </div>
    </div>
  </div>

    <?php $this->load->view('fronts/utama/footer')?>
    <?php $this->load->view('fronts/utama/js')?>
    </body>
</html>
