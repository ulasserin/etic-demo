<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ BASE_URL }}/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ BASE_URL }}/img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ BASE_URL }}/img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="{{ BASE_URL }}/img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{ BASE_URL }}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ BASE_URL }}/css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="{{ BASE_URL }}/css/home_1.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{ BASE_URL }}/css/custom.css" rel="stylesheet">
</head>

<body>

<div id="page">
		
	<header class="version_1">
		<div class="layer"></div><!-- Mobile menu overlay mask -->
		<div class="main_header">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
						<div id="logo">
							<a href="{{BASE_URL}}"><img src="{{BASE_URL}}/img/logo.svg" alt="" width="100" height="35"></a>
						</div>
					</div>
					<nav class="col-xl-6 col-lg-7">
						<a class="open_close" href="javascript:void(0);">
							<div class="hamburger hamburger--spin">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</div>
						</a>
						<!-- Mobile menu button -->
						<div class="main-menu">
							<div id="header_menu">
								<a href="index.html"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
								<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
							</div>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="show-submenu">Home</a>
									<ul>
										<li><a href="index.html">Slider</a></li>
										<li><a href="index-2.html">Video Background</a></li>
										<li><a href="index-3.html">Vertical Slider</a></li>
										<li><a href="index-4.html">GDPR Cookie Bar</a></li>
									</ul>
								</li>
								<li class="megamenu submenu">
									<a href="javascript:void(0);" class="show-submenu-mega">Pages</a>
									<div class="menu-wrapper">
										<div class="row small-gutters">
											<div class="col-lg-3">
												<h3>Listing grid</h3>
												<ul>
													<li><a href="listing-grid-1-full.html">Grid Full Width</a></li>
													<li><a href="listing-grid-2-full.html">Grid Full Width 2</a></li>
													<li><a href="listing-grid-3.html">Grid Boxed</a></li>
													<li><a href="listing-grid-4-sidebar-left.html">Grid Sidebar Left</a></li>
													<li><a href="listing-grid-5-sidebar-right.html">Grid Sidebar Right</a></li>
													<li><a href="listing-grid-6-sidebar-left.html">Grid Sidebar Left 2</a></li>
													<li><a href="listing-grid-7-sidebar-right.html">Grid Sidebar Right 2</a></li>
												</ul>
											</div>
											<div class="col-lg-3">
												<h3>Listing row &amp; Product</h3>
												<ul>
													<li><a href="listing-row-1-sidebar-left.html">Row Sidebar Left</a></li>
													<li><a href="listing-row-2-sidebar-right.html">Row Sidebar Right</a></li>
													<li><a href="listing-row-3-sidebar-left.html">Row Sidebar Left 2</a></li>
													<li><a href="listing-row-4-sidebar-extended.html">Row Sidebar Extended</a></li>
													<li><a href="product-detail-1.html">Product Large Image</a></li>
													<li><a href="product-detail-2.html">Product Carousel</a></li>
													<li><a href="product-detail-3.html">Product Sticky Info</a></li>
												</ul>
											</div>
											<div class="col-lg-3">
												<h3>Other pages</h3>
												<ul>
													<li><a href="cart.html">Cart Page</a></li>
													<li><a href="checkout.html">Check Out Page</a></li>
													<li><a href="confirm.html">Confirm Purchase Page</a></li>
													<li><a href="account.html">Create Account Page</a></li>
													<li><a href="track-order.html">Track Order</a></li>
													<li><a href="help.html">Help Page</a></li>
													<li><a href="help-2.html">Help Page 2</a></li>
													<li><a href="leave-review.html">Leave a Review</a></li>
												</ul>
											</div>
											<div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
												<div class="banner_menu">
													<a href="#0">
														<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/banner_menu.jpg" width="400" height="550" alt="" class="img-fluid lazy">
													</a>
												</div>
											</div>
										</div>
										<!-- /row -->
									</div>
									<!-- /menu-wrapper -->
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="show-submenu">Extra Pages</a>
									<ul>
										<li><a href="header-2.html">Header Style 2</a></li>
										<li><a href="header-3.html">Header Style 3</a></li>
										<li><a href="header-4.html">Header Style 4</a></li>
										<li><a href="header-5.html">Header Style 5</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="sign-in-modal.html">Sign In Modal</a></li>
										<li><a href="contacts.html">Contact Us</a></li>
										<li><a href="about.html">About 1</a></li>
										<li><a href="about-2.html">About 2</a></li>
										<li><a href="modal-advertise.html">Modal Advertise</a></li>
										<li><a href="modal-newsletter.html">Modal Newsletter</a></li>
									</ul>
								</li>
								<li>
									<a href="blog.html">Blog</a>
								</li>
								<li>
									<a href="#0">Buy Template</a>
								</li>
							</ul>
						</div>
						<!--/main-menu -->
					</nav>
					<div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
						<a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /main_header -->

		<div class="main_nav inner">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 col-md-3">
						<nav class="categories">
							<ul class="clearfix">
								<li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Categories
										</a>
									</span>
									<div id="menu">
										<ul>
										
												<!-- Kategori Menüsü -->
												@foreach($categories as $category)
												<li><span><a href="{{ BASE_URL }}kategori/{{$category['seflink']}}">{{ $category['baslik'] }}</a></span>
													<ul>
														@foreach($category['subcategories'] as $child) <!-- Erişim yöntemi değişmedi -->
															<li><a href="{{ BASE_URL }}kategori/{{ $child['seflink'] }}">{{ $child['baslik'] }}</a></li>
														@endforeach
													</ul>
												</li>
												@endforeach
											<!-- Kategori Menüsü -->
											
											
											
											
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
						<div class="custom-search-input">
							<input type="text" placeholder="Search over 10.000 products">
							<button type="submit"><i class="header-icon_search_custom"></i></button>
						</div>
					</div>
					<div class="col-xl-3 col-lg-2 col-md-3">
						<ul class="top_tools">
						<li>
							<div class="dropdown dropdown-cart">
								<a href="cart.html" class="cart_bt"><strong
										id="cart-count">{{$cart['cart_count']}}</strong></a>


								<div class="dropdown-menu">
									<ul id="cart-items">
										<!-- Sepet ürünleri buraya dinamik olarak eklenecek -->

									</ul>
									<div class="total_drop">
										<div class="clearfix"><strong>Total</strong><span id="cart-total">$200.00</span>
										</div>
										<a href="{{BASE_URL}}sepet" class="btn_1 outline">View Cart</a>
										<a href="checkout.html" class="btn_1">Checkout</a>
									</div>
								</div>

							</div>
							<!-- /dropdown-cart-->
						</li>
							<li>
								<a href="#0" class="wishlist"><span>Wishlist</span></a>
							</li>
							<li>
								<div class="dropdown dropdown-access">
									<a href="account.html" class="access_link"><span>Account</span></a>
									<div class="dropdown-menu">
										<a href="account.html" class="btn_1">Sign In or Sign Up</a>
										<ul>
											<li>
												<a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
											</li>
											<li>
												<a href="account.html"><i class="ti-package"></i>My Orders</a>
											</li>
											<li>
												<a href="account.html"><i class="ti-user"></i>My Profile</a>
											</li>
											<li>
												<a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /dropdown-access-->
							</li>
							<li>
								<a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
							</li>
							<li>
								<a href="#menu" class="btn_cat_mob">
									<div class="hamburger hamburger--spin" id="hamburger">
										<div class="hamburger-box">
											<div class="hamburger-inner"></div>
										</div>
									</div>
									Categoriess
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="search_mob_wp">
				<input type="text" class="form-control" placeholder="Search over 10.000 products">
				<input type="submit" class="btn_1 full-width" value="Search">
			</div>
			<!-- /search_mobile -->
		</div>
		<!-- /main_nav -->
	</header>
	<!-- /header -->
		
	<main>
		@yield('content')
	</main>
	<!-- /main -->
	
	<footer class="revealed">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="about.html">About us</a></li>
							<li><a href="help.html">Faq</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="account.html">My account</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contacts.html">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="listing-grid-1-full.html">Clothes</a></li>
							<li><a href="listing-grid-2-full.html">Electronics</a></li>
							<li><a href="listing-grid-1-full.html">Furniture</a></li>
							<li><a href="listing-grid-3.html">Glasses</a></li>
							<li><a href="listing-grid-1-full.html">Shoes</a></li>
							<li><a href="listing-grid-1-full.html">Watches</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_3">Contacts</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
							<li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
						    <div class="form-group">
						        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
						        <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
						    </div>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					<ul class="footer-selector clearfix">
						<li>
							<div class="styled-select lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2020 Allaia</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="{{ BASE_URL }}/js/common_scripts.min.js"></script>
	<script src="{{ BASE_URL }}/js/main.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ BASE_URL }}/js/carousel-home.min.js"></script>
	    <!-- SPECIFIC SCRIPTS -->
		<script  src="{{ BASE_URL }}/js/carousel_with_thumbs.js"></script>


	<!-- ajax -->
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

