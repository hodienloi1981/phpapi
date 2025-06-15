<?php
require_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();
include_once 'seed_banner.php';
include_once 'seed_brand.php';
include_once 'seed_category.php';
include_once 'seed_contact.php';
include_once 'seed_menu.php';
include_once 'seed_order.php';
include_once 'seed_orderdetail.php';
include_once 'seed_post.php';
include_once 'seed_product.php';
include_once 'seed_topic.php';
include_once 'seed_user.php';
$conn->close();
