<?php
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
	$updateid=$name=$add=$city=$pincode=$contact="";
	include 'dbfile.php';
    if(isset($_REQUEST['order11']))
    {
        
        header("location:orderman.php");
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
   

    <?php
		include "ordermansidebar.php";
		?>

    <div class="main-container">

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
                           


                            <form >
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
                                        <input class="form-control" pattern="[0-9]{10}" placeholder="39500678551"
                                            type="tel" name="contact" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">email</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" placeholder="abcd@gmail.com"
                                            value="<?php echo $add; ?>" type="text" name="add" />
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

                                </div>
                                
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
            
            <?php
            $sql = "select * from tbltable where branchcode=7 AND status=1";
            $result = $conn->query($sql);
            while($row=mysqli_fetch_row($result))
            {
                echo '<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <div class="card card-box">
                    <a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
                        <img class="card-img-top" src="vendors/images/table.png" alt="Card image cap" style="border:2px solid green;" />
                    </a>
                                <h4 style="text-align:center;">'.$row[1].'</h4>
                </div>
            </div>';
            }
            ?>
            


            
        </div>

    </div>




    </div>
    </div>

    
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>