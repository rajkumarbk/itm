<?php
$name=$_POST['name'];
$Roll=$_POST['contact'];

echo "Name is".$name."Roll number is".$Roll;

include 'db.php';

$sql= "INSERT INTO names(name, Roll)VALUES('$name','$Roll')";
$result= mysqli_query($conn, $sql);
if($result){
    header('Location:index.php');
}
?>