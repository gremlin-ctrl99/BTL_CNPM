@extends('layout')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
        <style>
        * {
        box-sizing: border-box;
        }

        .zoom {
        padding: 50px;
        background-color: while;
        transition: transform .2s;
        width: 250px;
        height: 250px;
        margin: 0 auto;
        }

        .zoom:hover {
        -ms-transform: scale(2.1); /* IE 9 */
        -webkit-transform: scale(2.1); /* Safari 3-8 */
        transform: scale(2.1); 
        }
        </style>
            <img src="{{URL::to('uploads/product/'.$value->product_image)}}" class="zoom" alt="" />
        </div>
    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2>{{$value->product_name}}</h2>
            <!-- <p>Web ID: 1089772</p> -->
            <img src="images/product-details/rating.png" alt="" />
            <form action="{{URL::to('/save-cart')}}" method="POST">
            {{ csrf_field() }}
            <span>
                <span>{{number_format($value->product_price).' '.'VND'}}</span>
                <p><label>Số lượng:</label>
                <input name="qty"type="number" min="1" value="1"/>
                <input name="productid_hidden" type="hidden" value="{{$value->product_id}}"/>
                <button type="submit" class="btn btn-fefault cart">
                <a class="fa fa-shopping-cart"></a>Thêm vào giỏ hàng</button></p>
            </span>
            </form>
            <p><b>Tình trạng:</b>Còn hàng</p>
            <p><b>Danh mục: </b>{{$value->category_name}}</p>
            <p><b>Thương hiệu: </b>{{$value->brand_name}}</p>
            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#details" data-toggle="tab">    Cấu hình sản phẩm    </a></li>
            <li><a href="#companyprofile" data-toggle="tab">    Thiết kế sản phẩm    </a></li>
            <li><a href="#promotion" data-toggle="tab">    Chương trình khuyến mãi    </a></li>
            <li><a href="#promotion" data-toggle="tab">    Thông tin về bảo hành sản phẩm .   </a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="details" >
        <p>{!!$value->product_desc!!}</p>
        </div>
        
        <div class="tab-pane fade" id="companyprofile" >
        <p>{!!$value->product_content!!}</p>
        </div>

        
        <div class="tab-pane fade" id="promotion" >
            <div class="col-sm-12">
            {!!$value->product_promotion!!}
            </div>
        </div>
       
    </div>
</div><!--/category-tab-->
@endforeach
<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">Sản phẩm tương tự</h2>    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
            @foreach($relate as $key =>$tuongtu)
                <a href="{{URL::to('chi-tiet-san-pham'.$tuongtu->product_id)}}">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">        
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('uploads/product/'.$tuongtu->product_image)}}" alt="" />
                                    <h2>{{number_format($tuongtu->product_price).' '.'VND'}}</h2>
                                    <p>{{($tuongtu->product_name)}}</p>
                                    <a href="{{URL::to('add-to-cart'.$tuongtu->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>    
            @endforeach
            </div>
            
        </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>			
    </div>
</div><!--/recommended_items-->
@endsection