


<div class="article-box col-md-8 col-xs-12" >
								<div class="title-section">
									<h1><span>Berita Terbaru </span></h1>
								</div>
								<?php
                                    foreach ($post_terbaru as $post_new)
                                    {
                                    $isi = character_limiter($post_new->konten,200);
                                    $jdl = character_limiter($post_new->judul,80);
                                ?>
								<div class="news-post standard-post2">
									<div class="post-gallery">
										 <img <?php
if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='50' height='50'>";}
else { echo " <img src='".base_url()."asset/foto_vendor/".$post_new->gambar."'width='170' height='250'> ";}
?>
									</div>
									<div class="post-title">
									    <h2 ><a href="<?php echo base_url("$post_new->judul_seo ") ?>" class="title"   padding-left="1px"><?php echo $jdl ?></a></h2>
										<ul class="post-tags">
										    <li><i class="fa fa-clock-o"></i><?php echo $post_new->hari ?>, <?php echo tgl_indo($post_new->tanggal) ?> <?php echo $post_new->jam ?></li>
											<li><i class="fa fa-user"></i>by <a href="#"> <?php echo $post_new->username ?></a></li>
											<li><i class="fa fa-eye"></i> <?php echo $post_new->views ?></li>
										</ul>
									</div>
									<div class="post-content">
									    <?php echo $isi ?><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><span>Selengkapnya</span></a>
									</div>
								</div>


								<?php } ?>
							</div>
