<?php

if(isset ($_POST['enroll']))
{
    $server="localhost";
    $username="root";
    $password="";
    $database="info";
    $connect=mysqli_connect($server,$username,$password,$database);

}

if(!$connect)
{
    die(mysqli_connect_error());
}
echo"Connected";
echo"<br>";

$enrollment=$_POST['enroll'];
echo $sql="SELECT * FROM information WHERE enrollment='$enrollment'";
$query= mysqli_query($connect,$sql);

if($query)
{
    echo"<br>";
    echo"Hii";

    $row= mysqli_fetch_array($query);
    if($row>0)
    {
        echo "<br>";
        echo"Here is your data";
        echo"<br>";
        echo"<table border='1'>";
        echo"<tr>";
        echo"<th>";
        echo"name";
        echo"</th>";
        echo"<th>";
        echo"dob";
        echo"</th>";
        echo"<th>";
        echo"enrollment";
        echo"</th>";
        echo"<th>";
        echo"field";
        echo"</th>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>";
        echo $row['name'];
        echo"</td>";
         echo"<td>";
        echo $row['dob'];
        echo"</td>";
         echo"<td>";
        echo $row['enrollment'];
        echo"</td>";
         echo"<td>";
        echo $row['field'];
        echo"</td>";
        echo"</tr>";
        echo"</table>";
    }
}

?>