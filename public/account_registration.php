<?php

include "./operation/connect.php";
include "./operation/operation.php";



if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];
} else {
    header("location: customer_list.php");
}
if (isset($_POST['submit'])) {

    $status = "opened";
    $data = array(
        "customerID" => "'" . $_POST['customerID'] . "'",
        "accountType" => "'" . $_POST['accountType'] . "'",
        "balance" => "'" . $_POST['balance'] . "'",
        "status" => "'" . $status . "'"
    );

    insert($con, $data, 'account');
    // header('location:listing.php');
}
include "./layout/header.php";
include "./components/navigation.php";
include "./components/account.php";
include "./layout/footer.php";