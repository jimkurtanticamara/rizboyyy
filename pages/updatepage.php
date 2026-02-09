<!DOCTYPE html>
<html lang="en">

<?php 
   include "resources/header.php";
?>
<body>
    <?php 
include "resources/navigation.php";
?>
<?php
include "../../config/includes.php";

if (isset($_POST['user_id'])) {

    $name = $_POST['names'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertae = $_POST['useer_id'];


    $result = updateUSer($usertae, $name, $age, $address, $username, $password);

    if($result){
        echo "<script> window.location.href='retrievePage.php' </script";
    }else{
        echo "<script> window.location.href='../viewPage.php?user_id'".$user_id." ' </script";
    }
}else{
    echo "<script> window.location.href='retrievePage.php' </script";

}
?>

