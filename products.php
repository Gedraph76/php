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


//complete php form
$name = $price = $color = $description = $condition = "";
$name_err = $price_err = $color_err = $description_err = $condition_err ="";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //3.2 clean data
    $name = clean($_POST['name']);
    $price = clean($_POST['price']);
    $color = clean($_POST['color']);
    $description = clean($_POST['description']);
    $condition = clean($_POST['condition']);
    //3.3 check if data is empty
    if(empty($name)){
        $name_err = "Please fill in the product name";
    }if(empty($price)){
        $price_err = "Please fill in the product price";
    }if(empty($color)){
        $color_err = "Please fill in the product color";
    }if(empty($description)){
        $description_err= "Please fill in the product's description";
    }if(empty($condition)){
        $condition_err = "Please fill in the condition of the product";
    }else{
        //inserting data into the table
        $sql = "INSERT INTO `products`(`id`, `name`, `price`, `color`, `description`, `condition`) VALUES (NULL ,'$name','$price','$color','$description','$condition')";
        if (mysqli_query($connection,$sql)){
            echo "Data inserted successfully";
        }else{
            echo "Data not inserted".mysqli_error($connection);
        }
    }
}
function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS  online-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--  downloaded bootstrap-->
    <link rel="stylesheet" href="C:\Xammp\htdocs\MIT2020\Lesson1\bootstrap\css\bootstrap.min.css">
    <!--  custom css-->
    <link rel="stylesheet" href="C:\Xammp\htdocs\MIT2020\Lesson1\css">
    <!--  downloaded fonts-->
    <link rel="stylesheet" href="C:\Xammp\htdocs\MIT2020\Lesson1\font-awesome-4.7.0\css\font-awesome.min.css">
    <title>Products</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="index.html">Liquor 254</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="fa fa-home">Home</i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html"><i class="fa fa-edit">About</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.html"><i class="fa fa-user-plus">Sign up</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.html"><i class="fa fa-sign-in">Login</i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-inr">Products</i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Beer</a>
                        <a class="dropdown-item" href="#">Wine</a>
                        <a class="dropdown-item" href="#">Classics</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" tabindex="-1" aria-disabled="true"><i class="fa fa-phone">Contact us</i></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container" id="sap">
        <div class="row">
            <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                    <fieldset class="ape">
                        <h3>Products</h3>
                        <label for="">Name</label><br>
                        <input type="text" name="name"><br>
                        <span class="error" style="color: rebeccapurple"><?php echo $name_err ?></span><br>

                        <label for="">Price</label><br>
                        <input type="text" name="price"><br>
                        <span class="error" style="color: rebeccapurple"><?php echo$price_err ?></span><br>

                        <label for="">Color</label><br>
                        <input type="text" name="color"><br>
                        <span class="error" style="color: rebeccapurple"><?php echo $color_err ?></span><br>

                        <label for="">Description</label><br>
                        <input type="text" name="description"><br>
                        <span class="error" style="color: rebeccapurple"><?php echo $description_err ?></span><br>

                        Condition:
                        <input type="radio" name="condition" value="good">Good
                        <input type="radio" name="condition" value="fair">Fair
                        <input type="radio" name="condition" value="bad">Bad<br>
                        <span class="error" style="color: rebeccapurple"><?php echo $condition_err ?></span><br>
                        <button type="submit">Submit</button>
                    </fieldset>
                </form>
            </div>
            <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
        </div>
    </div>


    <footer>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ex.</p>
        <p>Contact us on <a href="">0708084863</a></p>
        <p>or</p>
        <p>Email us <a href="">freandsfor@gmail.com</a></p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

