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
// $_SESSION["myvi"]=102;
// $_SESSION["myvi"]="";

	$updateid=$name=$add=$city=$pincode=$contact="";
	include 'dbfile.php';
	if(isset($_POST['submit']))
	{
		//echo "Hello";	
		
		$name=$_POST['name'];
		$add=$_POST['add'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$contact=$_POST['contact'];


		echo "$name";
		$sql="INSERT INTO `tblbranch`(`name`, `address`,`city`,`pincode` ,`brContactNo`, `status`) VALUES ('$name','$add','$city','$pincode','$contact','TRUE')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			header("location:managebranch.php");
		}

        if(isset($_POST['done']))
        {
            header("location:managebranch.php");
        }
	
		
		$name=$add=$city=$pincode=$contact="";
		// unset($_POST['submit']);
        // unset($_POST);


        // destroy_POST['submit']($_POST['submit']);

	}
	if(isset($_POST['delete']))
	{
		// $sql="DELETE from `tblbranch` where id="";
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
    (function(w, d, s, l, i) {
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
                                <h4>Cards</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Cards
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">

                    <h4 class="h4 text-blue mb-30">Card columns</h4>
                    <div class="card-columns mb-30">
                        <div class="card card-box">
                            <img class="card-img-top" src="vendors/images/img1.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                                <a type="button" style="width: 100%;" class="btn btn-outline-primary" href="menucatelist.php">
                                    See More
</a>
                            </div>
                        </div>
                        <div class="card card-box">
                            <img class="card-img-top" src="vendors/images/img1.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                              <a type="button" style="width: 100%;" class="btn btn-outline-primary" href="menucatelist.php">
                                    See More
</a>
                            </div>
                        </div>
                        <div class="card card-box">
                            <img class="card-img-top" src="vendors/images/img1.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                              <a type="button" style="width: 100%;" class="btn btn-outline-primary" href="menucatelist.php">
                                    See More
</a>
                            </div>
                        </div>
                        <div class="card card-box">
                            <img class="card-img-top" src="vendors/images/img1.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                              <a type="button" style="width: 100%;" class="btn btn-outline-primary" href="menucatelist.php">
                                    See More
</a>
                               
                            </div>
                        </div>
                        <div class="card card-box">
                            <img class="card-img-top" src="vendors/images/img1.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                              <a type="button" style="width: 100%;" class="btn btn-outline-primary" href="menucatelist.php">
                                    See More
</a>
                            </div>
                        </div>
                        <div class="card card-box">
                            <img class="card-img-top" src="vendors/images/img1.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                              <a type="button" style="width: 100%;" class="btn btn-outline-primary" href="menucatelist.php">
                                    See More
</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
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