<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title> MSI </title>
   <?php 	
   $sql=mysql_connect("localhost","root","root123");
   if(!$sql)
  	  {
	   die("Couldn't connect".mysql_error());
	  }
   mysql_select_db("msi",$sql);
	?>
</head>
<body>

	<?php 
		if(isset($_POST["username"])){
			$id=$_POST["username"];
			$pwd=$_POST["password"];
			if(($_POST["submit"])=="register"){
				
				$nam=$_POST["name"];
				$stat=$_POST["state"];
				$city=$_POST["city"];
				$mno=$_POST["mno"];
				$add=$_POST["address"];
				mysql_query("INSERT INTO customer (id,name,password,address,state,city,mno) VALUES ('$id','$nam','$pwd','$add','$stat','$city', '$mno')");
				$_SESSION["log"]=1;
			    $_SESSION["id"]=$_POST["username"];
			    $_SESSION["name"]=$_POST["name"];
			    $_SESSION["type"]="c";
			    header("Location:welcome.php");
			}

			elseif ($_POST["submit"]=="login") {
				$tmp=mysql_fetch_array(mysql_query("SELECT * FROM customer where id = '$id' AND password = '$pwd'"));
				if($tmp){
					$_SESSION["log"]=1;
					$_SESSION["type"]="c";
					$_SESSION["id"]=$id;
					$_SESSION["name"]=$tmp["name"];
					header("Location:welcome.php");

				}
				else{
					unset($_SESSION["log"]);
					unset($_SESSION["type"]);
					header("Location:login.php");
				}
			}

		}
	?>
</body>
</html>