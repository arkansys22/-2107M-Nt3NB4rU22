<div class="post-inner">
    <!-- post header -->
    <div class="post-head">
        <h2 class="title"><strong>Berita</strong> Olahraga</h2>

    </div>
    <!-- post body -->
    <div class="post-body">
        <div id="post-slider-3" class="owl-carousel owl-theme">
            <!-- item one -->
            <div class="item">
                <div class="row">
                    <div class="col-sm-6 main-post-inner bord-right">
                      <?php
    foreach ($post_olahraga as $post_new)
    {
      $isi = character_limiter($post_new->isi_berita,150);
      $jdl = character_limiter($post_new->judul,30);
    ?>
                        <div class="more-post">
                            <a href="<?php echo base_url("$post_new->judul_seo ") ?>" class="news-image"><img <?php
        if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='320' height='190'>";}
        else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='320' height='190'> ";}
        ?></a>
                            <div class="post-text">
                                <span class="post-category"><?php echo $post_new->nama_kategori ?> </span>
                                <h4><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h4>
                                <ul class="authar-info">
                                    <li class="authar"><a >by <?php echo $post_new->username ?></a></li>
                                    <li><i class="ti-timer"></i> <?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?>  <?php echo $post_new->jam ?></li>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-6">
                      <?php
      foreach ($post_olahraga_2 as $post_new)
      {
        $caption = character_limiter($post_new->isi_berita,160);
        $jdl = character_limiter($post_new->judul,30);
      ?>
                        <div class="more-post">
                            <a href="<?php echo base_url("$post_new->judul_seo ") ?>" class="news-image"><img <?php
        if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='320' height='190'>";}
        else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='320' height='190'> ";}
        ?></a>

                            <div class="post-text">
                                <span class="post-category"><?php echo $post_new->nama_kategori ?></span>
                                <h4><?php echo $jdl ?></h4>
                                <ul class="authar-info">
                                  <li class="authar"><a >by <?php echo $post_new->username ?></a></li>
                                  <li><i class="ti-timer"></i> <?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?>  <?php echo $post_new->jam ?></li>
                                </ul>
                            </div>
                        </div>
                      <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- footer post -->
    <div class="post-footer">
        <div class="row thm-margin">
            <div class="col-xs-12 col-sm-8 col-md-9 thm-padding">
                <a href="<?php echo base_url("berita/kategori/olahraga") ?>" class="more-btn">Berita Lain Olahraga</a>
            </div>

        </div>
    </div>
</div>
