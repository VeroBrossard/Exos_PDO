<?php

class Clients extends Database{

  public function getAllClients ()
  {
    $query="select * , DATE_FORMAT(`birthdate`,'%d/%m/%y') as `newBirthDate` from clients";
    $getAllClientsQuery = $this->db-> query($query);
    // ou parent:: db ????
    $result = $getAllClientsQuery -> fetchAll();
    return $result;
}


public function getClientsTotal(){
  $query='select count(*) from clients';
  $getClientsTotalQuery = $this->db-> query($query);
  // ou parent:: db ????
  $result = $getClientsTotalQuery -> fetch();
  return $result;
}

public function getfirstClients($ind){
  $query= "select * , DATE_FORMAT(`birthdate`,'%d/%m/%y') as `newBirthDate` from clients LIMIT $ind";
  $getClientsNbQuery = $this->db-> query($query);
  // ou parent:: db ????
  $result = $getClientsNbQuery -> fetchAll();
  return $result;
}

public function getClientwithXTypeCard(){
  $query = "select lastName , firstName , cardtypes.type from clients INNER JOIN cards on clients.cardNumber = cards.cardNumber INNER JOIN cardtypes on cards.cardTypesId = cardtypes.id 
  WHERE cardtypes.type LIKE 'Fidélité'";

  $getClientwithXTypeCard= $this->db-> query($query);
  // ou parent:: db ????
  $result = $getClientwithXTypeCard -> fetchAll();
  return $result;
}


public function getfirstLetterClients($var){
 
  $query= 'select lastName , firstName from clients where lastName LIKE"' . $var . '"ORDER BY lastName;';
  $getfirstLetterClients = $this->db-> query($query);
  // ou parent:: db ????
  $result = $getfirstLetterClients -> fetchAll();
  return $result;
}

public function getCardTypeClients(){
 
  $query= "select lastName , firstName , DATE_FORMAT(`birthdate`,'%d/%m/%y') as `newBirthDate`, clients.cardNumber, cardtypes.type from  clients 
  inner join cards on clients.cardNumber = cards.cardNumber
  inner join cardtypes on cards.cardTypesId = cardtypes.id";
  $getCardTypeClients = $this->db-> query($query);
  // ou parent:: db ????
  $result = $getCardTypeClients -> fetchAll();
  return $result;
}

}
//$reponse = $bdd->query('select * from clients limit 20');

?>
