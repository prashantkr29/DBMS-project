<?php
// Connect php to mysql Database
$host='localhost';
$username='root';
$password='';
$conn=mysqli_connect($host,$username,$password,"jobportal");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
/*
Deselect this after connection
else{
echo "Connected Sucessfully";
}
*/
?>