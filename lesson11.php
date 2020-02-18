<?php
//In development we often need to store data collected from users of our systems
//MySQL is the data base system used for both big and small businesses and it uses the SQL(Structured Querry Language) to interact with data
//a DB is ade up of related tables

//Before using the db u have to connect it by providing it with the following info
//1. hostname
//2. username
//3.password
//4.database name
//
//PHP has helper functions that will make database interaction is
//>CONNECTING TO THE DATABASE
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'demo1';

//To connect to a database use the php function called mysqli_connect()
//my sqli function returns a boolean datatype




$connection = mysqli_connect($hostname, $username ,$password,$databasename);

if($connection == false){
    echo "Connection not successful<br>";
    die("ERROR:".mysqli_connect_error());
}


//inserting data into the table
$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL ,'daddyjingjong','daddy','jingjong','jingjong@gmail.com','pass1234','male')";
if (mysqli_query($connection,$sql)){
    echo "Data inserted succesfully";
}else{
    echo "Data not inserted".mysqli_error($connection);
}

//create a database
//$sql = "CREATE DATABASE demo1";//request/query to the db system
//make the request/execute: mysqli_query:return boolean
//if (mysqli_query($connection, $sql)){
//    echo "Database created successfully<br>";
//}else{
//    echo "ERROR: could not execute $sql".mysqli_error($connection);
//}





































?>