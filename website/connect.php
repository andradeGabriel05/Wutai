<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "wutai";
    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

mysqli_query($conn, "SET NAMES utf8");    