<?php
// Tamoor crud
//  sname (student name )
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

//  here i make  connection form the data base 
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
// use a query for INSERT INTO Query is used to save the data 
// Table name is student 
// Table colume name is sname,saddress,sclass,sphone

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
// if the query is run Sucessfully then the data is  save in the data base in the Student table 
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
// when the data is save it is rediret to the Home page (index.php page )
header("Location: http://localhost/crud/index.php");
// to close the connection we use the close connection 
mysqli_close($conn);

?>
