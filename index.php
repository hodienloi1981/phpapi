<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP API</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md p-4">
            <h2 class="text-xl font-bold mb-6 text-gray-700">Quản lý hệ thống</h2>
            <ul class="space-y-4 text-gray-600">
                <li><i class="fas fa-home mr-2"></i>
                    <a href="index.php">Home</a>
                </li>
                <li><i class="fas fa-image mr-2"></i>
                    <a href="index.php?page=banner">Banner</a>
                </li>
                <li><i class="fas fa-tags mr-2"></i>
                    <a href="index.php?page=brand">Thương hiệu</a>
                </li>
                <li><i class="fas fa-list-alt mr-2"></i>
                    <a href="index.php?page=category">Danh mục</a>
                </li>
                <li><i class="fas fa-shopping-cart mr-2"></i>
                    <a href="index.php?page=order">Đơn hàng</a>
                </li>
                <li><i class="fas fa-envelope mr-2"></i>
                    <a href="index.php?page=contact">Liên hệ</a>
                </li>
                <li><i class="fas fa-bars mr-2"></i>
                    <a href="index.php?page=menu">Menu</a>
                </li>
                <li><i class="fas fa-newspaper mr-2"></i>
                    <a href="index.php?page=post">Bài viết</a>
                </li>
                <li><i class="fas fa-box-open mr-2"></i>
                    <a href="index.php?page=product">Sản phẩm</a>
                </li>
                <li><i class="fas fa-folder-open mr-2"></i>
                    <a href="index.php?page=topic">Chủ đề bài viết</a>
                </li>
                <li><i class="fas fa-users mr-2"></i>
                    <a href="index.php?page=user">Thành viên</a>
                </li>
                <li><i class="fa-solid fa-database"></i>
                    <a href="index.php?page=migrations">Tạo bảng</a>
                </li>
                <li><i class="fas fa-users mr-2"></i>
                    <a href="index.php?page=seeder">Dữ liệu mẫu</a>
                </li>
            </ul>
        </aside>

        <!-- Content Area -->
        <main class="flex-1 p-6 overflow-y-auto">
            <?php
            $page = $_REQUEST['page'] ?? "home";
            if (file_exists("pages/" . $page . ".php")) {
                require_once("pages/" . $page . ".php");
            } else {
                echo "LỖI 404";
            }
            ?>
        </main>
    </div>
</body>

</html>