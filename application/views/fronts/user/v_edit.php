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
    					<a data-fifter=".pengguna" href="#" class="active" >Data Pengguna</a>
    					<a data-fifter=".bisnis" href="#">Data Bisnis</a>
    					<a data-fifter=".harga" href="#">Daftar Harga</a>

    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-9">
    		   <div class="accordion style-5">
    		     <?php $this->load->view('fronts/user/part/1penggunaedit')?>
                 <?php $this->load->view('fronts/user/part/2bisnis')?>
    			 <?php $this->load->view('fronts/user/part/3harga')?>
    		</div>
    	</div>
    </div>
    </div>
</div>





    <?php $this->load->view('fronts/utama/footer')?>
    <?php $this->load->view('fronts/utama/js')?>
    </body>
</html>
