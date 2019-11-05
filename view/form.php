<?php

include_once('../helpers/countries.php');
include_once('../controllers/list.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>

    <?php
    if (!empty($email_gone)) {
        echo "<div class=\"alert-success\" role=\"alert\"><h3 class='missingfield'> <b>Alert:</b> " . $email_gone . "!</h3></div>";
    }
    if (!empty($email_isnot_gone)) {
        echo "<div class=\"alert-danger\" role=\"alert\"><h3 class='missingfield'> <b>Alert:</b> " . $email_not_gone . "!</h3></div>";
    }
    ?>
    <div class="container">
        <div class="col-lg-12 title">
            <h1 class="text-info col-lg-10">Fill Up The Form Contact, Please!</h1>
            <img src="../assets/img/hackers-poulette-logo.png" alt="here is a logo" class="col-lg-2">
        </div>

        <div class="alert <?php echo $class_alert; ?>" role="alert">
            <?php
            if (!empty($show_msg)) {
                echo "<h6 class='red missingfield'> <b>$alert:</b> " . $show_msg . "!</h6>";
            }
            ?>
        </div>
        <form action="<?php !empty($show_msg) ?  "" : "index.php"; ?>" method="POST">
            <div class="form-group col-lg-5 text-secondary">
                <label for="formGroupExampleInput" class="font-weight-bold">First Name: </label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="f-name" name="f-name" placeholder="First Name">
                <span>
                    <?php
                    if (!empty($fieldFname)) {
                        echo "<p class='text-danger'>" . $fieldFname . "</p>";
                    }
                    ?>
                </span>
            </div>
            <div class="form-group col-lg-5 text-secondary">
                <label for="formGroupExampleInput2" class="font-weight-bold">Last Name: </label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="l-name" name="l-name" placeholder="Last Name">
                <span>
                    <?php
                    if (!empty($fieldLname)) {
                        echo "<p class='text-danger'>" . $fieldLname . "</p>";
                    }
                    ?>
                </span>
            </div>
            <div class="form-group col-lg-10 text-secondary">
                <label for="formGroupExampleInput2" class="font-weight-bold">E-mail: </label>
                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" id="e-mail" name="e-mail" placeholder="E-mail">
                <span>
                    <?php
                    if (!empty($fieldEmail)) {
                        echo "<p class='text-danger'>" . $fieldEmail . "</p>";
                    }
                    ?>
                </span>
            </div>
            <div class="col-lg-10 form-group col-lg-10 text-secondary">
                <label class="font-weight-bold">Gender: </label><br />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="man">
                    <label class="form-check-label" for="inlineRadio1">Man</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="womman">
                    <label class="form-check-label" for="inlineRadio2">Womman</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="other">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
                <span>
                    <?php
                    if (!empty($fieldGender)) {
                        echo "<p class='text-danger'>" . $fieldGender . "</p>";
                    }
                    ?>
                </span>
            </div>
            <div class="form-group col-lg-10 text-secondary">
                <label for="" class="font-weight-bold">Select Your Country:</label>
                <select class="form-control" name="country">
                    <option value="ch">===Choices===</option>
                    <?php

                    foreach ($countries as $key => $country) {
                        ?>
                        <option value="<?php echo $key; ?>"><?php echo $country; ?></option>
                    <?php
                    }
                    ?>

                </select>
                <span>
                    <?php
                    if (!empty($fieldCountry)) {
                        echo "<p class='text-danger'>" . $fieldCountry . "</p>";
                    }
                    ?>
                </span>
            </div>
            <div class="form-group col-lg-10 text-secondary">
                <label class="font-weight-bold">Programming Languages: </label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="subject[]" value="pyton">
                    <label class="form-check-label" for="materialUncheckedDisabled2">Python</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="subject[]" value="php">
                    <label class="form-check-label" for="materialCheckedDisabled2">PHP</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="subject[]" value="nodejs">
                    <label class="form-check-label" for="materialCheckedDisabled2">Nodejs</label>
                </div>
                <span>
                    <?php
                    if (!empty($fieldSubj)) {
                        echo "<p class='text-danger'>" . $fieldSubj . "</p>";
                    }
                    ?>
                </span>
            </div>
            <div class="form-group col-lg-10 text-secondary shadow-textarea">
                <label for="formGroupExampleInput" class="font-weight-bold">Message: </label>
                <textarea class="form-control z-depth-1 border-top-0 border-right-0 border-left-0" id="message" name="message" rows="3" placeholder="Write something here..."></textarea>
                <span>
                    <?php
                    if (!empty($fieldMsg)) {
                        echo "<p class='text-danger'>" . $fieldMsg . "</p>";
                    }
                    ?>
                </span>
            </div>
            <div class="form-group col-lg-10 btn shadow-textarea">
                <input type="submit" class="btn btn-primary" id="send" value="Send !">
            </div>
        </form>
        <div class="form-group col-lg-10 shadow-textarea">
            <a href="index.php"><button class="bg-success success btn" disabled>See Information</button></a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>