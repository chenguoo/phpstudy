<?php
/**
 * 插入单条数据
 * @authors cheney (2270292886@qq.com)
 * @date    2017-08-29 17:14:47
 * @version $Id$
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpTestDB";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
	// use exec() because no results are returned
	$conn->exec($sql);
	echo "New record created successfully";
} catch (PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
}
