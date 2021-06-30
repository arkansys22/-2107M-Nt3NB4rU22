<div class="sidebar small-sidebar col-md-4">
<div class="widget review-widget ">
    <h1>Politik</h1>
  <ul class="review-posts-list">
    <?php foreach ($post_new_random as $post_new){
      $isi = character_limiter($post_new->isi_berita,200);
      $jdl = character_limiter($post_new->judul,640);
      ?>
    <li>
      <img <?php
if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='350' height='230'>";}
else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='100%' height='150'> ";}
?>
      <h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h2>

    </li>

    <?php } ?>
</div>
<div class="widget review-widget ">
    <h1>Wisata</h1>
  <ul class="review-posts-list">
    <?php foreach ($post_wisata as $post_new){
      $isi = character_limiter($post_new->isi_berita,200);
      $jdl = character_limiter($post_new->judul,640);
      ?>
    <li>
      <img <?php
if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='350' height='230'>";}
else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='100%' height='150'> ";}
?>
      <h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h2>

    </li>

    <?php } ?>
</div>

</div>
