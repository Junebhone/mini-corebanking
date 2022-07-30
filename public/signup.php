<?php

include "./operation/connect.php";
include "./operation/operation.php";


//Submit login Function
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) && empty($_POST['password'])) {
        $username_error = FormError($_POST['username']);
        $password_error = FormError($_POST['password']);
    } else {

        $data = array(
            "name" => "'" . $_POST['username'] . "'",
            "password" => "'" . $_POST['password'] . "'"
        );


        signup($con, $data, "admin");
        // login($con, $_POST['username'], $_POST['password']);
    }
}



include "./layout/header.php";
include "./components/signup.php";
include "./layout/footer.php";