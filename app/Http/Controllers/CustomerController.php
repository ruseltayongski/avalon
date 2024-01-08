<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function addCustomer(Request $request) {
        $customer = new Customer();
        $customer->created_by = 1;
        $customer->fullname = $request->fullName;
        $customer->email_one = $request->email1;
        $customer->email_two = $request->email2;
        $customer->billing_address = $request->billingAddress;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->post_code = $request->postCode;
        $customer->payment_type = $request->typeOfPayment;
        $customer->service_id = $request->serviceId;
        $customer->status = "pending";
        $customer->save();
        return Customer::leftJoin("services","services.id","=","customer.service_id")->where("customer.service_id",$customer->service_id)->first();
    }
}
