<?php
require('connection.inc.php');
require('functions.inc.php');  
$search_painting = [];
$msg = "";
if (isset($_POST['submit'])){
   $painting_name = get_safe_value($con,$_POST['painting_name']);
   $msql="SELECT painting_name FROM paintings WHERE painting_name like '%$painting_name%'";
   if ($result=mysqli_query($con, $msql)){
      $rowcount=mysqli_num_rows($result);
      if ($rowcount == 0){
            $msg = "No painting with provided painting name";
            echo '<h1 style="text-align:center;">'.$msg.'</h1>';
      }
      else{
        $search_painting = search_painting($con,$painting_name);
       
        
    } 
    
          
    }
}



?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a843b56b38.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css_gallery.css">
<style>

.field_error{
  text-align: center;
  color: red;
}
body{
  background-image: url("https://i.pinimg.com/564x/b4/e5/e7/b4e5e7c5524e17ef86972bcf779f8748.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
}
.container{
  width:100%;
    
    border-radius:20px;
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    display:flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
    z-index:-1;
}
.conntainer h1{
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding: 5px;
    margin: 1rem ;
}
.btn-s{
  width:20%;
  padding: 1% 5%;
    margin: 1%;
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
.btn-s:hover{
    background-color: rgb(190, 235, 190);
    color:red;
}
</style>
<title>Search Painting</title>
</head>
<body>
  
<form method="post" enctype = "multipart/form-data" action="">
<div class="container">
  <h1 style="font-size:40px; font-weight: bold;">Search Painting</h1>
<label style="font-size:25px">Painting Name</label><br>
<input type="text" name="painting_name" />
<br />
<button type="submit" name="submit" class="btn-s">Search</button>
</form>

<?php
foreach($search_painting as $list){
?>
<div class="row">
    <div class="column-66">
      <h1 class="large-font"><b><?php echo $list['painting_name']?></b></h1>
      <h1 style="color:MediumSeaGreen;"><b>Artist: <?php echo $list['artist_name']?></b></h1>
      <p> <span style="font-size:20px">Painting Id: <?php echo $list['painting_id']?></span> 
      <p> <span style="font-size:20px">Category: <?php echo $list['category']?></span> 
      <p>
      </p>
      <?php echo $list['description']?>
        </p>
        <p style="color:red; font-size:22px; font-weight:bold;">&#8377;<?php echo $list['price']?></p>
      <a class="btn btn-outline-success" href="checkout.php" role="button">Enquire</a>
    </div>
    <div class="column-33">
        <img src= "<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" width="700" height="200">
        
      </div>
  </div>
  
</div>

<?php } ?>

</body>
</html>