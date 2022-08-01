<?php
session_start();
$fname = "";
$lname = "";
$Email = "";
$Phone = "";
$Gender = "";
$Birth = "";
$cv = "";
$letter = "";
$country = "";
$district = "";
$sector = "";
$nationalId = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'onlinejob');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form


  $fname = mysqli_real_escape_string( $db, $_POST ['firstname']);
  $lname = mysqli_real_escape_string( $db, $_POST ['lastname']);
  $Email = mysqli_real_escape_string( $db, $_POST ['email']);
  $Phone = mysqli_real_escape_string( $db, $_POST ['Phone']);
  $Gender = mysqli_real_escape_string( $db, $_POST ['Gender']);
  $Birth = mysqli_real_escape_string( $db, $_POST ['date']);
  $cv = mysqli_real_escape_string( $db, $_POST ['file']);
  $letter = mysqli_real_escape_string( $db, $_POST ['file1']);
  $country = mysqli_real_escape_string( $db, $_POST ['country']);
  $district = mysqli_real_escape_string( $db, $_POST ['text1']);
  $sector = mysqli_real_escape_string( $db, $_POST ['text2']);
  $nationalId = mysqli_real_escape_string( $db, $_POST ['text3']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($error, "Username is required"); }
  if (empty($lname)) { array_push($error, "firstname is required"); }
  if (empty($Email)) { array_push($error, "Username is required"); }
  if (empty($Phone)) { array_push($error, "firstname is required"); }
  if (empty($Gender)) { array_push($error, "Username is required"); }
  if (empty($Birth)) { array_push($error, "firstname is required"); }
  if (empty($cv)) { array_push($error, "Username is required"); }
  if (empty($letter)) { array_push($error, "firstname is required"); }
  if (empty($country)) { array_push($error, "Username is required"); }
  if (empty($sector)) { array_push($error, "firstname is required"); }
  if (empty($nationalId)) { array_push($error, "Username is required"); }
//   if (empty($lname)) { array_push($errors, "firstname is required"); }
//   if (empty($fname)) { array_push($error, "Username is required"); }
//   if (empty($lname)) { array_push($errors, "firstname is required"); }
//   if (empty($fname)) { array_push($error, "Username is required"); }
//   if (empty($lname)) { array_push($errors, "firstname is required"); }
//   if (empty($secondname)) { array_push($errors, "secondname is required"); }
//   if (empty($email)) { array_push($errors, "Email is required"); }
//   if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM reg_tbl WHERE username='$username' OR email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $Email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO applicant (app_id, fname, lname, email , phoneNo, gender, dofb, cv, letter, country, district, sector, nationalId) 
    VALUES ( '', '$fname', '$lname', '$Email', '$Phone',  '$Gender', '$Birth' , '$cv' , '$letter' , '$country', '$district', '$sector', '$nationalId' )";
    
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'];
    header('location: index.php');
  }
}

// ... 






// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM reg_tbl WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "";
      header('location:index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
