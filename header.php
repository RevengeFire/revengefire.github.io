<?php 
ob_start();
session_start();
?>
<?php include 'baglan.php'; ?>
<!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<a href="mailto:mustafaunal5@icloud.com">mustafaunal5@icloud.com</a>
						<a href="#">TurnuvaKazan Resmi Sitesi</a>
					</div>
					<div class="float-right">
						<ul class="header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-slack"></i></a></li>
						</ul>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light main_box">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Anasayfa</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="category.php" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Mağaza</a>
								</li>
								<li class="nav-item submenu dropdown">
									<a href="<?php echo isset($_SESSION['user']) ? 'profil.php' : 'login.php'; ?>" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><?php echo isset($_SESSION['user']) ? "Profil" : "Üyelik"; ?></a>
								</li>
								<?php if(isset($_SESSION['user'])) echo '<li class="nav-item"><a class="nav-link" href="logout.php">Çıkış Yap</a></li>'; ?>
								<li class="nav-item"><a class="nav-link" href="contact.php">Bize Ulaşın</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->