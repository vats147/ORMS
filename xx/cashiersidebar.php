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

    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here" />
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="" />
                                        <h3>John Doe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/photo1.jpg" alt="" />
                                        <h3>Lea R. Frith</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/photo2.jpg" alt="" />
                                        <h3>Erik L. Richards</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/photo3.jpg" alt="" />
                                        <h3>John Doe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/photo4.jpg" alt="" />
                                        <h3>Renee I. Hansen</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="" />
                                        <h3>Vicki M. Coleman</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="vendors/images/photo1.jpg" alt="" />
                        </span>
                        <span class="user-name">Ross C. Lopez</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Cart
                <span class="btn-block font-weight-400 font-12">Add Products Easily</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">

                <h4 class="weight-600 font-18 pb-10">Table: B1</h4>
                <hr>
                <div class="product">
                    <!-- <div class="sidebar-btn-group pb-30 mb-10"> -->
                    <div>
                        <h5 class="weight-600 font-18 pb-10" style="display:inline-block;">Product1Product1</h5>
                        <h5 class="weight-600 font-18 pb-10" style="float:right;">1452</h5>

                    </div>
                    <div class="tags">
                        <h6 style="color:#dc3545;">spicy</h6>

                    </div>


                    <!-- </div> -->



                    <div class="modal-body">
                        <!-- <p> -->
                        <!-- <div class="modal-body"> -->


                        <form method="POST">
                            <div class="form-group row">
                                <!-- <label style="padding:10px 10px;">Manchu Soup</label> -->


                            </div>



                            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                    class="input-group-btn input-group-prepend"><button
                                        class="btn btn-primary bootstrap-touchspin-down"
                                        type="button">-</button></span></span><input id="demo2" type="text" value="0"
                                    name="demo2" class="form-control" spellcheck="false" data-ms-editor="true"><span
                                    class="input-group-btn input-group-append"><button
                                        class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span>
                            </div>







                            <!-- </div> -->
                            <!-- </p> -->
                        </form>
                    </div>
                </div>



                <div class="product">
                    <!-- <div class="sidebar-btn-group pb-30 mb-10"> -->
                    <div>
                        <h5 class="weight-600 font-18 pb-10" style="display:inline-block;">Product1Product1</h5>
                        <h5 class="weight-600 font-18 pb-10" style="float:right;">1452</h5>

                    </div>
                    <div class="tags">
                        <h6 style="color:#dc3545;">spicy</h6>

                    </div>


                    <!-- </div> -->



                    <div class="modal-body">
                        <!-- <p> -->
                        <!-- <div class="modal-body"> -->


                        <form method="POST">
                            <div class="form-group row">
                                <!-- <label style="padding:10px 10px;">Manchu Soup</label> -->


                            </div>



                            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                    class="input-group-btn input-group-prepend"><button
                                        class="btn btn-primary bootstrap-touchspin-down"
                                        type="button">-</button></span></span><input id="demo2" type="text" value="0"
                                    name="demo2" class="form-control" spellcheck="false" data-ms-editor="true"><span
                                    class="input-group-btn input-group-append"><button
                                        class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span>
                            </div>







                            <!-- </div> -->
                            <!-- </p> -->
                        </form>
                    </div>
                </div>


                <div class="product">
                    <!-- <div class="sidebar-btn-group pb-30 mb-10"> -->
                    <div>
                        <h5 class="weight-600 font-18 pb-10" style="display:inline-block;">Product1Product1</h5>
                        <h5 class="weight-600 font-18 pb-10" style="float:right;">1452</h5>

                    </div>
                    <div class="tags">
                        <h6 style="color:#dc3545;">spicy</h6>

                    </div>


                    <!-- </div> -->



                    <div class="modal-body">
                        <!-- <p> -->
                        <!-- <div class="modal-body"> -->


                        <form method="POST">
                            <div class="form-group row">
                                <!-- <label style="padding:10px 10px;">Manchu Soup</label> -->


                            </div>



                            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                    class="input-group-btn input-group-prepend"><button
                                        class="btn btn-primary bootstrap-touchspin-down"
                                        type="button">-</button></span></span><input id="demo2" type="text" value="0"
                                    name="demo2" class="form-control" spellcheck="false" data-ms-editor="true"><span
                                    class="input-group-btn input-group-append"><button
                                        class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span>
                            </div>







                            <!-- </div> -->
                            <!-- </p> -->
                        </form>
                    </div>
                </div>
                <hr>
                <h5 class="weight-600 font-18 pb-10" style="display:inline-block;">Total Amount</h5>
                <h5 class="weight-600 font-18 pb-10" style="float:right;">1452</h5>

                <div class="reset-options pt-30 text-center">


                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a href="javascript:void(0);" class="btn btn-outline-primary">Place KOT</a>
                        <a href="javascript:void(0);" class="btn btn-outline-primary"> cancel order</a>
                    </div>

                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a style="width:100%;" href="javascript:void(0);" class="btn btn-primary">Place KOT</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="dashboard.php">
                <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
                <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">


                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a href="cashiertable.php" class="dropdown-toggle no-arrow">
                            <!-- <i class="icon-copy dw dw-analytics-4"></i> -->
                            <span class="micon icon-copy fa fa-dashboard"></span><span class="mtext">Table Status</span>
                        </a>
                    </li>

                    <li>
                        <a href="parcelorder.php" class="dropdown-toggle no-arrow">
                            <!-- <i class="icon-copy dw dw-analytics-4"></i> -->
                            <span class="micon bi bi-hospital"></span><span class="mtext">Parcel Order</span>
                        </a>
                    </li>

                   
                    <li>
                        <a href="recentorder.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Recent Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="payment.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Payment</span>
                        </a>
                    </li>
                   




                    <li>
                        <div class="dropdown-divider"></div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>


    <!-- welcome modal start -->

    <!-- welcome modal end -->
    <!-- js -->

    <!-- End Google Tag Manager (noscript) -->

    <?php

			include "javascript.php"
			?>
</body>

</html>