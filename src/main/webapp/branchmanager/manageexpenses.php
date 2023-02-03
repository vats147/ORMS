<?php
include 'dbfile.php';
session_start();
if (isset($_SESSION['utype'])) {
	$utype = $_SESSION['utype'];
	if ($utype != "branchmanager") {
		header("Location:../Login.php");
	}
} else {
	header("Location:../Login.php");
}
?>

<!-- Basic Page Info -->
<meta charset="utf-8" />
<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

<!-- Site favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

<!-- lobibob -->
<link rel="stylesheet" href="lobibox-master/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="lobibox-master/demo/demo.css" />

<link rel="stylesheet" href="lobibox-master/dist/css/Lobibox.min.css" />

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
	rel="stylesheet" />
<!-- CSS -->
<!-- <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" /> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- <script src="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script> -->
<!-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->

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
		w[l].push({
			"gtm.start": new Date().getTime(),
			event: "gtm.js"
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != "dataLayer" ? "&l=" + l : "";
		j.async = true;
		j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
</script>



<!-- End Google Tag Manager -->

<!-- lolibob testing -->


</head>

<body>


	<?php
    include "adminsidebar.php";
    
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
								<h4>Manage Expense</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.html">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Manage Expense
									</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Simple Datatable start -->

				<div class="card-box mb-30">


					<div class="pd-20 card-box">
						<h5 class="h4 text-blue mb-20">Expense Details</h5>
						<div class="tab">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab"
										aria-selected="true">ADD Expenses</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab"
										aria-selected="false">View Expense</a>
								</li>

							</ul>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="home" role="tabpanel">

									<div class="pd-20">
										<div class="pd-ltr-20 xs-pd-20-10">
											<div class="min-height-200px">

												<!-- Default Basic Forms Start -->
												<div class="pd-20 card-box mb-30">
													<div class="clearfix">
														<div class="pull-left">
															<h4 class="text-blue h4">Expense Details</h4>
															<!-- <p class="mb-30">All bootstrap element classies</p> -->
														</div>

													</div>
													<form id="form">
														<div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Expense
																Type *</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" type="text" id="expensetype"
																	placeholder="Hello" required />
																<div class="form-group has-danger">
																	<div class="form-control-feedback" id="error1">

																	</div>
																</div>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Expense
																Value *</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" type="number"
																	onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode <= 57"
																	id="evalue" placeholder="World" required />
																<div class="form-group has-danger">
																	<div class="form-control-feedback" id="error2">

																	</div>
																</div>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Expense
																Description</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" type="text" id="des"
																	placeholder="Karigar ne appya" />
																<div class="form-group has-danger">
																	<div class="form-control-feedback" id="error3">

																	</div>
																</div>
															</div>
														</div>

														




														<div class="row">
															<div class="col-md-6 col-sm-12">
																<div class="title">
																	<!-- <h4>Image Dropzone</h4> -->
																</div>

															</div>

															<!-- Sumit button -->
															<div class="col-md-6 col-sm-12 text-right">
																<div class="dropdown">

																	<button type="button"
																		class="btn btn-primary  btn-right" id="done"
																		style="margin-top: 10px;">Submit</button>


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
								<div class="tab-pane fade" id="profile" role="tabpanel">
									<div class="pb-20" id="table-data">


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


	<script src="notify.js"></script>

	<script src="lobibox-master/js/Lobibox.js"></script>
	<script src="lobibox-master/demo/demo.js"></script>
	<script>
		$(document).ready(function () {

			function load_data() {





				$.ajax({
					url: "retrivedata.php",
					type: "POST",
					data: {
						id: "expense",
						action: "r"
					},
					success: function (data) {
						console.log("SUccess");
						$("#table-data").html(data);



					}
				});

			};
			load_data();

			$(document).on("click", "#yes", function () {
				var id = $("#hide").val();

				$.ajax({
					url: "retrivedata.php",
					type: "POST",
					data: {
						id: "expense",
						action: "d",
						eid: id
					},
					success: function (data) {

						$('.modal-backdrop').remove();
						$('body').removeClass("modal-open");



						load_data();
						console.log("Delete");
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



		});

		const expensetype = document.getElementById("expensetype");
		const evalue = document.getElementById("evalue");
		//const branchcode = document.getElementById("branchcode");
		// const datee = document.getElementById("date");

		var validexpensevalue = false;
		var validexpensetype = false;
		//var validbranchcode = false;
		// var validdate = false;

		//promocode validate
		expensetype.addEventListener('blur', () => {
			console.log("Promocode is blurred");

			let regex = /^[a-zA-Z]{2,10}$/;
			let str = expensetype.value;
			console.log(regex, str);
			if (regex.test(str)) {
				console.log('Your name is valid');

				document.getElementById("error1").style.display = "none";
				expensetype.classList.add('is-valid');
				validexpensetype = true;
			}
			else {
				console.log('Your name is not valid');
				expensetype.classList.add('form-control-danger');
				document.getElementById("error1").style.display = "block";
				document.getElementById("error1").innerHTML = "Expense Type must be 2-10 characters long and should not start with a number";


				validexpensetype = false;

			}
		});

		//discount validate

		evalue.addEventListener('blur', () => {
			console.log("discount is blurred");
			// Validate discount here
			let regex = /^([0-9]){2,10}$/;
			let str = evalue.value;
			console.log(regex, str);
			if (regex.test(str)) {
				console.log('Your discount is valid');
				evalue.classList.remove('is-invalid');
				evalue.classList.add('is-valid');


				document.getElementById("error2").style.display = "none";
				validexpensevalue = true;

				// document.getElementById("error2").style.display="none";

			}
			else {
				console.log('Your discount is not valid');
				// discount.classList.add('form-control-danger');
				console.log(evalue.value);
				document.getElementById("error2").style.display = "block";
				if (parseInt(str) < 9999999999) {
					console.log(str);

					evalue.getElementById("error2").style.display = "none";
					evalue.classList.add('is-valid');
					validexpensevalue = true;


				}
				else {
					console.log("BIh");
					document.getElementById("error2").innerHTML = "Please enter Expense value";
					discount.classList.add('is-invalid');
					validexpensevalue = false;
				}

			}
		});



		






		// submit button check
		// const expensetype = document.getElementById("expensetype");
		// const evalue = document.getElementById("evalue");
		// const branchcode = document.getElementById("branchcode");
		const des = document.getElementById("des").value;

		$(document).on("click", "#done", function () {



			if (validexpensetype  && validexpensevalue) {
				$.ajax({
					url: "retrivedata.php",
					type: "POST",
					data: {
						id: "expense",
						action: "c",

						branchcode: <?php echo $_SESSION['bid'];?>,
						evalue: evalue.value,
						expensetype: expensetype.value,
						description: des

					},
					success: function (data) {

						if (data == 1) {

							console.log("success");

							Lobibox.notify('success', {
								size: 'mini',
								rounded: true,
								delayIndicator: true,
								msg: 'Data Inserted Successfully'

							});
							validexpensevalue = false;
							validexpensetype = false;
							//validbranchcode = false;
							expensetype.classList.remove('is-valid');
							evalue.classList.remove('is-valid');
							//branchcode.classList.remove('is-valid');





							$("#form").trigger("reset");
							document.getElementById("form").reset();
							$.ajax({
								url: "retrivedata.php",
								type: "POST",
								data: {
									id: "expense",
									action: "r"
								},
								success: function (data) {
									console.log("SUccess");
									$("#table-data").html(data);



								}
							});

							// load_data();
						}

						else {
							Lobibox.notify('error', {
								size: 'mini',
								rounded: true,
								delayIndicator: true,
								msg: 'An error occur'
							});
						}


					}
				});
			}
			else {
				// console.log("Not set");
				Lobibox.notify('error', {
					size: 'mini',
					rounded: true,
					delayIndicator: true,
					msg: 'Invalid Details '
				});
			}
		});

	</script>
</body>

</html>