@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Sản phẩm mới</h2>
    @foreach($all_product as $key => $product)
    <a href="{{URL::to('chi-tiet-san-pham'.$product->product_id)}}">
    <div class="col-sm-4">
        <div class="product-image-wrapper">        
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{URL::to('uploads/product/'.$product->product_image)}}" height="250px" width="300px" alt="" />
                    <h2>{{number_format($product->product_price).' '.'VND'}}</h2>
                    <p>{{($product->product_name)}}</p>
                    <a onclick="AddCart({{$product->product_id}})" href="javascript:" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
    </a>
    @endforeach
</div><!--features_items-->
@endsection