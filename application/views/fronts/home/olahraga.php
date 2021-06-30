<div class="widget post-widget">
  <div class="title-section">
    <h1><span>Olahraga</span></h1>
  </div>
  <?php foreach ($post_olahraga as $post_new) {
  $isi = character_limiter($post_new->isi_berita,150);
  $jdl = character_limiter($post_new->judul,350);
  ?>
    <div class="news-post standard-post2">
    <div class="post-gallery">
      <img <?php if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='320' height='190'>";}
      else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='320' height='190'> ";}
      ?>
    </div>
    <div class="post-title">
      <h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h2>
      <ul class="post-tags">
        <li><i class="fa fa-clock-o"></i><?php echo tgl_indo($post_new->tanggal) ?></li>
        <li><i class="fa fa-eye"></i><?php echo $post_new->views ?></a></li>
      </ul>
    </div>
  </div>
<?php } ?>

<ul class="list-posts">
    <?php foreach ($post_olahraga_2 as $post_new) {
      $caption = character_limiter($post_new->isi_berita,160);
      $jdl = character_limiter($post_new->judul,550);
      ?>
    <li>
    <img <?php
if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='350' height='230'>";}
else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='70' height='70'> ";}
?>
    <div class="post-content">
      <h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h2>
      <ul class="post-tags">
        <li><i class="fa fa-clock-o"></i><?php echo tgl_indo($post_new->tanggal) ?></li>
        <li><i class="fa fa-eye"></i><?php echo tgl_indo($post_new->views) ?></a></li>
      </ul>
    </div>

  </li>
    <?php } ?>
</ul>

</div>
