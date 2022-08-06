<?php


include "./operation/connect.php";
include "./operation/operation.php";

$select = "select state_number_en from nrcs group by state_number_en";
$query = mysqli_query($con, $select);


if (isset($_POST['submit'])) {

    $state = $_POST['state'];
    $IDtype = $_POST['IDtype'];
    $district = $_POST['district'];
    $NRC = $_POST['NRC'];


    $select1 = "select * from customer where state_number_en ='$state' and IDtype = '$IDtype' and long_district = '$district' and NRC = '$NRC' ";
    $query1 = mysqli_query($con, $select1);
    $result = mysqli_fetch_array($query1);
    if ($state = $result['state_number_en'] && $IDtype = $result['IDtype'] && $district = $result['long_district'] && $NRC = $result['NRC']) {
        $_SESSION['NRC_duplicate'] = "alert";
    } else {
        $status = "active";


        $data = array(
            "FirstName" => "'" . $_POST['FirstName'] . "'",
            "LastName" => "'" . $_POST['LastName'] . "'",
            "Gender" => "'" . $_POST['Gender'] . "'",
            "DOB" => "'" . $_POST['DOB'] . "'",
            "state_number_en" => "'" . $_POST['state'] .  "'",
            "IDtype" => "'" . $_POST['IDtype'] . "'",
            "long_district" => "'" . $_POST['district'] .  "'",
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
        // header("location:customer_list.php");
    }
}



include "./layout/header.php";
include "./components/navigation.php";
include "./components/customer.php";
include "./layout/footer.php";
include "./components/alert.php";