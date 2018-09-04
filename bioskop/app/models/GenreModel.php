<?php
class GenreModel {
        public static function getAll() {
            $SQL = 'SELECT * FROM genre;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute();
            if ($res) {
               return $prep->fetchAll(PDO::FETCH_OBJ);
            } else {
             return [];
            }
        }

        public static function getById($id) {
            $SQL = 'SELECT name FROM genre WHERE genre_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute([$id]);
            if ($res) {
                return $prep->fetch(PDO::FETCH_OBJ);
            } else {
               return null;
            }
        }


}