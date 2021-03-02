<?php

class Showtypes extends Database{

  public function getAllShowtypes ()
  {
    $query='select * from showtypes';
    $getAllShowtypes = $this->db-> query($query);
    // ou parent:: db ????
    $result = $getAllShowtypes -> fetchAll();
    return $result;
}


}


?>