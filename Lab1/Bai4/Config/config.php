
<?
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "mysql";
$dbName     = "php2";

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    echo "lỗi";
} else {
    echo 'kết nối database thành công';
};
?>