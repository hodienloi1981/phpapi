<?php
$table = 'db_order';

$sql = "INSERT INTO $table (user_id, name, email, phone, address, created_at, created_by, updated_at, updated_by, status) VALUES
(1, 'Nguyễn Văn A', 'vana1@example.com', '0909123456', '123 Đường A, Q.1, TP.HCM', NOW(), 1, NOW(), 1, 1),
(2, 'Trần Thị B', 'tranb@example.com', '0911123456', '456 Đường B, Q.2, TP.HCM', NOW(), 1, NOW(), 1, 1),
(3, 'Lê Văn C', 'levanc@example.com', '0922123456', '789 Đường C, Q.3, TP.HCM', NOW(), 1, NOW(), 1, 1),
(1, 'Phạm Thị D', 'phamd@example.com', '0933123456', '12A Đường D, Q.4, TP.HCM', NOW(), 1, NOW(), 1, 1),
(2, 'Hoàng Văn E', 'hoange@example.com', '0944123456', '34B Đường E, Q.5, TP.HCM', NOW(), 1, NOW(), 1, 0),
(3, 'Đặng Thị F', 'dangf@example.com', '0955123456', '56C Đường F, Q.6, TP.HCM', NOW(), 1, NOW(), 1, 1),
(4, 'Bùi Văn G', 'buig@example.com', '0966123456', '78D Đường G, Q.7, TP.HCM', NOW(), 1, NOW(), 1, 1),
(5, 'Lý Thị H', 'lyh@example.com', '0977123456', '90E Đường H, Q.8, TP.HCM', NOW(), 1, NOW(), 1, 1),
(6, 'Ngô Văn I', 'ngoi@example.com', '0988123456', '111F Đường I, Q.9, TP.HCM', NOW(), 1, NOW(), 1, 1),
(7, 'Đinh Thị J', 'dinhj@example.com', '0999123456', '222G Đường J, Q.10, TP.HCM', NOW(), 1, NOW(), 1, 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
