<div class="acc-panel pengguna">
    		             <div class="acc-title active"><span class="acc-icon"></span>Data <span><?php echo $users['level'] ?></span></div>
    		              <div class="acc-body first">
                        <?php
                        $attributes = array('class'=>'f-login-form','role'=>'form');
                        echo form_open_multipart('user/edit_vendor',$attributes);
                        echo "
                        <input type='hidden' name='id' value='$users[id_users]'>
                        <h5>Nama Depan</h5>
                        <div class='input-style-1 b-50 type-2 color-2'>
                          <input name='namadepan' type='text' value='$users[namadepan]' >
                        </div>
                        <h5>Nama Belakang</h5>
                        <div class='input-style-1 b-50 type-2 color-2'>
                          <input name='namabelakang' type='text' value='$users[namabelakang]' >
                        </div>
                        <h5>Nomer WhatsApp</h5>
                        <div class='input-style-1 b-50 type-2 color-2'>
                          <input name='nowhatsapp' type='text' value='$users[nowhatsapp]' >
                        </div>
                        <h5>Username</h5>
                        <div class='input-style-1 b-50 type-2 color-3'>
                          <input name='username' type='text' value='$users[username]' readonly='on' >
                        </div>
                        <h5>Alamat Email</h5>
                        <div class='input-style-1 b-50 type-2 color-3'>
                          <input name='email' type='email' value='$users[email]' readonly='on'>
                        </div>
                        <h5>Password</h5>
                        <div class='input-style-1 b-50 type-2 color-2'>
                          <input name='password' type='password' onkeyup=\"nospaces(this)\"' >
                        </div>
                        <h5>Foto</h5>
                        <div class='input-style-1 b-50 type-2 color-2'>
                          <input name='foto' type='file' placeholder='Nama Anda'  >";
                          if ($users['foto'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_user/$users[foto]'>$users[foto]</a>"; }
                      echo "</div>
                        <button name ='submit' type='submit' class='c-button bg-dr-blue-2 hv-dr-blue-2-o'><span>Simpan</span></button>  ";

                          echo form_close();
                         ?>

    									</div>
    		     </div>