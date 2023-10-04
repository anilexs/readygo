<?php
require_once "database.php";
define("DOMAINNAME", "localhost");
define("HOST", "http://localhost/readygo/");
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
            header('Location: ' . HOST);
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public static function connexion($email, $password){
        $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM users WHERE email = ?");
        
        try {
            $request->execute(array($email));
            $user = $request->fetch(PDO::FETCH_ASSOC);
            if(empty($user)){
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                echo "rip" . $user['password'];
            }else{
                if(password_verify($password, $user['password'])){
                    setcookie("user_id", $user['id_user'], time() + 3600, "/", DOMAINNAME);
                    header('Location: ' . HOST);
                }else{
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}