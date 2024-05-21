<?php

require_once '../include/bdd.inc.php';

class article {

    private $con;
    private $id_article;
    private $titre_article;
    private $sujet_article;
    private $datep_article;

    public function __construct($c) {
        $this->con = $c;
    }

    // Getters
    public function getIdarticle() {
        return $this->id_article;
    }

    public function gettitrearticle() {
        return $this->titre_article;
    }

    public function getsujetarticle() {
        return $this->sujet_article;
    }
    
    public function getdateparticle() {
        return $this->datep_article;
    }

    // Setters
    public function settitrearticle($l) {
        $this->titre_article = $l;
    }

    public function setsujetarticle($l) {
        $this->sujet_article = $l;
    }

    public function setdateparticle($l) {
        $this->datep_article = $l;
    }

    public function insertarticle($titre, $sujet, $datep) {
        $data = [
            ":titre" => $titre,
            ":sujet" => $sujet,
            ":datep" => $datep
        ];

        $sql = "INSERT INTO article (titre_article, sujet_article, date_publication)
        VALUES (:titre, :sujet, :datep)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute($data);
    }

    public function updatearticle($id, $titre, $sujet, $datep) {
        $data = [
            ":ida" => $id,
            ":titre" => $titre,
            ":sujet" => $sujet,
            ":datep" => $datep
        ];

        $sql = "UPDATE article SET titre_article = :titre, sujet_article = :sujet, 
        date_publication = :datep
        WHERE id_article = :ida";

        $stmt = $this->con->prepare($sql);
        $stmt->execute($data);
    }

    public function deletearticle($id) {
        $data = [":ida" => $id];

        $sql = "DELETE FROM article WHERE id_article = :ida";

        $stmt = $this->con->prepare($sql);
        $stmt->execute($data);
    }

}

?>