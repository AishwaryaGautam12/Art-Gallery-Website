<?php
require('connection.inc.php');
require('functions.inc.php');

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grace Mosaic|Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a843b56b38.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css_gallery.css">
</head>

<body>

<?php
session_start();

if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
    $username=$_SESSION['ADMIN_USERNAME'];
    echo '<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="./index.html">Grace Mosaic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item px-2">
                <a class="nav-link" href="./index.html"><i class="fa fa-home fa-lg"></i> Home</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="./aboutus.php" ><span class="fa fa-info fa-lg"></span> About</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./gallery.php" id="current"><i class="fa fa-newspaper-o"></i> Gallery</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./contact.php"><i class="fa fa-address-card fa-lg"></i> Contact</a>
            </li>
            <li class="nav-item dropdown" style="position:absolute; right:12%;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="insert.php" style="color:black!important;">Insert painting</a></li>
                  <li><a class="dropdown-item" href="update.php" style="color:black!important;">Update painting</a></li>
                  <li><a class="dropdown-item" href="delete.php" style="color:black!important;">Delete painting</a></li>
                </ul>
            </li>
        </ul>
        <span class="navbar-text" style="position:absolute; right:5%;">
            <a id="loginLink" href="logout.php">
                <span class="fa fa-sign-in"></span>Logout</a>
        </span>
    </div>
</nav>';
}else{
	echo '<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="./index.html">Grace Mosaic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item px-2">
                <a class="nav-link" href="./index.html"><i class="fa fa-home fa-lg"></i> Home</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="./aboutus.php" ><span class="fa fa-info fa-lg"></span> About</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./gallery.php" id="current"><i class="fa fa-newspaper-o"></i> Gallery</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./contact.php"><i class="fa fa-address-card fa-lg"></i> Contact</a>
            </li>
            <li class="nav-item dropdown" style="position:absolute; right:12%;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="insert.php" style="color:black!important;">Insert painting</a></li>
                  <li><a class="dropdown-item" href="update.php" style="color:black!important;">Update painting</a></li>
                  <li><a class="dropdown-item" href="delete.php" style="color:black!important;">Delete painting</a></li>
                </ul>
            </li>
        </ul>
        <span class="navbar-text" style="position:absolute; right:5%;">
            <a id="loginLink" href="login.php">
                <span class="fa fa-sign-in"></span> Login</a>
        </span>
    </div>
</nav>';
}
?>

    <section id="header_gallery">
        <img src="images/veg_bg.jpg" alt="Mountains">
        <h1 class="text-white">Gallery</h1>
    </section>

    <?php
      $i=1;
      $get_painting = get_painting($con);
      foreach($get_painting as $list){
        if($i%2==0){
echo '<div class="container my-5" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-66">
      <h1 class="large-font"><b>'.$list['painting_name'].'</b></h1>
    <h1 style="color:MediumSeaGreen;"><b>Artist: '.$list['artist_name'].'</b></h1>
    <p> <span style="font-size:20px">Painting Id: '.$list['painting_id'].'</span></p>
    <p><span style="font-size:36px">'.$list['category'].'</span></p>
    <p>'.$list['description'].'</p>
    <p style="color:red; font-size:22px; font-weight:bold;">&#8377;'.$list['price'].'</p>
    <a class="btn btn-outline-success" href="checkout.php" role="button">Enquire</a>
    </div>
    <div class="column-33">
        <img src="'.PRODUCT_IMAGE_SITE_PATH.$list['image'].'" width="700" height="200">
    </div>
    </div>
    </div>';
        }
        else
        {
          echo '<div class="container my-5" style="background-color:#f1f1f1">
          <div class="row">
              <div class="column-33">
                  <img src="'.PRODUCT_IMAGE_SITE_PATH.$list['image'].'" alt="App" width="700"
                      height="200">
              </div>
              <div class="column-66">
                  <h1 class="large-font"><b>'.$list['painting_name'].'</b></h1>
                  <h1 style="color:red;"><b>Artist: '.$list['artist_name'].'</b></h1>
                  <p> <span style="font-size:20px">Painting Id: '.$list['painting_id'].'</span></p>
    <p><span style="font-size:36px">'.$list['category'].'</span></p>
    <p>'.$list['description'].'</p>
    <p style="color:red; font-size:22px; font-weight:bold;">&#8377;'.$list['price'].'</p>
    <a class="btn btn-outline-success" href="checkout.php" role="button">Enquire</a>
              </div>
          </div>
      </div>';
        }
        $i++;
      }
    ?>


    <section id="banner_aboutus">
        <h1 id="heading">You imagine , We create</h1>
        <a class="btn btn-light" href="./contact.html" role="button">Contact Us today</a>
    </section>

    <footer class="footer bg-dark text-white">
        <div class="container ">
            <div class="row row-content">
                <div class="offset-1 col-4 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./aboutus.php">About</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        Kothrud, Pune<br>
                        Maharashtra, India<br>
                        <i class="fa fa-phone fa-lg"></i> : +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i> : +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i> : <a
                            href="mailto:gracemosaic@gmail.com">gracemosaic@gmail.com</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i
                                class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                                class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                                class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                                class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i
                                class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2021 Art Gallery | Grace Mosaic</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</body>

</html>