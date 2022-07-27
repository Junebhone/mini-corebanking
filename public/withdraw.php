<?php


include "./operation/connect.php";
include "./operation/operation.php";



$select = "SELECT * from account INNER JOIN customer on account.customerID= customer.customerID where account.status = 'opened' ";
$query = mysqli_query($con, $select);




if (isset($_POST['submit'])) {

    $search = $_POST['search'];
    $query = search($con, "account", "customer", "customerID", "customerID", $search);
}



include "./layout/header.php";
include "./components/navigation.php";
include "./components/withdraw.php";
include "./layout/footer.php";