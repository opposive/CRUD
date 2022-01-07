<?php 

    $con = new mysqli('localhost','root','','crud');

    if($con){
    }else{
        echo mysqli_error($con);
        exit();
    }

?>