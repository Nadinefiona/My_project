

<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about FAB restaurant</title>
    <link rel="stylesheet" href="abouts.css">
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>








  <div class="header">
  </div>
  <div class="content">
      <!-- notification message -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
          <h3>
            <?php 
              echo $_SESSION['success']; 
              unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>
  
      <!-- logged in user information -->
      
  </div>






    <table border="1" style= "border-collapse: collapse; width: 100%;" >
    <tr>
        <th colspan="2">FAB RESTAURANT</th>
        <th><a href="demo.html">Home</a></th>
        <th><a href="mayChart.htm">myChart</a></th>
        <th><a href="clentResetPswd.php">Reset Passward</a></th>
        <th>  <?php  if (isset($_SESSION['username'])) : ?>
        <p> <a href="index.php?logout='1'">logout</a> </p>
      <?php endif ?> </th>   
    </tr>
    <tr>
        <td rowspan="13" style="background-color: grey;">
            <ul>
                <li><div class="sidenav">
                  <button class="dropdown-btn"> <b>Food</b> 
                 <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container">
                    <a href="#">.meals</a>
                    <a href="#">.breakfast</a>
                    <a href="#">.dissert</a>
                    
                  </li>
                <li><div class="sidenav">
                  <button class="dropdown-btn"> <b>Drinks</b>  
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container">
                    <a href="#">riquer</a>
                    <a href="#">softdrinks</a>
                    </li>
            </ul>
                <div class="sidenav">
                  <button class="dropdown-btn"> <b>Fruits</b>  
                  </button>
                </div>
            </ul>
        </td>
        <td colspan="5" class="back">

       
        <div class="class1">
        <input type="search" name="search" id="search" class="search"> 
        <button> <i class="fa-solid fa-magnifying-glass"></i></button></div>
            <h6>
            <?php  if (isset($_SESSION['username'])) : ?>

              <div class="class2">
              <p>you are welcome <strong><?php echo $_SESSION['username']; ?></strong>
        <?php endif ?> to FAB restaurent <br>
                on this site you are able to select each <br>
                and every kind of food you want <br>
            we have all kinds of meals sor you.</h6></p>
     
              </div>
       
            </td>
    </tr>
    <tr>
    <td>  <img src="images/superghetti.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Supergetthi</span><br>
        <b>Price:</b>
        <span>5$</span><br>
      

      


        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="images/superghetti.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: food</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: Supergetthi</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 5$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>



    </div>
       </td>
    <td> <img src="images/bouchette.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>brouchette</span><br>
        <b>Price:</b>
        <span>3$</span>
        <br>
      
        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="images/bouchette.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: food</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: bouchette</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 3$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>


    </div>
         </td>
        <td > <img src="images/fish.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Fish</span><br>
        <b>Price:</b>
        <span>10$</span>
        <br>
        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="images/fish.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: food</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: Fish</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 10$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" 