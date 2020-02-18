<?php
require 'header.php';
require 'config.php';


//complete php form
//algorith
//1.create variables that will store received data
$username = $first_name = $last_name = $email = $password1 = $password2 = $gender = '';
//2.create variables that will store error message
$username_err = $first_name_err = $last_name_err = $email_err = $password1_err = $password2_err = $gender_err = '';
//3.process incoming data
    //3.1 check the request method
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //3.2 clean data
    $username = safisha($_POST['username']);
    $first_name = safisha($_POST['first_name']);
    $last_name = safisha($_POST['last_name']);
    $email = safisha($_POST['email']);
    $password1 = safisha($_POST['pass1']);
    $password2 = safisha($_POST['pass2']);
    $gender = safisha($_POST['gender']);
    //3.3 check if data is empty
if(empty($username)){
    $username_err = "Please fill in your username";
}if(empty($first_name)){
        $first_name_err = "Please fill in your firstname";
}if(empty($last_name)){
    $last_name_err = "Please fill in your lastname";
}if(empty($email)){
    $email_err = "Please fill in your email";
}if(empty($password1)){
    $password1_err = "Please fill in your password";
}if(empty($password2)){
    $password2_err = "Please fill in your confirm password";
    }if(empty($gender)){
        $gender_err = "Please fill in your gender";
    }
}if ($password1 != $password2){
    $password2_err = "password do not match";
}else{
    $password1 = md5($password1);
    //inserting data into the table
$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL ,'$username','$first_name','$last_name','$email','$password1','$gender')";
if (mysqli_query($connection,$sql)){
    echo "Data inserted succesfully";
}else{
    echo "Data not inserted".mysqli_error($connection);
}
}
?>
<table>
    <tr>

    <td> <?php echo $username .'<br>';?></td>
    <td> <?php echo $first_name .'<br>';?></td>
<td> <?php echo $last_name .'<br>';?></td>
<td> <?php echo $email .'<br>';?></td>
<td> <?php echo $password1 .'<br>';?></td>
<td> <?php echo $password2 .'<br>';?></td>
<td> <?php echo $gender .'<br>';?></td>
    </tr>
</table>
<?php
//4.display the data: SOON store the data in a database
function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}


?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" METHOD="post" enctype="multipart/form-data">
    <fieldset>
        <h3>Register here...</h3>
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <span class="error" style="color: goldenrod"><?php echo $username_err ?></span><br>

        <label for="">First name</label><br>
        <input type="text" name="first_name"><br>
        <span class="error" style="color: goldenrod"><?php echo $first_name_err ?></span><br>

        <label for="">Second name</label><br>
        <input type="text" name="last_name"><br>
        <span class="error" style="color: goldenrod"><?php echo $last_name_err ?></span><br>

        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <span class="error" style="color: goldenrod"><?php echo $email_err ?></span><br>

        <label for="">Password</label><br>
        <input type="password" name="pass1"><br>
        <span class="error" style="color: goldenrod"><?php echo $password1_err ?></span><br>

        <label for="">Confirm Password</label><br>
        <input type="password" name="pass2"><br>
        <span class="error" style="color: goldenrod"><?php echo $password2_err ?></span><br>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other<br>
        <span class="error" style="color: goldenrod"><?php echo $gender_err ?></span><br>
        <button type="submit">sign up</button>
    </fieldset>
</form>
<?php
require 'footer.php';
?>