<?php 
class ProjectionModel{

    public static function getAll(){
        $SQL = 'SELECT projection.date_time,hall.name,movie.title,projection.price FROM projection INNER JOIN hall  on projection.hallFRN_id = hall.hall_id INNER JOIN movie on projection.movieFRN_id=movie.movie_id ORDER BY projection.date_time DESC';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getById($projection_id){
        $SQL = 'SELECT projection.date_time,hall.name,movie.title,projection.price FROM projection INNER JOIN hall  on projection.hallFRN_id = hall.hall_id INNER JOIN movie on projection.movieFRN_id=movie.movie_id WHERE projection.projection_id=?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$projection_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    public static function getByMovieId($movie_id){
        $SQL = 'SELECT projection.date_time,projection.projection_id FROM projection WHERE projection.movieFRN_id=?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$movie_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    public static function insert($hall_id, $movie_id, $price, $date_time) {
        $SQL = 'INSERT INTO projection (hallFRN_id, movieFRN_id,date_time,price) SELECT ?,?,?,? FROM dual WHERE NOT EXISTS (SELECT * FROM projection WHERE hallFRN_id=? and movieFRN_id=? and date_time=?)';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$hall_id, $movie_id,$date_time,$price,$hall_id,$movie_id,$date_time]);
    }
    public static function getAllWithId(){
        $SQL = 'SELECT projection.projection_id,projection.date_time,hall.name,movie.title,projection.price FROM projection INNER JOIN hall  on projection.hallFRN_id = hall.hall_id INNER JOIN movie on projection.movieFRN_id=movie.movie_id ORDER BY movie.title ASC';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getPriceForProj($projection_id){
        $SQL = 'SELECT price FROM projection WHERE projection_id=?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$projection_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
}

    //
}