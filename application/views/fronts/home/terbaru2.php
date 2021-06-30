<div class="post-inner">
    <!--post header-->
    <div class="post-head">
        <h2 class="title"><strong>Berita</strong> Terbaru</h2>
    </div>
    <!-- post body -->
    <?php
foreach ($post_terbaru as $post_new)
{
$isi = character_limiter($post_new->isi_berita,200);
$jdl = character_limiter($post_new->judul,40);
?>
    <div class="post-body">
        <div class="news-list-item articles-list">
            <div class="img-wrapper">
                <a href="<?php echo base_url("$post_new->judul_seo ") ?>" class="thumb"><img src="<?php echo base_url()?>asset/foto_berita/<?=$post_new->gambar?>" alt="" class="img-responsive"></a>
            </div>
            <div class="post-info-2">
                <h4><a href="<?php echo base_url("$post_new->judul_seo ") ?>" class="title"><?php echo $jdl ?></a></h4>
                <ul class="authar-info">
                  <li class="authar"><a >by <?php echo $post_new->username ?></a></li>
                  <li><i class="ti-timer"></i> <?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?>  <?php echo $post_new->jam ?></li>
                </ul>
                <p class="hidden-sm"><?php echo $isi ?></p>
            </div>
        </div>

    </div> <!-- /. post body -->
    <?php } ?>
    <!--Post footer-->
    <div class="post-footer">
        <div class="row thm-margin">
          <div class="col-xs-12 col-sm-8 col-md-9 thm-padding">
              <a href="<?php echo base_url("berita/news") ?>" class="more-btn">More News Update</a>
          </div>
        </div>
    </div> <!-- /.Post footer-->
</div>
