<?php

require_once '../include/bdd.inc.php';

class utilisateur {

    private $con;
    private $id_utilisateur;
    private $nom_utilisateur;
    private $prenom_utilisateur;
    private $mail_utilisateur;
    private $ville_utilisateur;
    private $code_utilisateur;
    private $pass_utilisateur;

    public function __construct($c) {
        $this->con = $c;
    }

    // Getters
    public function getIdUtilisateur() {
        return $this->id_utilisateur;
    }

    public function getNomUtilisateur() {
        return $this->nom_utilisateur;
    }

    public function getPrenomUtilisateur() {
        return $this->prenom_utilisateur;
    }

    public function getCodeUtilisateur() {
        return $this->code_utilisateur;
    }

    public function getVilleUtilisateur() {
        return $this->ville_utilisateur;
    }

    public function getMailUtilisateur() {
        return $this->mail_utilisateur;
    }

    public function getPassUtilisateur() {
        return $this->pass_utilisateur;
    }

    // Setters
    public function setNomUtilisateur($l) {
        $this->nom_utilisateur = $l;
    }

    public function setPrenomutilisateur($l) {
        $this->prenom_utilisateur = $l;
    }

    public function setCodeUtilisateur($l) {
        $this->code_utilisateur = $l;
    }

    public function setVilleUtilisateur($l) {
        $this->ville_utilisateur = $l;
    }

    public function setMailUtilisateur($l) {
        $this->mail_utilisateur = $l;
    }

    public function setPassUtilisateur($l) {
        $this->pass_utilisateur = $l;
    }

    
    
    public function insertUtilisateur($nom, $prenom, $cop, $vil, $mail, $pass) {
        $data = [
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":cop" => $cop,
            ":vil" => $vil,
            ":mail" => $mail,
            ":pass" => $pass
        ];

        $sql = "INSERT INTO utilisateur (nom_utilisateur, prenom_utilisateur, code_utilisateur, ville_utilisateur, mail_utilisateur, pass_utilisateur)
        VALUES (:nom, :prenom, :cop, :vil, :mail, :pass)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute($data);
    }

    public function updateUtilisateur($id, $nom, $prenom, $cop, $vil, $mail, $pass) {
        $data = [
            ":idu" => $id,
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":cop" => $cop,
            ":vil" => $vil,
            ":mail" => $mail,
            ":pass" => $pass
        ];

        $sql = "UPDATE utilisateur SET nom_utilisateur = :nom, prenom_utilisateur = :prenom, code_utilisateur = :cop, ville_utilisateur = :vil,
        mail_utilisateur = :mail, pass_utilisateur = :pass
        WHERE id_utilisateur = :idu";

        $stmt = $this->con->prepare($sql);
        $stmt->execute($data);
    }

    public function deleteUtilisateur($id) {
        $data = [":idu" => $id];

        $sql = "DELETE FROM utilisateur WHERE id_utilisateur = :idu";

        $stmt = $this->con->prepare($sql);
        $stmt->execute($data);
    }

}

?>