<?php


include "./operation/connect.php";
include "./operation/operation.php";


$query = selectalldata($con, "transaction");


include "./layout/header.php";
include "./components/navigation.php";
include "./components/transaction.php";
include "./layout/footer.php";