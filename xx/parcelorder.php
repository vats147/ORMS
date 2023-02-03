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
    if(isset($_REQUEST['order11']))
    {
        // echo "Hello world";
        header("location:cashier.php");
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
<script src="assets/js/jquery-2.1.0.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>

    <script>
    jQuery(function() {
        jQuery('#ci').click();
    });
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <?php include 'cashiersidebar.php'; ?>
    <!-- <div style="display:none;"> -->
    <a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
        <a  href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
            <img  id="ci" class="card-img-top" src="vendors/images/table.png" alt="Card image cap" style="display:none;" />
        </a>
    </a>
    <!-- <div> -->
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
                    <!-- <p> -->
                    <!-- <div class="modal-body"> -->


                    <form method="POST">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Your Name</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Vatsal" name="name"
                                    value="<?php echo $name; ?>" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" pattern="[0-9]{10}" placeholder="39500678551" type="tel"
                                    name="contact" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">email</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" placeholder="abcd@gmail.com" value="<?php echo $add; ?>"
                                    type="text" name="add" />
                            </div>
                        </div>





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
                            Make an Order
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>