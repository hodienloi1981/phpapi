<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";

$db = new Database();
$conn = $db->getConnection();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM db_user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $users = $result->fetch_all(MYSQLI_ASSOC);
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => "Tải dữ liệu thành công.",
            'users' => $users
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
