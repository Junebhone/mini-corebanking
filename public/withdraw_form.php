<?php

include "./operation/connect.php";
include "./operation/operation.php";



if ($_GET['accountID']) {
    $accountID = $_GET['accountID'];
    $query = selectdatabyid($con, "account", "accountID", $accountID);
}


if (isset($_POST['submit'])) {
    $accountID = $_POST['accountID'];
    $amount = $_POST['amount'];

    $query = selectdatabyid($con, "account", "accountID", $accountID);
    $balance = $query['balance'];


    if ($amount > $balance) {
        $_SESSION['alert_amount'] = "alert";
    } else {
        $amount1 = $amount * -1;
        $date = date("Y-m-d");
        $description = "withdraw";

        $query1 = "Update account set balance = balance - $amount where accountID = $accountID";
        $result = mysqli_query($con, $query1);



        $data = array(
            "accountID" => "'" . $accountID . "'",
            "amount" => "'" . $amount1 . "'",
            "date" => "'" . $date . "'",
            "description" => "'" . $description . "'"
        );

        insert($con, $data, 'transaction');

        header("location: account_list.php");
    }
}

include "./components/alert.php";
include "./layout/header.php";
include "./components/navigation.php";
include "./components/withdrawForm.php";
include "./layout/footer.php";