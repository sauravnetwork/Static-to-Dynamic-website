@extends('layout-element')
@section('shortcode-all-widgets')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">All widgets</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index">Home</a></li>
							<li>Element</li>
							<li>All widgets</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row END -->
        <div class="section-full content-inner">
            <div class="container">
                    <!-- widgets grid start -->
                    <div id="masonry" class="dlab-blog-grid-3 row">
                        <!-- Search -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20">
                                <h4 class="widget-title">Search</h4>
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" type="text" class="form-control" placeholder="Write your text">
                                            <span class="input-group-btn">
												<button type="submit" class="site-button">
													<i class="fa fa-search"></i>
												</button>
                                            </span> 
										</div>
                                    </form>
                                </div>
								<div class="search-bx style-1 m-t30">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" type="text" class="form-control" placeholder="Enter your keywords...">
                                            <span class="input-group-btn">
												<button type="submit" class="site-button fa fa-search radius-no sharp"></button>
                                            </span> 
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Search end-->
						<!-- About Us -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget-about bg-white p-a20">
                                <h4 class="widget-title">About us</h4>
                                <div class="widget-about">
									<div class="dlab-box">
										<div class="dlab-media dlab-img-overlay4 radius-sm">
											<img src="images/about/about1.jpg" alt="">
										</div>
										<div class="dlab-info">
											<h5 class="dlab-title text-uppercase">About Us Content</h5>
											<p class="m-b10">Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur.</p>
											<a href="javascript:void(0);" class="site-button black outline outline-2 black button-sm">Read More</a>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <!-- About Us End-->
						<!-- Event Details -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_event_info bg-white p-a20">
                                <h4 class="widget-title">Event Details</h4>
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
                        </div>
                        <!-- Event Details End -->
						<!-- Search -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget-newslatter bg-white p-a20">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="news-box">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                    <form class="dzSubscribe" action="script/mailchamp.php" method="post">
										<div class="dzSubscribeMsg"></div>
                                        <div class="input-group">
                                            <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email"/>
											<button name="submit" value="Submit" type="submit" class="site-button btn-block radius-no m-t10">Subscribe Now</button>
                                        </div>
                                    </form>
								</div>
                            </div>
                        </div>
                        <!-- Search end-->
						<!-- Search -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget-project bg-white p-a20">
                                <h4 class="widget-title">Our Project</h4>
                                <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1">
									<div class="item"><img src="images/our-services/pic1.jpg" alt=""/></div>
									<div class="item"><img src="images/our-services/pic2.jpg" alt=""/></div>
									<div class="item"><img src="images/our-services/pic3.jpg" alt=""/></div>
								</div>
                            </div>
                        </div>
                        <!-- Search end-->
						<!-- Search -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget-testimonial bg-white p-a20">
                                <h4 class="widget-title">Testimonial Box</h4>
                                <div class="widget-project-box owl-carousel owl-none owl-theme owl-dots-black-full owl-loaded owl-drag text-center">
									<div class="item">
										<div class="testimonial">
											<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" alt="" width="100" height="100"></div>
											<div class="testimonial-text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
											</div>
											<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
										</div>
									</div>
									<div class="item">
										<div class="testimonial">
											<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" alt="" width="100" height="100"></div>
											<div class="testimonial-text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
											</div>
											<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
										</div>
									</div>
									<div class="item">
										<div class="testimonial">
											<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
											<div class="testimonial-text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
											</div>
											<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <!-- Search end-->
                        <!-- Recent Posts -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 recent-posts-entry">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> 
											<img src="images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> 
										</div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="javascript:void(0);">Jone</a></li>
                                                    <li class="post-comment"> 28</li>
                                                </ul>
                                            </div>
											<div class="dlab-post-header">
                                                <h6 class="post-title"><a href="javascript:void(0);">Title of first blog post entry</a></h6>
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
													<li class="post-author">By <a href="javascript:void(0);">Jone</a></li>
                                                    <li class="post-comment"> 28</li>
                                                </ul>
                                            </div>
											<div class="dlab-post-header">
                                                <h6 class="post-title"><a href="javascript:void(0);">Title of first blog post entry</a></h6>
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
                                                    <li class="post-author">By <a href="javascript:void(0);">Jone</a></li>
                                                    <li class="post-comment"> 28</li>
                                                </ul>
                                            </div>
											<div class="dlab-post-header">
												<h6 class="post-title"><a href="javascript:void(0);">Title of first blog post entry</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Posts END-->
                        <!-- Categories List -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 widget_categories">
                                <h4 class="widget-title">Categories List</h4>
                                <ul>
                                    <li><a href="javascript:void(0);">aciform</a> (1)</li>
                                    <li><a href="javascript:void(0);">championship</a> (1) </li>
                                    <li><a href="javascript:void(0);">chastening</a> (1) </li>
                                    <li><a href="javascript:void(0);">clerkship</a> (1) </li>
                                    <li><a href="javascript:void(0);">disinclination</a> (1) </li>
                                    <li><a href="javascript:void(0);">disinfection</a> (1) </li>
                                    <li><a href="javascript:void(0);">dispatch</a> (1) </li>
                                    <li><a href="javascript:void(0);">echappee</a> (1) </li>
                                    <li><a href="javascript:void(0);">Edge Case</a> (6) </li>
                                    <li><a href="javascript:void(0);">enphagy</a> (1) </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Categories List END -->
                        <!-- Tags -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 widget_tag_cloud">
                                <h4 class="widget-title">Tags</h4>
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
                        </div>
                        <!-- Tags END-->
                        <!-- Contact us -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 widget_getintuch">
                                <h4 class="widget-title">Contact us</h4>
                                <ul>
                                    <li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                                    <li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support Line)<br>
                                        + (20) 1234 0078 (Fax)</li>
                                    <li><i class="ti-email"></i><strong>email</strong>info@demo.com</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contact us END -->
                        <!-- Our services -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 widget_services">
                                <h4 class="widget-title">Our services</h4>
                                <ul>
                                    <li><a href="javascript:void(0);">Residential Cargo</a></li>
                                    <li><a href="javascript:void(0);">Office Cargo</a></li>
                                    <li><a href="javascript:void(0);">Wall Painting</a></li>
                                    <li><a href="javascript:void(0);">Window Cargo</a></li>
                                    <li><a href="javascript:void(0);">Commercial Cargo</a></li>
                                    <li><a href="javascript:void(0);">Cargo Cargo</a></li>
                                    <li><a href="javascript:void(0);">Water Tank Cargo</a></li>
                                    <li><a href="javascript:void(0);">Cargo Solutions</a></li>
                                    <li><a href="javascript:void(0);">Air Duct Cargo</a></li>
                                    <li><a href="javascript:void(0);">Seasonal Cargo</a></li>
                                    <li><a href="javascript:void(0);">Wodden Floor Cargo</a></li>
                                    <li><a href="javascript:void(0);">Office Cargo</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Our services END -->
                        <!-- Our services -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 widget_gallery">
                                <h4 class="widget-title">Our Gallery</h4>
                                <ul id="lightgallery" class="lightgallery m-b0">
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
                                </ul>
                            </div>
                        </div>
                        <!-- Our services END -->
                        <!-- Archives List -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-1 widget_archive">
                                <h4 class="widget-title">Archives List</h4>
                                <ul>
                                    <li><a href="javascript:void(0);">May 2016</a>(1)</li>
                                    <li><a href="javascript:void(0);">January 2013</a>(5)</li>
                                    <li><a href="javascript:void(0);">March 2012</a>(5)</li>
                                    <li><a href="javascript:void(0);">January 2012</a>(6)</li>
                                    <li><a href="javascript:void(0);">March 2011</a>(1)</li>
                                    <li><a href="javascript:void(0);">October 2010</a>(1)</li>
                                    <li><a href="javascript:void(0);">September 2010</a>(2)</li>
                                    <li><a href="javascript:void(0);">August 2010</a>(3)</li>
                                    <li><a href="javascript:void(0);">July 2010</a>(1)</li>
                                    <li><a href="javascript:void(0);">June 2010</a>(3)</li>
                                    <li><a href="javascript:void(0);">May 2010</a>(1)</li>
                                    <li><a href="javascript:void(0);">April 2010</a>(1)</li>
                                    <li><a href="javascript:void(0);">March 2010</a>(1)</li>
                                    <li><a href="javascript:void(0);">February 2010</a>(1)</li>
                                    <li><a href="javascript:void(0);">January 2010</a>(1)</li>
                                    <li><a href="javascript:void(0);">October 2009</a>(1)</li>
                                    <li><a href="javascript:void(0);">September 2009</a>(1)</li>
                                    <li><a href="javascript:void(0);">August 2009</a>(1)</li>
                                    <li><a href="javascript:void(0);">July 2009</a>(1)</li>
                                    <li><a href="javascript:void(0);">June 2009</a>(1)</li>
                                    <li><a href="javascript:void(0);">May 2009</a>(1)</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Archives List END-->
                        <!-- Archives Dropdown -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-2 widget_archive">
                                <h4 class="widget-title">Archives Dropdown</h4>
                                <label for="archives-dropdown--1" class="screen-reader-text">Archives Dropdown</label>
                                <select onChange="document.location.href=this.options[this.selectedIndex].value;" name="archive-dropdown" id="archives-dropdown--1" class="bs-select-hidden">
                                    <option value="">Select Month</option>
                                    <option value="date"> May 2016 (1)</option>
                                    <option value="date"> January 2013 (5)</option>
                                    <option value="date"> March 2012 (5)</option>
                                    <option value="date"> January 2012 (6)</option>
                                    <option value="date"> March 2011 (1)</option>
                                    <option value="date"> October 2010 (1)</option>
                                    <option value="date"> September 2010 (2)</option>
                                    <option value="date"> August 2010 (3)</option>
                                    <option value="date"> July 2010 (1)</option>
                                    <option value="date"> June 2010 (3)</option>
                                    <option value="date"> May 2010 (1)</option>
                                    <option value="date"> April 2010 (1)</option>
                                    <option value="date"> March 2010 (1)</option>
                                    <option value="date"> February 2010 (1)</option>
                                    <option value="date"> January 2010 (1)</option>
                                    <option value="date"> October 2009 (1)</option>
                                    <option value="date"> September 2009 (1)</option>
                                    <option value="date"> August 2009 (1)</option>
                                    <option value="date"> July 2009 (1)</option>
                                    <option value="date"> June 2009 (1)</option>
                                    <option value="date"> May 2009 (1)</option>
                                </select>
                            </div>
                        </div>
                        <!-- Archives Dropdown END -->
                        <!-- Calendar -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-3 widget_calendar">
                                <h4 class="widget-title">Calendar</h4>
                                <div class="calendar_wrap" id="calendar_wrap">
                                    <table class="mb-0" id="wp-calendar">
                                        <caption>
                                        May 2016
                                        </caption>
                                        <thead>
                                            <tr>
                                                <th title="Monday" scope="col">M</th>
                                                <th title="Tuesday" scope="col">T</th>
                                                <th title="Wednesday" scope="col">W</th>
                                                <th title="Thursday" scope="col">T</th>
                                                <th title="Friday" scope="col">F</th>
                                                <th title="Saturday" scope="col">S</th>
                                                <th title="Sunday" scope="col">S</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <td id="prev" colspan="3"><a href="javascript:void(0);">« Jan</a></td>
                                                <td class="pad"></td>
                                                <td class="pad" id="next" colspan="3"></td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td class="pad" colspan="6"></td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <td>13</td>
                                                <td>14</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>17</td>
                                                <td>18</td>
                                                <td>19</td>
                                                <td id="today">20</td>
                                                <td>21</td>
                                                <td>22</td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>24</td>
                                                <td>25</td>
                                                <td>26</td>
                                                <td>27</td>
                                                <td>28</td>
                                                <td><a href="javascript:void(0);">29</a></td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>31</td>
                                                <td colspan="5" class="pad"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Calendar END -->
                        <!-- Categories Dropdown -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-5 widget_categories">
                                <h4 class="widget-title">Categories Dropdown</h4>
                                <label for="cat" class="screen-reader-text">Categories Dropdown</label>
                                <select class="postform bs-select-hidden" id="cat" name="cat">
                                    <option value="-1">Select Category</option>
                                    <option value="3" class="level-0">aciform(1)</option>
                                    <option value="47" class="level-1">sub(1)</option>
                                    <option value="4" class="level-0">antiquarianism(1)</option>
                                    <option value="5" class="level-0">arrangement(1)</option>
                                </select>
                            </div>
                        </div>
                        <!-- Categories Dropdown END-->
                        <!-- Pages -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-6 widget_pages">
                                <h4 class="widget-title">Pages</h4>
                                <ul>
                                    <li class="page_item"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="page_item"><a href="javascript:void(0);">Contact Us</a></li>
                                    <li class="page_item"><a href="javascript:void(0);">Front Page</a></li>
                                    <li class="page_item"><a href="javascript:void(0);">My Account</a></li>
                                    <li class="page_item"><a href="javascript:void(0);">Sample Page</a></li>
                                    <li class="page_item"><a href="javascript:void(0);">About The Tests</a>
                                        <ul class="children">
                                            <li class="page_item"><a href="javascript:void(0);">Page Image Alignment</a></li>
                                            <li class="page_item"><a href="javascript:void(0);">Page Markup And Formatting</a></li>
                                            <li class="page_item"><a href="javascript:void(0);">Clearing Floats</a></li>
                                            <li class="page_item"><a href="javascript:void(0);">Page with comments</a></li>
                                            <li class="page_item"><a href="javascript:void(0);">Page with comments disabled</a></li>
                                        </ul>
                                    </li>
                                    <li class="page_item"><a href="javascript:void(0);">Level 1</a>
                                        <ul class="children">
                                            <li class="page_item"><a href="javascript:void(0);">Level 2</a>
                                                <ul class="children">
                                                    <li class="page_item"><a href="javascript:void(0);">Level 3</a></li>
                                                    <li class="page_item"><a href="javascript:void(0);">Level 3a</a></li>
                                                    <li class="page_item"><a href="javascript:void(0);">Level 3b</a></li>
                                                </ul>
                                            </li>
                                            <li class="page_item"><a href="javascript:void(0);">Level 2a</a></li>
                                            <li class="page_item"><a href="javascript:void(0);">Level 2b</a></li>
                                        </ul>
                                    </li>
                                    <li class="page_item"><a href="javascript:void(0);">Lorem Ipsum</a></li>
                                    <li class="page_item"><a href="javascript:void(0);">Page A</a></li>
                                    <li class="page_item"><a href="#/">Page B</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Pages END -->
                        <!-- Meta -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-7 widget_meta">
                                <h4 class="widget-title">Meta</h4>
                                <ul>
                                    <li><a href="javascript:void(0);">Register</a></li>
                                    <li><a href="javascript:void(0);">Log in</a></li>
                                    <li><a href="javascript:void(0);">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="javascript:void(0);">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="javascript:void(0);">WordPress.org</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Meta END -->
                        <!-- Recent Comments -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-8 widget_recent_comments">
                                <h4 class="widget-title">Recent Comments</h4>
                                <ul id="recentcomments">
                                    <li class="recentcomments"> 
										<span class="comment-author-link">
											<a class="url" rel="external" href="javascript:void(0);">Mr WordPress</a>
										</span> on 
										<a href="javascript:void(0);">Hello world!</a> 
									</li>
                                    <li class="recentcomments"> 
										<span class="comment-author-link">
											<a class="url" rel="external" href="javascript:void(0);">Mr WordPress</a>
										</span> on 
										<a href="javascript:void(0);">Hello world!</a> 
									</li>
                                    <li class="recentcomments"> 
										<span class="comment-author-link">
											<a class="url" rel="external" href="javascript:void(0);">Mr WordPress</a>
										</span> on 
										<a href="javascript:void(0);">Hello world!</a> 
									</li>
                                    <li class="recentcomments"> 
										<span class="comment-author-link">
											<a class="url" rel="external" href="javascript:void(0);">Mr WordPress</a>
										</span> on 
										<a href="javascript:void(0);">Hello world!</a> 
									</li>
                                    <li class="recentcomments"> 
										<span class="comment-author-link">
											<a class="url" rel="external" href="javascript:void(0);">Mr WordPress</a>
										</span> on 
										<a href="javascript:void(0);">Hello world!</a> 
									</li>
                                    <li class="recentcomments"> 
										<span class="comment-author-link">
											<a class="url" rel="external" href="javascript:void(0);">Mr WordPress</a>
										</span> on 
										<a href="javascript:void(0);">Hello world!</a> 
									</li>
                                    <li class="recentcomments"> 
										<span class="comment-author-link">
											<a class="url" rel="external" href="javascript:void(0);">Mr WordPress</a>
										</span> on 
										<a href="javascript:void(0);">Hello world!</a> 
									</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Recent Comments END -->
                        <!-- Recent Posts -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-9 widget_recent_entries">
                                <h4 class="widget-title">Recent Posts</h4>
                                <ul>
                                    <li> <a href="javascript:void(0);">Hello world!</a> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Recent Posts END -->
                        <!-- RSS -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-10 widget_rss">
                                <h4 class="widget-title">RSS</h4>
                                <ul>
                                    <li> <a href="javascript:void(0);" class="rsswidget">Sleek Pique</a> <span class="rss-date">May 12, 2016</span>
                                        <div class="rssSummary">Pique (pronounced “peek”) made its debut in the WordPress.org repository this week. A spiffy scrolling front-page […]</div>
                                        <cite>Kathryn P.</cite> </li>
                                    <li> <a href="javascript:void(0);" class="rsswidget">Sleek Pique</a> <span class="rss-date">May 12, 2016</span>
                                        <div class="rssSummary">Pique (pronounced “peek”) made its debut in the WordPress.org repository this week. A spiffy scrolling front-page […]</div>
                                        <cite>Kathryn P.</cite> </li>
                                    <li> <a href="javascript:void(0);" class="rsswidget">Sleek Pique</a> <span class="rss-date">May 12, 2016</span>
                                        <div class="rssSummary">Pique (pronounced “peek”) made its debut in the WordPress.org repository this week. A spiffy scrolling front-page […]</div>
                                        <cite>Kathryn P.</cite> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- RSS END-->
                        <!-- Search -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-11 widget_search">
                                <h4 class="widget-title">Search</h4>
                                <form action="/" class="searchform" id="searchform" method="get" role="search">
                                    <div>
                                        <label for="s" class="screen-reader-text">Search for:</label>
                                        <input type="text" id="s" name="s" value="">
                                        <input type="submit" value="Search" id="searchsubmit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Search END -->
                        <!-- Text -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-12 widget_text">
                                <h4 class="widget-title">Text</h4>
                                <div class="textwidget">
                                    <p> <strong>Large image: Hand Coded</strong><br>
                                        <img alt="" src="images/gallery/pic3.jpg"><br>
                                        <strong>Large image: linked in a caption</strong> </p>
                                    <form action="/" method="get">
                                        <select name="widget" class="bs-select-hidden">
                                            <option value="0">First</option>
                                            <option value="1">Second</option>
                                            <option value="2">Third </option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Text END -->
                        <!-- Nav Menu -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
                            <div class="widget bg-white p-a20 monster-widget-placeholder-14 widget_nav_menu">
                                <h4 class="widget-title">Nav Menu</h4>
                                <div class="menu-testing-menu-container">
                                    <ul class="menu" id="menu-testing-menu">
                                        <li class="menu-item" id="menu-item-1046"><a href="javascript:void(0);">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="javascript:void(0);">Page Image Alignment</a></li>
                                                <li class="menu-item"><a href="javascript:void(0);">Page Image Alignment</a></li>
                                                <li class="menu-item"><a href="javascript:void(0);">Page Markup And Formatting</a></li>
                                                <li class="menu-item"><a href="javascript:void(0);">Page Markup And Formatting</a></li>
                                            </ul>
                                        </li>
                                        <li class=" menu-item"><a href="javascript:void(0);">Categories</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="javascript:void(0);">Markup</a></li>
                                                <li class="menu-item"><a href="javascript:void(0);">Post Formats</a></li>
                                                <li class="menu-item"><a href="javascript:void(0);">Unpublished</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="javascript:void(0);">Depth</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
													<a href="javascript:void(0);">Level 01</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
															<a href="javascript:void(0);">Level 02</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item">
																	<a href="javascript:void(0);">Level 03</a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
																			<a href="javascript:void(0);">Level 04</a>
                                                                            <ul class="sub-menu">
                                                                                <li class="menu-item">
																					<a href="javascript:void(0);">Level 05</a>
                                                                                    <ul class="sub-menu">
                                                                                        <li class="menu-item">
																							<a href="javascript:void(0);">Level 06</a>
                                                                                            <ul class="sub-menu">
                                                                                                <li class="menu-item">
																									<a href="javascript:void(0);">Level 07</a>
                                                                                                    <ul class="sub-menu">
                                                                                                        <li class="menu-item">
																											<a href="javascript:void(0);">Level 08</a>
                                                                                                            <ul class="sub-menu">
                                                                                                                <li class="menu-item">
																													<a href="javascript:void(0);">Level 09</a>
                                                                                                                    <ul class="sub-menu">
                                                                                                                        <li class="menu-item">
																															<a href="javascript:void(0);">Level 10</a>
																														</li>
                                                                                                                    </ul>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="javascript:void(0);">Advanced</a>
                                            <ul class="sub-menu">
                                                <li class=" menu-item"><a href="javascript:void(0);">Menu Title Attribute</a></li>
                                                <li class="menu-menu"><a href="javascript:void(0);">Menu CSS Class</a></li>
                                                <li class=" menu-item"><a href="javascript:void(0);">New Window / Tab</a></li>
                                            </ul>
                                        </li>
                                        <li class=" menu-item"><a href="javascript:void(0);">Menu Description</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Nav Menu END -->
						<!-- Text -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
							<div class="widget bg-white p-a20 widget_about">
                                <h4 class="widget-title">About Us</h4>
								<p class="mm-t5">Contrary to popular belief, Lorem simply random text. It has roots in a piece of classical Latin literature.</p>
								<ul class="contact-info-bx">
									<li><i class="las la-map-marker"></i><strong>Address</strong> 20 , New York 10010 </li>
									<li><i class="las la-phone-volume"></i><strong>Phone</strong> 0800-123456</li>
									<li><i class="las la-envelope-open"></i><strong>Email</strong> info@example.com</li>
								</ul>
                            </div>
                        </div>
                        <!-- Text END -->
						<!-- Text -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
							<div class="widget bg-white p-a20">
                                <h4 class="widget-title">Opening Hours</h4>
								<ul class="thsn-timelist-list mm-t5">
									<li><span class="thsn-timelist-li-title">Mon – Tue</span><span class="thsn-timelist-li-value">10:00 – 18:00</span></li>
									<li><span class="thsn-timelist-li-title">Wed – Thur</span><span class="thsn-timelist-li-value">10:00 – 17:00</span></li>
									<li><span class="thsn-timelist-li-title">Fri – Sat</span><span class="thsn-timelist-li-value">10:00 – 12:30</span></li>
									<li><span class="thsn-timelist-li-title">Saturday</span><span class="thsn-timelist-li-value">10:00 – 12:30</span></li>
									<li><span class="thsn-timelist-li-title">Sunday</span><span class="thsn-timelist-li-value">Closed</span></li>
								</ul>
                            </div>
                        </div>
                        <!-- Text END -->
						<!-- Text -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
							<div class="widget bg-white p-a20 widget_services">
								<h4 class="widget-title">Information</h4>
								<ul class="list-2">
									<li><a href="index">Home</a></li>
									<li><a href="about-1">About </a></li>
									<li><a href="faqs">Faq</a></li>
									<li><a href="event">Event</a></li>
									<li><a href="blog-grid-2">Blog</a></li>
									<li><a href="gallery-grid-2">Gallery</a></li>
									<li><a href="courses">Courses</a></li>
									<li><a href="contact-1">Contact</a></li>
								</ul>
							</div>
                        </div>
                        <!-- Text END -->
						<!-- Text -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
							<div class="widget p-a20 bg-white">
								<h4 class="widget-title">Newsletter</h4>
								<div class="subscribe-form m-b20">
									<form class="dzSubscribe" action="script/mailchamp.php" method="post">
										<div class="dzSubscribeMsg"></div>
										<div>
											<input name="dzEmail" required="required" class="form-control m-b20" placeholder="Your Email Address" type="email">
											<button name="submit" value="Submit" type="submit" class="site-button btnhover12">Subscribe</button>
										</div>
									</form>
								</div>
							</div>
                        </div>
                        <!-- Text END -->
						<!-- Text -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
							<div class="widget p-a20 bg-white">
								<h4 class="widget-title">Newsletter</h4>
								<div class="subscribe-form m-b20 m-t15">
									<form class="dzSubscribe" action="script/mailchamp.php" method="post">
										<div class="dzSubscribeMsg"></div>
										<div class="input-group">
											<input name="dzEmail" required="required" class="form-control radius-sm" placeholder="Your Email Id" type="email">
											<span class="input-group-btn">
												<button name="submit" value="Submit" type="submit" class="site-button radius-sm btn-tb btnhover19">SEND</button>
											</span> 
										</div>
									</form>
								</div>
								<h4 class="widget-title">Connect with us</h4>
								<ul class="list-inline m-a0">
									<li><a href="javascript:void(0);" class="site-button facebook sharp"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:void(0);" class="site-button google-plus sharp"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="javascript:void(0);" class="site-button linkedin sharp"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="javascript:void(0);" class="site-button instagram sharp"><i class="fa fa-instagram"></i></a></li>
									<li><a href="javascript:void(0);" class="site-button twitter sharp"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
                        </div>
                        <!-- Text END -->
						<!-- Text -->
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6">
							<div class="widget p-a20 bg-white">
								<h4 class="widget-title">QUICK LINKS</h4>
								<ul class="list-2">
									<li><a href="about-1">About Us</a></li>
									<li><a href="blog-grid-2">Blog</a></li>
									<li><a href="services-1">Services</a></li>
									<li><a href="privacy-policy">Privacy Policy</a></li>
									<li><a href="gallery-grid-2">Gallery </a></li>
									<li><a href="help-desk">Help Desk </a></li>
									<li><a href="shop">Shop</a></li>
									<li><a href="contact-1">Contact</a></li>
								</ul>
							</div>
                        </div>
                        <!-- Text END -->
                    </div>
                    <!-- widgets grid END -->
               
            </div>
        </div>
    </div>
    <!-- Content END-->
 @endsection