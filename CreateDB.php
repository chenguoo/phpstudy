<?php
/**
 * 创建数据库
 * @authors cheney (2270292886@qq.com)
 * @date    2017-08-29 17:00:46
 * @version $Id$
 */
$servername = "localhost";
$username = "root";
$password = "";

// 创建连接
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE phpTestDB";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error;
}

$conn->close();
