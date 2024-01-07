<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;

class CartController extends Controller
{
    public function index() {
        $carts = Carts::leftJoin("services","services.id","cart.service_id")->get();
        return $carts;
    }

    public function addCart(Request $request) {
        $cart = new Carts();
        $cart->created_by = 1;
        $cart->service_id = $request->serviceId;
        $cart->status = "pending";
        $cart->save();
        return Carts::leftJoin("services","services.id","=","cart.service_id")->where("cart.service_id",$cart->service_id)->first();
    }
}
