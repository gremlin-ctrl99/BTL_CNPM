
 <!-- Shopping Cart Section Begin -->
 <!-- Css Styles -->
 <link rel="stylesheet" href="{{asset('cart/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('cart/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('cart/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('cart/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('cart/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('cart/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('cart/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('cart/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('cart/css/style.css')}}" type="text/css">
@extends('layout')
@section('content')
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Delete</th>
									<th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="img/cart-page/product-1.jpg" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Pure Pineapple</h5>
                                    </td>
                                    <td class="p-price first-row">$60.00</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$60.00</td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
									<td class="close-td first-row""><i class="ti-save"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$240.00</span></li>
                                    <li class="cart-total">Total <span>$240.00</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    <!-- Shopping Cart Section End -->
    <!-- Js Plugins -->
    <script src="{{asset('cart/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('cart/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cart/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('cart/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('cart/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('cart/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('cart/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('cart/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('cart/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('cart/js/main.js')}}"></script>