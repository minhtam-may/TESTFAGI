@extends('front.layout.master')

@section('title', 'Check Out Result')
    
@section('body')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @if(session('notification'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('notification') }}
                    </div>
                @endif
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            

                            {{-- <form enctype="multipart/form-data" action="/checkout" method="post" >
                                @csrf
                                @method('PUT') --}}
                                {{-- <div id="customer_details" class="col2-set">
                                    @if( Cart::count() > 0)
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Billing Details</h3> --}}
                                           

                                            {{-- <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_first_name" name="first_name" class="input-text ">
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_last_name" name="last_name" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_company_field" class="form-row form-row-wide">
                                                <label class="" for="billing_company">Company Name</label>
                                                <input type="text" value="" placeholder="" id="billing_company" name="company_name" class="input-text ">
                                            </p>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Street address" id="billing_address_1" name="street_address" class="input-text ">
                                            </p> --}}

                                            

                                            {{-- <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Town / City" id="billing_city" name="town_city" class="input-text ">
                                            </p>

                                            <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                <label class="" for="billing_state">Country</label>
                                                <input type="text" id="billing_state" name="country" placeholder="Country" value="" class="input-text ">
                                            </p>
                                            <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                <label class="" for="billing_postcode">Postcode <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Postcode / Zip" id="billing_postcode" name="postcode_zip" class="input-text ">
                                            </p>

                                            <div class="clear"></div>

                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_email" name="email" class="input-text ">
                                            </p>

                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_phone" name="phone" class="input-text ">
                                            </p>
                                            <div class="clear"></div>
                                            



                                           

                                        </div>
                                    </div>
                                    


                                    <div class="col-2">
                                        

                                <h3 id="order_review_heading">Your order</h3>

                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($carts as $cart)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        {{ $cart->name }} <strong class="product-quantity">× {{$cart->qty}}</strong> </td>
                                                    <td class="product-total">
                                                        <span class="amount">${{ number_format($cart->price * $cart->qty, 2) }}</span> </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">${{ $subtotal }}</span>
                                                </td>
                                            </tr>
                                            
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">${{ $subtotal }}</span></strong> </td>
                                            </tr>

                                        </tfoot>
                                    </table> --}}


                                    {{-- <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_bacs">
                                                <input type="radio" data-order_button_text="" checked="checked" value="pay_later" name="payment_type" class="input-radio" id="payment_method_bacs" checked>
                                                <label for="payment_method_bacs">Pay Later </label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>

                                                </div>
                                            </li>
                                            <li class="payment_method_cheque">
                                                <input type="radio" data-order_button_text="" value="online_payment" name="payment_type" class="input-radio" id="payment_method_cheque">
                                                <label for="payment_method_cheque">Online Payment </label>
                                                <div style="display:none;" class="payment_box payment_method_cheque">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </li> --}}
                                            {{-- <li class="payment_method_paypal">
                                                <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_type" class="input-radio" id="payment_method_paypal">
                                                <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What is PayPal?</a>
                                                </label>
                                                <div style="display:none;" class="payment_box payment_method_paypal">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </li> --}}
                                        </ul>
                                </div>
                            <div class="col-lg-12">
                                <h4>{{ $notification }}</h4>
                            </div>

                            <a href="./" class=" btn btn-primary mt-5">
                                Continue Shopping
                            </a>

                            {{-- @endif --}}
                        </div> 
                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection

    