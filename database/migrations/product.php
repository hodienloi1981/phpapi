<?php
$table = 'db_product';
$sql = "CREATE TABLE IF NOT EXISTS $table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  category_id INT NOT NULL,
  brand_id INT NOT NULL,
  name VARCHAR(1000) NOT NULL,
  slug VARCHAR(1000) NOT NULL ,
  detail TEXT,
  description TEXT,
  price_buy FLOAT NOT NULL,
  price_sale FLOAT NULL,
  qty INT DEFAULT 0,
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
