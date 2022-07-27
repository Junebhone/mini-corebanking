<?php

include './operation/connect.php';
include './operation/operation.php';

$query = selectalldata($con, "customer");


include './layout/header.php';
include './components/navigation.php';
include './components/customerList.php';
include './layout/footer.php';