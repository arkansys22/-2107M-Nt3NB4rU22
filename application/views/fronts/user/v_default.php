<!DOCTYPE html>
<html lang="id">
  <head>
    <?php $this->load->view('fronts/utama/meta')?>
    <?php $this->load->view('fronts/utama/css')?>
  </head>
  <body data-color="theme-1">
    <?php $this->load->view('fronts/utama/loading')?>
    <?php $this->load->view('fronts/utama/header2')?>
    <div class="main-wraper bg-grey-2 padd-90">
    <br><br><br>
    </div>

    <div class="main-wraper bg-grey-2 padd-90">
    	<div class="container">
    		<div class="buttons-wrap">
    			<a href="<?php echo base_url()?>user/home" class="c-button m-right bg-1 b-40">Edit Profil</a>
    			<a href="<?php echo base_url()?>user/ulasan" class="c-button m-right bg-1 b-40">Ulasan</a>
    			<a href="<?php echo base_url()?>user/projek" class="c-button m-right bg-1 b-40">Projek Saya</a>
    			<a href="<?php echo base_url()?>user/vendor" class="c-button m-right bg-1 b-40">View Profil</a>
    		 </div>
    		<ul class="banner-breadcrumb color-blue clearfix">
    			<li><a class="link-blue-2" href="#">home</a> /</li>
    			<li><a class="link-blue-2" href="#">pages</a> /</li>
    			<li><span>faq</span></li>
    		</ul>
    	</div>

    	<div class="container">
    		<div class="accordion-filter row">
    			<div class="col-xs-12 col-sm-3">
    				<div class="accordion-chooser">
    					<a data-fifter=".pengguna" href="#" class="active" >Data Pengguna</a>
    					<a data-fifter=".bisnis" href="#">Data Bisnis</a>
    					<a data-fifter=".kontak" href="#">Kontak & Media Sosial</a>
    					<a data-fifter=".info" href="#">Info Lengkap</a>
    					<a data-fifter=".harga" href="#">Daftar Harga</a>
    					<a data-fifter=".projects" href="#">Projects</a>

    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-9">
    		   <div class="accordion style-5">
    		     <div class="acc-panel pengguna">
    		             <div class="acc-title active"><span class="acc-icon"></span>Data Pengguna</div>
    		              <div class="acc-body first">
    										<form class="contact-form js-contact-form" action="#" method="POST">
    										<h5>Nama Anda</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<input type="text" placeholder="Nama Anda">
    											<br><br>
    										</div>
    				 						<h5>Nomer HP</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<input type="text" placeholder="Nomer HP">
    											<br><br>
    										</div>
    				 						<h5>Alamat Email</h5>
    										<div class="input-style-1 b-50 type-2 color-3">
    											<input type="text" placeholder="Alamat Email" disabled>
    											<br><br>
    										</div>
    				 						<h5>Password</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<input type="text" placeholder="Password">
    											<br><br>
    										</div>
    				 						<h5>Foto</h5>
    										<p>Variabel Foto</p>
    										<button type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"><span>Simpan</span></button>
    										</form>
    									</div>

    		     </div>
    				 <div class="acc-panel bisnis">
    		          <div class="acc-title"><span class="acc-icon"></span>Data Bisnis</div>

    		           <div class="acc-body">
    								 	<form class="contact-form js-contact-form" action="#" method="POST">
    										<h5>Kategori Bisnis</h5>
    										<div class="input-style-1 b-50 type-2 color-5">
    											  <div class="type-2 color-8">
    													<div class="drop-wrap drop-wrap-s-4 color-2">
    													  <div class="drop">
    														 <b>Kategori Bisnis Anda</b>
    															<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
    															<span style="display: none;">
    																<a href="#">Photography</a>
    																<a href="#">Rias Pengantin</a>
    															</span>
    													   </div>
    													</div>
    											  </div>
    										</div>
    				 						<h5>Nama Bisnis</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<input type="text" placeholder="Nama Bisnis">

    										</div>
    										<h5>Tentang Bisnis Anda</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<input type="text" placeholder="Tentang Bisnis">

    										</div>
    										<h5>Nomer Bisnis Anda</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<input type="text" placeholder="Nomer Bisnis">

    										</div>
    										<h5>Provinsi</h5>
    										<div class="input-style-1 b-50 type-2 color-5">
    											  <div class="type-2 color-8">
    													<div class="drop-wrap drop-wrap-s-4 color-2">
    													  <div class="drop">
    														 <b>Provinsi Anda</b>
    															<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
    															<span style="display: none;">
    																<a href="#">Jawa barat</a>
    																<a href="#">DKI Jakarta</a>
    															</span>
    													   </div>
    													</div>

    											  </div>
    										</div>
    				 						<h5>Kota/Kabupaten</h5>
    										<div class="input-style-1 b-50 type-2 color-5">
    											  <div class="type-2 color-8">
    													<div class="drop-wrap drop-wrap-s-4 color-2">
    													  <div class="drop">
    														 <b>Kota / Kabupaten</b>
    															<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
    															<span style="display: none;">
    																<a href="#">Kota Jakarta Barat</a>
    																<a href="#">Kab. Bogor</a>
    															</span>
    													   </div>
    													</div>

    											  </div>
    										</div>
    										<h5>Kecamatan</h5>
    										<div class="input-style-1 b-50 type-2 color-5">
    											  <div class="type-2 color-8">
    													<div class="drop-wrap drop-wrap-s-4 color-2">
    													  <div class="drop">
    														 <b>Kecamatan</b>
    															<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
    															<span style="display: none;">
    																<a href="#">Tajurhalang</a>
    																<a href="#">Bojonggede</a>
    															</span>
    													   </div>
    													</div>

    											  </div>
    										</div>
    				 						<h5>Kode Pos</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<input type="text" placeholder="Kode Pos">

    										</div>
    										<h5>Alamat Bisnis</h5>
    										<div class="input-style-1 b-50 type-2 color-2">
    											<input type="text" placeholder="Alamat Bisnis">
    										</div>
    										<p><br><br></p>
    										<button type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"><span>Simpan</span></button>
    										</form>
    									</div>

    		     </div>
    		     <div class="acc-panel kontak">
    		       <div class="acc-title"><span class="acc-icon"></span>Kontak & Media Sosial</div>
    					 <div class="acc-body">
    						 <div class="form-block clearfix">
    							 <div class="input-style-1 b-50 color-3">
    								 <img src="img/loc_icon_small_grey.png" alt="">
    								 <input type="text" placeholder="Facebook">
    							 </div>
    						 </div>
    						 <div class="form-block clearfix">
    							 <div class="input-style-1 b-50 color-3">
    								 <img src="img/loc_icon_small_grey.png" alt="">
    								 <input type="text" placeholder="Instagram">
    							 </div>
    						 </div>
    						 <div class="form-block clearfix">
    							 <div class="input-style-1 b-50 color-3">
    								 <img src="img/loc_icon_small_grey.png" alt="">
    								 <input type="text" placeholder="Twitter">
    							 </div>
    						 </div>
    					 </div>
    		     </div>
    		     <div class="acc-panel info">
    		        <div class="acc-title"><span class="acc-icon"></span>Info Lengkap</div>
    						<div class="acc-body">
    							<h5>Jasa yang anda tawarkan?</h5>
    							<div class="input-style-1 b-50 type-2 color-2">
    								<input type="text" placeholder="Jawaban">
    								<br><br>
    							</div>
    							<h5>Apakah bersedia menerima tawaran pekerjaan diluar area anda?</h5>
    							<div class="input-style-1 b-50 type-2 color-2">
    								<input type="text" placeholder="Jawaban">
    								<br><br>
    							</div>
    							<h5>Pada waktu kapan calon pengantin dapat menghubungi anda?</h5>
    							<div class="input-style-1 b-50 type-2 color-3">
    								<input type="text" placeholder="jawaban">
    								<br><br>
    							</div>
    							<h5>Metode pembayaran apa yang anda terima untuk bertransaksi?</h5>
    							<div class="input-style-1 b-50 type-2 color-2">
    								<input type="text" placeholder="Jawaban">
    								<br><br>
    							</div>
    							<h5>Aturan pembayaran anda seperti apa?</h5>
    							<div class="input-style-1 b-50 type-2 color-2">
    								<input type="text" placeholder="Jawaban">
    								<br><br>
    							</div>
    							<p> <br><br></p>
    						</div>
    		     </div>
    				 <div class="acc-panel harga">
    									 <div class="acc-title"><span class="acc-icon"></span>Daftar Harga</div>
    									 <div class="acc-body">

    						 <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.</p>
    						 <div class="row">
    							 <div class="col-xs-12 col-sm-6">
    								 <ul>
    									 <li>Shopping history</li>
    									 <li>Hot offers according your settings</li>
    									 <li>Multi-product search</li>
    									 <li>Opportunity to share with friends</li>
    									 <li>User-friendly interface</li>
    								 </ul>
    							 </div>
    							 <div class="col-xs-12 col-sm-6">
    								 <ul>
    									 <li>Shopping history</li>
    									 <li>Hot offers according your settings</li>
    									 <li>Multi-product search</li>
    									 <li>Opportunity to share with friends</li>
    									 <li>User-friendly interface</li>
    								 </ul>
    							 </div>
    						 </div>
    									 </div>
    			   </div>
    				 <div class="acc-panel projects">
    									 <div class="acc-title"><span class="acc-icon"></span>Project</div>
    									 <div class="acc-body">

    						 <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.</p>
    						 <div class="row">
    							 <div class="col-xs-12 col-sm-6">
    								 <ul>
    									 <li>Shopping history</li>
    									 <li>Hot offers according your settings</li>
    									 <li>Multi-product search</li>
    									 <li>Opportunity to share with friends</li>
    									 <li>User-friendly interface</li>
    								 </ul>
    							 </div>
    							 <div class="col-xs-12 col-sm-6">
    								 <ul>
    									 <li>Shopping history</li>
    									 <li>Hot offers according your settings</li>
    									 <li>Multi-product search</li>
    									 <li>Opportunity to share with friends</li>
    									 <li>User-friendly interface</li>
    								 </ul>
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
