<?php

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

//grab id:use $_GET[]
if (isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
}
$sql = "SELECT `id`, `name`, `price`, `color`, `description`, `condition` FROM `products` WHERE id='$id'";
$user = mysqli_query($connection, $sql);
//create associative array to split data into column titles and actual values:use mysqli_fetch_assoc
$row = mysqli_fetch_assoc($user);
echo "<div class='card'>";
echo $row['name']."<br>";
echo $row['price']."<br>";
echo $row['color']."<br>";
echo $row['description']."<br>";
echo $row['condition']."<br>";


echo "</div>";
?>
