<?php
// records
  $name = $_POST['name'];
  $amount =$_POST['amount'];
  $balance =$_POST['balance'];
  $total= $_POST['total'];

  // Dp connection

  $servername= 'localhost';
  $username ='root';
  $passowrd ='';
  $dbname ='nps';
  
  $conn = new mysqli("localhost","root",'',"nps");

  
  // inserting data into db
  
  if($conn-> connect_error)
  {
    
      die('connection failed :' .$conn-> $connect_error);
  }
  else{
      $sql = ("INSERT INTO contributions(name,amount,balance,total)
      VALUES ('$name','$amount','$balance','$total')");
  }  
  
//var_dump($sql); 'exit';
  // saving statements
  $sql = mysqli_query($conn, $sql);

  if($sql == true)
  {
      echo "Records saved successfully";
  }
  else{
      echo "Records saved unsuccessfully!!";
  }




?>