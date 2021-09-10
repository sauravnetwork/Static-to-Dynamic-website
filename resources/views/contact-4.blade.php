@extends('layout-contact')
@section('contact-4')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us 4</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Contact Us 4</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner contact-style-1">
			<div class="container">
                <div class="row dzseth">
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Address</h5>
								<p>123 West Street, Melbourne Victoria 3000 Australia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Email</h5>
								<p>info@example.com <br/> info@example.com</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Phone</h5>
								<p>+61 3 8376 6284 <br/> +23 123 456 7890</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-printer"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Fax</h5>
								<p>+61 3 8376 6284 <br/> +23 123 456 7890</p>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
					<!-- Left part start -->
                    <div class="col-lg-6 m-b30">
                        <div class="p-a30 bg-white clearfix border-1 radius-sm">
							<h3>Send Message Us</h3>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="script/contact.php">
								<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Subject]" type="text" required class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-12">
										<div class="form-group form-recaptcha">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
					<!-- right part start -->
                    <div class="col-lg-6 m-b30 d-flex">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch radius-sm" style="border:0; width:100%;  min-height:100%;" allowfullscreen></iframe>
                    </div>
                    <!-- right part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
   @endsection