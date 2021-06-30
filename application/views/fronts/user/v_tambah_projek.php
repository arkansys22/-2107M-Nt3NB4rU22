<!DOCTYPE html>
<html lang="id">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $this->load->view('fronts/utama/meta')?>
    <?php $this->load->view('fronts/utama/css')?>
    <?php $this->load->view('fronts/utama/wilayah')?>
    <script type="text/javascript" src="<?php echo base_url('asset/ckeditor/ckeditor.js'); ?>">

    </script>
  </head>
  <body data-color="theme-1">
    <?php $this->load->view('fronts/utama/loading')?>
    <?php $this->load->view('fronts/utama/header2')?>
    <div class="main-wraper bg-grey-2 padd-90">
    <br><br><br>
    </div>

    <div class="main-wraper bg-grey-2 padd-90">
    	<?php $this->load->view('fronts/user/menu')?>

    	<div class="container">
    		<div class="accordion-filter row">
    			<div class="col-xs-12 col-sm-3">
    				<div class="accordion-chooser">
              <a data-fifter=".projek" href="#" class="active" >Projek</a>
    					<a data-fifter=".order" href="#">Penawaran</a>

    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-9">
    		   <div class="accordion style-5">
    		     <div class="acc-panel projek">
    		             <div class="acc-title "><span class="acc-icon"></span>Tambah Projek <span><?php echo $users['level'] ?></span></div>
                     <div class="acc-body first">
                       <?php
                       $attributes = array('class'=>'f-login-form','role'=>'form');
                       echo form_open_multipart('user/tambah_projek',$attributes);
                       echo "
                       <input type='hidden' name='id' value='$users[username]'>
                       <h5>Judul</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                         <input name='judul' type='text' placeholder='Judul harga dari jasa yang anda tawarkan' >
                       </div>
                       <h5>Youtube</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                         <input name='youtube' type='text' placeholder='Kode Link Youtube' >
                       </div>
                       <h5>Deskripsi</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                       <textarea id='editor1' class='area-style-1 color-1' style='height:260px' name='deskripsi' placeholder='Jelaskan secara detail bisnis yang anda tawarkan'></textarea>
                       </div>
                       <h5>Meta Deskripsi</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                       <textarea class='area-style-1 color-1' name='meta_deskripsi'  placeholder='Meta deskripsi untuk memudahkan mesin pencari google'></textarea>
                       </div>
                       <h5>Kata Kunci</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                         <input name='keyword' type='text' >
                       </div>
                       <h5>Cover Landscape (Max. Size 1 Mb)</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                         <input name='foto1' type='file' >
                         <h5>Landscape (Max. Size 1 Mb)</h5>
                         <div class='input-style-1 b-50 type-2 color-2'>
                           <input name='foto2' type='file' >
                           <h5>Landscape (Max. Size 1 Mb)</h5>
                           <div class='input-style-1 b-50 type-2 color-2'>
                             <input name='foto3' type='file' >
                             <h5>Portrait (Max. Size 1 Mb)</h5>
                             <div class='input-style-1 b-50 type-2 color-2'>
                               <input name='foto4' type='file' >
                               <h5>Portrait (Max. Size 1 Mb)</h5>
                               <div class='input-style-1 b-50 type-2 color-2'>
                                 <input name='foto5' type='file' >";
                     echo "</div></div></div></div></div>
                       <button name ='submit' type='submit' class='c-button bg-dr-blue-2 hv-dr-blue-2-o'><span>Simpan</span></button>  ";

                         echo form_close();
                        ?>
           </div>

    		     </div>

             <div class="acc-panel order">
                  <div class="acc-title"><span class="acc-icon"></span>Order <span><?php echo $users['level'] ?></span></div>
                  <div class="acc-body">
                     <a class="button-s-2 bg-1 m-right" title="Edit Data" href="<?php echo base_url(); ?>user/tambah_harga/"><span>Tambah Paket Harga</span></a>
                     <br><br>
                     <div class="main-wraper bg-grey-2 padd-90">
                       <div class="row">
                         <?php
                         $no = 1;
                         foreach ($records as $row){
                         $tgl_posting = tgl_indo($row['tanggal']);
                         if ($row['status']=='Y'){ $status = '<span style="color:green">Published</span>'; }else{ $status = '<span style="color:red">Unpublished</span>'; }
                         echo "
                         <div class='col-mob-12 col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                             <div class='hotel-item style-4'>
                                 <div class='radius-top'>
                                   <img src='".base_url()."asset/harga/$row[foto]' alt=''>
                                 </div>
                                 <div class='title'>
                                   <div class='hotel-place color-dark-2 clearfix'>$row[harga]</div>
                                     <h4><b><a href='".base_url()."vendor/$row[judul_seo]' >$row[judul]</a></b></h4>
                                        <div class='rate-wrap'>
                                        <i>$row[views] Views</i>
                                       </div>

                                   <p class='f-14'>$row[deskripsi]</p>
                                   <div class='clearfix'>
                                     <a href='".base_url()."user/delete_harga/$row[id_harga]' class='c-button bg-grey-3-t hv-grey-3-t fl'>Hapus</a>
                                     <a href='".base_url()."user/edit_harga/$row[id_harga]' class='c-button bg-sea hv-sea-o fr'>Edit</a>
                                   </div>
                                 </div>
                               </div>
                       </div>";
                           $no++;
                         }
                         ?>



                       </div>

                  </div>
    			</div>
    		</div>
    	</div>
    </div>
    </div>






    <?php $this->load->view('fronts/utama/footer')?>
    <?php $this->load->view('fronts/utama/js')?>
    <?php $this->load->view('fronts/utama/ckeditor')?>
    </body>
</html>
