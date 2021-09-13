<?php

if (!empty($_POST["name"]) && !empty($_POST["pass"]) ) {

    echo json_encode('name: ' . ($_POST["name"]) . ';' . ' password: '.($_POST["pass"] . ';'));

} else {
    echo json_encode("NO");
}