<?php
$insert = false;

if(isset($_POST['name'])){

$server = 'localhost';
$username = 'root';
$password ='';

$con = mysqli_connect($server,$username,$password);

if(!$con){
               die("connection to the database failed due to".
               mysqli_connect_error());
}
//echo "success Connecting to the DataBase";
$name  = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];


$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";


//execution of query
if($con->query($sql)== true){
               $insert = true;
}else{
               echo "Error: $sql <br> $con->error";
}
//close the database connection
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Welcome to vacation form</title>
               <link rel="stylesheet" href="style.css">
               

               <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Isometra&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
               
</head>
<body>
               <img src="collage image.jpg" alt="Dy patil" class="bg">
               <div class="container">
                              <h3>
                                             Welcome to { Delhi,Kashmir } Vacation Trip form
                              </h3>
                              <h5>Enter your detais to confirm your registration Booking and submit form</h5>
                              <?php
                              if ($insert == true) {
                                             echo '<p class="SubmitMsg">*Thank for Submiting your form we will see you in trip...*</p>';
                              }
                              
                              ?>
                              

                              <form action="Index.php" method="POST">
                                             <input type="text" name="name" id="name" placeholder="Enter your name">
                                             <input type="text" name="age" id="age" placeholder="Enter your Age">
                                             <input type="text" name="gender" id="gender" placeholder="Enter your Gender">

                                             <input type="email" name="email" id="email" placeholder="Enter your email">
                                             <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

 <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your other Information here "></textarea>

 <button  class="btn">submit</button>


                              </form>

</div>

               <script src="script.js"></script>
<!-- 
 -->



</body>
</html>