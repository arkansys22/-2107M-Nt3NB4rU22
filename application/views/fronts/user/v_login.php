<!DOCTYPE html>
<html lang="id">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $this->load->view('fronts/utama/meta')?>
    <?php $this->load->view('fronts/utama/css')?>
  </head>
  <body data-color="theme-1">
    <?php $this->load->view('fronts/utama/loading')?>
  <img class="center-image" src="asset/frontend/utama/bg-1.jpg" alt="">
  <div class="container">
  	<div class="login-fullpage">
  		<div class="row">
  			<div class="login-logo"><img class="center-image" src="asset/frontend/utama/login.jpg" alt=""></div>
  			<div class="col-xs-12 col-sm-7">
  				<div class="f-login-content">
  				    <div class="row">
  					      <a href="<?php echo base_url()?>" >
                            <center><img src="<?php echo base_url()?>asset/frontend/aspanel/img/logo.png" alt="mantenbaru"></center> 
                          </a>
  					 </div>
  					<div class="f-login-header">
  						<div class="f-login-title color-dr-blue-2">Selamat Datang</div>
  						<div class="f-login-desc color-grey">Silahkan masuk ke Mantenbaru</div>
  					</div>
  					<?php echo $this->session->flashdata('msg'); ?>  
            <?php
              if ($this->input->post('email')!=''){
                echo "<div class='alert bg-5'><center>$title</center></div>";
              }elseif($this->input->post('a')!=''){
                echo "<div class='alert bg-5'><center>$title</center></div>";
              }

                echo form_open('login');
            ?>

  					<form class="f-login-form">
  						<div class="input-style-1 b-50 type-2 color-5">
  							<input type="text" name='a' placeholder="Username anda" onkeyup="this.value = this.value.toLowerCase()">
                <span style="font-size: 15px; color:grey;"><?php echo form_error('a'); ?><br></span>
  						</div>
                  <br><br><br>
  						<div class="input-style-1 b-50 type-2 color-5">
  							<input type="password" name='b' placeholder="Password rahasia anda">
                <span style="font-size: 15px; color:grey;"><?php echo form_error('b'); ?><br></span>
  						</div>
                <br><br><br>
  						<input name='submit' type="submit" class="login-btn c-button full b-60 bg-dr-blue-2 hv-dr-blue-2-o" value="Masuk">
                <br><br><br>
  						<div class="input-style-1 b-50 type-2 color-5">
  						<span style="font-size: 15px; color:grey;">Lupa akun anda? Coba gunakan <a href="#"><span style ="color:blue;">Reset Password</span></a> atau silahkan <a href="<?php echo base_url()?>daftar"><span style ="color:blue;">Daftar</span></a> baru akun Mantenbaru anda.</span>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="full-copy">© 2018 All rights reserved. <a href="<?php echo base_url()?>">Mantenbaru</a></div>
  </div>
  <?php $this->load->view('fronts/utama/js')?>
  </body>
</html>
