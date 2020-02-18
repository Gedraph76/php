<?php
//this is the code to delete data from the database
//connect to database
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'demo1';

$connection = mysqli_connect($hostname,$username,$password,$databasename);

if($connection == false){
    echo "Connection not successful<br>";
    die("ERROR:".mysqli_connect_error());
}

if (isset($_GET{'id'})){
$id = $_GET{'id'};
$sql = "DELETE FROM `products` WHERE id='$id'";


if (mysqli_query($connection, $sql)){header("location:xindex.php");}


}
?>
