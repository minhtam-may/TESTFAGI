@extends('front.layout.master')

@section('title', 'Check Out')
    
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
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form enctype="multipart/form-data" action="/checkout" method="post" >
                                @csrf
                                @method('PUT')
                                <div id="customer_details" class="col2-set">
                                    @if( Cart::count() > 0)
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Billing Details</h3>
                                           
                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_first_name" name="first_name" class="input-text" value="{{ Auth::user()->name ?? '' }}">
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_last_name" name="last_name" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_company_field" class="form-row form-row-wide">
                                                <label class="" for="billing_company">Company Name</label>
                                                <input type="text" value="" placeholder="" id="billing_company" name="company_name" class="input-text" value="{{ Auth::user()->company_name ?? '' }}">
                                            </p>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Street address" id="billing_address_1" name="street_address" class="input-text " value="{{ Auth::user()->street_address ?? '' }}">
                                            </p>

                                            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Town / City" id="billing_city" name="town_city" class="input-text " value="{{ Auth::user()->town_city ?? '' }}">
                                            </p>

                                            <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                <label class="" for="billing_state">Country</label>
                                                <input type="text" id="billing_state" name="country" placeholder="Country" value="" class="input-text " value="{{ Auth::user()->country ?? '' }}">
                                            </p>
                                            <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                <label class="" for="billing_postcode">Postcode <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Postcode / Zip" id="billing_postcode" name="postcode_zip" class="input-text " value="{{ Auth::user()->postcode_zip ?? '' }}">
                                            </p>

                                            <div class="clear"></div>

                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_email" name="email" class="input-text " value="{{ Auth::user()->email ?? '' }}">
                                            </p>

                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_phone" name="phone" class="input-text " value="{{ Auth::user()->phone ?? '' }}">
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
                                                    {{ $cart->name }} <strong class="product-quantity">× {{$cart->qty}}</strong> 
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">${{ number_format($cart->price * $cart->qty, 2) }}</span> 
                                                </td>
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
                                    </table>


                                    <div id="payment">
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
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                            <div class="form-row place-order">
                            </div>{{-- <input type="submit" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt"> --}}
                                <button type="submit" id="place_order" name="" class="button alt">Submit</button>
                            </div>
                            @else
                            <div class="col-lg-12">
                                <h4>Your cart is empty</h4>
                            </div>

                            @endif
                        </div> 
                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection

    