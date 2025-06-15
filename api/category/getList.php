<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include_once "../../config/database.php";
$db = new Database();
$conn = $db->getConnection();
$limit = $_REQUEST['limit'] ?? 10;
$parentid = $_REQUEST['parentid'] ?? 10;
$table = 'db_category';
//
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM $table WHERE status='1' AND parent_id='$parentid' ORDER BY created_at DESC LIMIT $limit";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $categorys = $result->fetch_all(MYSQLI_ASSOC);
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => "Tải dữ liệu thành công.",
            'categorys' => $categorys
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
