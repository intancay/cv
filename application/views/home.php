<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Intancay Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Intancay Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	   <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>
<!-- header -->
<header>
	<div class="container">
		<div class="header d-lg-flex justify-content-between align-items-center">
			<div class="header-agile">
				<h1>
					<a class="navbar-brand logo" href="index.html">
                        <span class="fa fa-modx" aria-hidden="true"></span>Intan Nuer Cahyani
                        </a>
				</h1>
			</div>
			<div class="nav_w3ls">
				<nav>
					<label for="drop" class="toggle mt-lg-0 mt-1"><span class="fa fa-bars" aria-hidden="true"></span></label>
					<input type="checkbox" id="drop" />
						<ul class="menu">
							<li class="mr-lg-3 mr-2 active"><a href="index.html">Home</a></li>
							<li class="mr-lg-3 mr-2"><a href="#about">Resume</a></li>
							<li class="mr-lg-3 mr-2"><a href="#services">Pendidikan</a></li>
							<li class="mr-lg-3 mr-2"><a href="#team">Speasialis</a></li>
							<li class="mr-lg-3 mr-2"><a href="#gallery">Pengalaman</a></li>
							<li><a href="#contact">Portofolio</a></li>
						</ul>
				</nav>
			</div>

		</div>
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1"/>
		<ul class="banner_slide_bg">
			<li>
                <div class= <?php echo $info ['foto']?>>
				<div class="slider-info bg1">
					<div class="bs-slider-overlay">
						<div class="banner-text">
							<div class="container">
							<!-- <h3 class="text-capitalize head_style">INTAN NUER</h3> -->
                                <h2 class="movetxt agile-title text-capitalize"><?php echo $info ['info']?></h2>
                              <a  href="https://wa.me/06281230927612?text=Hallo *Intan*, Saya Tertarik dengan CV Kamu" class="btn btn-info js-scroll-trigger">CHAT ME</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg3">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
							<h3 class="text-capitalize head_style">Fashion Ma</h3>
								<h4 class="movetxt agile-title text-capitalize">An Influential Platform</h4>
								
								
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="navigation"> 
			<div>
			  <!-- <label for="slides_1"></label> -->
			  <!-- <label for="slides_2"></label>
			  <label for="slides_3"></label> -->
			</div>
		</div>
	</div>
</section>
<!-- //banner -->
<!-- /about -->
<section class="mid py-5" id="about">
        <div class="container py-md-5">
		  <p class="p_sub">About me</p>
		<!-- <h4 class="heading mb-sm-5 mb-4">About me</h4> -->
            <div class="row">
                <div class="col-lg-4 col-md-6 about-two-grids">
                    <div class="p_sub">
					<h3 class="heading mb-sm-3 mb-2">Hi All!</h3>
                        <p><?php echo $biodata ['resume']?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 about-imgs-txt mt-4">
                    <img src=<?php echo $biodata ['foto']?> alt="news image" class="img-fluid">
                </div>

                <div class="col-lg-4 about-imgs-txt mt-4">
                    <div class="row ">
                        <div class="col-lg-3 col-md-5 col-sm-4 text-center">
                            <!-- <div class="about-span-txt">
                                <span class="fa fa-adjust" aria-hidden="true"></span>
                            </div> -->
                        </div>
                        <!-- <div class="about-lay-left col-lg-9 col-md-9 col-sm-9"> -->
                            <p class="p_sub">Biodata</p>
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>: <?php echo $biodata ['nama']?></td>
                                </tr>
                                <tr>
                                    <td>Place, Date of Birth</td>
                                    <td>: <?php echo $biodata ['ttl']?></td>
                                </tr>
                                <tr>
                                    <td>Religion</td>
                                    <td>: <?php echo $biodata ['agama']?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>: <?php echo $biodata ['alamat']?></td>
                                </tr>
                                <!-- <tr>
                                    <td>Location :</td>
                                    <td><td><?php echo $biodata ['lokasi']?></td></td>
                                </tr> -->
                                <tr>
                                    <td>e-mail</td>
                                    <td>:<?php echo $biodata ['email']?></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: <?php echo $biodata ['wa']?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>: <?php echo $biodata ['jk']?></td>
                                </tr>
                            </table>
                        </tr>
                    <!-- </div>
                    <div class="row my-lg-5 my-md-4 my-3 ">
                        <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                            <div class="about-span-txt">
                                <span class="fa fa-crosshairs" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="about-lay-left col-lg-9 col-md-9 col-sm-9">
                            <h6 class="mb-lg-3 mb-2">
                               Top Modelling</h6>
                            <p>Lorem ipsum dolor sit amet, eiusmod tempor incididunt ut labore et consectetur.</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                            <div class="about-span-txt">
                                <span class="fa fa-refresh" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="about-lay-left col-lg-9 col-md-9 col-sm-9">
                            <h6 class="mb-lg-3 mb-2">New Trends</h6> 
                            <p>Lorem ipsum dolor sit amet, eiusmod tempor incididunt ut labore et consectetur.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- //about -->
