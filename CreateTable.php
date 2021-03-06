<?php
/**
 * 创建表MyGuests
 * @authors cheney (2270292886@qq.com)
 * @date    2017-08-29 17:09:52
 * @version $Id$
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpTestDB";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
            )";

if ($conn->query($sql) === TRUE) {
	echo "Table MyGuests created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
}
