<?php
$table = 'db_menu';

$sql = "INSERT INTO $table (name, link, position, description, sort_order, parent_id, image, table_id, type, created_at, created_by, updated_at, updated_by, status) VALUES
('Trang chủ', '/', 'mainmenu', 'Liên kết về trang chủ', 1, 0, NULL, NULL, 'custom', NOW(), 1, NOW(), 1, 1),
('Sản phẩm', '/san-pham', 'mainmenu', 'Danh mục sản phẩm chính', 2, 0, NULL, NULL, 'category', NOW(), 1, NOW(), 1, 1),
('Điện thoại', '/san-pham/dien-thoai', 'mainmenu', 'Điện thoại các loại', 3, 2, NULL, 1, 'category', NOW(), 1, NOW(), 1, 1),
('Laptop', '/san-pham/laptop', 'mainmenu', 'Laptop học tập và văn phòng', 4, 2, NULL, 2, 'category', NOW(), 1, NOW(), 1, 1),
('Thương hiệu Apple', '/thuong-hieu/apple', 'mainmenu', 'Hãng Apple', 5, 0, NULL, 1, 'brand', NOW(), 1, NOW(), 1, 1),
('Tin tức', '/tin-tuc', 'mainmenu', 'Trang tin tức mới nhất', 6, 0, NULL, 1, 'topic', NOW(), 1, NOW(), 1, 1),
('Giới thiệu', '/gioi-thieu', 'footermenu', 'Trang giới thiệu công ty', 1, 0, NULL, 1, 'page', NOW(), 1, NOW(), 1, 1),
('Liên hệ', '/lien-he', 'footermenu', 'Thông tin liên hệ', 2, 0, NULL, 1, 'page', NOW(), 1, NOW(), 1, 1),
('Chính sách bảo mật', '/bao-mat', 'footermenu', 'Thông tin chính sách bảo mật', 3, 0, NULL, NULL, 'page', NOW(), 1, NOW(), 1, 1),
('Hỏi đáp', '/hoi-dap', 'mainmenu', 'Câu hỏi thường gặp', 7, 0, NULL, NULL, 'custom', NOW(), 1, NOW(), 1, 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
