<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>

    
  <%@ page import="java.util.*" %>
      <%@ page import="java.io.*" %>
      <%@ page import="java.lang.Object" %>
          <%@ page import="java.sql.*" %>
      <%@ page import="java.sql.Connection" %>
        <%@ page import="java.sql.DriverManager" %>
          <%@ page import="java.sql.SQLException" %> 
	  
	   <% /*
<?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      
      require "PHPMailer.php";
      require "Exception.php";
      require "SMTP.php";
      session_start();

	  session_destroy();
      session_start();
	  $_SESSION['mail']="";
?>
<?php
	$cookie_name = "mail";
	$cookie_value = $_POST['mail'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
	// $_SESSION['mail']=$_COOKIE[$cookie_name];
?>
*/
%>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
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
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
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
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
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
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.php">
						<img src="vendors/images/deskapp-logo.svg" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img src="vendors/images/forgot-password.png" alt="" />
					</div>
					<div class="col-md-6">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Forgot Password</h2>
							</div>
							<h6 class="mb-20">
								Enter your email address to reset your password
							</h6>
							<form method="POST" action="forgot-password.jsp">
								<div class="input-group custom">
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="Email"
										name="email"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="fa fa-envelope-o" aria-hidden="true"></i
										></span>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-5">
										<div class="input-group mb-0">
											<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
										-->
											<button
												class="btn btn-primary btn-lg btn-block"
												name="reset" type="submit"
												>Submit</button
											>
											
										</div>
									</div>
									<div class="col-2">
										<div
											class="font-16 weight-600 text-center"
											data-color="#707373"
										>
											OR
										</div>
									</div>
									<div class="col-5">
										<div class="input-group mb-0">
											<a
												class="btn btn-outline-primary btn-lg btn-block"
												href="login.php"
												>Login</a
											>
										</div>
									</div>
								</div>
							</form>
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
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>



<%
	String Email="";
	try{


	// Database Connection Code
	 String ConnectionUrl="jdbc:mysql://localhost:3306/";
    String DbName="rms";
    String DbUserName="root";
    String DbPassword="";
    Connection con=DriverManager.getConnection(ConnectionUrl+DbName,DbUserName,DbPassword);

    
    //Check Connection is Established or not
    if(con!=null)
    {
        System.out.println("Connection Successfully Established");
    }
    else
    {
        System.out.println("Connection Not Established");
    }
		
	Email=request.getParameter("email");
	Statement statement=con.createStatement();

        String Sql="SELECT * FROM tbluser where emailid='"+Email+"'";
	 System.out.println(Sql);
        

	ResultSet resultset=statement.executeQuery(Sql);

	if(resultSet!= null)
	{
	resultset.next();
	System.out.println(resultset.getString("emailid") );
	
	if(resultset.getString("emailid")==Email){
		System.out.println("Mail Matched");

	}
	else
	{
		System.out.println("Invalid Mail ID");
	}
	}
	}
	catch(Exception e){
		e.printStackTrace();
	}
%>