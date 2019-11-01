<?php

include_once('../view/form.php');


$firstName  = isset($_POST['f-name']) ? $_POST['f-name'] : "";
$lastName   = isset($_POST['l-name']) ? $_POST['l-name'] : "";
$email      = isset($_POST['e-mail']) ? $_POST['e-mail'] : "";
$gender     = isset($_POST['gender']) ? $_POST['gender'] : "";
$country    = isset($_POST['country']) ? $_POST['country'] : "";
$subj       = isset($_POST['subject']) ? $_POST['subject'] : "";
$msg        = isset($_POST['message']) ? $_POST['message'] : "";

if (!empty($_POST)) {
    if (empty($firstName) || empty($lastName) || empty($email) || empty($gender) || empty($country) || empty($subj) || empty($msg)) {
        $class_alert = "alert-danger";
        $show_msg = "Sorry, Missing Information";
    } else {
        $class_alert = "alert-success";
        $show_msg = "Done, send Information with success";
    }
} else { }


//$post_delivery = isset($_POST["delivery"]) ? $_POST["delivery"] : "";
