<?php
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password= md5($_POST['password']);
    

     include 'B-connection.php';

    $LogInQuery ="SELECT email,
                          passwords
               FROM users 
               WHERE email= '{$email}' AND passwords = '{$password}' ";

    if($LogInDetail=$connection->query($LogInQuery))
    {
        echo "<br>access to db successful!";
        $row = $LogInDetail->fetch_assoc();
        $logInEmail=$row['email'];
        $logInPassword =$row['passwords'];
            
                
            if($logInEmail==$email && $logInPassword==$password )
            {echo "<br>your  are now loged in";}
            else{ echo "<br>chech your login details"; }
            
    }
    else
     {echo ",br>ccess to db failed";}              
}
else
{
 echo "post not set";
}

?>