<?php
require('connection.inc.php');
if (isset($_POST['submit'])){
    $username = get_safe_value($con,$_POST['username']); 
    $password = get_safe_value($con,$_POST['password']); 
    $sql = "SELECT * FROM admin_users where username = '$username' and password = '$password'";
    $res = mysqli_query($con,$sql);

?>