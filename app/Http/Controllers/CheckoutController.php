<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderPlaced;
use App\Models\Address;
use App\Models\Notification;
use Sohoj;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {


        $request->validate([
            'prevoius_address' => ['required'],
            'first_name' => ['required', 'max:40'],
            'last_name' => ['required', 'max:40'],
            'email' => ['required', 'max:40', 'email'],
            'terms' => ['required'],
            'payment_method' => 'required'
        ], [
            'prevoius_address.required' => 'You need to set a address first  by clicking "Add Address" bellow'
        ]);

        $customer = auth()->user()->createOrGetStripeCustomer();

        auth()->user()->addPaymentMethod($request->payment_method[0]);
        $address = Address::find($request->prevoius_address);

        $shipping = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address_1' => $address->address_1,
            'address_2' => $address->address_2,
            'city' => $address->city,
            'post_code' => $address->post_code,
            'country' => $address->country,
            'state' => $address->state,
            'phone' => $address->phone,
            'shipping_method' => null,
            'shipping_url' => null,
        ];
        
        if ($this->productsAreNoLongerAvailable()) {
            
            return back()->withErrors('Sorry! One of the items in your cart is no longer Available!');
        }
        $i = 0;
        $parent = null;
        foreach (Cart::getContent() as $item) {

            $variations =  json_encode($item->model->variations);
            $flatCharge = Sohoj::flatCommision($item->price);
            $total = ($flatCharge + Sohoj::tax()) - Sohoj::discount();
            $data = [

                'user_id' => auth()->user() ? auth()->user()->id : null,
                'shop_id' => $item->model->shop_id,
                'product_id' => $item->model->id,
                'shipping' => json_encode($shipping),
                'aptment' => $request->aptment,

                'subtotal' => Cart::getSubTotal(),
                'discount' => Sohoj::round_num(Sohoj::discount()),
                'discount_code' => Sohoj::discount_code(),
                'tax' => Sohoj::round_num(Sohoj::tax()),
                // 'shipping_cost' => Sohoj::round_num(Sohoj::shipping()),
                // 'shipping_method' => Sohoj::shipping_method(),
                'total' => $total,
                'quantity' => $item->quantity,
                'vendor_total' => Sohoj::vendorprice($total),

            ];

            $orderProduct = [
                'quantity' => $item->quantity,
                'product_id' => $item->model->id,
                'price' => $item->price,
                'total_price' => $item->price * $item->quantity,
                'variation' => $item->model->variations,
                'shop_id' => $item->model->shop_id,
            ];
            if ($parent) {

                $data['parent_id'] = $parent->id;
                $order = Order::create($data);
                $orderProduct['order_id'] = $order->id;
                OrderProduct::create($orderProduct);
                // Mail::to($request->email)->send(new OrderPlaced($order));
                $this->notification(auth()->user() ? auth()->user()->id : null,$data['shop_id']);
            } else {
               
                $parent = Order::create($data);
                $orderProduct['order_id'] = $parent->id;
                OrderProduct::create($orderProduct);
                $this->notification(auth()->user() ? auth()->user()->id : null,$parent->shop->id);
                // Mail::to($request->email)->send(new OrderPlaced($parent));
            }
        }
        auth()->user()->charge(($parent->total * 100), $request->payment_method[0]);

        $this->decreaseQuantities();

        Cart::clear();
        session()->forget('discount');
        session()->forget('discount_code');
        return redirect('/thankyou')->with('thank', 'Order Created successfully!');
    }

    protected function decreaseQuantities()
    {
        foreach (Cart::getContent() as $item) {
            $product = Product::find($item->model->id);
            $product->increment('total_sale');
            $product->update(['quantity' => $product->quantity - $item->quantity]);
        }
    }
    protected function notification($user,$shop)
    {
        Notification::create([
            'url'=>env('APP_URL').'/vendor/dashboard/orders/index',
            'title'=>'Order Created',
            'shop_id'=>$shop,
        ]);
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (Cart::getContent() as $item) {
            $product = Product::find($item->model->id);
            if ($product->quantity < $item->quantity) {
                return true;
            }
        }
        return false;
    }
    public function userAddress(Request $request)
    {

        Address::create([
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'post_code' => $request->post_code,
            'user_id' => auth()->id(),
        ]);
        return redirect()->back()->with('success_msg', 'Address create successfull ');
    }
}
