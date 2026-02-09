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
    <label for="name">Name</label> <br>
    <input name="name" type="text" value="<?= $getUser[0]['name'] ?>"> <br>
    <label for="age">Age</label> <br>
    <input name="age" type="text" value="<?= $getUser[0]['age'] ?>"><br>
    <label for="address">Address</label> <br>
    <input name="address" type="text" value="<?= $getUser[0]['address'] ?>"> <br>
    <label for="username">Username</label> <br>
    <input name="username" type="text" value="<?= $getUser[0]['username'] ?>"><br>
    <label for="password">Password</label> <br>
    <input name="password" type="text" value="<?= $getUser[0]['password'] ?>">
<button>edit</button>
</body>