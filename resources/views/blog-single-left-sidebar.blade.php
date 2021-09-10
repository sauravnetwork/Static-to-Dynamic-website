@extends('layout-blog')
@section('blog-single-left-sidebar')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Blog single with left sidebar</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Blog single with left sidebar</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-xl-3 col-lg-4 col-md-12">
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
													<li class="post-date"> <strong>13 Aug</strong> </li>
													<li class="post-author"> By <a href="javascript:void(0);">Jack </a> </li>
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
													<li class="post-date"> <strong>13 Aug</strong> </li>
													<li class="post-author"> By <a href="javascript:void(0);">Jamie </a> </li>
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
													<li class="post-date"> <strong>13 Aug</strong> </li>
													<li class="post-author"> By <a href="javascript:void(0);">Winnie </a> </li>
												</ul>
											</div>
											<div class="dlab-post-header">
                                                <h6 class="post-title"><a href="blog-single-left-sidebar.html">Five Things Nobody Told You About</a></h6>
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
                    <!-- Left part start -->
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <!-- blog start -->
						<div class="blog-post blog-single sidebar">
							<div class="dlab-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">Caroline</a> </li>
										<li class="post-date"> <i class="la la-clock"></i> <strong>01 June</strong> <span> 2020</span> </li>
										<li class="post-tag"> <a href="javascript:void(0);">Education</a> </li>
									</ul>
								</div>
								<h2 class="dlab-title">Here's What People Are Saying About</h2>
								<div class="dlab-media">
									<a href="javascript:;"><img src="images/blog/default/thum3.jpg" alt=""></a>
								</div>
								<div class="dlab-post-text text">
									<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada nulla bibendum. Proin varius sollicitudin nulla quis fermentum. Nunc vitae arcu eget diam gravida ultrices finibus nec mi. Maecenas egestas libero.</p>
									<p>Donec ultricies convallis urna. Morbi consequat vestibulum nunc sed semper. Proin iaculis risus eleifend, efficitur eros et, tristique tortor. Integer nec lacinia augue. Curabitur mattis vel orci id mattis. Aliquam eu dignissim sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris vitae fermentum quam.</p>
									<ul>
										<li><a href="javascript:void(0);">Duis auctor sed elit quis consequat.</a> Fusce est quam, sodales vel eros vitae, dictum consectetur dolor. Fusce convallis mauris tellus, eu aliquet magna aliquet eget.</li>
										<li>Nam iaculis, <a href="javascript:void(0);">enim ut elementum maximus, quam lectus convallis metus, </a>id suscipit risus lectus id urna. Cras viverra consectetur diam. Morbi sed consequat tellus, in vehicula urna.</li>
										<li><a href="javascript:void(0);">Morbi sit amet diam sodales, sodales purus quis, </a>feugiat turpis. Maecenas elementum mauris quis plac erat maximus. <a href="javascript:void(0);">Curabitur elementum lobortis malesuada.</a></li>
									</ul>
									<p>Aliquam laoreet fringilla velit, quis pulvinar ex bibendum vestibulum. Aenean vel dapibus ex. Curabitur sodales dui ut hendrerit volutpat. Phasellus fringilla semper urna, eu dapibus lacus porttitor at. Sed eget pellentes orci. Aliquam pulvinar augue sed molestie semper. Integer ullamcorper magna fringilla arcu rutrum, sed porttitor ex viverra. </p>
									<ul class="wp-block-gallery columns-3">
										<li class="blocks-gallery-item"><img alt="" src="images/gallery/pic2.jpg"></li>
										<li class="blocks-gallery-item"><img alt="" src="images/gallery/pic1.jpg"></li>
									</ul>
									<h4>Curabitur elementum lobortis malesuada.</h4>
									<p>Aliquam laoreet fringilla velit, quis pulvinar ex bibendum vestibulum. Aenean vel dapibus ex. Curabitur sodales dui ut hendrerit volutpat. Phasellus fringilla semper urna, eu dapibus lacus porttitor at. Sed eget pellentes orci. Aliquam pulvinar augue sed molestie semper. Integer ullamcorper magna fringilla arcu rutrum, sed porttitor ex viverra. </p>
									<blockquote class="wp-block-quote">
										<p>Use this static Page to test the Theme’s handling of the Blog Posts Index page. If the site is set to display a static Page on the Front Page, and this Page is.</p>
										<cite>WordPress Community</cite>
									</blockquote>
									<p>Cras ac erat sapien. Etiam porta, arcu sed scelerisque dapibus, orci felis tincidunt tellus, at bibendum ex velit ac dolor. Aenean auctor, lectus laoreet efficitur dapibus, orci nulla ultrices risus, sed volutpat nisl nulla at felis. Integer ligula risus, ultricies eu velit non, rutrum consectetur neque. Sed ullamcorper sed massa quis hendrerit. </p>
									<p>Nulla ultrices diam at odio malesuada lacinia. Fusce eget posuere purus. Donec accumsan vehicula mi, id imperdiet nulla ornare eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
									<p>Praesent vehicula neque et augue consectetur placerat. Ut pellentesque euismod sapien eget venenatis. Proin massa lacus, dapibus a scelerisque a, molestie sit amet mauris. Cras maximus lectus quis orci feugiat, at tristique velit bibendum. Etiam augue arcu, cursus id egestas ut, viverra at urna. Quisque ipsum sit amet aliquet tempus. </p>
									
								</div>
								<div class="post-footer">
									<div class="dlab-meta">
										<span class="title">TAGS : </span>
										<ul class="tag-list">
											<li class="post-tag"><a href="tags.html">#Lifestyle</a></li>
											<li class="post-tag"><a href="tags.html">#Blog</a></li>
											<li class="post-tag"><a href="tags.html">#Instagram</a></li>
											<li class="post-tag"><a href="tags.html">#Image</a></li>
										</ul>
									</div>
									<div class="share-post">
										<ul class="list-inline m-b0">
											<li><a href="javascript:void(0);" class="site-button sharp radius-xl facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="javascript:void(0);" class="site-button sharp radius-xl instagram"><i class="fa fa-instagram"></i></a></li>
											<li><a href="javascript:void(0);" class="site-button sharp radius-xl twitter"><i class="fa fa-twitter"></i></a></li>
											<li><a href="javascript:void(0);" class="site-button sharp radius-xl linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="clear m-b30" id="comment-list">
							<div class="comments-area" id="comments">
								<div class="section-head">
									<h5 class="widget-title style-1">Comments</h5>
								</div>
								<!-- comment list END -->
								<ol class="comment-list">
									<li class="comment">
										<div class="comment-body">
											<div class="comment-author vcard"> 
												<img  class="avatar photo" src="images/testimonials/pic2.jpg" alt=""> 
												<cite class="fn">Stacy poe</cite> 
												<span class="says">says:</span> 
												 <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
												<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
											</div>
											<div class="comment-content">
												<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
											</div>
										</div>
										<ol class="children">
											<li class="comment odd parent">
												<div class="comment-body">
													<div class="comment-author vcard"> 
														<img  class="avatar photo" src="images/testimonials/pic3.jpg" alt=""> 
														<cite class="fn">Muhammad Clay</cite> 
														<span class="says">says:</span> 
														 <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
														<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
													</div>
													<div class="comment-content">
														<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
													</div>
												</div>
											</li>
										</ol>
										<!-- list END -->
									</li>
									<li class="comment">
										<div class="comment-body">
											<div class="comment-author vcard"> 
												<img  class="avatar photo" src="images/testimonials/pic2.jpg" alt=""> 
												<cite class="fn">Leo Tucker</cite> 
												<span class="says">says:</span> 
												 <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
												<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
											</div>
											<div class="comment-content">
												<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
											</div>
										</div>
										<ol class="children">
											<li class="comment odd parent">
												<div class="comment-body">
													<div class="comment-author vcard"> 
														<img  class="avatar photo" src="images/testimonials/pic3.jpg" alt=""> 
														<cite class="fn">Shailja Reddy</cite> 
														<span class="says">says:</span> 
														 <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
														<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
													</div>
													<div class="comment-content">
														<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
													</div>
												</div>
											</li>
										</ol>
										<!-- list END -->
									</li>
								</ol>
								<!-- comment list END -->
							</div>
						</div>
						<!-- Form -->
						<div class="comments-area" id="respond">
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
						<!-- blog END -->
                    </div>
                    <!-- Left part END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
	@endsection