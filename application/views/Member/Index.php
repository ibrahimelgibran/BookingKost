	<!--_______________________________________ Beranda__________________________________ -->
	<!DOCTYPE html>
	    <head>
	        <meta charset="UTF-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <title>Kost - iegcode</title>
	        <!-- Css Styles -->
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
	    <div class="offcanvas-menu-overlay"></div>
	    <div class="canvas-open">
	        <i class="icon_menu"></i>
	    </div>
	    <div class="offcanvas-menu-wrapper">
	        <div class="canvas-close">
	            <i class="icon_close"></i>
	        </div>
	        <div class="search-icon  search-switch">
	            <i class="icon_search"></i>
	        </div>
	        <nav class="mainmenu mobile-menu">
	            <ul>
	                <li><a href="index.php">Home</a></li>
	                <li><a href="index.php?page=Kosan">Kosan</a></li>
	                <li><a href="About.html">About Us</a></li>
	            </ul>
	        </nav>
	        <div id="mobile-menu-wrap"></div>
	        <div class="top-social">
	            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-lg"> </i></a>
	            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
	        </div>
	        <ul class="top-widget">
	            <li><i class="fa fa-phone"></i> 085876076005</li>
	            <li><i class="fa fa-envelope"></i> iegcodeid@gmail.com</li>
	        </ul>
	    </div>
        <style>
            /* Untuk layar dengan lebar maksimum 767px (mode ponsel) */
@media (max-width: 767px) {
    .header-section {
        position: relative; /* Mengatur posisi relatif untuk header */
    }

    .bottom-element {
        position: fixed; /* Tetapkan posisi elemen di bawah header */
        bottom: 0;
        width: 100%;
        background-color: #FFF; /* Mengatur warna latar belakang menjadi putih */
        z-index: 999; /* Pastikan z-index cukup tinggi agar muncul di atas konten lain */
    }

    .main-content {
        padding-bottom: 60px; /* Atur padding bawah konten utama agar tidak tertutup oleh elemen yang tetap di bawah header */
    }
}

        </style>
	    <!-- Header Section Begin -->
	    <header class="header-section header-normal">
	        <div class="top-nav">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-6">
	                        <ul class="tn-left">
	                            <li style="font-weight: bold;"><i class="fa fa-phone" style="font-weight: bold;"></i> 085876076005 </li>
	                            <li style="font-weight: bold;"><i class="fa fa-envelope" style="font-weight: bold;"></i> iegcodeid@gmail.com</li>
	                        </ul>
	                    </div>
	                    <div class="col-lg-6">
	                        <div class="tn-right">
	                            <div class="top-social">
                                        <!-- <a href="https://www.facebook.com/ibrahimelgibran17/" target="_blank"><i class="fa fa-facebook fa-lg" style="font-weight: bold;"> Facebook </i></a>
                                        <a href="https://www.instagram.com/iegcode" target="_blank"><i class="fa fa-instagram fa-lg" style="font-weight:bold;"> Instagram</i></a> -->
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="menu-item" style="text-align: right; margin-left: auto; margin-right: -600px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="nav-menu">
                    <nav class="mainmenu">
                        <ul>
                            <li><a href="index.php" style="font-weight:bold">Home</a></li>
                            <li><a href="<?php echo base_url()."index.php/Welcome/Info";?>" style="font-weight:bold">Kosan</a></li>
                            <li><a href="About.html" style="font-weight:bold">About</a></li>
                            <li><a href="<?php echo base_url()."index.php/Welcome/Login_member";?>" style="font-weight:bold">Login</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

	    </header>
	    <!-- Header End -->

	    <section class="hero-section">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6">
	                    <div class="hero-text" >
	                        <h1 style="color:black">Iegcode Kost</h1>
	                        <p style="color:black; box-shadow:#FFF">Penyedia Kost dengan Wilayah Cukup Lengkap di Setiap Daerahnya</p>
	                        <a href="#kost" class="primary-btn" style="color:black">Lihat Sekarang</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="https://img.freepik.com/free-vector/flat-style-countryside-family-house-with-backyard-lawn-concept_126523-651.jpg?t=st=1715182299~exp=1715185899~hmac=0a79046b34142ebf480d17d98d9624ec42eee31a06b17b5a0bb6e6cd2ccb1357&w=1480" style="background-size:auto; background-position: center ;"></div>

	            <!-- <div class="hs-item set-bg" data-setbg="sona/img/hero2.png"></div>
            <div class="hs-item set-bg" data-setbg="sona/img/hero3.jpg"></div> -->
	        </div>
	    </section>

	    <section class="blog-section spad">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="section-title">
	                        <span id="kost">KOST TERBARU</span>
	                        <h2>Recommendasi Kost Terbaru</h2>

	                        <br><br><br>
	                        <div class="row justify-content-end">
	                            <div class="col-md-4">
	                                <div class="card mb-3">
	                                    <img src="https://elgibran.vercel.app/dist/img/sertifikat/crisis%20to%20busniess.png" alt="...">
	                                    <div class="card-body">
	                                        <h5 class="card-title">Kost Java</h5>
	                                        <p class="card-text">Fasilitas : 2 Kamar tidur, 1 dapur, 1 kamar mandi, 1 ruang tamu, tempat parkiran.</p>
	                                        <a href="<?php echo base_url()."Welcome/Regis";?>" class="btn btn-primary">Pesan Sekarang</a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="card mb-3">
	                                    <img src="https://elgibran.vercel.app/dist/img/sertifikat/crisis%20to%20busniess.png" alt="...">
	                                    <div class="card-body">
	                                        <h5 class="card-title">Kost Laravel</h5>
	                                        <p class="card-text">Fasilitas : 2 Kamar tidur, 1 dapur, 1 kamar mandi, 1 ruang tamu, tempat parkiran.</p>
	                                        <a href="<?php echo base_url()."Welcome/Regis";?>" class="btn btn-primary">Pesan Sekarng</a>
	                                    </div>
	                                </div>
	                            </div>  
	                            <div class="col-md-4">
	                                <div class="card mb-3">
	                                    <img src="https://elgibran.vercel.app/dist/img/sertifikat/crisis%20to%20busniess.png" alt="...">
	                                    <div class="card-body">
	                                        <h5 class="card-title">Kost Spring</h5>
	                                        <p class="card-text">Fasilitas : 2 Kamar tidur, 1 dapur, 1 kamar mandi, 1 ruang tamu, tempat parkiran.</p>
	                                        <a href="<?php echo base_url()."Welcome/Regis";?>" class="btn btn-primary">Pesan Sekarng</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        </div>
	    </section>

	    <!-- Footer Section Begin -->
	    <footer class="footer-section mb-5">
	        <div class="copyright-option">
	            <div class="container" style="margin-top: 20px">
	                <div class="row">
	                    <div class="col-lg-7">
	                        <ul>
	                            <li><a href="<?php echo base_url()."index.php/Welcome/Info";?>">Kosan</a></li>
	                            <li><a href="#">About</a></li>
	                        </ul>
	                    </div>
	                    <div class="col-lg-5">
	                        <div class="co-text">
	                            <p>
	                                Copyright &copy;<script>
	                                </script> Made with ❤️ by <a href="#">iegcode</a>
	                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	                            </p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <!-- Footer Section End -->

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