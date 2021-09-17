<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grace Mosaic | Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trips|Home Page</title>
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
                <a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./gallery.php"><i class="fa fa-newspaper-o"></i> Gallery</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./contact.php" id="current"><i class="fa fa-address-card fa-lg"></i> Contact</a>
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
                <a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./gallery.php"><i class="fa fa-newspaper-o"></i> Gallery</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./contact.php" id="current"><i class="fa fa-address-card fa-lg"></i> Contact</a>
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
        <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8YXJ0JTIwZ2FsbGVyeXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80"
            alt="Mountains">
        <h1>Contact Us</h1>
    </section>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb bg-dark text-white">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </div>

        <div class="row row-content justify-content-center" id="contactform">
            <div class="col-12">
                <h3>Send us your Feedback</h3>
            </div>
            <div class="col-12 col-md-9">
                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">First Name*</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                placeholder="First Name" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                placeholder="Last Name">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" id="areacode" name="areacode"
                                placeholder="Area code">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="emailid" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">

                        <div class="col-md-6 offset-md-2">
                            <strong>May we contact you?</strong>
                            <div class="form-check">
                                <input type="radio" id="yes" name="permission" value="yes">
                                <label for="yes">Yes</label><br>
                                <input type="radio" id="no" name="permission" value="no">
                                <label for="no">No</label><br>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="feedback" class="col-md-2 col-form-label">Your message*</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedback" name="feedback" rows="12" required></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md">
                <h3>Contact Info</h3>
                <address id='contact'>
                    <strong>Address:</strong>
                    Kothrud, Pune, Maharashtra<br>
                    <strong>Phone:</strong>
                    +1 242 4942 290<br>
                    <strong>Email:</strong>
                    gracemosaic@gmail.com
                </address>
            </div>
        </div>
    </div>

    <?php
    require('connection.inc.php');
    require('functions.inc.php');
if (isset($_POST['submit'])){
   $firstname = get_safe_value($con,$_POST['firstname']); 
   $lastname = get_safe_value($con,$_POST['lastname']); 
   $areacode = get_safe_value($con,$_POST['areacode']); 
   $telnum = get_safe_value($con,$_POST['telnum']);
   $emailid =  get_safe_value($con,$_POST['emailid']);
   $permission = get_safe_value($con,$_POST['permission']);
   $feedback =  get_safe_value($con,$_POST['feedback']);
   
   $sql = "INSERT INTO feedback(firstname,lastname,areacode,telnum,emailid,permission,feedback) VALUES('$firstname','$lastname','$areacode','$telnum','$emailid','$permission','$feedback')";
   $result = mysqli_query($con,$sql);
   if($result){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Your message has been submitted successfully!</strong>
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
   }
   else
   {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Message not submitted</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   }
   
}
?>

    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Kothrud,Pune+(Grace%20Mosaic)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>

    <section id="banner" class="mb-0">
        <h1 id="heading">You imagine , We create</h1>
        <a class="btn btn-light" href="#contactform" role="button">Contact Us today</a>
    </section>

    <footer class="footer bg-dark text-white">
        <div class="container">
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