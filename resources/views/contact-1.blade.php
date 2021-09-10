@extends('layout-contact')
@section('contact-1')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!-- Contact Form -->
		<div class="section-full content-inner">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 col-md-5 col-sm-12">
						<div class="section-head m-b30">
							<h5 class="title-small">Contact Us</h5>
							<div class="dlab-separator bg-primary"></div>
							<h2 class="title">Do You Have Any Question?</h2>
						</div>
						<ul class="contact-question">
							<li>
								<i class="fa fa-map-marker"></i>
								<h4 class="title">Address</h4>
								<p>123 West Street, Melbourne Victoria 3000 Australia</p>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<h4 class="title">Email</h4>
								<p>info@example.com</p>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<h4 class="title">Phone</h4>
								<p>+61 3 8376 6284<br>+23 123 456 7890</p>
							</li>
							<li>
								<i class="fa fa-fax"></i>
								<h4 class="title">Fax</h4>
								<p>+000 123 2294 089</p>
							</li>
						</ul>
					</div>
					<div class="col-lg-8 col-md-7 col-sm-12 m-b30">
						<form class="contact-box dzForm" action="script/contact.php">
							<h3 class="title-box">Write us a few words about your project and we’ll prepare a proposal for you within <strong>24</strong> hours</h3>
							<div class="dzFormMsg m-b20"></div>
							<input type="hidden" value="Contact" name="dzToDo">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzFirstName" type="text" required="" class="form-control" placeholder="First Name">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzLastName" type="text" required="" class="form-control" placeholder="Last Name">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzOther[Phone]" type="text" required="" class="form-control" placeholder="Phone">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group"> 
											<input name="dzEmail" type="email" class="form-control" required="" placeholder="Your Email Id">
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<textarea name="dzMessage" rows="4" class="form-control" required="" placeholder="Tell us about your project or idea"></textarea>
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
								<div class="col-lg-12 col-md-12">
									<button name="submit" type="submit" value="Submit" class="site-button">Get A Free Quote!</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Form End -->
    </div>
    <!-- Content END-->
    @endsection