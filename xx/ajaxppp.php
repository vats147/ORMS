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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- <script src="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script> -->
    <!-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->

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



    <!-- End Google Tag Manager -->

    <!-- lolibob testing -->


</head>

<body>


    <?php
    include "adminsidebar.php";
    include "adminstyle.php";
    echo '<script src="vendors/scripts/core.js"></script>
        <script src="vendors/scripts/script.min.js"></script>
        <script src="vendors/scripts/process.js"></script>
        <script src="vendors/scripts/layout-settings.js"></script>
        
        
        <!-- Google Tag Manager (noscript) -->
        <noscript
            ><iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe
        ></noscript>
        
        
        ';
    ?>


    <div class="main-container">

        <div id="myalert">
            <div class="alert alert-primary alert-dismissible alert-alt fade show">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                            class="mdi mdi-close"></i></span>
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
                <!-- Simple Datatable start -->

                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Data Table with multiple select row</h4>
                    </div>
                    <div class="pb-20" id="table-data">

                        <!-- <table  class="data-table table hover multiple-select-row nowrap" id="table-data">
                          
                            </table> -->
                    </div>

                </div>









                <!-- delete model -->
            </div>
        </div>

    </div>





    <!-- Button group for toast -->






   

    <script src="notify.js"></script>

    <script src="lobibox-master/js/Lobibox.js"></script>
    <script src="lobibox-master/demo/demo.js"></script>
    <script>
        $(document).ready(function () {
            var check = 0;

            function load_data() {


                $.ajax({
                    url: "retrivedata.php",
                    type: "POST",
                    data: {
                        id: 1,
                        action: "r"
                    },
                    success: function (data) {
                        $("#table-data").html(data);


                    }
                });
                return;
            };
            load_data();

            $(document).on("click", "#editsave", function () {
                // console.log("edit");
                var id = $("#hiddencode").val();
                var promocodename = $("#promocodename").val();
                var discountpercentage = $("#discountpercentage").val();
                var date = $("#date").val();
                // var temp=document.getElementById("status-ac").value();
                if (document.getElementById('status-ac').checked == true) {

                    var status = 1;
                }
                else {
                    var status = 0;
                }
                var s = document.getElementsByName('branchcode')[0];
                var branchcode = s.options[s.selectedIndex].value;

                console.log(id);
                console.log(" promocodename ", promocodename);
                console.log(" discountpercentage ", discountpercentage);
                console.log(" dropdown ", branchcode);
                console.log(" date ", date);
                console.log(" status ", status);

                $.ajax({
                    url: "retrivedata.php",
                    type: "POST",
                    data: {
                        id: 1,
                        action: "e",
                        eid: id,
                        promocodename: promocodename,
                        discountpercentage: discountpercentage,
                        branchcode: branchcode,
                        date: date,
                        status: status,

                    },
                    success: function (data) {

                        // document.getElementById("close").click();
                        $('#close').trigger('click');
                        // event.stopPropagation();
                        console.log("AFYER");
                        // event.stopPropagation();

                        check = data;
                        if (data == 1) {
                            $('.modal').remove();
                            $('.modal-backdrop').remove();
                            $('body').removeClass("modal-open");
                            load_data();
                            Lobibox.notify('success', {
                                size: 'mini',
                                msg: 'Data Updated Successfully'
                            });
                            // location.reload();
                            Lobibox.notify('success', {
                                size: 'mini',
                                msg: 'Data Updated Successfully'
                            });
                            // event.preventDefault();

                        }
                        //    return 1;
                    },

                });





            });



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
                        id: 1,
                        action: "d",
                        eid: id
                    },
                    success: function (data) {
                        $('.modal').remove();
                        $('.modal-backdrop').remove();
                        $('body').removeClass("modal-open");



                        load_data();
                        Lobibox.notify('success', {
                    size: 'mini',
                    rounded: true,
                    delayIndicator: true,
                    msg: 'Data Deleted Successfully'
                });




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


    <!-- 
            ///For alert



          $('#miniWarningRounded').click(function () {
                Lobibox.notify('warning', {
                    size: 'mini',
                    rounded: true,
                    delayIndicator: false,
                    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
                });
            });
            $('#miniErrorRounded').click(function () {
                Lobibox.notify('error', {
                    size: 'mini',
                    rounded: true,
                    delayIndicator: false,
                    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
                });
            });
            $('#miniSuccessRounded').click(function () {
                Lobibox.notify('success', {
                    size: 'mini',
                    rounded: true,
                    delayIndicator: false,
                    msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
                });
            });
        
        -->

    <!-- End Google Tag Manager (noscript) -->
</body>

</html>