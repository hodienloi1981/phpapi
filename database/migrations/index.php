<?php
require_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();
include_once 'banner.php';
include_once 'brand.php';
include_once 'category.php';
include_once 'contact.php';
include_once 'menu.php';
include_once 'order.php';
include_once 'orderdetail.php';
include_once 'post.php';
include_once 'product.php';
include_once 'topic.php';
include_once 'user.php';
$conn->close();
