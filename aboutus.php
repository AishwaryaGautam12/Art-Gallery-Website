<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grace Mosaic|About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a843b56b38.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navigation menu -->

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
                <a class="nav-link" href="#" id="current"><span class="fa fa-info fa-lg"></span> About</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./gallery.php"><i class="fa fa-newspaper-o"></i> Gallery</a>
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
                <a class="nav-link" href="#" id="current"><span class="fa fa-info fa-lg"></span> About</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./gallery.php"><i class="fa fa-newspaper-o"></i> Gallery</a>
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
    
   

    <section id="header">
        <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8YXJ0JTIwZ2FsbGVyeXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Mountains">
        <h1>About Us</h1>
    </section>

    <div class="container">
        <div class="row breadcrumb bg-dark" style="padding-top:7px; padding-left:10px; border-radius:10px;">
            <ol class="col-12 breadcrumb bg-dark">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </div>
        <div class="row row-content">
            <div class="col-12 col-sm-6 align-self-center">
                <h3>Our Mission</h3>
                <p class="text-justify">The mission of the Grace Mosaic Art Gallery is to encourage appreciation and understanding of art and its role in society through direct engagement with original works of art. The Art Gallery acquires, preserves, interprets, exhibits, and otherwise makes accessible works of art for the benefit of a variety of audiences, in support of the interdisciplinary educational goals and for the benefit of the community at large.</p>
            </div>
            <div class="col-12 col-sm align-self-center">
                <img class="img-fluid" src="images/art_collage.png" alt="mission">
            </div>
        </div>
        <div class="row row-content">
            <div class="col-12 col-sm align-self-center">
                <img class="img-fluid" src="https://www.holidify.com/images/cmsuploads/compressed/800px-Artists_Circle_-_Painting_Exhibition_-_Academy_of_Fine_Arts_-_Kolkata_2013-02-08_4570_20171202113117.JPG" alt="mission">
            </div>
            <div class="col-12 col-sm-6 align-self-center">
                <h3>Our Story</h3>
                <p class="text-justify">The modern gallery, as a secular space for public engagement and instruction through the presentation of art, is tightly bound to several institutions that arose simultaneously in 18th and 19th-century nationalism fused with colonial expansion; democracy; and the Enlightenment.The influence of the art gallery model, as a tool of colonialism but also as a site for local adaptation and self-definition in places other than the West, are two sides of an important coin that is just beginning to receive attention from art historians.</p>
            </div> 
        </div>
        <div class="row row-content">
            <h1 class="col-12">Meet Our Artists</h1>
            <div class="team col-12 col-sm-4 align-self-center">
                <img src="images/team1.webp" class="img-fluid" alt="">
                <p class="text-justify">James Lewis is a lettering artist who’s worked with some of the biggest brands on the planet, including RedBull and Samsung.</p>
                <i class="fa fa-twitter fa-lg"></i>
                <i class="fa fa-facebook fa-lg"></i>
                <i class="fa fa-instagram fa-lg"></i>
            </div>
            <div class="team col-12 col-sm-4 align-self-center">
                <img src="images/team2.webp" class="img-fluid" alt="">
                <p class="text-justify">Shantell Martin is a British visual artist best known for her unique drawing style that she showcases on her homepage.</p>
                <i class="fa fa-twitter fa-lg"></i>
                <i class="fa fa-facebook fa-lg"></i>
                <i class="fa fa-instagram fa-lg"></i>
            </div>
            <div class="team col-12 col-sm-4 align-self-center">
                <img src="images/team3.webp" class="img-fluid" alt="">
                <p class="text-justify">Katie O’Sullivan is professional painter who specializes in horse and animal paintings.</p>
                <i class="fa fa-twitter fa-lg"></i>
                <i class="fa fa-facebook fa-lg"></i>
                <i class="fa fa-instagram fa-lg"></i>
            </div>
        </div>
    </div>

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
                        <i class="fa fa-envelope fa-lg"></i> : <a href="mailto:gracemosaic@gmail.com">gracemosaic@gmail.com</a>
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