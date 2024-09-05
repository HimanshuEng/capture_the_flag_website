<?php
    // session_start();
    if(isset($_SESSION['username'])){
        header("Location: first.php");
    }
?>
<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
        
        $sql="select * from signup where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from signup where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 && $count_email==0){
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO signup(username, email, password) VALUES('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: login.php");
                }
            }
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "signup.php";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup form</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>	
	<img class="wave" src="images/3.png">
	<div class="container">
		<div class="img">
			<!-- <img src="6.png"> -->
		</div>
		<div class="login-content" >
			<form name="form" action="signup.php" onsubmit="return validateform()" method="POST">
				<!-- <img src="7.png"> -->
				<h2 class="title">Signup</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<!-- <h5>username</h5> -->
           		   		<input type="text" class="input" id="user" name="user" required placeholder="username" >
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<!-- <h5>Email Address</h5> -->
           		   		<input type="text" class="input" id="email" name="email" required placeholder="EmailAddress" >
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="password" class="input" id="pass" name="pass" required placeholder="password" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="password" class="input" id="cpass" name="cpass" required placeholder="confirmpassword" >
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Signup" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="signup.js"></script>
</body>
</html>
