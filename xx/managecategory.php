<?php
	include 'dbfile.php';
    session_start();
    if(isset($_SESSION['utype']))
    {
        $utype=$_SESSION['utype'];
        if($utype!="admin")
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
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />

	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

	<!-- lobibox -->
	<link rel="stylesheet" href="lobibox-master/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="lobibox-master/demo/demo.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
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
														<form>
															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Category
																	name</label>
																<div
																	class="col-sm-12 col-md-10">
																	<input class="form-control"
																		type="text"
																		id="cname"
																		placeholder="Hello" />
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
																	class="col-sm-12 col-md-2 col-form-label">Branch
																	Code</label>
																<div
																	class="col-sm-12 col-md-10">
																	<?php
                                                                $sql_branch = "select * from tblbranch";
                                                                $result_branch = $conn->query($sql_branch);
                                                                echo '<select class="custom-select col-12" name="branchcode" id="branchcode"
                                                                required>';
                                                                echo '<option value="" selected disabled hidden>Choose here</option>';

                                                                while ($row = mysqli_fetch_array($result_branch)) {
	                                                                echo " 
                                                                <option value=\"$row[0]\">$row[1]</option>";


                                                                }
                                                                echo "</select>";
                                                                mysqli_close($conn);
                                                                ?>
																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error2">
																			Select
																			Branch
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
																			id="submit">Submit</button>


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

										<div class="pb-20" id="table-data"
											>


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
			const cname = document.getElementById("cname");
			const branchcode = document.getElementById("branchcode");
			var validcname = false;
			var validbranchcode = false;

			cname.addEventListener('blur', () => {
				console.log("cname is blurred");

				let regex = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
				let str = cname.value;
				console.log(regex, str);
				if (regex.test(str)) {
					console.log('Your name is valid');

					document.getElementById("error1").style.display = "none";
					cname.classList.add('is-valid');
					validcname = true;
				}
				else {
					console.log('Your name is not valid');
					cname.classList.add('form-control-danger');
					document.getElementById("error1").style.display = "block";
					document.getElementById("error1").innerHTML = "Category Name must be 2-10 characters long and should not start with a number";


					validcname = false;

				}
			});


			$('#branchcode').on("change", function () {

				var selectElement = document.querySelector('#branchcode');
				// var output = selectElement.options[selectElement.selectedIndex].text;
				var combo = document.getElementById("branchcode");
				if (combo.selectedIndex <= 0) {
					alert("Please select Thumnail Category");
				}
				else {


					validbranchcode = true;
					document.getElementById("error2").style.display = "none";

					branchcode.classList.add('is-valid');

					// console.log("set");
				}

			});

			$('#submit').on("click", function () {
				// reset value of combobox

				if (validbranchcode && validcname) {
					$.ajax({
						url: "retrivedata.php",
						type: "POST",
						data: {
							id: "managecategory",
							action: "c",
							cat: cname.value,
							branch: document.getElementById("branchcode").value

						},
						success: function (data) {
							$('#branchcode').prop('selectedIndex', 0);
							$('#cname').val('');
							if (data == 1) {
								//data inserted successfully
								alert('Data Inserted Successfully');
							}

							if (data == 2) {
								// invalid category name
								alert('Invalid Category Name');

							}
							if (data == 3) {
								alert('Error 404');

								// query not executed
							}
						}
					});
				}
				else {
					alert('Filed not should be empty');
				}







			});

			$.ajax({
				url: "retrivedata.php",
				type: "POST",
				data: {
					id: "managecategory",
					action: "r",

				}, success: function (data) {
					$("#table-data").html(data);


				}
			});

			var validstatus = false;
			var validcnamee = false;
			var validbranchcodee = true;
			var id;
			$(document).on("click", "#edit", function () {

				id=$(this).data("eeid");
			const cname1 = document.getElementById("cname1");
			const branchcode1 = document.getElementById("branchcode"+id);
			console.log($(this).data("eeid"));

			
				let regex = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
				let str = cname1.value;
				console.log(regex, str);
				if (regex.test(str)) {
					console.log('Your name is valid');

					document.getElementById("error1").style.display = "none";
					cname1.classList.add('is-valid');
					validcnamee = true;
				}
				else {
					console.log('Your name is not valid');
					cname1.classList.add('form-control-danger');
					document.getElementById("error1").style.display = "block";
					document.getElementById("error1").innerHTML = "Category Name must be 2-10 characters long and should not start with a number";


					validcnamee = false;

				}

			cname1.addEventListener('blur', () => {
				console.log("cname1 is blurred");

				
				console.log(regex, str);
				if (regex.test(str)) {
					console.log('Your name is valid');

					document.getElementById("error1").style.display = "none";
					cname1.classList.add('is-valid');
					validcnamee = true;
				}
				else {
					console.log('Your name is not valid');
					cname1.classList.add('form-control-danger');
					document.getElementById("error1").style.display = "block";
					document.getElementById("error1").innerHTML = "Category Name must be 2-10 characters long and should not start with a number";


					validcnamee = false;

				}
			});
		});


			$('#branchcode'+id).on("change", function () {

				var selectElement = document.querySelector('#branchcode'+id);
				// var output = selectElement.options[selectElement.selectedIndex].text;
				var combo = document.getElementById("branchcode"+id);
				// console.log(combo);
				if (combo.selectedIndex <= 0) {
					alert("Please select Thumnail Category");
				}
				else {


					validbranchcodee = true;
					document.getElementById("error2").style.display = "none";

					branchcode1.classList.add('is-valid');

					// console.log("set");
				}

			});
			var status;
			$(document).on("click", "#editme", function () {
				console.log("hello");

				var x=document.querySelector('#status-ac');
				console.log(x.checked);

				if( document.getElementById("status-ac").checked==true)
                            {
					// console.log("checked");
					validstatus=true;
                                status=1;
                            }
                            else{
					// console.log("unchecked");
					
					validstatus=true;

                                status=0;
                            }
				console.log( validbranchcodee);
				console.log( validcnamee);
				console.log( validstatus);


				if (validbranchcodee && validcnamee && validstatus ) {
					
					var cname1=document.getElementById("cname1").value;
					var str="\"branchcode"+id+"\"";

					//access value of combobox using jquery
					var branchcode1 = $('#branchcode'+id).val();

					console.log(str);
					$.ajax({
						url: "retrivedata.php",
						type: "POST",
						data: {
							id: "managecategory",
							action: "e",
							name:cname1,
							
							branch: branchcode1,
							status:status,
							idd: id

						},
						success: function (data) {
							$('#branchcode'+id).prop('selectedIndex', 0);
							$('#cname').val('');
							if (data == 1) {
								//data inserted successfully
								alert('Data Inserted Successfully');
							}

							if (data == 2) {
								// invalid category name
								alert('Invalid Category Name');

							}
							if (data == 3) {
								alert('Invalid Details');

								// query not executed
							}

							$.ajax({
								url: "retrivedata.php",
								type: "POST",
								data: {
									id: "managecategory",
									action: "r",

								}, success: function (data) {
									$("#table-data").html(data);
								}
							});
							$('.modal').remove();
							$('.modal-backdrop').remove();
                                            $('body').removeClass("modal-open");
						}
					});
				}
				else {
					alert('Filed not should be empty');
				}

				

			});

			$(document).on("click", "#yes", function () {
                var id = $("#hide").val();

                $.ajax({
                    url: "retrivedata.php",
                    type: "POST",
                    data: {
                        id: "managecategory",
                        action: "d",
                        eid: id
                    },
                    success: function (data) {

                        $('.modal-backdrop').remove();
                        $('body').removeClass("modal-open");



                     //    load_data();
			$.ajax({
								url: "retrivedata.php",
								type: "POST",
								data: {
									id: "managecategory",
									action: "r",

								}, success: function (data) {
									$("#table-data").html(data);
								}
							});

                        if (data == 1) {
                            alert('Data Delteed succesfully');
                        }




                    },
                   
                });
            });

		});


	</script>
</body>

</html>