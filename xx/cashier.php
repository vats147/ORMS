<?php
// $_SESSION["myvi"]=102;
// $_SESSION["myvi"]="";

	$updateid=$name=$add=$city=$pincode=$contact="";
	include 'dbfile.php';
    session_start();
    if(isset($_SESSION['utype']))
    {
        $utype=$_SESSION['utype'];
        if($utype!="cashier")
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
		include "cashiersidebar.php";
		?>

    <div class="main-container">

        <div class="faq-wrap">
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
        

    </div>


    
    </div>

    
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>