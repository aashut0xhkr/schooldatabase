<?php
  $severname="localhost";
  $username="root";
  $password="";
  $dbname="crud";

  $conn = mysqli_connect($severname,$username,$password,$dbname);
  if($conn){
    //echo "Connection ok";
  }
  else{
    echo "Connection Failed";
  }
?>