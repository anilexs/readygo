<?php
require_once "database.php";
define("DOMAINNAME", "localhost");
class User {
    public static function userInfo($user_id){
        $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM users WHERE id_user = ?");
        try{
            $request->execute(array($user_id));
            $user = $request->fetch(PDO::FETCH_ASSOC);
            $user['sold'] = str_replace('.', ',', $user['sold']);
            return $user;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public static function inscription($nom, $prenom, $pseudo, $email, $password){
        $db = Database::dbConnect();
        $request = $db->prepare("INSERT INTO `users` (nom, prenom, pseudo, email, password) VALUES (?,?,?,?,?)");
        try{
            $request->execute(array($nom, $prenom, $pseudo, $email, $password));
            header('Location: http://localhost/readygo/');
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public static function connexion($email, $password){
        $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM users WHERE email = ?");
        
        try {
            $request->execute(array($email, $password));
            $user = $request->fetch(PDO::FETCH_ASSOC);
            if(empty($user)){
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }else{
                if(password_verify($password, $user['password'])){
                    setcookie("user_id", $user['id_user'], time() + 30, "/", DOMAINNAME);
                    header('Location: http://localhost/readygo/');
                }else{
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}