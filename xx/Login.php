<?php
	$url=$hope=$errPwd="";
	session_start();

		if(isset($_SESSION['user']))
		{
				header("Location:index.php");
		}
		else
		{
			$hope="dfhdfhf<br>";
			$errPwd="Enter Valid Details";
			include 'dbfile.php';
			if(isset($_POST['signin']))
			{

				if(!empty($_POST['mail']) && !empty($_POST['pwd'])){
				$mail = $_POST['mail'];
				// Validate email
				if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
					$mail=$_POST['mail'];
					$pwd=$_POST['pwd'];
					//$hash = md5($pwd);
					$sqlselect = "SELECT * FROM `tbluser`";
					//$sqlselect for data retrival from database
					$result= mysqli_query($conn, $sqlselect);
					if (mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							if($mail==$row['emailid'])
							{
								if(password_verify($pwd, $row['password']))
								{
									$_SESSION['user']=$row['name'];
									$_SESSION['role']=$row['role'];
									 //admin
									if($row['role']==1)
									{ 
                                        $_SESSION['utype']="admin";
										header("Location:dashboard.php");
									}
									//customer
									else if($row['role']==0){
                                        $_SESSION['utype']="customer";
                                        $_SESSION['uid']=$row['userid'];
										header("Location:index.php");

									}
									else if($row['role']==2)
									{ //branch manager
                                        $_SESSION['utype']="branchmanager";
                                        $_SESSION['bid']=$row['branchCode'];
                                        
										header("Location:./branchmanager/dashboard.php");
									}
									else if($row['role']==3)
									{ //orderman
                                        $_SESSION['utype']="orderman";
										header("Location:ordermantable.php");
									}
									else if($row['role']==4)
									{ //cashier
                                        $_SESSION['utype']="cashier";
										header("Location:cashier.php");
									}
									else
									$errmail="Invalid Details";
								} 
	
							}
						}
						
					}
					}
				}
				else{
					$errmail="Invalid Details";
				}				

			}
		}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Restaurent Management System LOGIN PAGE</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <!-- <link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/> -->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
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

<body class="login-page">

    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="index.php">
                <img src="vendors/images/deskapp-logo.svg" alt="" />
            </a>
        </div>
        <div class="login-menu">
            <ul>
                <li><a href="register.php">Register</a></li>
            </ul>
        </div>
    </div>


    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To DeskApp</h2>
                        </div>
                        <form method="POST">
                            <!-- <div class="select-role">
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn active">
											<input type="radio" name="options" id="admin" />
											<div class="icon">
												<img
													src="vendors/images/briefcase.svg"
													class="svg"
													alt=""
												/>
											</div>
											<span>I'm</span>
											Customer
										</label>
										<label class="btn">
											<input type="radio" name="options" id="user" />
											<div class="icon">
												<img
													src="vendors/images/person.svg"
													class="svg"
													alt=""
												/>
											</div>
											<span>I'm</span>
											Employee
										</label>
									</div>
								</div> -->
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg" required placeholder="Email" name="mail"
                                    require pattern="\w,./_=?-]+" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" placeholder="Password"
                                    name="pwd" required pattern="\w,./_=?-]+"/>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>

                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <!-- <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Remember</label> -->
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="forgot-password.php">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <!--                       SIGN IN BUTTON                       -->
                                        <input class="btn btn-primary btn-lg btn-block"
                                            class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In"
                                            name="signin">
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                        OR
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="register.php">Register
                                            To Create Account</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>
                        <?php
							if(isset($errPwd))
							{

								echo '<div class="alert alert-primary" role="alert">';
								// echo "$errPwd<br>";
								if(isset($errmail) && $errmail!="")
									echo $errmail."<br>";
								else{
									echo "$errPwd<br>"; 
								}
								echo '</div>';
								
							}
							?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>