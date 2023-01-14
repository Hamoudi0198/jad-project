<?php 
  require_once 'donorDatabase.php';
  function dispaly_data(){
    global $conn;
    $query = "select * from user";
    $result = mysqli_query($conn,$query);
    return $result;
  }
?>