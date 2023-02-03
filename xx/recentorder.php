<?php
// $_SESSION["myvi"]=102;
// $_SESSION["myvi"]="";
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
	$updateid=$name=$add=$city=$pincode=$contact="";
	include 'dbfile.php';
    if(isset($_REQUEST['order11']))
    {
        // echo "Hello world";
        header("location:cashier.php");
    }
	
?>
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


    <!-- End Google Tag Manager -->
</head>

<body>
    <?php include 'cashiersidebar.php'; ?>
    <!-- <div style="display:none;"> -->
    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">Recent orders</div>
        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th class="table-plus">Item Name</th>
                    <!-- <th>Weight</th> -->
                    <th>Branch Code</th>
                    <th>Customer Name</th>
                    <!-- <th>Admit Date</th> -->
                    <th>Stauts</th>
                    <th class="datatable-nosort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-plus">
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img src="vendors/images/photo4.jpg" class="border-radius-100 shadow" width="40"
                                    height="40" alt="" />
                            </div>
                            <div class="txt">
                                <div class="weight-600">Jennifer O. Oster</div>
                            </div>
                        </div>
                    </td>
                    <td>Female</td>
                    <!-- <td>45 kg</td> -->
                    <td>Dr. Callie Reed</td>
                    <!-- <td>19 Oct 2020</td> -->
                    <td>
                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Typhoid</span>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-plus">
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img src="vendors/images/photo5.jpg" class="border-radius-100 shadow" width="40"
                                    height="40" alt="" />
                            </div>
                            <div class="txt">
                                <div class="weight-600">Doris L. Larson</div>
                            </div>
                        </div>
                    </td>
                    <td>Male</td>
                    <!-- <td>76 kg</td> -->
                    <td>Dr. Ren Delan</td>
                    <!-- <td>22 Jul 2020</td> -->
                    <td>
                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">pending</span>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-plus">
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img src="vendors/images/photo6.jpg" class="border-radius-100 shadow" width="40"
                                    height="40" alt="" />
                            </div>
                            <div class="txt">
                                <div class="weight-600">Joseph Powell</div>
                            </div>
                        </div>
                    </td>
                    <td>Male</td>
                    <!-- <td>90 kg</td> -->
                    <td>Dr. Allen Hannagan</td>
                    <!-- <td>15 Nov 2020</td> -->
                    <td>
                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Infection</span>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-plus">
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img src="vendors/images/photo9.jpg" class="border-radius-100 shadow" width="40"
                                    height="40" alt="" />
                            </div>
                            <div class="txt">
                                <div class="weight-600">Jake Springer</div>
                            </div>
                        </div>
                    </td>
                    <td>Female</td>
                    <!-- <td>45 kg</td> -->
                    <td>Dr. Garrett Kincy</td>
                    <!-- <td>08 Oct 2020</td> -->
                    <td>
                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">pending</span>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-plus">
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img src="vendors/images/photo1.jpg" class="border-radius-100 shadow" width="40"
                                    height="40" alt="" />
                            </div>
                            <div class="txt">
                                <div class="weight-600">Paul Buckland</div>
                            </div>
                        </div>
                    </td>
                    <td>Male</td>
                    <!-- <td>76 kg</td> -->
                    <td>Dr. Maxwell Soltes</td>
                    <!-- <td>12 Dec 2020</td> -->
                    <td>
                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Asthma</span>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-plus">
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img src="vendors/images/photo2.jpg" class="border-radius-100 shadow" width="40"
                                    height="40" alt="" />
                            </div>
                            <div class="txt">
                                <div class="weight-600">Neil Arnold</div>
                            </div>
                        </div>
                    </td>
                    <td>Male</td>
                    <!-- <td>60 kg</td> -->
                    <td>Dr. Sebastian Tandon</td>
                    <!-- <td>30 Oct 2020</td> -->
                    <td>
                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">pending</span>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-plus">
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img src="vendors/images/photo8.jpg" class="border-radius-100 shadow" width="40"
                                    height="40" alt="" />
                            </div>
                            <div class="txt">
                                <div class="weight-600">Christian Dyer</div>
                            </div>
                        </div>
                    </td>
                    <td>Male</td>
                    <!-- <td>80 kg</td> -->
                    <td>Dr. Sebastian Tandon</td>
                    <!-- <td>15 Jun 2020</td> -->
                    <td>
                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">pending</span>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-plus">
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img src="vendors/images/photo1.jpg" class="border-radius-100 shadow" width="40"
                                    height="40" alt="" />
                            </div>
                            <div class="txt">
                                <div class="weight-600">Doris L. Larson</div>
                            </div>
                        </div>
                    </td>
                    <td>Male</td>
                    <!-- <td>76 kg</td> -->
                    <td>Dr. Ren Delan</td>
                    <!-- <td>22 Jul 2020</td> -->
                    <td>
                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Complted</span>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>