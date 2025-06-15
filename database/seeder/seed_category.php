<?php
$table = 'db_category';

$sql = "INSERT INTO $table (name, slug, description, sort_order, parent_id, image, created_at, created_by, updated_at, updated_by, status) VALUES
('Điện thoại', 'dien-thoai', 'Danh mục sản phẩm điện thoại', 1, 0, 'https://example.com/img/cat-dt.jpg', NOW(), 1, NOW(), 1, 1),
('Laptop', 'laptop', 'Danh mục máy tính xách tay', 2, 0, 'https://example.com/img/cat-laptop.jpg', NOW(), 1, NOW(), 1, 1),
('Phụ kiện', 'phu-kien', 'Tất cả phụ kiện điện tử', 3, 0, 'https://example.com/img/cat-pk.jpg', NOW(), 1, NOW(), 1, 1),
('Ốp lưng', 'op-lung', 'Ốp lưng điện thoại các loại', 4, 3, 'https://example.com/img/cat-oplung.jpg', NOW(), 1, NOW(), 1, 1),
('Tai nghe', 'tai-nghe', 'Các loại tai nghe có dây và không dây', 5, 3, 'https://example.com/img/cat-tainghe.jpg', NOW(), 1, NOW(), 1, 1),
('Máy tính bảng', 'may-tinh-bang', 'Tablet Android, iPad', 6, 0, 'https://example.com/img/cat-tablet.jpg', NOW(), 1, NOW(), 1, 1),
('Gaming Gear', 'gaming-gear', 'Phụ kiện cho game thủ', 7, 3, 'https://example.com/img/cat-gear.jpg', NOW(), 1, NOW(), 1, 1),
('Tivi', 'tivi', 'Tivi thông minh các hãng', 8, 0, 'https://example.com/img/cat-tivi.jpg', NOW(), 1, NOW(), 1, 1),
('Thiết bị mạng', 'thiet-bi-mang', 'Router, Switch, Access Point', 9, 0, 'https://example.com/img/cat-mang.jpg', NOW(), 1, NOW(), 1, 1),
('Camera', 'camera', 'Camera giám sát, camera hành trình', 10, 0, 'https://example.com/img/cat-camera.jpg', NOW(), 1, NOW(), 1, 0);
";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
