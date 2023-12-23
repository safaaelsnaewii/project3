<?php
$email=$_REQUEST['email'];
$PASS=$_REQUEST['password'];


if(isset($_POST['btntest'])) 
{
$host="localhost";
$user="root";
$db="english";

$conn=mysqli_connect($host,$user,$db);

$insert="insert into students values('$email','$PASS')";
mysqli_query($conn,$insert);

if($conn)
{
echo("<h1 style= "color: black">your Registration is done</h1> ");
} else{

echo("<h1 style=" color:red">your Registration is failed</h1> ");

}



}





?>