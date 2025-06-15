<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include_once "../../config/database.php";
include_once "../../helps/functions.php";
$db = new Database();
$conn = $db->getConnection();
$table = 'db_brand';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ body
    $data = json_decode(file_get_contents('php://input'), true) ?? $_POST;
    if (
        !empty($data['name']) &&
        !empty($data['sort_order']) &&
        !empty($data['status'])
    ) {
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['created_by'] = 1;
        $data['slug'] = str_slug($data['name']);
        //upload file
        $target_dir = "../../assets/brand/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (in_array($extension, ['jpg', 'png', 'webp'])) {
            $fileName = date('YmdHis') . "." . $extension;
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $fileName)) {
                $data['image'] = $fileName;
            }
        }
        //Kết thúc
        $str_f = "";
        $str_v = "";
        foreach ($data as $field => $value) {
            $str_f .= $field . ", ";
            $str_v .= "'" . $value . "', ";
        }
        $str_f = rtrim(rtrim($str_f), ',');
        $str_v = rtrim(rtrim($str_v), ',');
        $sql = "INSERT INTO $table ($str_f) VALUES ($str_v)";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            http_response_code(201);
            echo json_encode([
                'success' => true,
                'message' => 'Thêm thành công.',
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
        'message' => 'Phải dùng phương thức POST'
    ]);
    exit;
}
