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
$msg="";
require('connection.inc.php');
require('functions.inc.php');
if (isset($_POST['submit'])){
   $painting_id = get_safe_value($con,$_POST['painting_id']);
   $painting_name = get_safe_value($con,$_POST['painting_name']); 
   $artist_name = get_safe_value($con,$_POST['artist_name']); 
   $category = get_safe_value($con,$_POST['category']); 
   $description = get_safe_value($con,$_POST['description']);
   $price =  get_safe_value($con,$_POST['price']);
   $image = $_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'],'C:\xampp\htdocs\add_painting\media\product/'.$image);

   $msql="SELECT painting_id FROM paintings WHERE painting_id='$painting_id'";
if ($result=mysqli_query($con, $msql)){
   $rowcount=mysqli_num_rows($result);
   $rowcount;
   if ($rowcount == 0){
     $msg = "No painting with provided painting id";
   }
   else{
     $msg = "n";
     $sql = "UPDATE paintings SET painting_name='$painting_name',artist_name='$artist_name',category='$category',description='$description',price='$price',image='$image' WHERE painting_id='$painting_id'";
     if (mysqli_query($con, $sql)) {
      header('location:updation_successful.html');
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
        font-size: 105%;
        font-weight: bold;
        display: inline-block;
        width: 120px;
        margin-bottom: 10px;
    }

    .field_error {
        text-align: center;
        color: red;
    }
    </style>


    <title>Update Painting</title>

    <link rel="stylesheet" href="css/css_signin_signup.css">

</head>

<body>
    <?php
    if($msg!=""){
        echo '<div class="field_error" style="background-color:white; font-size:30px"><b>'.$msg.'</b></div>';
    }
    ?>
    <h1 id="error" style="height:40px; text-align:center; color:red; opacity: 1;"></h1>
    <form method="post" enctype="multipart/form-data" action="" onsubmit="return submitForm()">

        <div class="container">
            <div class="container-item" style="margin-top:0;">
            <h1 style="margin:0; position:relative; top:25px;">Welcome <?php echo $username;?></h1>
            <h2 style="margin:0; text-align:center; position:relative; top:18px;"><strong>Update painting</strong></h2><br>
                <label style="position:relative; top:20px;">Painting Id</label>
                <input type="number" style="position:relative; top:20px;" name="painting_id" id="painting_id" required/>
                <br>
                <br>
                <label style="position:relative; top:10px;">Painting Name</label>
                <input type="text" style="position:relative; top:10px;" name="painting_name" id="painting_name"/>
                <br>
                <br>
                <label>Artist Name</label>
                <input type="text" name="artist_name" id="artist_name"/>
                <br>
                <br>
                <label>Category</label>
                <input type="text" name="category" id="category"/>
                <br>
                <br>
                <label>Description</label>
                <input type="text" name="description" id="description"/>
                <br>
                <br>
                <label>Price</label>
                <input type="text" name="price" id="price"/>
                <br>
                <br>
                <label>Image</label>
                <input type="file" name="image" required/>
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-flat" style="position:relative; bottom:20px;">Update Painting</button>
    </form>
    </div>

    <script>
    function submitForm() {
        msg = '';
        painting_name = document.getElementById("painting_name").value.trim();
        artist_name = document.getElementById("artist_name").value.trim();
        category = document.getElementById("category").value.trim();
        description = document.getElementById("description").value.trim();
        price = document.getElementById("price").value.trim();
        if (painting_name == '' || artist_name == '' || category == '' || description == '' || price == '') {
            msg = "Please enter all the details";
        }
        if (isNaN(price)) {
            msg = "Price should be a number";
        }

        if (msg.length > 0) {
            document.getElementById("error").style.backgroundColor = "white";
            document.getElementById("error").innerHTML = msg;
            return false;
        } else if (msg.length == 0) {
            document.getElementById("error").style.backgroundColor = "none";
            document.getElementById("error").innerHTML = "";
            return true;
        }
    }
    </script>

</body>

</html>