<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('fronts/utama/meta')?>
    <?php $this->load->view('fronts/utama/css')?>
  </head>
  <body data-color="theme-1">
    <?php $this->load->view('fronts/utama/loading')?>
		<div class="full-height">
			 <div class="clip">
			<div class="bg bg-bg-chrome" style="background-image:url(<?php echo base_url()?>asset/komponen/404.jpg)">
			</div>
		 </div>
		 <div class="vertical-align">
			 <div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						 <div class="main-title style-6">
								<div class="top-weather-info delay-1">
								<img src="<?php echo base_url()?>asset/frontend/aspanel/img/logo.png" alt="">
							</div>
							<h4>Halaman yang Anda cari tidak ditemukan</h4>
							<h1>Mohon Maaf</h1>
							 <div class="row no-padd">
								<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-md-offset-0">

								<div class="center">
									<a href="<?php echo base_url()?>" class="c-button bg-aqua hv-aqua-o b-40"><span>kembali ke Mantenbaru</span></a>

								</div>
								</div>
							 </div>
						 </div>
					</div>
				</div>
			 </div>
		 </div>
		</div>
  <?php $this->load->view('fronts/utama/js')?>
  </body>
</html>
