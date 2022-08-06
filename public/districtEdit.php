<?php



include "./operation/connect.php";
include "./operation/operation.php";

$output = "";

if (isset($_POST['state_number'])) {

    $state_number_en = $_POST['state_number'];
    $select = "select long_district from nrcs where state_number_en='$state_number_en'";
    $query1 = mysqli_query($con, $select);


    $id = $_POST['customerID'];
    // $output = "<option value=''>Select District</option>";

    $query = selectdatabyid($con, "customer", "customerID", $id);



    if (mysqli_num_rows($query1) > 0) {
        while ($short_district = mysqli_fetch_assoc($query1)) {
            $selected = "";
            if ($query['long_district'] == $short_district['long_district']) {
                $selected = "selected";
            }
            $output .= '<option value="' . $short_district['long_district'] . '"' . $selected . '>' . $short_district['long_district'] . '</option>';
        }
    }
}
echo $output;