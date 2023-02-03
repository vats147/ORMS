<?php
       include 'dbfile.php';
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

              <link rel="stylesheet" href="lobibox-master/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="lobibox-master/demo/demo.css" />

<link rel="stylesheet" href="lobibox-master/dist/css/Lobibox.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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

</head>

<body>

       <?php

       include 'navbar.php';
       ?>



       <div class="main-container" style="padding: 0px;">
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
                                                                     <a href="Menu.php">
                                                                      Category
       </a>
                                                               </li>
                                                               <li class="breadcrumb-item active" aria-current="page">
                                                                     <a href="productlist.php">

                                                                      Product
       </a>

                                                               </li>
                                                        </ol>
                                                 </nav>
                                          </div>
                                   </div>
                            </div>

                            <div class="row clearfix">

                                          <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <h5 class="h4 text-blue mb-10" style="display:inline-block;">Our Category</h5>
                            
                        </div>
        
                        <div class="col-md-2 col-sm-12">
        
                        </div>
                        <div class="col-md-2 col-sm-12">
        
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label>Search here</label>
                                <div role="group" class="btn-group">
                                
                                </div>
                                <input type="text" id="search" class="form-control" />
        
        
        
                            </div>
                        </div>
        
                    </div>



                                   <div class="card-columns mb-30" id="searchimg">

                                          <?php
                                          $id=$_GET['id'];
                                          $sql = "SELECT * FROM `tblitem` where `ItemCategoryId`=$id and `status`=1";
                                          
                                          $result = $conn->query($sql);
                                          if (mysqli_num_rows($result) > 0) {
                                              while ($row = mysqli_fetch_row($result)) {
                                                        echo '<div class="card card-box" id="item" data-itemid="'.$row[0].'">
                                                 <img class="card-img-top" src="image/item/'.$row[2].'"
                                                        alt="Card image cap" />
                                                 <div class="card-body">
                                                        <h5 class="card-title">'.$row[1].'</h5>
                                                        <h5 class="card-title">₹ '.$row[4].'</h5>

                                                        <a type="button" style="width: 100%;" data-itid="'.$row[0].'"
                                                               class="btn btn-outline-primary" id="" href="#">

                                                               See More
                                                        </a>
                                                 </div>
                                                 </div>';
                                              }
                                          }
                                          else
                                          {
                                                 echo "NO images found";
                                          }


                                          ?>
                                          
                                   </div>
                            </div>

                     </div>
              </div>

       </div>


       <script src="notify.js"></script>

<script src="lobibox-master/js/Lobibox.js"></script>
<script src="lobibox-master/demo/demo.js"></script>
       <?php

			include "javascript.php"
			?>

                                          <script>
                                           $(document).ready(function () {

                                                 $(document).on('click','#item',function(){
                                                        var itemid=$(this).data('itemid');
                                                        $.ajax({
                                                               url:"retrivedata.php",
                                                               method:"POST",
                                                               data:{
                                                                      itid:itemid,
                                                                      id:"productlist",
                                                                      action:"r"
                                                               },
                                                               success:function(data){
                                                                      console.log(data);
                                                                      if(data==1)
                                                                      {
                                                                             var newUrl="http://localhost/xx/product.php?id="+itemid;
                                                                             window.location.assign(newUrl);
                                                                      }
                                                                      else
                                                                      {
                                                                             alert("Item Already Added to Cart");
                                                                             Lobibox.notify('warning', {
                                                                                           size: 'mini',
                                                                                           rounded: true,
                                                                                           delayIndicator: true,
                                                                                           msg: 'Product Not avaliable'

                                                                                    });
                                                                      }
                                                               }
                                                        });
                                                        window.location.replace(newUrl);
                                                        

                                                 });

                                                 //search button                                                 
                                                 $(document).on('keyup', '#search', function () {
                                                        var serach=$(this).val();
                                                        $.ajax({
                                                               url:"retrivedata.php",
                                                               method:"POST",
                                                               data:{
                                                                      
                                                                      id:"productlist",
                                                                      action:"search",
                                                                      serach:serach,
                                                                      getid:<?php echo $_GET['id'];?>

                                                               },success:function(data){
                                                                      $("#searchimg").html(data);
                                                               }
                                                        });
                                                 });
                                          
                                                 $(document).on('click','#',function(){
                                                        var itid=$(this).data('itid');
                                                        console.log(itid);
                                                        $.ajax({
                                                               url:"product.php",
                                                               method:"POST",
                                                               data:{itid:itid},
                                                               success:function(data){
                                                                      console.log(data);
                                                                      if(data==1)
                                                                      {
                                                                             alert("Item Added to Cart");
                                                                             
                                                                                    Lobibox.notify('success', {
                                                                                           size: 'mini',
                                                                                           rounded: true,
                                                                                           delayIndicator: true,
                                                                                           msg: 'Item Added to Cart'

                                                                                    });
                                                                      }
                                                                      else
                                                                      {
                                                                             alert("Item Already Added to Cart");
                                                                             Lobibox.notify('warning', {
                                                                                           size: 'mini',
                                                                                           rounded: true,
                                                                                           delayIndicator: true,
                                                                                           msg: 'Item is already added to cart'

                                                                                    });
                                                                      }
                                                               }
                                                        });
                                                 });
                                          });

                            </script>
</body>

</html>