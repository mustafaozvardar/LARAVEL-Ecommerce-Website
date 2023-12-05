<section class="bg0 p-t-23 p-b-140">
		<div class="container">
		@if(session()->has('message'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
					{{session()->get('message')}}
				</div>
				@endif
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Women
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Men
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Bag
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
						Shoes
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Watches
					</button>
				</div>
				

				<div class="flex-w flex-c-m m-tb-10">
						<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
							<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
							<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
							Search
						</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						
						
						<form action="{{url('product_search')}}" method="GET">
							@csrf
							<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" placeholder="Search">				
						</form>

					</div>	
				</div>

				
				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@foreach($product as $products)
			<div class="row isotope-grid">
	
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2" >
						<div class="block2-pic hov-img0">
							<img src="images/product-13.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m  cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Details
							</a>

							

						</div>

						<div class="block2-txt flex-w flex-t p-t-14" >
							
							<div class="block2-txt-child1 flex-col-l" >
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 ">
									T-Shirt with Sleeve
								</a>

								<span class="stext-105 cl3">
									$18.49
								</span>
							</div>

							<form action="{{url('add_cart',$products->id)}}" method="Post">
								
								@csrf
								
								<div class="wrap-num-product flex-w m-r-20 m-tb-10" bis_skin_checked="1">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" bis_skin_checked="1">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" bis_skin_checked="1">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<input type="submit" value="Add To Cart" style="background-color: #717fe0;" class="  stext-101 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail  ">
										
							</form>

							<div class="block2-txt-child2 flex-r p-t-3" style="margin-top:10px;">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-14.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Pretty Little Thing
								</a>

								<span class="stext-105 cl3">
									$54.79
								</span>
							</div>

							<form action="{{url('add_cart',$products->id)}}" method="Post">
								
								@csrf
								
								
								<div class="wrap-num-product flex-w m-r-20 m-tb-10" bis_skin_checked="1">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" bis_skin_checked="1">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" bis_skin_checked="1">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<input type="submit" value="Add To Cart" style="background-color: #717fe0;" class="  stext-101 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail  ">
							</form>

							<div class="block2-txt-child2 flex-r p-t-3" style="margin-top:10px;">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-15.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Mini Silver Mesh Watch
								</a>

								<span class="stext-105 cl3">
									$86.85
								</span>
							</div>

							<form action="{{url('add_cart',$products->id)}}" method="Post">
								
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

							<div class="block2-txt-child2 flex-r p-t-3" style="margin-top:20px;">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="product/{{$products->image}}" alt="IMG-PRODUCT">

							<a href="{{url('product_details',$products->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $products->title }}
								</a>
							@if($products->discount_price != null)
								<span style="color: red">Discount Price</span>
								<span style="color: red" class="stext-105 cl3">
								${{ $products->discount_price }}
								</span>

								<span style="text-decoration: line-through;" class="stext-105 cl3">
							
								${{ $products->price }}
								</span>
							@else
							
								<h6>${{$products->price}}</h6>
							@endif
								
							</div>
							

							<form action="{{url('add_cart',$products->id)}}" method="Post">
								
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

							<div class="block2-txt-child2 flex-r p-t-3" style="margin-top:10px;">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Load more -->
			
			@endforeach
			
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="/" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
			
		</div>

	</section>
