@extends('layout-pages')
@section('error-404')
    <!-- Content -->
    <div class="page-content">
        <!-- Error Page -->
		<div class="section-full dz_error-405 content-inner overlay-black-dark" style="background-image:url(images/background/bg1.jpg); background-position: 50% 50%;">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 text-center text-gray m-tb30">
						<div class="dz_error">403</div>
					</div>
					<div class="col-lg-7 m-b30">
						<h2 class="error-head text-gray">Something went wrong !</h2>
						<p class="font-16 text-gray">We are sorry but it appears that the page you are looking for could not be found. We are working on it and we will get it fixed as soon as possible.</p>
						<div class="dlab-divider bg-gray-dark"></div>
						<p class="text-gray">You can go back to the Main Page by clicking the button.</p>
						<div class="widget">
                            <div class="subscribe-form p-a0 col-lg-6 col-md-6">
								<form>
									<div class="input-group">
										<input name="text" class="form-control radius-no" placeholder="Search For Pages" type="text">
										<span class="input-group-btn">
											<button type="submit" class="site-button radius-no">SEARCH</button>
										</span> 
									</div>
								</form>
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- Error Page END -->
    </div>
    <!-- Content END-->
    @endsection