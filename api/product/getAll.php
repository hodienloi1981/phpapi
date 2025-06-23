<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
$db = new Database();
$conn = $db->getConnection();
$page = $_REQUEST['page'] ?? 1;
$limit = $_REQUEST['limit'] ?? 10;
$offset = ($page - 1) * $limit;
$table = 'db_product';
//
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM $table WHERE status='1' ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $products = $result->fetch_all(MYSQLI_ASSOC);
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => "Tải dữ liệu thành công.",
            'products' => $products
        ]);
    } else {
        http_response_code(404);
        echo json_encode([
            'success' => false,
            'message' => "Không có sản phẩm nào."
        ]);
    }
    $conn->close();
} else {
    http_response_code(404);
    echo json_encode([
        'success' => false,
        'message' => 'Phải dùng phương thức GET'
    ]);
    exit;
}
