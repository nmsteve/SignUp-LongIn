<?php
if(isset($_POST['signup']))
{
    $firstname =$_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email =   $_POST['email'];
    $password =md5($_POST['passwords']);

  //testdata echo " data $firstname,$lastname,$email,$password ";
   
    include 'B-connection.php';

    $emailQuery="SELECT email FROM users WHERE email==$email";
    $VerifyEmail=$connection->query($emailQuery);
    
    if ($VerifyEmail)
    {
        echo "The email aready exist";
    }
    else
    {
        $customerdata ="INSERT INTO 
             users (id,  firstname,   lastname,   email,  passwords)
    VALUES         (NULL,'$firstname','$lastname','$email','$password')";
    
    if ($connection->query($customerdata) === TRUE) {


        echo "
        <h5>Welcome $firstname Please Log In</h5>
        <br><br>
        <a href=D-login.php>Log In</a>";

    }

    else 
    {
        echo "<h5>Error: " . $query . "</h5>" . $connection->error;
    }

    }

    
  

}
else
{
    echo" post not set";
}


?>