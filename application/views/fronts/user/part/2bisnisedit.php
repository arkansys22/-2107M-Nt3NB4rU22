<div class="acc-panel bisnis">
                    		          <div class="acc-title active"><span class="acc-icon"></span>Data Bisnis</div>
                                  <?php
                                  echo " <div class='acc-body first'>";
                                   $attributes = array('class'=>'f-login-form','role'=>'form');
                                   echo form_open_multipart('user/edit_bisnis',$attributes);
                                  echo "<input type='hidden' name='id' value='$users2[username]'>
                                  <h5>Kategori Bisnis</h5>
              										<div class='input-style-1 b-50 type-2 color-5'>
              											  <div class='type-2 color-8'>
              													<div class='drop-wrap drop-wrap-s-4 color-2'>
                                          <select class='drop' name='id_kategori'>";
                                            foreach ($record as $row){
                                                if ($users2['id_kategori'] == $row['id_kategori']){
                                                  echo "<option class='drop-list' value='$row[id_kategori]' selected>$row[nama_kategori]<i class='fa fa-angle-down'></i></option>";
                                                }else{
                                                  echo "<option class='drop-list' value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                }}
                        
                                      echo "</select></div></div></div>
                                      <h5>Nama Bisnis</h5>
                  										<div class='input-style-1 b-50 type-2 color-2'>
                  											<input name='namabisnis' type='text' value='$users2[namabisnis]' >
                  										</div>
                  										<h5>Tentang Bisnis Anda</h5>
                  										<div class='input-style-1 b-50 type-2 color-2'>
                  											<input name='tentangbisnis' type='text' value='$users2[tentangbisnis]' >
                  										</div>
                  										<h5>Nomer Bisnis Anda</h5>
                  										<div class='input-style-1 b-50 type-2 color-2'>
                  											<input name='nomerbisnis' type='text' value='$users2[nomerbisnis]' >
                  										</div>
                  					<h5>Harga Minimum</h5>
              										<div class='input-style-1 b-50 type-2 color-5'>
              											  <div class='type-2 color-8'>
              													<div class='drop-wrap drop-wrap-s-4 color-2'>
                                          <select class='drop' name='id_harga'>";
                                            foreach ($harga as $row){
                                                if ($users2['id_harga'] == $row['id_harga']){
                                                  echo "<option class='drop-list' value='$row[id_harga]' selected>$row[judul] - $row[harga]<i class='fa fa-angle-down'></i></option>";
                                                }else{
                                                  echo "<option class='drop-list' value='$row[id_harga]'>$row[judul] - $row[harga]</option>";
                                                }}
                        
                                      echo "</select></div></div></div>
                  					<h5>Provinsi</h5>
                                      <div class='input-style-1 b-50 type-2 color-5'>
                  											  <div class='type-2 color-8'>
                  													<div class='drop-wrap drop-wrap-s-4 color-2'>
                                              <select class='drop' name='provinsi' id='propinsi' onchange='loadKabupaten()'>
                                              <option value='' selected>- Pilih Propinsi -</option>";
                                              foreach ($propinsi ->result() as $p) {
                                                  if ($users2['propinsi'] == $p->id){
                                                echo "<option class='drop-list' value='$p->id' selected>$p->nama</option>";
                                                  }else{
                                                  echo "<option class='drop-list' value='$p->id'>$p->nama</option>";
                                                }
                                              }
                                      echo "</select></div></div></div>
                                      <h5>Kabupaten</h5>
                                      <div class='input-style-1 b-50 type-2 color-5'>
                  											  <div class='type-2 color-8'>
                  													<div class='drop-wrap drop-wrap-s-4 color-2'>
                                              <select class='drop' name='kabupaten' id='kabupatenArea' onchange='loadKecamatan()'>";
                                             
                                      echo "</select></div></div></div>
                                      <h5>Kecamatan</h5>
                                      <div class='input-style-1 b-50 type-2 color-5'>
                  											  <div class='type-2 color-8'>
                  													<div class='drop-wrap drop-wrap-s-4 color-2'>
                                              <select class='drop' name='kecamatan' id='kecamatanArea'>";
                                              
                                      echo "</select></div></div></div>
                                     
                  				 						<h5>Kode Pos</h5>
                  										<div class='input-style-1 b-50 type-2 color-2'>
                  											<input name='kodepos' type='text' value='$users2[kodepos]' >
                  										</div>
                  										<h5>Alamat Bisnis</h5>
                  										<div class='input-style-1 b-50 type-2 color-2'>
                  											<input name='alamat' type='text' value='$users2[alamat]' >
                  										</div>
                                      <h5>Facebook</h5>
                  										<div class='input-style-1 b-50 type-2 color-2'>
                  											<input name='fb' type='text' value='$users2[fb]' placeholder='Hanya userID dari Akun Facebook'>
                  										</div>
                                      <h5>Instagram</h5>
                  										<div class='input-style-1 b-50 type-2 color-2'>
                  											<input name='ig' type='text' value='$users2[ig]' placeholder='Hanya userID dari Akun Instagram tanpa @'>
                  										</div>
                                      <h5>Youtube</h5>
                  										<div class='input-style-1 b-50 type-2 color-2'>
                  											<input name='twitter' type='text' value='$users2[twitter]' placeholder='Hanya userID dari Channel Youtube'>
                  										</div>
                  										<h5>Foto</h5>
                        <div class='input-style-1 b-50 type-2 color-2'>
                          <input name='foto' type='file' placeholder='Nama Anda'>";
                          if ($users2['gambar'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/gambar_bisnis/$users2[gambar]'>$users2[gambar]</a>"; }
                      echo "</div>
                  										<p><br><br></p>
                                      <button name ='submit' type='submit' class='c-button bg-dr-blue-2 hv-dr-blue-2-o'><span>Simpan</span></button>
                                      ";
                                      echo form_close();
                              ?>
                              </div>
                             </div>