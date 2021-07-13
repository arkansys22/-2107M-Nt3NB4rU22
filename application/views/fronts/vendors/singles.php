<!DOCTYPE html>
<html lang="id">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $post_v->judul?> <?php echo $post_v->namabisnis?> <?php echo $post_v->nama_kategori?> <?php echo $post_v->nama?> | <?php echo $identitas->nama_website?></title>
    <meta name="title" content="<?php echo $post_v->judul?> <?php echo $post_v->namabisnis?> <?php echo $post_v->nama_kategori?> <?php echo $post_v->nama?> | <?php echo $identitas->nama_website?>">
    <meta name="site_url" content="<?php echo base_url()?>projek-detail/<?php echo $post_v->judul_seo ?>">
    <meta name="description" content="<?php echo $post_v->meta_deskripsi ?>">
    <meta name="keywords" content="<?php echo $post_v->namabisnis?>, <?php echo $post_v->nama_kategori?> <?php echo $post_v->nama?> <?php echo $post_v->keyword?> | <?php echo $identitas->nama_website?>">
    <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="web_author" content="arkansys.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
    <meta property="og:title" content="<?php echo $post_v->judul?> <?php echo $post_v->namabisnis?> <?php echo $post_v->nama_kategori?> <?php echo $post_v->nama?> | <?php echo $identitas->nama_website?>">
    <meta property="og:description" content="<?php echo $post_v->meta_deskripsi ?>">
    <meta property="og:url" content="<?php echo base_url()?>projek-detail/<?php echo $post_v->judul_seo ?>">
    <meta property="og:image" content="<?php echo base_url()?>asset/projek/<?php echo $post_v->foto1?>">
    <meta property="og:image:url" content="<?php echo base_url()?>asset/projek/<?php echo $post_v->foto1?>">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="350">
    <meta property="og:type" content="article">
    <link rel="shortcut icon" href="https://www.mantenbaru.com/asset/frontend/aspanel/img/fav.png" type="image/x-icon">
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
													<span class="color-dark-2-light"><a href="<?php echo base_url("vendors/$post_v->namabisnis_seo ") ?>"><strong><span><?php echo $post_v->namabisnis?></span></strong></a></span>
													<p><?php echo $post_v->nama_kategori?></p>
													<p><?php echo $post_v->views?> Dilihat</p>

											</div>
										</div>
											<div class="contact-line"><p><i class="fa fa-map-marker"></i><a href="#"> <?php echo $post_v->nama_kec?> - <?php echo $post_v->nama?></p></a></div>
											<div class="contact-line"><p><strong>Media Sosial</strong></p></div>
											<div class="contact-line">
												<a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?php echo $post_v->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_v->namabisnis?>%20di%20Mantenbaru.%20Bisa%20bantu%20saya?" class="button-s-2 bg-4 m-right"><i class="fa fa-whatsapp"> WA</i></a>
												<a target="_blank" href="https://www.facebook.com/<?php echo $post_v->fb?>" class="button-s-2 bg-7 m-right"><i class="fa fa-facebook"> FB</i></a>
												<a target="_blank" href="https://www.instagram.com/<?php echo $post_v->ig?>" class="button-s-2 bg-1 m-right"><i class="fa fa-instagram"> IG</i></a>
												<a target="_blank" href="https://www.youtube.com/channel/<?php echo $post_v->twitter?>" class="button-s-2 bg-5 m-right"><i class="fa fa-youtube"> YT</i></a>
											</div>
											<hr>
											<div class="contact-line">
												<center><a href="https://api.whatsapp.com/send?phone=+62<?php echo $post_v->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_v->namabisnis?>%20di%20Mantenbaru.%20Saya%20mau%20tanya-tanya%20dulu." class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><i class="fa fa-comments-o"> Konsultasi Free</i></a></center>
											</div>
											<br>
											<div class="row contact-line">
												<center><a href="https://api.whatsapp.com/send?phone=+62<?php echo $post_v->nowhatsapp?>&text=Halo,%20Saya%20menemukan%20<?php echo $post_v->namabisnis?>%20di%20Mantenbaru.%20Saya%20mau%20tanya%20harga%20dulu." class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><i class="fa fa-question-circle"> Cek Detail Harga</i></a></center>
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
                                              <li class="color-ig"><a href="whatsapp://send?text=<?php echo $post_v->namabisnis ?> kini ada di Mantenbaru. Klik <?php echo base_url("projek-detail/$post_v->judul_seo ") ?> untuk melihat projek terbaiknya."><i class="fa fa-whatsapp"></i>Whatsapp</a></li>

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


                                                							</div>
                                                              <?php if(empty($post_v->youtube)){ echo "";}else{
                                                                echo"<iframe width='100%' height='315px' src='https://www.youtube.com/embed/$post_v->youtube' frameborder='0' allowfullscreen>
                                                                </iframe>";}
                                                                ?>
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
