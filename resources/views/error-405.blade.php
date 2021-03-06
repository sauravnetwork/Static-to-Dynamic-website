@extends('layout-pages')
@section('error-405')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Error Page -->
		<div class="section-full dz_error-405 content-inner bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 text-center m-tb30">
						<div class="dz_error">405</div>
					</div>
					<div class="col-lg-7 m-b30">
						<h2 class="error-head">Server Error!</h2>
						<div class="dlab-divider bg-gray-dark"></div>
						<p class="font-16 error-content">You can go back to the Main Page by clicking the button.</p>
						<a href="index.html" class="site-button">Go To Home</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Error Page END -->
    </div>
    <!-- Content END-->
   
@endsection
