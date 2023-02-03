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
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/cropperjs/dist/cropper.css"
		/>

        <!-- bootstrap -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<!-- navbar php -->

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/service.css">
    <title>Baba Sai Resturant - Restaurant HTML Template</title>

  
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    
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

        <style>
            .main-container{
                background:#ecf0f4;
            }
            </style>
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
           
		

		

		
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-10 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12" >
								<div class="title">
									<!-- <h4>Profile</h4> -->
                                    <?php
                include 'adminsidebar.php';
            ?>

								</div>
								
							</div>
						</div>
					</div>
					<div class="row" style="padding-top:20px">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="profile-photo">
									<a
										href="modal"
										data-toggle="modal"
										data-target="#modal"
										class="edit-avatar"
										><i class="fa fa-pencil"></i
									></a>
									<img
										src="vendors/images/photo1.jpg"
										alt=""
										class="avatar-photo"
									/>
									<div
										class="modal fade"
										id="modal"
										tabindex="-1"
										role="dialog"
										aria-labelledby="modalLabel"
										aria-hidden="true"
									>
										<div
											class="modal-dialog modal-dialog-centered"
											role="document"
										>
											<div class="modal-content">
												<div class="modal-body pd-5">
													<div class="img-container">
														<img
															id="image"
															src="vendors/images/photo2.jpg"
															alt="Picture"
														/>
													</div>
												</div>
												<div class="modal-footer">
													<input
														type="submit"
														value="Update"
														class="btn btn-primary"
													/>
													<button
														type="button"
														class="btn btn-default"
														data-dismiss="modal"
													>
														Close
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5 class="text-center h5 mb-0">Ross C. Lopez</h5>
								<p class="text-center text-muted font-14">
									Lorem ipsum dolor sit amet
								</p>
								<div class="profile-info">
									<h5 class="mb-20 h5 text-blue">Personal Information</h5>
									<ul>
										<li>
											<span>Email Address:</span>
											FerdinandMChilds@test.com
										</li>
										<li>
											<span>Phone Number:</span>
											619-229-0054
										</li>
										<li>
											<span>Country:</span>
											America
										</li>
										<li>
											<span>Address:</span>
											1807 Holden Street<br />
											San Diego, CA 92115
										</li>
									</ul>
								</div>
								
								
							</div>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
							<div class="card-box height-100-p overflow-hidden">
								<div class="profile-tab height-100-p">
									<div class="tab height-100-p">
										<ul class="nav nav-tabs customtab" role="tablist">
											<li class="nav-item">
												<a
													class="nav-link active"
													data-toggle="tab"
													href="#timeline"
													role="tab"
													>Timeline</a
												>
											</li>
											<!-- <li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#tasks"
													role="tab"
													>Tasks</a
												>
											</li> -->
											<li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#setting"
													role="tab"
													>Settings</a
												>
											</li>
										</ul>
										<div class="tab-content">
											<!-- Timeline Tab start -->
											<div
												class="tab-pane fade show active"
												id="timeline"
												role="tabpanel"
											>
												<div class="pd-20">
													<div class="profile-timeline">
														<div class="timeline-month">
															<h5>August, 2020</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">12 Aug</div>
																	<div class="task-name">
																		<i class="ion-android-alarm-clock"></i> Order placed
																		Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 Aug</div>
																	<div class="task-name">
																		<i class="ion-ios-chatboxes"></i> Order Placed
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 Aug</div>
																	<div class="task-name">
																		<i class="ion-ios-clock"></i> Order Placed
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 Aug</div>
																	<div class="task-name">
																		<i class="ion-ios-clock"></i> Order Placed
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
															</ul>
														</div>
														<div class="timeline-month">
															<h5>July, 2020</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">12 July</div>
																	<div class="task-name">
																		<i class="ion-android-alarm-clock"></i> Task
																		Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 July</div>
																	<div class="task-name">
																		<i class="ion-ios-chatboxes"></i> Order Placed
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
															</ul>
														</div>
														<!-- <div class="timeline-month">
															<h5>June, 2020</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">12 June</div>
																	<div class="task-name">
																		<i class="ion-android-alarm-clock"></i> Task
																		Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 June</div>
																	<div class="task-name">
																		<i class="ion-ios-chatboxes"></i> Order Placed
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 June</div>
																	<div class="task-name">
																		<i class="ion-ios-clock"></i> Order Placed
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
															</ul>
														</div> -->
													</div>
												</div>
											</div>
											<!-- Timeline Tab End -->
											<!-- Tasks Tab start -->
											<div class="tab-pane fade" id="tasks" role="tabpanel">
												<div class="pd-20 profile-task-wrap">
													<div class="container pd-0">
														<!-- Open Task start -->
														
														<!-- add task popup End -->
													</div>
												</div>
											</div>
											<!-- Tasks Tab End -->
											<!-- Setting Tab start -->
											<div
												class="tab-pane fade height-100-p"
												id="setting"
												role="tabpanel"
											>
												<div class="profile-setting">
													<form>
														<ul class="profile-edit-list row">
															<li class="weight-500 col-md-6">
																<h4 class="text-blue h5 mb-20">
																	Edit Your Personal Setting
																</h4>
																<div class="form-group">
																	<label>Full Name</label>
																	<input
																		class="form-control form-control-lg"
																		type="text"
																	/>
																</div>
																
																<div class="form-group">
																	<label>Email</label>
																	<input
																		class="form-control form-control-lg"
																		type="email"
																	/>
																</div>
																<div class="form-group">
																	<label>Date of birth</label>
																	<input
																		class="form-control form-control-lg date-picker"
																		type="text"
																	/>
																</div>
																<div class="form-group">
																	<label>Gender</label>
																	<div class="d-flex">
																		<div
																			class="custom-control custom-radio mb-5 mr-20"
																		>
																			<input
																				type="radio"
																				id="customRadio4"
																				name="customRadio"
																				class="custom-control-input"
																			/>
																			<label
																				class="custom-control-label weight-400"
																				for="customRadio4"
																				>Male</label
																			>
																		</div>
																		<div
																			class="custom-control custom-radio mb-5"
																		>
																			<input
																				type="radio"
																				id="customRadio5"
																				name="customRadio"
																				class="custom-control-input"
																			/>
																			<label
																				class="custom-control-label weight-400"
																				for="customRadio5"
																				>Female</label
																			>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label>Country</label>
																	<select
																		class="selectpicker form-control form-control-lg"
																		data-style="btn-outline-secondary btn-lg"
																		title="Not Chosen"
																	>
																	<option selected>India</option>
																		<!-- <option>United States</option>
																		<option>United Kingdom</option> -->
																	</select>
																</div>
																<div class="form-group">
																	<label>State/Province/Region</label>
																	<input
																		class="form-control form-control-lg"
																		type="text"
																	/>
																</div>
																<div class="form-group">
																	<label>Postal Code</label>
																	<input
																		class="form-control form-control-lg"
																		type="text"
																	/>
																</div>
																<div class="form-group">
																	<label>Phone Number</label>
																	<input
																		class="form-control form-control-lg"
																		type="text"
																	/>
																</div>
																<div class="form-group">
																	<label>Address</label>
																	<textarea class="form-control"></textarea>
																</div>
																
															
																<div class="form-group">
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="customCheck1-1"
																		/>
																		<label
																			class="custom-control-label weight-400"
																			for="customCheck1-1"
																			>I agree to receive notification
																			emails</label
																		>
																	</div>
																</div>
																<div class="form-group mb-0">
																	<input
																		type="submit"
																		class="btn btn-primary"
																		value="Update Information"
																	/>
																</div>
															</li>
															
														</ul>
													</form>


													<form>
                                                    <ul class="profile-edit-list row">
                                                        <li class="weight-500 col-md-6">
                                                            <h4 class="text-blue h5 mb-20">
                                                                Change Password
                                                            </h4>
                                                            <div class="form-group">
                                                                <label>Current Pssword</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="text" />
                                                            </div>

                                                            <div class="form-group">
                                                                <label>New Password:</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="text" />
                                                            </div>
                                                           
                                                           
                                                            

                                                            
                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Change Password" />
                                                            </div>
                                                        </li>

                                                    </ul>

                                                </form>
												</div>
											</div>
											<!-- Setting Tab End -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- welcome modal start -->
		
		
		<!-- welcome modal end -->
		<!-- js -->
		<?php
            include "javascript.php";
        ?>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
