<div class="acc-panel harga">
    									 <div class="acc-title active"><span class="acc-icon"></span>Daftar Harga</div>
    									 <div class="acc-body first">
                         <?php
                         $attributes = array('class'=>'f-login-form','role'=>'form');
                         echo form_open_multipart('user/edit_harga',$attributes);
                         echo "
                         <input type='hidden' name='ids' value='$harga[username]'>
                         <input type='hidden' name='id_harga' value='$harga[id_harga]'>
                         <h5>Judul</h5>
                         <div class='input-style-1 b-50 type-2 color-2'>
                           <input name='judul' value='$harga[judul]' type='text' >
                         </div>
                         <h5>Harga</h5>
                         <div class='col-xs-12 col-sm-6'>
                         <div class='input-style-1 b-50 type-2 color-5'>
                         <div class='drop-wrap drop-wrap-s-4 color-2'>
                         <select class='drop' name='harga_spec'>
                           <option class='drop-list' value='$harga[harga_spec]' selected>$harga[harga_spec]<i class='fa fa-angle-down'></i></option>";
                           if ($harga['harga_spec'] == ''){
                           echo "<option class='drop-list' value='' selected>Pilih<i class='fa fa-angle-down'></i></option>
                           <option class='drop-list' value='Harga mulai dari'>Harga Mulai Dari</option>
                           <option class='drop-list' value='Harga terbaik hanya'>Harga Terbaik Hanya</option>";
                            }elseif ($harga['harga_spec'] == 'Harga mulai dari'){
                         echo "<option class='drop-list' value='Harga terbaik hanya'>Harga Terbaik Hanya</option>";
                            }else{
                          echo"<option class='drop-list' value='Harga mulai dari'>Harga Mulai Dari</option>";
                           }
                           echo "</select></div></div></div>
                           <div class='col-xs-12 col-sm-6'>
                             <div class='input-style-1 b-50 type-2 color-2'>
                               <input name='harga' type='number' value='$harga[harga]' >
                             </div>
                            </div>
                         <h5>Deskripsi</h5>
                         <div class='input-style-1 b-50 type-2 color-2'>
                         <textarea id='editor1' class='area-style-1 color-1' style='height:260px' name='deskripsi' value='$harga[deskripsi]' >$harga[deskripsi]</textarea>
                         </div>
                         <h5>Meta Deskripsi</h5>
                         <div class='input-style-1 b-50 type-2 color-2'>
                         <textarea class='area-style-1 color-1' name='meta_deskripsi'  value='$harga[deskripsi]'>$harga[meta_deskripsi]</textarea>
                         </div>
                         <h5>Kata Kunci</h5>
                         <div class='input-style-1 b-50 type-2 color-2'>
                           <input name='keyword' type='text' value='$harga[keyword]'>
                         </div>
                         <h5>Desain Banner</h5>
                         <div class='input-style-1 b-50 type-2 color-2'>
                           <input name='foto' type='file' >";
                           if ($harga['foto_h'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/harga/$harga[foto_h]'>$harga[foto_h]</a>"; }
                       echo "</div>
                         <button name ='submit' type='submit' class='c-button bg-dr-blue-2 hv-dr-blue-2-o'><span>Simpan</span></button>  ";

                           echo form_close();
                          ?>
    			   </div>

    			</div>