<?php  
	   // session starts with the help of this function 
	if(isset($_SESSION['mail']))   // Checking whether the session is already there or not if 
								// true then header redirect it to the home page directly 
	{
		header("Location:../cart.php"); 
	}
	else{
	header("Location:login.php");
	}

	
?> 