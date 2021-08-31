<?php

$conn = mysqli_connect('localhost','root','','nikolina');

if(!$conn){
   die ("not connected". mysqli_error($conn));
}
?>