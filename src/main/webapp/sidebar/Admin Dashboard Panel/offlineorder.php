<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./manageorder.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
<?php
    include 'sidebar.php';
    
     ?>
       
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard >  Order List</span>
                </div>

        

            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text"><a href="manageorder.php" >Online order</a><a href="offlineorder.php" class="on">Offline Order</a> </span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Order ID</span>
                        <span class="data-list">#1212</span>
                        <span class="data-list">#1478</span>
                        <span class="data-list">#9856</span>
                       
                    </div>
                    <div class="data email">
                        <span class="data-title">ItemID</span>
                        <span class="data-list">324</span>
                        <span class="data-list">34232</span>
                        <span class="data-list">32432</span>

                       
                    </div>
                    <div class="data joined">
                        <span class="data-title">Quantity</span>
                        <span class="data-list">4</span>
                        <span class="data-list">5</span>
                        <span class="data-list">6</span>

                        
                    </div>
                    

                    <div class="data type">
                        <span class="data-title">Status</span>
                        <span class="data-list">Pending</span>
                        <span class="data-list">ready</span>
                        <span class="data-list">Rejected</span>
                       
                    </div>
                </div>
            </div>
      
    
            </div>
            
    </section>

    <script src="script.js"></script>

    
    
    </body>
    </html>