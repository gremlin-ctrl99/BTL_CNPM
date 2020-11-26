<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="cart/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="cart/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="cart/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="cart/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/style.css" type="text/css">
    <style>
    .cart-pic img{
        height :150px;
    }
    
    </style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="list-item-cart">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(Session::has("Cart") != null)
                                @foreach(Session::get('Cart')->products as $item)
                                <tr>
                                    <td class="cart-pic first-row"><img src="{{URL::to('uploads/product/'.$item['productInfo']->product_image)}}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{$item['productInfo']->product_name}}</h5>
                                    </td>
                                    <td class="p-price first-row">{{number_format($item['productInfo']->product_price)}} Đ</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div>
                                                <a>{{$item['quanty']}}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">{{number_format($item['price'])}} Đ</td>                                   
                                </tr>
                                @endforeach
                            @endif      
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            @if(Session::has("Cart") != null)
                            <form role="form" action="{{URL::to('/Save-Bill')}}" method="post">
                                <ul>
                                <li><input type="text" name="customer_name" placeholder="Nhập tên khách hàng"></li>
                                <li><input type="text" name="customer_add" placeholder="Nhập địa chỉ khách hàng"></li>
                                <li><input type="number" name="customer_phone" placeholder="Nhập số điện thoại"></li>
                                <li hidden><input name="status">0</li>
                                <li class="subtotal">Total Quanty<span name="quanty">{{number_format(Session::get('Cart')->totalQuanty)}}</span>
                                </li>
                                <li class="cart-total">Total Price<span name="bill">{{number_format(Session::get('Cart')->totalPrice)}}</span><a> Đ</a>
                                </li>                                   
                                </ul>
                                <button type="submit" name="add_brand_product" class="proceed-btn">Đặt hàng ngay</button>
                            </form>
                            @endif
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="cart/js/jquery-3.3.1.min.js"></script>
    <script src="cart/js/bootstrap.min.js"></script>
    <script src="cart/js/jquery-ui.min.js"></script>
    <script src="cart/js/jquery.countdown.min.js"></script>
    <script src="cart/js/jquery.nice-select.min.js"></script>
    <script src="cart/js/jquery.zoom.min.js"></script>
    <script src="cart/js/jquery.dd.min.js"></script>
    <script src="cart/js/jquery.slicknav.js"></script>
    <script src="cart/js/owl.carousel.min.js"></script>
    <script src="cart/js/main.js"></script>
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
        function DeleteItemListCart(product_id){
            $.ajax({
				url: 'Delete-Item-List-Cart' + product_id,
				type: 'GET',
			}).done(function (response) {
				RenderListCart(response);
				alertify.success('Đã xóa sản phẩm');
			});
        }

        function SaveItemListCart(product_id){
            console.log($("quanty-item-"+product_id).val());
            // $.ajax({
			// 	url: 'Save-Item-List-Cart' + product_id +'/'+$("quanty-item-"+product_id).val(),
			// 	type: 'GET',
			// }).done(function (response) {
			// 	RenderListCart(response);
			// 	alertify.success('Cập nhật giỏ hàng thành công');
			// });
        }

         function RenderListCart(response){
            $("#list-item-cart").empty();
            $("#list-item-cart").html(response);
            var proQty = $('.pro-qty');
            proQty.prepend('<span class="dec qtybtn">-</span>');
            proQty.append('<span class="inc qtybtn">+</span>');
            proQty.on('click', '.qtybtn', function () {
                var $button = $(this);
                var oldValue = $button.parent().find('input').val();
                if ($button.hasClass('inc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find('input').val(newVal);
            });
        }
    </script>
</body>

</html>