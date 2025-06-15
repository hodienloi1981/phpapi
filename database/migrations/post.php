<?php
$table = 'db_post';
$sql = "CREATE TABLE IF NOT EXISTS $table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  topic_id INT NOT NULL,
  title VARCHAR(1000) NOT NULL,
  slug VARCHAR(1000) NOT NULL,
  content TEXT,
  description TEXT,
  type ENUM('post', 'page') DEFAULT 'post',
  thumbnail VARCHAR(1000),
  created_at DATETIME NOT NULL,
  created_by INT NOT NULL,
  updated_at DATETIME NULL,
  updated_by INT NULL,
  status TINYINT(1) DEFAULT 1
)";
if ($conn->query($sql) === FALSE) {
  echo "Lỗi tạo bảng: " . $conn->error;
}
