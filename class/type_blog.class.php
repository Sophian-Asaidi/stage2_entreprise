<?php

require_once '../include/bdd.inc.php';

class TypeBlog {

    private $con;
    private $id_type_blog;
    private $lib_type_blog;

    // Constructeur
    public function __construct($c) {
        $this->con = $c;
    }
    
    public function getIdTypeBlog() {
        return $this->id_type_blog;
        
    }
    
    public function getLibTypeBlog() {
        return $this->lib_type_blog;
        
    }
    
    public function setIdTypeBlog($l) {
        $this->id_type_blog = $l;
        
    }
    
    public function setLibTypeBlog($l) {
        $this->lib_type_blog = $l;
        
    }

    // Récupérer un type de blog par ID
    public static function getTypeBlogById($id) {
        $sql = "SELECT * FROM type_blog WHERE id_type_blog = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Insérer un type de blog
    public static function insertTypeblog($data) {
        $sql = "INSERT INTO type_blog (lib_type_blog) VALUES (:lib)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute($data);
    }

    // Mettre à jour un type de blog
    public static function updateTypeblog($id, $data) {
        $data[':id'] = $id;
        $sql = "UPDATE type_blog SET lib_type_blog = :lib WHERE id_type_blog = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->execute($data);
    }

    // Supprimer un type de blog par ID
    public static function deleteTypeblog($id) {
        $sql = "DELETE FROM type_blog WHERE id_type_blog = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([':id' => $id]);
    }

    // Récupérer tous les types de blogs
    public static function getAllTypesBlogs() {
        $sql = "SELECT * FROM type_blog";
        $stmt = $this->con->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
