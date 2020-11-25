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
        <span style="color:white;">total:</span>
        <h5 style="color:white;">{{number_format(Session::get('Cart')->totalPrice)}} Đ</h5>
    </div>
</div>
@endif