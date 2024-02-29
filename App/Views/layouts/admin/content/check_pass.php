<?php
$correctPassword = "123"; 
if (isset($_POST['oldPassword'])) {
    $enteredPassword = $_POST['oldPassword'];
    if ($enteredPassword === $correctPassword) {
        echo "success";
    } else {
        echo "fail";
    }
}
