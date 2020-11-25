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
                    <!-- <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    </a>
    @endforeach
</div><!--features_items-->
<script>
    function AddCart(product_id){
        $.ajax({
            url: 'Add-Cart'+product_id,
            type: 'GET',
        }).done(function(response){
            console.log(response)
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response)
            alertify.success('Thêm sản phẩm thành công');
        });        
        $("#change-item-cart").on("click", ".si-close i" , function(){
            console.log($(this).data("id"));
            $.ajax({
            url: 'Delete-Item-Cart'+$(this).data("id"),
            type: 'GET',
        }).done(function(response){
            console.log(response)
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response)
            alertify.success('Xóa sản phẩm thành công');
        });
    });
    }
    
</script>
@endsection