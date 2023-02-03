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
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="../CALENDER/css/bootstrap.min.css">
	<link rel="stylesheet" href="../CALENDER/fullcalendar/lib/main.min.css">
	<script src="../CALENDER/js/jquery-3.6.0.min.js"></script>
	<script src="../CALENDER/js/bootstrap.min.js"></script>
	<script src="../CALENDER/fullcalendar/lib/main.min.js"></script>
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
			href="src/plugins/fullcalendar/fullcalendar.css"
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
								<h4>Calendar</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.html">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Calendar
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">

					<!-- calendar modal -->




					<div class="container py-5" id="page-container">
						<div class="row">
							<div class="col-md-9">
								<div id="calendar"></div>
							</div>
							<div class="col-md-3">
								<div class="cardt rounded-0 shadow">
									<div class="card-header bg-gradient bg-primary text-light">
										<h5 class="card-title">Schedule Form</h5>
									</div>
									<div class="card-body">
										<div class="container-fluid">
											<form action="./CALENDER/save_schedule.php" method="post"
												id="schedule-form">
												<input type="hidden" name="id" value="">
												<div class="form-group mb-2">
													<label for="title" class="control-label">Title</label>
													<input type="text" class="form-control form-control-sm rounded-0"
														name="title" id="title" required>
												</div>
												<div class="form-group mb-2">
													<label for="description" class="control-label">Description</label>
													<textarea rows="3" class="form-control form-control-sm rounded-0"
														name="description" id="description" required></textarea>
												</div>
												<div class="form-group mb-2">
													<label for="description" class="control-label">Customer name:</label>
													<input type="text" class="form-control form-control-sm rounded-0"
														name="Customer" id="Customer" required>
													
												</div>
												<div class="form-group mb-2">
													<label for="description" class="control-label">Contact number</label>
													<input type="text" class="form-control form-control-sm rounded-0"
														name="Contact" id="Contact" required>
													
												</div>
												<div class="form-group mb-2">
													<label for="start_datetime" class="control-label">Start</label>
													<input type="datetime-local"
														class="form-control form-control-sm rounded-0"
														name="start_datetime" id="start_datetime" required>
												</div>
												<div class="form-group mb-2">
													<label for="end_datetime" class="control-label">End</label>
													<input type="datetime-local"
														class="form-control form-control-sm rounded-0"
														name="end_datetime" id="end_datetime" required>
												</div>
											</form>
										</div>
									</div>
									<div class="card-footer">
										<div class="text-center">
											<button class="btn btn-primary btn-sm rounded-0" type="submit"
												form="schedule-form"><i class="fa fa-save"></i> Save</button>
											<button class="btn btn-default border btn-sm rounded-0" type="reset"
												form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Event Details Modal -->
					<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content rounded-0">
								<div class="modal-header rounded-0">
									<h5 class="modal-title">Schedule Details</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body rounded-0">
									<div class="container-fluid">
										<dl>
											<dt class="text-muted">Title</dt>
											<dd id="title" class="fw-bold fs-4"></dd>
											<dt class="text-muted">Description</dt>
											<dd id="description" class=""></dd>

											<dt class="text-muted">Customer Name</dt>
											<dd id="Customer" class=""></dd>
											<dt class="text-muted">Contact number</dt>
											<dd id="Contact" class=""></dd>

											<dt class="text-muted">Start</dt>
											<dd id="start" class=""></dd>
											<dt class="text-muted">End</dt>
											<dd id="end" class=""></dd>
										</dl>
									</div>
								</div>
								<div class="modal-footer rounded-0">
									<div class="text-end">
										<button type="button" class="btn btn-primary btn-sm rounded-0" id="edit"
											data-id="">Edit</button>
										<button type="button" class="btn btn-danger btn-sm rounded-0" id="delete"
											data-id="">Delete</button>
										<button type="button" class="btn btn-secondary btn-sm rounded-0"
											data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Event Details Modal -->

				</div>
				<?php
                    $schedules = $conn->query("SELECT * FROM `schedule_list`");
                    $sched_res = [];
                    foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
	                    $row['sdate'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
	                    $row['edate'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
	                    $sched_res[$row['id']] = $row;
                    }
                    ?>
				<?php
                    if (isset($conn))
	                    $conn->close();
                    ?>
</body>
<script>
	var scheds = $.parseJSON('<?= json_encode($sched_res) ?>');
</script>
<!-- <script src="./js/script.js"></script> -->
<script>
	var calendar;
	var Calendar = FullCalendar.Calendar;
	var events = [];
	$(function () {
		if (!!scheds) {
			Object.keys(scheds).map(k => {
				var row = scheds[k]
				events.push({ id: row.id, title: row.title, start: row.start_datetime, end: row.end_datetime,Customer:row.Customer,Contact:row.Contact });
			})
		}
		var date = new Date()
		var d = date.getDate(),
			m = date.getMonth(),
			y = date.getFullYear()

		calendar = new Calendar(document.getElementById('calendar'), {
			headerToolbar: {
				left: 'prev,next today',
				right: 'dayGridMonth,dayGridWeek,list',
				center: 'title',
			},
			selectable: true,
			themeSystem: 'bootstrap',
			//Random default events
			events: events,
			eventClick: function (info) {
				var _details = $('#event-details-modal')
				var id = info.event.id
				if (!!scheds[id]) {
					_details.find('#title').text(scheds[id].title)
					_details.find('#description').text(scheds[id].description)
					_details.find('#Contact').text(scheds[id].Contact)
					_details.find('#Customer').text(scheds[id].Customer)


					_details.find('#start').text(scheds[id].sdate)
					_details.find('#end').text(scheds[id].edate)
					// console.log(String(scheds[id].Contact));

					_details.find('#edit,#delete').attr('data-id', id)
					_details.modal('show')
				} else {
					alert("Event is undefined");
				}
			},
			eventDidMount: function (info) {
				// Do Something after events mounted
			},
			editable: true
		});

		calendar.render();

		// Form reset listener
		$('#schedule-form').on('reset', function () {
			$(this).find('input:hidden').val('')
			$(this).find('input:visible').first().focus()
		});

		// Edit Button
		$('#edit').click(function () {
			var id = $(this).attr('data-id')
			if (!!scheds[id]) {
				var _form = $('#schedule-form')
				console.log(String(scheds[id].start_datetime), String(scheds[id].start_datetime).replace(" ", "\\t"))

				console.log(String(scheds[id].Contact));
				console.log(String(scheds[id].Customer));

				_form.find('[name="id"]').val(id)
				_form.find('[name="title"]').val(scheds[id].title)
				_form.find('[name="description"]').val(scheds[id].description)
				_form.find('[name="start_datetime"]').val(String(scheds[id].start_datetime).replace(" ", "T"))
				_form.find('[name="end_datetime"]').val(String(scheds[id].end_datetime).replace(" ", "T"))

				_form.find('[name="Contact"]').val(scheds[id].Contact)
				_form.find('[name="Customer"]').val(scheds[id].Customer)


				$('#event-details-modal').modal('hide')
				_form.find('[name="title"]').focus()
			} else {
				alert("Event is undefined");
			}
		});

		// Delete Button / Deleting an Event
		$('#delete').click(function () {
			var id = $(this).attr('data-id')
			if (!!scheds[id]) {
				var _conf = confirm("Are you sure to delete this scheduled event?");
				console.log(id);
				if (_conf === true) {
					location.href = "../CALENDER/delete_schedule.php?id=" + id;
				}
			} else {
				alert("Event is undefined");
			}
		});
	});
</script>



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
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<!-- <script src="src/plugins/fullcalendar/fullcalendar.min.js"></script> -->
<!-- <script src="vendors/scripts/calendar-setting.js"></script> -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
		style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>