
<ul class="list-posts">
  <?php
  foreach ($post_popular as $post_new)
  {
  $isi = character_limiter($post_new->isi_berita,200);
  $jdl = character_limiter($post_new->judul,540);
  ?>
  <li>
    <div class="post-content">
      <h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h2>
      <ul class="post-tags">
        <li><i class="fa fa-clock-o"></i><?php echo tgl_indo($post_new->tanggal) ?></li>
      </ul>
    </div>
  </li>
  <?php } ?>


</ul>
