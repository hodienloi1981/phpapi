<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
$db = new Database();
$conn = $db->getConnection();
$limit = $_REQUEST['limit'] ?? 10;
$parentid = $_REQUEST['parentid'] ?? 10;
$position = $_REQUEST['position'] ?? 'mainmenu';
$table = 'db_category';
//
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM $table WHERE status='1' AND parent_id='$parentid' AND position='$position' ORDER BY created_at DESC LIMIT $limit";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $menus = $result->fetch_all(MYSQLI_ASSOC);
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => "Tải dữ liệu thành công.",
            'menus' => $menus
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
