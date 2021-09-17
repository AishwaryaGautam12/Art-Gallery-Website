<?php

function pr($arr){
    echo '<pre>';
    print_r($arr);
}

function prx($arr) { 
    echo '<pre>';
    print_r($arr);
    die();
}

function get_safe_value($con,$str){
    if($str!=''){
    return mysqli_real_escape_string($con ,$str);
}
}

function get_painting($con){
    $sql = "SELECT * FROM paintings";
    $res = mysqli_query($con,$sql);
    $data = array();
    while($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
      }
      return $data;

}

function search_painting($con, $painting_name){
    $sql = "SELECT * FROM paintings WHERE painting_name like '%$painting_name%'";
    $res = mysqli_query($con,$sql);
    $data = array();
    while($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
      }
      	
    
      return $data;

}


    


?>
