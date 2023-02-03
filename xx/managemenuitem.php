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
		require "adminsidebar.php";
			?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Manage Item item</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.html">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Manage Item item
									</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Simple Datatable start -->

				<div class="card-box mb-30">

					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">item Details</h5>
							<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue"
											data-toggle="tab" href="#home" role="tab"
											aria-selected="true">Add item</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab"
											href="#profile" role="tab"
											aria-selected="false">View item</a>
									</li>

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
																	item
																	Details
																</h4>
																<!-- <p class="mb-30">All bootstrap element classies</p> -->
															</div>

														</div>
														<form>
															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">item
																	name</label>
																<div
																	class="col-sm-12 col-md-10">
																	<input class="form-control"
																		type="text"
																		placeholder="Maysour"
																		id="name" />
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
																	class="col-sm-12 col-md-2 col-form-label">Description</label>
																<div
																	class="col-sm-12 col-md-10">
																	<input class="form-control"
																		type="text"
																		placeholder="This is made up of chatani"
																		id="description" />
																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error2">

																		</div>
																	</div>
																</div>
															</div>

															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Price</label>
																<div
																	class="col-sm-12 col-md-10">
																	<input class="form-control"
																		type="number"
																		placeholder="102"
																		id="price" />
																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error3">

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
																	
																	?>
																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error6">

																		</div>
																	</div>
																</div>
															</div>

															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Category</label>
																<div class="col-sm-12 col-md-10"
																	id="catdisplay">
																	<select class="custom-select col-12"
																		name="branchcode"
																		id="catcode"
																		required>
																		<option value=""
																			selected
																			disabled
																			hidden>
																			Choose
																			here
																		</option>
																	</select>

																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error4">
																			Select
																			Branch
																			First
																		</div>
																	</div>
																</div>
															</div>


															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Upload
																	Images</label>
																<div
																	class="col-sm-12 col-md-10">
																	<div
																		class="custom-file">
																		<input type="file"
																			id="file"
																			class="">
																		<label
																			class="">Upload
																			Images</label>
																		<div
																			class="form-group has-danger">
																			<div class="form-control-feedback"
																				id="error5">

																			</div>
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
																			id="submit"
																			style="margin-top: 10px;">Submit</button>


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

									<div class="tab-pane" id="profile" role="tabpanel">
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



	<?php
		include 'javascript.php';
	?>





	<script>
		$(document).ready(function () {
			// let dataid=0;


			$.ajax({
				url: "retrivedata.php",
				type: "POST",
				data: {
					id: "managemenuitem",
					action: "r",

				}, success: function (data) {
					console.log(data);
					$("#table-data").html(data);


				}
			});

			$(document).on("change", "#branchcode", function () {
				var branchcode = $("#branchcode").val();

				$.ajax({
					url: "retrivedata.php",
					type: "POST",
					data: {
						id: "managemenuitem",
						action: "catdisplay",
						bid: $("#branchcode").val()

					}, success: function (data) {
						console.log(data);
						$("#catdisplay").html(data);


					}
				});

			});





			// retrive form data 
			$(document).on("click", "#submit", function () {

				var name = $("#name").val();


				var price = $("#price").val();

				var category = $("#catcode").val();

				var description = $("#description").val();

				var image = $("#file").val();

				// var status = $("#status").val();

				var branchcode = $("#branchcode").val();
				console.log(branchcode);





				var action = "c";

				var validname = false;
				var validprice = false;
				var validcat = false;
				var validdescription = false;
				var validimage = false;

				var validbranchcode = false;




				//regex
				var regex = /^[a-zA-Z]([0-9a-zA-Z ]){2,}$/;
				var str = name;
				console.log(regex, str);
				if (regex.test(str)) {
					console.log('Your name is valid');

					document.getElementById("error1").style.display = "none";
					$("#name").addClass('is-valid');
					validname = true;
				}
				else {
					console.log('Your name is not valid');
					$("#name").addClass('form-control-danger');
					document.getElementById("error1").style.display = "block";
					document.getElementById("error1").innerHTML = "name must be 2-10 characters long and should not start with a number";


					validname = false;

				}

				//write a rgex which only number is allowed

				regex = /^[0-9]{4}$/;
				str = price;
				console.log(regex, str);
				if (regex.test(str)) {
					//       console.log('Your name is valid');

					document.getElementById("error3").style.display = "none";
					$("#price").addClass('is-valid');
					validprice = true;
				}
				else {
					if (parseInt(price) > 0 && parseInt(price) < 9999) {
						validprice = true;
						document.getElementById("error3").style.display = "none";

						$("#price").addClass('is-valid');
					}
					else {
						console.log('Your price is not valid');
						$("#price").addClass('form-control-danger');
						document.getElementById("error3").style.display = "block";
						document.getElementById("error3").innerHTML = "Price must be less than 9999";


						validprice = false;
					}

				}
				regex = /^([a-zA-Z ]){1,}$/;
				str = description;
				console.log(regex, str);
				if (regex.test(str)) {
					//       console.log('Your name is valid');

					document.getElementById("error2").style.display = "none";
					$("#description").addClass('is-valid');
					validdescription = true;
				}
				else {
					console.log('Your price is not valid');
					$("#description").addClass('form-control-danger');
					document.getElementById("error2").style.display = "block";
					document.getElementById("error2").innerHTML = "description must be less than 9999";


					validdescription = false;

				}

				if (branchcode) {
					// document.getElementById("error3").style.display="none";
					validbranchcode = true;
					document.getElementById("error3").style.display = "none";

					$("#branchcode").addClass('is-valid');

					// console.log("set");
				}
				else {
					validbranchcode = false;
					document.getElementById("error6").innerHTML = "Select Branch";

					$("#branchcode").addClass('is-invalid');
				}

				if (category) {
					// document.getElementById("error3").style.display="none";
					validcat = true;
					// document.getElementById("error4").style.display = "none";

					$("#catcode").addClass('is-valid');

					// console.log("set");
				}
				else {
					validcat = false;
					document.getElementById("error4").innerHTML = "Select Category";

					$("#catcode").addClass('is-invalid');
				}

				var selected = document.getElementById("file").files.length > 0;
				if (!selected) {
					alert("Please select a file");
				}
				else {
					validimage = true;
				}





				if (validname && validprice && validcat && validdescription && validimage) {

					// var file_data = $('#file').prop('files')[0];
					// 		var form_data = new FormData();
					// 		form_data.append('file', file_data);

					var file_data = $('#file').prop('files')[0];

					var form_data = new FormData();
					var code = $('#catcode option:selected').text();

					// var totalfiles = document.getElementById('file').files.length;
					form_data.append('file', file_data);
					form_data.append('id', 'managemenuitem');
					form_data.append('name', name);
					form_data.append('price', price);
					form_data.append('description', description);
					form_data.append('branchcode', branchcode);
					form_data.append('category', category);
					form_data.append('action', 'c');
					form_data.append('cname', code);



					$.ajax({
						url: "retrivedata.php",
						type: "POST",
						data: form_data,
						processData: false,
						contentType: false

						, success: function (data) {

							console.log(data);
							alert(data);

							$.ajax({
								url: "retrivedata.php",
								type: "POST",
								data: {
									id: "managemenuitem",
									action: "r",

								}, success: function (data) {
									console.log(data);
									$("#table-data").html(data);


								}
							});
							// $("#table-data").html(data);

						}
					});
					$('#name').val('');
					$('#price').val('');
					$('#catcode').val('');
					$('#description').val('');
					$('#file').val('');
					$('#branchcode').val('');

					$("#name").removeClass('is-valid');
					$("#price").removeClass('is-valid');
					$("#catcode").removeClass('is-valid');
					$("#description").removeClass('is-valid');
					$("#file").removeClass('is-valid');
					$("#branchcode").removeClass('is-valid');

				}

			});

			$(document).on("click", "#edit", function () {
				 dataid = $(this).data("eeid");
				// console.log(dataid);
				event.preventDefault();

			});
			// delete data

			$(document).on("click", "#del", function () {
				dataid = $(this).data("eid") ;
				event.preventDefault();
			$(document).on("click", "#yes", function () {
				
				$.ajax({
					url: "retrivedata.php",
					type: "POST",
					data: {
						id: "managemenuitem",
						action: "d",
						dataid: dataid
					}, success: function (data) {
						// console.log(data);
						alert(data);
						// $("#table-data").html(data);
						$.ajax({
							url: "retrivedata.php",
							type: "POST",
							data: {
								id: "managemenuitem",
								action: "r",

							}, success: function (data) {
								// console.log(data);
								$("#table-data").html(data);

							}
						});
					}
				});
			});
				// console.log("del done");

				
				// console.log(dataid);

			});

			
			

			// edit
			$(document).on("click", "#editme", function () {
				// console.log(dataid);

				var name = $("#nameedit"+dataid).val();


				var price = $("#priceedit"+dataid).val();

				var category = $("#catcodee"+dataid).val();

				var description = $("#descriptionedit"+dataid).val();

				var image = $("#fileedit"+dataid).val();

				// var status = $("#status").val();


				var action = "e";

				var validname = false;
				var validprice = false;
				var validcat = false;
				var validdescription = false;
				var validimage = false;

				// var validbranchcode = false;




				//regex
				var regex = /^[a-zA-Z]([0-9a-zA-Z ]){2,}$/;
				var str = name;
				console.log(regex, str);
				if (regex.test(str)) {
					console.log('Your name is valid');

					document.getElementById("error11").style.display = "none";
					$("#name"+dataid).addClass('is-valid');
					validname = true;
				}
				else {
					console.log('Your name is not valid');
					$("#name"+dataid).addClass('form-control-danger');
					document.getElementById("error11").style.display = "block";
					document.getElementById("error11").innerHTML = "name must be 2-10 characters long and should not start with a number";


					validname = false;

				}

				//write a rgex which only number is allowed

				regex = /^[0-9]{4}$/;
				str = price;
				console.log(regex, str);
				if (regex.test(str)) {
					//       console.log('Your name is valid');

					document.getElementById("error13").style.display = "none";
					$("#price"+dataid).addClass('is-valid');
					validprice = true;
				}
				else {
					if (parseInt(price) > 0 && parseInt(price) < 9999) {
						validprice = true;
						document.getElementById("error13").style.display = "none";

						$("#price"+dataid).addClass('is-valid');
					}
					else {
						console.log('Your price is not valid');
						$("#price"+dataid).addClass('form-control-danger');
						document.getElementById("error3").style.display = "block";
						document.getElementById("error3").innerHTML = "Price must be less than 9999";


						validprice = false;
					}

				}
				regex = /^([a-zA-Z ]){1,}$/;
				str = description;
				console.log(regex, str);
				if (regex.test(str)) {
					//       console.log('Your name is valid');

					document.getElementById("error12").style.display = "none";
					$("#description"+dataid).addClass('is-valid');
					validdescription = true;
				}
				else {
					console.log('Your price is not valid');
					$("#description"+dataid).addClass('form-control-danger');
					document.getElementById("error12").style.display = "block";
					document.getElementById("error12").innerHTML = "description must be less than 9999";


					validdescription = false;

				}

				
				

				if (category) {
					// document.getElementById("error3").style.display="none";
					validcat = true;
					document.getElementById("error14").style.display = "none";

					$("#catcodee"+dataid).addClass('is-valid');

					// console.log("set");
				}
				else {
					validcat = false;
					document.getElementById("error14").innerHTML = "Select Category";

					$("#catcodee"+dataid).addClass('is-invalid');
				}

				var selected = document.getElementById("fileedit"+dataid).files.length > 0;
				if (!selected) {
					// alert("Please select a file");
				}
				else {
					validimage = true;
				}

				// validimage = true;
				//validcat=true;
					console.log(validname, validprice, validcat, validdescription, validimage);



				if (validname && validprice && validcat && validdescription ) {

					// var file_data = $('#file').prop('files')[0];
					// 		var form_data = new FormData();
					// 		form_data.append('file', file_data);
					var form_data = new FormData();
					
					if(validimage)
					{
						var file_data = $('#fileedit'+dataid).prop('files')[0];

						form_data.append('file', file_data);
					}
					var status=0;
					if(document.getElementById("status-ac").checked)
					{
						status=1;
					}
					else
					{
						status=0;
					}
					
					// var name = document.getElementById("name"+dataid).value;
					var str="#catcodee"+dataid+" option:selected"
					code=$(str).text();
					console.log(code);
					form_data.append('id', 'managemenuitem');
					form_data.append('name', name);
					form_data.append('price', price);
					form_data.append('description', description);
					form_data.append('branchcode', branchcode);
					form_data.append('category', category);
					form_data.append('action', 'e');
					form_data.append('did',dataid);
					form_data.append('status',status);
					form_data.append('cname', code);

					
					$.ajax({
						url: "retrivedata.php",
						type: "POST",
						data: form_data,
						processData: false,
						contentType: false

						, success: function (data) {

							console.log(data);
							alert(data);

							$.ajax({
								url: "retrivedata.php",
								type: "POST",
								data: {
									id: "managemenuitem",
									action: "r",

								}, success: function (data) {
									console.log(data);
									$("#table-data").html(data);


								}
							});
							// $("#table-data").html(data);

						}
					});
					$('.modal-backdrop').remove();
								$('body').removeClass("modal-open");
					$('#name').val('');
					$('#price').val('');
					$('#catcode').val('');
					$('#description').val('');
					$('#file').val('');
					$('#branchcode').val('');

					$("#name").removeClass('is-valid');
					$("#price").removeClass('is-valid');
					$("#catcode").removeClass('is-valid');
					$("#description").removeClass('is-valid');
					$("#file").removeClass('is-valid');
					$("#branchcode").removeClass('is-valid');

				}

			});





		});
	</script>

</body>

</html>