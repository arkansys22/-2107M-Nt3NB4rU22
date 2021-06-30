<div class="acc-panel harga">
    									 <div class="acc-title"><span class="acc-icon"></span>Daftar Harga</div>
    									 <div class="acc-body">
                          <a class="button-s-2 bg-1 m-right" title="Edit Data" href="<?php echo base_url(); ?>user/tambah_harga/"><span>Tambah Paket Harga</span></a>
                          <br><br>
                       <div class="main-wraper padd-90">
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
                                        <img src='".base_url()."asset/harga/$row[foto_h]' alt=''>
                                      </div>
                                      <div class='title'>
                                        <div class='hotel-place color-dark-2 clearfix'>Rp. "; ?><?php echo number_format($row[harga]) ?><?php echo"</div>
                                          <h4><b><a href='".base_url()."vendor/$row[judul_seo]' >$row[judul]</a></b></h4>
                                             <div class='rate-wrap'>
                                             <i>$row[views_h] Views</i>
                                        </div>

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