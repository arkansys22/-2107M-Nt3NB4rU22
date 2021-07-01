            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manajemen Users</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>administrator/tambah_manajemenuser'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive ">
                  <table id="example1" class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php
                    $no = 1;
                    foreach ($record as $row){
                    if ($row['foto'] == ''){ $foto ='blank.png'; }else{ $foto = $row['foto']; }
                    echo "<tr><td>$no</td>
                              <td>$row[username]</td>
                              <td><img style='border:1px solid #cecece' width='40px' class='img-circle' src='".base_url()."asset/foto_user/$foto'></td>"; ?>
                              <td>
                                <?php if ($row[aktivasi] == 1){
                                      echo"Sudah Aktif";
                                  }else{
                                    echo"Belum Aktif";
                               }
                             ?>
                              </td>

                              <?php echo"<td>$row[level]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_manajemenuser/$row[username]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_manajemenuser/$row[username]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
