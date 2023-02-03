<?php
	$updateid=$name=$add=$city=$pincode=$contact="";
    $name1=$add1=$city1=$pincode1=$contact1="";
	include 'dbfile.php';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$add=$_POST['add'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$contact=$_POST['contact'];
		echo "$name";
        // $sql=" UPDATE `tblbranch` SET `name`='llll', `address`='it is', `city`='not working', `pincode`='415263', `brContactNo`='4152637444' WHERE `branchcode`='153' ;";
        // $result = mysqli_query($conn, $sql);
        // $sql="";
		$sql="INSERT INTO `tblbranch`(`name`, `address`,`city`,`pincode` ,`brContactNo`, `status`) VALUES ('$name','$add','$city','$pincode','$contact','TRUE')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			header("location:a.php");
		}
		$name=$add=$city=$pincode=$contact="";
    }
    if(isset($_POST['update']))
	{
        echo "cbfhghg";
        $sql=" UPDATE `tblbranch` SET `name`='llll', `address`='it is', `city`='not working', `pincode`='415263', `brContactNo`='1452' ,`status`='1' WHERE `branchcode`='150' ;";
       
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "hello";
        }
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
		include "adminsidebar.php";
		?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Manage Branch</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Manage Branch
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
                                    January 2018
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simple Datatable start -->

                <div class="card-box mb-30">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="pd-20 card-box">
                            <h5 class="h4 text-blue mb-20">Branch Details</h5>
                            <div class="tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab"
                                            aria-selected="true">View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab"
                                            aria-selected="false">Add Branch</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab"
                                            aria-selected="false">Assgin Manager</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        <div class="pd-20">
                                            <table class="data-table table stripe hover nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="table-plus datatable-nosort">Branch Name</th>
                                                        <th>Branch address</th>
                                                        <th>City</th>
                                                        <th>Pincode</th>
                                                        <th>Contact</th>
                                                        <th>View</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
															 $sql = "SELECT * FROM `tblbranch`";
															 
															 $result = mysqli_query($conn, $sql);
															 while ($row = mysqli_fetch_assoc($result)) {
																 $id=$row['branchcode'];
																 $name=$row['name'];
																 $add=$row['address'];
																 $city=$row['city'];
																 $pincode=$row['pincode'];
																 $contact=$row['brContactNo'];
														?>
													
                                                    <tr>
                                                        <td class="table-plus"><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php echo $row['city']; ?></td>
                                                        <td><?php echo $row['pincode']; ?></td>
                                                        <td><?php echo $row['brContactNo']; ?></td>
                                                        <td>
                                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>
                                                                View</a>
                                                        </td>
														
                                                        <td>
														
																	<?php
														$num=$row['branchcode'];
														?>
													
															 <a class="dropdown-item"  class="btn-block"  id=""
                                                                data-toggle="modal" data-target="#bd-example-modal-lg"
                                                                type="button"><i class="dw dw-edit2">
                                                                <!-- =<?php //echo $row['branchcode'];?> -->
																</i>Edit</a> 
															 <a href="a.php?id=<?php echo $row['branchcode'];?>">click please</a>
                                                        </td>
                                                        <td>
                                                           <a class="dropdown-item"  class="btn-block"
                                                                data-toggle="modal" data-target="#confirmation-modal"
                                                                type="button"><i class="dw dw-delete-3"></i> Delete</a>
                                                        </td>


														<!-- Edit form -->
                                                        <div class="col-md-4 col-sm-12 mb-30">
                                                            <!-- <div class="pd-20 card-box height-100-p"> -->
														
                                                            <div class="modal fade bs-example-modal-lg"
                                                                id="bd-example-modal-lg" tabindex="-1" role="dialog"
                                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div
                                                                    class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title"
                                                                                id="myLargeModalLabel">
                                                                                Update
                                                                            </h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-hidden="true">
                                                                                ×
                                                                            </button>
                                                                        </div>

																		<div id="d" >
                                                                            KHARI SHING WITH SODA
																		</div>
                                                                        <?php
                                                                            if(isset($_GET['id']))
                                                                            {
                                                                                $updateid=$_GET['id'];
                                                                                echo $_GET['id'];
                                                                                $sql = "SELECT * FROM `tblbranch` WHERE `branchcode`='$updateid'";
															 
                                                                                $result = mysqli_query($conn, $sql);
                                                                                while ($rows = mysqli_fetch_assoc($result)) {
                                                                                    $id1=$rows['branchcode'];
                                                                                    $name1=$rows['name'];
                                                                                    $add1=$rows['address'];
                                                                                    $city1=$rows['city'];
                                                                                    $pincode1=$rows['pincode'];
                                                                                    $contact1=$rows['brContactNo'];}
                                                                            }
                                                                        ?>
                                                                        <div class="modal-body">
                                                                            <form method="POST">
                                                                                <div class="form-group row">
                                                                                    <label
                                                                                        class="col-sm-12 col-md-2 col-form-label">Branch
                                                                                        Name</label>
                                                                                    <div class="col-sm-12 col-md-10">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="BABA SAI Resturant"
                                                                                            name="name"
                                                                                            value="<?php echo $name1; ?>" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label
                                                                                        class="col-sm-12 col-md-2 col-form-label">Address</label>
                                                                                    <div class="col-sm-12 col-md-10">
                                                                                        <input class="form-control"
                                                                                            placeholder="kapodra "
																							value="<?php echo $add1; ?>"
                                                                                            type="text" name="add" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label
                                                                                        class="col-sm-12 col-md-2 col-form-label">city</label>
                                                                                    <div class="col-sm-12 col-md-10">
                                                                                        <input class="form-control"
                                                                                            placeholder="Surat"
																							value="<?php echo $city1; ?>"
                                                                                            type="text" name="city" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label
                                                                                        class="col-sm-12 col-md-2 col-form-label">pincode</label>
                                                                                    <div class="col-sm-12 col-md-10">
                                                                                        <input class="form-control"
                                                                                            placeholder="395006"
                                                                                            type="text"
                                                                                            value="<?php echo $pincode1; ?>"
                                                                                            name="pincode" />
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group row">
                                                                                    <label
                                                                                        class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                                                                                    <div class="col-sm-12 col-md-10">
                                                                                        <input class="form-control"
                                                                                            pattern="[0-9]{10}"
                                                                                            placeholder="39500678551"
                                                                                            value="<?php echo $contact1; ?>"
                                                                                            type="tel" name="contact" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 col-sm-12">
                                                                                        <div class="title">
                                                                                            <!-- <h4>Image Dropzone</h4> -->
                                                                                        </div>
                                                                                        <nav aria-label="breadcrumb"
                                                                                            role="navigation">

                                                                                        </nav>
                                                                                    </div>

                                                                                    <!-- Sumit button -->

                                                                                </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">

                                                                                Close
                                                                            </button>
                                                                            <button type="button" name="
                                                                            update "
                                                                                class="btn btn-primary">
                                                                                Save changes
                                                                            </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- </div> -->
                                                        </div>

                                                        <!-- delete module -->
                                                        <div class="col-md-4 col-sm-12 mb-30">

                                                            <div class="modal fade" id="confirmation-modal"
                                                                tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body text-center font-18">
                                                                            <h4 class="padding-top-30 mb-30 weight-500">
                                                                                Are you sure you want to continue?
                                                                            </h4>
                                                                            <div class="padding-bottom-30 row"
                                                                                style="max-width: 170px; margin: 0 auto">
                                                                                <div class="col-6">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary border-radius-100 btn-block confirmation-btn"
                                                                                        data-dismiss="modal">
                                                                                        <i class="fa fa-times"></i>
                                                                                    </button>
                                                                                    NO
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <a href="#" class="btn-block"
                                                                                        data-toggle="modal"
                                                                                        data-target="#success-modal"
                                                                                        type="button">
                                                                                        <button type="button" onclick=$("#d").load("data.php?id=<?php echo $num;?>&dbname=<?php echo "tblbranch";?>");



                                                                                            class="btn btn-primary border-radius-100 btn-block confirmation-btn"
                                                                                            data-dismiss="modal">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                        YES
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- </div> -->
                                                        </div>


                                                        <!-- <div class="pd-20 card-box height-100-p"> -->

                                                        <div class="modal fade" id="success-modal" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-center font-18">
                                                                        <h3 class="mb-20">Form Submitted!</h3>
                                                                        <div class="mb-30 text-center">
                                                                            <img src="vendors/images/success.png" />
                                                                        </div>
                                                                        Deleted succesfully
                                                                    </div>
                                                                    
                                                                    <div class="modal-footer justify-content-center">
                                                                        <button type="button" class="btn btn-primary"
                                                                        btn btn-primary  btn-right
                                                                            data-dismiss="modal" name="done">
                                                                            Done
                                                                        </button>
                                                                    </div>
                                                             
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </tr>

                                                    <?php
															 }
														?>


                                                    </tr>
                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="pd-ltr-20 xs-pd-20-10">
                                                <div class="min-height-200px">

                                                    <!-- Default Basic Forms Start -->
                                                    <div class="pd-20 card-box mb-30">
                                                        <div class="clearfix">
                                                            <div class="pull-left">
                                                                <h4 class="text-blue h4">Default Basic Forms</h4>
                                                                <p class="mb-30">All bootstrap element classies</p>
                                                            </div>
                                                            <!-- <div class="pull-right">
                                                                        <a
                                                                            h
                                                                            ref="#basic-form1"
                                                                            class="btn btn-primary btn-sm scroll-click"
                                                                            rel="content-y"
                                                                            data-toggle="collapse"
                                                                            role="button"
                                                                            >
                                                                            <i class="fa fa-code"></i> Source Code
                                                                        </a>
                                                                    </div> -->
                                                        </div>
                                                        <form method="POST">
                                                            <div class="form-group row">
                                                                <label class="col-sm-12 col-md-2 col-form-label">Branch
                                                                    Name</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control" type="text"
                                                                        placeholder="BABA SAI Resturant" name="name"
                                                                        value="<?php echo $name; ?>"
                                                                         />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-12 col-md-2 col-form-label">Address</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control" placeholder="kapodra "
                                                                        type="text" name="add" value="<?php echo $add; ?>"
                                                                        />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-12 col-md-2 col-form-label">city</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control" placeholder="Surat"
                                                                        type="text" name="city" value="<?php echo $city; ?>"
                                                                         />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-12 col-md-2 col-form-label">pincode</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control" placeholder="395006"
                                                                        type="text" name="pincode" value="<?php echo $pincode; ?>"
                                                                       />
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control" pattern="[0-9]{10}"
                                                                        placeholder="39500678551" type="tel" 
                                                                        name="contact" value="<?php echo $contact; ?>"
                                                                         />
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
                                                                <div class="col-md-6 col-sm-12 text-right">
                                                                    <div class="dropdown">
                                                                        <input type="submit" name="submit"
                                                                            class="btn btn-primary  btn-right"
                                                                            style="margin-top: 10px;">
                                                                        <!-- <button type="button" name="submit" class="btn btn-primary  btn-right"
                                                                            style="margin-top: 10px;">Submit</button> -->

                                                                        <button type="button" name="update"
                                                                            class="btn btn-primary  btn-right"
                                                                            style="margin-top: 10px;"
                                                                            disabled>Update</button>

                                                                        <button type="button" name="delete"
                                                                            class="btn btn-primary  btn-right"
                                                                            style="margin-top: 10px;"
                                                                            disabled>Delete</button>
                                                                        <!-- January 2018 -->
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
                                    <div class="tab-pane fade" id="contact" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="pd-ltr-20 xs-pd-20-10">
                                                <div class="min-height-200px">
                                                    <div class="page-header">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="title">
                                                                    <h4>Manage Manager</h4>
                                                                </div>
                                                                <nav aria-label="breadcrumb" role="navigation">
                                                                    <ol class="breadcrumb">
                                                                        <li class="breadcrumb-item">
                                                                            <a href="index.html">Home</a>
                                                                        </li>
                                                                        <li class="breadcrumb-item active"
                                                                            aria-current="page">
                                                                            Manage Manager
                                                                        </li>
                                                                    </ol>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <label class="weight-600">Manage Manager</label>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-checkbox mb-5">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck1" checked />
                                                                        <label class="custom-control-label"
                                                                            for="customCheck1">Check Me For
                                                                            Add Branch Manager</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="custom-control custom-checkbox mb-5">
                                                                    <!-- <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                                        <label class="custom-control-label" for="customCheck2   ">Check Me For
                                                                            Delete Category</label> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Select Branch</label>
                                                                    <input type="text" class="form-control"
                                                                        disabled="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12">
                                                                <div class="dropdown">

                                                                    <div class="form-group">
                                                                        <label>Select Branch Manager</label>
                                                                        <input type="text" class="form-control" />
                                                                    </div>
                                                                    <!-- January 2018 -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12">
                                                                <button type="button" class="btn btn-primary  btn-right"
                                                                    style="margin-top: 10px;width: 90%;">Add</button>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12">
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn btn-primary  btn-right"
                                                                        style="margin-top: 10px;width: 90%;">Delete</button>
                                                                    <!-- January 2018 -->
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pd-ltr-20 xs-pd-20-10">
                                                <div class="min-height-200px">

                                                    <!-- Simple Datatable start -->
                                                    <div class="card-box mb-30">
                                                        <div class="pd-20">
                                                            <h4 class="text-blue h4">Data Table Simple</h4>
                                                            <p class="mb-0">
                                                                <!-- you can find more options
                                                                    <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a> -->
                                                            </p>
                                                        </div>
                                                        <div class="pb-20">
                                                            <table class="data-table table stripe hover nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-plus datatable-nosort">Branch
                                                                            Name</th>
                                                                        <!-- <th></th> -->
                                                                        <th>Branch address</th>
                                                                        <!-- <th>Address</th> -->
                                                                        <!-- <th>Start Date</th> -->
                                                                        <!-- <th class="datatable-nosort">Action</th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="table-plus">Gloria F. Mead</td>
                                                                        <!-- <td>25</td> -->
                                                                        <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
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
    </div>
    </div>
    </div>
    </div>
    <!-- js -->
    <?php

			include "javascript.php"
			?>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>