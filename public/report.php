<?php



include "./operation/connect.php";
include "./operation/operation.php";



if (isset($_POST['submit'])) {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $accountType = $_POST['accountType'];
    $accountID = $_POST['accountID'];

    $select = "select * from transaction t inner join account a on t.accountID = a.accountID where t.date ='$startDate' and t.date = '$endDate' and (t.date between '$startDate' and '$endDate') and a.accountType = '$accountType' or t.accountID = '$accountID' ";
    $query = mysqli_query($con, $select);
} else {
    $query = selecttwotable($con, "transaction", "account", "accountID", "accountID");
}

include "./layout/header.php";
include "./components/navigation.php";
include "./components/report.php";
include "./layout/footer.php";