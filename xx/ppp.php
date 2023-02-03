<?php 
      include 'dbfile.php';
      $name=$add=$city=$pincoe=$contact="";
      $did=$try="";
      $promocodeid=$uname=$uadd=$ucity=$upincoe=$ucontact="";
      $flag=1;
      session_start();
      $_SESSION['check']=0;
     $result=0;
   
?>

<?php
    // insert code

    if (isset($_POST['submit']))
    {
       
        $promocodename=$_POST['promocodename'];
        
        $discountpercentage=$_POST['discountpercentage'];
        $branchcode=$_POST['branchcode'];
        $expdate=$_POST['date'];
        
        unset($_REQUEST);
        $_POST=array();
       
        if($flag==1)
        {
        $sql = "INSERT INTO `tblpromocode`(`promoCode`, `discount`,`branchCode`,`ExpDate` , `status`) VALUES ('$promocodename','$discountpercentage','$branchcode','$expdate',1)";
        $result = mysqli_query($conn, $sql);
       
        $_SESSION['check']=1;
        echo " <script> document.getElementById(\"ckk\").click();
        </script>";
        unset($_POST['submit']);
        unset($_REQUEST);
        $_POST=array();
        $temp=0;
    
        }
        else
        {
            
        }
        if ($result) {

            
            // echo "<script> alert('hello');</script>";
            
            header("location:ppp.php");
        }
    }
    if (isset($_POST['btndone'])) {
        $did=$_POST['deleteid'];
        $sql = "DELETE FROM `tblpromocode` WHERE `promoId`='$did'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location:ppp.php");
        }
    }
    if (isset($_POST['editpromo']))
    {
        // echo "<script>alert('Hello World');</script>";
       
        $promocodeid=$_POST['hiddenid'];
        
        $expdate=$_POST['date'];
        
        $branchcode=$_POST['branchcode'];
        $discountpercentage=$_POST['discountpercentage'];
        $promocodename=$_POST['promocodename'];
        $status=$_POST['optradio'];
        
        // echo "<script>console.log('.$status.');</script>";
        
        // if(isset($_POST['cbb']))
        // {
        
        //     echo "<script>console.log('hello');</script>";

        // $status=$_POST['cbb'];
       
        // }
        // else
        // {
        //     echo "<script>console.log('world');</script>";

        //     $status=$_POST['cbb'];
        // }

        
         $sql="UPDATE `tblpromocode` SET `promoCode`='$promocodename',`discount`='$discountpercentage',`branchCode`='$branchcode',`ExpDate`='$expdate',`status`='$status' WHERE `promoId`='$promocodeid'";
         
        //  $sql="UPDATE `tblbranch` SET `branchcode`='$uname' WHERE `branchcode`='$promocodeid'";
         $result = mysqli_query($conn, $sql);
         if ($result) {
            header("location:ppp.php");
        
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

    <!-- lobibob -->
    <link rel="stylesheet" href="lobibox-master/font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="lobibox-master/demo/demo.css"/>
        
        <link rel="stylesheet" href="lobibox-master/dist/css/Lobibox.min.css"/>

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

    <!-- lolibob testing -->
   
    
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
   
    <div id="myalert">
    <div class="alert alert-primary alert-dismissible alert-alt fade show">
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                    <strong>Success!</strong> Message has been sent.
                                </div>         
                                                            </div>
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>PromoCode</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        PromoCode
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        
                    </div>
                </div>
                <button id="ck" style="display:none" onclick="warnn(1)"></button>
                <!-- Simple Datatable start -->

                <div class="card-box mb-30">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="pd-20 card-box">
                            <h5 class="h4 text-blue mb-20">Branch Details</h5>
                            <div class="tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab"
                                            aria-selected="true">PromoCode</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab"
                                            aria-selected="false">Add New PromoCode</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        <div class="pd-20">
                                            <table class="data-table table stripe hover nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="table-plus datatable-nosort">PromoCode</th>
                                                        <th>Discount</th>
                                                        <th>Branch Code</th>
                                                        <th>Expertion Date</th>
                                                        <th>Status</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
															 $sql = "SELECT * FROM `tblpromocode`";
															 
															 $result = mysqli_query($conn, $sql);
															 while ($row = mysqli_fetch_assoc($result)) {
																 $id=$row['promoId'];
																 $name=$row['promoCode'];
																 $add=$row['discount'];
																 $city=$row['branchCode'];
																 $pincode=$row['ExpDate'];
																 $contact=$row['status'];
														?>

                                                    <tr>
                                                        <td class="table-plus"><?php echo $row['promoCode']; ?></td>
                                                        <td><?php echo $row['discount']; ?></td>
                                                        <td><?php echo $row['branchCode']; ?></td>
                                                        <td><?php echo $row['ExpDate']; ?></td>
                                                        <?php 
                                                        if($row['status']==1)
                                                                {
                                                                  echo "<td>
                                                                
                                                                  <div class=\"bootstrap-badge\">
                                    
                                                                  <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-success\" style=\"font-weight:560;border-radius:35px;\">Active</a>
                                                                  
                                                                 
                                                                  </div>
                                                                  
                                                                  </td>";
                              
                                                                 }
                                                                 else
                                                                 {
                                                                    echo "<td>
                                                                    
                                                                  <div class=\"bootstrap-badge\">
                                                                  <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-danger\" style=\"font-weight:560;border-radius:35px;\">Deactive</a>

                                                                    
                                                                     </div>
                                                                     </td>";
                                                                 }
                                ?>

                                                        <?php
														$num=$row['promoId'];
														?>
                                                        <!-- <td> -->


                                                        <td>
<button  data-toggle="modal" data-target="#bd-example-modal-lg<?php echo $row['promoId']?>" class="dropdown-item" class="btn-block">
                                                                    <i class="dw dw-edit2"></i>Edit</button>
                                                            </td>
                                                            <!-- //branch delete -->
                                                            <td>
                                                                <a class="btn-block" data-toggle="modal" data-target="#success-modal<?php echo $row['promoId']?>" type="button" >
                                                                <i class="dw dw-delete-3"></i> Delete</a>
                                                            </td>





                                                        <!-- edit php -->



                                                        <!-- Edit form -->
                                                        <div class="col-md-4 col-sm-12 mb-30">
                                                                <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg<?php echo $row['promoId'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg modal-updialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myLargeModalLabel" id='d'>
                                                                                    Update
                                                                                </h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                    ×
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-md-2 col-form-label">Promo Code</label>
                                                                                        <div class="col-sm-12 col-md-10">
                                                                                            <input type="hidden" id="hiddencode" name='hiddenid' value="<?php echo $row['promoId']; ?>">
                                                                                            <input class="form-control" type="text" name="promocodename" id="promocodename" value="<?php echo $row['promoCode']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-md-2 col-form-label">Discount</label>
                                                                                        <div class="col-sm-12 col-md-10">
                                                                                            <input class="form-control" type="text" id="discountpercentage" name="discountpercentage" value="<?php echo $row['discount']; ?>" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-md-2 col-form-label">Branch Code</label>
                                                                                        <div class="col-sm-12 col-md-10">

                                                                                        <!-- help in future -->
                                                                                        <!-- <?php
$toy_cars = array("Pull Back Cars","Remote Cars", "Electric Cars", "Toy Race Cars","Lightening Cars");
$array_length = count($toy_cars);
?>
<select name="dynamic_data">
<?php
for ($i=0;$i<$array_length;$i++){
?>
<option value="<?=$toy_cars[$i];?>"><?=$toy_cars[$i];?></option>
<?php
}
?>
</select> -->


                                                                                        
                                                                                            <!-- <option selected="">Choose...</option> -->
                                                                                            
                                                                                            
                                                                         
                                                                            

                                                                            
                                                                             
																	<!-- <option selected="">Choose...</option> -->

                                                                    <!-- drop dow -->
                                                                    <select class="custom-select col-12" name="branchcode" >
                                                                       
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
																		
                                                                                     
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-md-2 col-form-label">Expiration Date</label>
                                                                                        <div class="col-sm-12 col-md-10">
                                                                                            <input class="form-control" type="date" value="<?php echo $row['ExpDate']; ?>"  name="date" id="date" />
                                                                      
                                                                                                                                                                                    

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-md-2 col-form-label">Status :</label>
                                                                                        <div class="col-sm-12 col-md-10">
                                                                                        
                                                                                        <!--  -->
                                                                                      
			
				
					
					<div class="mb-30">
						
					
                        <?php
                        if($row['status']==0)
                        {?>
                                                                              
                               
                                   
                                       
                                            <label class="radio-inline mr-3"><input type="radio" name="optradio" value="1" > Active</label>
                                            
                            <label class="radio-inline mr-3"><input type="radio" name="optradio"   value="0" checked> Deactive</label>
                                            
                                            
                               
                            
                                            
                                            
                                            
                                            
                                            <?php  }
                        else
                        { ?>
                            <label class="radio-inline mr-3"><input type="radio" name="optradio"  value="1" checked> Active</label>
                            
            <label class="radio-inline mr-3"><input type="radio" name="optradio"   value="0" > Deactive</label>
                           

                       <?php }?>
						
						
					</div>
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

                                                                                        <!-- Submit button -->

                                                                                    </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-secondary" data-dismiss="modal">

                                                                                    Close
                                                                                </button>
                                                                                <button name="editpromo" class="btn btn-primary" type="submit">
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

                                                                <div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body text-center font-18">
                                                                                <h4 class="padding-top-30 mb-30 weight-500">
                                                                                    Are you sure you want to continue?
                                                                                </h4>
                                                                                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                                                                                    <div class="col-6">
                                                                                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                                                                            <i class="fa fa-times"></i>
                                                                                        </button>
                                                                                        NO
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                                                                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="d" data-dismiss="modal">
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

                                                        <div class="modal fade" id="success-modal<?php echo $row['promoId']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body text-center font-18">
                                                                            <h3 class="mb-20">Form Submitted!</h3>
                                                                            <div class="mb-30 text-center">
                                                                                <img src="vendors/images/success.png" />
                                                                            </div>
                                                                            Deleted succesfully
                                                                        </div>

                                                                        <div class="modal-footer justify-content-center">
                                                                            <form method="POST">
                                                                                <input type="hidden" name="deleteid" value="<?php echo $row['promoId']?>">
                                                                            <button class="btn btn-primary
                                                                        btn btn-primary  btn-right" name="btndone" type="submit">
                                                                                Done
                                                                            </button>
                                                                            </form>
                                                                        </div>
                                                                        <!-- <script type="text/javascript">
                                                                            function reloadPage() {
                                                                                location.reload(true);
                                                                            }
                                                                        </script> -->

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
                                                                <h4 class="text-blue h4">Add New PromoCode</h4>
                                                                <p class="mb-30">Add details here</p>
                                                            </div>

                                                        </div>
                                                        <form method="POST">
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-12 col-md-2 col-form-label">PromoCode
                                                                    Label*:</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control" type="text"
                                                                        placeholder="FAB20" name="promocodename" required />
                                                                </div>
                                                            </div>
                                                            <!-- add percentage field at the last -->
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-12 col-md-2 col-form-label">Discount(%)*:</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control" placeholder="50"
                                                                        type="text" name="discountpercentage" required />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-12 col-md-2 col-form-label">Branch
                                                                    Name*:</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <select class="custom-select col-12" name="branchcode" required>
                                                                        <!-- <option selected="">Choose...</option> -->
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-12 col-md-2 col-form-label">Expiration
                                                                    Date*:</label>


                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control"
                                                                        placeholder="Select Date" type="date" name="date" required/>
                                                                </div>
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
                                                                <input id="reset" name="reset" type="reset">
                                                                <input type="submit" name="submit"
                                                                    class="btn btn-primary  btn-right"
                                                                    style="margin-top: 10px;">
                                                                <!-- <button type="button" name="submit" class="btn btn-primary  btn-right"
                                                                            style="margin-top: 10px;">Submit</button> -->

                                                               
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


                                                             
<!-- Button group for toast -->
<button onclick="foo()" id="ckk" style="display:none;">hello me</button>   





    <?php

			include "javascript.php"
			?>
                                              
        <script src="notify.js"></script>

        <script src="lobibox-master/js/Lobibox.js"></script>
        <script src="lobibox-master/demo/demo.js"></script>
        <script>function foo(){
                console.log("Foo function call");
    $.notify("Sucess","success");
    $.notify("Access","success");
    document.getElementById("reset").click();
            };</script>
                                                             <?php
                                                             if($_SESSION['check']==1)
                                                             { echo "
        <script>
            
            
            foo();
            
        Lobibox.notify('warning', {
            msg: 'Lorem ipsum dolor sit amet against apennine any created, spend loveliest, building stripes.'
        });
    


       
        </script>                                          ";}?>
                  
                                                               
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>