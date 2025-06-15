<?php
$table = 'db_menu';
$sql = "CREATE TABLE IF NOT EXISTS $table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(1000) NOT NULL,
  link VARCHAR(1000) DEFAULT NULL,
  position VARCHAR(100) DEFAULT NULL,
  description TEXT DEFAULT NULL,
  sort_order INT DEFAULT 0,
  parent_id INT DEFAULT 0,
  image VARCHAR(1000) DEFAULT NULL,
  table_id INT DEFAULT NULL,
  type ENUM('custom', 'category','brand','topic','page') DEFAULT 'custom',
  created_at DATETIME NOT NULL,
  created_by INT NOT NULL,
  updated_at DATETIME NULL,
  updated_by INT NULL,
  status TINYINT(1) DEFAULT 1
)";
if ($conn->query($sql) === FALSE) {
  echo "Lỗi tạo bảng: " . $conn->error;
}
