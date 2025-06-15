<?php
$table = 'db_user';
$sql = "CREATE TABLE IF NOT EXISTS $table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL ,
  phone VARCHAR(20) DEFAULT NULL,
  username VARCHAR(100) NOT NULL ,
  password VARCHAR(255) NOT NULL,
  roles ENUM('customer', 'admin') DEFAULT 'customer',
  avatar VARCHAR(255) DEFAULT NULL,
  address TEXT DEFAULT NULL,
  created_at DATETIME NOT NULL,
  created_by INT NOT NULL,
  updated_at DATETIME NULL,
  updated_by INT NULL,
  status TINYINT(1) DEFAULT 1
)";
if ($conn->query($sql) === FALSE) {
  echo "Lỗi tạo bảng: " . $conn->error;
}
