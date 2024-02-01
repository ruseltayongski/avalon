<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function checkout()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $allCoupons = \Stripe\Coupon::all(['limit' => 99999999])->data;
        foreach ($allCoupons as $coupon) {
            if ($coupon->duration === 'once') {
                $coupon->delete();
            }
        }
        return view('checkout');
    }

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $discount = 0;
        if($request->has('promoCode')) {
            foreach($request->promoCode as $row) {
                try {
                    $discount += (float)\Stripe\Coupon::retrieve(str_replace(" ", "", $row))->amount_off;
                } catch (\Stripe\Exception\ApiErrorException $e) {}
            }
        }
        
        //for discount
        $line_items = [];
        foreach (json_decode($request->checkout, true) as $row) {
            $price = (float)str_replace(',', '', strval($row['price'])) * 100; // Convert to cents
            $line_items[] = [
                'price_data' => [
                    'currency' => 'USD',
                    'product_data' => [
                        'name' => ucfirst($row['title']),
                    ],
                    'unit_amount' => $price,
                ],
                'quantity' => 1,
            ];
        }

        $session = [
            'line_items' => $line_items,
            'mode' => 'payment',
            'success_url' => route('homes'),
            'cancel_url' => route('checkout')
        ];

        $customer = new Customer();
        if($discount > 0) {
            $coupon = \Stripe\Coupon::create([
                'amount_off' => $discount,
                'currency' => 'usd',
                'duration' => 'once',
            ]);

            $session['discounts'] = [['coupon' => $coupon->id]];
            $customer->discount = $discount;
        }
      
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
        $customer->save();

        $session = \Stripe\Checkout\Session::create($session);

        return redirect()->away($session->url)->with('stripe_save', true);
    }

    public function checkPromo($promoId) {
        try {
            \Stripe\Stripe::setApiKey(config('stripe.sk'));
            $coupon = \Stripe\Coupon::retrieve($promoId);
            return ["result"=>true];
        } catch (\Stripe\Exception\ApiErrorException $e) {
            return ["result"=>false];
        }
    }
    

}
