
<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:battlecatsserver.database.windows.net,1433; Database = BattlecatsIncDB", "BattlecatsIncAdmin", "WeRBC2020");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "BattlecatsIncAdmin", "pwd" => "WeRBC2020", "Database" => "BattlecatsIncDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:battlecatsserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

$sql = "SELECT * FROM CPU;";
$result = sqlsrv_query($conn,$sql);

?>