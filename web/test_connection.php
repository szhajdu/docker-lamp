<?php

$username = 'root';
$password = 'password';

try
{
	$connection = new PDO('mysql:host=mysql;port=3306;dbname=test', $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo 'Connected successfully';
}
catch (PDOException $e)
{
	echo 'Connection failed: ' . $e->getMessage();
}