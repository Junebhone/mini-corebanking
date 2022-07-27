<?php



include "./operation/connect.php";
include "./operation/operation.php";

$id = $_GET['id'];
$status = "closed";

//return data from account table using accountID
$select = selectdatabyid($con, "account", "accountID", $id);
$accountID = $select['accountID'];
$balance = $select['balance'];
$balance1 = $balance * -1;
$date = date("Y-m-d");
$description = "Account Closed";


$amount = 0;



//account table update when account closed
$data = array(
    "status" => "'" . $status . "'",
    "balance" => "'" . $amount . "'"
);

update($con, $data, "account", $id, "accountID");




//transaction table
$data1 = array(
    "accountID" => "'" . $accountID . "'",
    "amount" => "'" . $balance1 . "'",
    "date" => "'" . $date . "'",
    "description" => "'" . $description . "'"
);

insert($con, $data1, 'transaction');


$_SESSION['close_account'] = "alert";
header("location: account_list.php");



include "./layout/header.php";
include "./components/navigation.php";
include "./layout/footer.php";