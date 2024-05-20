<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use DB;
use App\Models\Order;




class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    public function __construct(OrderServiceInterface $orderService, OrderDetailServiceInterface $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;

    }
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }

   

    public function addOrder(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        //add cart
        $order = $this->orderService->create($data);
        //add cart detail
        $carts = Cart::content();
        // dd($carts);
        foreach ($carts as $cart) 
        {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->qty * $cart->price,

            ];
            $this->orderDetailService->create($data);
        }

        //Delete cart
        Cart::destroy();

        //Return message
        return redirect('checkout/result')->with('notification', 'Order placed successfully');
    }

    public function result()
    {
        $notification = 'demo..';
        return view('front.checkout.result', compact('notification'));
    }
}

