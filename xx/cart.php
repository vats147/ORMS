<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vatsalstyle.css">
    <link rel="shortcut icon" href="home-img/Apple-Logo-Modern-Icon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/service.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/service.css">
    <title>Baba Sai Resturant - Restaurant HTML Template</title>
    <meta http-equiv=”refresh” content=”1″>
    <!-- <link rel="stylesheet" href="x.css"> -->
    <!--

TemplateMo 558 Baba Sai Resturant

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

    body {
        background: url('http://all4desktop.com/data_images/original/4236532-background-images.jpg');
        font-family: 'Roboto Condensed', sans-serif;
        color: #262626;
        margin: 5% 0;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .d-flex {
        display: flex;
        flex-direction: row;
        background: #f6f6f6;
        border-radius: 0 0 5px 5px;
        padding: 25px;
    }

    form {
        flex: 4;
    }

    .Yorder {
        flex: 2;
    }

    .title {
        background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
        background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
        background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
        background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
        background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
        border-radius: 5px 5px 0 0;
        padding: 20px;
        color: #f6f6f6;
    }

    h2 {
        margin: 0;
        padding-left: 15px;
    }

    .required {
        color: red;
    }

    label,
    table {
        display: block;
        margin: 15px;
    }

    label>span {
        float: left;
        width: 25%;
        margin-top: 12px;
        padding-right: 10px;
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    select {
        width: 70%;
        height: 30px;
        padding: 5px 10px;
        margin-bottom: 10px;
        border: 1px solid #dadada;
        color: #888;
    }

    select {
        width: 72%;
        height: 45px;
        padding: 5px 10px;
        margin-bottom: 10px;
    }

    .Yorder {
        margin-top: 15px;
        height: 600px;
        padding: 20px;
        border: 1px solid #dadada;
    }

    table {
        margin: 0;
        padding: 0;
    }

    th {
        border-bottom: 1px solid #dadada;
        padding: 10px 0;
    }

    tr>td:nth-child(1) {
        text-align: left;
        color: #2d2d2a;
    }

    tr>td:nth-child(2) {
        text-align: right;
        color: #52ad9c;
    }

    td {
        border-bottom: 1px solid #dadada;
        padding: 25px 25px 25px 0;
    }

    p {
        display: block;
        color: #888;
        margin: 0;
        padding-left: 25px;
    }

    .Yorder>div {
        padding: 15px 0;
    }

    button {
        width: 100% !important;
        margin-top: 10px !important;
        padding: 10px !important;
        border: none !important;
        border-radius: 30px !important;
        background: #52ad9c !important;
        color: #fff !important;
        font-size: 15px !important;
        font-weight: bold !important;
    }

    button:hover {
        cursor: pointer;
        background: #428a7d;
    }
    </style>
</head>

<body>
    <?php
      include 'navbar.php';
    ?>

    <div class="container">
        <div class="title">
            <h2>Product Order Form</h2>
        </div>
        <div class="d-flex">
            <form action="" method="">
                <label>
                    <span class="fname">First Name <span class="required">*</span></span>
                    <input type="text" name="fname">
                </label>
                <label>
                    <span class="lname">Last Name <span class="required">*</span></span>
                    <input type="text" name="lname">
                </label>
                <label>
                    <span>Company Name (Optional)</span>
                    <input type="text" name="cn">
                </label>
                <label>
                    <span>Country <span class="required">*</span></span>
                    <select name="selection">


                        <option value="IND">India</option>

                    </select>
                </label>
                <label>
                    <span> Address <span class="required">*</span></span>
                    <input type="text" name="houseadd" placeholder="House number and street name" required>
                </label>
                <label>
                    <span>&nbsp;</span>
                    <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
                </label>
                <label>
                    <span>Town / City <span class="required">*</span></span>
                    <input type="text" name="city">
                </label>
                <label>
                    <span>State  <span class="required">*</span></span>
                    <input type="text" name="city">
                </label>
                <label>
                    <span>Postcode / ZIP <span class="required">*</span></span>
                    <input type="text" name="city">
                </label>
                <label>
                    <span>Phone <span class="required">*</span></span>
                    <input type="tel" name="city">
                </label>
                <label>
                    <span>Email Address <span class="required">*</span></span>
                    <input type="email" name="city">
                </label>
            </form>
            <div class="Yorder">
                <table>
                    <tr>
                        <th colspan="2">Your order</th>
                    </tr>
                    <tr>
                        <td>Product Name x 2(Qty)</td>
                        <td>$88.00</td>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>$88.00</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free shipping</td>
                    </tr>
                </table><br>
                <div>
                    <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
                </div>
                <p>
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                    Your order will not be shipped until the funds have cleared in our account.
                </p>
                <div>
                    <input type="radio" name="dbt" value="cd"> Cash on Delivery
                </div>
                <div>
                    <input type="radio" name="dbt" value="cd"> Paypal <span>
                        <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg"
                            alt="" width="50">
                    </span>
                </div>
                <button type="button">Place Order</button>
            </div><!-- Yorder -->
        </div>
    </div>

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
₹
(function() {
    var selectedClass = "";₹
    ("p").click(function() {
        selectedClass = ₹(this).attr("data-rel");₹
        ("#portfolio").fadeTo(50, 0.1);₹
        ("#portfolio div").not("." + selectedClass).fadeOut();
        setTimeout(function() {
            ₹
            ("." + selectedClass).fadeIn();₹
            ("#portfolio").fadeTo(50, 1);
        }, 500);

    });
});
</script>

</body>

</html>
