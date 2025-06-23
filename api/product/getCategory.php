<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
$db = new Database();
$conn = $db->getConnection();
$category_id = $_REQUEST['category_id'] ?? '';
$limit = $_REQUEST['limit'] ?? 10;
$table = 'db_product';
$tb_category = 'db_category';
//listcategory
$listid = [];
$sql_cat1 = "SELECT * FROM $tb_category WHERE id='$category_id' LIMIT 1";
$result1 = $conn->query($sql_cat1);
if ($result1->num_rows > 0) {
    $cat_row1 = $result1->fetch_assoc();
    array_push($listid, $category_id);
    $sql_cat2 = "SELECT * FROM $tb_category WHERE parent_id='$category_id'";
    $result2 = $conn->query($sql_cat2);
    if ($result2->num_rows > 0) {
        $categorys2 = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($categorys2 as $cat2) {
            array_push($listid, $cat2['id']);
            $sql_cat3 = "SELECT * FROM $tb_category WHERE parent_id='" . $cat2['id'] . "'";
            $result3 = $conn->query($sql_cat3);
            if ($result3->num_rows > 0) {
                $categorys3 = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($categorys3 as $cat3) {
                    array_push($listid, $cat3['id']);
                }
            }
        }
    }
}
$strin = implode(', ', $listid);
//
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM $table WHERE status='1' AND category_id IN ($strin) ORDER BY created_at DESC LIMIT $limit";
    // echo $sql;
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
