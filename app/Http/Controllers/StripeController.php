<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session(Request $request)
    {
        if(!Customer::where("email_one",$request->email1)->exists()) {
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
        }
        

        $line_items = [];
        foreach(json_decode($request->checkout, true) as $row) {
            $line_items[] = [
                'price_data' => [
                    'currency'     => 'USD',
                    'product_data' => [
                        'name' => ucfirst($row['category']),
                    ],
                    'unit_amount'  => $row['price'] * 100,
                ],
                'quantity'   => 1,
            ];
        }

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        // $session = \Stripe\Checkout\Session::create([
        //     'line_items'  => $line_items,
        //     'mode'        => 'payment',
        //     'success_url' => route('home'),
        //     'cancel_url'  => route('checkout'),
        // ]);

        // return redirect()->away($session->url);


        try {
            $session = \Stripe\Checkout\Session::create([
                'line_items'  => $line_items,
                'mode'        => 'payment',
                'success_url' => route('home'),
                'cancel_url'  => route('checkout'),
            ]);
        
            return redirect()->away($session->url)->with('contract_save', true);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle Stripe API errors here
            return redirect()->route('checkout')->withErrors(['stripe_error' => $e->getMessage()]);
        }
    }
}
