<?php
include 'config.php';

$id = $_REQUEST['id'];

echo $sql = "DELETE FROM subscribe WHERE id=$id";
$query = mysqli_query($conn, $sql);
if ($query) {
    header("location:subscriber-page.php?msg=raptor");
}