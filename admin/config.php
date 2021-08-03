<?php
    $config = mysqli_connect("localhost", "root", "", "chiky");
    if(!$config) {
        die('Failed connecting to MySQLi : '.mysqli_connect_error());
    }
?>