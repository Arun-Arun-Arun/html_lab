<?php
$conn=mysqli_connect('localhost','root','','tbl_student');
if(!$conn){
    die('Connection Error'.mysqli_connect_error());
}
else{
    echo "connection Successfully Done By Mani";
}
$conn->close();
?>
