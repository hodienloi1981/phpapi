<?php
$table = 'db_user';
$sql = "INSERT INTO $table (name, email, phone, username, password, roles, avatar, address, created_at, created_by, updated_at, updated_by, status) VALUES
('Nguyễn Văn A', 'vana@example.com', '0909123456', 'vana', MD5('123456'), 'admin', 'https://example.com/avatar/a.jpg', '123 Đường A, Q1, HCM', NOW(), 1, NOW(), 1, 1),
('Trần Thị B', 'tranb@example.com', '0911123456', 'tranb', MD5('123456'), 'customer', 'https://example.com/avatar/b.jpg', '456 Đường B, Q2, HCM', NOW(), 1, NOW(), 1, 1),
('Lê Văn C', 'levanc@example.com', '0922123456', 'levanc', MD5('123456'), 'customer', NULL, '789 Đường C, Q3, HCM', NOW(), 1, NOW(), 1, 1),
('Phạm Thị D', 'phamd@example.com', '0933123456', 'phamd', MD5('123456'), 'customer', NULL, '12A Đường D, Q4, HCM', NOW(), 1, NOW(), 1, 1),
('Hoàng Văn E', 'hoange@example.com', '0944123456', 'hoange', MD5('123456'), 'admin', 'https://example.com/avatar/e.jpg', '34B Đường E, Q5, HCM', NOW(), 1, NOW(), 1, 1),
('Đặng Thị F', 'dangf@example.com', '0955123456', 'dangf', MD5('123456'), 'customer', NULL, '56C Đường F, Q6, HCM', NOW(), 1, NOW(), 1, 1),
('Bùi Văn G', 'buig@example.com', '0966123456', 'buig', MD5('123456'), 'customer', NULL, '78D Đường G, Q7, HCM', NOW(), 1, NOW(), 1, 1),
('Lý Thị H', 'lyh@example.com', '0977123456', 'lyh', MD5('123456'), 'customer', NULL, '90E Đường H, Q8, HCM', NOW(), 1, NOW(), 1, 1),
('Ngô Văn I', 'ngoi@example.com', '0988123456', 'ngoi', MD5('123456'), 'customer', NULL, '111F Đường I, Q9, HCM', NOW(), 1, NOW(), 1, 1),
('Đinh Thị J', 'dinhj@example.com', '0999123456', 'dinhj', MD5('123456'), 'customer', NULL, '222G Đường J, Q10, HCM', NOW(), 1, NOW(), 1, 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
