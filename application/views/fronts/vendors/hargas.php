<!DOCTYPE html>
<html lang="id">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $this->load->view('fronts/vendors/metaharga')?>
    <?php $this->load->view('fronts/utama/css')?>
  </head>
  <body data-color="theme-1">
    <?php $this->load->view('fronts/utama/loading')?>
    <?php $this->load->view('fronts/utama/header')?>
    <div class="inner-banner">
  		<img class="center-image" src="<?php echo base_url()?>asset/frontend/aspanel/img/bghead.jpg" alt="">
  	</div>



  <div class="list-wrapper ">
  		<div class="container">
  			<ul class="list-breadcrumb clearfix">
  				<li><a class="color-grey link-dr-blue" href="<?php echo base_url()?>">home</a> /</li>
  				<li><a class="color-grey link-dr-blue" href="<?php echo base_url()?>vendors">vendors</a> /</li>
  				<li><span class="color-dr-blue"></span><?php echo $post_h->namabisnis?></li>
  			</ul>
  		<div class="row">
  		<div class="col-xs-12 col-sm-4 col-md-4">
  				<div class="sidebar bg-white clearfix">
						<div class="sidebar-block">
										<div class="hotel-small style-2 clearfix">
										     <img class="img-responsive noborder hotel-img" <?php if(empty($post_h->gambar)) {echo "<img src='".base_url()."asset/frontend/noimages.jpg'>";}
                                                         			        else { echo " <img src='".base_url()."asset/gambar_bisnis/".$post_h->gambar."'> ";}
                                                         			        ?>

											<div class="tour-layer delay-1"></div>
											<div class="hotel-desc">
													<span class="color-dark-2-light"><a href="<?php echo base_url("vendors/$post_v->namabisnis_seo ") ?>"><strong><span><?php echo $post_v->namabisnis?></span></strong></a></span>
													<p><?php echo $post_h->nama_kategori?></p>
													<p><i class="fa fa-user"></i> <?php echo $post_h->views?></p>

											</div>
										</div>
											<div class="contact-line"><p><i class="fa fa-map-marker"></i><a href="#"> <?php echo $post_h->nama_kec?> - <?php echo $post_h->nama?></p></a></div>
											<div class="contact-line"><p><strong>Media Sosial</strong></p></div>
											<div class="contact-line">
												<a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?php echo $post_h->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_h->namabisnis?>%20di%20Mantenbaru.%20Bisa%20bantu%20saya?" class="button-s-2 bg-4 m-right"><i class="fa fa-whatsapp"> WA</i></a>
												<a target="_blank" href="<?php echo $post_h->fb?>" class="button-s-2 bg-7 m-right"><i class="fa fa-facebook"> FB</i></a>
												<a target="_blank" href="<?php echo $post_h->ig?>" class="button-s-2 bg-1 m-right"><i class="fa fa-instagram"> IG</i></a>
												<a target="_blank" href="<?php echo $post_h->youtube?>" class="button-s-2 bg-5 m-right"><i class="fa fa-youtube"> YT</i></a>
											</div>
											<hr>
											<div class="contact-line">
												<center><a href="https://api.whatsapp.com/send?phone=+62<?php echo $post_h->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_h->namabisnis?>%20di%20Mantenbaru.%20Saya%20mau%20tanya-tanya%20dulu." class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><i class="fa fa-comments-o"> Kirim Penawaran</i></a></center>
											</div>
											<br>
											<div class="row contact-line">
												<center><a href="https://api.whatsapp.com/send?phone=+62<?php echo $post_h->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_h->namabisnis?>%20di%20Mantenbaru.%20Saya%20mau%20tanya%20harga%20dulu." class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><i class="fa fa-question-circle"> Cek Detail Harga</i></a></center>
											</div>
											<hr>
											<div class="contact-line"><p><strong>Tentang <?php echo $post_h->namabisnis?></strong></p></div>
											<div class="contact-line"><p><?php echo $post_h->tentangbisnis?></p></div>
											<div class="contact-line"><p><strong>Alamat</strong></p></div>
											<div class="contact-line"><p><?php echo $post_h->alamat?></p></div>
											<hr>
											<div class="share clearfix">
											   <div class="contact-line"><p><strong>Bagikan :</strong></p></div>
                                              <p></p><li class="color-fb"><a href="http://www.facebook.com/sharer.php?u=<?php echo base_url("harga-detail/$post_h->judul_seo ") ?>" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo base_url("harga-detail/$post_h->judul_seo ")?>','newwindow','width=400,height=350');  return false;" title="Facebook" target="_blank" ><i class="fa fa-facebook" ></i>Facebook</a></li>
                                              <li class="color-ig"><a href="whatsapp://send?text=Stop keraguan Kamu dan Pasangan! Cari tau <?php echo $post_h->namabisnis ?> yang ada di Mantenbaru. Ada <?php echo $post_h->judul ?> hanya dengan mengklik <?php echo base_url("harga-detail/$post_h->judul_seo ") ?> keraguan kamu dan pasangan bisa terselesaikan."><i class="fa fa-whatsapp"></i>Whatsapp</a></li>

                                            </div>
					    </div>
  				    </div>
  			    </div>
  		    <div class="col-xs-12 col-sm-8 col-md-8">
											<div class="col-md-12">
							 				<div class="simple-tab bg-white tab-3 color-3 tab-wrapper">

							 					<div class="tabs-content clearfix">
							 						<div class="tab-info active clearfix">
															<div class="col-xs-12 col-sm-12 col-md-12 clearfix">
																<div class="row">
												    			 <div class="blog-list">
												    			    <div class="blog-list-entry">
                                                						<div class="blog-list-top">
                                                				                    		 <img class="img-responsive img-full"
                                                				                    		 <?php if(empty($post_h->foto_h)) {
                                                				                    		  echo "<img src='".base_url()."asset/frontend/noimage_paket.jpg'>";

                                                				                    		 }else {
                                                				                    		  echo " <img src='".base_url('./asset/harga/'.$post_h->foto_h)."'> ";}
                                                                         			    ?>
                                                							</div>
                                                						</div>
                                                						<h4 class="blog-list-title"><?php echo $post_h->judul?></h4>

                                                						<div class="tour-info-line clearfix">
                                                							<div class="tour-info fl">
                                                					  	 		<?php echo $post_h->views_h?> views
                                                					  	 	</div>
                                                						</div>
                                                						<div class="blog-list-text "><?php echo $post_h->deskripsi?></div>
                                                						<?php echo $post_h->harga_spec?><h4 class="blog-list-title"> Rp. <?php echo number_format($post_h->harga,0,',','.')?></h4>
                                                						<a href="https://api.whatsapp.com/send?phone=+62<?php echo $post_h->nowhatsapp?>&text=Halo,%20<?php echo $post_h->namabisnis?>%20di%20Mantenbaru.com.%20Saya%20ingin%20memilih%20yang%20<?php echo $post_h->judul?>.%20^_^" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o fl"><span>Pilih Yang Ini !</span></a><a href="<?php echo base_url()?>vendors/<?php echo $post_h->namabisnis_seo?>" class=" c-button small bg-grey-2 hv-dr-blue-2-o fr"><span>Kembali ke profil</span></a>
                                                					</div>
												    			 </div>
												    			 <div class="share clearfix">
												    			     <br><br>
                    											   <div class="contact-line"><p><strong>Bagikan :</strong></p></div>
                                                                  <p></p><li class="color-fb"><a href="http://www.facebook.com/sharer.php?u=<?php echo base_url("harga-detail/$post_h->judul_seo ") ?>" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo base_url("harga-detail/$post_h->judul_seo ")?>','newwindow','width=400,height=350');  return false;" title="Facebook" target="_blank" ><i class="fa fa-facebook" ></i>Facebook</a></li>
                                                                  <li class="color-ig"><a href="whatsapp://send?text=Stop keraguan Kamu dan Pasangan! Cari tau <?php echo $post_h->namabisnis ?> yang ada di Mantenbaru.com. Ada <?php echo $post_h->judul ?> hanya dengan mengklik <?php echo base_url("harga-detail/$post_h->judul_seo ") ?> keraguan kamu dan pasangan bisa terselesaikan."><i class="fa fa-whatsapp"></i>Whatsapp</a></li>
                                                                </div>
								 							</div>
							 						</div>

							 			 </div>
  				</div>

  			</div>
				<br><br>
  		</div>
  	</div>
	    </div>
	</div>


  <?php $this->load->view('fronts/utama/footer')?>
  <?php $this->load->view('fronts/utama/js')?>
  </body>
</html>
