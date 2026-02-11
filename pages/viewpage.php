<?php
include "../config/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $getUser = getUser($user_id);
} else {
    echo "<script> window.location.href='retrivePage.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<?php
include "resources/header.php";
?>

<body>
    <h1>View and Update Page</h1>
    <label for="name">Name</label> 
    <input name="name" type="text" value="<?= $getUser[0]['name'] ?>"> 
    <label for="age">Age</label> 
    <input name="age" type="text" value="<?= $getUser[0]['age'] ?>">
    <label for="address">Address</label>
    <input name="address" type="text" value="<?= $getUser[0]['address'] ?>"> 
    <label for="username">Username</label> 
    <input name="username" type="text" value="<?= $getUser[0]['username'] ?>">
    <label for="password">Password</label> 
    <input name="password" type="text" value="<?= $getUser[0]['password'] ?>">
<button>edit</button>
</body>