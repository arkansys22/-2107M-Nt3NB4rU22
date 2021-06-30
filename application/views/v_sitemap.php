<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);  ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>


  <?php foreach($datavendors as $data) { ?>
  <url>
     <loc><?php echo base_url("vendors/").$data->namabisnis_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
   <?php foreach($dataprojek as $data) { ?>
  <url>
     <loc><?php echo base_url("projek-detail/").$data->judul_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
  <?php foreach($dataharga as $data) { ?>
  <url>
     <loc><?php echo base_url("harga-detail/").$data->judul_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
  <?php foreach($dataartikel as $data) { ?>
  <url>
     <loc><?php echo base_url("artikel/").$data->judul_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
  <?php foreach($katvendor as $data) { ?>
  <url>
     <loc><?php echo base_url("vendors/kategori/").$data->kategori_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>


  <?php foreach($katblogs as $data) { ?>
  <url>
     <loc><?php echo base_url("artikel/kategori/").$data->kategori_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>

</urlset>
