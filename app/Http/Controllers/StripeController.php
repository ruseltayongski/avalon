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
            $customer->processed_by = 1;
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


        // \Stripe\Stripe::setApiKey(config('stripe.sk'));

        // $session = \Stripe\Checkout\Session::create([
        //     'line_items'  => [
        //         [
        //             'price_data' => [
        //                 'currency'     => 'USD',
        //                 'product_data' => [
        //                     'name' => 'Total Amount',
        //                 ],
        //                 'unit_amount'  => str_replace(',', '', strval($request->totalAmount)) * 100,
        //             ],
        //             'quantity'   => 1,
        //         ],
        //     ],
        //     'mode'        => 'payment',
        //     'success_url' => route('homes'),
        //     'cancel_url'  => route('checkout'),
        // ]);
        

        $line_items = [];
        foreach(json_decode($request->checkout, true) as $row) {
            $line_items[] = [
                'price_data' => [
                    'currency'     => 'USD',
                    'product_data' => [
                        'name' => ucfirst($row['title']),
                    ],
                    'unit_amount'  => (float)str_replace(',', '', strval($row['price'])) * 100,
                ],
                'quantity'   => 1,
            ];
        }

        \Stripe\Stripe::setApiKey(config('stripe.sk'));


        $session = \Stripe\Checkout\Session::create(    
            [
                'line_items'  => $line_items,
                'mode'        => 'payment',
                'success_url' => route('homes'),
                'cancel_url'  => route('checkout'),
            ]
        );

        return redirect()->away($session->url)->with('stripe_save', true);
    }
}
