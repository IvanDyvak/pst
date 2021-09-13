<?php

if (!empty($_POST["email"])) {

    echo json_encode('email: '.($_POST["email"] . ';'));

} else {
    echo json_encode("NO");
}