

<?php
//php $_POST  is a php super global variable which is used to collect form data after submiting an html form with the method ="post"
//$_POST is also widely used to pass variables
//receives form data using POST  request $_post[] superglobal
//receive data
//declare variables to store sent data
$name = "";
$email = "";


//check the request method: GET or POST :use $_SERVER
if($_SERVER['REQUEST_METHOD']== 'POST') {
    //If method is post grab data using $_POST supergolobal
    $name = $_POST['jina'];
    $email = $_POST['arafa'];
    $error = true;
    if (empty($name)) {
        $error =false;
        echo "<p>please fill out your name</p>";
    }
    if (empty($email)) {
        $error =false;
        echo "<p style='color: red'>please fill out your email</p>";
    }else{
        $name= safisha($name);
        $email= safisha($email);
    }
    //print data
    if ($error) {
        echo "<p>Your name is $name and your email is $email</p><br>";
    }
}

//vaidating/cleaning data
//1.To remove unwanted space use:trim()
//2.to remove backslashes use stripslashes()
//<!--create a function to clean data-->

function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}




?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <h1>Fill form...</h1>
    <input type="text"name="jina" placeholder="enter name..."><br>
    <input type="email"name="arafa" placeholder="enter email..."><br>
    <button type="submit">send</button>
    <!--name :is the key for a value entered in the form:
    this will result to an associative array of this format
    method: is the key value entered in the form
    action: location that data will be sent to the server-->
    <?php
    $_POST = array("jina"=>"john", "arafa"=>"john@gmail.com");
    ?>
</form>


<!--$_GET:Used to collect data from a form just like $_POST-->
<!--collect data sent via URL-->
<?php
//grabbing data via $_GET
$the_name = $_GET['name'];
$the_age = $_GET['age'];
$the_country = $_GET['country'];
echo "Your details: Name : $the_name, Age : $the_age, Country: $the_country<br>"
?>
<a href="lesson9.php?name=Sam&age=43&country=Kenya">Send details</a>

















































































