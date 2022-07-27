<?php



include './operation/connect.php';
include './operation/operation.php';

$query = selectalldata($con, "account");

include './components/alert.php';
include './layout/header.php';
include './components/navigation.php';
include './components/accountList.php';
include './layout/footer.php';