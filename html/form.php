
<?php 
include('server.php') 
?>
<!DOCTYPE html>
<html>
<head>
  <title>FAB registration form</title>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 
  <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="application1.css"> -->
</head>
<body style="background-image: url('image2.jpg');">
    <div class="wrapper">
    <div class="header">
    <h4>Register</h4>
  </div>


<form method="post" action="form.php">
    <?php include('error.php'); ?>
      <div class="input-group">
      <label>Firstname</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" name="firstname" placeholder="Enter your firstname here" value="<?php echo $fname; ?>">
    </div>
      <div class="input-group">
      <label>Lastname</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" name="lastname" placeholder="Enter your secondname here" value="<?php echo $lname; ?>">
    </div>  <div class="input-group">
      <label>Email Address:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="email" name="email" placeholder="Enter your Usenname here" value="<?php echo $Email; ?>">
    </div>
   
    
    <label>phone Number:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="tel" name="Phone" placeholder="Enter your Usenname here" value="<?php echo $Phone; ?>">
    </div>


    <label>Gender</label>
    <input type="radio" name= "radio">male <br>
    <input type="radio" name= "radio">female <br>
    </div>
    

   

    <label>date_of-birth:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="calender" name="date" placeholder="Enter your Usenname here" value="<?php echo $Gender; ?>">
    </div>
    <label>cv:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="file" name="file" placeholder="Enter your Usenname here" value="<?php echo $Birth; ?>">
    </div>
    <label>letter:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="file" name="file1" placeholder="Enter your Usenname here" value="<?php echo $cv; ?>">
    </div>
    <label>country:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" name="country" placeholder="Enter your Usenname here" value="<?php echo $letter; ?>">
    </div>
    <label>district:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="ftext" name="text1" placeholder="Enter your Usenname here" value="<?php echo $district; ?>">
    </div>
    <label>sector:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" name="text2" placeholder="Enter your Usenname here" value="<?php echo $sector; ?>">
    </div>
    <label>national-id:</label>
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" name="text3" placeholder="Enter your Usenname here" value="<?php echo $nationalId; ?>">
    </div>


    <div class="button">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
    </div>
  
  </form>
</body>
</html>
