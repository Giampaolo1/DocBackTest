
<?php
    header('Content-Type: application/json');

    // DB Params
     $server = 'localhost';
     $username = 'root';
     $password = 'root';
     $dbname = 'organizational_chart';

    // DB Connect

    $conn = new mysqli($server, $username, $password, $dbname);
    if ($conn -> connect_errno) {
      echo json_encode(-1);
    return;
    }
