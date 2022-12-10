<?php
include 'connectin.php';
if(isset($_POST['submit']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $user_id=$_POST['user_id'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $sql="INSERT INTO test(first_name,last_name,user_id,password,email,contact) VALUES('$first_name','$last_name','$user_id','$password','$email','$contact')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "data inserted successfully";
    }
    else
    {
        die(mysqli_error($con));
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>LOGING PROJECT</title>
</head>
<body>
 <form method="POST">
    First_name:<input type="text" name="first_name" placeholder="Enter your first_name"><br><br>
    Last_name:<input type="text" name="last_name" placeholder="Enter your last_name"><br><br>
    User_id:<input type="text" name="user_id" placeholder="Enter your user_id"><br><br>
    Password:<input type="password" name="password" placeholder="Enter your password"><br><br>
    Email_id:<input type="email" name="email" placeholder="Enter your email_id"><br><br>
    Mobile_number:<input type="tel" name="contact" placeholder="Enter your contact"><br><br>
    Submit:<input type="submit" name="submit">
 </form>
</body>
</html>
