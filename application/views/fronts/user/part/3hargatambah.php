<div class="acc-panel harga">
    									 <div class="acc-title active"><span class="acc-icon"></span>Daftar Harga</div>
    									 <div class="acc-body first">
                         <?php
                         $attributes = array('class'=>'f-login-form','role'=>'form');
                         echo form_open_multipart('user/tambah_harga',$attributes);
                         echo "
                         <input type='hidden' name='id' value='$users[username]'>
                         <h5>Judul</h5>
                         <div class='input-style-1 b-50 type-2 color-2'>
                           <input name='judul' type='text' placeholder='Judul harga dari jasa yang anda tawarkan' >
                         </div>
                         
                         <h5>Harga</h5>
                         <div class='col-xs-12 col-sm-6'>
                         <div class='input-style-1 b-50 type-2 color-5'>
                         <div class='drop-wrap drop-wrap-s-4 color-2'>
                         <select class='drop' name='harga_spec'>
                           <option class='drop-list' value='' selected>Pilih<i class='fa fa-angle-down'></i></option>
                           <option class='drop-list' value='Harga mulai dari'>Harga Mulai Dari</option>
                           <option class='drop-list' value='Harga terbaik hanya'>Harga Terbaik Hanya</option>
                           </select></div></div></div>
                           <div class='col-xs-12 col-sm-6'>
                         <div class='input-style-1 b-50 type-2 color-2'>
                           <input name='harga' type='number' placeholder='Harga jasa yang anda tawarkan' >
                         </div></div>
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
                         <h5>Desain Banner</h5>
                         <div class='input-style-1 b-50 type-2 color-2'>
                           <input name='foto' type='file' >";
                       echo "</div>
                         <button name ='submit' type='submit' class='c-button bg-dr-blue-2 hv-dr-blue-2-o'><span>Simpan</span></button>  ";

                           echo form_close();
                          ?>
    			   </div>
    				
    			</div>