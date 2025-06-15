<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");

include_once "../../config/database.php";

$db = new Database();
$conn = $db->getConnection();
$table = 'db_brand';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'] ?? null;
    if ($id != null) {
        $sql_select = "SELECT * FROM $table WHERE id='$id'";
        $result = $conn->query($sql_select);
        $brand = $result->fetch_assoc();
        //
        if ($brand != null) {
            $sql = "DELETE FROM $table WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                if (file_exists('../../assets/brand/' . $brand['thumbnail'])) {
                    unlink('../../assets/brand/' . $brand['thumbnail']);
                }
                http_response_code(200);
                echo json_encode([
                    'success' => true,
                    'message' => 'Xóa thành công'
                ]);
            } else {
                http_response_code(503);
                echo json_encode([
                    'success' => false,
                    'message' => 'Không thể xóa'
                ]);
            }
        } else {
            http_response_code(404);
            echo json_encode([
                'success' => false,
                'message' => 'Không tìm thấy mẫu tin.'
            ]);
            exit;
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
    http_response_code(404);
    echo json_encode([
        'success' => false,
        'message' => 'Phải dùng phương thức DELETE'
    ]);
    exit;
}
