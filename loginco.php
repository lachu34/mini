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
    	 elseif($_SESSION["log"]==1&&$_SESSION["type"]=="shp")
    	   header("Location: welcomeshp.php");
    	 elseif($_SESSION["log"]==1&&$_SESSION["type"]=="svc")
    	   header("Location: welcomesvc.php");
    	}	
    	?>
    </head>
    <body>
     <form action="signupco.php" method="post">
     	<h1>Log In</h1>
     	<p>
            <label for="username" data-icon="u" > Company name</label>
            <input id="username" name="username" required="required" type="text" placeholder="eg:abc@xyz.com"/>
        </p>
        <p> 
            <label for="password" data-icon="p"> Your password </label>
            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
        </p>
         <p class="login button"> 
            <input type="submit" name="submit" value="login" /> 
    	</p>
     </form>
     <form  action="signupco.php" autocomplete="on" method="post"> 
        <h1> Sign up </h1> 
        <p> 
            <label for="username" data-icon="u">Company name</label>
            <input id="username" name="username" required="required" type="text" placeholder="eg:abc@xyz.com" value = "fredy@gmail.com"/>
        </p>
    	<p>
    	    <label for="email" data-icon="u">Enter company email id</label>
    		<input id="email" name="email" required="required" type="text" placeholder="eg:0123456789" value = "jj@gmail.com"/>
    	</p>

        <p> 
            <label for="password"  data-icon="p">Your password </label>
            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" value ="1234"/>
        </p>
        <p> 
            <label for="passwordsignup_confirm"  data-icon="p">Please confirm your password </label>
            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="text" placeholder="eg. X8df!90EO" value = "1234"/>
        </p>
        <p class="signin button"> 
    		<input type="submit" name ="submit" value="register"/> 
    	</p>
    </form>

    </body>
    </html>