<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HomeController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        if(session('customer_id')) {
            $customer = Customer::find(session('customer_id'));
            $newCustomerData = $customer->replicate();
            $newCustomerData->status = 'paid';
            $newCustomerData->save();
            session(['customer_id' => false]);
        }
        return view('home');
    }
}
