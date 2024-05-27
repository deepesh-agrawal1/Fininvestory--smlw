<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="singup.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Learn Trading</a>
        <nav class="nav-items">
            <a href="index.html">Home</a>
            <a href="https://forms.gle/AKEhjFmrqvuRQ6f96">Enroll Now</a>
            <a href="#">About</a>
            <a href="form.html">Contact us</a>
            <button onclick="window.location.href='login.php' ">Log_In</button>

        </nav>
    </header>

    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    
    <div class="main">
        <div class="d1"></div>
        <div class="d2"></div>
        <div class="d3"></div>
        <div class="d4"></div>
    </div>
   

    <div class="container">

   <!-- <form id="createAccountForm" style="display: none;"> -->
            <h2>Create Account</h2>

        
            <form action="/final/signup.php" method="post">

            <div class="form-group">
           
                <label for="username" style="color: azure;">New Username</label>
                <input type="email" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password" style="color: azure;">New Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="cpassword" style="color: azure;">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" required>
                <small id="emailHelp" class="form-text text-muted" style="color: azure;">Make sure to type the same password</small>
            </div>

            <button type="submit" class="btn btn-primary">Create Account</button>
          <p id="successMessage" class="success-message"></p>
            <p style="color: azure; line-height: 1.5em;">Already have an account?<br><a href="login.php" id="loginLink" style="color: azure;">Login</a></p>  
          </form>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
