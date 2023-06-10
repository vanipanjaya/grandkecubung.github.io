<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Selamat Datang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url(
        'assets/css/bootstrap.min.css'
    ) ?>">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?= base_url('assets/css/core.css') ?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url(
        'assets/css/shortcode/shortcodes.css'
    ) ?>">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <!-- customizer style css -->
    <link rel="stylesheet" href="<?= base_url(
        'assets/css/style-customizer.css'
    ) ?>">
 
    <link rel="icon" href="<?= base_url() ?>/images/logo1.png">
    <!-- Modernizr JS -->
    <script src="<?= base_url(
        'assets/js/vendor/modernizr-2.8.3.min.js'
    ) ?>"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js"></script>
</head>
    <style type="text/css">
        .header-section{
          background: url('<?= base_url(
              'assets/images/bg.jpg'
          ) ?>')no-repeat scroll center center;
          background-size: cover;
          background-attachment: fixed;
        }
        .header-section.height-vh{
          height: 100vh;
        }
        .header-section,.menu .search-bar,.b-date,.select-book{
          position: relative
        }
        .footer{
          background: url('<?= base_url(
              'assets/images/backk.jpg'
          ) ?>')no-repeat scroll center center;
          background-size: cover;
          background-attachment: fixed;
        } .footer-bg-opacity {
          background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;

        }
    </style>
<body>
	<div class="preloader">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object object_one"></div>
				<div class="object object_two"></div>
				<div class="object object_three"></div>
			</div>
		</div>
	</div>
   
    <div class="wrapper">
        <!--Header section start-->
        <div class="header-section">
            <div class="bg-opacity"></div>
            <div class="top-header sticky-header">
                <div class="top-header-inner">
                    <div class="container">
                        <div class="mgea-full-width">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="logo mt-15">
                                        <a href="index.html"><img src="<?= base_url() ?>/images/logo1.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10 hidden-xs">
                                    <div class="header-top ptb-10">
                                        
                                    </div>
                                    <div class="menu mt-25">
                                        <div class="menu-list hidden-sm hidden-xs">
                                            <nav>
                                                <ul style="text-align: right;">
                                                    <li><a href="#">Home</a></li>
                                                    <?php foreach (
                                                        $trans
                                                        as $data
                                                    ) {
                                                        if (
                                                            $data->email ==
                                                            $this->session->userdata(
                                                                'email'
                                                            )
                                                        ): ?>
                                                    <li><a href="<?= site_url(
                                                        'Auth/konfirmasi'
                                                    ) ?>">Konfirmasi Pemesanan</a></li>
                                                    <?php endif;
                                                    } ?>
                                                    <li><a href="<?= site_url(
                                                        'Auth/logout'
                                                    ) ?>">Logout</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                 <!-- Mobile menu start -->
                <div class="mobile-menu-area hidden-lg hidden-md">
                    <div class="container">
                        <div class="col-md-12">
                            <nav id="dropdown">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Konfirmasi Pemesanan</a></li>
                                <li><a href="<?= site_url(
                                    'Auth/logout'
                                ) ?>">Logout</a></li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu end -->
            </div>
            <!--Welcome secton-->
            <div class="welcome-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="booking-box">
                                <div class="booking-title">
                                     <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br>
                                </div>
                                <div class="booking-form">
                                    <br><br><br><br><br><br><br><br><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="welcome-text">
                                <p style="color: #fff; font-size: 18px;">Halo<b style="color: #fff; font-size: 16px; font-weight: bold;">  <?= $this->session->userdata(
                                    'nama'
                                ) ?></b></p>
                                <h2>
                                <span>SELAMAT DATANG DI</span> <span class="coloring">GRAND KECUBUNG HOTEL</span>
                                </h2>
                                <h1 class="cd-headline clip">
                                    <span>KEUNGGULAN</span>
                                    <span class="cd-words-wrapper coloring">
                                        <b class="is-visible"> LOKASI</b>
                                        <b>KAMAR</b>
                                        <b>FASILITAS</b>
                                    </span>
                                </h1>
                                <p class="welcome-desc">Modern comfort awaits guests at Grand Kecubung Hotel. Featuring a gym and an outdoor pool, it houses air-conditioned rooms with private bathrooms. Free Wi-Fi is accessible throughout the building. It is only 5 minutes drive to the city center. Grand Kecubung Hotel consists of 65 rooms which faces a beautiful view and surrounding. It has a main swimming pool to relax and enjoy your vacation.</p>
                                <div class="explore">
                                    <a href="#">PENASARAN ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header section end -->
        <!-- searchbar Start -->
            <div class="search-bar animated slideOutUp">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="search-form-wrap">
                                        <button class="close-search"><i class="mdi mdi-close"></i></button>
                                        <form action="#">
                                            <input type="text" placeholder="Search here..." value="Search here..."/>
                                            <button class="search-button" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- search bar End -->
        <!--About Section Title start-->
        <div class="about-section text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>Tentang <span>grand kecubung hotel</span></h2>
                            <p>Aplikasi ini dirancang untuk memenuhi tugas kuliah Penulisan Ilmiah</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-chondo">
                            <div class="about-member">
                                <img src="<?= base_url() ?>/assets/images/userr.jpg" alt="">
                                <h3>Novani Dwi Sari Panjaya</h3>
                                <h5 class="mb-0">Developer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About Section end-->
        <!--Our Room start-->
        <div class="our-room text-center ptb-80 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-75">
                            <h2>Jenis <span>Kamar</span></h2>
                            <p>Experience luxurious accommodation and relaxed sophistication. 
                                Featuring a cascading swimming pool area and well-equipped fitness center, 
                                our hotel houses 65 well-appointed, air-conditioned rooms with private bathrooms. 
                                Free Wi-Fi is accessible throughout the building. Grand Kecubung is an urban oasis 
                                that provides a hotel resort experience to help guests enjoy their stay.</p>
                        </div>
                    </div>
                </div>
                <div class="our-room-show">
                    <div class="row">
                        <div class="carousel-list">
                            <?php foreach ($kamar as $kmr) { ?>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="<?= site_url(
                                            'Auth/booking/' . $kmr->id
                                        ) ?>"><img src="<?= base_url() ?>/images/kamar/<?= $kmr->gambar ?>" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="<?= site_url(
                                                'Auth/booking/' . $kmr->id
                                            ) ?>"><?= $kmr->jenis ?></a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h6>Rp <?= $kmr->harga ?> / <label>Malam</label></h6>
                                        </div>
                                        <div class="room-book">
                                            <a href="<?= site_url(
                                                'Auth/booking/' . $kmr->id
                                            ) ?>">Pesan</a>
                                        </div>
                                        <!-- <div class="room-des">
                                            <h6> kjskdhfjhwkf <?= $kmr->deskripsi ?></h6>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                           <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Our room end-->

        <!-- Projects Section -->
        <!-- <div class="our-room text-center ptb-80 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-75">
                            <h2>Jenis <span>Kamar</span></h2>
                            <p>Experience luxurious accommodation and relaxed sophistication. 
                                Featuring a cascading swimming pool area and well-equipped fitness center, 
                                our hotel houses 65 well-appointed, air-conditioned rooms with private bathrooms. 
                                Free Wi-Fi is accessible throughout the building. Grand Kecubung is an urban oasis 
                                that provides a hotel resort experience to help guests enjoy their stay.</p>
                        </div>
                    </div>
                </div>
            <div class="all-projects">
                <div class="project-item">
                <div class="project-info">
                    <h1>Project 1</h1>
                    <h2>Coding is Love</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
                    rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
                    harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                </div>
                <div class="project-img">
                    <img src="<?= base_url() ?>/images/kamar/<?= $kmr->gambar ?>" alt="">
                </div>
                </div>
            

                <div class="our-room-show">
                    <div class="row">
                        <div class="carousel-list">
                            <?php foreach ($kamar as $kmr) { ?>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="<?= site_url(
                                            'Auth/booking/' . $kmr->id
                                        ) ?>"><img src="<?= base_url() ?>/images/kamar/<?= $kmr->gambar ?>" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#"><?= $kmr->jenis ?></a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h6>Rp <?= $kmr->harga ?> / <label>Malam</label></h6>
                                        </div>
                                        <div class="room-book">
                                            <a href="<?= site_url(
                                                'Auth/booking/' . $kmr->id
                                            ) ?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <?php } ?>
                            
                        </div>
                    </div>
                </div>

                
            </div>
            </div>
        </section> -->
        <!-- End Projects Section -->

        <!--Footer start -->
        <div class="footer ptb-50">
            <div class="footer-bg-opacity"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-4 col-xs-6">
                        <div class="single-footer mt-0">
                            <div class="logo">
                                <img src="images/logo1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-6">
                        <div class="single-footer">
                           <h3>Location & Contact Details</h3>
                           <div class="quick-item">
                                <ul>

                                   <li><a href="tel:+62 53221211">(+62) 532-21211</a></li>
                                   <li><a href="mailto: reservation@grandkecubunghotel.com">reservation@grandkecubunghotel.com</a></li>
                                   <li><a href="https://goo.gl/maps/UGTHoKzUqURwE7Qz9">Jl. Domba No.1 Pangkalan Bun 74111, Kalimantan Tengah, Indonesia</a></li>
