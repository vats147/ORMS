<?php

include 'dbfile.php';

session_start();
?>



<!-- read data which recive from ajax -->
<?php
// echo 
if(isset($_REQUEST['id']))
{
    // echo $_REQUEST['id'];

    $myid = $_REQUEST['id'];
   
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Eatio - Restaurant Food Order Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>





</head>

<body>

    
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<?php
            include 'navbar.php';
            ?>
			
		<!--  I need to remove this content-body so i can easily view product to full screen  -->
        <!-- <div class="content-body"> -->
            <div class="container-fluid" style="margin:10%">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 ">
                                        <!-- Tab panes -->
                                       
                                    <!--Tab slider End-->

                                    <?php 
                                    


                                        // $id = $_GET["id"];
                                        $sql = "select * from `tblitem` where `itemid`=$myid";
                                    // echo $sql;
                                        $result=$conn->query($sql);
                                        while($row=mysqli_fetch_row($result))
                                        {
                                        echo '<div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="image/item/'.$row[2].'" alt="">
                                            </div>
                                            
                                        </div>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            
                                            <ul class="nav slide-item-list mt-3" role="tablist">
                                               
                                                
                                            </ul>
                                        </div>
                                    </div>';


                                        
                                        echo '<div class="col-xl-9 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h4>'.$row[1].'</h4>
                                                <p class="price">₹</p>
                                                
                                                <p class="price" id="amt">'.$row[4].'</p>
                                                <p>Availability: <span class="item"> In stock <i
                                                            class="fa fa-shopping-basket"></i></span>
                                                </p>
                                                
                                                
                                                

                                                <p class="text-content">'.$row[3].'</p>
                                                
                                               
												<div class="col-2 px-0">
													<input type="number" name="num" class="form-control input-btn input-number" value="1">
												</div>
                                                <!--Quanatity End-->
                                                <div class="shopping-cart mt-3">
                                                    <a class="btn btn-primary btn-lg" id="addtocart"><i
                                                            class="fa fa-shopping-basket mr-2" ></i>Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                        }
                                    

?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        

        
    </div>
    

	

    <?php

			include "javascript.php"
			?>

    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
    
    <script src="./vendor/highlightjs/highlight.pack.min.js"></script>
    
    <script>
             $(document).ready(function () {

            $(document).on('click','#addtocart',function(){
                var itemid = <?php echo $myid; ?>;
                var uid=<?php echo $_SESSION['uid'] ?>
                // alert(uid);
                var num = $('.input-number').val();
                                                
                var amt=document.getElementById("amt").innerHTML;
                var action = "r";
                // $sql="INSERT INTO `tblcart`(`userId`, `itemId`, `quantity`, `amount`) VALUES (``,`$myid`,``,``)"
                $.ajax({
                    url:"temp.php",
                    method:"POST",
                    
                    data:{itemid:itemid,num:num,amt:amt,action:action},
                    success:function(data){
                        // alert(data);
                        var newUrl="http://localhost/xx/temp.php?id="+itemid;
                        window.location.assign(newUrl);

                    }
                });
            });

             });
        </script>



</body>

</html>