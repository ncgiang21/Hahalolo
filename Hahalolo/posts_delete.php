<?php
// Trước khi cho người dùng xâm nhập vào bên trong
// Phải kiểm tra THẺ LÀM VIỆC
session_start();
if (!isset($_SESSION['email'])) {
    header("location: login.php");
}
?>

<?php
require 'database.php';
if (isset($_REQUEST['id_status']) and $_REQUEST['id_status'] != "") {
    $id_status = $_GET['id_status'];
    $sql = "DELETE FROM status WHERE id_status='$id_status'";
    if ($conn->query($sql) === TRUE) {
        echo "Xoá thành công!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
header("Location: home.php");
?>