</a></li>
                                </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright ptb-20 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <p>Copyright© Created by <a href="https://www.instagram.com/van.jya/"> Novani Dwi Sari Panjaya</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer end -->
    </div>
    
    



  <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?= base_url(
        'assets/js/vendor/jquery-1.12.0.min.js'
    ) ?>"></script>
    <!-- Bootstrap framework js -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!--counter up js-->
    <script src="<?= base_url('assets/js/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
    <!-- Video player js -->
    <script src="<?= base_url('assets/js/video-player.js') ?>"></script>
    <!-- headlines js -->
    <script src="<?= base_url('assets/js/animated-headlines.js') ?>"></script>
    <!-- Ajax mail js -->
    <script src="<?= base_url('assets/js/mailchimp.js') ?>"></script>
    <!-- Ajax mail js -->
    <script src="<?= base_url('assets/js/ajax-mail.js') ?>"></script>
    <!-- parallax js -->
    <script src="<?= base_url('assets/js/parallax.js') ?>"></script>
    <!-- textilate js -->
    <script src="<?= base_url('assets/js/textilate.js') ?>"></script>
    <script src="<?= base_url('assets/js/lettering.js') ?>"></script>
    <!--isotope js-->
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url(
        'assets/js/packery-mode.pkgd.min.js'
    ) ?>"></script>
    <!-- Style Customizer Js  -->
    <script src="<?= base_url('assets/js/style-customizer.js') ?>"></script>
    <!-- Owl carousel Js -->
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <!--Magnificant js-->
    <script src="<?= base_url(
        'assets/js/jquery.magnific-popup.js'
    ) ?>"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?= base_url('assets/js/plugins.js') ?>"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>