<?php
if (isset($_POST['fullname']) && isset($_POST['email']))
{
  $name= $_POST["fullname"];
  $email=$_POST["email"];
  echo 'Welcame to Our Company ABC '.$name.'. We will send you the detail about our company via the email '. $email.' you provided.';
}
?>

<html>
    <head>
        <title>Git Test Project</title>
    </head>
    <boby>
     <form action="hello.php" method= "post">
         <br><br>
     Full Name:<input type="text" name="fullname" ><br><br>
     Email:<input type="text" name="email"><br><br>
       <input type="submit">
     </form>
    </boby>
</html>

