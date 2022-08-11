<?php

include "./operation/connect.php";
include "./operation/operation.php";

if (isset($_POST['submit'])) {
    $to = $_POST['accountIDto'];
    $from = $_POST['accountIDfrom'];
    $amount = $_POST['amount'];


    $queryto = selectdatabyid($con, "account", "accountID", $to);
    $Balanceto = $queryto['balance'];

    $queryfrom = selectdatabyid($con, "account", "accountID", $from);
    $BalanceFrom = $queryfrom['balance'];

    if ($BalanceFrom < $amount) {
        $_SESSION['amount'] = "alert";
    } else {
        $BalanceUpdateto = $Balanceto + $amount;
        $dataTo = array(
            "balance" => "'" . $BalanceUpdateto . "'"
        );


        update($con, $dataTo, "account", $to, "accountID");

        $BalanceUpdatefrom = $BalanceFrom - $amount;
        $dataFrom = array(
            "balance" => "'" . $BalanceUpdatefrom . "'"
        );
        update($con, $dataFrom, "account", $from, "accountID");


        $date = date("Y-m-d");
        $description = "Account Transfer";
        $data = array(
            "accountID" => "'" . $to . "'",
            "amount" => "'" . $amount . "'",
            "date" => "'" . $date . "'",
            "description" => "'" . $description . "'"
        );

        insert($con, $data, 'transaction');


        $amount1 = $amount * -1;
        $data1 = array(
            "accountID" => "'" . $to . "'",
            "amount" => "'" . $amount1 . "'",
            "date" => "'" . $date . "'",
            "description" => "'" . $description . "'"
        );

        insert($con, $data1, 'transaction');
    }
}
include "./components/alert.php";
include "./layout/header.php";
include "./components/navigation.php";
include "./components/transfer.php";
include "./layout/footer.php";