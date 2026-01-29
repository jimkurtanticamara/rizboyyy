<?php
include "../config/includes.php";
$list = retrieveAllUser();

echo json_encode($list);
?>

<!DOCTYPE html>
<html lang="en">

<?php 
   include "resources/header.php";
?>
<body>
    <?php 
include "resources/navigation.php";
?>
<h1>This retrieve page</h1>
<u1>
<?php 
foreach ($list as $item) {
 ?>
 <td> <?=$item ?> </td>
 <?php
}
?>
</u1>


<table>

<tr> 

     <th>name</th>
     <th>age</th>
     <th>address</th>
     <th>username</th>
     <th>action</th>

</tr>
<?php
foreach ($list as $item) {
 ?>

 <tr>
    <td><?= $item["names"] ?></td>
    <td><?= $item["age"] ?></td>
    <td><?= $item["address"] ?></td>
    <td><?= $item["username"] ?></td>
    <td><button>view</td>
 </tr>
 <?php
}

?>
</body>
</html>