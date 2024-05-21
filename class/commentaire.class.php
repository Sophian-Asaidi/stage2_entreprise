<?php

require_once '../include/bdd.inc.php';

class commentaire {

    private $con;
    private $id_commentaire;
    private $contenu;
    private $date_commentaire;
    private $id_article;
    private $id_utilisateur;

    public function __construct($c) {
        $this->con = $c;
    }

    
    public function getIdCommentaire() {
        return $this->id_commentaire;
    }
// Getter et Setter pour $contenu
    public function getContenu() {
        return $this->contenu;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }

// Getter et Setter pour $date_commentaire
    public function getDateCommentaire() {
        return $this->date_commentaire;
    }

    public function setDateCommentaire($datecom) {
        $this->date_commentaire = $datecom;
    }

// Getter et Setter pour $id_article
    public function getIdArticle() {
        return $this->id_article;
    }

    public function setIdArticle($id_article) {
        $this->id_article = $id_article;
    }

// Getter et Setter pour $id_utilisateur
    public function getIdUtilisateur() {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

}
