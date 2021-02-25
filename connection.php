<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:coaway.database.windows.net,1433; Database = coaway_mobile", "coaway", "Covid19project");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "coaway", "pwd" => "Covid19project", "Database" => "coaway_mobile", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:coaway.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>