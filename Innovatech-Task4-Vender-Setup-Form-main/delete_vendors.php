<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM `vendors` WHERE id= $id ";


mysqli_query($conn,$sql);

header('location:index.php');






?>