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
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
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
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////////////
            $req = "SELECT * FROM categorie";
            $resR=($this->db)->query($req);

            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'categorie');
            return $arr;
        }



        // Accès aux n premiers articles
        // Cette méthode retourne un tableau contenant les n permier articles de
        // la base sous la forme d'objets de la classe Article.
        function firstN(int $n) : array {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
            $req = "SELECT * FROM article LIMIT '$n'";
            $resR=($this->db)->query($req);

            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');
            return $arr;
            return array();
        }

        // Acces au n articles à partir de la reférence $ref
        // Cette méthode retourne un tableau contenant n  articles de
        // la base sous la forme d'objets de la classe Article.
        function get(int $ref)  {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
            $req = "SELECT * FROM article WHERE libelle = $ref";
            $resR=($this->db)->query($req);
            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');
            return $arr;


        }
/*
        // Acces à la référence qui suit la référence $ref dans l'ordre des références
        function next(int $ref) : int {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
            $req = "SELECT * FROM article WHERE ref > '$ref' LIMIT '1'";
            $resR=($this->db)->query($req);
            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');
            $refe = $arr[0]->ref;
            return $refe;

        }
*/
        // Acces aux n articles qui précèdent de $n la référence $ref dans l'ordre des références
        function prevN(int $ref,int $n): array {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
            $req = "SELECT * FROM (SELECT * FROM article WHERE ref < '$ref' ORDER by ref desC LIMIT '$n' ) ORDER BY ref ASC";
            $resR=($this->db)->query($req);
            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');
            return $arr;
            return array();
        }



        // Acces à une catégorie
        // Retourne un objet de la classe Categorie connaissant son identifiant
        function getCat(int $id): categorie {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////////////
            $req = "SELECT * FROM categorie WHERE id ='$id' ";
            $resR=($this->db)->query($req);

            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'categorie');
            return $arr;
        }

        // Acces à un lieu
        // Retourne un objet de la classe Lieu connaissant son identifiant
        function getLieu(int $id) {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////////////
            $req = "SELECT * FROM lieu WHERE article =$id ";
            $resR=($this->db)->query($req);

            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'lieu');
            return $arr;
        }



        // Acces au n articles à partir de la reférence $ref
        // Retourne une table d'objets de la classe Article
        function getNCateg(int $categorie) : array {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////////////
            $req = "SELECT * FROM article WHERE categorie ='$categorie' ";
            $resR=($this->db)->query($req);

            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');
            return $arr;
        }

        function getChercher(string $categorie, string $lieu, string $marque, int $prixMIN, int $prixMAX)  {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////////////
            $req = "SELECT libelle, nom_produit, categorie, marque, prix, photo FROM categorie,lieu,article WHERE nom =$categorie and lieu_dispo ='$lieu' and marque ='$marque' and prix >$prixMIN and prix <$prixMAX";


            $resR=($this->db)->query($req);
            
            $arr=$resR->fetchAll(PDO::FETCH_CLASS,'article');
            return $arr;
        }

    }

    ?>
