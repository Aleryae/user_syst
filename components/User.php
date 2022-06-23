<?php
    class User extends Dbh
    {
        //VARIABLES
        private $_name;
        private $_lastName;
        private $_email;
        private $_age;
        private $_birth;

        //FUNCTIONS

        public function getAge($birth)
        {
            $today = date('Y');
            $date = new DateTime($birth);
            $birthday = $date->format('Y');

            $this->_age = $today - $birthday;
        }

        public function getUserList()
        {
            $select = 'SELECT * FROM users';
            $stmt = $this->connect()->query($select);
            while($row = $stmt->fetch())
            {
                echo $row['first_name'].' '.
                    $row['last_name'].' '.
                    $row['email'].' '.
                    $row['birth_date'].'</br>';
            }
        }

        public function getUser($id)
        {
            $select = 'SELECT * FROM users WHERE id = :id';
            $stmt = $this->connect()->prepare($select);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch();
            echo $row['first_name'];
        }

        public function insertUser($name, $lastName, $email, $birth)
        {
            $this->_name = $name;
            $this->_lastName = $lastName;
            $this->_email = $email;
            $this->_birth = $birth;
            $this->getAge($birth);

            $insert = 'INSERT INTO users (first_name, last_name, email, birth_date) VALUES (:first_name, :last_name, :email, DATE :birthdate)';
            $stmt = $this->connect()->prepare($insert);

            $stmt->bindParam(':first_name', $this->_name, PDO::PARAM_STR);
            $stmt->bindParam(':last_name', $this->_lastName, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->_email, PDO::PARAM_STR);
            $stmt->bindParam(':birthdate', $this->_birth, PDO::PARAM_STR);

            $stmt->execute();
        }
    }
?>