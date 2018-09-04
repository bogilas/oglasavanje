<?php

class AdminController extends Controller {

    public final function __pre() {
        if (!Session::exists('admin_id')) {
            Misc::redirect('logout');
        }
    }

    public function adminProfil() {
        
    }

    public function pregledProjekcija() {
        $listaProjekcija = ProjectionModel::getAll();
        $this->setData('projekcije', $listaProjekcija);
    }

    public function pregledFilmova() {
        $listaFilmova = MovieModel::getAll();
        $this->setData('filmovi', $listaFilmova);
    }

    public function pregledSala() {
        $listaHala = HallModel::getAll();
        $this->setData('sale', $listaHala);
    }

    public function pregledRezervacija() {
        $listaRezervacija = ReservationModel::getAll();
        $this->setData('rezervacije', $listaRezervacija);
    }

    public function adminInfo() {
        $adminInformacije = AdminModel::getById(Session::get('admin_id'));
        $this->setData('adminPodaci', $adminInformacije);
    }

    public function dodajSalu() {
        if (!empty($_POST)) {
            $name = filter_input(INPUT_POST, 'naziv', FILTER_SANITIZE_STRING);
            $descripion = filter_input(INPUT_POST, 'opis', FILTER_SANITIZE_STRING);

            $res = HallModel::insert($name, $descripion);
            if ($res) {
                $this->setData('message', 'Podaci su uspesno uneti.');
                Misc::redirect('adminProfil');
            } else {
                $this->setData('message', 'Doslo je do greske, podaci nisu uneti.');
            }
        } else {
            $this->setData('message', 'Nisu dobro uneti podaci.');
        }
    }

    public function dodajFilm() {
        $listaZanrova = GenreModel::getAll();
        $this->setData('zanrovi', $listaZanrova);
        if (!empty($_POST)) {
            $title = filter_input(INPUT_POST, 'naziv', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST, 'opis', FILTER_SANITIZE_STRING);
            $actors = filter_input(INPUT_POST, 'glumci', FILTER_SANITIZE_STRING);
            $director = filter_input(INPUT_POST, 'reziser', FILTER_SANITIZE_STRING);
            $duration = filter_input(INPUT_POST, 'trajanje', FILTER_SANITIZE_STRING);
            $trailer = filter_input(INPUT_POST, 'trejler', FILTER_SANITIZE_STRING);
            $genre_id = filter_input(INPUT_POST, 'zanr_id', FILTER_SANITIZE_STRING);
            

            $res = MovieModel::insert($genre_id, $director, $actors, $description, $duration, $title, $trailer);
            if ($res) {
                
//                if (isset($_FILES['fileToUpload'])) {
//                    $file_name = $_FILES['fileToUpload']['name'];
//                    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
//                    $file_name = $res . '.jpg';
//                    move_uploaded_file($file_tmp, "assets/img/" . $file_name);
//                    
//                    
//                }
                $this->setData('message', 'Podaci su uspesno uneti.');
                Misc::redirect('adminProfil');
            } else {
                $this->setData('message', 'Doslo je do greske, podaci nisu uneti.');
            }
        } else {
            $this->setData('message', 'Nisu dobro uneti podaci.');
        }
    }
    
    public function dodajRezervaciju() {
        $listaFilmova= MovieModel::getAllTitleID();
        $this->setData('filmovi', $listaFilmova);
        
        if (!empty($_POST)) {
            if(!$_POST['projection_id']){
            $listaProjekcija= ProjectionModel::getByMovieId($_POST['movie_id']);
            $this->setData('projekcije', $listaProjekcija);
            }
            else{
                $listaSedista= ReservationModel::takenSeatsForProjetionById($_POST['projection_id']);
                $this->setData('zauzetaSedista', $listaSedista);
            }
        }
   }
    
    public function dodajProjekciju() {
        $listaFilmova= MovieModel::getAllTitleID();
        $this->setData('filmovi', $listaFilmova);
        $listaSala= HallModel::getAllNameId();
        $this->setData('sale',$listaSala);
        if(!empty($_POST)){
            $movie_id=filter_input(INPUT_POST, 'movie_id', FILTER_SANITIZE_NUMBER_INT);
            $hall_id=filter_input(INPUT_POST, 'hall_id', FILTER_SANITIZE_NUMBER_INT);
            $price=filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT);
            $date_time=filter_input(INPUT_POST, 'dateNtime', FILTER_SANITIZE_STRING);
            $res= ProjectionModel::insert($hall_id, $movie_id, $price, $date_time);
            if($res){
                $this->setData('message', 'Podaci su uspesno uneti.');
            } else {
                $this->setData('message', 'Doslo je do greske, podaci nisu uneti.');
            }
        }
    }
}
