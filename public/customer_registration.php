<?php


include "./operation/connect.php";
include "./operation/operation.php";

$select = "select state_number_en from nrcs group by state_number_en";
$query = mysqli_query($con, $select);


if (isset($_POST['submit'])) {

    $state = $_POST['state'];
    $district = $_POST['district'];
    $back = "/";
    $N = "(N)";
    $Number = $_POST['NRC'];
    $NRC = $_POST['state'] . $back . $_POST['district'] . $N . $Number;
    $query1 = selectdatabysomething($con, "customer", "NRC", $NRC);

    if ($NRC == $query1['NRC']) {

        $_SESSION['NRC_duplicate'] = "alert";
    } else {
        $status = "active";
        $state = $_POST['state'];
        $district = $_POST['district'];
        $back = "/";
        $N = "(N)";
        $Number = $_POST['NRC'];
        $NRC = $_POST['state'] . $back . $_POST['district'] . $N . $Number;

        $data = array(
            "FirstName" => "'" . $_POST['FirstName'] . "'",
            "LastName" => "'" . $_POST['LastName'] . "'",
            "Gender" => "'" . $_POST['Gender'] . "'",
            "DOB" => "'" . $_POST['DOB'] . "'",
            "NRC" => "'" . $NRC . "'",
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