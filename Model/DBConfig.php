<?php 
    class  connect {
        var $db = null;
        public function __construct() {
            $dsn = 'mysql:host=localhost;dbname=shopbalo';
            $user = 'root';
            $pass = '';
            try{
                $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
            }catch(\Throwable $th) {
                // ném lỗi
                echo "Kết nối không thành công";
                echo $th;
            }
        }

        function getList($select) {
            $result = $this->db->query($select); // trả về nhiều dòng;
            return $result;
        }

        function getInstance($select) {
            $results = $this->db->query($select); // trả về 1 dòng;
            // do trả về 1 dòng nên fetch luôn để lấy dữ liệu
            $result = $results->fetch();
            return $result;
        } 


        // Phương thức thực thi câu lệnh insert, update, delete (exec)
        function exec($query) {
            $result = $this->db->exec($query);
            return $result;
        }

        // phương thức prepare
        function execp($query) {
            $statement = $this->db->prepare($query);
            return $statement;
        }

    }
?>