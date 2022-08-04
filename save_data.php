<?php

  $conn=mysqli_connect("localhost:3306","root","","AddNumber");


  if(!$conn)
  {
  	die("Connection Failed:" . mysqli_connect_error());

  }

  if(isset($_POST['save_data']))
  {
    $rollno = $_POST['rollno'];



  	 $sql_query = "INSERT INTO Integer_table(rollno)
  	 VALUES ('$rollno')";

  	 if (mysqli_query($conn, $sql_query))
  	 {
  		echo "New Details Entry inserted successfully !";
  	 }
  	 else
       {
  		echo "Error: " . $sql . "" . mysqli_error($conn);
  	 }
  	 mysqli_close($conn);
  }
  ?>
