<?php
echo "Welcome";
echo"<br>";

if(isset ($_POST['name']))
{
    echo "Hiii";
    $server="localhost";
    $username="root";
    $password="";
    $database="info";
    $connect=mysqli_connect($server,$username,$password,$database);
}
echo"<br>";
if(!$connect)
{
    die(mysqli_connect_error());
}
echo"Connected";
echo"<br>";

$name=$_POST['name'];
$dob=$_POST['dob'];
$enrollment=$_POST['enrollment'];
$field=$_POST['field'];

echo $sql="INSERT INTO information (name,dob,enrollment,field) VALUES('$name','$dob','$enrollment','$field')";

$query=mysqli_query($connect,$sql);
if($query)
{
    echo "data inserted sucessfully";
}
else{
    echo "Error";
}

?>