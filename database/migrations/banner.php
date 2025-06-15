<?php
$table = 'db_banner';
$sql = "CREATE TABLE IF NOT EXISTS $table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(1000) NOT NULL,
  link VARCHAR(1000) DEFAULT NULL,
  position ENUM('slideshow', 'ads') DEFAULT 'slideshow',
  description TEXT DEFAULT NULL,
  sort_order INT DEFAULT 0,
  image VARCHAR(1000) NOT NULL,
  created_at DATETIME NOT NULL,
  created_by INT NOT NULL,
  updated_at DATETIME NULL,
  updated_by INT NULL,
  status TINYINT(1) DEFAULT 1
)";
if ($conn->query($sql) === FALSE) {
  echo "Lỗi tạo bảng: " . $conn->error;
}
