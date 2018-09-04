<?php

class GuestController extends Controller {

    public function index() {
        $nasIzbor = MovieModel::getRecomended();
        $this->setData('nasIzbor', $nasIzbor);
        
        $filmovi = MovieModel::getAll();
        $this->setData('filmoviLista', $filmovi);
    }

    public function film($film_id) {
        $listaFilma = MovieModel::getById($film_id);
        $this->setData('film', $listaFilma);
    }

    public function repertoar() {
        $listaZanrova = GenreModel::getAll();
        $this->setData('zanrovi', $listaZanrova);
        
        if (!empty($_POST)) {
            $genre_id = filter_input(INPUT_POST, 'zanr_id', FILTER_SANITIZE_STRING);

            $res = MovieModel::getAllByGenre($genre_id);
            
            if ($res) {
                $this->setData('repertoar', $res);
            } else {
                    $this->setData('message', 'Nazalost nemamo filmove za izabranu kategoriju');
                    $repertoar = null;
                    $this->setData('repertoar', $repertoar);
            }
        } else {
            $repertoar = MovieModel::getAll();
            $this->setData('repertoar', $repertoar);
        }
    }

    public function uskoro() {
        $uskoro = MovieModel::getAllByTitlenTrailer();
        $this->setData('uskoro', $uskoro);
    }
    
    public function rezervacija() {
        $listaProjekcija = ProjectionModel::getAllWithId();
        $this->setData('projekcije', $listaProjekcija);
    }
    
    public function sedista($proj_id) {
        $proj = ProjectionModel::getById($proj_id);
        $this->setData('projekcija', $proj);
        
        
        //testiranje konkrentnosti!!
        
//        $listased= ReservationModel::takenSeatsForProjetionById($proj_id);
//        for($i=1;$i<82;$i++)$this->setData ($i,false);
//        foreach ($listased as $sediste) {
//            $this->setData($sediste->seat_num, true);
//        }
        if(!empty($_POST)){
            $array_seats;
            $i=0;
            for($j=1;$j<82;$j++){
                if (isset($_POST[$j])){
                    $array_seats[$i]=$j;
                    $i++;
                }
            }
            $first_name = filter_input(INPUT_POST, 'ime', FILTER_SANITIZE_STRING);
            $last_name=filter_input(INPUT_POST, 'prezime', FILTER_SANITIZE_STRING);
            $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $phone=filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
            
            $msg= ReservationModel::rezervisi($first_name,$last_name,$email,$phone,$array_seats,$proj_id);
            $this->setData('message', $msg['message']);
            //var_dump($msg);
            
            
        }
        $listased= ReservationModel::takenSeatsForProjetionById($proj_id);
        for($i=1;$i<82;$i++)$this->setData ($i,false);
        foreach ($listased as $sediste) {
            $this->setData($sediste->seat_num, true);
        }
    }
    
}
