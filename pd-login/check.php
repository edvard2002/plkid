<?php
require_once 'config.php';
session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $myid = $password = "";
    $id_err = $password_err = $empty_err = "";
    
    if(empty($_POST["regcode"]) || empty($_POST['password'])){
        $empty_err = 'Вводимые поля пусты';
                    $_SESSION['empty_err'] = $empty_err; 
                    header("location: index.php");
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $myid = trim($_POST["regcode"]);
    
        $password = trim($_POST['password']);
        if(empty($id_err) && empty($password_err)){
            $sql = "SELECT * FROM user WHERE regcode=".$myid;
            $result= $link->query($sql);
            if ($result-> num_rows > 0)
            {
                $row = $result->fetch_assoc();
                if($row['pwd']!=$password)
                {
    
                    $password_err = 'Введенный пароль неправильный.';
                    $_SESSION['password_err'] = $password_err;
                    $_SESSION['id_err']='';
                    exit;
                    header("location: index.php");
                    
                }
                
                header("location: main.php");
                $_SESSION['username'] = $row['name']; 
                $_SESSION['id'] = $row['id']; 
                $_SESSION['regcode'] = $row['regcode'];  
                $_SESSION['password_err']='';
                $_SESSION['id_err']='';
            }
            else
            {
                $_SESSION['password_err']='';
                $id_err= 'Аккаунт с таким ID ненайден.';
                $_SESSION['id_err'] = $id_err;
                header("location: index.php");
            }
        }
        
        }
        mysqli_close($link);
    ?>