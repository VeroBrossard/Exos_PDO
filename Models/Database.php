<?php

//correction(
class Database{

  protected $bd;
  public function __construct()
{
  try
  {
    $this-> db = new PDO('mysql:host=localhost;dbname=' . MY_DB_NAME . ';charset=utf8', MY_DB_LOGIN, MY_DB_PWD);
  }
  catch (Exception $e)
  {
          die('Erreur accès base: ' . $e->getMessage());
  }
}
}

// Sous WAMP

//L'extension PDO : c'est un outil complet qui permet d'accéder à n'importe quel type de base de données. On peut donc l'utiliser pour se connecter aussi bien à MySQL qu'à Postgr)eSQL ou Oracle.
//$pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'utilisateur', 'mot_de_passe');
//   ***** hebergement en ligne connexion par :
//$bdd = new PDO('mysql:host=sql.hebergeur.com;dbname=mabase;charset=utf8', 'pierre.durand', 's3cr3t');

//******  * s'il y a une erreur */
//(vous vous êtes trompé de mot de passe ou de nom de base de données, par exemple), PHP risque d'afficher toute la ligne qui pose l'erreur, ce qui inclut le mot de passe !

// Vous ne voudriez pas que vos visiteurs puissent voir le mot de passe si une erreur survient lorsque votre site est en ligne. Il est préférable de traiter l'erreur. En cas d'erreur, PDO renvoie ce qu'on appelle une exception, qui permet de « capturer » l'erreur. Voici comment je vous propose de faire :


// //interrogation de la BDD

// $reponse = $bdd->query('SELECT * FROM clients');
// //$donnees est un array qui contient champ par champ les valeurs de la première entrée
// //$donnees = $reponse->fetch();

?>
<!-- https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-lisez-des-donnees -->