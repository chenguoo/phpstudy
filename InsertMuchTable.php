<?php
/**
 * 插入多条数据
 * @authors cheney (2270292886@qq.com)
 * @date    2017-08-29 17:18:39
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

	// 开始事务
	$conn->beginTransaction();
	// SQL 语句

	$conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')");

	$conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com')");

	$conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@example.com')");

	// commit the transaction
	$conn->commit();

	echo "New records created successfully";
} catch (PDOException $e) {

	// roll back the transaction if something failed
	$conn->rollback();
	echo $sql . "" . $e->getMessage();
}

$conn = null;

?>
