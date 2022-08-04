<?php


include "./operation/connect.php";
include "./operation/operation.php";

$today = date("Y-m-d");


$select = "select * from transaction where date = '$today'";
$query = mysqli_query($con, $select);






include "./layout/header.php";
include "./components/navigation.php";
include "./components/transaction.php";
include "./layout/footer.php";