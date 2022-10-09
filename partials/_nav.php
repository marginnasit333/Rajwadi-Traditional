<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark" style=" background-color: rgb(88, 0, 0);">
  <a class="navbar-brand" href="/loginsystem/login.php"><img src="logo.png" alt="Rajwadi" style="height: 8vh;
  margin: 0 5%;
  border: 2px solid white;
  border-radius: 50px;
  box-shadow: 0 4px 8px 0 black;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      ';

      if(!$loggedin){
      echo '<li class="nav-item active" style="margin:0 20px;  font-weight: 600; ">
      <a class="nav-link" href="/loginsystem/home.php">Home</a>
    </li>
      <li class="nav-item active" style="margin:0 20px;  font-weight: 600; ">
        <a class="nav-link" href="/loginsystem/login.php">Login</a>
      </li>
      <li class="nav-item active" style="margin:0 20px;font-weight: 600;">
        <a class="nav-link" href="/loginsystem/signup.php">Signup</a>
      </li>';
      }
       
      
    echo '</ul>
  </div>
</nav>';
?>