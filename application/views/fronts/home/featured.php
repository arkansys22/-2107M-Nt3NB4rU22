  <section class="block-wrapper shadow-white">
<div class="list-line-posts">
  <div class="container">

    <div class="owl-wrapper">
      <div class="owl-carousel" data-num="3">
        <?php
        foreach ($post_slider as $post_new)
        {  $jdl = character_limiter($post_new->judul,50);
        ?>
        <div class="item list-post">
          <?php
if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='400' height='200'>";}
else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='150' height='100'> ";}
?>
          <div class="post-content">
            <a href="<?php echo base_url("$post_new->nama_kategori ") ?>"><?php echo $post_new->nama_kategori ?></a>
            <h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $post_new->judul ?></a></h2>
            <ul class="post-tags">
              <li><i class="fa fa-clock-o"></i><?php echo $post_new->hari ?> <?php echo tgl_indo($post_new->tanggal) ?></li>
            </ul>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>

  </div>
</div>
</section>