$(document).ready(function () {
    $('.AddtoCard').click(function () {
        var productId = $(this).data('id');

        $.ajax({
            url: "{{ BASE_URL }}ajax.php",
            type: "POST",
            data: {
                productId: productId,
                action: 'addToCart',
                session_id: "{{ $_SESSION['session_id'] }}"
            },
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
					let button = $('.AddtoCard[data-id="'+productId+'"]');
                    // Sepet sayısını güncelle
                    $('#cart-count').text(response.data.cart_count);

					if(response.data.action === 'delete'){

					button.find('#cart-text').text('Add to Cart');
					button.css('background-color', '#004dda');


					}else {
					
					button.find('#cart-text').text('Added to Cart');
					button.css('background-color', 'green');
					}

				
                    // Sepetin içeriğini güncelle
                    updateCartItems(response.data.cart_items);
					my_alert('success', response.message);

                } else {
					my_alert('error', response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Hatası: ', error);
            }
        });
    });
});

function updateCartItems(cartItems) {
  
    var cartItemsContainer = $('#cart-items');
    cartItemsContainer.empty(); 

	console.log(cartItems);

    var totalPrice = 0;

    // Sepet veriLERİ
    cartItems.forEach(function (item) {
        var cartItemHtml = `
            <li>
                <a href="{{ BASE_URL }}urun/${item.seflink}">
                    <figure><img src="${item.image}" data-src="${item.image}" alt="" width="50" height="50" class="lazy"></figure>
					<strong><span>${item.product_name}</span>${item.price} TL</strong>
				</a>
				 <a href="javascript:void(0);" class="deleteFromCart action" data-product-id="${item.id}">
        			<i class="ti-trash"></i>
    			</a>
				
			</li>
        `;

        cartItemsContainer.append(cartItemHtml);
        totalPrice = totalPrice + item.price;
    });

	console.log(totalPrice);

    // Toplam fiyaT
	$('#cart-total').text(totalPrice + ' TL');
}


