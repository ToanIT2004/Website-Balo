<?php 
    class sanpham {
        function getAllMenu() {
            $db = new connect();
            $select = "SELECT m.id, m.name FROM menu m";
            $result = $db->getList($select);
            return $result;
        }
        function getAllProducts($idmenu) {
            $db = new connect();
            $select = "SELECT * FROM sanpham where idmenu = '$idmenu'";
            $result = $db->getList($select);
            return $result;
        }

        function getAllProductss() {
            $db = new connect();
            $select = "SELECT * FROM sanpham";
            $result = $db->getList($select);
            return $result;
        }

        function getProductID($id) {
            $db = new connect();
            $select = "SELECT a.name, a.price, a.img FROM sanpham as a where id='$id'";
            $result = $db->getInstance($select);
            return $result;
        }

        function getProductAllNewPage($start, $limit) {
            $db = new connect();
            $select = "SELECT * FROM sanpham as sp ORDER BY sp.id desc limit ".$start.",".$limit;
            $result = $db->getList($select);
            return $result;
        }

        function getProductSearch($search) {
            $db = new connect();
            $select = "SELECT * FROM sanpham as sp WHERE sp.name LIKE '%$search%'";
            $result = $db->getList($select);
            return $result;
        }

        function filterLow() {
            $db = new connect(); 
            $select = 'SELECT * FROM `sanpham` ORDER BY price ASC';
            $result = $db->getList($select);
            return $result;
        }

        function filterTall() {
            $db = new connect(); 
            $select = 'SELECT * FROM `sanpham` ORDER BY price DESC';
            $result = $db->getList($select);
            return $result;
        }

        function getProduct1to12($start, $limit) {
            $db = new connect();
            $select = "SELECT * FROM sanpham LIMIT $start, $limit";
            $result = $db->getList($select);
            return $result;
        }
    }
