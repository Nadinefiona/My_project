
<?php 
require ("connection.php");
if(isset($_POST['sub'])){
$fname = $_REQUEST['firstname'];
$lname = $_REQUEST['lastname'];
$Email = $_REQUEST['email'];
$Phone = $_REQUEST['Phone'];
// $Gender = $_REQUEST['sex'];
$Birth = $_REQUEST['date'];
$cv = $_REQUEST['file'];
$letter = $_REQUEST['file1'];
$country = $_REQUEST['country'];
$district = $_REQUEST['text1'];
$sector = $_REQUEST['text2'];
$nationalId = $_REQUEST['text3'];

$sql = "INSERT INTO applicant (app_id, fname, lname, email , phoneNo, dofb, cv, letter, country, district, sector, nationalId) 
VALUES ( '', '$fname', '$lname', '$Email', '$Phone', '$Birth' , '$cv' , '$letter' , '$country', '$district', '$sector', '$nationalId' )";



$sql = mysqli_query($con, $sql);

// $user_check_query = "SELECT * FROM applicant WHERE email='$Email' LIMIT 1";
// $result = mysqli_query($db, $user_check_query);
// $user = mysqli_fetch_assoc($result);

//   if ($user['email'] === $Email) {
//     echo "email alredy exist";
//   }




if($sql){

  echo "BYAGIYE";
}
else{
  echo "URAMWAYE" .mysqli_error($con);
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Applicationform page</title>
        <link rel="stylesheet" href="application1.css">
        <style>
body{
    background-color:rgb(14, 13, 13);
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1rem;
}
h1{
    padding-bottom: 4rem;
    padding-left: 2.5rem;
}
.form{
    background-color:rgb(53, 48, 48);
    padding: 1rem 4rem;
    margin: 2rem 25rem;
    box-shadow: .6rem .4rem .6rem .6rem black;
}
input[type=text],[type=email],[type=password],[type=country]{
    padding: .6rem .6rem ;
    margin-bottom: 1rem;
    margin-top: .5rem;
    border: none;
    width:23rem
}
input[type=file],[type=radio],[type=date]{
    padding: .6rem .6rem ;
    margin-bottom: 1rem;
    margin-top: .5rem;
    border: none;
    /* width:23rem */
}
input[type=radio]{
    padding: .6rem .6rem ;
    margin-bottom: 2rem;
    margin-top: 1rem;
    border: none;
    /* width:23rem */
}
input[type=file]{
    padding: .6rem .6rem ;
    margin-bottom: 1rem;
    margin-top: .2rem;
    border: none;
    font-size: 1.2rem;
    /* width:23rem */
}
.submit{
    background-color: rgb(10, 10, 233); 
    border-radius: 3rem;
    border: none;
    padding: .8rem 1.8rem .8rem 1.8rem;
    color: white;
    font-size: 1.1rem;
    font-weight: 3rem;
    margin-top: 1rem;
}
        </style>
    </head>
    <body>
        <div class="form">
        <h1>Application Form</h1>
        <form method="POST" action="">
        <label for="">firstname:</label><br>
         <input type="text" name="firstname" id="" required><br>
            <label for="">LastName:</label><br>
            <input type="text" name="lastname" id="" required><br>
            <label for="">Email Address:</label><br>
            <input type="email" name="email" id="" required><br>
            <label for="">Phone number:</label><br>
            <input type="text" name="Phone" id="" required><br>
             <label for="">Gender:</label> <br>
            <input type="radio" id="" name="sex" required>male
            <input type="radio"  id="" name="sex" required> female <br>
            <label for="">Date of Birth:</label><br>
            <input type="date" name="date" id="" required><br>
            <label for="">CV:</label><br>
            <input type="file" name="file" id="" required><br>
            <label for="">Application letter:</label><br>
            <input type="file" name="file1" id="" required><br>
            <label for="">country:</label><br>
            <input type="country" name="country" required><br>
            <label for="">district:</label><br>
            <input type="text" name="text1" id="" required><br>
            <label for="">sector:</label><br>
            <input type="text" name="text2" id="" required><br>
            <label for="">National ID:</label><br>
            <input type="text" name="text3" id="" required><br>
            <input type="submit" name= "sub" value = "submit" class="submit">
           
        </form>
        </div>

        
    </body>
</html>