<?php

if(isset($_POST['username'])) {
    echo "Username: " . $_POST['username'] . "<br>";
    if($_POST['username'] === "james") {
        echo "Bond, James Bond";
    } else {
        echo "Bonjour " . $_POST['username'];
    }
}
