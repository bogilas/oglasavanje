<?php
class HallModel{
    public static function getAll() {
            $SQL = 'SELECT * FROM hall;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute();
            if ($res) {
               return $prep->fetchAll(PDO::FETCH_OBJ);
            } else {
             return [];
            }
    }
    public static function insert($name, $description) {
            $SQL = 'INSERT INTO hall (name, description) VALUES (?, ?);';
            $prep = DataBase::getInstance()->prepare($SQL);
        
            return $prep->execute([$name, $description]);
    }
    public static function getNameById($id) {
            $SQL = 'SELECT name FROM hall WHERE hall_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute([$id]);
            if ($res) {
                return $prep->fetch(PDO::FETCH_OBJ);
            } else {
               return null;
            }
    }
    public static function getById($id) {
            $SQL = 'SELECT * FROM hall WHERE hall_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute([$id]);
            if ($res) {
                return $prep->fetch(PDO::FETCH_OBJ);
            } else {
               return null;
            }
    }
    public static function getAllNameId() {
            $SQL = 'SELECT hall_id,name FROM hall;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute();
            if ($res) {
               return $prep->fetchAll(PDO::FETCH_OBJ);
            } else {
             return [];
            }
    }
}