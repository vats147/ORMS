<?php
	include 'dbfile.php';
    session_start();
    if(isset($_SESSION['utype']))
    {
        $utype=$_SESSION['utype'];
        if($utype!="branchmanager")
        {
            header("Location:Login.php");
        }
    }
    else
    {
        header("Location:Login.php");
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
								<h4>Manage Item Category</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.html">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Manage Item Category
									</li>
								</ol>
							</nav>
						</div>
						<!-- <div class="col-md-6 col-sm-12 text-right">
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
							</div> -->
					</div>
				</div>
				<!-- Simple Datatable start -->

				<div class="card-box mb-30">

					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Category Details</h5>
							<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue"
											data-toggle="tab" href="#home" role="tab"
											aria-selected="true">Add Category</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab"
											href="#profile" role="tab"
											aria-selected="false">View Category</a>
									</li>
									<!-- <li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#contact"
												role="tab"
												aria-selected="false"
												>Assgin Manager</a
											>
										</li> -->
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home"
										role="tabpanel">

										<div class="pd-20">
											<div class="pd-ltr-20 xs-pd-20-10">
												<div class="min-height-200px">

													<!-- Default Basic Forms Start -->
													<div
														class="pd-20 card-box mb-30">
														<div class="clearfix">
															<div
																class="pull-left">
																<h4
																	class="text-blue h4">
																	Category
																	Details
																</h4>
																<!-- <p class="mb-30">All bootstrap element classies</p> -->
															</div>

														</div>
														<form id="myform">
															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">StartTableName(Code):</label>
																<div
																	class="col-sm-12 col-md-10">
																	<input class="form-control"
																		type="text"
																		placeholder="A15"
																		id="tb1" />
																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error1">

																		</div>
																	</div>
																</div>


															</div>
															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">End
																	TableName(Code):</label>
																<div
																	class="col-sm-12 col-md-10">
																	<input class="form-control"
																		type="text"
																		placeholder="A17"
																		id="tb2" />
																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error2">

																		</div>
																	</div>
																</div>


															</div>

															





															<div
																class="row">
																<div
																	class="col-md-6 col-sm-12">
																	<div
																		class="title">
																		<!-- <h4>Image Dropzone</h4> -->
																	</div>

																</div>

																<!-- Sumit button -->
																<div
																	class="col-md-6 col-sm-12 text-right">
																	<div
																		class="dropdown">

																		<button type="button"
																			class="btn btn-primary  btn-right"
																			style="margin-top: 10px;"
																			id="btn">submit</button>


																		</a>
																		<div
																			class="dropdown-menu dropdown-menu-right">

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
									<div class="tab-pane fade" id="profile" role="tabpanel">
										<div class="pd-20" id="table-data">
											


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


	<?php

			include "javascript.php"
			?>
			<script src="notify.js"></script>

			<script src="lobibox-master/js/Lobibox.js"></script>
			<script src="lobibox-master/demo/demo.js"></script>

	<script>
		$(document).ready(function () {


			//delete data
			$(document).on("click", "#yes", function () {
                	var id = $("#hide").val();

                $.ajax({
                    url: "retrivedata.php",
                    type: "POST",
                    data: {
                        id: "managetable",
                        action: "d",
                        eid: id
                    },
                    success: function (data) {

                        $('.modal-backdrop').remove();
                        $('body').removeClass("modal-open");
			   $.ajax({
								url: "retrivedata.php",
								type: "POST",
								data: {
									id: "managetable",
									action: "r",
									

								},success: function (data) {
									$("#table-data").html(data);
								}
							});



                     //    load_data();
                        if (data == 1) {
                            Lobibox.notify('success', {
                                size: 'mini',
                                rounded: true,
                                delayIndicator: true,
                                msg: 'Data Deleted Successfully'
                            });
                        }




                    },
                    error: function (data) {

                        Lobibox.notify('error', {
                            size: 'mini',
                            rounded: true,
                            delayIndicator: true,
                            msg: 'An error Occur'
                        });
                    },
                    complete: function (data) {



                    }

                });
            });


			// retrive data
						$.ajax({
								url: "retrivedata.php",
								type: "POST",
								data: {
									id: "managetable",
									action: "r",
									

								},success: function (data) {
									$("#table-data").html(data);
								}
							});


			const tb1 = document.getElementById("tb1");
			const tb2 = document.getElementById("tb2");
			validtb1 = false;
			validtb2 = false;
			validbranchcode = false;


			tb1.addEventListener('blur', () => {
				console.log("tb1 is blurred");

				let regex = /^[a-zA-Z]([0-9]){1,3}$/;
				let str = tb1.value;
				console.log(regex, str);
				if (regex.test(str)) {
					console.log('Your name is valid');

					document.getElementById("error1").style.display = "none";
					tb1.classList.add('is-valid');
					validtb1 = true;
				}
				else {
					console.log('Your name is not valid');
					tb1.classList.add('form-control-danger');
					document.getElementById("error1").style.display = "block";
					document.getElementById("error1").innerHTML = "First character must be Alphabet then any digit";


					validtb1 = false;

				}




			});


			tb2.addEventListener('blur', () => {
				console.log("tb2 is blurred");

				let regex = /^[a-zA-Z]([0-9]){1,3}$/;
				let str = tb2.value;
				console.log(regex, str);
				if (regex.test(str)) {
					console.log('Your name is valid');

					document.getElementById("error2").style.display = "none";
					tb2.classList.add('is-valid');
					validtb2 = true;
				}
				else {
					console.log('Your name is not valid');
					tb2.classList.add('form-control-danger');
					document.getElementById("error2").style.display = "block";
					document.getElementById("error2").innerHTML = "First character must be Alphabet then any digit";


					validtb2 = false;

				}
			});

			


			$(document).on('click', '#btn', function () {
				console.log(validtb1 + validtb2  );

				if (validtb1 && validtb2) {

					var str1 = tb1.value;
					var str2 = tb2.value;

					var slice1 = str1.slice(0, 1);
					var slice2 = str2.slice(0, 1);

					if (slice1.toLowerCase() == slice2.toLowerCase()) {

						console.log("safe");

						slice1 = str1.slice(1);
						slice2 = str2.slice(1);
						if (parseInt(slice1) == parseInt(slice2)) {
							alert('Number should not be same');
						}
						else if (parseInt(slice1) >= parseInt(slice2)) {
							alert('tb1 is not more than tb2');
						}
						else {
							alert('success');
							$.ajax({
								url: "retrivedata.php",
								type: "POST",
								data: {
									id: "managetable",
									action: "c",
									str1: str1.slice(0, 1),
									branchcode: <?php echo $_SESSION['bid'];?>,
									str2: str2.slice(0, 1),
									slice1: slice1,
									slice2: slice2

								}, success: function (data) {

									if (data == 1) {
										// load_data();
										

										Lobibox.notify('success', {
											size: 'mini',
											rounded: true,
											delayIndicator: true,
											msg: 'Data Inserted Successfully'

										});
										document.getElementById("myform").reset();
										// clear my all form data

									}
									else
									{
										alert(data);
										document.getElementById("myform").reset();

									}
								}
								});
						}


					}
					else {
						alert('Table1 and Table2 must have same charter');
					}




				}
				else {
					alert('filed should not be empty');
				}

			});












		});

	</script>


	<!-- End Google Tag Manager (noscript) -->
</body>

</html>