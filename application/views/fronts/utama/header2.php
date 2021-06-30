<header class="type-4 hovered color-10"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <div class="top-header-bar bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
        <div class="top-header-block fl e-mail">
          <img src="<?php echo base_url()?>asset/frontend/aspanel/img/phone_icon_blue.png" alt="">
            <a class="color-dark-2-light" href="#">Whatsapp: <?=$identitas->no_telp ?></a>
        </div>
        <div class="top-header-block fl phone">
          <img src="<?php echo base_url()?>asset/frontend/aspanel/img/mail_icon_blue.png" alt="">
            <a class="color-dark-2-light" href="mailto:marketing@mantenbaru.com">e-mail: <?=$identitas->email ?></a>
        </div>
        <div class="fr">
          <div class="top-header-block fl card">
            <img class="card-icon" src="<?php echo base_url()?>asset/frontend/aspanel/img/shop_icon_blue.png" alt="">
              <a class="color-dark-2-light" href="<?php echo base_url()?>login"><?php echo $users['username'] ?></a>
          </div>
            </div>
            </div>
        </div>
    </div>
  </div>
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <div class="nav">
          <a href="<?php echo base_url()?>" class="logo">
            <img src="<?php echo base_url()?>asset/images/<?=$identitas->logo ?>" alt="mantenbaru">
          </a>
          <div class="nav-menu-icon">
        <a href="#"><i></i></a>
      </div>
        <nav class="menu">
        <ul>
        <li class="type-1"><a href="<?php echo base_url()?>user/home">Edit Profil</a></li>
        <li class="type-1"><a href="<?php echo base_url()?>#">Ulasan</a></li>
        <li class="type-1"><a href="<?php echo base_url()?>#">Projek Saya</a></li>
        <li class="type-1"><a href="<?php echo base_url()?>#">View Profil</a></li>
        </ul>
     </nav>
     </div>
       </div>
    </div>
 </div>
</header>
