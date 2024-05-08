	        <div class="menu-item">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-10">
	                        <div class="nav-menu">
	                            <nav class="mainmenu">
	                                <!-- <ul>
									<li class="active"><a href="<?php echo base_url()."Welcome/Index_member";?>">BERANDA</a> </li>
					<li class="active"><a href="<?php echo base_url()."Welcome/Info_member";?>">SEPUTAR KOST/KONTRAKAN</a> </li>
					<li class="active"><a href="<?php echo base_url()."Welcome/Status_sewa";?>">STATUS PEMBAYARAN SEWA</a> </li>
					<li class="active"><a href="<?php echo base_url()."LoginMember/Logout";?>">LOGOUT</a> </li>
	                                </ul> -->
	                            </nav>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>
	    <!-- Header End -->			


		<style>
			.offcanvas-menu-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); /* Warna latar belakang overlay */
    z-index: 9999; /* Indeks z tinggi untuk memastikan tampil di atas elemen lain */
    display: none; /* Mulai dengan display none */
}

.canvas-open {
    position: fixed;
    top: 20px;
    left: 20px;
    z-index: 10000; /* Indeks z tinggi untuk memastikan tampil di atas elemen lain */
    cursor: pointer;
}

.canvas-close {
    cursor: pointer;
}

.offcanvas-menu-wrapper {
    position: fixed;
    top: 0;
    left: -300px; /* Memulai dengan posisi tersembunyi di luar layar kiri */
    width: 300px; /* Lebar offcanvas menu */
    height: 100%;
    background-color: #fff; /* Warna latar belakang offcanvas menu */
    transition: left 0.3s ease; /* Efek transisi saat menu terbuka dan tertutup */
}

.search-icon {
    margin-top: 20px;
    margin-bottom: 20px;
}

.mainmenu {
    margin-top: 20px;
}

.top-social {
    margin-top: 20px;
}

.top-widget {
    margin-top: 20px;
}

/* Tambahan gaya jika diperlukan */
.canvas-open i,
.canvas-close i,
.search-icon i {
    font-size: 20px;
}

.mainmenu ul li {
    list-style: none;
    display: inline-block;
    margin-right: 20px;
}

.mainmenu ul li a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.mainmenu ul li a:hover {
    color: #ffc107; /* Warna saat hover */
}


		</style>