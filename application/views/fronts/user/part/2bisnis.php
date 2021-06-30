<div class="acc-panel bisnis">
                  <div class="acc-title"><span class="acc-icon"></span>Data Bisnis</div>
                   <div class="acc-body">
                        <h5>Kategori Bisnis</h5>
    										<div class="input-style-1 b-50 type-2 color-3">
    											<span>
    											<?php 
    											foreach ($katbisnis as $row){
                                                if ($users2['id_kategori'] == $row['id_kategori']){
                                                    echo $row['nama_kategori'];
                                                    }
    											}
    											?></span>
    										</div>
                        <br><br>
                        <h5>Nama Bisnis</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span><?php echo $users2['namabisnis'] ?></span>
    										</div>
                        <br><br>
                        <h5>Tentang Bisnis Anda</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span><?php echo $users2['tentangbisnis'] ?></span>
    										</div>
                        <br><br>
                        <h5>Nomer Bisnis Anda</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span><?php echo $users2['nomerbisnis'] ?></span>
    										</div>
                        <br><br>
                         <h5>Harga minimum</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span>Rp. 
    											<?php 
    											foreach ($katharga as $row){
                                                if ($users2['id_harga'] == $row['id_harga']){
                                                    echo number_format($row['harga'],0,',','.');
                                                    }}
    											?></span>
    										</div>
                        <br><br>
                        <h5>Provinsi</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span>
    											    <?php 
    											foreach ($provinsi as $row){
                                                if ($users2['propinsi'] == $row['id']){
                                                    echo $row['nama'];
                                                    }
    											} ?></span>
    										</div>
                        <br><br>
                        <h5>Kota/Kabupaten</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span>
    											    <?php 
    											foreach ($kabupaten as $row){
                                                if ($users2['kabupaten'] == $row['id']){
                                                    echo $row['nama'];
                                                    }
    											} ?>
    											    </span>
    										</div>
                        <br><br>
                        <h5>Kecamatan</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span>
    											    <?php 
    											foreach ($kecamatan as $row){
                                                if ($users2['kecamatan'] == $row['id']){
                                                    echo $row['nama_kec'];
                                                    }
    											} ?>
    											    </span>
    										</div>
                        <br><br>
                        <h5>Kode Pos</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span><?php echo $users2['kodepos'] ?></span>
    										</div>
                        <br><br>
                        <h5>Alamat Bisnis</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span><?php echo $users2['alamat'] ?></span>
    										</div>
                        <h5>Facebook</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span><?php echo $users2['fb'] ?></span>
    										</div>
                        <br><br>
                        <h5>Instagram</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span><?php echo $users2['ig'] ?></span>
    										</div>
                        <br><br>
                        <h5>Youtube</h5>
                        <div class="input-style-1 b-50 type-2 color-3">
    											<span><?php echo $users2['twitter'] ?></span>
    										</div>
    										
    										<h5>Logo Bisnis</h5>
    										
    										<span><?php $users2 = $this->model_app->view_where('users_bisnis', array('username'=> $this->session->username))->row_array();
                                                if ($users2['gambar']==''){ $foto = 'blank.png'; }else{ $foto = $users2['gambar']; } ?>
                                                <img src="<?php echo base_url(); ?>asset/gambar_bisnis/<?php echo $users2['gambar']; ?>" class="img-responsive"></span>
                                           
    										
                        <p><br><br></p>
                        <a class="button-s-2 bg-1 m-right" title="Edit Data" href="<?php echo base_url(); ?>user/edit_bisnis/<?php echo $this->session->username; ?>"><span>Edit Bisnis</span></a>
                      </div>
             </div>