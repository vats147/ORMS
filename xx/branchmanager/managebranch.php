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
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
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
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Manage Branch</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Manage Branch
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Simple Datatable start -->

					<div class="card-box mb-30">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Branch Details</h5>
								<div class="tab">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a
												class="nav-link active text-blue"
												data-toggle="tab"
												href="#home"
												role="tab"
												aria-selected="true"
												>View</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#profile"
												role="tab"
												aria-selected="false"
												>Add Branch</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#contact"
												role="tab"
												aria-selected="false"
												>Assgin Manager</a
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
												<table class="data-table table stripe hover nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th class="table-plus datatable-nosort">Branch Name</th>
                                                            <th>Branch address</th>
                                                            <th>City</th>
                                                            <th>State</th>
                                                            <th>PinCode</th>
                                                            <th class="datatable-nosort">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="table-plus">Gloria F. Mead</td>
                                                            <td>25</td>
                                                            <td>Sagittarius</td>
                                                            <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>30</td>
                                                            <td>Gemini</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>20</td>
                                                            <td>Gemini</td>
                                                            <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>30</td>
                                                            <td>Sagittarius</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>25</td>
                                                            <td>Gemini</td>
                                                            <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>20</td>
                                                            <td>Sagittarius</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>18</td>
                                                            <td>Gemini</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>30</td>
                                                            <td>Sagittarius</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>30</td>
                                                            <td>Sagittarius</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>30</td>
                                                            <td>Gemini</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>30</td>
                                                            <td>Gemini</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-plus">BaBa Sai Resturant</td>
                                                            <td>30</td>
                                                            <td>Gemini</td>
                                                            <td>Gujarat</td>
                                                            <td>395010</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a
                                                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                                        href="#"
                                                                        role="button"
                                                                        data-toggle="dropdown"
                                                                    >
                                                                        <i class="dw dw-more"></i>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                                                    >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-eye"></i> View</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-edit2"></i> Edit</a
                                                                        >
                                                                        <a class="dropdown-item" href="#"
                                                                            ><i class="dw dw-delete-3"></i> Delete</a
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                
											</div>
										</div>
										<div class="tab-pane fade" id="profile" role="tabpanel">
											<div class="pd-20">
                                                <div class="pd-ltr-20 xs-pd-20-10">
                                                    <div class="min-height-200px">
                                        
                                                        <!-- Default Basic Forms Start -->
                                                        <div class="pd-20 card-box mb-30">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <h4 class="text-blue h4">Default Basic Forms</h4>
                                                                    <p class="mb-30">All bootstrap element classies</p>
                                                                </div>
                                                                <!-- <div class="pull-right">
                                                                        <a
                                                                            href="#basic-form1"
                                                                            class="btn btn-primary btn-sm scroll-click"
                                                                            rel="content-y"
                                                                            data-toggle="collapse"
                                                                            role="button"
                                                                            >
                                                                            <i class="fa fa-code"></i> Source Code
                                                                        </a>
                                                                    </div> -->
                                                            </div>
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-12 col-md-2 col-form-label">Branch Name</label>
                                                                    <div class="col-sm-12 col-md-10">
                                                                        <input class="form-control" type="text" placeholder="BABA SAI Resturant" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-12 col-md-2 col-form-label">Address</label>
                                                                    <div class="col-sm-12 col-md-10">
                                                                        <input class="form-control" placeholder="kapodra " type="text" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-12 col-md-2 col-form-label">state</label>
                                                                    <div class="col-sm-12 col-md-10">
                                                                        <input class="form-control" placeholder="Gujarat" type="text" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-12 col-md-2 col-form-label">city</label>
                                                                    <div class="col-sm-12 col-md-10">
                                                                        <input class="form-control" placeholder="Surat" type="text" />
                                                                    </div>
                                                                </div>
                                        
                                                              
                                                                <div class="form-group row">
                                                                    <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                                                                    <div class="col-sm-12 col-md-10">
                                                                        <input class="form-control" placeholder="1-(111)-111-1111" type="tel" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="title">
                                                                            <!-- <h4>Image Dropzone</h4> -->
                                                                        </div>
                                                                        <nav aria-label="breadcrumb" role="navigation">
                                                                           
                                                                        </nav>
                                                                    </div>
                                                
                                                                    <!-- Sumit button -->
                                                                    <div class="col-md-6 col-sm-12 text-right">
                                                                        <div class="dropdown">
                                                                            
                                                                            <button type="button" class="btn btn-primary  btn-right"
                                                                                style="margin-top: 10px;">Submit</button>
                                                                                
                                                                            <button type="button" class="btn btn-primary  btn-right"
                                                                            style="margin-top: 10px;" disabled>Update</button>
                                                                            <button type="button" class="btn btn-primary  btn-right"
                                                                                style="margin-top: 10px;" disabled>Delete</button>
                                                                            <!-- January 2018 -->
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
										<div class="tab-pane fade" id="contact" role="tabpanel">
											<div class="pd-20">
												<div class="pd-ltr-20 xs-pd-20-10">
                                                    <div class="min-height-200px">
                                                        <div class="page-header">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="title">
                                                                        <h4>Manage Manager</h4>
                                                                    </div>
                                                                    <nav aria-label="breadcrumb" role="navigation">
                                                                        <ol class="breadcrumb">
                                                                            <li class="breadcrumb-item">
                                                                                <a href="index.html">Home</a>
                                                                            </li>
                                                                            <li class="breadcrumb-item active" aria-current="page">
                                                                                Manage Manager
                                                                            </li>
                                                                        </ol>
                                                                    </nav>
                                        
                                        
                                        
                                                                </div>
                                                               
                                                            </div>
                                                            <hr>
                                                            <label class="weight-600">Manage Manager</label>
                                        
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked />
                                                                            <label class="custom-control-label" for="customCheck1">Check Me For
                                                                                Add Branch Manager</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="custom-control custom-checkbox mb-5">
                                                                        <!-- <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                                        <label class="custom-control-label" for="customCheck2   ">Check Me For
                                                                            Delete Category</label> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Select Branch</label>
                                                                        <input type="text" class="form-control" disabled="" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-12">
                                                                    <div class="dropdown">
                                        
                                                                        <div class="form-group">
                                                                            <label>Select Branch Manager</label>
                                                                            <input type="text" class="form-control" />
                                                                        </div>
                                        
                                                                        <!-- January 2018 -->
                                        
                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-12">
                                                                    <button type="button" class="btn btn-primary  btn-right"
                                                                        style="margin-top: 10px;width: 90%;">Add</button>
                                                                </div>
                                                                <div class="col-md-3 col-sm-12">
                                                                    <div class="dropdown">
                                        
                                        
                                                                        <button type="button" class="btn btn-primary  btn-right"
                                                                            style="margin-top: 10px;width: 90%;">Delete</button>
                                                                        <!-- January 2018 -->
                                                                        </a>
                                        
                                                                    </div>
                                        
                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                                </div>
                                                <div class="pd-ltr-20 xs-pd-20-10">
                                                    <div class="min-height-200px">
                                                        
                                                        <!-- Simple Datatable start -->
                                                        <div class="card-box mb-30">
                                                            <div class="pd-20">
                                                                <h4 class="text-blue h4">Data Table Simple</h4>
                                                                <p class="mb-0">
                                                                    <!-- you can find more options
                                                                    <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a> -->
                                                                </p>
                                                            </div>
                                                            <div class="pb-20">
                                                                <table class="data-table table stripe hover nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="table-plus datatable-nosort">Branch Name</th>
                                                                            <!-- <th></th> -->
                                                                            <th>Branch address</th>
                                                                            <!-- <th>Address</th> -->
                                                                            <!-- <th>Start Date</th> -->
                                                                            <!-- <th class="datatable-nosort">Action</th> -->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="table-plus">Gloria F. Mead</td>
                                                                            <!-- <td>25</td> -->
                                                                              
                                                                            <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>30</td> -->
                                                                              
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>20</td> -->
                                                                              
                                                                            <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>30</td> -->
                                                                              
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>25</td> -->
                                                                              
                                                                            <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                            <td></td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>18</td> -->
                                                                              
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>30</td> -->
                                                                              
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>30</td> -->
                                                                              
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>30</td> -->
                                                                              
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>30</td> -->
                                                                              
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-plus">Andrea J. Cagle</td>
                                                                            <!-- <td>30</td> -->
                                                                              
                                                                            <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                                                             
                                                                            
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
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
						
						
                    </div>
                </div>
						</div>
					</div>
					<!-- Simple Datatable End -->
					<!-- multiple select row Datatable start -->
					<!-- <div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Data Table with multiple select row</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table hover multiple-select-row nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Name</th>
										<th>Age</th>
										<th>Office</th>
										<th>Address</th>
										<th>Start Date</th>
										<th>Salart</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">Gloria F. Mead</td>
										<td>25</td>
										<td>Sagittarius</td>
										<td>2829 Trainer Avenue Peoria, IL 61602</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>20</td>
										<td>Gemini</td>
										<td>2829 Trainer Avenue Peoria, IL 61602</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Sagittarius</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>25</td>
										<td>Gemini</td>
										<td>2829 Trainer Avenue Peoria, IL 61602</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>20</td>
										<td>Sagittarius</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>18</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Sagittarius</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Sagittarius</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->
					<!-- multiple select row Datatable End -->
					<!-- Checkbox select Datatable start -->
					<!-- <div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Data Table with Checckbox select</h4>
						</div>
						<div class="pb-20">
							<table class="checkbox-datatable table nowrap">
								<thead>
									<tr>
										<th>
											<div class="dt-checkbox">
												<input
													type="checkbox"
													name="select_all"
													value="1"
													id="example-select-all"
												/>
												<span class="dt-checkbox-label"></span>
											</div>
										</th>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Tokyo</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td></td>
										<td>Angelica Ramos</td>
										<td>Chief Executive Officer (CEO)</td>
										<td>London</td>
										<td>2009/10/09</td>
										<td>$1,200,000</td>
									</tr>
									<tr>
										<td></td>
										<td>Ashton Cox</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>2009/01/12</td>
										<td>$86,000</td>
									</tr>
									<tr>
										<td></td>
										<td>Bradley Greer</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>2012/10/13</td>
										<td>$132,000</td>
									</tr>
									<tr>
										<td></td>
										<td>Brenden Wagner</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>2011/06/07</td>
										<td>$206,850</td>
									</tr>
									<tr>
										<td></td>
										<td>Caesar Vance</td>
										<td>Pre-Sales Support</td>
										<td>New York</td>
										<td>2011/12/12</td>
										<td>$106,450</td>
									</tr>
									<tr>
										<td></td>
										<td>Cedric Kelly</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>2012/03/29</td>
										<td>$433,060</td>
									</tr>
									<tr>
										<td></td>
										<td>Dai Rios</td>
										<td>Personnel Lead</td>
										<td>Edinburgh</td>
										<td>2012/09/26</td>
										<td>$217,500</td>
									</tr>
									<tr>
										<td></td>
										<td>Doris Wilder</td>
										<td>Sales Assistant</td>
										<td>Sidney</td>
										<td>2010/09/20</td>
										<td>$85,600</td>
									</tr>
									<tr>
										<td></td>
										<td>Fiona Green</td>
										<td>Chief Operating Officer (COO)</td>
										<td>San Francisco</td>
										<td>2010/03/11</td>
										<td>$850,000</td>
									</tr>
									<tr>
										<td></td>
										<td>Gavin Cortez</td>
										<td>Team Leader</td>
										<td>San Francisco</td>
										<td>2008/10/26</td>
										<td>$235,500</td>
									</tr>
									<tr>
										<td></td>
										<td>Herrod Chandler</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
									</tr>
									<tr>
										<td></td>
										<td>Hope Fuentes</td>
										<td>Secretary</td>
										<td>San Francisco</td>
										<td>2010/02/12</td>
										<td>$109,850</td>
									</tr>
									<tr>
										<td></td>
										<td>Jena Gaines</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>2008/12/19</td>
										<td>$90,560</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->
					<!-- Checkbox select Datatable End -->
					<!-- Export Datatable start -->
					<!-- <div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Data Table with Export Buttons</h4>
						</div>
						<div class="pb-20">
							<table
								class="table hover multiple-select-row data-table-export nowrap"
							>
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Name</th>
										<th>Age</th>
										<th>Office</th>
										<th>Address</th>
										<th>Start Date</th>
										<th>Salart</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">Gloria F. Mead</td>
										<td>25</td>
										<td>Sagittarius</td>
										<td>2829 Trainer Avenue Peoria, IL 61602</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>20</td>
										<td>Gemini</td>
										<td>2829 Trainer Avenue Peoria, IL 61602</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Sagittarius</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>25</td>
										<td>Gemini</td>
										<td>2829 Trainer Avenue Peoria, IL 61602</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>20</td>
										<td>Sagittarius</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>18</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Sagittarius</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Sagittarius</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td class="table-plus">BaBa Sai Resturant</td>
										<td>30</td>
										<td>Gemini</td>
										<td>Gujarat</td>
										<td>395010</td>
										<td>$162,700</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->
					<!-- Export Datatable End -->
				</div>
				<!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> -->
			</div>
		</div>
		<!-- welcome modal start -->
		<!-- <div class="welcome-modal">
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
		</div> -->
	
		<!-- welcome modal end -->
		<!-- js -->
		<?php

			include "javascript.php"
			?>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
