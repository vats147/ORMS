<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./managestaff.css">
</head>
<body>
    
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
                    <span class="text">Dashboard > Manage Staff</span>
                </div>

                <!-- for experiment -->
                <div class="activity">
                    <form action="#">
                      <div class="row">
                        <div class="col-25">
                          <label for="fname">First Name</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="fname" name="firstname" placeholder="Employee First name..">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="lname">Last Name</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="Employee last name..">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="Desgination">Desgination</label>
                        </div>
                        <div class="col-75">
                          <select id="Desgination" name="Desgination">
                            <option value="BranchManager">Branch Manager</option>

                            <option value="OrderMan">Order Man</option>
                            <option value="Cashier">Cashier</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="salary">Salary</label>
                        </div>
                    
                          <div class="col-75">
                            <input type="text" id="salary" name="salary" placeholder="Salary : 12,000">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="Branch">Branch</label>
                        </div>
                        <div class="col-75">
                          <select id="Branch" name="Branch">
                            <option value="x">X </option>

                            <option value="y">y</option>
                            <option value="z">z</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <input type="submit" value="Delete">
                        <input type="submit" value="Update">
                        <input type="submit" value="Add">

                      </div>
                    </form>
                  </div>
                  


              
                  

            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Staff Detail</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">First Name</span>
                        <span class="data-list">Ramesh</span>
                        <span class="data-list">Suresh</span>
                        <span class="data-list">Mahesh</span>
                       
                    </div>
                    <div class="data email">
                        <span class="data-title">Last Name</span>
                        <span class="data-list">Patel</span>
                        <span class="data-list">Patel</span>
                        <span class="data-list">Keshwala</span>

                       
                    </div>
                    <div class="data joined">
                        <span class="data-title">Desgination</span>
                        <span class="data-list">Brnach Manager</span>
                        <span class="data-list">OrderMan</span>
                        <span class="data-list">Cashier</span>

                        
                    </div>
                    <div class="data type">
                        <span class="data-title">salary</span>
                        <span class="data-list">1000</span>
                        <span class="data-list">2000</span>
                        <span class="data-list">5000</span>
                       
                    </div>
                    <div class="data status">
                        <span class="data-title">Branch</span>
                        <span class="data-list">X</span>
                        <span class="data-list">Y</span>
                        <span class="data-list">Z</span>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>

</body>
</html>