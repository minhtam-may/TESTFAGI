@extends('front.layout.master')

@section('title', 'Home')

@section('body')
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="front/img/h4-slide.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">6 <strong>Plus</strong></span>
							</h2>
							<h4 class="caption subtitle">Dual SIM</h4>
							<a class="caption button-radius" href="/shop"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="front/img/h4-slide2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								by one, get one <span class="primary">50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle">school supplies & backpacks.*</h4>
							<a class="caption button-radius" href="/shop"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="front/img/h4-slide3.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="/shop"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="front/img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">& Phone</h4>
							<a class="caption button-radius" href="/shop"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            @foreach($featuredProducts['women'] as $product)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="front/img/{{ $product->productImages[0]->path }}" alt="">
                                    <div class="product-hover">
                                        <a href="cart/add/{{ $product->id }}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="shop/product/{{ $product->id }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="shop/product/{{ $product->id }}">{{ $product->name }}</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>${{ $product->discount }}</ins> <del>${{ $product->price }}</del>
                                </div> 
                            </div>
                            @endforeach                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="front/img/brand1.png" alt="">
                            <img src="front/img/brand2.png" alt="">
                            <img src="front/img/brand3.png" alt="">
                            <img src="front/img/brand4.png" alt="">
                            <img src="front/img/brand5.png" alt="">
                            <img src="front/img/brand6.png" alt="">
                            <img src="front/img/brand1.png" alt="">
                            <img src="front/img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="/shop" class="wid-view-more">View All</a>
                        @foreach($featuredProducts['women'] as $product)
                            <div class="single-wid-product">
                                <a href="shop/product/{{ $product->id }}"><img src="front/img/{{ $product->productImages[0]->path }}" alt="" class="product-thumb"></a>
                                <h2><a href="shop/product/{{ $product->id }}">{{ $product->name }}</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>${{ $product->discount }}</ins> <del>${{ $product->price }}</del>
                                </div>                            
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="/shop" class="wid-view-more">View All</a>
                        @foreach($featuredProducts['women'] as $product)

                            <div class="single-wid-product">
                                <a href="shop/product/{{ $product->id }}"><img src="front/img/{{ $product->productImages[0]->path }}" alt="" class="product-thumb"></a>
                                <h2><a href="shop/product/{{ $product->id }}">{{ $product->name }}</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>${{ $product->discount }}</ins> <del>${{ $product->price }}</del>
                                </div>                            
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="/shop" class="wid-view-more">View All</a>
                        @foreach($featuredProducts['women'] as $product)

                        <div class="single-wid-product">
                            <a href="shop/product/{{ $product->id }}"><img src="front/img/{{ $product->productImages[0]->path }}" alt="" class="product-thumb"></a>
                            <h2><a href="shop/product/{{ $product->id }}">{{ $product->name }}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>${{ $product->discount }}</ins> <del>${{ $product->price }}</del>
                            </div>                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->

@endsection
    
   