<?php

$servername_mysql = "localhost";
$username_mysql = "username";
$password_mysql = "password";
$database_mysql = "myDB";

$servername_sqlsrv = "localhost";
$username_sqlsrv = "username";
$password_sqlsrv = "password";
$database_sqlsrv = "myDB";

//handles mysql connection
try {
    $conn_mysql = new PDO("mysql:host=$servername_mysql;dbname=$database_mysql", $username_mysql, $password_mysql);
    // set the PDO error mode to exception
    $conn_mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to MySql Database";
} catch (PDOException $e) {
    echo "Connection failed to MySql Database: " . $e->getMessage();
}

//handles   SQL Server connection
try {
    $conn_sqlsrv = new PDO("sqlsrv:Server=$servername_sqlsrv;Database=myDB", $username_sqlsrv, $password_sqlsrv);
    // set the PDO error mode to exception
    $conn_sqlsrv->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to SQL Server";
} catch (PDOException $e) {
    echo "Connection failed to SQL Server: " . $e->getMessage();
}


//end connection 
$conn_mysql = null;
$conn_sqlsrv = null;




//odbc for faster connection


//use any of these or check exact MSSQL ODBC drivername in "ODBC Data Source Administrator"
// $mssqldriver = '{SQL Server}'; 
// $mssqldriver = '{SQL Server Native Client 11.0}';
// $mssqldriver = '{ODBC Driver 11 for SQL Server}';

// $hostname='127.0.0.1';
// $dbname='test';
// $username='user';
// $password='pw';
// $dbDB = new PDO("odbc:Driver=$mssqldriver;Server=$hostname;Database=$dbname", $username, $password);