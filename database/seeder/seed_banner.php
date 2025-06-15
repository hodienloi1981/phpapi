<?php
$table = 'db_banner';
$sql = "INSERT INTO $table (name, link, position, description, sort_order, image, created_at, created_by, updated_at, updated_by, status) VALUES
('Banner 1', null, 'slideshow', 'Mô tả banner 1', 1, 'banner-1.jpg', NOW(), 1, NOW(), 1, 1),
('Banner 2', null, 'ads', 'Mô tả banner 2', 2, 'banner-2.jpg', NOW(), 1, NOW(), 1, 1),
('Banner 3', null, 'slideshow', 'Mô tả banner 3', 3, 'banner-3.jpg', NOW(), 1, NOW(), 1, 0),
('Banner 4', null, 'ads', 'Mô tả banner 4', 4, 'banner-4.jpg', NOW(), 1, NOW(), 1, 1),
('Banner 5', null, 'slideshow', 'Mô tả banner 5', 5, 'banner-5.jpg', NOW(), 1, NOW(), 1, 1),
('Banner 6', null, 'ads', 'Mô tả banner 6', 6, 'banner-6.jpg', NOW(), 1, NOW(), 1, 0),
('Banner 7', null, 'slideshow', 'Mô tả banner 7', 7, 'banner-7.jpg', NOW(), 1, NOW(), 1, 1),
('Banner 8', null, 'ads', 'Mô tả banner 8', 8, 'banner-8.jpg', NOW(), 1, NOW(), 1, 1),
('Banner 9', null, 'slideshow', 'Mô tả banner 9', 9, 'banner-9.jpg', NOW(), 1, NOW(), 1, 1),
('Banner 10', null, 'ads', 'Mô tả banner 10', 10, 'banner-10.jpg', NOW(), 1, NOW(), 1, 1);
";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
