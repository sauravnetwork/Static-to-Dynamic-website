@extends('layout-pages')
@section('event-details')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Event Details</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Event Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-lg-3 col-md-5 m-b30">
                        <aside class="side-bar sticky-top">
                            <div class="widget widget_event_info">
                                <h5 class="widget-title style-1">Event Details</h5>
								<ul>
									<li>
										<i class="la la-user-circle"></i>
										<span class="title">Organizer:</span>
										<span class="info">Konne Backfield</span>
									</li>
									<li>
										<i class="la la-calendar"></i>
										<span class="title">Start Date:</span>
										<span class="info">04 June 2020</span>
									</li>
									<li>
										<i class="la la-clock-o"></i>
										<span class="title">Time:</span>
										<span class="info">09:00 Am To 07:00 PM</span>
									</li>									
									<li>
										<i class="la la-envelope"></i>
										<span class="title">Email:</span>
										<span class="info">info@example.com</span>
									</li>
									<li>
										<i class="la la-phone"></i>
										<span class="title">Phone:</span>
										<span class="info">+91 987 654 3210</span>
									</li>
									<li>
										<i class="la la-map-marker"></i>
										<span class="title">Address:</span>
										<span class="info">Melbourne </span>
									</li>
								</ul>
                            </div>
                            <div class="widget widget_archive">
                                <h5 class="widget-title style-1">Categories List</h5>
                                <ul>
                                    <li><a href="javascript:void(0);">Lifestyle</a></li>
                                    <li><a href="javascript:void(0);">Creative</a></li>
                                    <li><a href="javascript:void(0);">Education</a></li>
                                    <li><a href="javascript:void(0);">Events</a></li>
                                    <li><a href="javascript:void(0);">Sports</a></li>
                                </ul>
                            </div>
							<div class="widget widget_gallery gallery-grid-4">
                                <h5 class="widget-title style-1">Our Gallery</h5>
                                <ul id="lightgallery" class="lightgallery">
                                    <li>
                                        <div class="dlab-post-thum dlab-img-effect">
											<span data-exthumbimage="images/gallery/pic1.jpg" data-src="images/gallery/pic1.jpg" class="check-km" title="Image 1 Title will come here">		
												<img src="images/gallery/pic1.jpg" alt=""> 
											</span>
										</div>
                                    </li>
                                    <li>
                                        <div class="dlab-post-thum dlab-img-effect">
											<span data-exthumbimage="images/gallery/pic2.jpg" data-src="images/gallery/pic2.jpg" class="check-km" title="Image 2 Title will come here">		
												<img src="images/gallery/pic2.jpg" alt=""> 
											</span>
										</div>
                                    </li>
                                    <li>
                                        <div class="dlab-post-thum dlab-img-effect">
											<span data-exthumbimage="images/gallery/pic3.jpg" data-src="images/gallery/pic3.jpg" class="check-km" title="Image 3 Title will come here">		
												<img src="images/gallery/pic3.jpg" alt=""> 
											</span>
										</div>
                                    </li>
                                    <li>
                                        <div class="dlab-post-thum dlab-img-effect">
											<span data-exthumbimage="images/gallery/pic4.jpg" data-src="images/gallery/pic4.jpg" class="check-km" title="Image 4 Title will come here">		
												<img src="images/gallery/pic4.jpg" alt=""> 
											</span>
										</div>
                                    </li>
                                    <li>
                                        <div class="dlab-post-thum dlab-img-effect">
											<span data-exthumbimage="images/gallery/pic5.jpg" data-src="images/gallery/pic5.jpg" class="check-km" title="Image 5 Title will come here">		
												<img src="images/gallery/pic5.jpg" alt=""> 
											</span>
										</div>
                                    </li>
                                    <li>
										<div class="dlab-post-thum dlab-img-effect">
											<span data-exthumbimage="images/gallery/pic6.jpg" data-src="images/gallery/pic6.jpg" class="check-km" title="Image 6 Title will come here">		
												<img src="images/gallery/pic6.jpg" alt=""> 
											</span>
										</div>
                                    </li>
									 <li>
										<div class="dlab-post-thum dlab-img-effect">
											<span data-exthumbimage="images/gallery/pic7.jpg" data-src="images/gallery/pic7.jpg" class="check-km" title="Image 7 Title will come here">		
												<img src="images/gallery/pic7.jpg" alt=""> 
											</span>
										</div>
                                    </li>
                                    <li>
										<div class="dlab-post-thum dlab-img-effect">
											<span data-exthumbimage="images/gallery/pic8.jpg" data-src="images/gallery/pic8.jpg" class="check-km" title="Image 8 Title will come here">		
												<img src="images/gallery/pic8.jpg" alt=""> 
											</span>
										</div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
					<!-- left part start -->
                    <div class="col-lg-9 col-md-7">
                        <div class="event-single">
							<div class="dlab-post-meta">
								<ul>
									<li class="post-author"> <i class="la la-clock"></i> 05:00 PM </li>
									<li class="post-tag"> <i class="ti-location-pin"></i> Marmora Road </li>
								</ul>
							</div>
							<h2 class="dlab-title">Student Exchange Program Sessions</h2>
							<div class="dlab-media m-b30">
								<a href="javascript:;"><img src="images/events/default/thum1.jpg" alt=""></a>
							</div>
							<div class="dlab-post-text">
								<h4>About This Event</h4>
								<p>Suspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>
								<h4>Event’s Timeline</h4>
								<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has</p>
								<h4>Event Content</h4>
								<ul class="list-checked primary">
									<li>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and </li>
									<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>
									<li>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</li>
									<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
									<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</li>
								</ul>
							</div>
						</div>
                    </div>
                    <!-- left part start -->
                </div>
            </div>
        </div>
	</div>
    <!-- Content END-->
   @endsection