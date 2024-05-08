<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasi Member</title>
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<style>
		.card {
			width: 100%;
			max-width: 500%;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.card-title {
			color: #333;
			font-size: 24px;
		}

		.form-group label {
			font-weight: bold;
			color: #333;
			margin-bottom: 5px;
		}

		.form-control {
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 10px;
		}

		.btn-warning {
			background-color: #ffc107;
			border-color: #ffc107;
			color: #333;
		}

		.btn-warning:hover {
			background-color: #e0a800;
			border-color: #e0a800;
			color: #333;
		}
	</style>
</head>

<body>
	<br>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center mb-4">Registrasi Member</h5>
						<form action="<?php echo base_url() . 'Member/daftar_aksi'; ?>" method="post">
							<div class="form-group">
								<label for="nama">Nama Lengkap</label>
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Anda" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
							</div>
							<div class="form-group">
								<label for="status">Status/Pekerjaan/Mahasiswa</label>
								<input type="text" class="form-control" id="status" name="status" placeholder="Status/Pekerjaan Anda" required>
							</div>
							<div class="form-group">
								<label for="nohp">No HP</label>
								<input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP Anda" required>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anda" required>
							</div>
							<button type="submit" class="btn btn-warning btn-block mt-4">Daftar</button>
							<div class="btn-center">
								<button type="submit" class="btn btn-primary mt-4"><a href="<?php echo base_url() . "index.php/Welcome/Login_member"; ?>" style="color: #fff;">Login</a></button>
							</div>
							<style>
								.btn-center {
									text-align: center;
									/* Mengatur teks tombol menjadi rata tengah */
								}

								.btn-center .btn {
									display: inline-block;
									/* Membuat tombol menjadi inline block */
								}
							</style>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
</body>

</html>