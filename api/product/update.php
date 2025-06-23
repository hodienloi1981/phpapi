<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Methods: POST");

include_once "../../config/database.php";
include_once "../../helps/functions.php";

$db = new Database();
$conn = $db->getConnection();
$table = 'db_product';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ body
    $id = $_GET['id'] ?? null;
    if ($id != null) {
        $sql_select = "SELECT * FROM $table WHERE id='$id'";
        $result = $conn->query($sql_select);
        $product = $result->fetch_assoc();
        //
        if ($product != null) {
            $data = json_decode(file_get_contents('php://input'), true) ?? $_POST;
            if (
                !empty($data['name']) &&
                !empty($data['price_buy']) &&
                !empty($data['price_sale']) &&
                !empty($data['detail']) &&
                !empty($data['description']) &&
                !empty($data['status'])
            ) {
                $data['updated_at'] = date('Y-m-d H:i:s');
                $data['updated_by'] = 1;
                $data['slug'] = str_slug($data['name']);
                //upload file
                $target_dir = "../../assets/product/";
                $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
                $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (in_array($extension, ['jpg', 'png', 'webp'])) {
                    $fileName = date('YmdHis') . "." . $extension;
                    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_dir . $fileName)) {
                        //Xóa ảnh cũ
                        if (file_exists($target_dir . $product['thumbnail'])) {
                            unlink($target_dir . $product['thumbnail']);
                        }
                        //upload ảnh mới
                        $data['thumbnail'] = $fieldName;
                    }
                }
                //Kết thúc
                $str_set = "";
                foreach ($data as $field => $value) {
                    $str_set .= $field . "='$value', ";
                }
                $str_set = rtrim(rtrim($str_set), ',');
                $sql = "UPDATE $table SET $str_set WHERE id='$id'";
                echo $sql;
                if ($conn->query($sql) === TRUE) {
                    $last_id = $conn->insert_id;
                    http_response_code(201);
                    echo json_encode([
                        'success' => true,
                        'message' => 'Cập nhật thành công.',
                        'id' => $last_id
                    ]);
                    exit;
                } else {
                    http_response_code(503);
                    echo json_encode([
                        'success' => false,
                        'message' => "Lỗi: " . $sql . "<br>" . $conn->error
                    ]);
                    exit;
                }

                $conn->close();
            } else {
                http_response_code(503);
                echo json_encode([
                    'success' => false,
                    'message' => "Thông tin chưa đầy đủ"
                ]);
                exit;
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
        'message' => 'Phải dùng phương thức POST'
    ]);
    exit;
}
