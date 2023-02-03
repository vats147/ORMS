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

?>

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


    <?php
    include "adminsidebar.php";

    ?>


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
                                                            <?php
                                                            $sql_branch = "select * from tblbranch";
                                                            $result_branch = $conn->query($sql_branch);
                                                            echo '<select class="custom-select col-12" name="branchcode" id="branchcode"
                                                                required>';
                                                            echo '<option value="" selected disabled hidden>Choose here</option>';

                                                            while ($row = mysqli_fetch_array($result_branch)) {
                                                                echo " 
                                                                <option value=\"$row[0]\">$row[1]</option>";


                                                            }
                                                            echo "</select>";
                                                            mysqli_close($conn);
                                                            ?>

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
                                                                "min=<?php echo date('Y-m-d'); ?>" type="date"
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





    <script src="notify.js"></script>

    <script src="lobibox-master/js/Lobibox.js"></script>
    <script src="lobibox-master/demo/demo.js"></script>
    <script>
        $(document).ready(function () {


            const Promocode = document.getElementById("promocodename");
            const discount = document.getElementById("discount");
            const branchcode = document.getElementById("branchcode");
            const datee = document.getElementById("date");

            var validdiscount = false;
            var validpromocode = false;
            var validbranchcode = false;
            var validdate = false;

            //promocode validate
            Promocode.addEventListener('blur', () => {
                console.log("Promocode is blurred");

                let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
                let str = Promocode.value;
                console.log(regex, str);
                if (regex.test(str)) {
                    console.log('Your name is valid');

                    document.getElementById("error1").style.display = "none";
                    Promocode.classList.add('is-valid');
                    validpromocode = true;
                }
                else {
                    console.log('Your name is not valid');
                    Promocode.classList.add('form-control-danger');
                    document.getElementById("error1").style.display = "block";
                    document.getElementById("error1").innerHTML = "Promocode must be 2-10 characters long and should not start with a number";


                    validpromocode = false;

                }
            });

            //discount validate

            discount.addEventListener('blur', () => {
                console.log("discount is blurred");
                // Validate discount here
                let regex = /^([0-9])([0-9])$/;
                let str = discount.value;
                console.log(regex, str);
                if (regex.test(str)) {
                    console.log('Your discount is valid');
                    discount.classList.remove('is-invalid');
                    discount.classList.add('is-valid');
                    if (parseInt(str) < 100) {

                        document.getElementById("error2").style.display = "none";
                        validdiscount = true;
                    }
                    // document.getElementById("error2").style.display="none";

                }
                else {
                    console.log('Your discount is not valid');
                    // discount.classList.add('form-control-danger');
                    console.log(discount.value);
                    document.getElementById("error2").style.display = "block";

                    if (parseInt(str) < 100) {

                        document.getElementById("error2").style.display = "none";
                        discount.classList.add('is-valid');
                        validdiscount = true;


                    }
                    else {
                        console.log("BIh");
                        document.getElementById("error2").innerHTML = "Discount Should be less than 99";
                        discount.classList.add('is-invalid');
                    }
                    validdiscount = false;

                }
            });

            var s = document.getElementsByName('branchcode')[0];
            var bcode = s.options[s.selectedIndex].value;
            if (bcode) {
                // document.getElementById("error3").style.display="none";
                validbranchcode = true;
                document.getElementById("error3").style.display = "none";

                branchcode.classList.add('is-valid');

                // console.log("set");
            }

            $('#branchcode').on("change", function () {
                bcode = s.options[s.selectedIndex].value;
                console.log(bcode);
                if (bcode) {
                    // document.getElementById("error3").style.display="none";
                    validbranchcode = true;
                    document.getElementById("error3").style.display = "none";

                    branchcode.classList.add('is-valid');

                    // console.log("set");
                }

            });



            //Expiration Date validate
            $('#date').on("change", function () {

                var test = console.log(document.getElementById("date").value);



                validdate = true;
                // console.log(currentDate);
                document.getElementById("error4").style.display = "none";
                datee.classList.add('is-valid');

            });


            // submit button check

            $(document).on("click", "#done", function () {
                if (validdate && validbranchcode && validdiscount && validpromocode) {
                    $.ajax({
                        url: "retrivedata.php",
                        type: "POST",
                        data: {
                            id: "promocode",
                            action: "c",
                            date: datee.value,
                            branchcode: branchcode.value,
                            discount: discount.value,
                            promocode: Promocode.value

                        },
                        success: function (data) {

                            if (data == 1) {
                                load_data();
                                $('#c11').trigger('click');

                                Lobibox.notify('success', {
                                    size: 'mini',
                                    rounded: true,
                                    delayIndicator: true,
                                    msg: 'Data Inserted Successfully'

                                });
                                validdiscount = false;
                                validpromocode = false;
                                validbranchcode = false;
                                validdate = false;
                                discount.classList.remove('is-valid');
                                datee.classList.remove('is-valid');
                                branchcode.classList.remove('is-valid');
                                Promocode.classList.remove('is-valid');


                                $("#form").trigger("reset");
                                document.getElementById("form").reset();
                            }
                            else if (data == 123) {
                                Lobibox.notify('error', {
                                    size: 'mini',
                                    rounded: true,
                                    delayIndicator: true,
                                    msg: 'PromoCode is already avaliable'
                                });

                                // location.reload();

                            }
                            else {
                                Lobibox.notify('error', {
                                    size: 'mini',
                                    rounded: true,
                                    delayIndicator: true,
                                    msg: 'An error occur'
                                });
                            }


                        }
                    });
                }
                else {
                    // console.log("Not set");
                    Lobibox.notify('error', {
                        size: 'mini',
                        rounded: true,
                        delayIndicator: true,
                        msg: 'Invalid Details '
                    });
                }
            });





            var check = 0;
            $(document).on("click", "#c2", function () {
                console.log("clicked");
                document.getElementById("table-data").style.display = "none";
                document.getElementById("profile").style.display = "unset";

            });
            $(document).on("click", "#c1", function () {
                console.log("home");
                document.getElementById("table-data").style.display = "unset";
                document.getElementById("profile").style.display = "none";
            });
            // load data from database
            function load_data() {


                $.ajax({
                    url: "retrivedata.php",
                    type: "POST",
                    data: {
                        id: "promocode",
                        action: "r"
                    },
                    success: function (data) {
                        $("#table-data").html(data);
                       
                        

                    }
                });
                return;
            };
            load_data();
            var id;
            $(document).on("click", "#edit", function () {

                // const branchcode = document.getElementById("branchcode");
                // const datee = document.getElementById("date");
                
                 id = $(this).data("eeid");
                    console.log(id);
                    str = "#status-ac" + id;

                    var status = $(str).data("check");
                    console.log(status);
                    // str = "\"#status-ac" + id + "\"";

                    if (status == 1) {
                        // console.log(str);
                        document.getElementById("status-ac" + id).checked = true;
                    }
                    else {
                        document.getElementById("status-dc" + id).checked = true;

                    }
                

                $(document).on("click", "#editme"+id, function () {
                    var validdiscount = false;
                    var validpromocode = false;
                    var validbranchcode = false;
                    var validdate = false;

                   

                    var str = "#editpromocodename" + id;
                    var promocodename = $(str).val();
                    const Promocode = document.getElementById(str);


                    console.log(promocodename);
                    str = "#editdiscountpercentage" + id;
                    var discountpercentage = $(str).val();
                    const discount = document.getElementById(str);

                    str = "#editdate" + id;
                    var date = $(str).val();
                    const datee = document.getElementById(str);

                    console.log(discountpercentage);
                    console.log(date);
                    str = "branchcode" + id;
                    console.log(str);
                    var editbranchcode = document.getElementById(str).value;
                    const branchcode = document.getElementById(str);
                    console.log(editbranchcode);
                    var validdiscount = false;
                    var validpromocode = false;
                    var validbranchcode = false;
                    var validdate = false;
                    str = "#status-ac" + id;
                   



                    

                        let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
                        str = promocodename;
                        console.log(regex, str);
                        if (regex.test(str)) {
                            console.log('Your name is valid');

                            document.getElementById("error5").style.display = "none";
                            // Promocode.classList.add('is-valid');
                            validpromocode = true;
                        }
                        else {
                            console.log('Your name is not valid');
                            // Promocode.classList.add('form-control-danger');
                            document.getElementById("error1").style.display = "block";
                            document.getElementById("error5").innerHTML = "Promocode must be 2-10 characters long and should not start with a number";


                            validpromocode = false;

                        }
                        console.log(validpromocode);

                        regex = /^[0-9]*(?:\.[0-9]*)?$/;
                        str = discountpercentage;
                        console.log(regex, str);
                        if (regex.test(str)) {
                            console.log('Your discount is valid');
                            // discount.classList.remove('is-invalid');
                            // discount.classList.add('is-valid');
                            if (parseInt(str) < 100) {

                                document.getElementById("error6").style.display = "none";
                                validdiscount = true;
                            }
                            // document.getElementById("error2").style.display="none";

                        }
                        else {
                            console.log('Your discount is not valid');
                            // discount.classList.add('form-control-danger');
                            console.log(discount);
                            document.getElementById("error6").style.display = "block";

                            if (parseInt(str) < 100) {

                                document.getElementById("error6").style.display = "none";
                                // discount.classList.add('is-valid');
                                validdiscount = true;


                            }
                            else {
                                console.log("BIh");
                                document.getElementById("error6").innerHTML = "Discount Should be less than 99";
                                // discount.classList.add('is-invalid');
                                validdiscount = false;
                            }

                        }



                        if (bcode) {
                            // document.getElementById("error3").style.display="none";
                            validbranchcode = true;
                            document.getElementById("error3").style.display = "none";

                            branchcode.classList.add('is-valid');

                            // console.log("set");
                        }

                        $('#branchcode'+id).on("change", function () {
                            bcode = s.options[s.selectedIndex].value;
                            console.log(bcode);
                            if (bcode) {
                                // document.getElementById("error3").style.display="none";
                                validbranchcode = true;
                                document.getElementById("error3").style.display = "none";

                                branchcode.classList.add('is-valid');

                                // console.log("set");
                            }

                        });
                        if(editbranchcode)
                        {
                            validbranchcode=true;
                        }

                       
                            
                        // = true;
                        // console.log("inside");
                            
                            // console.log("changed");

                       



                        //Expiration Date validate
                        if(date)
                        {
                            validdate=true;

                        }
                        $('#editdate'+id).on("change", function () {

                            var test = console.log(document.getElementById("editdate"+id).value);



                            validdate = true;
                            // console.log(currentDate);
                            document.getElementById("error4").style.display = "none";
                            datee.classList.add('is-valid');

                        });

                        if( document.getElementById("status-ac" + id).checked)
                            {
                        // console.log("status ");

                                status=1;
                            }
                            else{
                        // console.log("nonono ");

                                status=0;
                            }


                        console.log(validdate);
                        console.log(validbranchcode);
                        console.log(validdiscount);
                        console.log(validpromocode);



                        if (validdate && validbranchcode && validdiscount && validpromocode) {
                           

                                $.ajax({
                                    url: "retrivedata.php",
                                    type: "POST",
                                    data: {
                                        id: "promocode",
                                        action: "e",
                                        eid: id,
                                        promocodename: promocodename,
                                        discountpercentage: discountpercentage,
                                        branchcode: editbranchcode,
                                        date: date,
                                        status: status,

                                    },
                                    success: function (data) {

                                        // document.getElementById("close").click();
                                        // $('#close').trigger('click');

                                        // $("#form-edit").trigger("reset");
                                        // document.getElementById("form-edit").reset();
                                        // delete id;
                                        // event.stopPropagation();

                                        // event.stopPropagation();

                                        // check = data;
                                        if (data == 1) {
                                            // $('.modal').remove();
                                            $('.modal-backdrop').remove();
                                            $('body').removeClass("modal-open");
                                            
                                            load_data();
                                            Lobibox.notify('success', {
                                                size: 'mini',
                                                msg: 'Data Updated Successfully'
                                            });
                                            // location.reload();

                                            // event.preventDefault();

                                        }
                                        else
                                        {
                                            Lobibox.notify('error', {
                                                size: 'mini',
                                                msg: data
                                            });
                                        }
                                        //    return 1;
                                    },

                                });




                            
                        }
                        else
                        {
                            Lobibox.notify('error', {
                                size: 'mini',
                                msg: 'Please Fill All the Fields'
                            });
                        }
                
                    

                });

            });


                //discount validate








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
<!-- write a php code which allow only string  -->
</body>

</html>