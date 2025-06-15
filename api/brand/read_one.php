<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
include_once "../../config/database.php";
$table = 'db_brand';

$db = new Database();
$conn = $db->getConnection();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'] ?? null;
    if ($id != null) {
        $sql = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
        $result = $conn->query($sql);
        $brand = $result->fetch_assoc();
        $result->free_result();
        $conn->close();
        if ($brand != null) {
            http_response_code(200);
            echo json_encode([
                'success' => true,
                'message' => 'Tải dữ liệu thành công.',
                'brand' => $brand
            ]);
            exit();
        } else {
            http_response_code(404);
            echo json_encode(
                [
                    'success' => false,
                    "message" => "Không tìm thấy sản phẩm."
                ]
            );
            exit();
        }
    } else {
        http_response_code(404);
        echo json_encode([
            'success' => false,
            'message' => 'Chưa có tham số id=.'
        ]);
        exit;
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Phải dùng phương thức GET'
    ]);
    exit;
}
