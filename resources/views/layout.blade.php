<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | Geek Computer</title>
	<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png')}}">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<ul class="nav navbar-nav">
							<p><span><a href="https://www.facebook.com/trungkien.nguyen.129"><i
											class="fa fa-facebook"></i></a></span>
								<span> <a href="tel:+84987969940"><i class="fa fa-phone">+84987969940</i></a></span>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<div class="logo pull-left">
									<a href="{{URL::to('/')}}"><img class="style_logo"
											src="{{('frontend/images/logo.png')}}" alt="" /></a>
								</div>
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a></li>
								<li><a href="/contact">Liên hệ shop</a></li>
								@if(Session::has("Cart") != null)
								<li class="shopping-cart"><a href="#"><i id="total-quanty-show"
											class="fa fa-shopping-cart"> ({{Session::get("Cart")->totalQuanty}})</i><i
											class="fa fa-angle-down"></i></a>
									@else
								<li class="shopping-cart"><a href="#"><i id="total-quanty-show"
											class="fa fa-shopping-cart"> (undefined)</i><i
											class="fa fa-angle-down"></i></a>
									@endif
									<!-- <li class="shopping-cart"><a href="#" ><i class="fa fa-shopping-cart"> Giỏ hàng </i><i class="fa fa-angle-down"></i></a> -->
									<ul role="menu" class="sub-menu">
										<div id="change-item-cart">
											@if(Session::has("Cart") != null)
											<div id="change-item-cart">
												<div class="select-items">
													<table>
														<tbody>
															@foreach(Session::get('Cart')->products as $item)
															<tr>
																<td class="si-pic"><img
																		src="{{URL::to('uploads/product/'.$item['productInfo']->product_image)}}"
																		height="60px" width="60px" alt=""></td>
																<td class="si-text">
																	<div class="product-selected">
																		<p style="color:white;">
																			{{number_format($item['productInfo']->product_price)}}
																			Đ x {{$item['quanty']}}</p>
																		<h6 style="color:white;">
																			{{$item['productInfo']->product_name}}</h6>
																	</div>
																</td>
																<td class="si-close">
																	<i class="ti-close" style="color:white;"
																		data-id="{{$item['productInfo']->product_id}}">Xóa</i>
																</td>
															</tr>
															@endforeach
														</tbody>
													</table>
												</div>
												<div class="select-total">
													<p></p>
													<span style="color:white;">total: <a
															style="color:white;">{{number_format(Session::get('Cart')->totalPrice)}}
															Đ</a></span>
												</div>
											</div>
											<div class="select-button">
												<a href="{{URL::to('List-Cart')}}" class="primary-btn view-card"><span
														style="color:white;"> ***Đặt hàng và thanh toán***</span> </a>
											</div>
											@endif
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->

	<section id="slider">
		<!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img class="styling_banner" height="350px"
										src="{{('frontend/images/blog_aside_banner.png')}}" alt="" />

								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img class="styling_banner" height="350px"
										src="{{('frontend/images/blog_aside_banner1.png')}}" alt="" />

								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img class="styling_banner" height="350px"
										src="{{('frontend/images/blog_aside_banner2.png')}}" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian">
							<!--category-productsr-->
							@foreach($category as $key =>$cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a
											href="{{URL::to('/danh-muc/').$cate->category_id}}">{{$cate->category_name}}</a>
									</h4>
								</div>
							</div>
							@endforeach
						</div>
						<!--/category-products-->

						<h2>Thương hiệu</h2>
						<div class="panel-group category-products" id="accordian">
							<!--category-productsr-->
							@foreach($brand as $key =>$brand)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a
											href="{{URL::to('/thuong-hieu/').$brand->brand_id}}">{{$brand->brand_name}}</a>
									</h4>
								</div>
							</div>
							@endforeach
						</div>
						<!--/brands_products-->
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>

	<footer style="background-color:powderblue;" id="footer">
		<!--Footer-->

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">

							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">

							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About</h2>
							<ul class="nav nav-pills nav-stacked">

							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i
										class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<style>
			.center_mybanner {
				display: block;
				margin-left: auto;
				margin-right: auto;
				height: 300px;
			}
		</style>
		<p><img class="center_mybanner" src="{{('frontend/images/banner-end.png')}}" /></p>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">

					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank"
								href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer>
	<!--/Footer-->



	<script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>
	<!-- JavaScript -->
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
	<script>
		function AddCart(product_id) {
			$.ajax({
				url: 'Add-Cart' + product_id,
				type: 'GET',
			}).done(function (response) {
				RenderCart(response);
				alertify.success('Thêm sản phẩm thành công');
			});
		}
		$("#change-item-cart").on("click", ".si-close i", function () {
			console.log($(this).data("id"));
			$.ajax({
				url: 'Delete-Item-Cart' + $(this).data("id"),
				type: 'GET',
			}).done(function (response) {
				RenderCart(response);
				alertify.success('Xóa sản phẩm thành công');
			});
		});
		function RenderCart(response) {
			$("#change-item-cart").empty();
			$("#change-item-cart").html(response);
			if ($("#total-quanty-cart").val() != 0) { $("#total-quanty-show").text(" " + "(" + $("#total-quanty-cart").val() + ")"); }
			else { $("#total-quanty-show").text(" " + "(0)"); }
		}
	</script>
</body>

</html>