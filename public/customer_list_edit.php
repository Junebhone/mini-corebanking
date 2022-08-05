<?php

include './operation/connect.php';
include './operation/operation.php';


$select = "select state_number_en from nrcs group by state_number_en";
$query1 = mysqli_query($con, $select);

$select1 = "select short_district from nrcs group by short_district";
$query2 = mysqli_query($con, $select1);


$id = $_GET['id'];

if (isset($_GET['id'])) {
    $query = selectdatabyid($con, "customer", "customerID", $id);
}



if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $data = array(
        "FirstName" => "'" . $_POST['FirstName'] . "'",
        "LastName" => "'" . $_POST['LastName'] . "'",
        "Gender" => "'" . $_POST['Gender'] . "'",
        "DOB" => "'" . $_POST['DOB'] . "'",
        "state_number_en" => "'" . $_POST['state'] .  "'",
        "long_district" => "'" . $_POST['district'] .  "'",
        "NRC" => "'" . $_POST['NRC'] . "'",
        "Type" => "'" . $_POST['Type'] . "'",
        "CompanyName" => "'" . $_POST['CompanyName'] . "'",
        "CompanyNRC" => "'" . $_POST['CompanyNRC'] . "'",
        "CompanyAddress" => "'" . $_POST['CompanyAddress'] . "'",
        "PhNumber" => "'" . $_POST['PhNumber'] . "'",
        "City" => "'" . $_POST['City'] . "'",
        "Address" => "'" . $_POST['Address'] . "'",
        "status" => "'" . $_POST['status'] . "'"
    );

    update($con, $data, "customer", $id, "customerID");
    // header("location:customer_list.php");
}

include './layout/header.php';
include './components/navigation.php';
include './components/customerEdit.php';
include './layout/footer.php';