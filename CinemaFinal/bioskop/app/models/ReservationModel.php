<?php 
class ReservationModel{

    public static function getAll(){
        $SQL = 'SELECT guest.email,reservation.seat_num,movie.title,hall.name,projection.date_time FROM reservation INNER JOIN guest on reservation.guestFRN_id=guest.guest_id INNER JOIN projection on reservation.projectionFRN_id=projection.projection_id INNER JOIN hall on projection.hallFRN_id=hall.hall_id INNER JOIN movie on projection.movieFRN_id=movie.movie_id ORDER BY guest.email DESC';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getAllRezByEmail($email){
        $SQL = 'SELECT reservation.projectionFRN_id,guest.email,reservation.seat_num FROM reservation INNER JOIN guest on reservation.guestFRN_id=guest.guest_id where guest.email=?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$email]);
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function insert($guestFRN_id,$projectionFRN_id,$seat_num){
        $SQL='INSERT INTO reservation (guestFRN_id, projectionFRN_id, seat_num) SELECT ?, ?, ? FROM dual WHERE NOT EXISTS (SELECT * FROM reservation WHERE reservation.projectionFRN_id=? and reservation.seat_num=?)';    
        $pdo=DataBase::getInstance();
        $prep =$pdo->prepare($SQL);
        $res=$prep->execute([$guestFRN_id,$projectionFRN_id,$seat_num,$projectionFRN_id,$seat_num]);
        if($res){
            return $pdo->lastInsertId();
        }else{
            return $res;
        }
    }
    public static function delete($reservation_id) {
        $SQL='DELETE FROM reservation WHERE reservation.reservation_id=?';
        $prep=DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$reservation_id]);
    }
    public static function takenSeatsForProjetionById($projection_id){
        $SQL='SELECT seat_num FROM reservation where projectionFRN_id=?';
        $prep= DataBase::getInstance()->prepare($SQL);
        $prep->execute([$projection_id]);
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function rezervisi($first_name,$last_name,$email,$phone,$array_seats,$projection_id){
	$guest_id;
        if(sizeof($array_seats)==0){
            $msg['message']='Niste oznacili ni jedno mesto za rezervaciju';
            return $msg;
        }
	if(sizeof($array_seats)<5){
		$guest=GuestModel::getByEmail($email);
		if ($guest){
			if(($guest->first_name==$first_name)&&($guest->last_name==$last_name)&&($guest->phone==$phone)){
				if($guest->num_of_waiting_res+sizeof($array_seats)<5){
					$res=GuestModel::update($guest->guest_id,(int)sizeof($array_seats));
					if ($res==0){ 

						 $msg['message']='Rezervacija je neuspela, imate vec preveliki broj rezervacija nad istim email-om(4 max)';
						 return $msg;

					}else {
                                            $guest_id=$guest->guest_id;
                                        }
				}else{

					 $msg['message']='Rezervacija je neuspela, imate vec preveliki broj rezervacija nad istim email-om(4 max) ';
					 return $msg;
				} 
			}else {

				 $msg['message']='Rezervacija je neuspela, nad istim email-om postoje podaci (ime,prezime,telefon) koji se razliku od unetih ';
				 return $msg;
			}
		}else{

			$res=GuestModel::insert($first_name, $last_name, $email, $phone,(int) sizeof($array_seats));
			if(!$res) {

				$msg['message']='Rezervacija je neuspela, nad istim email-om postoje podaci (ime,prezime,telefon) koji se razliku od unetih ';
				return $msg;
			}else{

				$guest_id=$res;
			}
		}	
	}else{

		$msg['message']='Rezervacija je neuspela, imate vec preveliki broj rezervacija nad istim email-om(4 max) ';
		return $msg;
	}

	$array_seats_reserved_projectID;
	for($i=0;$i<sizeof($array_seats);$i++){
		$res=ReservationModel::insert($guest_id,$projection_id,$array_seats[$i]);
                if(!$res){break;}
		$array_seats_reserved_projectID[$i]=$res;
	}


	if($i==sizeof($array_seats)){
		$priceOfOne=ProjectionModel::getPriceForProj($projection_id);
		$totalPrice=$priceOfOne->price*sizeof($array_seats);
		$msg['message']='Rezervacija je uspesna vasa ukupna cena je : '.$totalPrice.' RSD';
		return $msg;
	} 
	else{   
                $msg['message']='Rezervacija je neupesna, mesta koja ste izabrali su u medjuvremenu rezervisana';
                if($i==0){
                    $count=GuestModel::delete ($email, sizeof ($array_seats));
                    if($count==1){return $msg;}
                }
                GuestModel::update($email, sizeof($array_seats)-$i);
                
		for($j=0;$j<$i;$j++){
			ReservationModel::delete($array_seats_reserved_projectID[$j]);
		}
		return $msg;
	}
}


}