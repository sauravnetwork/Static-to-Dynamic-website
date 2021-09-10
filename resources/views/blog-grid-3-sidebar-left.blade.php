@extends('layout-blog')
@section('blog-grid-3-sidebar-left')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Blog grid 3 with left sidebar</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index">Home</a></li>
							<li>Blog grid 3 with left sidebar</li>
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
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                        <aside class="side-bar sticky-top">
                            <div class="widget">
                                <h5 class="widget-title style-1">Search</h5>
                                <div class="search-bx style-1">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
                                            <span class="input-group-btn">
												<button type="submit" class="fa fa-search site-button sharp radius-no"></button>
                                            </span> 
										</div>
                                    </form>
                                </div>
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
                                                <h6 class="post-title"><a href="blog-single-left-sidebar">Why is Early Education Essential?</a></h6>
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
                                                <h6 class="post-title"><a href="blog-single-left-sidebar">Here's What People Are Saying About</a></h6>
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
                                                <h6 class="post-title"><a href="blog-single-left-sidebar">Five Things Nobody Told You About</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
							<div class="widget widget_tag_cloud radius">
                                <h5 class="widget-title style-1">Tags</h5>
                                <div class="tagcloud"> 
									<a href="javascript:void(0);">Design</a> 
									<a href="javascript:void(0);">User interface</a> 
									<a href="javascript:void(0);">SEO</a> 
									<a href="javascript:void(0);">WordPress</a> 
									<a href="javascript:void(0);">Development</a> 
									<a href="javascript:void(0);">Joomla</a> 
									<a href="javascript:void(0);">Design</a> 
									<a href="javascript:void(0);">User interface</a> 
									<a href="javascript:void(0);">SEO</a> 
									<a href="javascript:void(0);">WordPress</a> 
									<a href="javascript:void(0);">Development</a> 
									<a href="javascript:void(0);">Joomla</a> 
									<a href="javascript:void(0);">Design</a> 
									<a href="javascript:void(0);">User interface</a> 
									<a href="javascript:void(0);">SEO</a> 
									<a href="javascript:void(0);">WordPress</a> 
									<a href="javascript:void(0);">Development</a> 
									<a href="javascript:void(0);">Joomla</a> 
								</div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                    <!-- left part start -->
                    <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                         
                            <!-- blog grid  -->
                            <div id="masonry" class="dlab-blog-grid-3">
                                <div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic1.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Jamie</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">KNOWLEDGE</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">Why is Early Education Essential?</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic2.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Reuben</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">Event</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title">
												<h4 class="post-title"><a href="blog-single">The Shocking Revelation</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic3.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Caroline</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">Education</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">Five Things Nobody Told You About</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic4.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Harry</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">knowledge</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">Here's What People Are Saying About</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic1.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Anna</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">event</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">How Education Can Ease Your Pain </a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic2.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Oliver</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">education</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">Why You Should Not Go To Education</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic1.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Jamie</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">KNOWLEDGE</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">Why is Early Education Essential?</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic2.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Reuben</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">Event</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title">
												<h4 class="post-title"><a href="blog-single">The Shocking Revelation</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic3.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Caroline</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">Education</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">Five Things Nobody Told You About</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic4.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Harry</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">knowledge</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">Here's What People Are Saying About</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic1.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Anna</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">event</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">How Education Can Ease Your Pain </a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="post card-container col-xl-4 col-lg-6 col-md-12 col-sm-12">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
										<div class="dlab-post-media dlab-img-effect"> 
											<a href="blog-single"><img src="images/blog/grid/pic2.jpg" alt=""></a> 
										</div>
										<div class="dlab-info p-a20">
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Oliver</a> </li>
													<li class="post-tag"> <a href="javascript:void(0);">education</a> </li>
												</ul>
											</div>
											<div class="dlab-post-title ">
												<h4 class="post-title"><a href="blog-single">Why You Should Not Go To Education</a></h4>
											</div>
											<div class="dlab-post-text">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
											</div>
											<div class="post-footer">
												<div class="dlab-post-meta">
													<ul>
														<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
													</ul>
												</div>
												<ul class="dlab-social-icon dez-border">
													<li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
													<li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
													<li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
                            </div>
                            <!-- blog grid END -->
                            <!-- Pagination  -->
                            <div class="pagination-bx rounded-sm primary clearfix col-md-12 text-center">
								<ul class="pagination">
									<li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>
									<li class="active"><a href="javascript:void(0);">1</a></li>
									<li><a href="javascript:void(0);">2</a></li>
									<li><a href="javascript:void(0);">3</a></li>
									<li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>
								</ul>
							</div>
                            <!-- Pagination END -->
                        
                    </div>
                    <!-- left part END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
	@endsection