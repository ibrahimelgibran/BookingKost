	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			/* Pastikan padding dan border tidak menambahkan lebar elemen */
		}

		html,
		body {
			height: 100%;
		}
	</style>
	<?php $this->load->view('templates/User/Header_member'); ?>
	<!--_______________________________________ Beranda__________________________________ -->
	<div class="allcontain">
		<div id="carousel-up" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner " role="listbox">
				<div class="item active">
					<center>
						<!-- <img src="<?php echo base_url(); ?>assets/image/depan.jpg" width="1403" height="672"> -->
						<img src="https://img.freepik.com/free-vector/dark-black-background-design-with-stripes_1017-38064.jpg" width="1403" height="672">
						<div class="carousel-caption">
							<h1>SELAMAT DATANG DI KOST IEGCODE.MY.ID</h1>
							<h2> Sleman, Yogyakarta, Provinsi D.I.Yogyakarta</h2>
						</div>
				</div>

				<div class="item">
					<!-- <img src="<?php echo base_url(); ?>assets/image/dalam.jpg" width="1403" height="472"> -->
					<img src="https://t3.ftcdn.net/jpg/05/40/04/46/360_F_540044645_euvM4jng8cjqkpwT6NkjyfHePtREP3JA.jpg" width="1403" height="472">
					<div class="carousel-caption">
						<h1>Dapatkan Sensasi Nyaman hanya di KOST IEGCODE.MY.ID</h1>

					</div>
				</div>

				<div class="item">
					<!-- <img src="<?php echo base_url(); ?>assets/image/luar.jpg" width="1403" height="472"> -->
					<img src="https://t4.ftcdn.net/jpg/01/30/41/43/360_F_130414382_O4tDxNpAVIBnCwOzI6YT3fiPSplEHbLW.jpg" width="1403" height="472">
					<div class="carousel-caption">
						<h1>Harga Terjangkau, free wifi dan free genset</h1>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<?php $this->load->view('templates/User/Footer'); ?>