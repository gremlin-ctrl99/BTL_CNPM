@if(Session::has("Cart") != null)
<div id="change-item-cart">
    <div class="select-items">
        <table>
            <tbody>
                @foreach(Session::get('Cart')->products as $item)
                <tr>
                    <td class="si-pic"><img src="{{URL::to('uploads/product/'.$item['productInfo']->product_image)}}" height="60px" width="60px" alt=""></td>
                    <td class="si-text">
                        <div class="product-selected">
                            <p style="color:white;">{{number_format($item['productInfo']->product_price)}} Đ x {{$item['quanty']}}</p>
                            <h6 style="color:white;" >{{$item['productInfo']->product_name}}</h6>
                        </div>
                    </td>
                    <td class="si-close">
                        <i class="ti-close" style="color:white;" data-id ="{{$item['productInfo']->product_id}}">Xóa</i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="select-total">
        <p></p>
        <p></p>
			<span style="color:white;">total: <a style="color:white;">{{number_format(Session::get('Cart')->totalPrice)}} Đ</a></span>
        <input hidden id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQuanty}}" >
    </div>
</div>
<div class="select-button">
    <a href="{{URL::to('List-Cart')}}" class="primary-btn view-card"><span style="color:white;"> ***Đặt hàng và thanh toán***</span> </a>
</div>
@endif