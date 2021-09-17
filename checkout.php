<?php
require('connection.inc.php');
require('functions.inc.php');
if (isset($_POST['submit'])){
   $painting_id = get_safe_value($con,$_POST['painting_id']);
   $first_name = get_safe_value($con,$_POST['first_name']); 
   $address = get_safe_value($con,$_POST['address']); 
   $phone = get_safe_value($con,$_POST['phone']); 
   
   $price =  0;
   
   $sql = "SELECT price from paintings WHERE painting_id=$painting_id";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_assoc($result);
   $price = $row["price"];
   $sql2 = "INSERT into orders (painting_id,first_name,address,phone,price) values('$painting_id','$first_name','$address','$phone','$price') ";
   $result2 = mysqli_query($con,$sql2);
   header('location:checkout_successful.html');
}


?>

<!DOCTYPE html>
<html>
<head>
<style>
label{
  font-size: 110%;
  font-weight: bold;
  display:inline-block;width:120px;margin-bottom:10px;}
</style>


<title>Grace Mosaic</title>
<link rel="stylesheet" href="css/css_signin_signup.css">
</head>
<body>
<h1 id="error" style="height:40px; text-align:center; color:red; opacity: 1;"></h1>
<form method="post" enctype = "multipart/form-data" action="" onsubmit="return submitForm()">
<div class="container">
<h1>Please enter your details</h1>
<div class="container-item">
<label>Painting Id</label>
<input type="number" name="painting_id" id="painting_id" />
<br />
<br>
<label>First Name</label>
<input type="text" name="first_name" id="first_name"/>
<br />
<br>
<label>Address</label>
<input type="text" name="address" id="address"/>
<br />
<br>
<label>Phone</label>
<input type="text" name="phone" id="phone"/>
<br />
<br>
</div>
<button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
</div>
</form>

<script>
    function submitForm(){
        msg='';
        painting_id = document.getElementById("painting_id").value.trim();
        first_name = document.getElementById("first_name").value.trim();
        address= document.getElementById("address").value.trim();
        phone = document.getElementById("phone").value.trim();
        if(painting_id=='' || first_name=='' || address=='' || phone=='')
        {
            msg="Please enter all the details";
        }
        else if(isNaN(phone) || phone.length<10 || phone.length>10){
            msg="Phone number should be of 10 digits";
        }

        if(msg.length>0){
            document.getElementById("error").style.backgroundColor="white";
            document.getElementById("error").innerHTML=msg;
            return false;
        }
        else if(msg.length==0){
            document.getElementById("error").style.backgroundColor="none";
            document.getElementById("error").innerHTML="";
            return true;
        }
    }
</script>

</body>
</html>