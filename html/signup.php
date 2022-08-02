<?php
require "connection.php";
if(isset($_POST['sub'])){
    $fname=$_POST['fname'];
  
    $email=$_POST['email'];
    $password= $_POST['password'];
    $query="INSERT INTO signup(fname,email,password)VALUES(' $fname','$email','$password')";
$result=mysqli_query($con,$query);
if($result){
   

 echo '<script>
 alter("successfully");
 </script>';
 header("location:dashboard.php");
}
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0"> 
    <meta content="width=device-width,initial-scale=1" name="viewpoint" />
    <title>signup page</title>
   
    <link
    href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css"
    rel="stylesheet"
  />
 <style>
body{
    background-color:rgb(39, 37, 37) ;
    color: white;
}
.page{
    width: 40%;
    background-color: black;
    margin-top: 40px;
    margin-left: 26rem;
    margin-bottom: 30px;
    box-shadow: .4rem .4rem .7rem .5rem rgb(123, 103, 103);

}
::placeholder{
    
    font-size: small;
    font-weight: lighter;
}


input[type=password]{
    font-size: 1.3rem;
}
input[type=email],input[type=password],input[type=text]{
    width:70%;

    padding-left: 1.2rem;
    margin: 10px 0;
    box-sizing:border-box;
    height:40px;
    margin-left: 80px;
    padding-right: 30px;
    border: none;
    border-radius: 5px;
    font-style: normal;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 400;
 }
 button{
    background-color:red;
    color: #e5e5e5;
    border-radius: 15px;
    width: 70%;
    height: 40px;
    padding: 10px;
    border: none;
    text-align: center;
    font-weight: bold;
    margin-left: 80px;
    font-size: medium;
    margin-top: 30px;
    font-style: normal;
    font-family: Arial, Helvetica, sans-serif;
    margin-bottom: 80px;
}

.page h3 {

    text-align: center;
    padding-top: 40px;
    font-style: normal;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
    font-size: 1.5rem;
    padding-bottom: 30px;
}
 </style>
</head>
<body>
    <nav class="page">
        <form class="form" id="form" method="post">
               <h3>Signup form</h3>
               <input type="text" placeholder="Last Name" id="name" name="fname">
               <input type="text" placeholder="First Name" id="name"name="lname">
               <input type="email" placeholder="Email adress" id="email" name="email">
               <input type="password" placeholder="Password " id="password" name="password">
               <input type="password" placeholder="Confirm password"  id="password1" name="password">
               <button type="submit" name="sub">Signup</button>
        </form>
    </nav>
</body>
</html>

