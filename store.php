<?php 

    $f = $_GET['firstname'];
    $l = $_GET['lastname'];

    $users = json_decode(file_get_contents("data.json"), true);

    $newUser = [
        "id" => sizeof($users) + 1,
        "firstname" => $f,
        "lastname" => $l
    ];

    $users[] = $newUser;

    file_put_contents("data.json", json_encode($users));

    header("Location: read.php");
?>