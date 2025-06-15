<?php
$table = 'db_post';

$sql = "INSERT INTO $table (topic_id, title, slug, content, description, type, thumbnail, created_at, created_by, updated_at, updated_by, status) VALUES
(1, 'Giới thiệu công ty', 'gioi-thieu-cong-ty', 'Nội dung chi tiết về công ty...', 'Trang giới thiệu về công ty.', 'page', 'https://example.com/img/post-1.jpg', NOW(), 1, NOW(), 1, 1),
(1, 'Tầm nhìn và sứ mệnh', 'tam-nhin-su-menh', 'Chúng tôi hướng đến tương lai...', 'Giới thiệu tầm nhìn chiến lược.', 'page', 'https://example.com/img/post-2.jpg', NOW(), 1, NOW(), 1, 1),
(2, 'Hướng dẫn mua hàng', 'huong-dan-mua-hang', 'Các bước để đặt hàng trực tuyến...', 'Hướng dẫn chi tiết cho người mới.', 'page', 'https://example.com/img/post-3.jpg', NOW(), 1, NOW(), 1, 1),
(3, 'Chính sách bảo hành', 'chinh-sach-bao-hanh', 'Chính sách áp dụng cho tất cả sản phẩm...', 'Nội dung bảo hành cụ thể.', 'page', 'https://example.com/img/post-4.jpg', NOW(), 1, NOW(), 1, 1),
(4, 'Tin tức công nghệ', 'tin-tuc-cong-nghe', 'Cập nhật các xu hướng công nghệ mới...', 'Bài viết cập nhật mới nhất.', 'post', 'https://example.com/img/post-5.jpg', NOW(), 1, NOW(), 1, 1),
(4, 'So sánh các dòng laptop 2025', 'so-sanh-laptop-2025', 'Chi tiết so sánh hiệu năng các dòng máy...', 'Tư vấn mua laptop.', 'post', 'https://example.com/img/post-6.jpg', NOW(), 1, NOW(), 1, 1),
(5, '5 ứng dụng học tiếng Anh hiệu quả', 'ung-dung-hoc-tieng-anh', 'Tổng hợp các ứng dụng nổi bật...', 'Bài viết chia sẻ hữu ích.', 'post', 'https://example.com/img/post-7.jpg', NOW(), 1, NOW(), 1, 1),
(5, 'Tổng hợp các mã giảm giá tháng 6', 'ma-giam-gia-thang-6', 'Danh sách mã giảm giá cập nhật...', 'Giúp bạn tiết kiệm khi mua sắm.', 'post', 'https://example.com/img/post-8.jpg', NOW(), 1, NOW(), 1, 1),
(6, 'Liên hệ hỗ trợ', 'lien-he-ho-tro', 'Nếu bạn cần hỗ trợ hãy liên hệ...', 'Thông tin hỗ trợ kỹ thuật.', 'page', 'https://example.com/img/post-9.jpg', NOW(), 1, NOW(), 1, 1),
(6, 'Câu hỏi thường gặp (FAQ)', 'faq-cau-hoi-thuong-gap', 'Tổng hợp các câu hỏi phổ biến...', 'Trang giải đáp thắc mắc.', 'page', 'https://example.com/img/post-10.jpg', NOW(), 1, NOW(), 1, 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
