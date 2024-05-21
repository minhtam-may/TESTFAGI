@extends('front.layout.master')

@section('title', 'Product Detail')
    
@section('body')

   <style>
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            display: none;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
   </style>
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
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="shop">
                            <input name="search" value="{{ request('search') }}" type="text" placeholder="Search products...">
                            {{-- <input type="submit" value="Search"> --}}
                            <button type="submit">Search</button>
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        {{-- @foreach( $relatedProducts as $product) --}}

                        <div class="thubmnail-recent">
                            @foreach($product->productImages as $productImage)

                            <img src="front/img/{{ $productImage->path }}" class="recent-thumb" alt="">
                            @endforeach

                            <h2><a href="/shop/product/{{ $product->id }}">{{ $product->name }}</a></h2>
                            <div class="product-sidebar-price">
                                <ins>${{ $product->discount }}</ins> <del>${{ $product->price }}</del>
                            </div>                             
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            {{-- @foreach( $relatedProducts as $product) --}}

                            <li><a href="/shop/product/1">Samsung A35</a></li>
                            <li><a href="/shop/product/2">Nokia 3</a></li>
                            <li><a href="/shop/product/3">LG 3</a></li>
                            <li><a href="/shop/product/4">Sony s10</a></li>


                            
                            
                            {{-- @endforeach --}}
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="./">Home</a>
                            <a href="/shop">Shop</a>
                            <a href="/shop/product/{{ $product->id }}">Product</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="front/img/{{ $product->productImages[0]->path}}" alt="">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        {{-- <img src="front/img/product-thumb-1.jpg" alt="">
                                        <img src="front/img/product-thumb-2.jpg" alt="">
                                        <img src="front/img/product-thumb-3.jpg" alt=""> --}}
                                        @foreach($product->productImages as $productImage)
                                          <div class="pt active" data-imgbigurl="front/img/products/{{ $productImage->path}}">
                                            <img src="front/img/{{ $productImage->path }}" alt="">
                                          </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{ $product->name }}</h2>
                                    <div class="product-inner-price">
                                        @if($product->discount != null)
                                          <ins>${{ $product->discount }}</ins> <del>${{ $product->price }}</del>
                                        @else
                                          <ins>${{ $product->price }}</ins>
                                        @endif
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="qty" min="1" step="1">
                                            {{-- <input type="number" size="4" class="input-text qty text" title="Qty" value="{{ $cart->qty }}" min="0" step="1"> --}}
                                            
                                        </div>
                                        {{-- <button class="add_to_cart_button" type="submit">Add to cart</button> --}}
                                         <a class="add_to_cart_button" data-quantity="" data-product_sku="" data-product_id="" rel="nofollow" href="cart/add/{{ $product->id }}">Add to cart</a>

                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="">{{ $product->productCategory->name}}</a>. Tags: <a href="">{{ $product->tag }}</a> </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p> {{ $product->description }} </p>

                                                {{-- <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p> --}}
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="pd-rating">
                                                    <td class="p-category"> Customer Review</td>
                                                    <td>
                                                        @for($i = 1; $i <= 5; $i++)
                                                            @if($i <= $product->avgRating)
                                                                <i class="fa fa-star"></i>
                                                            @else
                                                            
                                                                <i class="fa fa-star"></i>
                                                            @endif
                                                        @endfor
                                                        <span> ({{ count($product->productComments) }})</span>


                                                    </td>
                                                </div>
                                                <form action="" method="post" class="comment-form">
                                                    @csrf

                                                    <input type="hidden" name="product_id" value="{{ $product->id }}" id="">
                                                    <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="name">Name</label><br>
                                                            <input name="name" type="text" placeholder="Name">
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label for="name">Name</label><br>
                                                            <input name="email" type="text" placeholder="Email">
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <label for="name">Your Comment</label><br>
                                                            
                                                            <textarea name="messages" id="" cols="30" rows="10" placeholder="Messages"></textarea>
                                                            
                                                            <div class="personal-rating">
                                                                <h5><b>Your Rating</b></h5>
                                                                <div class="rate">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label for="star5" title="text">5 stars</label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label for="star4" title="text">4 stars</label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label for="star3" title="text">3 stars</label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label for="star2" title="text">2 stars</label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label for="star1" title="text">1 star</label>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="site-btn">Send</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                @foreach( $relatedProducts as $product)
                                
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="front/img/{{ $product->productImages[0]->path }}" alt="">
                                        <div class="product-hover">
                                            <a href="cart/add/{{ $product->id }}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="shop/product/{{ $product->id }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="shop/product/{{ $product->id }}">{{ $product->name}}</a></h2>

                                    <div class="product-carousel-price">
                                        
                                        @if($product->discount != null)
                                          <ins>${{ $product->discount }}</ins> <del>${{ $product->price }}</del>
                                        @else
                                          <ins>${{ $product->price }}</ins>
                                        @endif
                                    </div> 
                                </div>
                                @endforeach                        
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection


   