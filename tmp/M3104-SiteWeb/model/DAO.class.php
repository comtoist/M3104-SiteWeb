<?php

require_once("../model/Categorie.class.php");
require_once("../model/Article.class.php");
require_once("../model/Lieu.class.php");

// Creation de l'unique objet DAO
$dao = new DAO();

// Le Data Access Object
// Il représente la base de donnée
class DAO {
  // L'objet local PDO de la base de donnée
  private $db;
  // Le type, le chemin et le nom de la base de donnée
  private $database = 'sqlite:../data/projet.db';

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    try {
      $this->db = new PDO($this->database);
    }
    catch (PDOException $e){
      die("erreur de connexion:".$e->getMessage());
    }


  }


  // Accès à toutes les catégories
  // Retourne une table d'objets de type Categorie
  function getAllCat() : array {
    $req = "SELECT * FROM categorie";
    $resR=($this->db)->query($req);

    $arr=$resR->fetchAll(PDO::FETCH_CLASS,'categorie');
    return $arr;
  }


  // Acces au n articles à partir de la reférence $ref
  // Cette méthode retourne un tableau contenant n  articles de
  // la base sous la forme d'objets de la classe Article.
  function get(int $ref)  {
    $req = "SELECT * FROM article WHERE libelle = $ref";
    $resR=($this->db)->query($req);
    $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');
    return $arr;


  }


// Acces à un lieu
// Retourne un objet de la classe Lieu connaissant son identifiant
function getLieu(int $id) {
  $req = "SELECT * FROM lieu WHERE article =$id ";
  $resR=($this->db)->query($req);

  $arr=$resR->fetchAll(PDO::FETCH_CLASS,'lieu');

  return $arr;
}



// Acces au n articles à partir de la reférence $ref
// Retourne une table d'objets de la classe Article
function getNCateg(int $categorie) : array {
  $req = "SELECT * FROM article WHERE categorie ='$categorie' ";
  $resR=($this->db)->query($req);
  $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');

  return $arr;
}

function getChercher(string $categorie, string $lieu, string $marque, int $prixMIN, int $prixMAX) : array  {

  $req = "SELECT distinct a.libelle, nom_produit, categorie, marque, prix, photo FROM lieu l,article a WHERE a.categorie  = $categorie AND a.marque ='$marque'  AND l.lieu_dispo ='$lieu' AND a.prix<$prixMAX AND a.prix>$prixMIN";

  $resR=($this->db)->query($req);
  $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');
  return $arr;
  }
}

?>
