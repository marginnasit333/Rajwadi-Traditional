<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    //$sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: welcome.php");
            } 
            else{
                $showError = "Invalid UserName or Password";
            }
        }
        
    } 
    else{
        $showError = "Invalid UserName or Password";
    }
}
    
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script type="text/javascript">
        function preventBack(){
            window.history.forward()
        };
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
        
    </script>


    <title>Rajwadi Traditional Wear-Login</title>
</head>

<body > 
    <?php require 'partials/_nav.php' ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" >
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4" >
        <h4 class="text-center" style="border: 1px solid black; border-radius: 5px; padding:15px; box-shadow: 0 1px 4px 0 rgb(52, 5, 5);margin:2% 0 ">Welcome To Rajwadi Traditional Wear</h4>
        <form action="/loginsystem/login.php" method="post" style="border: 1px solid black; border-radius: 5px; padding:15px; box-shadow: 0 2px 4px 0 rgb(52, 5, 5);margin:2% 0">
            <div class="form-group">
                <label for="username">Username Or Email</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <small id="passwordHelp" class="form-text text-muted"><u><a href="forgot.php">Forgot Password?</a></u></small>
            </div>
        

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login </button>
                <div id=" register"> Don't have an account?
                    <u><a href="signup.php"> Register Here</a></u>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </scrip>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>