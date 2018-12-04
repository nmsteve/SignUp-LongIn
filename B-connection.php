<?php
 $connection = mysqli_connect('localhost', 'root', '', 'jumia');

 if($connection)

    {
    echo "connection created";
    }
else
    {
    echo "connection failed";
    }


?>
