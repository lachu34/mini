<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MSI</title>
	<?php 
	if(isset($_SESSION["log"])){
	 if($_SESSION["log"]==1&&$_SESSION["type"]=="c")
	   header("Location: welcome.php");
	 elseif($_SESSION["log"]==1&&$_SESSION["type"]=="co")
	   header("Location: welcomeco.php");
	 elseif($_SESSION["log"]==1&&$_SESSION["type"]=="svc")
	   header("Location: welcomesvc.php");
      elseif($_SESSION["log"]==0)
        header("Location:index.php");
	}	
	else
		header("Location:index.php");

	$sql=mysql_connect("localhost","root","root123");
   if(!$sql)
  	  {
	   die("Couldn't connect".mysql_error());
	  }
   mysql_select_db("msi",$sql);
	?>
</head>
<body>
<?php include("sheader.php"); ?>
<!--<a href="logout.php"><button>logout</button></a>-->

</body>
</html>