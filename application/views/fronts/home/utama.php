	<!-- slider-caption-box -->
<div class="slider-caption-box">
	<div class="slider-holder">

	<ul class="slider-call">
		<?php foreach ($post_utama as $post_new){
			$isi = character_limiter($post_new->isi_berita,200);
			$jdl = character_limiter($post_new->judul,70);
		?>
			<li>
				<div class="news-post standard-post">
				<div class="post-content">
						<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><?php echo tgl_indo($post_new->tanggal) ?></li>
						<li><i class="fa fa-user"></i>by <a href="#"><?php echo $post_new->username ?></a></li>
						<li><i class="fa fa-eye"></i><?php echo $post_new->views ?></li>
						</ul>
						<h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h2>
				</div>
				<div class="post-gallery">
				<img <?php if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='350' height='230'>";}
			        else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='350' height='330'> ";}
			        ?>
				</div>
				</div>
				</li>
				<?php } ?>
		</ul>
	</div>
													<div id="bx-pager">
														<?php $start = -1; foreach ($post_utama1 as $post_new) {
															$isi = character_limiter($post_new->isi_berita,170);
															$jdl = character_limiter($post_new->judul,40);
														?>
														<a data-slide-index="<?php echo ++$start?>" href="<?php echo base_url("$post_new->judul_seo ") ?>">
															<?php echo $jdl ?>
															<span><i class="fa fa-clock-o"></i><?php echo tgl_indo($post_new->tanggal) ?></span>
														</a>
														<?php } ?>
													</div>
											</div>
