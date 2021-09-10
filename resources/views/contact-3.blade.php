@extends('layout-contact')
@section('contact-3')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us 3</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Contact Us 3</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner-2 contact-style-3">
			<div class="container">
                <div class="row m-lr0 contact-form-box">
					<div class="col-lg-4 col-md-5 p-lr0 contact-info" style="background-image:url(images/background/bg2.jpg); background-size: cover;">
						<div class="contact-info-inner text-white">
							<h3>Quick Contact</h3>
							<p class="m-b30">If you have any questions simply use the following contact details.</p>
							<ul class="no-margin">
								<li class="icon-bx-wraper left m-b30">
									<div class="icon-bx-xs bg-white"> <a href="javascript:void(0);" class="icon-cell text-primary"><i class="ti-location-pin"></i></a> </div>
									<div class="icon-content">
										<h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
										<p>123 West Street, Melbourne <br>Victoria 3000 Australia</p>
									</div>
								</li>
								<li class="icon-bx-wraper left  m-b30">
									<div class="icon-bx-xs bg-white"> <a href="javascript:void(0);" class="icon-cell text-primary"><i class="ti-email"></i></a> </div>
									<div class="icon-content">
										<h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
										<p>info@example.com<br>info@example.com</p>
									</div>
								</li>
								<li class="icon-bx-wraper left">
									<div class="icon-bx-xs bg-white"> <a href="javascript:void(0);" class="icon-cell text-primary"><i class="ti-mobile"></i></a> </div>
									<div class="icon-content">
										<h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
										<p>+61 3 8376 6284<br>+61 123 456 7890</p>
									</div>
								</li>
							</ul>
						</div>
                    </div>
					<div class="col-lg-8 col-md-7 p-lr0">
						<div class="contact-form bg-white">
							<div class="section-head text-left">
								<h3 class="title">Get In Touch</h3>
								<div class="dlab-separator bg-primary"></div>
							</div>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="script/contact.php">
								<input type="hidden" value="Contact" name="dzToDo">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<input name="dzName" type="text" required class="form-control" placeholder="Your Name">
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<div class="input-group"> 
												<input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group form-recaptcha">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<button name="submit" type="submit" value="Submit" class="site-button"> Submit </button>
									</div>
								</div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
   @endsection