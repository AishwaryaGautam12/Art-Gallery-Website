<?php
session_start();
?>
<?php
require('connection.inc.php');
require('functions.inc.php');
$msg = "";
if (isset($_POST['submit'])){
   $username = get_safe_value($con,$_POST['username']); 
   $password = get_safe_value($con,$_POST['password']); 
   $sql="select * from admin_users where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$_SESSION['ADMIN_LOGIN']='yes';
        $_SESSION['ADMIN_USERNAME']=$username;
        header('location:welcome.php');
		
		die();
	}else{
		$msg="Please enter correct login details";	
	}
}

?>


<!DOCTYPE html>
<html>

<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css_signin_signup.css">
    <style>
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
            border-left: none;
            border-right: none;
            border-top: none;
            outline: none;
        }

        .field_error {
            text-align: center;
            color: red;
        }

        .btn {
            margin-left: 77px;
        }
    </style>
    <title>Sign In</title>
</head>

<body>
    
    <form method="post" enctype="multipart/form-data" action="">

        <div class="container">
            <h1>Login form</h1>

            <div class="container-item">
                <label>Username</label>
                <input type="text" name="username" id="username" class="username" required/>
                <br />
            </div>
            <div class="container-item">
                <label>Password</label>
                <input type="password" name="password" id="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                <br />
                <btn>
                    <button type="submit" onclick="return onSubmit()" name="submit" class="btn">Sign In</button>
    </form>
    <div id="error" class="field_error"></div>
    <div class="field_error">
        <?php echo $msg?>
    </div>

    <script>

        onSubmit(){
        msg="";
        username = document.getElementById("username").value.trim();
        password = document.getElementById("password").value.trim();
        if(username==''){
            msg="Username cannot be empty";
        }
        if(password==''){
            msg="Password cannot be empty";
        }
        var reg=/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[&$#@])(?=.{7,})/;
        if(reg.test(password)==false)
        {
            msg="Must have a length of atleast 7 including one capital letter,one digit and one special character[&,$,#,@]";
        }
        if(msg!=""){
            document.getElementById("error").innerHTML=msg;
            return false;
        }
        else if(msg==""){
            return true;
        }
        


    </script>


</body>

</html>