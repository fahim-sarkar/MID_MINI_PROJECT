<?php
    
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'MID_MINI_PROJECT'); 

    if($connection)
    {
        //echo "connection established";
    }
    else{
        die("connection failed because ".mysqli_connect_error());
    }

?>