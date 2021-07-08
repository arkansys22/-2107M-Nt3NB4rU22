<!DOCTYPE html>
<html lang="id">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $this->load->view('fronts/vendors/meta')?>
    <?php $this->load->view('fronts/utama/css')?>
  </head>
  <body data-color="theme-1">
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
										     <img class="img-responsive noborder hotel-img" <?php if(empty($post_v->gambar)) {echo "<img src='".base_url()."asset/frontend/noimages.jpg'>";}
                                                         			        else { echo " <img src='".base_url()."asset/gambar_bisnis/".$post_v->gambar."'> ";}
                                                         			        ?>

											<div class="tour-layer delay-1"></div>
											<div class="hotel-desc">
													<span class="color-dark-2-light"><strong><span><?php echo $post_v->namabisnis?></span></strong></span>
													<p><?php echo $post_v->nama_kategori?></p>
													<p><?php echo $post_v->views?> Dilihat</p>

											</div>
										</div>
											<div class="contact-line"><p><i class="fa fa-map-marker"></i><a href="#"> <?php echo $post_v->nama_kec?> - <?php echo $post_v->nama?></p></a></div>
											<div class="contact-line"><p><strong>Media Sosial</strong></p></div>
											<div class="contact-line">
												<a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?php echo $post_v->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_v->namabisnis?>%20di%20Mantenbaru.com.%20Bisa%20bantu%20saya?" class="button-s-2 bg-4 m-right"><i class="fa fa-whatsapp"> WA</i></a>
												<a target="_blank" href="https://www.facebook.com/<?php echo $post_v->fb?>" class="button-s-2 bg-7 m-right"><i class="fa fa-facebook"> FB</i></a>
												<a target="_blank" href="https://www.instagram.com/<?php echo $post_v->ig?>" class="button-s-2 bg-1 m-right"><i class="fa fa-instagram"> IG</i></a>
												<a target="_blank" href="https://www.youtube.com/channel/<?php echo $post_v->twitter?>" class="button-s-2 bg-5 m-right"><i class="fa fa-youtube"> YT</i></a>
											</div>
											<hr>
											<div class="contact-line">
												<center><a href="https://api.whatsapp.com/send?phone=+62<?php echo $post_v->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_v->namabisnis?>%20di%20Mantenbaru.com.%20Saya%20mau%20tanya-tanya%20dulu." class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><i class="fa fa-comments-o"> Konsultasi Free</i></a></center>
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

                                              <p></p><li class="color-fb"><a href="http://www.facebook.com/sharer.php?u=<?php echo base_url("vendors/$post_v->namabisnis_seo ") ?>" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo base_url("vendors/$post_v->namabisnis_seo ")?>','newwindow','width=400,height=350');  return false;" title="Facebook" target="_blank" ><i class="fa fa-facebook" ></i>Facebook</a></li>
                                              <li class="color-ig"><a href="whatsapp://send?text=Produk terbaik <?php echo $post_v->namabisnis ?> kini ada di Mantenbaru.com. Klik <?php echo base_url("vendors/$post_v->namabisnis_seo ") ?> untuk info lebih lanjut"><i class="fa fa-whatsapp"></i>Whatsapp</a></li>

                                            </div>
					    </div>
  				    </div>
  			    </div>
  		    <div class="col-xs-12 col-sm-8 col-md-8">
											<div class="col-md-12">
							 				<div class="simple-tab bg-white tab-3 color-3 tab-wrapper">
							 					<div class="tab-nav-wrapper">
							 						<div class="nav-tab  clearfix">
							 							<div class="nav-tab-item">
							 							    <?php $jmla = $this->model_app->view_where2('projek',$post_v->username)->num_rows(); ?>
							 								Projek (<?php echo $jmla; ?>)
							 							</div>
							 							<div class="nav-tab-item">
							 							    <?php $jmla_harga = $this->model_app->view_where2('harga',$post_v->username)->num_rows(); ?>
							 								Harga(<?php echo $jmla_harga; ?>)
							 							</div>
														<div class="nav-tab-item">
							 								Ulasan Klien
							 							</div>

							 						</div>
							 					</div>
							 					<div class="tabs-content clearfix">
							 						<div class="tab-info active clearfix">
															<div class="col-xs-12 col-sm-12 col-md-12 clearfix">
																<div class="row">
												    			   <div class="arrows">
												    				<div class="swiper-container hotel-slider" data-autoplay="5000" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="4">
																		  <div class="swiper-wrapper">
																		      <?php $no = 1; foreach ($post_projek as $post_p) {
																		          if ($post_v->username == $post_p->username){

																		      echo "<div class='swiper-slide'>
																		          <div class='hotel-item'>
																		            <a href='".base_url()."projek-detail/$post_p->judul_seo'>
    																		          	 <div class='radius-top'>";
    																		          	     if(empty($post_p->foto1)) {
    																		          	     echo "<img class='img-responsive img-full' src='".base_url()."asset/frontend/noimage.png'>";}
                                                                             			        else { echo "<img class='img-responsive img-full' src='".base_url()."asset/projek/$post_p->foto1'> "; }

    																		          	 echo "</div>
    																		          	 <div class='title clearfix'>
                                                     <div class='judul_content'>
    																		          	    <h5><b>$post_p->judul</b></h5>
                                                        </div>
    																		            </div>
    																		          </div>
																		            </a>
																			  </div>";
																				    $no++;
																			 }} ?>
																		  </div>
																		<div class="pagination"></div>
																			<div class="swiper-arrow-left arrows-travel"><span class="fa fa-angle-left"></span></div>
																			<div class="swiper-arrow-right arrows-travel"><span class="fa fa-angle-right"></span></div>
																	</div>
																  </div>
												    		</div>
								 							</div>
							 						</div>
							 						<div class="tab-info">
														<div class="tour-item-grid row">
                                                        <?php $no = 1; foreach ($post_harga as $post_h) {  ?>

											 				<?php if ($post_v->username == $post_h->username){ ?>
															<div class="col-mob-12 col-xs-6 col-sm-6 col-md-6 clear-xs-2">
											 					<div class="tour-item style-2">
											 						<div class="radius-top">

											 						 	<img class="img-responsive img-full" <?php if(empty($post_h->foto_h)) {echo "<img src='".base_url()."asset/frontend/noimage.png'>";}
                                                         			        else { echo " <img src='".base_url()."asset/harga/".$post_h->foto_h."'> ";}
                                                         			        ?>
											 						</div>
											 						<div class="tour-desc bg-white">
											 							<a href="<?php echo base_url("harga-detail/$post_h->judul_seo ") ?>" class="c-button bg-green hv-green-o delay-2 small"><span>Mau Ini</span></a>
											 							<div class="color-dark-2 link-green"><?php echo $post_h->harga_spec?> Rp.<?php echo number_format($post_h->harga,0,',','.')?></div>
											 							<div class="tour-text color-grey-3"><?php echo $post_h->judul?></div>
											 					 	</div>
											 					</div>
											 				</div>

											 				<?php } ?>
											 			<?php } ?>

											 			</div>
							 						</div>
							 						<div class="tab-info">
														<div class="list-content clearfix">
									  						<div class="list-item-entry clearfix">
														        <div class="hotel-item style-9 bg-white">
														        	<div class="table-view">
															          	<div class="radius-top cell-view">
															          	 	<img src="img/tour_list/cruise_grid_1.jpg" alt="">
															          	</div>
															          	<div class="title hotel-middle cell-view">
																			<div class="tour-info-line clearfix">
																				<div class="tour-info fl">
																		  	 		<span class="font-style-2 color-grey-3"><strong>29 Februari 2021</strong></span>
																		  	 	</div>
																				<div class="tour-info fl">

																									<div class="rate">
																										<span class="fa fa-star color-yellow"></span>
																										<span class="fa fa-star color-yellow"></span>
																										<span class="fa fa-star color-yellow"></span>
																										<span class="fa fa-star color-yellow"></span>
																										<span class="fa fa-star color-yellow"></span>
																									</div>


																					</div>
																			</div>
															          	    <h4><b>FITUR DALAM PENGEMBANGAN</b></h4>
																            <p class="f-14 color-grey-3">Akan segera hadir. Mohon sabar menunggu... ^_^</p>


																					 <div class="buttons-block bg-dr-blue-2">
																							<h4><b>BERSABAR YA</b></h4>
																					 		<p class="f-14 color-grey-3">Mohon bersabar.. ^_^</p>
															            </div>

															        </div>
														        </div>
									  						</div>


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
