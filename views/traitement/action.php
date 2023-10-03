<?php
require_once "../../controller/controller.php";
require_once "../../model/database.php";

if(isset($_POST['inscription'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
    UserController::loadModel("inscription", [$nom, $prenom, $pseudo, $email, $passwordHash]);
}

if(isset($_POST['connexion'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    UserController::loadModel("connexion", [$email, $password]);
}