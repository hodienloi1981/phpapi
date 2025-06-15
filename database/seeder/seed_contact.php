<?php
$table = 'db_contact';

$sql = "INSERT INTO $table (name, email, phone, title, content, created_at, created_by, updated_at, updated_by, status) VALUES
('Nguyễn Văn A', 'vana1@example.com', '0909123456', 'Hỏi về sản phẩm', 'Tôi muốn biết thêm thông tin về sản phẩm X.', NOW(), 1, NOW(), 1, 1),
('Trần Thị B', 'tranb@example.com', '0911123456', 'Góp ý website', 'Trang web hiển thị tốt, tuy nhiên nên thêm chế độ tối.', NOW(), 1, NOW(), 1, 1),
('Lê Văn C', 'levanc@example.com', '0922123456', 'Liên hệ đặt hàng', 'Tôi muốn đặt hàng số lượng lớn.', NOW(), 1, NOW(), 1, 1),
('Phạm Thị D', 'phamd@example.com', '0933123456', 'Khiếu nại sản phẩm', 'Sản phẩm bị lỗi sau khi sử dụng 3 ngày.', NOW(), 1, NOW(), 1, 1),
('Hoàng Văn E', 'hoange@example.com', '0944123456', 'Yêu cầu hỗ trợ kỹ thuật', 'Tôi không cài đặt được phần mềm kèm theo.', NOW(), 1, NOW(), 1, 1),
('Đặng Thị F', 'dangf@example.com', '0955123456', 'Liên hệ hợp tác', 'Tôi muốn hợp tác phân phối sản phẩm của bạn.', NOW(), 1, NOW(), 1, 0),
('Bùi Văn G', 'buig@example.com', '0966123456', 'Tư vấn dịch vụ', 'Bạn có thể tư vấn gói bảo hành mở rộng không?', NOW(), 1, NOW(), 1, 1),
('Lý Thị H', 'lyh@example.com', '0977123456', 'Hỏi về thanh toán', 'Có thể thanh toán qua ví điện tử không?', NOW(), 1, NOW(), 1, 1),
('Ngô Văn I', 'ngoi@example.com', '0988123456', 'Yêu cầu xuất hóa đơn', 'Vui lòng cung cấp hóa đơn đỏ cho đơn hàng.', NOW(), 1, NOW(), 1, 1),
('Đinh Thị J', 'dinhj@example.com', '0999123456', 'Báo lỗi giao diện', 'Website bị lỗi trên thiết bị iPhone 13.', NOW(), 1, NOW(), 1, 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
