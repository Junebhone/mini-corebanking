<?php

include "./operation/connect.php";
include "./operation/operation.php";

$output = "";

if (isset($_POST['state_number'])) {

    $state_number_en = $_POST['state_number'];
    $select = "select short_district from nrcs where state_number_en='$state_number_en'";
    $query1 = mysqli_query($con, $select);

    // $output = "<option value=''>Select District</option>";


    if (mysqli_num_rows($query1) > 0) {
        while ($short_district = mysqli_fetch_assoc($query1)) {

            $output .= '<option value="' . $short_district['short_district'] . '">' . $short_district['short_district'] . '</option>';
        }
    }
}
echo $output;   