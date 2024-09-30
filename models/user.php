<?php
require_once'models/database.php';
class User
    {
        //função para localizar uruário pelo email
        public static function findByEmail($email){
            $conn = database::getConnection();
            $stmt = $conn->prepare("SELECT*FROM usúarios WHERE email = :email");
            $stmt->execute(['email' => $email]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        // função para encontrar usuário pelo ID
        public static function find ($id){
            $conn = database::getConnection();
            $stmt = $conn->prepare("SELECT*FROM usuarios WHERE id = :id");
            $stmt->execute(['id => $id']);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        // função para criar um novo usuário no banco de dados
        public static function create($data){
            $conn = database::getConnection();
            $stmt = $conn->prepare("");
            $stmt = $conn->prepare("INSERT INTO usuarios
             (nome, email, senha, perfil) VALUES (nome, email, senha, perfil)");
             $stmt->execute($data);
             
 
        }
    }
 
?>