<?php
include '../database.php';
$eid=$_REQUEST['eid'];
mysqli_query($conn,"delete from `products` where `id`='$eid'");
echo "<script>top.window.location.href='dashboard.php';</script>";
?>