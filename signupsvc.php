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
				$stat=$_POST["state"];
				$com=$_POST["company"];
				$city=$_POST["city"];
				$mno=$_POST["mno"];
				$add=$_POST["address"];
				$email=$_POST["email"];
				echo $stat, $com, $city, $mno, $add, $email,$id,$pwd;
				mysql_query("INSERT INTO srvcntr (id, password, company, state, city, address, mno, email) VALUES ('$id', '$pwd', '$com', '$stat', '$city', '$add', '$mno',  '$email')");
				$_SESSION["log"]=1;
			    $_SESSION["id"]=$_POST["username"];
			    $_SESSION["type"]="svc";
			    //header("Location:welcomesvc.php");
			}

			elseif ($_POST["submit"]=="login") {
				$tmp=mysql_fetch_array(mysql_query("SELECT * FROM srvcntr where id = '$id' AND password = '$pwd'"));
				if($tmp){
					$_SESSION["log"]=1;
					$_SESSION["type"]="svc";
					$_SESSION["id"]=$id;
					header("Location:welcomesvc.php");

				}
				else{
					unset($_SESSION["log"]);
					unset($_SESSION["type"]);
					header("Location:loginsvc.php");
				}
			}

		}
	?>
</body>
</html>