
			<!-- Header -->
	<div class="allcontain">
		<div class="header">
			<ul class="socialicon">
			<li class="active"><a href="<?php echo base_url()."index.php";?>">BERANDA</a> </li>
					<li class="active"><a href="<?php echo base_url()."index.php/Welcome/Info";?>">SEPUTAR KOST/KONTRAKAN</a> </li>
					<li class="active"><a href="<?php echo base_url()."index.php/Welcome/Login_member";?>">LOGIN</a> </li>
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