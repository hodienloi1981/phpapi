<?php
$table = 'db_topic';

$sql = "INSERT INTO $table (name, slug, description, sort_order, created_at, created_by, updated_at, updated_by, status) VALUES
('Giới thiệu', 'gioi-thieu', 'Thông tin về công ty, sứ mệnh và tầm nhìn.', 1, NOW(), 1, NOW(), 1, 1),
('Hướng dẫn mua hàng', 'huong-dan-mua-hang', 'Cách thức đặt hàng, thanh toán, vận chuyển.', 2, NOW(), 1, NOW(), 1, 1),
('Chính sách bảo hành', 'chinh-sach-bao-hanh', 'Quy định và thời gian bảo hành sản phẩm.', 3, NOW(), 1, NOW(), 1, 1),
('Chính sách đổi trả', 'chinh-sach-doi-tra', 'Hướng dẫn đổi/trả hàng hóa khi gặp vấn đề.', 4, NOW(), 1, NOW(), 1, 1),
('Tin tức công nghệ', 'tin-tuc-cong-nghe', 'Cập nhật các xu hướng và sản phẩm công nghệ mới.', 5, NOW(), 1, NOW(), 1, 1),
('Khuyến mãi', 'khuyen-mai', 'Các chương trình khuyến mãi và giảm giá.', 6, NOW(), 1, NOW(), 1, 1),
('Tư vấn sản phẩm', 'tu-van-san-pham', 'Chia sẻ kinh nghiệm lựa chọn sản phẩm phù hợp.', 7, NOW(), 1, NOW(), 1, 1),
('Hỗ trợ kỹ thuật', 'ho-tro-ky-thuat', 'Cách khắc phục các lỗi thường gặp.', 8, NOW(), 1, NOW(), 1, 1),
('Hỏi đáp', 'hoi-dap', 'Tổng hợp các câu hỏi thường gặp từ khách hàng.', 9, NOW(), 1, NOW(), 1, 1),
('Tuyển dụng', 'tuyen-dung', 'Thông tin tuyển dụng nhân sự công ty.', 10, NOW(), 1, NOW(), 1, 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
