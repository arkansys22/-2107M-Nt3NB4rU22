            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Vendor - Vendor</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>administrator/tambah_listinvestasi'>Tambah Vendor</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Judul Vendor</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th style='width:75px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php
                    $no = 1;
                    foreach ($record as $row){
                    $tgl_posting = tgl_indo($row['tanggal']);
                    if ($row['status']=='Y'){ $status = '<span style="color:green">Published</span>'; }else{ $status = '<span style="color:red">Unpublished</span>'; }
                    echo "<tr><td>$no</td>
                              <td>
                              <a target='_BLANK' href='".base_url()."$row[judul_seo]'>$row[judul]</a>
                              </td>

                              <td>$tgl_posting</td>
                              <td>$status</td>
                              <td><center>
                                <a class='btn btn-primary btn-xs' title='Publish/UnPublish' href='".base_url()."administrator/publish_listinvestasi/$row[id_berita]/$row[status]'><span class='glyphicon glyphicon-ok'></span></a>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_listinvestasi/$row[id_berita]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_listinvestasi/$row[id_berita]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
