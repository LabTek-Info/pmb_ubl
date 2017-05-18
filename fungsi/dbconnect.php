<?php

//	// koneksi yang lama
//	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
//	// but I strongly suggest you to use PDO or MySQLi.
//
//	define('DBHOST', 'localhost');
//	define('DBUSER', 'root');
//	define('DBPASS', '');
//	define('DBNAME', 'db_pmb');
//
//	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
//	$dbcon = mysql_select_db(DBNAME);
//	if ( !$conn ) {
//		die("Connection failed : " . mysql_error());
//	}
//
//	if ( !$dbcon ) {
//		die("Database Connection failed : " . mysql_error());
//	}
//	koneksi mysqli
$con = mysqli_connect("localhost","root","","db_pmb");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
