<?php
//this is the index page that displays the data form db
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


echo"<h1>Our products</h1>";

$sql = "SELECT * FROM `products`";


$products = mysqli_query($connection,$sql);


while ($row = mysqli_fetch_array($products)){
    echo '<div class="card">';
    $products_id = $row['id'];
    echo "<a href='deta.php?id=$products_id'>";
    echo $row['id'];
    echo $row['name'];
    echo $row['price'];
    echo $row['color'];
    echo $row['description'];
    echo $row['condition'];
    echo "</a>";
    echo "<br>";
    echo "<a href='productsdel.php?=$products_id'>Delete</a>";
    echo '</div>';
    echo '<br>';
}

?>