<!-- /services -->
<div class="ab-info-main py-5" id="services">
<div class="container py-md-5">
  <p class="p_sub">Pendidikan</p>
		<!-- <h3 class="heading mb-sm-5 mb-4">Services</h3> -->
 <div class="row text-center" id="stats">
            </div>
            
                <div id="products" class="row view-group my-lg-3 my-2">
                <?php
            foreach($pendidikan as $data){
                ?>
                <div class="item col-lg-4 mb-4">
                    <div class="thumbnail card">
                        <!-- <div class="img-event">
                            <img class="group list-group-image img-fluid" src="assets/images/logo.jpg" alt="" >
                        </div> -->
                        <div class="caption card-body">
                            <h5 class="group card-title inner list-group-item-heading">
                                <?php echo $data->nama_pend?></h5>
                            <p class="group inner list-group-item-text">
                            <?php echo $data->ket_pend?><p>
                        </div>
                    </div>
                </div>
                <?php
            }
?>
            </div>
        </div>
    </div>
    <!--//services-->
	<!--//team -->
    <section class="banner-bottom" id="team">
        <div class="container py-md-5">
		  <p class="p_sub">Speasialis</p>
		<!-- <h3 class="heading mb-sm-5 mb-4">Our Team</h3> -->
            <div class="inner-sec-w3ls">
                <div class="row mt-lg-5">
                <?php
            foreach($skill as $data){
            ?>
                <div class="col-md-4 team-gd text-center mb-4">
                    <!-- <div class="team-img mb-4">
                    <img src="assets/images/ofc.jpg" class="img-fluid rounded-circle" alt="user-image" alt="">
                    </div> -->
                       
                <div class="team-info">
                    <span class="fa fa-user-o" aria-hidden="true"></span>
                    <h2 class="mt-md-4 mt-3"><span class="sub-tittle-team"></span> <?php echo $data->nama_skill?></h2>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
    </section>
    <!--//team -->

  <!-- portfolio -->
    <section class="portfolio py-5" id="gallery">
        <div class="container py-md-5">
          <p class="p_sub">Pengalaman</p>
          <h1 class="heading mb-sm-5 mb-4"></h1>
          <ul class="mb-0 text-white-50">
              <li>
                <div class="content-text">
                <?php
                foreach($pengalaman as $data){
                ?>
                      <h5 class="line-title"><?php echo $data->nama_peng?></h5>
                      <span><?php echo $data->waktu_peng?></span>
                      <p class="line-text"><?php echo $data->ket_peng?></p>
                      <?php
                }
                ?>
                  </div>
                  
          </ul>
		<!-- <h3 class="heading mb-sm-5 mb-4">Our Gallery</h3>
            <div class="row news-grids">
                <div class="col-md-6 gal-img">
                    <a href="#gal1"><img src="assets/images/ga1.jpg" alt="Presell" class="img-fluid"></a>
                    <h5 class="gal-info">Never Buy A Boring Coat <span class="decription">Creativity</span>
                    </h5>
                </div>
                <div class="col-md-6 gal-img">
                    <a href="#gal2"><img src="assets/images/ga2.jpg" alt="Presell" class="img-fluid"></a>
                    <h5 class="gal-info">Bags will become even bigger! <span class="decription">Attractive</span>
                    </h5>
                </div>
                <div class="col-md-6 gal-img mt-md-5">
                    <a href="#gal3"><img src="assets/images/ga3.jpg" alt="Presell" class="img-fluid"></a>
                    <h5 class="gal-info">Individualist ecclestism rise<span class="decription">beautifull</span>
                    </h5>
                </div>
                <div class="col-md-6 gal-img">
                    <a href="#gal4"><img src="assets/images/ga4.jpg" alt="Presell" class="img-fluid"></a>
                    <h5 class="gal-info">Tips for Decluttering Wardrobe <span class="decription">Celebrity</span>
                    </h5>
                </div> -->

            <!-- </div>
        </div>
    </section>
    popup
    <div id="gal1" class="pop-overlay">
        <div class="popup">
            <img src="assets/images/ga1.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    //popup
    popup
    <div id="gal2" class="pop-overlay">
        <div class="popup">
            <img src="assets/images/ga2.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    //popup
    popup
    <div id="gal3" class="pop-overlay">
        <div class="popup">
            <img src="assets/images/ga3.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    //popup3
    popup
    <div id="gal4" class="pop-overlay">
        <div class="popup">
            <img src="assets/images/ga4.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    //popup
    //portfolio -->
	<!-- testimonials
    <section class="testimonials py-5" id="testi">
        <div class="container pt-lg-3">
		    <p class="p_sub">Fashion Hub</p>
		<h3 class="heading heading1 mb-sm-5 mb-4">Testimonials</h3>
            <div class="testimonials_grid mx-auto text-center">
                <span class="fa fa-quote-left" aria-hidden="true"></span>
                <p class="sub-test">Integer sit amet mattis quam, sit amet ultricies velit. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                </p>
                <div class="testi_grid">
                    <img src="assets/images/test2.jpg" alt=" " class="img-fluid" />
                    <h5>Thomas Carl</h5>
                    <p>Add Some Description</p>
                </div>
            </div>
        </div>
    </section> --> 
    <!-- //testimonials -->
<!-- /plans -->
    <section class="plans-sec py-5" id="plans">
        <div class="container py-md-5">
		  <p class="p_sub">Protofolio</p>
		<h1 class="heading mb-sm-5 mb-4"></h1>
                    <div class="row pricing-plans">
                        <div class="col-md-4 price-main text-center mb-4">
                            <div class="pricing-grid card">
                                <div class="card-body">
                                    <div>
                                        <img class="mb-3 mb-lg-0" style="width:100%;" src=<?php echo $portofolio['foto']?> alt=""> 
                                    </div>
                                    <!-- <span class="fa fa-user-o" aria-hidden="true"></span>
                                    <h4 class="text-uppercase">Basic</h4>
                                    <h5 class="card-title pricing-card-title">
                                        <span class="align-top">$</span>199

                                    </h5> -->
                                    <!-- <ul class="price-in list-unstyled mt-3 mb-4">
                                        <li>Modelling</li>
                                        <li>Branding</li>
                                        <li>Photography</li>

                                        <li>Limited Support</li>
                                    </ul> -->
                                    <!-- <div class="price-button mt-md-3 mt-2">
                                        <a class="btn text-uppercase" href="#contact">
                                            Read More</a>
                                    </div> -->
                                <!-- </div>
                            </div>
                        </div>
                        <div class="col-md-4 price-main price-main1  text-center mb-4">
                            <div class="pricing-grid card">
                                <div class="card-body">
                                    <span class="fa fa-female" aria-hidden="true"></span>
                                    <h4 class="text-uppercase">Featured</h4>
                                    <h5 class="card-title pricing-card-title">
                                        <span class="align-top">$</span>399

                                    </h5>
                                    <ul class="price-in list-unstyled mt-3 mb-4">
                                         <li>Modelling</li>
                                        <li>Branding</li>
                                        <li>Make-up</li>

                                        <li>High Support</li>
                                    </ul> -->
                                    <!-- <div class="price-button mt-md-3 mt-2">
                                        <a class="btn text-uppercase active" href="#contact">
                                            Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4 price-main text-center mb-4">
                            <div class="pricing-grid card">
                                <div class="card-body">
                                    <span class="fa fa-file-video-o" aria-hidden="true"></span>
                                    <h4 class="text-uppercase">Featured</h4>
                                    <h5 class="card-title pricing-card-title">
                                        <span class="align-top">$</span>399

                                    </h5>
                                    <ul class="price-in list-unstyled mt-3 mb-4">
                                        <li>Filming</li>
                                        <li>Branding</li>
                                        <li>Advertising</li>

                                        <li>High Support</li>
                                    </ul> -->
                                    <div class="price-button mt-md-3 mt-2">
                                        <a class="btn text-uppercase active" href="#contact">
                                            Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
    <!-- //plans -->

<!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container">
            <div class="header">
			     <p class="p_sub">Contact</p>
		<h1 class="heading mb-sm-5 mb-4"></h1>
            </div>
            <ul class="list-unstyled row text-left">
                <li class="col-lg-4 col-sm-4 adress-info mb-4">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon text_side">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-9 text-left mt-2">
                            <h6>Location</h6>
                            <p><?php echo $kontak ['location']?></p>
                        </div>
                        <?php
                        ?>
                    </div>
                </li>

                <li class="col-lg-4 col-sm-4 adress-info adress-info1 mb-4">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon text_side">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <div class="col-md-9 text-left text_side1 mt-2">
                            <h6>Email</h6>
                            <a href="mailto:info@example.com"><?php echo $kontak ['email']?></a>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 col-sm-4 adress-info mb-4">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon text_side">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <div class="col-md-9 text-left mt-2">
                            <h6>Phone Number</h6>
                            <p><?php echo $kontak ['phone_number']?></p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="contact-form mx-auto text-left">
                <form name="contactform" id="contactform1" method="post" action="#" >
                    <div class="row">
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="fade-up">
                                <input type="text" class="form-control" id="name" placeholder="FULL NAME" name="name" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="fade-up">
                                <input type="email" class="form-control" id="email" placeholder="EMAIL ADDRESS" name="email" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="fade-up">
                                <input type="text" class="form-control" id="phone" placeholder="PHONE NUMBER" name="phone" required="">
                            </div>
                        </div>

                    </div>

                    <!-- <div class="form-group mb-5">
                        <label>How can we help?</label>
                        <textarea name="issues" class="form-control" id="iq" placeholder="MESSAGE" required=""></textarea>
                    </div>
                    <div class="contact-page">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
            <div class="map mt-md-5 mt-4">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe> </div>
        </div>

    </section> -->
    <!-- //contact -->
 <!-- footer -->
    <footer class="footer-content">
        <div class="layer footer">
            <div class="container-fluid">
                <div class="row footer-top-inner-vv">
                    <div class="col-lg-4 col-md-6 footer-top mt-md-0 mt-sm-2">
                        <!-- <h2>
                            <a class="navbar-brand" href="index.html">
                         Fashion
                        </a>
                        </h2> -->
                        <!-- <p class="my-3">Donec consequat sam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</p>
                        <p>
                            Id quod possimusapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper varius orci.
                        </p> -->
                    </div>
                    <div class="col-lg-2 col-md-6 mt-md-0 mt-5">
                        <div class="footer-lavi">
                            <!-- <h3 class="mb-3 lavi_title">Navigation</h3>
                            <hr>
                            <ul class="list-info-lavi">
                                <li>
                                    <a href="index.html">
                                    Home
                                </a>
                                </li>
                                <li class="my-2">
                                    <a href="#about">
                                    About Us
                                </a> -->
                                <!-- </li>
                                <li class="my-2">
                                    <a href="#gallery">
                                    Gallery
                                </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#services">
                                    Services
                                </a>
                                </li>
                                <li>
                                    <a href="#contact">
                                    Contact Us
                                </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="footer-lavi">
                            <!-- <h3 class="mb-3 lavi_title">Links</h3>
                            <hr>
                            <ul class="list-info-lavi">
                                <li>
                                    <a href="#about">
                                    Our Mission
                                </a>
                                </li>
                                <li class="my-2">
                                    <a href="#services">
                                    Latest Posts
                                </a>
                                </li>
                                <li class="my-2">
                                    <a href="#plans">
                                    Explore
                                </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#contact">
                                    Find us
                                </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                    Privacy Policy
                                </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="footer-lavi">
                            <!-- <h3 class="mb-3 lavi_title">Contact Us</h3>
                            <hr>
                            <div class="last-vv-contact">
                                <p>
                                    <a href="mailto:example@email.com">info@example.com</a>
                                </p> -->
                            <!-- </div>
                            <div class="last-vv-contact my-2">
                                <p>+ 456 123 7890</p>
                            </div>
                            <div class="last-vv-contact">
                                <p>+ 90 Marketing Agency,
                                    <br>5th cross,4th building, New York City.</p>
                            </div>
                        </div>-->
                    </div>

                </div>
                    
                <p class="copy-right-grids text-li text-center my-sm-4 my-4" style="width: 100%;">Copyright © 2019 Intancay, All Rights Reserved  | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
                <div class="vv-footer text-center mt-4" style="width: 100%;">
                    <ul class="list-unstyled vv-icons">
                        <li>
                            <a href="https://www.instagram.com/intancay_">
							<span class="fa fa-instagram "></span>
						</a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=081230927612">
							<span class="fa fa-whatsapp"></span>
						</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="move-top text-right"><a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a></div>
            </div>
            <!-- //footer bottom -->
        </div>
    </footer>
    <!-- //footer -->

</body>
</html>