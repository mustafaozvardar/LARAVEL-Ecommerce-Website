<!DOCTYPE html>
<html lang="en">
<head>

<style>
        table {
            width: 100%;
           
            border-collapse: collapse;
            margin: 20px 0;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px;
         
        }
        th {
            background-color: #f2f2f2;
        }

        .total_deg{
            font-size: 20px;
            padding: 20px;
            margin-left: 550px;
            margin-bottom: 100px;
        }
    </style>
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

	
		

	<div class="center" style="margin-top:150px;">
	@if(session()->has('message'))

        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{session()->get('message')}}
        </div>

        @endif

        <table>

            <tr>
                <th>Product Title</th>
                <th>Product Quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <?php $totalprice=0; ?>

            @foreach($cart as $cart)

            <tr>

                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>{{$cart->price}}</td>
                <td><img style="width: 150px; height:150px;" src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product?')"  
                href="{{url('/remove_cart',$cart->id)}}">Remove Product</a></td>

            </tr>
			
            <?php $totalprice=$totalprice + $cart->price ?>

            @endforeach

           

        </table>

        <div>
            <h1 class="total_deg">
                Total Price: <b style="color:red">{{$totalprice}}</b>
            </h1>
        </div>

		<div style="margin-left:500px; margin-bottom:100px">
			<h1 style="margin-left:60px;margin-bottom:5px;font-size:20px">Proceed to Order</h1>
			<a class="btn btn-success" href="{{url('cash_order')}}">Cash on Delivery</a>
			<a class="btn btn-success" href="">Pay Using Card</a>
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