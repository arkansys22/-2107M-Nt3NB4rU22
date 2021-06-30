<div class="row row-m">
    <div class="col-sm-6 col-p">
      <?php
foreach ($post_wisata as $post_new)
{
$isi = character_limiter($post_new->isi_berita,250);
$jdl = character_limiter($post_new->judul,55);
?>
        <div class="posts card-post">
            <div class="post-grid post-grid-item">
                <figure class="posts-thumb">
                    <span class="post-category"><?php echo $post_new->nama_kategori ?></span>
                    <a href="<?php echo base_url("$post_new->judul_seo ") ?>"><img <?php
if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='350' height='230'>";}
else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='350' height='230'> ";}
?></a>
                </figure>
                <div class="posts-inner">
                    <h6 class="posts-title"><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h6>
                    <ul class="authar-info">
                      <li class="authar"><a >by <?php echo $post_new->username ?></a></li>
                      <li><i class="ti-timer"></i> <?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?>  <?php echo $post_new->jam ?></li>
                    </ul>
                    <p><?php echo $isi ?></p>
                </div>
                <div class="posts__footer card__footer">

                  <div class="col-xs-12 col-sm-8 col-md-9 thm-padding">
                      <a href="<?php echo base_url("berita/kategori/olahraga") ?>" class="more-btn">Berita Lain Wisata</a>
                  </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="col-sm-6 col-p">
      <?php
foreach ($post_wisata_2 as $post_new)
{
$isi = character_limiter($post_new->isi_berita,250);
$jdl = character_limiter($post_new->judul,40);
?>
        <div class="posts">
            <ul>
                <li class="post-grid">
                    <div class="posts-inner">
                        <span class="post-category"><?php echo $post_new->nama_kategori ?></span>
                        <h6 class="posts-title"><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h6>
                        <ul class="authar-info">
                          <li class="authar"><a >by <?php echo $post_new->username ?></a></li>
                          <li><i class="ti-timer"></i> <?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?>  <?php echo $post_new->jam ?></li>
                        </ul>
                        <p><?php echo $isi ?></p>
                    </div>
                </li>

            </ul>
        </div>
        <?php } ?>
    </div>
</div>
