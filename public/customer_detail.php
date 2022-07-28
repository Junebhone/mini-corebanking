<?php


include "./operation/connect.php";
include "./operation/operation.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = selectdatabyid($con, "customer", "customerID", $id);
}


include "./layout/header.php";
include "./components/navigation.php";
include "./components/customerDetail.php";
include "./layout/footer.php";