
<div class="widget post-widget">
  <div class="title-section">
    <h1><span>Featured Video</span></h1>
  </div>
  <div class="news-post video-post">
    <?php
 foreach ($post_new_video as $post_new)
 {
   $jdl = character_limiter($post_new->jdl_video,30);

 ?>
    <img alt="" src="<?php echo base_url()?>asset/frontend/tech/upload/news-posts/video-sidebar.jpg">
    <a href="<?php echo $post_new->youtube ?>" class="video-link"><i class="fa fa-play-circle-o"></i></a>
    <div class="hover-box">
      <h2><a href="single-post.html"><?php echo $jdl ?></a></h2>
      <ul class="post-tags">
        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
      </ul>
    </div>
    <p></p>
    <?php } ?>
  </div>
</div>
