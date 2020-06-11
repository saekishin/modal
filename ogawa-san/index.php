<!--
Template Name: cafe
-->

<!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>orion-cafe</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

<!-- swiperの読み込みCDNを使用 -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
	<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>





</head>


<body>



<div class="wrap">
	<!-- ナビ -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top p-0">

	<div class="container-fluid m-0 navbar-dark bg-dark p-2">
		<a class="navbar-brand" href="#"><img class="funny" src="<?php echo get_template_directory_uri(); ?>/img/orion_logo.png" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto" id="gnav">
				<li class="nav-item">
					<a class="nav-link"  href="#slides">Home</a>	
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#menu">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#access">Access</a>
				</li>
			</ul>
		</div>
	</div>
	</nav>


	<!-- Topエリア -->
	<section id="topview">

	<div id="service" class="container-fluid p-0 pt-5">
		<div class="row">
			<div class="small-img claster col-12 col-sm-12 col-md-8 col-lg-8 p-0">
				<!-- 左上画像 -->
				<div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861.png" alt="">
				</div>
			
				<!-- メイン画像スライダー -->
				<div id="slides" class="top-img carousel claster" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#slides" data-slide-to="0" class="active"></li>
						<li data-target="#slides" data-slide-to="1"></li>
						<li data-target="#slides" data-slide-to="2"></li>
					</ul>
					<div id="slides" class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png" alt="">
							<div class="carousel-caption">
								<h1 class="display-2">Orion Cafe</h1>
								<a href="#connect" class="reserved_btn btn btn-lg">予約</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png" alt="">
						</div>
						<div class="carousel-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-md-0 mt-5">
				
			<!-- 縦書きの紹介文エリア -->
				<p class="vertical mx-auto">
					あああああ
					<br>
					<br class="d-none d-sm-block">
					なんやこれは
					<br class="d-md-none">
					おはようございます
					<br>
					こんにちわ
					<br class="d-md-none">
					おやすみなさい
				</p>
			</div>

		</div>
	</div>

	</section>

	<!-- 紹介エリア -->
	<section id="introduction">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-8 col-lg-8">
					<div class="d-flex">
						<div>ああああああああああああああああああああ</div>
						<div>いいいいいいいいいいいいいいいいいいいい</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4">
					ううううう
				</div>
			</div>
		</div>
	</section>


	<!-- swiperを使用してスライダーを実装
	-->
	<!-- Gallary -->
		<!-- Slider全体のコンテナ -->
	<div class="swiper-container pt-5">
		<!-- Sliderの内包コンテナ -->
		<div class="swiper-wrapper">
			<!-- Slideさせたいコンテンツ -->
			<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png"></div>
			<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png"></div>
			<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png"></div>
			<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png"></div>
			<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png"></div>
			<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png"></div>
			<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8861-2.png"></div>
		</div>
		<!-- ページネーション（※省略可） -->
		<div class="swiper-pagination"></div>
		<!-- ナビゲーションボタン（※省略可） --> 
		<div class="swiper-button-prev"></div> 
		<div class="swiper-button-next"></div>
		<!-- スクロールバー（※省略可） --> 
		<!-- <div class="swiper-scrollbar"></div>  -->
	</div>




	<!-- News -->
	<section id="news">
		<div class="bg-white text-md-center">
			<h3 class="text-center m-auto p-3">NEWS</h3>
			<hr>
			<div class="p-4">
				<p >2020/01/24</p>
				<p>営業時間変更</br>ランチの開始時間が11時から11時30分に変更になりました。
				</p>
			</div>
			<div class="p-4">
				<p >2019/９/24</p>
				<p>新作メニュー</br>季節のプレートが秋バージョンになりました。
				</p>
			</div>
		</div>
	</section>


	<!--- About -->
	<Section id="about" class="claster">
		<div class="about">
			<div id="service" class="container-fluid">
				<div class="row text-center text-white">
					<div class="col-12">
						<h1 class="border-bottom">About</h1>
					</div>
					<div class="col-12">
						<p class="lead font-weight-bold">たくさんのこだわりが詰まったカフェ</p>
					</div>
				</div>
			</div>

			<!--- About 説明文-->
			<div class="about_info fadein">
				<div class="about_info text-md-center p-3 mx-lg-5 bg-white ">
					<h5 class="text-center py-3">食</h5>
					<p>このカフェでは一杯一杯丁寧に淹れるハンドドリップコーヒーや、地元の食材をふんだんに使ったメニュー、自家製のケーキや人気のパフェをご用意しています。 </p>
					<h5 class="text-center py-3">空間</h5>
					<p>ここにきたら "ほっと" する。そんな空間にするために、内装を手作りしこだわったものだけを並べました。</p>
				</div>
			</div>
		</div>
	</section>

	<!--- Menu -->
	<section id="menu" class="claster">
		<div class="bg-white">
			<h1 class="text-center">MENU</h1>
			<hr>
		</div>

		<!--- Cards -->
		<div class="container-fluid row text-center">
			<div class="col-md-4 my-3 fadein">
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/lanch5.jpg">
					<div class="card-body">
						<h4 class="card-title">Lanch</h4>
						<a href="#lanch" class="btn btn-outline-secondary">詳細</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 my-3 fadein">
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/tea-main.jpg">
					<div class="card-body">
						<h4 class="card-title">Tea</h4>
						<a href="#tea" class="btn btn-outline-secondary">詳細</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 my-3 fadein">
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/party.jpg">
					<div class="card-body">
						<h4 class="card-title">Party</h4>
						<a href="#party" class="btn btn-outline-secondary">詳細</a>
					</div>
				</div>
			</div>
		</div>


		<!--- Lanch -->
		<div id="lanch" class="container-fluid my-5 ">
			<div class="row text-center">
				<div class="col-12">
					<h1>lanch</h1>
					<h4>(11:30〜14:00)</h4>
				</div>
				<hr>
			</div>
			<div class="container-fluid">
				<div class="row  m-sm-5 text-center text-lg-left fadein">
					<div class="col-lg-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lanch2.jpg" alt="プレートランチ" class="img-fluid">
					</div>
					<div class="col-lg-8">
						<h3 class="mb-5">プレートランチ</h3>
						<p>メインはハンバーグ、唐揚げ、トンテキからお選びください。ごはん(白米or雑穀米)</p>
						<p>料金：1200 円 (税込み)</p>
						<p>＊プラス 200円 でドリンクが付きます</p>
						<br>
					</div>
				</div>
				<div class="row  m-sm-5 text-center text-lg-left fadein">
					<div class="col-lg-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lanch4.jpg" alt="パスタランチ" class="img-fluid">
					</div>
					<div class="col-lg-8">
						<h3 class="mb-5">パスタランチ</h3>
						<p>5種類のパスタからお選びいただけます。スープ・サラダ付き</p>
						<p>料金：1000 円 (税込み)</p>
						<p>＊うにパスタはプラス200円</p>
						<br>
					</div>
				</div>
				<div class="row  m-sm-5 text-center text-lg-left fadein">
					<div class="col-lg-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lanch5.jpg" alt="パエリアランチ" class="img-fluid">
					</div>
					<div class="col-lg-8">
						<h3 class="mb-5">パエリアランチ</h3>
						<p>サラダ/3種の季節のタパス/本日のアヒージョとパン/選べるパエリア(海の幸、鶏肉と野菜、イカ墨からお選びください)</p>
						<p>料金：1900 円 (税込み)</p>
						<br>
					</div>
				</div>
			</div>
		</div>

		<!--- Tea -->
		<div id="tea" class="container-fluid my-5">
			<div class="row text-center">
				<div class="col-12">
					<h1>Tea</h1>
					<h4>(14:00〜18:00)</h4>
				</div>
				<hr>
			</div>
			<div class="container-fluid">
				<div class="row  m-sm-5 text-center text-lg-left fadein">
					<div class="col-lg-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tea3.jpg" alt="ケーキ" class="img-fluid">
					</div>
					<div class="col-lg-8">
						<h3 class="mb-5">ケーキセット</h3>
						<p>ドリンクはコーヒー・紅茶・カフェオレ・オレンジジュース・アップルジュースからお選びください</p>
						<p>料金：900 円 (税込み)</p>
						<br>
					</div>
				</div>
				<div class="row  m-sm-5 text-center text-lg-left fadein">
					<div class="col-lg-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tea2.jpg" alt="フレンチトーストセット" class="img-fluid">
					</div>
					<div class="col-lg-8">
						<h3 class="mb-5">パスタランチ</h3>
						<p>ドリンクはコーヒー・紅茶・カフェオレ・オレンジジュース・アップルジュースからお選びください</p>
						<p>ソースはイチゴ・チョコレート・オレンジの3種類からお選びできます。</p>
						<p>料金：800 円 (税込み)</p>
						<br>
					</div>
				</div>
			</div>
		</div>

		<!--- party -->
		<div id="party" class="container-fluid my-5">
			<div class="row text-center">
				<div class="col-12">
					<h1>Party</h1>
				</div>
				<hr>
			</div>
			<div class="container-fluid">
				<div class="row  text-center text-lg-left fadein m-sm-5">
					<div class="col-lg-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/party.jpg" alt="パーティー" class="img-fluid">
					</div>
					<div class="col-lg-8">
						<h3 class="mb-5">Wedding Party</h3>
						<p>堅苦しくなく、「カジュアルで自分たちらしく」が叶う。それがカフェウエディングの魅力。まるで自宅にゲストを招いたようなアットホーム感、リラックス感、楽しさがある。<br>
							あなたもここで心あったまるウエディングパーティーを。</p>
						<p>料金：要相談</p>
						<br>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--- follow -->
	<span id="follow">
		<div class="follow text-center">
			<div class="text-white my-5">
				<h1>follow us</h1>
				<hr>
			</div>
			<div class="follow_text bg-white fadein">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</span>

	<div id="access" class="bg-white m-md-5 p-0 text-center claster">
		<div class="row text-center">
			<div class="col-12 py-3">
				<h1>Access</h1>
			</div>
			<hr>
		</div>
		<div class="row m-3">
			<div class="col-md-4">
				<h4 class="py-3">Orion cafe</h4> 

				<p>住所：愛知県名古屋市</p>
				<p>電話番号：090-999-9999</P>
				<p>定休日：月曜</P>
				<p>【営業時間】</p>
				<p>11:30～18:00(L.O 17:30)</P>
				<p>駐車場100台(共同駐車場)</p>
			</div>
			<div class="col-md-8 text-md-left"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4265663082974!2d136.879348215276!3d35.1709193653964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x888e6049a94311f3!2z5ZCN5Y-k5bGL44Oe44Oq44Kq44OD44OI44Ki44K944K344Ki44Ob44OG44Or!5e0!3m2!1sja!2sjp!4v1588037952651!5m2!1sja!2sjp" width="90%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe></div>
		</div>
	</div>

	<!--- Footer -->
	<footer>
	<div class="container-fluid p-0 m-0">
		<div class="row text-center p-0 m-0">
			<div class="col-12">
				<hr class="light">
				<h5>&copy; orion-cafe.com</h5>
			</div>
		</div>
	</div>
	</footer>
<div>

<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // ここからオプション
    loop: true,
	slidesPerView: 5,
	spaceBetween: 0,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })

  $(function(){
		$(window).scroll(function (){
			$('.fadein').each(function(){
				var elemPos = $(this).offset().top;
				var scroll = $(window).scrollTop();
				var windowHeight = $(window).height();

				if ((scroll < elemPos +1000) && (elemPos < scroll+ windowHeight)){
					$(this).addClass('scrollin');
				}
				
				else{
					$(this).removeClass('scrollin');
				}
			});
			$('.claster').each(function(i){
				var elemPosTop = $(this).offset().top;
				var elemPosBtm = $(this).offset().top + $(this).height();
				var scroll = $(window).scrollTop();
				var windowHeight = $(window).height();

				if ((scroll < elemPosBtm - 300) && (elemPosTop + 200 < scroll+ windowHeight)){
					$('.nav-link').eq(i).addClass('menu_line');
				}else{
					$('.nav-link').eq(i).removeClass('menu_line');
				}
			});
		});
	});
 </script>

</body>
</html>
