<?php
if (isset($_GET['name'])){
$name = $_GET['name'];
}else{
    $name = "no name";
}
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
<!-- contens -->
    <h1>Hello what can i do for you? </h1>
</body>

</html>

