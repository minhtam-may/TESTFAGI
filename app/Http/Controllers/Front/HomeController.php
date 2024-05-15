<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductServiceInterface;

class HomeController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;

    }
    public function index()
    {
        $featuredProducts = $this->productService->getFeaturedProducts();
        return view('front.index', compact('featuredProducts'));
    }
}
