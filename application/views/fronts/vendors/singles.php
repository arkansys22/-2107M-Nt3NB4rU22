<!DOCTYPE html>
<html lang="id">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $this->load->view('fronts/vendors/meta')?>
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
  				<li><span class="color-dr-blue"></span><?php echo $post_v->namabisnis?></li>
  			</ul>
  		<div class="row">
  		<div class="col-xs-12 col-sm-4 col-md-4">
  				<div class="sidebar bg-white clearfix">
						<div class="sidebar-block">
										<div class="hotel-small style-2 clearfix">
										     <img class="img-responsive noborder hotel-img" <?php if(empty($post_v->gambar)) {echo "<img src='".base_url()."asset/frontend/noimage.png'>";}
                                                         			        else { echo " <img src='".base_url()."asset/gambar_bisnis/".$post_v->gambar."'> ";}
                                                         			        ?>

											<div class="tour-layer delay-1"></div>
											<div class="hotel-desc">
													<span class="color-dark-2-light"><strong><span><?php echo $post_v->namabisnis?></span></strong></span>
													<p><?php echo $post_v->nama_kategori?></p>
													<p><i class="fa fa-user"></i> <?php echo $post_v->views?></p>

											</div>
										</div>
										<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span>(Fitur segera)</span>
										</div>
											<div class="contact-line"><p><i class="fa fa-map-marker"></i><a href="#"> <?php echo $post_v->nama_kec?> - <?php echo $post_v->nama?></p></a></div>
											<div class="contact-line"><p><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo $post_v->email?>"> <?php echo $post_v->email?></p></a></div>
											<a href="mailto:<?php echo $post_v->nomerbisnis?>"><div class="contact-line"><p><i class="fa fa-phone"></i> <?php echo $post_v->nomerbisnis?></p></div></a>
											<div class="contact-line"><p><strong>Media Sosial</strong></p></div>
											<div class="contact-line">
												<a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?php echo $post_v->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_v->namabisnis?>%20di%20Mantenbaru.com.%20Bisa%20bantu%20saya?" class="button-s-2 bg-4 m-right"><i class="fa fa-whatsapp"> WA</i></a>
												<a target="_blank" href="<?php echo $post_v->fb?>" class="button-s-2 bg-7 m-right"><i class="fa fa-facebook"> FB</i></a>
												<a target="_blank" href="<?php echo $post_v->ig?>" class="button-s-2 bg-1 m-right"><i class="fa fa-instagram"> IG</i></a>
												<a target="_blank" href="<?php echo $post_v->youtube?>" class="button-s-2 bg-5 m-right"><i class="fa fa-youtube"> YT</i></a>
											</div>
											<hr>
											<div class="contact-line">
												<center><a href="https://api.whatsapp.com/send?phone=+62<?php echo $post_v->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_v->namabisnis?>%20di%20Mantenbaru.com.%20Saya%20mau%20tanya-tanya%20dulu." class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><i class="fa fa-comments-o"> Kirim Penawaran</i></a></center>
											</div>
											<br>
											<div class="row contact-line">
												<center><a href="https://api.whatsapp.com/send?phone=+62<?php echo $post_v->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_v->namabisnis?>%20di%20Mantenbaru.com.%20Saya%20mau%20tanya%20harga%20dulu." class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><i class="fa fa-question-circle"> Cek Detail Harga</i></a></center>
											</div>
											<hr>
											<div class="contact-line"><p><strong>Tentang <?php echo $post_v->namabisnis?></strong></p></div>
											<div class="contact-line"><p><?php echo $post_v->tentangbisnis?></p></div>
											<div class="contact-line"><p><strong>Alamat</strong></p></div>
											<div class="contact-line"><p><?php echo $post_v->alamat?></p></div>
											<hr>
											<div class="share clearfix">
											   <div class="contact-line"><p><strong>Bagikan :</strong></p></div>

                                              <p></p><li class="color-fb"><a href="http://www.facebook.com/sharer.php?u=<?php echo base_url("projek-detail/$post_v->judul_seo ") ?>" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo base_url("projek-detail/$post_v->judul_seo ")?>','newwindow','width=400,height=350');  return false;" title="Facebook" target="_blank" ><i class="fa fa-facebook" ></i>Facebook</a></li>
                                              <li class="color-ig"><a href="whatsapp://send?text=<?php echo $post_v->namabisnis ?> kini ada di Mantenbaru.com. Klik <?php echo base_url("projek-detail/$post_v->judul_seo ") ?> untuk melihat projek terbaiknya."><i class="fa fa-whatsapp"></i>Whatsapp</a></li>

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
                                                				                    		 <img class="img-responsive img-full" <?php if(empty($post_v->foto1)) {echo "";}
                                                                         			        else { echo " <img src='".base_url()."asset/projek/".$post_v->foto1."'> ";}
                                                                         			    ?>
                                                				                    		 <img class="img-responsive img-full" <?php if(empty($post_v->foto2)) {echo "";}
                                                                         			        else { echo " <img src='".base_url()."asset/projek/".$post_v->foto2."'> ";}
                                                                         			    ?>
                                                				                    		 <img class="img-responsive img-full" <?php if(empty($post_v->foto3)) {echo "";}
                                                                         			        else { echo " <img src='".base_url()."asset/projek/".$post_v->foto3."'> ";}
                                                                         			    ?>
                                                				                    		 <img class="img-responsive img-full" <?php if(empty($post_v->foto4)) {echo "";}
                                                                         			        else { echo " <img src='".base_url()."asset/projek/".$post_v->foto4."'> ";}
                                                                         			    ?>
                                                				                    		 <img class="img-responsive img-full" <?php if(empty($post_v->foto5)) {echo "";}
                                                                         			        else { echo " <img src='".base_url()."asset/projek/".$post_v->foto5."'> ";}
                                                                         			    ?>
                                                                                  <?php if(empty($post_v->youtube)){ echo "";}else{?>
                                                                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $post_v->youtube ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                                                    </iframe>
                                                                                  <?php }?>

                                                							</div>
                                                						</div>
                                                						<h4 class="blog-list-title"><?php echo $post_v->judul?></h4>
                                                						<div class="tour-info-line clearfix">
                                                							<div class="tour-info fl">
                                                					  	 		<?php echo $post_v->views_p?> views
                                                					  	 	</div>
                                                						</div>
                                                						<div class="blog-list-text color-grey-3"><?php echo $post_v->deskripsi?></div>
                                                						<a href="<?php echo base_url()?>vendors/<?php echo $post_v->namabisnis_seo?>" class="c-button small bg-grey-2 hv-dr-blue-2-o fr"><span>Kembali ke profil</span></a>
                                                					</div>
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
