<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog Site Template</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog Site Template">
	<meta name="author" content="https://youtube.com/FollowAndrew">
	<link rel="shortcut icon" href="images/logo.png">



	<?php
	wp_head();

	$count = WC()->cart->get_cart_contents_count();



	?>

	<link rel="stylesheet" href=" <?php echo get_template_directory_uri() ; ?>/assets/css/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href=" <?php echo get_template_directory_uri() ; ?>/assets/css/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href=" <?php echo get_template_directory_uri() ; ?>/assets/css/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href=" <?php echo get_template_directory_uri() ; ?>/assets/css/swiper-bundle.min.css" />



</head>

<body dir="rtl">


	<header class="header text-center">
		<div>
			<img src="/wp-content/themes/flower_theme/assets/images/logo.png" width="150" height="40" alt="">
		</div>
		<div>
			<ul class="main_menu">
				<li>
					<a href="">
						صفحه اصلی
					</a>
				</li>
				<li>
					<a href="">

						فروشگاه
					</a>
				</li>
				<li>
					<a href="">
						دسته بندی
					</a>
				</li>
				<li>
					<a href="">
						سوالات متداول
					</a>
				</li>
				<li>
					<a href="">
						وبلاگ
					</a>
				</li>
				<li>
					<a href="">
						درباره ما
					</a>
				</li>
				<li>
					<a href="">
						تماس با ما
					</a>
				</li>
			</ul>
		</div>
		<div>
			<button id="search" class=" btn ">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search m-3 " viewBox="0 0 16 16">
					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
				</svg>
			</button>

			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person m-3 " viewBox="0 0 16 16">
				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check m-3 " viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0" />
				<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
			</svg>
		</div>

	</header>





	<div class="search_bg">
		<div class="search_box">


			<form action="/S" method="get" class="input-group mb-3" style="
				position: relative;
				width: 500px;
				">
				<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="
						width: 85%;
						height: 50px;
						position: absolute;
						right: 0;
						border-radius: 15px;
						z-index: 10;
					">
				<button id="basic-addon1" style="
							background-color: #212341;
							color: white;
							width: 30%;
							height: 50px;
							position: absolute;
							border-radius: 15px;
							left: 0;
							text-align: left;
							padding: 0 20px;
						">
			</form>


			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
				<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
			</svg>
			</button>

		</div>
	</div>