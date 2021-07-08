<!DOCTYPE html>
<html lang="id">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $this->load->view('fronts/utama/meta')?>
    <?php $this->load->view('fronts/utama/css')?>
    <?php $this->load->view('fronts/utama/wilayah')?>
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
    		             <div class="acc-title active"><span class="acc-icon"></span>Projek <span><?php echo $users['level'] ?></span></div>
                     <div class="acc-body first">
                        <a class="button-s-2 bg-1 m-right" title="Edit Data" href="<?php echo base_url(); ?>user/tambah_projek/"><span>Tambah Projek</span></a>
                        <br><br>
                        <div class="main-wraper padd-90">
                          <div class="row">
                          <?php
                          $no = 1;
                          foreach ($records as $row){
                          echo "
                      			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                      				<div class='radius-mask tour-block hover-aqua'>
                      				  <div class='clip'>
                  						 <div class='bg bg-bg-chrome act'>
                               <img src='".base_url()."asset/projek/$row[foto1]' alt=''>
                  						 </div>
                  					  </div>
                  					  <div class='tour-layer delay-1'></div>
                  					  <div class='tour-caption'>

                  					  	 <div class='vertical-bottom'>

                    					  	 	<div class='tour-info'>
                    					  	 		  <span><strong class='color-white'>$row[judul]</strong></span>
                    					  	 	</div>

                                   <div class='row'>
                                  <a href='".base_url()."user/edit_projek/$row[id_projek]' class='button-s-2 bg-1 m-right'><span>Edit</span></a>
                  					  	 	<a href='".base_url()."user/delete_projek/$row[id_projek]' class='button-s-2 bg-1 m-right'><span>Hapus</span></a>
                                  </div>
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
  </div>

    <?php $this->load->view('fronts/utama/footer')?>
    <?php $this->load->view('fronts/utama/js')?>
    </body>
</html>
