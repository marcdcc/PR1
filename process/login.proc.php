<?php 

if (isset($_POST['nom_user']) && isset($_POST['password_user'])) {
    require_once '../services/conexion.php';
    $nom_user=$_POST['nom_user'];
    $password_user=$_POST['password_user'];
    $stmt = $pdo->prepare("SELECT * FROM tbl_users WHERE nom_user='$nom_user' and password_user='{$password_user}'");
    $stmt->execute();
    $comprobar=$stmt->fetchAll(PDO::FETCH_ASSOC);
    try {
        if (!$comprobar=="") {
            session_start();
            $_SESSION['nom_user']=$nom_user;

            header("location: ../view/vista.php");
        }else {
            session_start();
            $_SESSION['error']=1;
            header("location: ../view/login.php");
            
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}else{
    header("location: ../view/login.php");
}

/*if($_POST){
    session_start();
    require('../services/config.php');
    $conexion = '';
    $nom_user = $_POST['nom_user'];
    $password_user = $_POST['password_user'];
    $conexion->setAtributte(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion->prepare("SELECT * FROM usuarios WHERE nom_user=:nom_user AND password_user=:password_user");
    $query->bindParam(":nom_user", $nom_user);
    $query->bindParam(":password_user", $password_user);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        $_SESSION['usuario'] = $usuario["nom_user"];
        header("Location:../view/vista.php");
    }else{
        echo "Usuario o password inválidos";
    }
}

?>*/