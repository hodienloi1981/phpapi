<?php
$table = 'db_brand';

$sql = "INSERT INTO $table (name, slug, description, sort_order, image, created_at, created_by, updated_at, updated_by, status) VALUES
('Apple', 'apple', 'Thương hiệu Apple nổi tiếng toàn cầu', 1, 'https://example.com/img/brand-apple.jpg', NOW(), 1, NOW(), 1, 1),
('Samsung', 'samsung', 'Thương hiệu công nghệ đến từ Hàn Quốc', 2, 'https://example.com/img/brand-samsung.jpg', NOW(), 1, NOW(), 1, 1),
('Xiaomi', 'xiaomi', 'Thương hiệu giá rẻ nhiều tính năng', 3, 'https://example.com/img/brand-xiaomi.jpg', NOW(), 1, NOW(), 1, 1),
('Sony', 'sony', 'Thương hiệu Nhật Bản chuyên thiết bị nghe nhìn', 4, 'https://example.com/img/brand-sony.jpg', NOW(), 1, NOW(), 1, 1),
('LG', 'lg', 'Hãng điện tử hàng đầu Hàn Quốc', 5, 'https://example.com/img/brand-lg.jpg', NOW(), 1, NOW(), 1, 1),
('Dell', 'dell', 'Chuyên laptop, PC doanh nghiệp', 6, 'https://example.com/img/brand-dell.jpg', NOW(), 1, NOW(), 1, 1),
('HP', 'hp', 'Thương hiệu laptop phổ biến', 7, 'https://example.com/img/brand-hp.jpg', NOW(), 1, NOW(), 1, 0),
('Asus', 'asus', 'Gaming và đồ họa mạnh mẽ', 8, 'https://example.com/img/brand-asus.jpg', NOW(), 1, NOW(), 1, 1),
('Acer', 'acer', 'Phổ biến trong giới học sinh, sinh viên', 9, 'https://example.com/img/brand-acer.jpg', NOW(), 1, NOW(), 1, 1),
('Lenovo', 'lenovo', 'Lựa chọn ổn định, bền bỉ', 10, 'https://example.com/img/brand-lenovo.jpg', NOW(), 1, NOW(), 1, 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
