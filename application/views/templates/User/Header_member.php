
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kost - Iegcode</title>
	<meta name="description" content="">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/slider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/mystyle.css">
</head>
<body>
	<!-- Header -->
	<div class="allcontain">
		<div class="header">
			<ul class="socialicon">
			<li class="active"><a href="<?php echo base_url()."Welcome/Index_member";?>">BERANDA</a> </li>
					<li class="active"><a href="<?php echo base_url()."Welcome/Info_member";?>">SEPUTAR KOST/KONTRAKAN</a> </li>
					<li class="active"><a href="<?php echo base_url()."Welcome/Status_sewa";?>">STATUS PEMBAYARAN SEWA</a> </li>
					<li class="active"><a href="<?php echo base_url()."LoginMember/Logout";?>">LOGOUT</a> </li>
			</ul>
			<ul class="givusacall">
			</ul>
		</div>

		<style>
			.allcontain {
    width: 100%;
    margin: 0 auto;
    padding: 0;
}

.header {
    background-color: #ffffff; /* Warna latar belakang header */
    border-bottom: 1px solid #dddddd; /* Garis bawah header */
    padding: 20px 0; /* Padding atas dan bawah */
    display: flex; /* Membuat konten dalam header mengikuti tata letak flexbox */
    justify-content: space-between; /* Menyusun konten di ujung kiri dan kanan */
    align-items: center; /* Menyusun konten secara vertikal */
}

.socialicon {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.socialicon li {
    margin-right: 20px; /* Jarak antara setiap ikon sosial */
}

.socialicon li:last-child {
    margin-right: 0; /* Hapus margin kanan pada ikon sosial terakhir */
}

.socialicon li a {
    text-decoration: none;
    color: #333333; /* Warna teks ikon sosial */
    font-weight: bold;
    transition: color 0.3s ease;
}

.socialicon li a:hover {
    color: #ffc107; /* Warna teks ikon sosial saat dihover */
}

.givusacall {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.givusacall li {
    margin-right: 20px; /* Jarak antara setiap item dalam daftar */
}

.givusacall li:last-child {
    margin-right: 0; /* Hapus margin kanan pada item terakhir dalam daftar */
}

		</style>
		<!-- Navbar Up -->
		<?php $this->load->view('templates/User/Menu_member'); ?>
		</div>