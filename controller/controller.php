<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . "/readygo/model/database.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/readygo/model/userModel.php";

class UserController{
    // methode pour effectuer la bonne action
    public static function loadModel($action, $data = null){
        switch($action){
            case "userinfo":
                $userInfo = User::userInfo($data);
                return $userInfo;
                break;
            case "inscription":
                User::inscription($data[0], $data[1], $data[2], $data[3], $data[4]);
                break;
            case "connexion":
                User::connexion($data[0], $data[1]);
                break;
            default:
                echo json_encode([
                    "status" => 404,
                    "message" => "service not found..."
                ]);
                break;
        }
    }
}