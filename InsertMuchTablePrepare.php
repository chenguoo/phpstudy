  <?php
/**
 * 预处理批量插入多条数据
 * @authors cheney (2270292886@qq.com)
 * @date    2017-08-29 17:25:58
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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// 输出每行数据
	while ($row = $result->fetch_assoc()) {
		echo "<br> id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"];
	}
} else {
	echo "0 results";
}
$conn->close();
?>

