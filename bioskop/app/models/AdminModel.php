<?php
    class AdminModel {
        public static function getAll() {
            $SQL = 'SELECT * FROM admin;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute();
            if ($res) {
               return $prep->fetchAll(PDO::FETCH_OBJ);
            } else {
             return [];
            }
        }
        public static function insert($first_name, $last_name, $email, $phone, $username,$password) {
            $SQL = 'INSERT INTO admin (first_name, last_name, email, phone, username, password) VALUES (?, ?, ?, ?, ?, ?);';
            $prep = DataBase::getInstance()->prepare($SQL);
        
            return $prep->execute([$first_name, $last_name, $email, $phone, $username,$password]);
        }

        public static function getByUsernameAndPassword($username, $password) {
            $SQL = 'SELECT * FROM admin WHERE username = ? AND password = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute([$username, $password]);
            if ($res) {
                return $prep->fetch(PDO::FETCH_OBJ);
            } else {
                return null;
            }
        }
        public static function getById($admin_id){
            $SQL = 'SELECT username,first_name,last_name,email,phone FROM admin where admin_id=?';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute([$admin_id]);
            if ($res) {
                return $prep->fetchAll(PDO::FETCH_OBJ);
            } else {
                return null;
            }
        }
        
    }