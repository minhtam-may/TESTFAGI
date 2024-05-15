@extends('front.layout.master')

@section('title', 'Shop')
    
@section('body')
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-3 col-sm-6">
                    {{-- @foreach($products as $product) --}}
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="front/img/{{ $product->productImages[0]->path}}" alt="">
                        </div>
                        <h2><a href="shop/product/{{ $product->id }}">{{ $product->name }}</a></h2>
                        <div class="product-carousel-price">
                            <ins>${{ $product->discount }}</ins> <del>${{ $product->price }}</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="" data-product_sku="" data-product_id="" rel="nofollow" href="cart/add/{{ $product->id }}">Add to cart</a>
                        </div>                       
                    </div>
                    {{-- @endforeach --}}
                    
                </div>
                @endforeach

            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        {{ $products->links() }}
                        {{-- <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            @foreach($products as $product)
                            <li><a href="{{ $products->links() }}">1</a></li>
                            <li><a href="{{ $products->links() }}">2</a></li>
                            <li><a href="{{ $products->links() }}">3</a></li>
                            <li><a href="{{ $products->links() }}">4</a></li>
                            <li><a href="#">5</a></li>
                            @endforeach
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                         --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
   