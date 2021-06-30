<div class="post-inner">
    <!--post daerah-->
<div class="post-head">
    <h2 class="title"><strong>Berita</strong> Nasional</h2>
    <div class="filter-nav">

    </div>
</div>
<!-- post body -->
<div class="post-body">
    <div id="post-slider" class="owl-carousel owl-theme">
        <?php
foreach ($post_nasional as $post_new)
{
$isi = character_limiter($post_new->isi_berita,200);
$jdl = character_limiter($post_new->judul,40);
?>
        <div class="item">
            <div class="row">
                <div class="col-sm-6 main-post-inner bord-right">
                    <article>
                        <figure>
                            <a href="<?php echo base_url("$post_new->judul_seo ") ?>"><img <?php
        if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='350' height='230'>";}
        else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='350' height='230'> ";}
        ?></a>
                            <span class="post-category"><?php echo $post_new->nama_kategori ?></span>
                        </figure>
                        <div class="post-info">
                            <h3><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h3>
                            <ul class="authar-info">
                                <li class="authar"><a>by <?php echo $post_new->username ?></a></li>
                                <li><i class="ti-timer"></i> <?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?>  <?php echo $post_new->jam ?></li>
                            </ul>
                            <p><?php echo $isi ?></p>
                        </div>
                    </article>
                </div>
                <?php } ?>


                <div class="col-sm-6">
                    <div class="news-list">
                      <?php
      foreach ($post_nasional_2 as $post_new)
      {
      $isi = character_limiter($post_new->isi_berita,170);
      $jdl = character_limiter($post_new->judul,40);
      ?>
                        <div class="news-list-item">
                            <div class="img-wrapper">
                                <a href="<?php echo base_url("$post_new->judul_seo ") ?>" class="thumb">
                                    <img <?php
                if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='100' height='85'>";}
                else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='100' height='80'> ";}
                ?>

                                </a>
                            </div>
                            <div class="post-info-2">
                                <h5><a href="<?php echo base_url("$post_new->judul_seo ") ?>" class="title"><?php echo $jdl ?></a></h5>
                                <ul class="authar-info">
                                    <li><i class="ti-timer"></i> <?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?></li>
                                </ul>
                            </div>
                        </div>
<?php } ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- Post footer -->
<div class="post-footer">
    <div class="row thm-margin">
        <div class="col-xs-12 col-sm-8 col-md-9 thm-padding">
            <a href="<?php echo base_url("berita/kategori/nasional") ?>" class="more-btn">Berita Lain Nasional</a>
        </div>

    </div>
</div>
</div>
