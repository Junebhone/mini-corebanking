<?php

include "./operation/connect.php";
include "./operation/operation.php";



if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];
    $result = selectdatabyid($con, "customer", "customerID", $customer_id);
    if ($result['status'] == 'blocked') {
        $_SESSION['status_blocked'] = "alert";
        header("location: customer_list.php");
    }
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


    $date = date("Y-m-d");
    $description = "Account Opening";
    $accountID = mysqli_insert_id($con);
    $amount = $_POST['balance'];


    $data = array(
        "accountID" => "'" . $accountID . "'",
        "amount" => "'" . $amount . "'",
        "date" => "'" . $date . "'",
        "description" => "'" . $description . "'"
    );

    insert($con, $data, 'transaction');
    header('location: account_list.php');
}


include "./layout/header.php";
include "./components/navigation.php";
include "./components/account.php";
include "./layout/footer.php";