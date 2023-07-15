@extends ('template/app')

@section ('content')

<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="/pembeli">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="/checkout">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

<section class="checkout_area section_gap">
        <div class="container">
           
            <div class="billing_details">
                <div class="row">

                <div class="col-lg-2">
                        
                        
                    </div>
                    
                    <div class="col-lg-8">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list text">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <li><a href="#">Fresh Blackberry <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                                
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>$2160.00</span></a></li>
                               
                                <li><a href="#">Total <span>$2210.00</span></a></li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="/assetuser/img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal
                                    account.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I've read and accept the </label>
                                <a class="text-decoration-none" href="#">terms & conditions*</a>
                            </div>
                            <a class="primary-btn text-decoration-none" href="#">Proceed to Paypal</a>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection