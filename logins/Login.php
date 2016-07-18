<?php
/**
 * Created by PhpStorm.
 * User: putuguna
 * Date: 7/18/2016
 * Time: 8:09 AM
 */
require_once ("../connection/ConnectionDB.php");
class Login {
    function loginToYourDashboard(){
        $connection = new ConnectionDB();
        $conn = $connection->getConnection();

        try{
            if(isset($_POST['submit'])){
                if(empty($_POST['username']) || empty($_POST['password'])){
                    header('Location: UsernamePasswordWrong.php');
                }else{
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $sql = "SELECT * FROM login";
                    $result = $conn->prepare($sql);
                    $result->execute();

                    foreach($result as $data){
                        if($username!=$data['username']){
                            header('Location: UsernamePasswordWrong.php');
                        }else if($password!=$data['password']){
                            header('Location: UsernamePasswordWrong.php');
                        }else{
                            session_start(); // turn the session on
                            $_SESSION['username'] = $username; // use username as the session
                            header('Location: FormLogin.php');
                        }
                    }
                }
            }
        }catch (PDOException $e){
            echo "ERROR : " . $e->getMessage();
        }
    }
}

$login = new Login();
$login->loginToYourDashboard();