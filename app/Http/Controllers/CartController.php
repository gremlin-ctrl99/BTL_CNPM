<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
    public function AddCart(Request $request,$id){
        $product = DB::table('tbl_product')->where('product_id',$id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $request ->Session()->put('Cart',$newCart);
        }
        return view('pages.carts.cart');
    }

    public function DeleteItemCart(Request $request,$id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(Count( $newCart->products ) > 0){
            $request->Session()->put('Cart',$newCart);
        }else{
            $request->Session()->forget('Cart');
        }
        return view('pages.carts.cart');
    }
    public function ViewListCart(){
        return view('pages.carts.show_cart');
    }
    public function DeleteItemListCart(Request $request,$id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(Count( $newCart->products ) > 0){
            $request->Session()->put('Cart',$newCart);
        }else{
            $request->Session()->forget('Cart');
        }
        return view('pages.carts.list_cart');
    }
    
    public function SaveItemListCart(Request $request, $id, $quanty){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $quanty);

        $request->Session()->put('Cart',$newCart);

        return view('pages.carts.list_cart');
    }
    public function CreateBill(Request $request){
        return view('pages.bill.create_bill');
    }
    public function SaveBill(Request $request){
        $data = array();
        $data['customer_name']= $request->customer_name;
        $data['customer_add']= $request->customer_add;
        $data['customer_phone']= $request->customer_phone;
        $data['bill']= $request->bill;
        $data['quanty']= $request->quanty;
        $data['status']= $request->status;
        DB::table('tbl_order')->insert($data);
        //Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('trang-chu');
    }
}
