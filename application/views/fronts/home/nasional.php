<?php
foreach ($post_nasional as $post_new)
{
$isi = character_limiter($post_new->isi_berita,200);
$jdl = character_limiter($post_new->judul,40);
?>
<li>
  <img <?php if(empty($post_new->gambar)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png' width='320' height='190'>";}
  else { echo " <img src='".base_url()."asset/foto_berita/".$post_new->gambar."'width='80' height='70'> ";}
  ?>

  <div class="post-content">
    <h2><a href="<?php echo base_url("$post_new->judul_seo ") ?>"><?php echo $jdl ?></a></h2>
    <ul class="post-tags">
      <li><i class="fa fa-clock-o"></i><?php echo tgl_indo($post_new->tanggal) ?></li>
    </ul>
  </div>
</li>
<?php } ?>
