<div class="acc-panel pengguna">
    		             <div class="acc-title active"><span class="acc-icon"></span>Data <span><?php echo $users['level'] ?></span></div>
    		              <div class="acc-body first">
    										<h5>Nama Anda</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    										<span><?php echo $users['namadepan'] ?> <?php echo $users['namabelakang'] ?></span>
    										</div>
                        <br><br>
    				 						<h5>Nomer WhatsApp</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<span><?php echo $users['nowhatsapp'] ?></span>
    										</div>
                        <br><br>
                        <h5>Username</h5>
    										<div class="input-style-1 b-50 brd-0 type-2 color-3">
    											<span><?php echo $users['username'] ?></span>
    										</div>
                        <br><br>
    				 						<h5>Alamat Email</h5>
    										<div class="input-style-1 b-50 brd-0 type-2 color-3">
    											<span><?php echo $users['email'] ?></span>
    										</div>
                        <br><br>
    				 						<h5>Password</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<span>*******</span>
    										</div>
                        <br><br>
    				 						<h5>Foto Pengguna</h5>
    										<p><?php $usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
                              if (trim($usr['foto'])==''){ $foto = 'blank.png'; }else{ $foto = $usr['foto']; } ?>
                          <img src="<?php echo base_url(); ?>/asset/foto_user/<?php echo $foto; ?>" class="img-circle" alt="User Image"></p>
                        <br><br>
                        <a class="button-s-2 bg-1 m-right" title="Edit Data" href="<?php echo base_url(); ?>user/edit_vendor/<?php echo $this->session->id_users; ?>"><span>Edit Profile</span></a>
    									</div>

    		     </div>