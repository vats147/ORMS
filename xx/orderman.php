<?php
// $_SESSION["myvi"]=102;
// $_SESSION["myvi"]="";

	$updateid=$name=$add=$city=$pincode=$contact="";
	include 'dbfile.php';

    session_start();
    if(isset($_SESSION['utype']))
    {
        $utype=$_SESSION['utype'];
        if($utype!="orderman")
        {
            header("Location:Login.php");
        }
    }
    else
    {
        header("Location:Login.php");
    }
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
    <!-- <a href="./cart/cart.php"></a> -->

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
		include "ordermansidebar.php";
		?>

    <div class="main-container">

        <div class="faq-wrap">

        <div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
                    <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-hdd-stack"></span
								><span class="mtext">Multi Level Menu</span>
							</a>
							<ul class="submenu">
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li class="dropdown">
									<a href="javascript:;" class="dropdown-toggle">
										<span class="micon fa fa-plug"></span
										><span class="mtext">Level 2</span>
									</a>
									<ul class="submenu child">
										<li><a href="javascript:;">Level 2</a></li>
										<li><a href="javascript:;">Level 2</a></li>
									</ul>
								</li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
							</ul>
						</li>
        </ul>
</div>
</div>


            <h4 class="mb-20 h4 text-blue">Accordion example</h4>
            <div id="accordion">
                <div class="card">



                    <div class="card-header">
                        <a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
                            <button class="btn btn-block" data-toggle="collapse" data-target="#faq1">
                                Collapsible Group Item #1
                            </button>

                        </a>
                    </div>

                    <div id="faq1" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
                            Collapsible Group Item #2
                        </button>
                    </div>
                    <div id="faq2" class="collapse" data-parent="#accordion">

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3">
                            Collapsible Group Item #3
                        </button>
                    </div>
                    <div id="faq3" class="collapse" data-parent="#accordion">

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq4">
                            Collapsible Group Item #4
                        </button>
                    </div>
                    <div id="faq4" class="collapse" data-parent="#accordion">

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5">
                            Collapsible Group Item #5
                        </button>
                    </div>
                    <div id="faq5" class="collapse" data-parent="#accordion">

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq6">
                            Collapsible Group Item #6
                        </button>
                    </div>
                    <div id="faq6" class="collapse" data-parent="#accordion">

                    </div>
                </div>
            </div>


        </div>
        <div class="row">


            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                Large modal
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                        </div>


                        <div class="modal-body">
                            <form method="post">
                                <div class="select-role">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <button class="btn active" style="">
                                            <!-- <label class="btn active" style="margin:10px;"> -->
                                            <!-- <input type="radio" name="options" id="admin" /> -->
                                            <div class="icon">
                                                <img src="vendors/images/briefcase.svg" class="svg" alt="" />
                                            </div>
                                            <span>I'm</span>
                                            Spicy
                                            <!-- </label> -->
                                        </button>
                                        <button class="btn" style="">
                                            <!-- <label class="btn" style="margin:10px;"> -->
                                            <input type="radio" name="options" id="user" />
                                            <div class="icon">
                                                <img src="vendors/images/briefcase.svg" class="svg" alt="" />

                                            </div>
                                            <span>I'm</span>
                                            Jain
                                            <!-- </label> -->
                                        </button>
                                        <button class="btn" style="">
                                            <!-- <label class="btn" style="margin:10px;"> -->
                                            <input type="radio" name="options" id="user" />
                                            <div class="icon">
                                                <img src="vendors/images/briefcase.svg" class="svg" alt="" />

                                            </div>
                                            <span>I'm</span>
                                            Jain
                                            <!-- </label> -->
                                        </button>
                                        <button class="btn" style="">
                                            <!-- <label class="btn" style="margin:10px;"> -->
                                            <input type="radio" name="options" id="user" />
                                            <div class="icon">
                                                <img src="vendors/images/briefcase.svg" class="svg" alt="" />

                                            </div>
                                            <span>I'm</span>
                                            Salty
                                            <!-- </label> -->
                                        </button>
                                    </div>
                                </div>

                            </form>
                            <!-- <p> -->
                            <!-- <div class="modal-body"> -->


                            <form method="POST">
                                <div class="form-group row">



                                </div>
                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                        class="input-group-btn input-group-prepend"><button
                                            class="btn btn-primary bootstrap-touchspin-down"
                                            type="button">-</button></span><span
                                        class="input-group-addon bootstrap-touchspin-prefix input-group-prepend"><span
                                            class="input-group-text">QTY</span></span><input id="demo2" type="text"
                                        value="0" name="demo2" class="form-control" spellcheck="false"
                                        data-ms-editor="true"><span class="input-group-btn input-group-append"><button
                                            class="btn btn-primary bootstrap-touchspin-up"
                                            type="button">+</button></span></div>






                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="title">
                                            <!-- <h4>Image Dropzone</h4> -->
                                        </div>
                                        <nav aria-label="breadcrumb" role="navigation">

                                        </nav>
                                    </div>

                                    <!-- Sumit button -->

                                </div>
                                <!-- </div> -->
                                <!-- </p> -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <form method="POST">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <!-- <form method="POST" action="ordermantable.php">  -->
                                <button type="submit" name="order11" class="btn btn-primary">
                                    Update
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    </div>


    <!-- End Google Tag Manager (noscript) -->
</body>

</html>