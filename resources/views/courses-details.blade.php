@extends('layout-pages')
@section('courses-detail')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Courses Details</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Courses Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="section-full content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 m-b30">
						<div class="course-view text-center">
							<h2 class="m-t0 m-b10 font-28 title text-black">Become a PHP Master and Make Money</h2>
							<ul class="course-info">
								<li> 
									<i class="fa fa-user"></i> <span> 65</span> 
									<div class="course-info-dec">Student</div>
								</li>
								<li> 
									<i class="fa fa-star"></i> <span> 4.3</span> 
									<div class="course-info-dec">Reviews (23)</div>
								</li>
								<li> 
									<i class="fa fa-clock-o"></i> <span> 2.0</span> 
									<div class="course-info-dec">Learning Hours</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- Side bar start -->
					<div class="col-xl-3 col-lg-4 col-md-12 m-b30">
						<aside class="side-bar sticky-top">
							<div class="widget">
								<div class="teacher-info text-center">
									<div class="top-info">
										<span class="price text-primary">Free</span>
										<a href="" class="site-button button-sm">Take This Course</a>
									</div>
									<div class="teacher-pic"> 
										<a href="#"><img src="images/testimonials/pic1.jpg" alt=""></a> 
									</div>
									<h4 class="name">Henry H. Garrick</h4>
									<span class="position">course instructor</span>
									<div class="clearfix m-b20">
										<a href="" class="site-button button-sm">FOLLOW NOW <i class="fa fa-user-plus m-l5"></i></a>
									</div>
									<ul class="social-list">
										<li><a href="javascript:void(0);" class="site-button circle fa fa-facebook facebook"></a></li>
										<li><a href="javascript:void(0);" class="site-button circle fa fa-twitter twitter"></a></li>
										<li><a href="javascript:void(0);" class="site-button circle fa fa-linkedin linkedin"></a></li>
										<li><a href="javascript:void(0);" class="site-button circle fa fa-whatsapp whatsapp"></a></li>
									</ul>
								</div>
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
							<div class="widget recent-posts-entry">
								<h5 class="widget-title style-1">Recent Posts</h5>
								<div class="widget-post-bx">
									<div class="widget-post clearfix">
										<div class="dlab-post-media"> 
											<img src="images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> 
										</div>
										<div class="dlab-post-info">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
												</ul>
											</div>
											<div class="dlab-post-header">
												<h6 class="post-title"><a href="blog-single-left-sidebar.html">Why is Early Education Essential?</a></h6>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dlab-post-media"> 
											<img src="images/blog/recent-blog/pic2.jpg" width="200" height="160" alt=""> 
										</div>
										<div class="dlab-post-info">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
												</ul>
											</div>
											<div class="dlab-post-header">
												<h6 class="post-title"><a href="blog-single-left-sidebar.html">Here's What People Are Saying About</a></h6>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dlab-post-media"> 
											<img src="images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> 
										</div>
										<div class="dlab-post-info">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
												</ul>
											</div>
											<div class="dlab-post-header">
												<h6 class="post-title"><a href="blog-single-left-sidebar.html">Five Things Nobody Told You About</a></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<!-- Side bar END -->
					<!-- left part start -->
					<div class="col-xl-9 col-lg-8 col-md-12 m-b30">
						<div class="row">
							<div class="col-lg-12">
								<div class="media m-b30">
									<img src="images/blog/default/thum1.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-12">
								<!-- Tabs -->
								<div class="course-details dlab-tabs border-top bg-tabs">
									<ul class="nav nav-tabs ">
										<li>
											<a data-toggle="tab" href="#description" class="active">
												<i class="fa fa-bookmark m-r10"></i>
												<span class="title-head">Description</span>
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#curriculum">
												<i class="fa fa-cube"></i>
												<span class="title-head">Curriculum</span>
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#instructor">
												<i class="fa fa-user"></i>
												<span class="title-head">Instructor</span>
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#review">
												<i class="fa fa-comments"></i>
												<span class="title-head">Review </span> <span class="text-primary">(3)</span>
											</a>
										</li>
									</ul>
									<div class="tab-content">
										<div id="description" class="tab-pane active">
											<h3 class="m-t0 m-b10">About This Course</h3>
											<p>Suspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>
											<h3 class="m-b10">Course’s Objectives</h3>	
											<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
											<h3 class="m-b10">Learning Outcomes</h3>
											<ul class="list-checked primary">
												<li>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and </li>
												<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>
												<li>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</li>
												<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
												<li>Dorem ipsum dolor sit amet</li>
											</ul>
											<div class="m-t10">
												<h5>Share :</h5>
												<ul class="dlab-social-icon">
													<li><a href="javascript:void(0);" class="site-button circle fa fa-facebook facebook"></a></li>
													<li><a href="javascript:void(0);" class="site-button circle fa fa-twitter twitter"></a></li>
													<li><a href="javascript:void(0);" class="site-button circle fa fa-linkedin linkedin"></a></li>
													<li><a href="javascript:void(0);" class="site-button circle fa fa-whatsapp whatsapp"></a></li>
												</ul>
											</div>
										</div>
										<div id="curriculum" class="tab-pane">
											<h3 class="m-t0 m-b15">Curriculum</h3>
											<h5 class="text-primary">Lesson 3</h5>
											<table class="table" >
												<thead>
													<tr> 
														<th>Lecture</th> 
														<th>Unit</th> 
														<th class="text-right">Time</th> 
													</tr> 
												</thead>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 00 : 10 : 00</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 00 : 20 : 00</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 02 : 10 : 05</span>
													</td>
												</tr>
											</table>
											<h5 class="text-primary">Lesson 2</h5>
											<table class="table" >
												<thead>
													<tr> 
														<th>Lecture</th> 
														<th>Unit</th> 
														<th class="text-right">Time</th> 
													</tr> 
												</thead>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 00 : 10 : 00</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 00 : 20 : 00</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 02 : 10 : 05</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 00 : 10 : 00</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 00 : 20 : 00</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 02 : 10 : 05</span>
													</td>
												</tr>
											</table>
											<h5 class="text-primary">Lesson 1</h5>
											<table class="table" >
												<thead>
													<tr> 
														<th>Lecture</th> 
														<th>Unit</th> 
														<th class="text-right">Time</th> 
													</tr> 
												</thead>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 00 : 10 : 00</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 00 : 20 : 00</span>
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>Styling for mobile</td>
													<td class="text-right">
														<span><i class="fa fa-clock-o m-r10"></i> 02 : 10 : 05</span>
													</td>
												</tr>
											</table>
										</div>
										<div id="instructor" class="tab-pane">
											<h3 class="m-t0">Instructor</h3>
											<div id="comments" class="dlab-instructor">
												<ol class="commentlist">
													<li class="comment">
														<div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic1.jpg" alt="">
															<div class="comment-text">
																<h3 class="author m-t0">Cobus Bester</h3> 
																<div class="w3-separator bg-primary"></div>
																<div class="description m-b15">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley..</p>
																</div>
																<ul class="dlab-social-icon">
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-facebook facebook"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-twitter twitter"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-linkedin linkedin"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-whatsapp whatsapp"></a></li>
																</ul>
															</div>
														</div>
													</li>
													<li class="comment">
														<div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic2.jpg" alt="">
															<div class="comment-text">
																<h3 class="author m-t0">Cobus Bester</h3> 
																<div class="w3-separator bg-primary"></div>
																<div class="description m-b15">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text..</p>
																</div>
																<ul class="dlab-social-icon">
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-facebook facebook"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-twitter twitter"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-linkedin linkedin"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-whatsapp whatsapp"></a></li>
																</ul>
															</div>
														</div>
													</li>
													<li class="comment">
														<div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic3.jpg" alt="">
															<div class="comment-text">
																<h3 class="author m-t0">Cobus Bester</h3> 
																<div class="w3-separator bg-primary"></div>
																<div class="description m-b15">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
																</div>
																<ul class="dlab-social-icon">
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-facebook facebook"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-twitter twitter"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-linkedin linkedin"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-whatsapp whatsapp"></a></li>
																</ul>
															</div>
														</div>
													</li>
												</ol>
											</div>
										</div>
										<div id="review" class="tab-pane comments-area">
											<div class="row">
												<div class="col-md-4 col-sm-5 m-b30">
													<h5>Average Rating</h5>
													<div class="icon-bx-wraper bx-style-1 center rating-average">
														<h2 class="rating-title text-primary">4.5</h2>
														<div class="icon-content">
															<div class="star-rating">
																<div data-rating="3"> 
																	<i class="text-yellow fa fa-star" data-alt="1" title="regular"></i> 
																	<i class="text-yellow fa fa-star" data-alt="2" title="regular"></i> 
																	<i class="text-yellow fa fa-star-o" data-alt="3" title="regular"></i> 
																	<i class="text-yellow fa fa-star-o" data-alt="4" title="regular"></i> 
																	<i class="text-yellow fa fa-star-o" data-alt="5" title="regular"></i> 
																</div>
															</div>
															<p>100,453 ratings</p>
														</div>
													</div>
												</div>	
												<div class="col-md-8 col-sm-7 m-b30">
													<h5>Detailed Rating</h5>
													<div class="bar-rating">
														<ul class="bar-rating-chart icon-bx-wraper bx-style-1 p-a30">
															<li class="input-group"> 
																<div class="input-group-prepend">
																	<span class="input-group">5 stars</span>
																</div> 
																<div class="bar">
																	<div class="bar-rat bg-primary" style="width:100%"></div>
																</div>
																<div class="input-group-prepend">
																	<span class="input-group">5</span>
																</div> 
															</li>
															<li class="input-group"> 
																<div class="input-group-prepend">
																	<span class="input-group">4 stars</span></div> 
																<div class="bar">
																	<div class="bar-rat bg-primary" style="width:80%"></div>
																</div>
																<div class="input-group-prepend">
																	<span class="input-group">4</span> 
																</div> 
															</li>
															<li class="input-group"> 
																<div class="input-group-prepend">
																	<span class="input-group">3 stars</span></div> 
																<div class="bar">
																	<div class="bar-rat bg-primary" style="width:60%"></div>
																</div>
																<div class="input-group-prepend">
																	<span class="input-group">3</span> 
																</div> 
															</li>
															<li class="input-group"> 
																<div class="input-group-prepend">
																	<span class="input-group">2 stars</span></div> 
																<div class="bar">
																	<div class="bar-rat bg-primary" style="width:40%"></div>
																</div>
																<div class="input-group-prepend">
																	<span class="input-group">2</span>	
																</div> 															
															</li>
															<li class="input-group"> 
																<div class="input-group-prepend">
																	<span class="input-group">1 stars</span></div> 
																<div class="bar">
																	<div class="bar-rat bg-primary" style="width:20%"></div>
																</div>
																<div class="input-group-prepend">
																	<span class="input-group">1</span>
																</div> 
															</li>
														</ul>
													</div>
												</div>
											</div>	
											
											<div id="comments">
												<ol class="commentlist">
													<li class="comment">
														<div class="comment_container"> 
															<img class="avatar avatar-60 photo" src="images/testimonials/pic1.jpg" alt="">
															<div class="comment-text">
																<div class="star-rating">
																	<div data-rating="3"> 
																		<i class="fa fa-star text-yellow" data-alt="1" title="regular"></i> 
																		<i class="fa fa-star text-yellow" data-alt="2" title="regular"></i> 
																		<i class="fa fa-star-o text-yellow" data-alt="3" title="regular"></i> 
																		<i class="fa fa-star-o text-yellow" data-alt="4" title="regular"></i> 
																		<i class="fa fa-star-o text-yellow" data-alt="5" title="regular"></i> 
																	</div>
																</div>
																<p class="meta"> 
																	<strong class="author">Cobus Bester</strong> 
																	<span><i class="fa fa-clock-o"></i> March 7, 2013</span> 
																</p>
																<div class="description">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
																</div>
															</div>
														</div>
													</li>
													<li class="comment">
														<div class="comment_container"> 
															<img class="avatar avatar-60 photo" src="images/testimonials/pic2.jpg" alt="">
															<div class="comment-text">
																<div class="star-rating">
																	<div data-rating="3"> 
																		<i class="fa fa-star text-yellow" data-alt="1" title="regular"></i> 
																		<i class="fa fa-star text-yellow" data-alt="2" title="regular"></i> 
																		<i class="fa fa-star text-yellow" data-alt="3" title="regular"></i> 
																		<i class="fa fa-star-o text-yellow" data-alt="4" title="regular"></i> 
																		<i class="fa fa-star-o text-yellow" data-alt="5" title="regular"></i> 
																	</div>
																</div>
																<p class="meta"> 
																	<strong class="author">Cobus Bester</strong> 
																	<span><i class="fa fa-clock-o"></i> March 7, 2013</span> 
																</p>
																<div class="description">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
																</div>
															</div>
														</div>
													</li>
													<li class="comment">
														<div class="comment_container"> 
															<img class="avatar avatar-60 photo" src="images/testimonials/pic3.jpg" alt="">
															<div class="comment-text">
																<div class="star-rating">
																	<div data-rating="3"> 
																		<i class="fa fa-star text-yellow" data-alt="1" title="regular"></i> 
																		<i class="fa fa-star text-yellow" data-alt="2" title="regular"></i> 
																		<i class="fa fa-star text-yellow" data-alt="3" title="regular"></i> 
																		<i class="fa fa-star text-yellow" data-alt="4" title="regular"></i> 
																		<i class="fa fa-star-o text-yellow" data-alt="5" title="regular"></i> 
																	</div>
																</div>
																<p class="meta"> 
																	<strong class="author">Cobus Bester</strong> 
																	<span><i class="fa fa-clock-o"></i> March 7, 2013</span> 
																</p>
																<div class="description">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
																</div>
															</div>
														</div>
													</li>
												</ol>
											</div>
											<div class="comment-respond" id="respond">
												<div class="section-head">
													<h5 class="widget-title style-1">LEAVE A REPLY</h5>
												</div>
												<h3 class="comment-reply-title" id="reply-title">
													<small> <a style="display:none;" href="javascript:void(0);" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small>
												</h3>
												<form class="comment-form" id="commentform" method="post">
													<p class="comment-form-author">
														<label for="author">Name <span class="required">*</span></label>
														<input type="text" value="" placeholder="Name" id="author">
													</p>
													<p class="comment-form-email">
														<label for="email">Email <span class="required">*</span></label>
														<input type="text" value="" placeholder="Email" id="email">
													</p>
													<p class="comment-form-comment">
														<label for="comment">Comment</label>
														<textarea rows="8" placeholder="Add a Comment" id="comment"></textarea>
													</p>
													<p class="form-submit">
														<input type="submit" value="Post Comment" class="site-button" id="submit">
													</p>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- left part start -->
				</div>
            </div>
        </div>
	</div>
    <!-- Content END-->
    <!-- Footer -->
   @endsection