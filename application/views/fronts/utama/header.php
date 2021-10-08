<header class="type-4 hovered color-10"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <div class="top-header-bar bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">


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
        <li class="type-1"><a href="<?php echo base_url()?>vendors">Semua Vendor<span class="fa fa-angle-down"></span></a>
          <ul class="dropmenu">
            <?php $no = 1; foreach ($post_kategori as $post_k) {  ?>
                    <li><a href="<?php echo base_url()?>vendors/kategori/<?php echo $post_k->kategori_seo?>"><?php echo $post_k->nama_kategori?></a></li>
                    <?php } ?>
          </ul>
        </li>
        <!-- <li class="type-1"><a href="#">Artikel<span class="fa fa-angle-down"></span></a>
          <ul class="dropmenu">
            <li><a href="<?php echo base_url()?>artikel/kategori/tips-hubungan">Tips Hubungan</a></li>
            <li><a href="<?php echo base_url()?>artikel/kategori/inspirasi-pernikahan">Inspirasi Pernikahan</a></li>
          </ul>
        </li> -->
        <li class="type-1"><a href="#">Akses Pengguna<span class="fa fa-angle-down"></span></a>
          <ul class="dropmenu">
            <li><a href="<?php echo base_url()?>login">Masuk</a></li>
            <li><a href="<?php echo base_url()?>daftar">Daftar</a></li>
          </ul>
        </li>
        </ul>
     </nav>
     </div>
       </div>
    </div>
 </div>
</header>
