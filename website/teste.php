<?php
session_start();
extract($_POST);

$name = $_SESSION['name']; 

if(isset($name)) {
    echo $name;
} else {
    echo "Nao existe";
}