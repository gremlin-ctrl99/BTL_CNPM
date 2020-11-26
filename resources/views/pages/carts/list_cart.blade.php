<div class="cart-table">
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th class="p-name">Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Save</th>
                <th>Delete</th>
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
                        <div class="pro-qty">
                            <input type="text" value="{{$item['quanty']}}">
                        </div>
                    </div>
                </td>
                <td class="total-price first-row">{{number_format($item['price'])}} Đ</td>
                <td class="close-td first-row""><i class=" ti-save"></i></td>
                <td class="close-td first-row"><i class="ti-close" onclick="DeleteItemListCart({{$item['productInfo']->product_id}});"></i></td>                                    
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
            <ul>
            <li class="subtotal">Total Quanty<span>{{number_format(Session::get('Cart')->totalQuanty)}} Đ</span>
            </li>
            <li class="cart-total">Total Price<span>{{number_format(Session::get('Cart')->totalPrice)}} Đ</span>
            </li>                                   
            </ul>
            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
        @endif
        </div> 
    </div>
</div>