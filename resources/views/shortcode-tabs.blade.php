@extends('layout-element')
@section('shortcode-tabs')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Tabs</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Element</li>
							<li>Tabs</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="bg-white tabs-box-area">
            <!-- Left & right section start -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>Tabs defult</h4>
							</div>
							<!-- tabs defult -->
							<div class="section-content box-sort-in button-example p-t10 p-b30 tabs-site-button">
								<div class="dlab-tabs">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-1" class="active"><i class="ti-world"></i><span class="title-head">Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-1"><i class="ti-image"></i> <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-1"><i class="fa fa-cog"></i><span class="title-head">developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-1" class="tab-pane active">
											<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										</div>
										<div id="graphic-design-1" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.
											</p>
										</div>
										<div id="developement-1" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- tabs defult End -->
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs content border</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 tabs-site-button">
								<div class="dlab-tabs border">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-2" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-2"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-2"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-2" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-2" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-2" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs with background nav</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs bg-tabs">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-3" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-3"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-3"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-3" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-3" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-3" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs content border &amp; background nav</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs border bg-tabs">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-4" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-4"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-4"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-4" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-4" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-4" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs with background nav</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs border-top bg-tabs">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-5" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-5"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-5"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-5" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-5" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-5" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs content border &amp; background nav</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs border-top border bg-tabs">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-6" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-6"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-6"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-6" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-6" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-6" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>Pricing table-1 Columns 3 with gap</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30">
								<div class="dlab-tabs vertical">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-7" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-7"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-7"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-7" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-7" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-7" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs nav left &amp; content border</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs vertical  border">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-8" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-8"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-8"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-8" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-8" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-8" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs nav left &amp; backgound tabs</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs bg-tabs vertical">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-9" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-9"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-9"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-9" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-9" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-9" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs nav left &amp; content border</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs bg-tabs vertical  border">
									<ul class="nav  nav-tabs">
										<li><a data-toggle="tab" href="#web-design-10" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-10"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-10"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-10" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-10" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-10" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs nav right</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs vertical right">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-11" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-11"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-11"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-11" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-11" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-11" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs nav right &amp; content border</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs vertical right  border">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-12" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-12"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-12"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-12" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-12" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-12" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs nav right</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs bg-tabs vertical right">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-13" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-13"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-13"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-13" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-13" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-13" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-divider bg-gray-dark tb10"></div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="sort-title clearfix text-center">
								<h4>tabs nav right &amp; content border</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30 ">
								<div class="dlab-tabs bg-tabs vertical right  border">
									<ul class="nav nav-tabs">
										<li><a data-toggle="tab" href="#web-design-14" class="active"><i class="ti-world"></i> <span class="title-head">   Web design</span></a></li>
										<li><a data-toggle="tab" href="#graphic-design-14"><i class="ti-image"></i>  <span class="title-head">Graphic Design</span></a></li>
										<li><a data-toggle="tab" href="#developement-14"><i class="fa fa-cog"></i>  <span class="title-head">  developement</span></a></li>
									</ul>
									<div class="tab-content">
										<div id="web-design-14" class="tab-pane active">
											<p class="m-b0"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Suspendisse et justo. 
												Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="graphic-design-14" class="tab-pane">
											<p class="m-b0"><strong><em>Graphic Design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Praesent Suspendisse 
												et justo. mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
										<div id="developement-14" class="tab-pane">
											<p class="m-b0"><strong><em>Developement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
												Commyolk Suspendisse 
												et justo. Praesent mattis  augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
												commyolk augue aliquam ornare augue.</p>
										</div>
									</div>
                                </div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Left & right section  END -->
        </div>
    </div>
    <!-- Content END-->
    @endsection