//sepetControl işlemi sayfa ilk açıldığında
$(document).ready(function () {
    $.ajax({
        url: "{{ BASE_URL }}ajax.php",
        type: "POST",
        data: {
            action: 'sepetControl',
            session_id: "{{ $_SESSION['session_id'] }}"
        },
        dataType: 'json',
        success: function (response) {
            if (response.status === 'success') {

                updateCartItems(response.data.cart_items);
				getBody(response.data.cart_items);




            } else {
                alert('Sepet bilgileri getirilemedi: ' + response.message);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Hatası: ', error);
        }
    });
});


//alert function
function my_alert (icon, title, timer = 3000) {
	const Toast = Swal.mixin({
	toast: true,
	position: "bottom-end",
	showConfirmButton: false,
	timer: timer,
	timerProgressBar: true,
	didOpen: (toast) => {
		toast.onmouseenter = Swal.stopTimer;
		toast.onmouseleave = Swal.resumeTimer;
	}
	});
	Toast.fire({
	icon: icon,
	title: title

	});
}

//deleteFromCard get id
$(document).on('click', '.deleteFromCart', function () {
	var productId = $(this).data('product-id'); 
	console.log(productId);

	$.ajax({
		url: "{{ BASE_URL }}ajax.php",
		type: "POST",
		data: {
			product_id: productId,
			action: 'deleteFromCart',
			session_id: "{{ $_SESSION['session_id'] }}"
		},
		dataType: 'json',
		success: function (response) {
			if (response.status === 'success') {
	
				$('#cart-count').text(response.data.cart_count);
				updateCartItems(response.data.cart_items);
				getBody(response.data.cart_items);
				my_alert('success', 'Ürün sepetten silindi.', 1000);
				
			} else {
				my_alert('error', 'Ürün sepetten silinemedi.');
			}
		},
		error: function (xhr, status, error) {
			console.error('AJAX Hatası: ', error);
		}
	});
});



    //deleteFromSepet
    $(document).on('click', '.deleteFromSepet', function () {
	var productId = $(this).data('product-id'); 
	console.log(productId);

	$.ajax({
		url: "{{ BASE_URL }}ajax.php",
		type: "POST",
		data: {
			product_id: productId,
			action: 'deleteFromSepet',
			session_id: "{{ $_SESSION['session_id'] }}"
		},
		dataType: 'json',
		success: function (response) {
			if (response.status === 'success') {
	
				$('#cart-count').text(response.data.cart_count);
				updateCartItems(response.data.cart_items);
				//sub_price update
				$('#sub_price').text(0);
				getBody(response.data.cart_items);


				my_alert('success', 'Ürün sepetten silindi.', 1000);
				
			} else {
				my_alert('error', 'Ürün sepetten silinemedi.');
			}
		},
		error: function (xhr, status, error) {
			console.error('AJAX Hatası: ', error);
		}
	});
});


function getBody (item) {
        var root = document.getElementById('root');
        root.innerHTML = '';
		console.log(item);
		var totalPrice = 0;

		
        item.forEach(function (item) {

		
              var cartItemHtml = `
                    <tr>
                        <td>
                            <div class="thumb_cart ">
                                <img src="{{ BASE_URL }}img/products/product_placeholder_square_small.jpg"
                                    data-src="img/products/shoes/1.jpg" class="lazy" alt="Image">
                            </div>
                            <span class="item_cart">${item.product_name}</span>
                        </td>
                        <td>
                            <strong>${item.price} TL</strong>
                        </td>

                        <td>
                            <div class="numbers-row">
                                <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
                                <div class="inc button_inc">+</div>
                                <div class="dec button_inc">-</div>
                            </div>
                        </td>

                        <td>
                            <strong class="subtotal">  ${item.indirim ? item.real_price : item.price}  TL</strong>

                        </td>

                        <td class="options">

                            <a href="javascript:void(0);" class="deleteFromSepet action" data-product-id="${item.id}">
                                <i class="ti-trash"></i>
                            </a>

                        </td>

                    </tr>

                `;

				totalPrice = item.price + totalPrice;

                root.innerHTML += cartItemHtml;

				console.log ("Total Price: " + totalPrice);
				$('#sub_price').text(totalPrice);


        });

		let hesap = $('#hesap');
		if (totalPrice < 1) {
			hesap.text(0);

		} else {
			hesap.text(totalPrice + 50);
		}

			

    }






</script>

	
</body>

</html>