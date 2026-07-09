<?php
$conn = new mysqli("localhost", "root", "", "67_44");

if ($conn->connect_error) {
    die("เชื่อมต่อไม่สำเร็จ");
}

$sql = "SELECT * FROM student LIMIT 30";
// หรือ
// $sql = "SELECT * FROM student LIMIT 10 OFFSET 15";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "รหัสนักศึกษา : " . $row["student_id"] . "<br>";
    echo "ชื่อ : " . $row["student_name"] . "<br>";
    echo "สาขา : " . $row["student_major"] . "<br><hr>";
}

$conn->close();
?>