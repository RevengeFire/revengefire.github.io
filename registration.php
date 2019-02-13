<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Kaydol - TurnuvaKazan</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css"> 
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
	<?php include 'header.php'; ?>
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Giriş Yap / Kaydol</h2>
						<div class="page_link">
							<a href="index.php">Anasayfa</a>
							<a href="registration.php">Kaydol</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Login Box Area =================-->
        <section class="login_box_area p_120">
        	<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="login_box_img">
							<img class="img-fluid" src="img/login.jpg" alt="">
							<div class="hover">
								<h4>Zaten Üye Misin?</h4>
								<p>Hemen giriş yapabilirsin.</p>
								<a class="main_btn" href="login.php">Giriş Yap</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="login_form_inner reg_form">
							<h3>Hesap Oluştur</h3>
							<form class="row login_form" action="" method="post" id="contactForm" novalidate="novalidate">
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" id="pubg_nick" name="pubg_nick" placeholder="PUBG Mobile Nickiniz">
								</div>
								<div class="col-md-12 form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Mail adresiniz">
								</div>
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" id="password" name="password" placeholder="Şifrenizi yazınız">
								</div>
								<div class="col-md-12 form-group">
									<input type="password" class="form-control" id="pass" name="pass" placeholder="Şifrenizi yeniden yazınız">
								</div>
								<div class="col-md-12 form-group">
									<div class="creat_account">
										<input type="checkbox" id="f-option2" name="selector">
										<label for="f-option2">Oturumumu açık tut</label>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<button type="submit" value="submit" class="btn submit_btn">Kaydol</button>
								</div>
							</form>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Login Box Area =================-->

		<?php
			if($_POST){
				$pubg_nick = $_POST['pubg_nick'];
				$eposta = $_POST['email'];
				$sifre = $_POST['password'];
				$sifre_r = $_POST['pass'];
				$var_mail = false;

				if( ($sifre==$sifre_r) && trim($pubg_nick) != '' && trim($eposta) != '' && trim($sifre) != '' ){
						$query = $db->query("SELECT * FROM t_user", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
								if($row['email'] == $eposta) $var_mail = true;
							}
						}
						if($var_mail == true){
							//mail daha önce kaydolmuş
						}else{
							//mail daha önce kaydolmamış, kaydolucak
							$insert = $db->prepare("INSERT INTO t_user SET
							email=?,
							password=?,
							pubg_username=?,
							bilet=?");
							$kaydol = $insert->execute(array($eposta, $sifre, $pubg_nick, 0));
							if($kaydol){
								$last_id = $db->lastInsertId();
								//kayıt başarılı
							}
						}
				}
			}
		?>
        
		<?php include 'footer.php'; ?>
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>