<?php
	include 'dbfile.php';
    session_start();
    if(isset($_SESSION['utype']))
    {
        $utype=$_SESSION['utype'];
        if($utype!="branchmanager")
        {
            header("Location:../Login.php");
        }
    }
    else
    {
        header("Location:../Login.php");
    }
?>
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
									<h4>Form</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Form
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
					<div class="invoice-wrap">
						<div class="invoice-box">
							<div class="invoice-header">
								<div class="logo text-center">
									<img src="vendors/images/deskapp-logo.png" alt="" />
								</div>
							</div>
							<h4 class="text-center mb-30 weight-600">INVOICE</h4>
							<div class="row pb-30">
								<div class="col-md-6">
									<h5 class="mb-15">Client Name</h5>
									<p class="font-14 mb-5">
										Date Issued: <strong class="weight-600">10 Jan 2018</strong>
									</p>
									<p class="font-14 mb-5">
										Invoice No: <strong class="weight-600">4556</strong>
									</p>
								</div>
								<div class="col-md-6">
									<div class="text-right">
										<p class="font-14 mb-5">Your Name</p>
										<p class="font-14 mb-5">Your Address</p>
										<p class="font-14 mb-5">City</p>
										<p class="font-14 mb-5">Postcode</p>
									</div>
								</div>
							</div>
							<div class="invoice-desc pb-30">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Description</div>
									<div class="invoice-rate">Rate</div>
									<div class="invoice-hours">Hours</div>
									<div class="invoice-subtotal">Subtotal</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">Website Design</div>
											<div class="invoice-rate">$20</div>
											<div class="invoice-hours">100</div>
											<div class="invoice-subtotal">
												<span class="weight-600">$2000</span>
											</div>
										</li>
										<li class="clearfix">
											<div class="invoice-sub">Logo Design</div>
											<div class="invoice-rate">$20</div>
											<div class="invoice-hours">100</div>
											<div class="invoice-subtotal">
												<span class="weight-600">$2000</span>
											</div>
										</li>
										<li class="clearfix">
											<div class="invoice-sub">Website Design</div>
											<div class="invoice-rate">$20</div>
											<div class="invoice-hours">100</div>
											<div class="invoice-subtotal">
												<span class="weight-600">$2000</span>
											</div>
										</li>
										<li class="clearfix">
											<div class="invoice-sub">Logo Design</div>
											<div class="invoice-rate">$20</div>
											<div class="invoice-hours">100</div>
											<div class="invoice-subtotal">
												<span class="weight-600">$2000</span>
											</div>
										</li>
									</ul>
								</div>
								<div class="invoice-desc-footer">
									<div class="invoice-desc-head clearfix">
										<div class="invoice-sub">Bank Info</div>
										<div class="invoice-rate">Due By</div>
										<div class="invoice-subtotal">Total Due</div>
									</div>
									<div class="invoice-desc-body">
										<ul>
											<li class="clearfix">
												<div class="invoice-sub">
													<p class="font-14 mb-5">
														Account No:
														<strong class="weight-600">123 456 789</strong>
													</p>
													<p class="font-14 mb-5">
														Code: <strong class="weight-600">4556</strong>
													</p>
												</div>
												<div class="invoice-rate font-20 weight-600">
													10 Jan 2018
												</div>
												<div class="invoice-subtotal">
													<span class="weight-600 font-24 text-danger"
														>$8000</span
													>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<h4 class="text-center pb-20">Thank You!!</h4>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- welcome modal start -->
		
		<!-- welcome modal end -->
		<!-- js -->
		<?php

			include "javascript.php"
			?>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
