<?php
session_start();
$username=$_SESSION['ADMIN_USERNAME'];
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>


<?php
$nopainting = false;
require('connection.inc.php');
require('functions.inc.php');
$msg = "";
if (isset($_POST['submit'])){
   $painting_id = get_safe_value($con,$_POST['painting_id']);
   $msql="SELECT painting_id FROM paintings WHERE painting_id='$painting_id'";
   if ($result=mysqli_query($con, $msql)){
      $rowcount=mysqli_num_rows($result);
      if ($rowcount == 0){
          $nopainting = true;
        $msg = "No painting with provided painting id";
      }
      else{
        
        $sql = "DELETE FROM paintings WHERE painting_id='$painting_id'";
        if (mysqli_query($con, $sql)) {
         header('location:deletion_successful.html');
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
          
        }
      }
   
}


?>

<!DOCTYPE html>
<html>

<head>
    <style>
    label {
        font-size: 130%;
        font-weight: bold;
        display: inline-block;
        width: 120px;
        margin-bottom: 10px;
        margin-left: 32px;
    }

    .field_error {
        text-align: center;
        color: red;
    }
    </style>


    <title>Delete Painting</title>

    <link rel="stylesheet" href="css/css_signin_signup.css">
</head>

<body>

    <form method="post" enctype="multipart/form-data" action="">
        <div class="container">
        <h1 style="margin:0;">Welcome <?php echo $username;?></h1>
        <br>
            <h2 style="margin:0; text-align:center;"><strong>Delete painting</strong></h2><br>
            <div class="container-item">
                <label>Painting Id</label>
                <input type="number" name="painting_id" placeholder="Enter a number" required />
                <br />
                <br>
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Delete Painting</button>
        </div>
    </form>
    <div class="field_error" style="background-color:white; font-size:30px"><b><?php echo $msg?></b></div>



</body>

</html>