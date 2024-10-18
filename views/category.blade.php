@extends('layout')

@section('title', $title)

@section('content')
<main>
    <div class="top_banner">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
            <div class="container">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{ BASE_URL }}">Home</a></li>
                        <li> @yield('title') {{ $category_name }} </li>
                    </ul>
                </div>
                <h1> {{ $category_name }} </h1>
            </div>
        </div>
        <img src="{{ BASE_URL }}/img/bg_cat_shoes.jpg" class="img-fluid" alt="">
    </div>
    <!-- /top_banner -->

    <!-- urunleri döndür -->

    @if(count($products) > 0)
        <div class="container margin_30">

            <div class="row small-gutters">
                @foreach($products as $product)
                    <div class="col-6 col-md-4 col-xl-3">

                        <div class="grid_item">
                            <figure>
                                @if($product['indirim'] > 0)
                                    <span class="ribbon off">{{ $product['indirim'] }}%</span>
                                @endif
                                <a href="{{ BASE_URL }}urun/{{ $product['seflink'] }}">
                                    <img class="img-fluid lazy"
                                        src="{{ BASE_URL }}img/products/product_placeholder_square_medium.jpg"
                                        data-src="{{ BASE_URL }}img/products/shoes/1.jpg" alt="">
                                </a>
                                <div data-countdown="2019/05/15" class="countdown"></div>
                            </figure>
                            <a href="{{ BASE_URL }}urun/{{ $product['seflink'] }}">
                                <h3> {{ $product['urun_adi'] }} </h3>
                            </a>
                            <div class="price_box">
                                @if($product['indirim'] > 0)
                                    <span class="new_price">{{ $product['indirimli_fiyat'] }} TL
                                    </span>
                                    <span class="old_price">${{ $product['tutar'] }} TL</span>
                                @else
                                    <span class="new_price">{{ $product['tutar'] }} TL</span>
                                @endif
                            </div>
                            <ul>
                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                        title="Add to favorites"><i class="ti-heart"></i><span>Add to
                                            favorites</span></a>
                                </li>
                                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                        title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to
                                            compare</span></a></li>

                                <li>
                                    <button class="AddtoCard" data-toggle="tooltip" data-placement="left"
                                        title="Add to cart" data-id="{{ $product['id'] }}"
                                        data-name="{{ $product['urun_adi'] }}"
                                        data-price="{{ $product['tutar'] }}"
                                        data-image="{{ BASE_URL }}img/products/shoes/1.jpg" data-quantity="1"><i
                                            class="ti-shopping-cart"></i><span></span></button>
                                </li>

                            </ul>
                        </div>
                        <!-- /grid_item -->
                    </div>
                @endforeach
            </div>

        </div>
        <!-- /container -->

        </div>
    @else
        <div class="container margin_30">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2>Ürün Bulunamadı</h2>
                        <p>Aradığınız kriterlere uygun ürün bulunamadı.</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- /container -->
</main>
<!-- /main -->


@endsection