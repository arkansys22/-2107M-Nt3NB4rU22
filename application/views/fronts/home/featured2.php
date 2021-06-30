<section class="slider-inner">
    <div class="container">
        <div class="row thm-margin">
            <div class="col-xs-12 col-sm-8 col-md-8 thm-padding">
                <div class="slider-wrapper">
                    <div id="owl-slider" class="owl-carousel owl-theme">
                      <?php
foreach ($post_slider as $post_new)
{
  $jdl = character_limiter($post_new->judul,50);
?>
                        <div class="item">
                            <div class="slider-post post-height-1">
                                <a href="<?php echo base_url("$post_new->judul_seo ") ?>" class="news-image"><img <?php
            if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='400' height='200'>";}
            else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='150' height='100'> ";}
            ?> </a>
                                <div class="post-text">
                                    <span class="post-category"><?php echo $post_new->nama_kategori ?></span>
                                    <h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $post_new->judul ?> </a></h2>
                                    <ul class="authar-info">
                                        <li class="authar"><a >by <?php echo $post_new->username ?></a></li>
                                        <li class="date"><?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?>  <?php echo $post_new->jam ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>
