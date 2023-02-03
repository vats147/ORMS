<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<!-- <div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div> -->

		<?php
				include "adminsidebar.php";
		?>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Gallery</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Manage Gallery
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>

					<!-- <div class="row clearfix">
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Default Tab</h5>
								<div class="tab">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a
												class="nav-link active text-blue"
												data-toggle="tab"
												href="#home"
												role="tab"
												aria-selected="true"
												>Home</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#profile"
												role="tab"
												aria-selected="false"
												>Profile</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#contact"
												role="tab"
												aria-selected="false"
												>Contact</a
											>
										</li>
									</ul>
									<div class="tab-content">
										<div
											class="tab-pane fade show active"
											id="home"
											role="tabpanel"
										>
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="profile" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="contact" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Customtab Tab</h5>
								<div class="tab">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a
												class="nav-link active"
												data-toggle="tab"
												href="#home2"
												role="tab"
												aria-selected="true"
												>Home</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link"
												data-toggle="tab"
												href="#profile2"
												role="tab"
												aria-selected="false"
												>Profile</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link"
												data-toggle="tab"
												href="#contact2"
												role="tab"
												aria-selected="false"
												>Contact</a
											>
										</li>
									</ul>
									<div class="tab-content">
										<div
											class="tab-pane fade show active"
											id="home2"
											role="tabpanel"
										>
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="profile2" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="contact2" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">vertical Tab</h5>
								<div class="tab">
									<div class="row clearfix">
										<div class="col-md-3 col-sm-12">
											<ul class="nav flex-column vtabs nav-tabs" role="tablist">
												<li class="nav-item">
													<a
														class="nav-link active"
														data-toggle="tab"
														href="#home3"
														role="tab"
														aria-selected="true"
														>Home</a
													>
												</li>
												<li class="nav-item">
													<a
														class="nav-link"
														data-toggle="tab"
														href="#profile3"
														role="tab"
														aria-selected="false"
														>Profile</a
													>
												</li>
												<li class="nav-item">
													<a
														class="nav-link"
														data-toggle="tab"
														href="#contact3"
														role="tab"
														aria-selected="false"
														>Contact</a
													>
												</li>
											</ul>
										</div>
										<div class="col-md-9 col-sm-12">
											<div class="tab-content">
												<div
													class="tab-pane fade show active"
													id="home3"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
												<div
													class="tab-pane fade"
													id="profile3"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
												<div
													class="tab-pane fade"
													id="contact3"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Custom vertical Tab</h5>
								<div class="tab">
									<div class="row clearfix">
										<div class="col-md-3 col-sm-12">
											<ul
												class="nav flex-column vtabs nav-tabs customtab"
												role="tablist"
											>
												<li class="nav-item">
													<a
														class="nav-link active"
														data-toggle="tab"
														href="#home4"
														role="tab"
														aria-selected="true"
														>Home</a
													>
												</li>
												<li class="nav-item">
													<a
														class="nav-link"
														data-toggle="tab"
														href="#profile4"
														role="tab"
														aria-selected="false"
														>Profile</a
													>
												</li>
												<li class="nav-item">
													<a
														class="nav-link"
														data-toggle="tab"
														href="#contact4"
														role="tab"
														aria-selected="false"
														>Contact</a
													>
												</li>
											</ul>
										</div>
										<div class="col-md-9 col-sm-12">
											<div class="tab-content">
												<div
													class="tab-pane fade show active"
													id="home4"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
												<div
													class="tab-pane fade"
													id="profile4"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
												<div
													class="tab-pane fade"
													id="contact4"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Nav Pills Tabs</h5>
								<div class="tab">
									<ul class="nav nav-pills" role="tablist">
										<li class="nav-item">
											<a
												class="nav-link active text-blue"
												data-toggle="tab"
												href="#home5"
												role="tab"
												aria-selected="true"
												>Home</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#profile5"
												role="tab"
												aria-selected="false"
												>Profile</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#contact5"
												role="tab"
												aria-selected="false"
												>Contact</a
											>
										</li>
									</ul>
									<div class="tab-content">
										<div
											class="tab-pane fade show active"
											id="home5"
											role="tabpanel"
										>
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="profile5" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="contact5" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<div class="col-lg-100 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Image Category</h5>
								<div class="tab">
									<ul class="nav nav-pills justify-content-end" role="tablist">
										<li class="nav-item">
											<a
												class="nav-link active text-blue"
												data-toggle="tab"
												href="#home6"
												role="tab"
												aria-selected="true"
												>Home</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#profile6"
												role="tab"
												aria-selected="false"
												>Upload Image</a
											>
										</li>
										
										<!-- <li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#contact6"
												role="tab"
												aria-selected="false"
												>Contact</a
											>
										</li> -->
									</ul>
									<!-- <hr> -->
									<div class="tab-content">
										<div
											class="tab-pane fade show active"
											id="home6"
											role="tabpanel"
										>
                                        <div class="pd-ltr-20 xs-pd-20-10">
                                            <div class="min-height-200px">
                                                <!-- Caetegory is started -->
                                                <!-- Fade-in effect -->
                                                <!-- <hr> -->
                                                <h5 class="h4 text-blue mb-10">Ring Ceremeony</h5>
                                                <hr>
                                                <!-- <p class="mb-30">You can use by default <code>.da-overlay</code></p> -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo1.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                            <!-- <li>
                                                                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                                                                            </li> -->
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo2.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo3.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo4.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo4.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo4.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                
                                
                                            </div>

                                            <!-- Second cateegory start -->
                                            <div class="min-height-200px">
                                                <!-- Caetegory is started -->
                                                <!-- Fade-in effect -->
                                                <h5 class="h4 text-blue mb-10">Birthday</h5>
                                                <hr>
                                                <!-- <p class="mb-30">You can use by default <code>.da-overlay</code></p> -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo1.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                            <!-- <li>
                                                                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                                                                            </li> -->
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo2.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo3.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo4.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo4.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                        <div class="da-card">
                                                            <div class="da-card-photo">
                                                                <img src="vendors/images/photo4.jpg" alt="" />
                                                                <div class="da-overlay">
                                                                    <div class="da-social">
                                                                        <ul class="clearfix">
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><i class="fa fa-remove"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <!-- <div class="da-card-content">
                                                                <h5 class="h5 mb-10">Image 1</h5>
                                                                <p class="mb-0">Image Description</p>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                
                                
                                            </div>

                                        </div>
											
										</div>
										<div class="tab-pane fade" id="profile6" role="tabpanel">
											<p>We need Combine with php for more you can <a href="try.html" style="color:red ;">Try.html</a></p>
                                            <!-- Here We need to combine with my php -->

											<!-- <?php
												include "try.php";
											?>
											 -->
											
										</div>
										<div class="tab-pane fade" id="contact6" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Icons vertical Nav Pills Tab</h5>
								<div class="tab">
									<div class="row clearfix">
										<div class="col-md-3 col-sm-12">
											<ul
												class="nav flex-column nav-pills vtabs"
												role="tablist"
											>
												<li class="nav-item">
													<a
														class="nav-link active"
														data-toggle="tab"
														href="#home7"
														role="tab"
														aria-selected="true"
														><i class="fa fa-home"></i
													></a>
												</li>
												<li class="nav-item">
													<a
														class="nav-link"
														data-toggle="tab"
														href="#profile7"
														role="tab"
														aria-selected="false"
														><i class="fa fa-users"></i
													></a>
												</li>
												<li class="nav-item">
													<a
														class="nav-link"
														data-toggle="tab"
														href="#contact7"
														role="tab"
														aria-selected="false"
														><i class="fa fa-envelope-o"></i
													></a>
												</li>
											</ul>
										</div>
										<div class="col-md-9 col-sm-12">
											<div class="tab-content">
												<div
													class="tab-pane fade show active"
													id="home7"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
												<div
													class="tab-pane fade"
													id="profile7"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
												<div
													class="tab-pane fade"
													id="contact7"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Icons vertical Tab</h5>
								<div class="tab">
									<div class="row clearfix">
										<div class="col-md-3 col-sm-12">
											<ul class="nav flex-column nav-tabs vtabs" role="tablist">
												<li class="nav-item">
													<a
														class="nav-link active"
														data-toggle="tab"
														href="#home8"
														role="tab"
														aria-selected="true"
														><i class="fa fa-home"></i
													></a>
												</li>
												<li class="nav-item">
													<a
														class="nav-link"
														data-toggle="tab"
														href="#profile8"
														role="tab"
														aria-selected="false"
														><i class="fa fa-users"></i
													></a>
												</li>
												<li class="nav-item">
													<a
														class="nav-link"
														data-toggle="tab"
														href="#contact8"
														role="tab"
														aria-selected="false"
														><i class="fa fa-envelope-o"></i
													></a>
												</li>
											</ul>
										</div>
										<div class="col-md-9 col-sm-12">
											<div class="tab-content">
												<div
													class="tab-pane fade show active"
													id="home8"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
												<div
													class="tab-pane fade"
													id="profile8"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
												<div
													class="tab-pane fade"
													id="contact8"
													role="tabpanel"
												>
													<div class="pd-20">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														elit, sed do eiusmod tempor incididunt ut labore et
														dolore magna aliqua. Ut enim ad minim veniam, quis
														nostrud exercitation ullamco laboris nisi ut aliquip
														ex ea commodo consequat. Duis aute irure dolor in
														reprehenderit in voluptate velit esse cillum dolore
														eu fugiat nulla pariatur. Excepteur sint occaecat
														cupidatat non proident, sunt in culpa qui officia
														deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> -->
			</div>
		</div>
		<!-- welcome modal start
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button> -->
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>


        
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
