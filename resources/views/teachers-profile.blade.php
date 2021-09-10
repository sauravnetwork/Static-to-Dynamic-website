@extends('layout-pages')
@section('teachers-profile')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Teachers Profile</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index">Home</a></li>
							<li>Teachers Profile</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!-- Teachers Profile -->
		<div class="section-full content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5 m-b30">
						<div class="teachers-profile">
							<div class="img">
								<img src="images/our-team/pic10.jpg">
							</div>
							<div class="teachers-info">
								<h4 class="name">Konne Backfield</h4>
								<span class="position">Head Of Department</span>
							</div>
							<div class="teachers-contact">
								<ul>
									<li class="title">Contact Info</li>
									<li><span>Address:</span>New York</li>
									<li><span>Email:</span>info@example.com</li>
									<li><span>Phone:</span>+91 987 654 3210</li>
								</ul>
								<div class="share-list">
									<h5>Share :</h5>
									<ul class="dlab-social-icon">
										<li><a href="javascript:void(0);" class="site-button circle fa fa-facebook facebook"></a></li>
										<li><a href="javascript:void(0);" class="site-button circle fa fa-twitter twitter"></a></li>
										<li><a href="javascript:void(0);" class="site-button circle fa fa-linkedin linkedin"></a></li>
										<li><a href="javascript:void(0);" class="site-button circle fa fa-whatsapp whatsapp"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-7">
						<div class="teachers-details">
							<h2>About Us</h2>
							<p class="m-b30">Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada nulla bibendum. Proin varius sollicitudin nulla quis fermentum. Nunc vitae arcu eget diam gravida ultrices finibus nec mi. Maecenas egestas libero.</p>
							<h2>Field Of Special Interest</h2>
							<p class="m-b10">Chemistry Teacher</p>
							<p class="m-b30">Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada nulla bibendum. Proin varius sollicitudin nulla quis fermentum. Nunc vitae arcu eget diam gravida ultrices finibus nec mi. Maecenas egestas libero.</p>
							<div class="row">
								<div class="col-lg-6 m-b15">
									<h4 class="m-b30">My Education</h4>
									<ul class="teach-list-info">
										<li>
											<i class="fa fa-graduation-cap"></i>
											<h5 class="title">Harvard University</h5>
											<span>Bachelor in Mathematics</span>
										</li>
										<li>
											<i class="fa fa-graduation-cap"></i>
											<h5 class="title">University Of Toronto</h5>
											<span>Bachelor in English</span>
										</li>
										<li>
											<i class="fa fa-graduation-cap"></i>
											<h5 class="title">Harvard University</h5>
											<span>Bachelor in Mathematics</span>
										</li>
									</ul>
								</div>
								<div class="col-lg-6 m-b15">
									<h4 class="m-b30">My Experience</h4>
									<ul class="teach-list-info">
										<li>
											<i class="fa fa-briefcase"></i>
											<h5 class="title">UI/UX Designer</h5>
											<span>2016 - 2020</span>
										</li>
										<li>
											<i class="fa fa-briefcase"></i>
											<h5 class="title">Web Development</h5>
											<span>2017 - 2020 </span>
										</li>
										<li>
											<i class="fa fa-briefcase"></i>
											<h5 class="title">Envato</h5>
											<span>2018 - 2020 </span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Teachers Profile End -->
	</div>
    <!-- Content END-->
   @endsection