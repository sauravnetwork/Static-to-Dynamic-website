@extends('layout-shop')
@section('shop-checkout')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Checkout</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
                <form class="shop-form">
					<div class="row">
                    	<div class="col-lg-6 col-md-6 col-md-6 m-b30">
							<h4>Billing & Shipping Address</h4>
							<div class="form-group">
								<select>
									<option value="">Åland Islands</option>
									<option value="">Afghanistan</option>
									<option value="">Albania</option>
									<option value="">Algeria</option>
									<option value="">Andorra</option>
									<option value="">Angola</option>
									<option value="">Anguilla</option>
									<option value="">Antarctica</option>
									<option value="">Antigua and Barbuda</option>
									<option value="">Argentina</option>
									<option value="">Armenia</option>
									<option value="">Aruba</option>
									<option value="">Australia</option>
								</select>	
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Company Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Address">
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="Town / City">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="State / County">
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="Postcode / Zip">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<input type="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<h6>
								<button class="site-button-link" type="button" data-toggle="collapse" data-target="#create-an-account">Create an account 
									<i class="fa fa-arrow-circle-o-down"></i>
								</button>
							</h6>
							<div id="create-an-account" class="collapse">
								<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-md-6 m-b30">
							<h4 class="font-weight-600"><button class="site-button-link " type="button" data-toggle="collapse" data-target="#different-address">Ship to a different address <i class="fa fa-arrow-circle-o-down"></i></button></h4>
							<div id="different-address" class="collapse">
								<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
								<div class="form-group">
									<select>
										<option value="">Åland Islands</option>
										<option value="">Afghanistan</option>
										<option value="">Albania</option>
										<option value="">Algeria</option>
										<option value="">Andorra</option>
										<option value="">Angola</option>
										<option value="">Anguilla</option>
										<option value="">Antarctica</option>
										<option value="">Antigua and Barbuda</option>
										<option value="">Argentina</option>
										<option value="">Armenia</option>
										<option value="">Aruba</option>
										<option value="">Australia</option>
									</select>	
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" class="form-control" placeholder="First Name">
									</div>
									<div class="form-group col-md-6">
										<input type="text" class="form-control" placeholder="Last Name">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Company Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Address">
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
									</div>
									<div class="form-group col-md-6">
										<input type="text" class="form-control" placeholder="Town / City">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" class="form-control" placeholder="State / County">
									</div>
									<div class="form-group col-md-6">
										<input type="text" class="form-control" placeholder="Postcode / Zip">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<input type="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group col-md-6">
										<input type="text" class="form-control" placeholder="Phone">
									</div>
								</div>
								<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
							</div>
						</div>
					</div>
				</form>
				<div class="dlab-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
				<div class="row">
					<div class="col-lg-6 m-b15">
						<h4>Your Order</h4>
						<table class="table-bordered check-tbl">
							<thead>
								<tr>
									<th>IMAGE</th>
									<th>PRODUCT NAME</th>
									<th>TOTAL</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="images/product/item1.jpg" alt=""></td>
									<td>School Bag</td>
									<td class="product-price">$28.00</td>
								</tr>
								<tr>
									<td><img src="images/product/item2.jpg" alt=""></td>
									<td>Color Pencils</td>
									<td class="product-price">$36.00</td>
								</tr>
								<tr>
									<td><img src="images/product/item3.jpg" alt=""></td>
									<td>Normal Pencils</td>
									<td class="product-price">$28.00</td>
								</tr>
								<tr>
									<td><img src="images/product/item4.jpg" alt=""></td>
									<td>Stapler</td>
									<td class="product-price">$36.00</td>
								</tr>
								<tr>
									<td><img src="images/product/item5.jpg" alt=""></td>
									<td>Project Book</td>
									<td class="product-price">$28.00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg-6 m-b15">
						<form class="shop-form">
							<h4>Order Total</h4>
							<table class="table-bordered check-tbl">
								<tbody>
									<tr>
										<td>Order Subtotal</td>
										<td class="product-price">$125.96</td>
									</tr>
									<tr>
										<td>Shipping</td>
										<td>Free Shipping</td>
									</tr>
									<tr>
										<td>Coupon</td>
										<td class="product-price">$28.00</td>
									</tr>
									<tr>
										<td>Total</td>
										<td class="product-price-total">$506.00</td>
									</tr>
								</tbody>
							</table>
							<h5>Payment Method</h5>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name on Card">
							</div>
							<div class="form-group">
								<select>
									<option value="">Credit Card Type</option>
									<option value="">Another option</option>
									<option value="">A option</option>
									<option value="">Potato</option>
								</select>	
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Credit Card Number">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Card Verification Number">
							</div>
							<div class="form-group">
								<button class="site-button button-lg btn-block" type="button">Place Order Now </button>
							</div>
						</form>
					</div>
				</div>
		   </div>
            <!-- Product END -->
		</div>
		<!-- Shop Service info -->
		<div class="section-full p-t50 p-b20 bg-secondry text-white">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<div class="icon-bx-wraper left shop-service-info m-b30">
							<div class="icon-md text-black radius"> 
								<a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-gift"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte">Free shipping on orders $60+</h5>
								<p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="icon-bx-wraper left shop-service-info m-b30">
							<div class="icon-md text-black radius"> 
								<a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-plane"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte">Worldwide delivery</h5>
								<p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="icon-bx-wraper left shop-service-info m-b30">
							<div class="icon-md text-black radius"> 
								<a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-history"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte">60 days money back guranty!</h5>
								<p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Shop Service info End -->
    </div>
    <!-- Content END-->
    @endsection