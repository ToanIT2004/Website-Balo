<?php
$act = 'product';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'product':
        include "./View/product.php";
        break;
    case '1':
        include_once "./View/BaloLaptop.php";
        break;
    case '2':
        include_once "./View/BaloDuLich.php";
        break;
    case '3':
        include_once "./View/BaloThoiTrang.php";
        break;
    case '4':
        include_once "./View/BaloPhuot.php";
        break;
    case 'chitietsanpham':
        include_once "./View/chitietsanpham.php";
        break;
    case 'timkiem': 
        include_once "./View/timkiem.php";
        break;
    case 'filter':
        include_once "./View/product.php";
        break;
}
?>