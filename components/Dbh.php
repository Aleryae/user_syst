<?php 
    class Dbh {
        private $_host = 'localhost';
        private $_user = 'root';
        private $_pwd = '';
        private $_dbName = 'users_test';

        protected function connect() {
            $dbh = 'mysql:host='.$this->_host.';dbname='.$this->_dbName;
            $pdo = new PDO($dbh, $this->_user, $this->_pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }
?>