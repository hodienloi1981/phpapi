<?php
$table = 'db_orderdetail';
$sql = "CREATE TABLE IF NOT EXISTS $table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  order_id INT NOT NULL,
  product_id INT NOT NULL,
  qty INT DEFAULT 1,
  price FLOAT NOT NULL,
  discount FLOAT NULL,
  amount FLOAT NOT NULL
)";
if ($conn->query($sql) === FALSE) {
  echo "Lỗi tạo bảng: " . $conn->error;
}
