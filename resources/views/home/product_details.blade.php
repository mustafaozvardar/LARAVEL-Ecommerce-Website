<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="home/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="home/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="home/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/css/util.css">
	<link rel="stylesheet" type="text/css" href="home/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
    
	
	<!-- Header -->
	@include('home.header')
<br><br><br><br><br><br>
@if(session()->has('message'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
					{{session()->get('message')}}
				</div>
				@endif
   <div  class="row isotope-grid" style="margin:auto;  width:100%; padding:30px">

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="product/{{$product->image}}" alt="IMG-PRODUCT">

							
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								
							@if($product->discount_price != null)
								<span style="color: red">Discount Price</span>
								<span style="color: red" class="stext-105 cl3">
								${{ $product->discount_price }}
								</span>

								<span style="text-decoration: line-through;" class="stext-105 cl3">
							
								${{ $product->price }}
								</span>
							@else
							
								<h6>${{$product->price}}</h6>
							@endif

								<h5>Product Catagory: {{$product->catagory}}</h5>
                                <h5>Product Details: {{$product->description}}</h5>
                                <h5>Available Quantity: {{$product->quantity}}</h5>
                                <br>
                                
                                <form action="{{url('add_cart',$product->id)}}" method="Post">
								
								@csrf
								
								<div class="wrap-num-product flex-w m-r-20 m-tb-10" bis_skin_checked="1">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" bis_skin_checked="1">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input  type="number" name="quantity" value="1" min="1" class="mtext-104 cl3 txt-center num-product">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" bis_skin_checked="1">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<input type="submit" value="Add To Cart" style="background-color: #717fe0;" class="  stext-101 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail  ">
							</form>

							</div>

						</div>
					</div>
				</div>
			</div>





	<!-- Footer -->
	@include('home.footer')



    
<!--===============================================================================================-->	
	<script src="home/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/bootstrap/js/popper.js"></script>
	<script src="home/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="home/vendor/daterangepicker/moment.min.js"></script>
	<script src="home/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/slick/slick.min.js"></script>
	<script src="home/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="home/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="home/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="home/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="home/js/main.js"></script>

</body>
</html>