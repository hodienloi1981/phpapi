<?php
$table = 'db_contact';
$sql = "CREATE TABLE IF NOT EXISTS $table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  title VARCHAR(1000) NOT NULL,
  content TEXT,
  created_at DATETIME NOT NULL,
  created_by INT NOT NULL,
  updated_at DATETIME NULL,
  updated_by INT NULL,
  status TINYINT(1) DEFAULT 1
)";
if ($conn->query($sql) === FALSE) {
  echo "Lỗi tạo bảng: " . $conn->error;
}
