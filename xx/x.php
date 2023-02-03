<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="x.css">
</head>
<body>
    
<div class="x">
	<div class="b">
		<div id="a">
			<div class="p"></div>
			<div class="c">
				<div class="busBack"></div>
				<div class="busFront">
					<div class="busFrontMain">
            
          </div>
					<div class="topLight light"></div>
					<div class="bottomLight light"></div>
				</div>
			</div>
			<div class="path">
				<div class="stripes"></div>
				<div class="stripes"></div>
				<div class="stripes"></div>
				<div class="stripes"></div>
				<div class="stripes"></div>
				<div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
        <div class="stripes"></div>
			</div> <a class="final">
     Order Placed
    </a>
		</div> <a href="#anim" class="text">
      Place Order
    </a>
	</div>
	<div></div>
	<div></div>
</div>



</body>
</html>


 -->
 <?php
	$updateid=$name=$add=$city=$pincode=$contact="";
    $name1=$add1=$city1=$pincode1=$contact1="";
	include 'dbfile.php';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$add=$_POST['add'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$contact=$_POST['contact'];
		echo "$name";
        // $sql=" UPDATE `tblbranch` SET `name`='llll', `address`='it is', `city`='not working', `pincode`='415263', `brContactNo`='4152637444' WHERE `branchcode`='153' ;";
        // $result = mysqli_query($conn, $sql);
        // $sql="";
		$sql="INSERT INTO `tblbranch`(`name`, `address`,`city`,`pincode` ,`brContactNo`, `status`) VALUES ('$name','$add','$city','$pincode','$contact','TRUE')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			header("location:a.php");
		}
		$name=$add=$city=$pincode=$contact="";
    }
  
	
        $sql=" UPDATE `tblbranch` SET `name`='llll', `address`='it is', `city`='not working', `pincode`='415263', `brContactNo`='1452' ,`status`='1' WHERE `branchcode`='153' ;";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "hello";
        }
    
?>