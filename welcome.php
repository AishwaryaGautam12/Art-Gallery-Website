<?php
session_start();
$username=$_SESSION['ADMIN_USERNAME'];
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <style>
    label {
        display: inline-block;
        width: 100px;
        margin-bottom: 10px;
    }

    .container-item .btn a {
        text-decoration: none;
        color: white;
    }

    .btn {
        padding: 2% 19%;
        margin-left: 15% !important;
        margin-right: 10% !important;
        margin-bottom: 5% !important;
        margin-top: 5% !important;
        border: 2px solid black;
        border-radius: 10px;
        outline: none;
        font-family: monospace;
        font-size: 1.2rem;
        font-weight: bold;
        background-color: green;
        color: white;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(190, 235, 190);
    }

    .container-item .btn a:hover {
        color: red;
    }

    .container-item .btn a {
        font-weight: bold;
        font-family: monospace;
        font-size: 15px;
    }

    .container-item .btn a {
        /* margin-left:20%; */
        float: right;
        text-decoration: none;
    }
    </style>

    <link rel="stylesheet" href="css/css_signin_signup.css">
    <title>Welcome</title>
</head>

<body>
    <div class="container">
    <h1>Welcome <?php echo $username; ?></h1>
    <h2>What would you like to do today?</h2>
    <div class="container-item"> 
            <button type="button" class="btn"><a href="insert.php">Upload Painting</a></button>

            <button type="button" class="btn"><a href="update.php">Update Painting</a></button>
        
            <button type="button" class="btn"><a href="delete.php">Delete Painting</a></button>
        
            <button type="button" class="btn"><a href="index.html">Return to Homepage</a></button>
        </div>
    </div>
</body>
</html>