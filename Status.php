<?php
$server='localhost';
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,'easyleave');
if(!$con){
    die("Can't connect to the database".mysqli_connect_error());
}
$ids=$_GET['id'];
$showquery="select status from applications where id={$ids}";

$update="UPDATE `applications` SET `status` = 'Approved' WHERE `applications`.`Serial` = '$ids'";
$showdata=mysqli_query($con,$update);

?>
<script>alert("Leave Application Approved")</script>