<?php
        alert("Hello World");
        $conn = new mysqli('prototypeauth.database.windows.net', 'prototype_admin', 'PwCuser2', 'prototypesql');
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        echo $email;
        $sql="INSERT INTO `auth` (`email`, `pass`) VALUES ('$email', '$pass')";
        if ($conn->query($sql) === TRUE) {
                echo "data inserted";
        }
        else
        {
                echo "failed";
        }

        $serverName = "prototypeauth.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "prototypesql", // update me
        "Uid" => "prototype_admin", // update me
        "PWD" => "PwCuser2" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "INSERT INTO auth (email, pass) VALUES (1,1) ";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);

?>