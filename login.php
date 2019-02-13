<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Giriş Yap - TurnuvaKazan</title>
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
						<h2>Giriş Yap/Kaydol</h2>
						<div class="page_link">
							<a href="index.php">Anasayfa</a>
							<a href="login.php">Giriş Yap</a>
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
								<h4>Sitemizde yeni misin?</h4>
								<p>Turnuvaya katılmak için sitemize kaydolmanız gerekiyor.</p>
								<a class="main_btn" href="registration.php">Hesap Oluştur</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="login_form_inner">
							<h3>Giriş Yapın</h3>
							<form class="row login_form" action="" method="post" id="contactForm" novalidate="novalidate">
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Kullanıcı Adı">
								</div>
								<div class="col-md-12 form-group">
									<input type="password" class="form-control" id="password" name="password" placeholder="Şifre">
								</div>
								<div class="col-md-12 form-group">
									<div class="creat_account">
										<input type="checkbox" id="f-option2" name="selector">
										<label for="f-option2">Beni Hatırla</label>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<button type="submit" value="submit" class="btn submit_btn">Giriş Yap</button>
									<a href="#">Şifreni hatırlamıyor musun?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Login Box Area =================-->
        ,
        <?php
            if($_POST){
                $username = $_POST['name'];
                $sifre = $_POST['password'];
                if(trim($username) != '' && trim($sifre) != ''){
                    //giriş yap
                    $giris = $db->query("SELECT * FROM t_user WHERE pubg_username='{$username}'")->fetch(PDO::FETCH_ASSOC);
                    if($giris){
                        $sifre_server = $giris['password'];
                        if($sifre == $sifre_server){
                            //şifre doğru
                            $_SESSION["user"] = $username;
                            header("Location: index.php");
                        }else{
                            //şifre yanlış
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