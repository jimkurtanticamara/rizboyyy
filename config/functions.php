<?php
include "connection.php";

function retrieveAllUsers(){

$sql = "SELECT * FROM user";
$stmnt = $conn -> prepare($sql);
$stmnt -> execute();

return $stmnt -> fetchAll(PDO::FETCH_ASSOC);

}


function loginAuth($username, $password){
    include "connection.php";

    $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
    $stmnt = $conn -> prepare($sql);
    $stmnt -> execute ([
      "username" => $username,
      "passwrod" => $password

    ]);

    $conn = $stmnt -> rowCount();

    return $count;

}
?>