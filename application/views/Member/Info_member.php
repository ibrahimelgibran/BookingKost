<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Info - Kost</title>
	<link rel="stylesheet" href="sona/css/bootstrap.min.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/font-awesome.min.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/elegant-icons.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/flaticon.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/owl.carousel.min.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/nice-select.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/jquery-ui.min.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/magnific-popup.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/slicknav.min.css" type="text/css">
	        <link rel="stylesheet" href="sona/css/style.css" type="text/css">
</head>
<body>
<?php $this->load->view('templates/User/Header_member'); ?>

<div class="allcontain">
<div class="feturedsection">
	<h1 class="text-center"><span class="bdots">&bullet; INFO KOST / KONTRAKAN  &bullet;</span></h1>
</div>
<div class="feturedimage">
	<div class="row firstrow">
		<?php foreach ($hunian as $key => $value) { ?>
		<div class="col-lg-6 costumcol colborder1">
			<div class="row costumrow">
				<div class="col-12 col-md-6 img1colon">
					<img src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>" alt="" class="img-fluid">
				</div>
				<div class="col-12 col-md-6 txt1colon">
					<div class="featurecontant">
						<h1><?php echo $value->nama_hunian; ?></h1>
						<p>Fasilitas: <?php echo $value->deskripsi_hunian; ?></p>
						<p>Status: <b><?php echo $value->status_hunian; ?></b></p>
						<h2>Harga: Rp.<?php echo $value->harga_hunian; ?></h2>
						<div class="text-center">
							<a href="<?php echo base_url()."Pesan/pemesanan/".$value->id_hunian?>" class="btn btn-primary">PESAN</a>
							<a href="<?php echo base_url()."Sewa/tambah/".$value->id_hunian?>" class="btn btn-success">BAYAR SEWA</a>
							<a href="<?php echo base_url()."Komplain/tambah/".$value->id_hunian?>" class="btn btn-warning">KOMPLAIN</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
</div>

<style>
.costumcol {
padding: 15px;
}

.colborder1 {
border: 1px solid #ccc;
border-radius: 5px;
overflow: hidden;
margin-bottom: 20px;
}

.img1colon img {
width: 100%;
height: auto;
}

.featurecontant {
padding: 15px;
}

.featurecontant h1,
.featurecontant p,
.featurecontant h2 {
margin-bottom: 10px;
}

.btn-primary,
.btn-success,
.btn-warning {
margin-top: 10px;
}

.btn {
width: 100%; /* Lebar tombol 100% dari parent */
}

</style>

<br><br><br>

<footer class="py-16 text-center text-sm text-black dark:text-white/70">
made with ❤️ by
<a href="http://ibrahimelgibran.com">iegcode :')</a>
<style>
	* {
    margin: 0;
    padding: 0;
    box-sizing: border-box; /* Pastikan padding dan border tidak menambahkan lebar elemen */
}
html, body {
    height: 100%;
}

footer {
  background-color: black;
  color: #FFF;
  text-align: center;
  font-size: 17px;
  margin-left: -30px;
  padding: 20px;
  position: fixed;
  bottom: 0;
  width: 100%;
}

@media (max-width: 768spx) {
  footer {
	margin-left: 0; /* Reset margin-left */
  }
}
</style>


	    <!-- Js Plugins -->
	    <script src="sona/js/jquery-3.3.1.min.js"></script>
	    <script src="sona/js/bootstrap.min.js"></script>
	    <script src="sona/js/jquery.magnific-popup.min.js"></script>
	    <script src="sona/js/jquery.nice-select.min.js"></script>
	    <script src="sona/js/jquery-ui.min.js"></script>
	    <script src="sona/js/jquery.slicknav.js"></script>
	    <script src="sona/js/owl.carousel.min.js"></script>
	    <script src="sona/js/main.js"></script>
</body>
</html>