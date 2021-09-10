@extends('layout-contact')
@section('contact-2')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us 2</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Contact Us 2</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Contact Form -->
		<div class="section-full content-inner contact-style-2 bg-white">
			<div class="container">
                <div class="row align-items-center m-b30">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-bx-wraper m-b30 left">
							<div class="icon-md m-b20 m-t5">
								<a href="javascript:void(0)" class="icon-cell text-blue">
									<i class="ti-headphone-alt"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-tilte m-b5">Phone</h4>
								<p>Phone 01:(+032) 3456 7890 <br> Phone 02: (+032) 3427 7670</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-bx-wraper m-b30 left">
							<div class="icon-md m-b20 m-t5">
								<a href="javascript:void(0)" class="icon-cell text-green">
									<i class="ti-location-pin"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-tilte m-b5">Address</h4>
								<p>Spring Store London Oxford Street, 012 United Kingdom</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper m-b30 left">
							<div class="icon-md m-b20 m-t5">
								<a href="javascript:void(0)" class="icon-cell text-orange">
									<i class="ti-email"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-tilte m-b5">Email</h4>
								<p>info@example.com <br> info@example.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row m-b50">
					<div class="col-lg-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch radius-sm" style="border:0; width:100%; min-height:500px;" allowfullscreen></iframe>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 m-b30">
						<div class="section-head text-center col-md-12">
							<h2 class="title text-secondry">Contact Me</h2>
							<p class="ext m-b0">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8</p>
						</div>
						<form method="post" class="dzForm" action="script/contact.php">
							<input type="hidden" value="Contact" name="dzToDo">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input name="dzName" type="text" required class="form-control" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Address" >
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your message here"></textarea>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group recaptcha-box">
										<div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
										<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
									</div>
								</div>
								<div class="col-md-12 col-sm-12 text-center">
									<button name="submit" type="submit" value="Submit" class="site-button">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
		</div>
        <!-- Contact Form END -->
    </div>
    <!-- Content END-->
	@endsection