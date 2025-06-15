<?php
$table = 'db_product';

$sql = "INSERT INTO $table (category_id, brand_id, name, slug, detail, description, price_buy, price_sale, qty, thumbnail, created_at, created_by, updated_at, updated_by, status) VALUES
(1, 1, 'iPhone 15 Pro Max', 'iphone-15-pro-max', 'Chi tiết sản phẩm iPhone 15 Pro Max', 'Điện thoại cao cấp của Apple', 28000000, 26500000, 50, 'https://example.com/img/iphone15.jpg', NOW(), 1, NOW(), 1, 1),
(1, 2, 'Samsung Galaxy S24 Ultra', 'samsung-galaxy-s24-ultra', 'Chi tiết Galaxy S24 Ultra', 'Flagship Android mạnh nhất từ Samsung', 27000000, 25500000, 40, 'https://example.com/img/s24ultra.jpg', NOW(), 1, NOW(), 1, 1),
(2, 3, 'Laptop Asus TUF Gaming F15', 'laptop-asus-tuf-gaming-f15', 'Chi tiết cấu hình và hiệu năng', 'Laptop chơi game giá tốt, cấu hình mạnh', 19000000, 18500000, 30, 'https://example.com/img/asusf15.jpg', NOW(), 1, NOW(), 1, 1),
(2, 4, 'MacBook Air M2 2024', 'macbook-air-m2-2024', 'Phiên bản mới với chip M2', 'Laptop siêu nhẹ, pin trâu, hiệu năng tốt', 28000000, 27000000, 25, 'https://example.com/img/macbookair.jpg', NOW(), 1, NOW(), 1, 1),
(3, 5, 'Tai nghe Bluetooth Sony WH-1000XM5', 'tai-nghe-sony-wh-1000xm5', 'Khử tiếng ồn chủ động', 'Tai nghe cao cấp, chất âm đỉnh cao', 8500000, 7990000, 60, 'https://example.com/img/sonywh1000.jpg', NOW(), 1, NOW(), 1, 1),
(3, 3, 'Chuột Logitech G502 Hero', 'chuot-logitech-g502-hero', 'Chuột gaming chính xác cao', 'Phù hợp mọi thể loại game', 1200000, 1150000, 100, 'https://example.com/img/logitechg502.jpg', NOW(), 1, NOW(), 1, 1),
(1, 2, 'Samsung Galaxy A55', 'samsung-galaxy-a55', 'Smartphone tầm trung', 'Thiết kế đẹp, pin trâu, màn hình mượt', 9000000, 8500000, 80, 'https://example.com/img/a55.jpg', NOW(), 1, NOW(), 1, 1),
(4, 1, 'Apple Watch Series 9', 'apple-watch-series-9', 'Đồng hồ thông minh Apple', 'Theo dõi sức khỏe, kết nối iPhone', 12000000, 11500000, 45, 'https://example.com/img/watchs9.jpg', NOW(), 1, NOW(), 1, 1),
(2, 6, 'HP Pavilion 15', 'hp-pavilion-15', 'Laptop văn phòng đa dụng', 'Giá hợp lý, hiệu suất ổn định', 13500000, 12900000, 35, 'https://example.com/img/hppavilion.jpg', NOW(), 1, NOW(), 1, 1),
(1, 7, 'Xiaomi Redmi Note 13 Pro', 'xiaomi-redmi-note-13-pro', 'Điện thoại tầm trung cấu hình mạnh', 'Thiết kế đẹp, camera tốt, giá rẻ', 7000000, 6590000, 120, 'https://example.com/img/redmi13.jpg', NOW(), 1, NOW(), 1, 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
