	<?php $this->load->view('templates/User/Header'); ?>

	<!-- ____________________info kost______________________________--> 
	<div class="allcontain">
    <div class="feturedsection">
        <h1 class="text-center"><span class="bdots">&bullet; INFO KOST / KONTRAKAN  &bullet; </span></h1>
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
                            <div class="text-center"><a href="<?php echo base_url()."Welcome/Regis";?>" class="btn btn-primary">PESAN</a></div>
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

.btn-primary {
    background-color: #ffc107;
    border-color: #ffc107;
}

.btn-primary:hover {
    background-color: #e0a800;
    border-color: #e0a800;
}

</style>

<br><br><br>
	<?php $this->load->view('templates/User/Footer'); ?>