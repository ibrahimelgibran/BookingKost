<?php $this->load->view('templates/User/Header_member'); ?>
		<!--_______________________________________Register_________________________________ -->

		<div class="allcontain">
    <div class="feturedsection">
        <h1 class="text-center"><span class="bdots">&bullet; Sampaikan Keluhan Anda tentang Fasilitas Hunian  &bullet; </span></h1>
    </div>
</div>

<center>
    <form action="<?php echo $aksi; ?>" method="POST">
        <div class="form-table">
            <input type="hidden" name="id_komplain" value="<?php echo $id_komplain; ?>">
            <input type="hidden" name="id_hunian" value="<?php echo $id_hunian; ?>">
            <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">

            <div class="form-row">
                <label>Perihal</label>
                <div class="form-group">
                    <input type="radio" name="perihal" value="Air"> Air
                    <input type="radio" name="perihal" value="Listrik"> Listrik
                    <input type="radio" name="perihal" value="Keran Air"> Keran Air
                    <input type="radio" name="perihal" value="Lampu"> Lampu
                    <input type="radio" name="perihal" value="Kerusakan Lain"> Kerusakan Lain
                </div>
            </div>

            <div class="form-row">
                <label>Isi</label>
                <div class="form-group">
                    <textarea name="isi" cols="50" rows="5"></textarea>
                </div>
            </div>

            <div class="form-row">
                <button type="submit" class="btn btn-warning btn-block" value="OK"><?php echo $button; ?></button>
            </div>
        </div>
    </form>
</center>

<style>
	.allcontain {
    margin-bottom: 20px; /* Berikan margin bawah untuk pemisahan dari konten lain */
}

.feturedsection {
    margin-bottom: 20px; /* Berikan margin bawah untuk pemisahan dari konten lain */
}

.form-table {
    max-width: 600px; /* Atur lebar maksimum form */
    margin: 0 auto; /* Pusatkan form secara horizontal */
}

.form-row {
    margin-bottom: 15px; /* Berikan jarak antara baris */
}

.form-row label {
    font-weight: bold; /* Berikan tebal pada label */
}

.form-group {
    display: inline-block; /* Atur tata letak elemen dalam satu baris */
}

textarea {
    width: 100%; /* Atur lebar textarea agar mengisi seluruh baris */
}

.btn {
    width: 100%; /* Atur lebar tombol agar mengisi seluruh baris */
}

</style>
	<BR>
	<BR>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php $this->load->view('templates/User/Footer'); ?>