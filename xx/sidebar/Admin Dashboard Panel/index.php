<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="x.css">

    <title>Admin Dashboard Panel</title>
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
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Today Order</span>
                        <span class="number">125</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total profit</span>
                        <span class="number">10,120</span>
                    </div>
                    <div class="box box4">
                        <i class="uil uil-share"></i>
                        <span class="text">Total profit</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
            </div>
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">Recent Activity</span>
            </div>

            <div class="activity-data">
                <div class="forpadding">
                    <div class="w3-container">
                        <div class="dropdown">
                            <div class="text">
                                <p>Monthly Revenue</p>
                            </div>
                            <div class="dd">

                                <select name="month" id="month">
                                    <option name="January" value="Jan">January</option>
                                    <option name="February" value="Feb">February</option>
                                    <option name="March" value="Mar">March</option>
                                    <option name="April" value="Apr">April</option>
                                    <option name="May" value="May">May</option>
                                    <option name="June" value="Jun">June</option>
                                    <option name="July" value="Jul">July</option>
                                    <option name="August" value="Aug">August</option>
                                    <option name="September" value="Sep">September</option>
                                    <option name="October" value="Oct">October</option>
                                    <option name="November" value="Nov">November</option>
                                    <option name="December" value="Dec">December</option>
                                </select>
                                </select>
                            </div>
                        </div>
                        <div class="boxs">
                            <label for="">Week 1</label>
                            <div class="w3-light-grey">
                                <div class="w3-cont w3-green w3-center x" style="width:25%">25%</div>
                            </div><br>
                            <label for="">Week 2</label>

                            <div class="w3-light-grey">
                                <div class="w3-cont w3-red w3-center x" style="width:50%">50%</div>
                            </div><br>
                            <label for="">Week 3</label>

                            <div class="w3-light-grey">
                                <div class="w3-cont w3-blue x" style="width:75%">75%</div>
                            </div><br>
                            <label for="">Week 4</label>

                            <div class="w3-light-grey">
                                <div class="w3-cont w3-blue x" style="width:67%">67%</div>
                            </div><br>
                        </div>
                    </div>
                </div>

                <div class="formargin">
                    <div class="w3-contain">
                        <div class="dropdown">
                            <div class="text">
                                <p>RECENT ORDERS REQUESTED</p>
                            </div>
                            <div class="dd">
                                <button>View All</button>

                            </div>
                        </div>

                        <table>
                            <tr>

                                <th>Food Item</th>
                                <th>Price</th>
                                <th>Product ID</th>
                            </tr>
                            <tr>

                                <td>Mastani</td>
                                <td>219.99</td>
                                <td>541548</td>
                            </tr>
                            <tr>
                                <td>Gotala</td>
                                <td>150</td>
                                <td>1542</td>
                            </tr>
                            <tr>
                                <td>Masla Dhosa</td>
                                <td>200</td>
                                <td>165486</td>
                            </tr>
                            <tr>
                                <td>French Fry</td>
                                <td>500</td>
                                <td>5154</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="dashboard">


        <div class="dash-content">



            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recently Placed Orders</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Order ID</span>
                        <span class="data-list">1</span>
                        <span class="data-list">2</span>
                        <span class="data-list">3</span>

                    </div>
                    <div class="data email">
                        <span class="data-title">Order Name</span>
                        <span class="data-list">Mastani</span>
                        <span class="data-list">Gotala</span>
                        <span class="data-list">Dhosa</span>


                    </div>
                    <div class="data joined">
                        <span class="data-title">Customer Name</span>
                        <span class="data-list">Ramesh</span>
                        <span class="data-list">Suresj</span>
                        <span class="data-list">Raju</span>


                    </div>
                    <div class="data type">
                        <span class="data-title">Order Status</span>
                        <span class="data-list">Pending</span>
                        <span class="data-list">Complate</span>
                        <span class="data-list">Caneclled</span>

                    </div>
                    <div class="data status">
                        <span class="data-title">Amount</span>
                        <span class="data-list">1000</span>
                        <span class="data-list">400</span>
                        <span class="data-list">3000</span>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <script src="script.js"></script>
</body>

</html>