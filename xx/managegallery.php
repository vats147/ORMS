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

<?php

include 'dbfile.php';

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
	<link rel="stylesheet" type="text/css" href="src/plugins/dropzone/src/dropzone.css" />

	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

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



	<?php
       include "adminsidebar.php";
       include "adminstyle.php";
       echo '<script src="vendors/scripts/core.js"></script>
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
        
        
        ';
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
				<div id="alert">

				</div>
				<div class="card-box mb-123456789">
					<div class="pd-20">
						<h4 class="text-blue h4">Gallery Image</h4>
						<div class="tab">


							<ul class="nav nav-pills" role="tablist">
								<li class="nav-item">
									<a class="nav-link active text-blue" data-toggle="tab"
										href="#home5" role="tab"
										aria-selected="true">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-blue" data-toggle="tab"
										href="#profile5" role="tab"
										aria-selected="false">Upload Image</a>
								</li>

							</ul>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="home5"
									role="tabpanel">
									<div class="pd-20">
										<div class="pd-ltr-20 xs-pd-20-10"
											id="imgdisplay">

											<!-- gallery main image -->
											<div class="min-height-200px">


												<h5 class="h4 text-blue mb-10">Ring
													Ceremeony</h5>
												<hr>


												<div class="row clearfix">
													<div
														class="col-lg-3 col-md-6 col-sm-12 mb-30">
														<div class="da-card">
															<div
																class="da-card-photo">
																<img src="vendors/images/photo1.jpg"
																	alt="" />
																<div
																	class="da-overlay">
																	<div
																		class="da-social">
																		<ul
																			class="clearfix">
																			<li>
																				<a
																					href="#"><i
																						class="fa fa-edit"></i></a>
																			</li>
																			<li>
																				<a
																					href="#"><i
																						class="fa fa-remove"></i></a>
																			</li>

																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>

													<div
														class="col-lg-3 col-md-6 col-sm-12 mb-30">
														<div class="da-card">
															<div
																class="da-card-photo">
																<img src="vendors/images/photo2.jpg"
																	alt="" />
																<div
																	class="da-overlay">
																	<div
																		class="da-social">
																		<ul
																			class="clearfix">
																			<li>
																				<a
																					href="#"><i
																						class="fa fa-edit"></i></a>
																			</li>
																			<li>
																				<a
																					href="#"><i
																						class="fa fa-remove"></i></a>
																			</li>
																		</ul>
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
								<div class="tab-pane fade" id="profile5" role="tabpanel">

									<div class="pd-ltr-20 xs-pd-20-10">
										<div class="min-height-200px">
											<div class="page-header">
												<div class="row">
													<div
														class="col-md-6 col-sm-12">
														<div class="title">
															<h4>Manage
																Gallery
															</h4>
														</div>
														<nav aria-label="breadcrumb"
															role="navigation">
															<ol
																class="breadcrumb">
																<li
																	class="breadcrumb-item">
																	<a
																		href="index.html">Home</a>
																</li>
																<li class="breadcrumb-item active"
																	aria-current="page">
																	Manage
																	Gallery
																</li>
															</ol>
														</nav>



													</div>
													<div
														class="col-md-6 col-sm-12 text-right">

													</div>
												</div>
												<hr>
												<label class="weight-600">Image
													Category</label>

												<div class="row">
													<div
														class="col-md-6 col-sm-12">
														<div
															class="form-group">
															<div
																class="custom-control custom-checkbox mb-5">
																<input type="checkbox"
																	class="custom-control-input"
																	id="add" />
																<label class="custom-control-label"
																	for="add">Chseck
																	Me
																	For
																	Add
																	Category</label>

															</div>

														</div>
													</div>

													<div
														class="col-md-6 col-sm-12">
														<div
															class="custom-control custom-checkbox mb-5">
															<input type="checkbox"
																class="custom-control-input"
																id="delete" />
															<label class="custom-control-label"
																for="delete">Check
																Me For
																Delete
																Category</label>
														</div>

													</div>
												</div>


												<div class="row">
													<div
														class="col-md-3 col-sm-12">
														<div
															class="form-group">
															<label>Add
																Image
																Category</label>
															<input type="text"
																class="form-control"
																disabled=""
																id="addinput" />
															<div
																class="form-group has-danger">
																<div class="form-control-feedback"
																	id="error1">

																</div>
															</div>
														</div>
													</div>
													<div
														class="col-md-3 col-sm-12">
														<div class="dropdown">


															<button type="button"
																id="addbtn"
																class="btn btn-primary  btn-right"
																style="margin-top: 10px;width: 90%;">Add</button>
															<!-- January 2018 -->
															</a>

														</div>
													</div>
													<div
														class="col-md-3 col-sm-12">
														<div
															class="form-group">
															<label>Delete
																Image
																Category</label>
															<div
																class="form-group row">

																<div
																	class="col-sm-12 col-md-10">
																	<?php

                                                                                                                       $sql_branch = "select * from tblgallerycategory ";
                                                                                                                       $result_branch = $conn->query($sql_branch);
                                                                                                                       echo '<select  class="custom-select col-12" name="branchcode" id="deleteinput"
																			required>';
                                                                                                                       echo '<option value="" selected disabled hidden>Choose here</option>';

                                                                                                                       while ($row = mysqli_fetch_array($result_branch)) {
	                                                                                                                       echo " 
																			<option value=\"$row[0]\">$row[1]</option>";


                                                                                                                       }
                                                                                                                       echo "</select>";
                                                                                                                       mysqli_close($conn);
                                                                                                                       ?>

																</div>
															</div>
														</div>
													</div>
													<div
														class="col-md-3 col-sm-12">
														<div class="dropdown">


															<button type="button"
																id="deletebtn"
																class="btn btn-primary  btn-right"
																style="margin-top: 10px;width: 90%;">Delete</button>
															<!-- January 2018 -->
															</a>

														</div>


													</div>


												</div>



												<hr>
												<div class="row">
													<div
														class="col-md-3 col-sm-12">
														<div
															class="form-group">
															<div
																class="custom-control custom-radio mb-5">
																<input type="radio"
																	id="customRadio1"
																	name="customRadio"
																	class="custom-control-input" />






																<label class="custom-control-label"
																	for="customRadio1">Check
																	Me
																	For
																	Enable
																	Category</label>



															</div>
														</div>
													</div>
													<div
														class="col-md-3 col-sm-12">
														<div
															class="form-group">
															<div
																class="custom-control custom-radio mb-5">
																<input type="radio"
																	id="customRadio2"
																	name="customRadio"
																	class="custom-control-input" />
																<label class="custom-control-label"
																	for="customRadio2">Check
																	Me
																	For
																	Disable
																	Category</label>

															</div>

														</div>
													</div>
													<div
														class="col-md-3 col-sm-12">
														<div
															class="form-group">

															<div
																class="form-group row">
																<!-- <label class="col-sm-12 col-md-2 col-form-label">Category</label> -->
																<div class="col-sm-12 col-md-10"
																	id="cb">
																	<select
																		id="endcinput"></select>

																</div>
															</div>
														</div>
													</div>
													<div
														class="col-md-3 col-sm-12">
														<div class="dropdown">


															<button type="button"
																id="en-dc"
																class="btn btn-primary  btn-right"
																style="margin-top: 10px;width: 90%;">Delete</button>
															<!-- January 2018 -->
															</a>

														</div>


													</div>
												</div>
												<div class="pd-20 card-box mb-30">
													<div class="row">
														<div
															class="col-md-6 col-sm-12">

															<div
																class="custom-control custom-checkbox mb-5">
																<input type="checkbox"
																	class="custom-control-input"
																	id="update" />
																<label class="custom-control-label"
																	for="update">Check
																	Me
																	<div class="text-blue"
																		style="display:inline;">
																		Change
																	</div>
																	Thumnail
																</label>

															</div>

														</div>
														<div
															class="pull-left">
															<h4
																class="text-blue h4">
																Select
																Category
																For <div
																	class="text-blue"
																	style="display:inline;"
																	id="upd">
																	Upload
																</div>
																Thumnail
																Image
															</h4>
															<div
																class="form-group row">
																<!-- <label class="col-sm-12 col-md-2 col-form-label">Category</label> -->
																<div
																	class="col-sm-12 col-md-10">
																	<select class="custom-select col-12"
																		id="cb1">
																		<option
																			selected="">
																			Choose...
																		</option>
																		<option
																			value="1">
																			One
																		</option>
																		<option
																			value="2">
																			Two
																		</option>
																		<option
																			value="3">
																			Three
																		</option>
																	</select>
																</div>
															</div>

														</div>


													</div>
													<form class="dropzone1"
														action="#"
														id="my-awesome-dropzone">
														<div class="fallback">
															<input type="file"
																id="file"
																name="file" />
														</div>
													</form>

													<div class="row">
														<div
															class="col-md-6 col-sm-12">
															<div
																class="title">
																<!-- <h4>Image Dropzone</h4> -->
															</div>
															<nav aria-label="breadcrumb"
																role="navigation">

															</nav>
														</div>

														<!-- Sumit button -->
														<div
															class="col-md-6 col-sm-12 text-right">
															<div
																class="dropdown">

																<button type="button"
																	class="btn btn-primary  btn-right"
																	style="margin-top: 10px;"
																	id="thumbnai">Submit</button>
																<!-- January 2018 -->
																</a>
																<div
																	class="dropdown-menu dropdown-menu-right">

																</div>
															</div>
														</div>
													</div>
												</div>

											</div>


											<div class="pd-20 card-box mb-30">
												<div class="clearfix mb-20">

													<div class="row">
														<div
															class="col-md-6 col-sm-12">
															<div
																class="pull-left">
																<h4
																	class="text-blue h4">
																	Select
																	images
																	to
																	upload
																</h4>
															</div>


														</div>
														<div class="col-md-6 col-sm-12 text-right"
															id="cb2">

															<form>
																<label>Select
																	Category</label>
																<select class="btn btn-primary dropdown-toggle"
																	role="button"
																	data-toggle="dropdown">
																	<div
																		class="dropdown-menu dropdown-menu-right">
																		<option class="dropdown-item"
																			value="AK">
																			<a>Alaska</a>
																		</option>
																		<option class="dropdown-item"
																			value="HI">
																			Hawaii
																		</option>


																		<option class="dropdown-item"
																			value="CA">
																			California
																		</option>
																		<option class="dropdown-item"
																			value="NV">
																			Nevada
																		</option>
																		<option class="dropdown-item"
																			value="OR">
																			Oregon
																		</option>
																		<option class="dropdown-item"
																			value="WA">
																			Washington
																		</option>
																	</div>
																</select>
															</form>


														</div>
													</div>
												</div>


												<form class="dropzone2" action="#"
													id="imgs"
													id="my-awesome-dropzone">
													<div class="fallback">
														<input type="file"
															id="file2"
															name="file"
															multiple />
													</div>
												</form>

												<div class="row">
													<div
														class="col-md-6 col-sm-12">
														<div class="title">
															<!-- <h4>Image Dropzone</h4> -->
														</div>
														<nav aria-label="breadcrumb"
															role="navigation">

														</nav>
													</div>

													<!-- Sumit button -->
													<div
														class="col-md-6 col-sm-12 text-right">
														<div class="dropdown">

															<button type="button"
																class="btn btn-primary  btn-right"
																style="margin-top: 10px;"
																id="imgsubmit">Submit</button>
															<!-- January 2018 -->
															</a>
															<div
																class="dropdown-menu dropdown-menu-right">

															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>









									<div class="pb-20" id="table-data">


									</div>
								</div>


							</div>



						</div>
					</div>


				</div>



				<script src="notify.js"></script>

				<script src="lobibox-master/js/Lobibox.js"></script>
				<script src="lobibox-master/demo/demo.js"></script>
				<script src="src/plugins/dropzone/src/dropzone.js"></script>
				<script>
					Dropzone.autoDiscover = false;
					$(".dropzone").dropzone({
						addRemoveLinks: true,
						removedfile: function (file) {
							var name = file.name;
							var _ref;
							return (_ref = file.previewElement) != null
								? _ref.parentNode.removeChild(file.previewElement)
								: void 0;
						},
					});
				</script>
				<!-- Google Tag Manager (noscript) -->
				<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0"
						width="0" style="display: none; visibility: hidden"></iframe></noscript>

				<script>
					$(document).ready(function () {
						// if checkbox is cheked then enable input field whose id is add

						// on click event in jquery
						const name = document.getElementById("addinput");
						var add = false;
						var del = false;
						var endc = false;


						if (document.getElementById("add").checked) {
							console.log("cheked");
							document.getElementById("addinput").disabled = false;
							add = true;

						}
						else {
							console.log("uncheked");

							document.getElementById("addinput").disabled = true;

						}
						if (document.getElementById("delete").checked) {
							console.log("cheked");
							document.getElementById("deleteinput").disabled = false;
							del = true;

						}
						else {
							console.log("uncheked");

							document.getElementById("deleteinput").disabled = true;

						}

						$(document).on("change", "#add", function () {
							if (document.getElementById("add").checked) {
								console.log("cheked");
								document.getElementById("addinput").disabled = false;
								add = true;
							}
							else {
								console.log("uncheked");

								document.getElementById("addinput").disabled = true;

							}
						});

						$(document).on("change", "#delete", function () {
							if (document.getElementById("delete").checked) {
								console.log("cheked");
								document.getElementById("deleteinput").disabled = false;
								del = true;

							}
							else {
								console.log("uncheked");

								document.getElementById("deleteinput").disabled = true;


							}
						});


						if (!document.getElementById("customRadio1").checked && !document.getElementById("customRadio2").checked) {

							// console.log("cheked");
							// document.getElementById("en-dc").innerHTML="Enable";
							document.getElementById("endcinput").disabled = true;
						}
						// customRadio1
						$(document).on("change", "#customRadio1", function () {
							if (document.getElementById("customRadio1").checked) {

								console.log("cheked");
								document.getElementById("en-dc").innerHTML = "Enable";
								$.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "re",
										name: $("#addinput").val()
										//pass form variable in ajax
									},
									success: function (data) {
										$("#cb").html(data);
									}
								});
								// send request on retrive.php and 

								document.getElementById("endcinput").disabled = false;
								endc = true;

							}
							if (document.getElementById("customRadio2").checked) {

								document.getElementById("en-dc").innerHTML = "Disaaable";

								// document.getElementById("endcinput").disabled=false;



							}
						});
						$(document).on("change", "#update", function () {
							if (document.getElementById("update").checked) {

								console.log("cheked");
								document.getElementById("upd").innerHTML = "Change";
								document.getElementById("endcinput").disabled = false;
								endc = true;
								$.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "cb12",

										//pass form variable in ajax
									},
									success: function (data) {
										$("#cb1").html(data);

									}
								});

							}
							else {
								document.getElementById("upd").innerHTML = "Upload";

								$.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "cb1",

										//pass form variable in ajax
									},
									success: function (data) {
										$("#cb1").html(data);

									}
								});

								// document.getElementById("en-dc").innerHTML="Disable";
								// document.getElementById("endcinput").disabled=false;



							}
						});


						$(document).on("change", "#customRadio2", function () {
							if (document.getElementById("customRadio2").checked) {

								console.log("cheked");
								endc = true;
								document.getElementById("en-dc").innerHTML = "Disable";
								// document.getElementById("deleteinput").disabled=false;
								document.getElementById("endcinput").disabled = false;
								$.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "rd",

										//pass form variable in ajax
									},
									success: function (data) {
										$("#cb").html(data);

									}
								});

							}
							else {

								// document.getElementById("en-dc").innerHTML="Disable";


							}
						});

						var validname = false;
						// only charcter allow validation in js
						name.addEventListener('blur', () => {
							console.log("name is blurred");

							let regex = /^[a-zA-Z]{2,10}$/;
							let str = name.value;
							console.log(regex, str);
							if (regex.test(str)) {
								console.log('Your name is valid');

								document.getElementById("error1").style.display = "none";
								name.classList.add('is-valid');
								validname = true;
							}
							else {
								console.log('Your name is not valid');
								name.classList.add('form-control-danger');
								document.getElementById("error1").style.display = "block";
								document.getElementById("error1").innerHTML = "No Space & special charter allowed";


								validname = false;

							}
						});


						var temp = document.getElementById("alert");
						// write a code which check weather combo box is selected or not

						$(document).on("click", "#addbtn", function () {

							if (validname) {
								$.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "c",
										name: $("#addinput").val()
										//pass form variable in ajax
									},
									success: function (data) {


										// write a code which will clear and disable which id is addinput
										document.getElementById("addinput").value = "";
										document.getElementById("addinput").disabled = true;
										document.getElementById("addinput").classList.remove('is-valid');
										document.getElementById("add").checked = false;



										if (data == 1) {
											temp.innerHTML = '<div class="alert alert-success alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Sucess!</strong> Data Entered Successfully</div>';

											Lobibox.notify('success', {
												size: 'mini',
												rounded: true,
												delayIndicator: true,
												msg: 'Data Entered successfully'
											});
										}
										if (data == 2) {
											temp.innerHTML = '<div class="alert alert-danger alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Error!</strong> Category already Avaliable</div>';

											Lobibox.notify('error', {
												size: 'mini',
												rounded: true,
												delayIndicator: true,
												msg: 'Data Already Available'
											});
										}

										// e.preventDefault();





									}
								}
								);
							}
							else {
								temp.innerHTML = '<div class="alert alert-warning alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Warning!</strong> Please Uncheck Add Category</div>';

							}
						});

						var validdeleteinput = false;
						var branchcode;
						$('#deleteinput').on("change", function () {
							var branchcode = document.getElementById("deleteinput").value;
							// console.log(branchcode);
							validdeleteinput = true;
						});
						// Delete Category
						$(document).on("click", "#deletebtn", function () {
							if (validdeleteinput) {
								$.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "d",
										name: $("#deleteinput").val()
										//pass form variable in ajax
									},
									success: function (data) {


										// write a code which will clear and disable which id is addinput
										document.getElementById("deleteinput").value = "";
										document.getElementById("deleteinput").disabled = true;
										document.getElementById("addinput").classList.remove('is-valid');
										document.getElementById("deletebtn").checked = false;



										if (data == 1) {
											temp.innerHTML = '<div class="alert alert-success alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Sucess!</strong> Data Deleted Successfully</div>';

											Lobibox.notify('success', {
												size: 'mini',
												rounded: true,
												delayIndicator: true,
												msg: 'Data Entered successfully'
											});
										}
										if (data == 2) {
											temp.innerHTML = '<div class="alert alert-danger alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Error!</strong> Category not avaliable. </div>';

											Lobibox.notify('error', {
												size: 'mini',
												rounded: true,
												delayIndicator: true,
												msg: 'Data Already Available'
											});
										}

										// e.preventDefault();





									}
								}
								);
							}
							else {

								temp.innerHTML = '<div class="alert alert-warning alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Warning!</strong> Please Uncheck Delete Category</div>';


							}


						});



						// enable disable catergory
						$('#en-dc').on("click", function () {
							if (document.getElementById("customRadio1").checked) {
								//check combo box selected or not
								var combo = document.getElementById("endcinput");
								if (combo.selectedIndex <= 0) {
									alert("Please Select Valid Value");
								}
								else {
									$.ajax({
										url: "retrivedata.php",
										type: "POST",
										data: {
											id: "managegallery",
											action: "en",
											data: $("#endcinput").val()

										}, success: function (data) {


											// write a code which will clear and disable which id is addinput
											document.getElementById("endcinput").value = "";
											document.getElementById("endcinput").disabled = true;
											// document.getElementById("addinput").classList.remove('is-valid');
											document.getElementById("customRadio1").checked = false;




											if (data == 1) {
												temp.innerHTML = '<div class="alert alert-success alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Sucess!</strong> Category Updated</div>';

												Lobibox.notify('success', {
													size: 'mini',
													rounded: true,
													delayIndicator: true,
													msg: 'Data Entered successfully'
												});
											}
											if (data == 0) {
												temp.innerHTML = '<div class="alert alert-danger alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Error!</strong> Category not avaliable. </div>';

												Lobibox.notify('error', {
													size: 'mini',
													rounded: true,
													delayIndicator: true,
													msg: 'Data Already Available'
												});
											}

											// e.preventDefault();





										}
									});

								}
							}
							else if (document.getElementById("customRadio2").checked) {
								var combo = document.getElementById("endcinput");
								console.log(combo);
								if (combo.selectedIndex <= 0) {
									alert("Please Select Valid Value");
								}
								else {
									$.ajax({
										url: "retrivedata.php",
										type: "POST",
										data: {
											id: "managegallery",
											action: "di",
											data: $("#endcinput").val()
											//pass form variable in ajax
										}, success: function (data) {
											document.getElementById("endcinput").value = "";
											document.getElementById("endcinput").disabled = true;
											// document.getElementById("addinput").classList.remove('is-valid');
											document.getElementById("customRadio2").checked = false;


											// write a code which will clear and disable which id is addinput




											if (data == 1) {
												temp.innerHTML = '<div class="alert alert-success alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Sucess!</strong> Category Disable Successfully</div>';

												Lobibox.notify('success', {
													size: 'mini',
													rounded: true,
													delayIndicator: true,
													msg: 'Data Entered successfully'
												});
											}
											if (data == 0) {
												temp.innerHTML = '<div class="alert alert-danger alert-dismissible alert-alt fade show"><button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="icon-copy fa fa-close"></i></span></button><strong>Error!</strong> Category not avaliable. </div>';

												Lobibox.notify('error', {
													size: 'mini',
													rounded: true,
													delayIndicator: true,
													msg: 'Data Already Available'
												});
											}

											// e.preventDefault();





										}

									});
								}
							}





						});
						$.ajax({
							url: "retrivedata.php",
							type: "POST",
							data: {
								id: "managegallery",
								action: "cb1",

								//pass form variable in ajax
							},
							success: function (data) {
								$("#cb1").html(data);

							}
						});


						// thumbnail

						//retrive combobox


						$('#thumbnai').on("click", function () {
							var selectElement = document.querySelector('#cb1');
							var output = selectElement.options[selectElement.selectedIndex].text;
							var combo = document.getElementById("cb1");
							if (combo.selectedIndex <= 0) {
								alert("Please select Thumnail Category");
							} else {
								var selected = document.getElementById("file").files.length > 0;
								if (!selected) {
									alert("Please select a file");
								}
							}

							if (document.getElementById("update").checked) {



								if (selected) {
									var file_data = $('#file').prop('files')[0];
									var form_data = new FormData();
									form_data.append('file', file_data);
									form_data.append('id', 'managegallery');
									form_data.append('action', 'thumbnai');
									form_data.append('data', output);
									form_data.append('cbid', $("#cb1").val());
									$('#file').val('');
									$("#cb1")[0].selectedIndex = 0;
									$.ajax({
										url: "retrivedata.php",
										type: "POST",
										data: {
											id: "managegallery",
											action: "cb12",

											//pass form variable in ajax
										},
										success: function (data) {
											$("#cb1").html(data);

										}
									});
									$.ajax({
										url: "retrivedata.php",
										type: "POST",
										data: {
											id: "managegallery",
											action: "cb1",

											//pass form variable in ajax
										},
										success: function (data) {
											$("#cb1").html(data);

										}
									});

									$.ajax({
										url: "retrivedata.php",
										type: "POST",
										contentType: false,
										processData: false,
										data: form_data,
										success: function (data) {
											console.log(data.slice(-1));
											if (data.slice(-1) == 1) {
												console.log("File type is not allowed");
												alert('File Type is not allowed( Recommanded JPG, PNG, JPEG)');

											}
											if (data.slice(-1) == 2) {
												console.log("File size is not allowed");
												alert('File size is not allowed( It must be less than 2 MB)');


											}
											if (data.slice(-1) == 0) {
												console.log("Not allowed");
												alert('Invalid File');

											}
											if (data.slice(-1) == 3) {
												console.log("success");
											}
										}
									});
								}


							}
							else {
								if (selected) {
									var file_data = $('#file').prop('files')[0];
									var form_data = new FormData();
									form_data.append('file', file_data);
									form_data.append('id', 'managegallery');
									form_data.append('action', 'thumbnai');
									form_data.append('upload', 'yes');

									form_data.append('data', output);
									form_data.append('cbid', $("#cb1").val());
									$('#file').val('');
									$("#cb1")[0].selectedIndex = 0;

									$.ajax({
										url: "retrivedata.php",
										type: "POST",
										contentType: false,
										processData: false,
										data: form_data,
										success: function (data) {
											console.log(data.slice(-1));
											if (data.slice(-1) == 1) {
												console.log("File type is not allowed");
												alert('File Type is not allowed( Recommanded JPG, PNG, JPEG)');


											}
											if (data.slice(-1) == 2) {
												console.log("File size is not allowed");
												alert('File size is not allowed( It must be less than 2 MB)');


											}
											if (data.slice(-1) == 0) {
												console.log("Not allowed");
												alert('Invalid File');

											}
											if (data.slice(-1) == 3) {
												console.log("success");
												alert('File uploaded successfully');
											}
										}
									});
								}
							}
						});

						$.ajax({
							url: "retrivedata.php",
							type: "POST",
							data: {
								id: "managegallery",
								action: "cb2",

								//pass form variable in ajax
							},
							success: function (data) {
								$("#cb2").html(data);

							}
						});


						$('#imgsubmit').on("click", function () {
							console.log("clike");
							var selectElement = document.querySelector('#cb22');
							var output = selectElement.options[selectElement.selectedIndex].text;
							var combo = document.getElementById("cb22");
							if (combo.selectedIndex <= 0) {
								alert("Please select Thumnail Upload");
							} else {
								var selected = document.getElementById("file2").files.length > 0;
								if (!selected) {
									alert("Please select a file");
								}
							}




							if (selected) {
								var file_data = $('#file2').prop('files')[0];

								var form_data = new FormData();

								var totalfiles = document.getElementById('file2').files.length;

								if (totalfiles > 0) {

									var formData = new FormData();

									// Read selected files
									for (var index = 0; index < totalfiles; index++) {
										form_data.append("files[]", document.getElementById('file2').files[index]);
									}
									form_data.append('file', file_data);
									form_data.append('id', 'managegallery');
									form_data.append('action', 'imgmulti');
									form_data.append('upload', 'yes');

									form_data.append('data', output);
									form_data.append('cbid', $("#cb22").val());
									$('#file2').val('');
									$("#cb2")[0].selectedIndex = 0;



									$.ajax({
										url: "retrivedata.php",
										type: "POST",
										contentType: false,
										processData: false,
										data: form_data,
										success: function (data) {

											// alert(data.slice(-34,-1));
											alert(data);
										}
									});
								}

							}


						});






					});

					$.ajax({
						url: "retrivedata.php",
						type: "POST",
						data: {
							id: "managegallery",
							action: "image",

						},
						success: function (data) {

							$('#imgdisplay').html(data);

						},




					}
					);


					//   delete image
					$(document).on("click", "#yes", function () {
						var id = $("#hide").val();

						$.ajax({
							url: "retrivedata.php",
							type: "POST",
							data: {
								id: "managegallery",
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
										id: "managegallery",
										action: "image",

									},
									success: function (data) {

										$('#imgdisplay').html(data);

									},




								}
								);




								// load_data();
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


						//   update image
						
					});

					

						$(document).on("click", "#editme", function () {
							var id =document.getElementById("hiddencode").value;
						console.log(id);
							// e.preventDefault();
							event.preventDefault();
							// console.log("Hello Oworld");
							if ($("#active").prop("checked")) {
								$.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "edit",
										eid: id,
										data: 1
									},
									success: function (data) {
										alert('Status changed succesfully kindly check on index page');
										console.log("done");
									}
								});
							}
							if ($("#deactive").prop("checked")) {
							event.preventDefault();

								$.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "edit",
										eid: id,
										data: 0
									},
									success: function (data) {
										alert('Status changed succesfully kindly check on index page');

										console.log("done");

									}
								});
							}
                                           	 $('.modal').remove();

							 $('.modal-backdrop').remove();
                                           	 $('body').removeClass("modal-open");

							  $.ajax({
									url: "retrivedata.php",
									type: "POST",
									data: {
										id: "managegallery",
										action: "image",

									},
									success: function (data) {

										$('#imgdisplay').html(data);

									},




								}
								);
						});
					
					


				</script>


				<!-- End Google Tag Manager (noscript) -->
</body>

</html>