<?php


include "./operation/connect.php";
include "./operation/operation.php";

if (isset($_POST['submit'])) {

    $NRC = $_POST['NRC'];
    $query = selectdatabysomething($con, "customer", "NRC", $NRC);

    if ($NRC == $query['NRC']) {
        $_SESSION['NRC_duplicate'] = "alert";
    } else {

        $status = "active";

        $data = array(
            "FirstName" => "'" . $_POST['FirstName'] . "'",
            "LastName" => "'" . $_POST['LastName'] . "'",
            "Gender" => "'" . $_POST['Gender'] . "'",
            "DOB" => "'" . $_POST['DOB'] . "'",
            "NRC" => "'" . $_POST['NRC'] . "'",
            "Type" => "'" . $_POST['Type'] . "'",
            "CompanyName" => "'" . $_POST['CompanyName'] . "'",
            "CompanyNRC" => "'" . $_POST['CompanyNRC'] . "'",
            "CompanyAddress" => "'" . $_POST['CompanyAddress'] . "'",
            "PhNumber" => "'" . $_POST['PhNumber'] . "'",
            "City" => "'" . $_POST['City'] . "'",
            "Address" => "'" . $_POST['Address'] . "'",
            "status" => "'" . $status . "'"
        );

        insert($con, $data, 'customer');
        // header('location:listing.php');
    }
}


include "./components/alert.php";
include "./layout/header.php";
include "./components/navigation.php";
include "./components/customer.php";
include "./layout/footer.php";