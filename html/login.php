<?php
session_start();
if(isset($_POST['sub'])){
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $password= $_POST['password'];
    if(fname !="" && email !=""  && password !=""){
    $query="SELECT * FROM signup WHERE fname='$fname',email='$email' AND password='$password'";
$result=mysqli_query($con,$query);
$arr=array();

if(mysql_fetch_array($result) != $arr){
    $_SESSION['fname']=$_POST['fname'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
    header("location: dashboard.php");
}}
else{
    echo "<script>
    if(alert('wrong password/email')){
        ".header("Refresh:0.1;url=login.php")."
    }
    </script>";
}
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>login form</title>
        <style>
            body{
    background-color: rgb(46, 37, 37);
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.2rem;
}
h1{
    color: white ; 
    font-style: normal; 
    padding-bottom: 4rem; 
    padding-top: 4rem;
}
.nav{
    text-align: center; 
    box-sizing: border-box; 
    background-color: black; 
    width: 30%; 
    margin-left: 28rem; 
    border-radius: 20px;
    box-shadow: .4rem .4rem .7rem .5rem rgb(123, 103, 103);
}
form{
    padding-bottom: 4rem; 
    color:white
}
input{
    padding: .7rem .5rem;
    margin-bottom: 2.2rem;
    border: none;
}
button{
    background-color: red;
    border-radius: 30px; 
    color: white; 
    padding: .8rem 2rem;
    margin-top: .9rem;
    font-weight: bolder;
    font-size: 1rem;
    margin-right: 10rem;
}
button a{
    text-decoration: none;
    color: white;
}
.line{
    background-color: white;
    height: .1rem;
    width: 85%;
    margin-left: 2rem;
}
.link{
    /* text-decoration: none; */
    color: white;
    margin-top: 1rem;
}
.lnk{
    text-align:left ;
    padding: 2.5rem;
}
.ln1{
    padding-bottom: 1rem;
}
        </style>
    </head>
    <body>
    <nav class="nav">
        <h1>Login Form</h1>
        <form>
        <label for="">First Name:</label>    
        <input type="text" name="Name" id="" placeholder="Enter first name" name="fname"/></br>
        <label for="">Last Name:</label>    
        <input type="text" name="Name" id="" placeholder="Enter second name"/></br>
        <label for="">Email adress:</label>
        <input type="email" name="" id="" placeholder=" Enter Email Address" name="email"/></br>
        <label for="">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter Password" name="sub"></br>
        <button><a href="dashboard.php">Login</a></button>
        </form>
        <div class="line"></div>
        <div class="lnk">
            <div class="ln1"> <a href="forgot.php" class="link">I forgot password</a></div>
            <div class="ln2"><a href="signup.php" class="link">I don't have an account</a></div> 
        </div>
    </nav>
    </body>
</html>