<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>


<%@ include file="dbconfig.jsp" %>
<%-- 
    <?php

include 'dbfile.php';
session_start();
if(isset($_SESSION['utype']))
{
    $utype=$_SESSION['utype'];
    if($utype!="admin")
    {
        header("Location:Login.php");
    }
}
else
{
    header("Location:Login.php");
}

?> --%>

<!-- Basic Page Info -->
<meta charset="utf-8" />
<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

<!-- Site favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

<!-- lobibob -->
<link rel="stylesheet" href="lobibox-master/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="lobibox-master/demo/demo.css" />

<link rel="stylesheet" href="lobibox-master/dist/css/Lobibox.min.css" />

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
<!-- CSS -->
<!-- <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" /> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- <script src="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script> -->
<!-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->


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



<!-- End Google Tag Manager -->

<!-- lolibob testing -->


</head>

<body>

    <%@ include file="adminsidebar.jsp" %>



  


    <%-- <?php
    include "adminsidebar.php";

    ?> --%>


    <div class="main-container">
        <div id="myalert">

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

                <!-- Simple Datatable start -->

                <div class="card-box mb-30">

                    <div class="pd-20 card-box">
                        <h5 class="h4 text-blue mb-20">Branch Details</h5>
                        <div class="tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" id="c1">
                                    <a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab"
                                        id="c11" aria-selected="true">PromoCode</a>
                                </li>
                                <li class="nav-item" id="c2">
                                    <a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" id="c12"
                                        aria-selected="false">Add New PromoCode</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <!--table of all data  -->
                                    <div class="pb-20" id="table-data" style="display:unset;">


                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" style="display:none;">
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
                                                <form id="form">
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-md-2 col-form-label">PromoCode
                                                            Label*:</label>
                                                        <div class="col-sm-12 col-md-10">
                                                            <input class="form-control" type="text" placeholder="FAB20"
                                                                name="promocodename" id="promocodename" onkeyup=""
                                                                required />
                                                            <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error1">

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- add percentage field at the last -->
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-12 col-md-2 col-form-label">Discount(%)*:</label>
                                                        <div class="col-sm-12 col-md-10">
                                                            <input class="form-control" placeholder="50" type="number"
                                                                id="discount" name="discountpercentage"
                                                                onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode <= 57"
                                                                required />
                                                            <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error2">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-md-2 col-form-label">Branch
                                                            Name*:</label>
                                                        <div class="col-sm-12 col-md-10">
                                                        <%--                      
                                                            out.println( '<select class="custom-select col-12" name="branchcode" id="branchcode" required>');
                                                            out.println(' <option value="" selected disabled hidden>Choose here</option>');
                                                            String query="select * from tblbranch";
                                                            statement=con.createStatement();
                                                            resultSet = statement.executeQuery(query);
                                                            while(resultSet.next()){
                                                                  out.println(" 
                                                                <option value=\"$row[0]\">$row[1]</option>");
                                                            }

                                                           

                                                            
                                                            out.println('</select>');
                                                            
                                                             --%>

                                                            <!-- drop dow -->
                                                            




                                                            <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error3">
                                                                    Select Branch
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-md-2 col-form-label">Expiration
                                                            Date*:</label>


                                                        <div class="col-sm-12 col-md-10">
                                                            <input class="form-control " data-date=""
                                                                 type="date"
                                                                name="date" id="date" required />
                                                            <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error4">
                                                                    Select Valid Date
                                                                </div>
                                                            </div>
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
                                                      
                                                        <button type="button" name="submit" id="done"
                                                            class="btn btn-primary  btn-right"
                                                            style="margin-top: 10px;">Submit</button>


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




<%-- 
    <script src="notify.js"></script>

    <script src="lobibox-master/js/Lobibox.js"></script>
    <script src="lobibox-master/demo/demo.js"></script> --%>
    <script>
        $(document).ready(function () {
            console.log("Document is read");


            // load data from database
            function load_data() {


                $.ajax({
                    url: "retrivedata.jsp",
                    type: "POST",
                    data: {
                        Pagename: "promocode.jsp",
                        Action: "read"
                    },
                    success: function (data) {
                        $("#table-data").html(data);
                       
                        

                    }
                });
                return;
            };
            load_data();
            var id;
           





            // delete data 
            var id = "";
            $(document).on("click", "#del", function () {
                id = $(this).data("eid");
                console.log(id);

                let text;
            });
            $(document).on("click", "#yes", function () {
                var id = $("#hide").val();

                $.ajax({
                    url: "retrivedata.php",
                    type: "POST",
                    data: {
                        id: "promocode",
                        action: "d",
                        eid: id
                    },
                    success: function (data) {

                        $('.modal-backdrop').remove();
                        $('body').removeClass("modal-open");



                        load_data();
                        if (data == 1) {
                            Lobibox.notify('success', {
                                size: 'mini',
                                rounded: true,
                                delayIndicator: true,
                                msg: 'Data Deleted Successfully'
                            });
                        }




                    },
                    error: function (data) {

                        Lobibox.notify('error', {
                            size: 'mini',
                            rounded: true,
                            delayIndicator: true,
                            msg: 'An error Occur'
                        });
                    },
                    complete: function (data) {



                    }

                });
            });



        });



    </script>

</body>

</html>