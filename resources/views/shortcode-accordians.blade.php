@extends('layout-element')
@section('shortcode-accordians')    
	
	<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Accordians</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Element</li>
							<li>Accordians</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="bg-white">
            <!-- Left & right section start -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Basic Default</h4>
							</div>
							<div class="dlab-accordion faq-1 box-sort-in m-b30 space active-bg accdown1" id="accordion001">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"> What are the different types of undergraduate degrees?</a> </h6>
									</div>
									<div id="collapse1" class="acod-body collapse show" data-parent="#accordion001">
										<div class="acod-content">
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" data-target="#collapse2" class="collapsed" aria-expanded="false">Can you work while studying in the United States?</a> </h6>
									</div>
									<div id="collapse2" class="acod-body collapse" data-parent="#accordion001">
										<div class="acod-content">
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse"  data-target="#collapse3" class="collapsed" aria-expanded="false">How long are your contracts?</a> </h6>
									</div>
									<div id="collapse3" class="acod-body collapse" data-parent="#accordion001">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Basic Accordion</h4>
							</div>
							<div class="dlab-accordion box-sort-in m-b30 space active-bg" id="accordion002">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse4" ><i class="ti-user m-r10"></i> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse4" class="acod-body collapse show" data-parent="#accordion002">
										<div class="acod-content">
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse5" class="collapsed"><i class="ti-ruler-pencil m-r10"></i> 2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse5" class="acod-body collapse" data-parent="#accordion002">
										<div class="acod-content">
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse6" class="collapsed"><i class="ti-settings m-r10"></i> 3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse6" class="acod-body collapse" data-parent="#accordion002">
										<div class="acod-content">
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Basic Accordion</h4>
							</div>
							<div class="dlab-accordion box-sort-in m-b30 space active-bg accdown1" id="accordion001">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse1" class="acod-body collapse show" data-parent="#accordion001">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" data-target="#collapse2" class="collapsed" aria-expanded="false">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse2" class="acod-body collapse" data-parent="#accordion001">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse"  data-target="#collapse3" class="collapsed" aria-expanded="false">3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse3" class="acod-body collapse" data-parent="#accordion001">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Accordion Bg Gradient 1</h4>
							</div>
							<div class="dlab-accordion box-sort-in m-b30 gradient-2 space" id="accordion003">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse7"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse7" class="acod-body collapse show" data-parent="#accordion003">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse8" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse8" class="acod-body collapse" data-parent="#accordion003">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse9" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse9" class="acod-body collapse" data-parent="#accordion003">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Accordion Bg Gradient 2</h4>
							</div>
							<div class="dlab-accordion box-sort-in m-b30 gradient-1 space" id="accordion004">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse10"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse10" class="acod-body collapse show" data-parent="#accordion004">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse11" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse11" class="acod-body collapse" data-parent="#accordion004">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse12" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse12" class="acod-body collapse" data-parent="#accordion004">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Accordion Bg Primary Active Bg</h4>
							</div>
							<div class="dlab-accordion box-sort-in m-b30 primary space active-bg" id="accordion005">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse13"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse13" class="acod-body collapse show" data-parent="#accordion005">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse14" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse14" class="acod-body collapse" data-parent="#accordion005">
										<div class="acod-content">Graphic design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse15" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse15" class="acod-body collapse" data-parent="#accordion005">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Defult Accordion </h4>
							</div><!-- Defult Accordion END -->
							<div class="dlab-accordion box-sort-in m-b30 green" id="accordion006">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse16"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse16" class="acod-body collapse show" data-parent="#accordion006">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse17" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse17" class="acod-body collapse" data-parent="#accordion006">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse18" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse18" class="acod-body collapse" data-parent="#accordion006">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Rounded Accordion</h4>
							</div>
							<!-- Rounded Accordion -->
							<div class="dlab-accordion box-sort-in rounded yellow m-b30" id="accordion007">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse19"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse19" class="acod-body collapse show" data-parent="#accordion007">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse20" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse20" class="acod-body collapse" data-parent="#accordion007">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse21" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse21" class="acod-body collapse" data-parent="#accordion007">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Defult Accordion </h4>
							</div>
							<!-- Defult Accordion -->
							<div class="dlab-accordion box-sort-in red bg-title m-b30" id="accordion008">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse22"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse22" class="acod-body collapse show" data-parent="#accordion008">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse23" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse23" class="acod-body collapse" data-parent="#accordion008">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse24" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse24" class="acod-body collapse" data-parent="#accordion008">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Rounded Accordion</h4>
							</div>
							<!-- Rounded Accordion -->
							<div class="dlab-accordion box-sort-in bg-title primary no-cover m-b30" id="accordion009">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse25"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse25" class="acod-body collapse show" data-parent="#accordion009">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse26" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse26" class="acod-body collapse" data-parent="#accordion009">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse27" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse27" class="acod-body collapse" data-parent="#accordion009">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Defult Accordion </h4>
							</div>
							<div class="dlab-accordion box-sort-in space m-b30 gradient-2" id="accordion0010">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse28"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse28" class="acod-body collapse show" data-parent="#accordion0010">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse29" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse29" class="acod-body collapse" data-parent="#accordion0010">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse30" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse30" class="acod-body collapse" data-parent="#accordion0010">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Rounded Accordion</h4>
							</div>
							<!-- Rounded Accordion -->
							<div class="dlab-accordion box-sort-in space bg-title m-b30 gradient-1" id="accordion0011">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse31"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse31" class="acod-body collapse show" data-parent="#accordion0011">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse32" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse32" class="acod-body collapse" data-parent="#accordion0011">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse33" class="collapsed">3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse33" class="acod-body collapse" data-parent="#accordion0011">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Defult Accordion</h4>
							</div>
							<!-- Defult Accordion -->
							<div class="dlab-accordion box-sort-in space m-b30" id="accordion0012">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse34"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse34" class="acod-body collapse show" data-parent="#accordion0012">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse35" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse35" class="acod-body collapse" data-parent="#accordion0012">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse36" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse36" class="acod-body collapse" data-parent="#accordion0012">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Rounded Accordion</h4>
							</div>
							<!-- Rounded Accordion -->
							<div class="dlab-accordion box-sort-in space bg-title no-cover m-b30 blue acco-sm" id="accordion0013">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse37" data-parent="#accordion110"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse37" class="acod-body collapse show" data-parent="#accordion0013">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse38" class="collapsed" data-parent="#accordion110">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse38" class="acod-body collapse" data-parent="#accordion0013">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse39" class="collapsed"  data-parent="#accordion110">3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse39" class="acod-body collapse" data-parent="#accordion0013">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Rounded Accordion</h4>
							</div>
							<!-- Rounded Accordion -->
							<div class="dlab-accordion box-sort-in space bg-title no-cover m-b30 blue acco-lg" id="accordion0014">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse40"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse40" class="acod-body collapse show" data-parent="#accordion0014">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse41" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse41" class="acod-body collapse" data-parent="#accordion0014">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse42" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse42" class="acod-body collapse" data-parent="#accordion0014">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Rounded Accordion</h4>
							</div>
							<!-- Rounded Accordion -->
							<div class="dlab-accordion box-sort-in space bg-title no-cover m-b30 blue acco-xl" id="accordion0015">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse43"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse43" class="acod-body collapse show" data-parent="#accordion0015">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse44" class="collapsed">2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse44" class="acod-body collapse" data-parent="#accordion0015">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse45" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse45" class="acod-body collapse" data-parent="#accordion0015">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30">
							<div class="sort-title clearfix text-center">
								<h4>Defult Accordion </h4>
							</div><!-- Defult Accordion END -->
							<div class="dlab-accordion box-sort-in m-b30 no-gap" id="accordion0016">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="true" data-target="#collapse46"> 1. Before you get started</a> </h6>
									</div>
									<div id="collapse46" class="acod-body collapse show" data-parent="#accordion0016">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse47" class="collapsed" >2. Versatile hosting plans and pricing</a> </h6>
									</div>
									<div id="collapse47" class="acod-body collapse" data-parent="#accordion0016">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" data-target="#collapse48" class="collapsed" >3. Compatibility with premium plugins</a> </h6>
									</div>
									<div id="collapse48" class="acod-body collapse" data-parent="#accordion0016">
										<div class="acod-content">
											<p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
											<p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet 
											dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</div>
        </div>
    </div>
    <!-- Content END-->
	@endsection