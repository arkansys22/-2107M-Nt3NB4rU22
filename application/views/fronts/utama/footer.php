<footer class="bg-dark type-2">
     <div class="container">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
           <div class="footer-block">
             <img src="<?php echo base_url()?>asset/images/<?=$identitas->logo ?>" alt="" class="logo-footer">
             <div class="f_text color-grey-7"><?=$identitas->meta_deskripsi ?></div>

           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="footer-block">
              <h6>Hubungi</h6>
                <div class="contact-info">
                 <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:<?=$identitas->no_telp ?>"><?=$identitas->no_telp ?></a></div>
                 <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:<?=$identitas->email ?>"><?=$identitas->email ?></a></div>
                 <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><?=$identitas->alamat ?></div>
                   </div>
       </div></div>
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="footer-block">
                    <h6>Follow Mantenbaru</h6>
               <ul class="footer-folow">
                 <li class="color-fb"><a href="<?=$identitas->facebook ?>" target="_blank"><i class="fa fa-facebook"></i>facebook</a></li>
                 <li class="color-ig"><a href="<?=$identitas->instagram ?>" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                 <li class="color-yt"><a href="<?=$identitas->youtube ?>" target="_blank"><i class="fa fa-twitter"></i>Youtube</a></li>
               </ul>
                  </div>
          </div>
       </div>
       </div>
     </div>
     <div class="footer-link bg-black">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
               <div class="copyright">
           <span>&copy; 2018 All rights reserved. <?=$identitas->nama_website ?></span>
         </div>
             <ul>
           <li><a class="link-aqua" href="#">Syarat & Ketentuan</a></li>
           <li><a class="link-aqua" href="<?php echo base_url()?>tentang-mantenbaru">tentang Kami</a></li>
         </ul>
           </div>
         </div>
       </div>
     </div>
   </footer>
