<?php

require_once "config.php";

class AutorModel{
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';charset='.DB_Charset,DB_USER,DB_PASS );
    }
     
    function getAll(){
        $query = $this->db->prepare('SELECT * FROM autores'); 
        $query->execute();
        $libros = $query->fetchAll(PDO::FETCH_OBJ);
        return $libros;
    }

    function getAutores(){
        $query = $this->db->prepare('SELECT * FROM autores'); 
        $query->execute();
        $autores = $query->fetchAll(PDO::FETCH_OBJ);
        return $autores;
    }

    function getAutorId($id){
        $query = $this->db->prepare('SELECT * FROM autores WHERE id=?'); 
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function insertAutor($autor, $universidad){
        $query = $this->db->prepare("INSERT INTO autores(nombre, universidad) VALUES(?,?)");
        $query->execute([$autor, $universidad]);
    }
    function updateAutor($nombre, $universidad, $id){
        $query = $this->db->prepare("UPDATE autores SET nombre=?, universidad=? WHERE id=?");
        $query->execute([$nombre, $universidad, $id]);
    }
    function deleteAutor($id){
        $query = $this->db->prepare("DELETE FROM autores WHERE id=?");
        $query->execute([$id]);
    }

    function getAutor($id){
        $query = $this->db->prepare("SELECT * FROM autores WHERE id=?");
        $query->execute([$id]);
        $autor = $query->fetch(PDO::FETCH_OBJ);
        return $autor;
    }
}