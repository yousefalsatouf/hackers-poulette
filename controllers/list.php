<?php
include_once('../view/form.php');

$firstName  = isset($_POST['f-name']) ? $_POST['f-name'] : "";
$lastName   = isset($_POST['l-name']) ? $_POST['l-name'] : "";
$email      = isset($_POST['e-mail']) ? $_POST['e-mail'] : "";
$gender     = isset($_POST['gender']) ? $_POST['gender'] : "";
$country    = isset($_POST['country']) ? $_POST['country'] : "";
$subj       = isset($_POST['subject']) ? $_POST['subject'] : "";
$msg        = isset($_POST['message']) ? $_POST['message'] : "";

$data = [];

if (!empty($_POST)) {
    if (empty($firstName) || empty($lastName) || empty($email) || empty($gender) || empty($country) || empty($subj) || empty($msg)) {
        $class_alert = "alert-danger";
        $alert = "Attention";
        $show_msg = "Sorry, Missing Information";
        if (empty($firstName)) {
            $fieldFname = "<b>First name: </b>Must be Filled! ";
        }
        if (empty($lastName)) {
            $fieldLname = "<b>Last name: </b>Must be Filled! ";
        }
        if (empty($email)) {
            $fieldEmail = "<b>E-mail: </b>Must be Filled! ";
        }
        if (empty($msg)) {
            $fieldMsg = "<b>Message: </b>Must be Filled! ";
        }
        if ($country == "ch") {
            $fieldCountry = "<b>Country: </b>Must be Selected! ";
        }
        if (empty($gender)) {
            $fieldGender = "<b>Gender: </b>Must be Checked! ";
        }
        if (empty($subj)) {
            $fieldSubj = "<b>Gender: </b>Must be Checked! ";
        }
    } else {
        $class_alert = "alert-success";
        $alert = "Success";
        $show_msg = "Done, You can find It at down of the page!";
        $data = array(
            "First Name: " => $firstName,
            "Last Name: " => $lastName,
            "Email: " => $email,
            "Gender: " => $gender,
            "Country: " => $country,
            "Subject: " => $subj,
            "Message: " => $msg
        );
    }
} else { }

echo json_encode($data);
