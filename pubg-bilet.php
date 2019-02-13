<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Bilet - TurnuvaKazan</title>
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
		<?php
			$urun_adedi = $_GET['adet'];
			if($urun_adedi == 1)$fiyat=10;
			if($urun_adedi == 2)$fiyat=20;
			if($urun_adedi == 3)$fiyat=30;
			if($urun_adedi == 4)$fiyat=40;
			if($urun_adedi == 5)$fiyat=50;
			if($urun_adedi == 6)$fiyat=60;
			if($urun_adedi == 7)$fiyat=70;
			if($urun_adedi == 8)$fiyat=80;
			if($urun_adedi == 10)$fiyat=90;
			switch($urun_adedi){
				case 1:
				$alisveris_linki = "1_adet_link";
				break;
				case 2:
				$alisveris_linki = "2_adet_link";
				break;
				case 3:
				$alisveris_linki = "3_adet_link";
				break;
				case 4:
				$alisveris_linki = "4_adet_link";
				break;
				case 5:
				$alisveris_linki = "5_adet_link";
				break;
				case 6:
				$alisveris_linki = "6_adet_link";
				break;
				case 7:
				$alisveris_linki = "7_adet_link";
				break;
				case 8:
				$alisveris_linki = "8_adet_link";
				break;
				case 10:
				$alisveris_linki = "10_adet_link";
				break;
				default:
				null;
				break;
			}$alisveris_linki .= ".php";
		?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2><?php echo $urun_adedi." Adet PUBG Bileti"; ?></h2>
						<div class="page_link">
							<a href="index.php">Anasayfa</a>
							<a href="category.php">Mağaza</a>
							<a href="single-product.php">PUBG Bileti</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Single Product Area =================-->
        <div class="product_image_area">
        	<div class="container">
        		<div class="row s_product_inner">
        			<div class="col-lg-6">
        				<div class="s_product_img">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
										<img src="img/product/single-product/s-product-s-2.jpg" alt="">
									</li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1">
										<img src="img/product/single-product/s-product-s-3.jpg" alt="">
									</li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2">
										<img src="img/product/single-product/s-product-s-4.jpg" alt="">
									</li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="img/urun.png" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="img/urun.png" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="img/urun.png" alt="Third slide">
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="col-lg-5 offset-lg-1">
        				<div class="s_product_text">
        					<h3><?php echo $urun_adedi." Adet PUBG Bileti"; ?></h3>
        					<h2><?php echo "₺".$fiyat; ?></h2>
        					<ul class="list">
        						<li><a class="active" href="#"><span>Kategori</span> : Turnuva Bileti</a></li>
        						<li><a href="#"><span>Stok Durumu</span> : Stokta</a></li>
        					</ul>
        					<p>Ürün açıklaması.</p>
        					<div class="product_count">
        						<label for="qty">Adet:</label>
								<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
							</div>
        					<div class="card_area">
        						<a class="main_btn" href="<?php echo $alisveris_linki; ?>">Satın Al</a>
        						<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
        						<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!--================End Single Product Area =================-->
        
        <!--================Product Description Area =================-->
        <section class="product_description_area">
        	<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Açıklama</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Özellikler</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Yorumlar</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">İncelemeler</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
						<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less</p>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Garanti</h5>
										</td>
										<td>
											<h5>Evet</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>3D Security Ödeme</h5>
										</td>
										<td>
											<h5>Mevcut</h5>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row">
							<div class="col-lg-6">
								<div class="comment_list">
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/single-product/review-1.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<h5>12th Feb, 2017 at 05:56 pm</h5>
												<a class="reply_btn" href="#">Yanıtla</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									<div class="review_item reply">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/single-product/review-2.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<h5>12th Feb, 2017 at 05:56 pm</h5>
												<a class="reply_btn" href="#">Yanıtla</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/single-product/review-3.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<h5>12th Feb, 2017 at 05:56 pm</h5>
												<a class="reply_btn" href="#">Yanıtla</a>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="review_box">
									<h4>Yorum At</h4>
									<form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="İsmin">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" placeholder="Mail Adresin">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="number" name="number" placeholder="Telefon Numaran">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" id="message" rows="1" placeholder="Mesajın..."></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="submit" value="submit" class="btn submit_btn">Yorum Gönder</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
						<div class="row">
							<div class="col-lg-6">
								<div class="row total_rate">
									<div class="col-6">
										<div class="box_total">
											<h5>Ortalama</h5>
											<h4>4.0</h4>
											<h6>(03 İnceleme)</h6>
										</div>
									</div>
									<div class="col-6">
										<div class="rating_list">
											<h3>Toplam 3 İnceleme Var</h3>
											<ul class="list">
												<li><a href="#">5 Yıldız <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">4 Yıldız <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">3 Yıldız <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">2 Yıldız <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
												<li><a href="#">1 Yıldız <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="review_list">
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/single-product/review-1.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/single-product/review-2.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/single-product/review-3.png" alt="">
											</div>
											<div class="media-body">
												<h4>Blake Ruiz</h4>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="review_box">
									<h4>İnceleme Ekle</h4>
									<p>Güvenilirlik:</p>
									<ul class="list">
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
									<p>Muhteşem</p>
									<form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="İsmin">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" placeholder="Mail Adresin">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="number" name="number" placeholder="Telefon Numaran">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" id="message" rows="1" placeholder="Görüşün..."></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="submit" value="submit" class="btn submit_btn">Görüş Bildir</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Product Description Area =================-->
        
		<?php include 'cok-kazananlar.php'; ?>

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