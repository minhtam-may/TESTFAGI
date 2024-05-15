<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Gloudemans\Shoppingcart\Facades\Cart;



class ShopController extends Controller
{
    private $productService;
    private $productCommentService;

    public function __construct(ProductServiceInterface $productService, ProductCommentServiceInterface $productCommentService)
    {

        $this->productService = $productService;
        $this->productCommentService = $productCommentService;

    }
    public function show( $id)
    {
        $product = $this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);

        // Cart::add([
        //     'id'=>$product->id,
        //     'name' => $product->name,
        //     'qty' => $request->input('qty'),
        //     'price' => $product->discount ?? $product->price,
        //     'weight' => $product->weight ?? 0,
        //     'options' => [
        //         'images'=> $product->productImages,
        //     ],
        // ]);
        return view('front.shop.show', compact('product', 'relatedProducts'));               
    }

    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());

        return redirect()->back;
    }

    public function index(Request $request)
    {
        $products = $this->productService->getProductOnIndex($request);

        return view('front.shop.index', compact('products'));
    }

}
