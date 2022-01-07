<?php 
    include './connec.php';
    if(isset($_GET['did'])){
        $id = $_GET['did'];

        $sql = "delete from usert where id = $id";
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:display.php');
        }else{
            echo mysqli_error($result);
        }

    }
?>