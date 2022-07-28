<?php


alert("alert-open", $_SESSION['open_account']);
alert("alert-close", $_SESSION['close_account']);
alert("alert-NRC", $_SESSION['NRC_duplicate']);
alert("alert-amount", $_SESSION['alert_amount']);
alert("status-blocked", $_SESSION['status_blocked']);


//re-initialize or empty the session
$_SESSION['open_account'] = "";
$_SESSION['close_account'] = "";
$_SESSION['NRC_duplicate'] = "";
$_SESSION['alert_amount'] = "";
$_SESSION['status_blocked'] = "";