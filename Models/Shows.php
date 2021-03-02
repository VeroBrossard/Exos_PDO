<?php

class Shows extends Database
{

  public function getAllShows()
  {
    $query = "select * ,DATE_FORMAT(`date`,'%d/%m/%y') as `newDate`, DATE_FORMAT(`startTime`,'%H:%i') as `newStartTime` from shows ORDER BY title;";
    $getAllShowsQuery = $this->db->query($query);
    // ou parent:: db ????
    $result = $getAllShowsQuery->fetchAll();
    return $result;
  }

}
