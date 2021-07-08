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
    					<a data-fifter=".penawaran" href="#">Penawaran</a>

    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-9">
    		   <div class="accordion style-5">
    		     <div class="acc-panel projek">
    		             <div class="acc-title "><span class="acc-icon"></span>Edit Projek <span><?php echo $users['level'] ?></span></div>
                     <div class="acc-body first">
                       <?php
                       $attributes = array('class'=>'f-login-form','role'=>'form');
                       echo form_open_multipart('user/edit_projek',$attributes);
                       echo "
                       <input type='hidden' name='ids' value='$projek[username]'>
                       <input type='hidden' name='id_projek' value='$projek[id_projek]'>
                       <h5>Judul</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                         <input name='judul' value='$projek[judul]' type='text' >
                       </div>
                       <h5>Youtube</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                         <input name='youtube' type='text' value='$projek[youtube]' >
                       </div>
                       <h5>Deskripsi</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                       <textarea id='editor1' class='area-style-1 color-1' style='height:260px' name='deskripsi' value='$projek[deskripsi]' >$projek[deskripsi]</textarea>
                       </div>
                       <h5>Meta Deskripsi</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                       <textarea class='area-style-1 color-1' name='meta_deskripsi'  value='$projek[deskripsi]'>$projek[meta_deskripsi]</textarea>
                       </div>
                       <h5>Kata Kunci</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                         <input name='keyword' type='text' value='$projek[keyword]'>
                       </div>
                       <h5>Cover Foto 1</h5>
                       <div class='input-style-1 b-50 type-2 color-2'>
                         <input name='foto1' type='file' >";
                         if ($projek['foto1'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/projek/$projek[foto1]'>$projek[foto1]</a>"; }
                     echo "</div>
                     <h5>Foto 2</h5>
                     <div class='input-style-1 b-50 type-2 color-2'>
                       <input name='foto2' type='file' >";
                       if ($projek['foto2'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/projek/$projek[foto2]'>$projek[foto2]</a>"; }
                   echo "</div>
                   <h5>Foto 3</h5>
                   <div class='input-style-1 b-50 type-2 color-2'>
                     <input name='foto3' type='file' >";
                     if ($projek['foto3'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/projek/$projek[foto3]'>$projek[foto3]</a>"; }
                 echo "</div>
                 <h5>Foto 4</h5>
                 <div class='input-style-1 b-50 type-2 color-2'>
                   <input name='foto4' type='file' >";
                   if ($projek['foto4'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/projek/$projek[foto4]'>$projek[foto4]</a>"; }
               echo "</div>
               <h5>Foto 5</h5>
               <div class='input-style-1 b-50 type-2 color-2'>
                 <input name='foto5' type='file' >";
                 if ($projek['foto5'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/projek/$projek[foto5]'>$projek[foto5]</a>"; }
                 echo "</div>
                       <button name ='submit' type='submit' class='c-button bg-dr-blue-2 hv-dr-blue-2-o'><span>Simpan</span></button>  ";

                         echo form_close();
                        ?>
                </div>

    		     </div>
             <div class="acc-panel penawaran">
                  <div class="acc-title"><span class="acc-icon"></span>Order <span><?php echo $users['level'] ?></span></div>
                  <div class="acc-body">
                    <div class="row">
                      Dalam Tahap Pengembangan. ^_^
                    </div>
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
