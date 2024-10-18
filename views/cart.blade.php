@extends('layout')

@section('title', $title)

@section('content')


<!-- SPECIFIC CSS -->
<link href="{{ BASE_URL }}css/cart.css" rel="stylesheet">

<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Cart page</h1>
        </div>
        <!-- /page_header -->
        <table class="table table-striped cart-list">
            <thead>
                <tr>
                    <th>
                        Product
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Subtotal
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody id="root">


            </tbody>
        </table>

        <div class="row add_top_30 flex-sm-row-reverse cart_actions">
            <div class="col-sm-4 text-right">
                <button type="button" class="btn_1 gray">Update Cart</button>
            </div>
            <div class="col-sm-8">
                <div class="apply-coupon">
                    <div class="form-group form-inline">
                        <input type="text" name="coupon-code" value="" placeholder="Promo code"
                            class="form-control"><button type="button" class="btn_1 outline">Apply Coupon</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /cart_actions -->

    </div>
    <!-- /container -->

    <div class="box_cart">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <ul>
                        <li>
                            <span>Subtotal</span>
                            <div id="sub_price">0</div>
                        </li>
                        <li>
                            <span>Shipping</span> {{SHIPING_COST}} TL
                        </li>
                        <li>
                            <span>Total</span> 
                            <div id="hesap">0</div>
                        </li>
                    </ul>
                    <a href="cart-2.html" class="btn_1 full-width cart">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /box_cart -->



</main>





@endsection