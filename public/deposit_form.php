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
    $date = date("Y-m-d");
    $description = "deposit";

    $query = "Update account set balance = balance + $amount where accountID = $accountID";
    $result = mysqli_query($con, $query);



    $data = array(
        "accountID" => "'" . $accountID . "'",
        "amount" => "'" . $amount . "'",
        "date" => "'" . $date . "'",
        "description" => "'" . $description . "'"
    );

    insert($con, $data, 'transaction');



    header("location: account_list.php");
}

include "./layout/header.php";
include "./components/navigation.php";
include "./components/depositForm.php";
include "./layout/footer.php";