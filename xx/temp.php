<?php
include 'dbfile.php';

session_start();
if(isset($_SESSION['utype']))
{
    $utype=$_SESSION['utype'];
    if($utype!="customer")
    {
        header("Location:Login.php");
    }
}
else
{
    header("Location:Login.php");
}


?>

<?php

if (isset($_POST['action'])) {
    echo "set";
    if ($_POST['action'] == "r") {

    echo "Set";


        if (isset($_POST['itemid']) && isset($_POST['num']) && isset($_POST['amt'])) {
            $quantity = $_POST['num'];
            $itemid = $_POST['itemid'];
            $amt = $_POST['amt'];
            $userId=$_SESSION['uid'];

            $sql = "INSERT INTO `tblcart`(`userId`, `itemId`, `quantity`, `amount`) VALUES ('$userId','$itemid','$quantity','$amt')";
            $result = $conn->query($sql);
            if ($result) {
                echo "query executed";
            }
            else
            {
                echo $sql;
                echo "Not executed";
            }

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="temp.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/service.css">


    <!-- razorpay -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <title>Baba Sai Resturant - Restaurant HTML Template</title>

    <!--
    
TemplateMo 558 Baba Sai Resturant

https://templatemo.com/tm-558-klassy-cafe

-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="css/bootstrap.min.css" />
    <link type="text/css" href="css/bootstrap-timepicker.min.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="x.css"> -->

    <title>Document</title>

</head>

<body>
    <?php
    include 'navbar.php';
    ?>


    <section class="h-100 h-custom">
        <div id="table-data">

        </div>

        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/accordions.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imgfix.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/isotope.js"></script>

        <!-- Global Init -->
        <script src="assets/js/custom.js"></script>
        <script>
            $(function () {
                var selectedClass = "";
                $("p").click(function () {
                    selectedClass = $(this).attr("data-rel");
                    $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("." + selectedClass).fadeOut();
                    setTimeout(function () {
                        $("." + selectedClass).fadeIn();
                        $("#portfolio").fadeTo(50, 1);
                    }, 500);

                });
            });
        </script>

        <script>
            $(document).ready(function () {



                $(document).on('keyup', '#form3Examplea2', function () {
                    var promocode = document.getElementById("form3Examplea2").value;



                    $.ajax({
                        url: "retrivedata.php",
                        type: "POST",
                        data: {
                            id: "temp",
                            action: "promocode",
                            promocode: promocode


                        },
                        success: function (data) {
                            // alert('data');
                            if (data == 0) {


                                document.getElementById("error1").style.display = "block";

                                document.getElementById("error1").innerHTML = "Invalid PromoCode";


                            }
                            else {
                                document.getElementById("error1").style.display = "none";
                                document.getElementById("error1").innerHTML = "Valid PromoCode";
                                document.getElementById("discount").innerHTML = data;
                                var total = document.getElementById("total").innerHTML;
                                var discount = data;
                                console.log(discount);
                                console.log(total);

                                document.getElementById("amt").value = parseFloat(total) - parseFloat(discount);

                                document.getElementById("amt").innerHTML = parseFloat(total) - parseFloat(discount);


                            }



                        }
                    });



                });

                //                 const timeControl = document.querySelector('input[type="time"]');
                // timeControl.value = '15:30';

                $(document).on('click', '#check', function () {
                    const timeControl = document.querySelector('input[type="time"]');
                    console.log(timeControl.value);
                    if (timeControl.value.slice(0, 2) > '18' && timeControl.value.slice(0, 2) < '24') {
                        pay_now();
                    }
                    else {
                        alert('Delivery time should be between 6:00 PM to 12:00 AM');
                    }
                });


                $(document).on('keyup', '#form1', function () {
                    var qty = document.getElementById("form1").value;
                    var price = $(this).data("value");
                    var id = $(this).data("id");

                    console.log(qty);
                    console.log(price);
                    console.log(id);

                    $.ajax({
                        url: "retrivedata.php",
                        type: "POST",
                        data: {
                            id: "temp",
                            action: "up",
                            qty: qty,
                            idd: id

                        },
                        success: function (data) {
                            // alert(data);
                            $.ajax({
                                url: "retrivedata.php",
                                type: "POST",
                                data: {
                                    id: "temp",
                                    action: "data"

                                },
                                success: function (data) {
                                    $("#table-data").html(data);










                                }
                            });

                        }
                    });



                });













                $.ajax({
                    url: "retrivedata.php",
                    type: "POST",
                    data: {
                        id: "temp",
                        action: "data"

                    },
                    success: function (data) {
                        $("#table-data").html(data);










                    }
                });




            });

            function pay_now() {
                
                var name = jQuery('#name').val();
                var amt = jQuery('#amt').val();
                var amt = document.getElementById("amt").innerHTML;
                var discount = jQuery("#discount").val();
                var cartid = $("#form1").data('id');
                // var itemname=$("#iname").innerHTML();
                var desc = $("#desc").val();
                           

                console.log(amt);

                jQuery.ajax({
                    type: 'post',
                    url: 'payment_process.php',
                    data: "amt=" + amt + "&name=" + name+ "&discount=" + discount+ "&cartid=" + cartid+ "&price=" + amt,
                    success: function (result) {
                        var options = {
                            "key": "rzp_test_HiTtcSLsG1tdWt",
                            "amount": amt * 100,
                            "currency": "INR",
                            "name": "Baba Sai Restaurant",
                            "description": "Test Transaction",
                            "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                            "handler": function (response) {
                                jQuery.ajax({
                                    type: 'post',
                                    url: 'payment_process.php',
                                    data: {payment_id : response.razorpay_payment_id},
                                        

                                        
                                    success: function (result) {

                                        window.location.href = "paymentsleep.php";
                                    }
                                });
            }
                        };
            var rzp1 = new Razorpay(options);
            rzp1.open();
                    }
                });


            }
        </script>

    </section>
</body>

</html>