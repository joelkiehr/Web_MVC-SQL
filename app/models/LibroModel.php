<?php

require_once "config.php";

class LibroModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';charset='.DB_Charset,DB_USER,DB_PASS );
    }
     
    function getLibros(){
        $query = $this->db->prepare('SELECT * FROM libros');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    } 

    function getAll(){
        $query = $this->db->prepare('SELECT * FROM libros'); 
        $query->execute();
        $libros = $query->fetchAll(PDO::FETCH_OBJ);
        return $libros;
    }

    function getFormLibros($id){
        $query = $this->db->prepare('SELECT * FROM libros WHERE id = ?');
        $query->execute([$id]);
        $libros = $query->fetch(PDO::FETCH_OBJ);
        return $libros;
    }

    function getLibroId($id){
        $query = $this->db->prepare('SELECT * FROM libros WHERE id=?'); 
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    //ABM;
    function insertLibro($nombre, $nombre_del_autor, $anio_publicacion, $descripcion){
        $query = $this->db->prepare("INSERT INTO libros(nombre, nombre_del_autor, anio_publicacion, descripcion) VALUES(?,?,?,?)");
        $query->execute([$nombre, $nombre_del_autor, $anio_publicacion, $descripcion]);
    }
    function updateLibro($nombre, $nombre_del_autor, $anio_publicacion, $descripcion, $id){
        $query = $this->db->prepare("UPDATE libros SET nombre=?, nombre_del_autor=?, anio_publicacion=?, descripcion=? WHERE id=?");
        $query->execute([$nombre, $nombre_del_autor, $anio_publicacion, $descripcion, $id]);
    }
    function deleteLibro($id){
        $query = $this->db->prepare("DELETE FROM libros WHERE id=?");
        $query->execute([$id]);
    }

}
