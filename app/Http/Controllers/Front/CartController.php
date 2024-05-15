<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\ProductImage;


class CartController extends Controller
{
    
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
        

    }

    public function add($id)
    {
        $product = $this->productService->find($id);
        $path_image = ProductImage::where('product_id', $id)->select('path')->first();
        // $users = DB::select('select path from product_images where product_id = ?', ['id']);
        // dd($path_image);
        // dd($product->productImages);
        // $product->productImages
        Cart::add([
            'id'=>$product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->discount ?? $product->price,
            'weight' => $product->weight ?? 0,
            'options' => [
                'images'=> $product->productImages,
            ],
        ]);

        return back()->with('success', 'Product added to cart!');
    }

    public function index() 
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subTotal = Cart::subtotal();

        return view('front.shop.cart', compact('carts', 'total', 'subTotal'));
 
    }

   

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }

    public function update($rowId)
    {
        Cart::update($rowId);
        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }

    // public function updateItem(Request $request, $rowId)
    // {
    //     
    //     $request->validate([
    //         'qty' => 'required|integer|min:1',
    //         'price' => 'required|numeric|min:0',
    //     ]);

        
    //     Cart::update($rowId, [
    //         'qty' => $request->input('qty'),
    //         'price' => $request->input('price')
    //     ]);

    //     return redirect()->route('cart.index')->with('success', 'Item updated successfully!');
    // }

    // Cập nhật toàn bộ giỏ hàng
    public function updateAll(Request $request)
    {
        // Validate the request data
        $request->validate([
            'items.*.qty' => 'required|integer|min:1',
        ]);

        // Lặp qua tất cả các sản phẩm trong giỏ hàng để cập nhật
        foreach ($request->items as $rowId => $item) {
            Cart::update($rowId, $item['qty']);
        }

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');

        // $product = $this->productService->all();
        // $relatedProducts = $this->productService->getRelatedProducts($product);
        // return view('front.shop.cart', compact('product', 'relatedProducts'));               

    }

}
