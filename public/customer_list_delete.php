<?php



include "./operation/connect.php";
include "./operation/operation.php";

$id = $_GET['id'];
deletedata($con, "customer", $id);
header("Location: customer_list.php");

include "./layout/header.php";
include "./components/navigation.php";
include "./layout/footer.php";