<?php
    include('connection.php');
    if(isset($_SESSION['username'])){
        header("Location: first.php");
        exit();
    }


    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);

        $sql = "SELECT * FROM signup WHERE username = '$username' OR email = '$username'";
        $result = mysqli_query($conn, $sql);

        if (!$result || mysqli_num_rows($result) == 0) {
            echo  '<script>
                        alert("Login failed. Invalid username or password!!");
                        window.location.href = "login.php";
                    </script>';
            exit();
        }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if(password_verify($password, $row["password"])){
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;
            header("Location: first.php");
            exit();
        } else {
            echo  '<script>
                        alert("Login failed. Invalid username or password!!");
                        window.location.href = "login.php";
                    </script>';
            exit();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <img class="wave" src='images/3.png'>
    <div class="container">
        <div class="img">
            <!-- <img src="6.png"> -->
        </div>
        <div class="login-content">
            <form name="form" action="login.php" method="POST">
                <!-- <img src="7.png"> -->
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" id="user" name="user" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" id="pass" name="pass" required>
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login" name="submit">
                <p>Don't have an account?  <a href="signup.php">Sign up</a></p>               
            </form>
        </div>
    </div>
    <script type="text/javascript" src="login.js"></script>
</body>
</html>
