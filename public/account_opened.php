<?php

include "./operation/connect.php";
include "./operation/operation.php";



$id = $_GET['id'];
$status = "opened";

$data = array(
    "status" => "'" . $status . "'",
);

update($con, $data, "account", $id, "accountID");
$_SESSION['open_account'] = "alert";
header("location: account_list.php");



include "./layout/header.php";
include "./components/navigation.php";
include "./layout/footer.php";