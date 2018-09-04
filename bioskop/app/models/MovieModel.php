<?php
class MovieModel {
    public static function getAll() {
        $SQL = 'SELECT movie.movie_id,movie.director,movie.actors,movie.description,movie.duration,movie.title,movie.trailer,genre.name AS genre 
        FROM movie INNER JOIN genre ON movie.genreFRN_id = genre.genre_id ORDER BY genre.name DESC;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute();
        if ($res) {
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }

    public static function insert($genre_id,$director,$actors,$description,$duration,$title,$trailer){
        $SQL = 'INSERT INTO movie (genreFRN_id, director, actors, description, duration, title, trailer) VALUES (?, ?, ?, ?, ?, ?, ?);';
        $pdo=DataBase::getInstance();
        $prep = $pdo->prepare($SQL);
        $res=$prep->execute([$genre_id,$director,$actors,$description,$duration,$title,$trailer]);
        if($res){
            $last_id=$pdo->lastInsertId();
            return $last_id;
        }else{
            return $res;
        }
    }
    public static function getAllTitleID(){
        $SQL='SELECT title,movie_id FROM movie';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute();
        if ($res) {
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    public static function getById($movie_id){
        $SQL = $SQL = 'SELECT movie.director,movie.actors,movie.description,movie.duration,movie.title,movie.trailer,genre.name AS genre 
        FROM movie INNER JOIN genre ON movie.genreFRN_id = genre.genre_id WHERE movie.movie_id = ?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$movie_id]);
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    
    public static function getRecomended(){
        $SQL='SELECT movie_id,title,description FROM `movie` LIMIT 4';
        $prep= DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getAllByGenre($genre_id){
        $SQL='SELECT movie.movie_id,movie.director,movie.actors,movie.description,movie.duration,movie.title,movie.trailer,genre.name AS genre 
        FROM movie INNER JOIN genre ON movie.genreFRN_id = genre.genre_id WHERE movie.genreFRN_id=?';
        $prep= DataBase::getInstance()->prepare($SQL);
        $prep->execute([$genre_id]);
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getAllByTitlenTrailer() {
        $SQL='SELECT title,trailer FROM `movie` LIMIT 4';
        $prep= DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }


}