<?php
$utype = "";
session_start();

?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<link rel="stylesheet" href="./assets/css/service.css">
<title>Baba Sai Resturant - Restaurant HTML Template</title>


<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css">


<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/klassy-logo.png" align="Baba Sai Resturant ">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="index.php#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="index.php#about">About</a></li>

                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                        <li class="scroll-to-section"><a href="Menu.php">Menu</a></li>
                        <li class="scroll-to-section"><a href="index.php#chefs">gallery</a></li>

                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                        <li class="scroll-to-section"><a href="index.php#reservation">Contact Us</a></li>
                        <?php
                        
                        if(isset($_SESSION['utype']))
                        {
                            $utype=$_SESSION['utype'];
                        }
                        
                        if (!isset($_SESSION['user'])) {
                        ?>
                            <li class="scroll-to-section"><a href="Login.php">Sign-up/Sign-in</a></li>
                            <?php
                        }
                        else{ ?>
                            <li class="submenu">
                                <a href="javascript:;"><i class="fa fa-user"></i></a>
                                <ul>
                                    <li><a href="profile.php">View Profile <?php echo $utype ?></a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                                <?php
                        }
                                ?>
                                
                            <li class="scroll-to-section"><a href="temp.php"><i class="fa fa-shopping-cart"></i></li>
                            <!-- <li class="scroll-to-section"><button style="border:none; border:2px solid ornage"><a href="Login.php"> SignIn/Up</a></button></li> -->
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>

                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>




<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>
    $(function() {
        var selectedClass = "";
        $("p").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
</script>