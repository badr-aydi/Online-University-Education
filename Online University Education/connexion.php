<?php
session_start();

$co = mysqli_connect("localhost", "root", "") or die("erreur");
mysqli_select_db($co,"elue") or die("erreur de selection de BD");

$email=$_POST['email'];
$password = $_POST['password'];





$req = "select * from utilisateur where email='$email' && password='$password'";
$res = mysqli_query($co, $req);
$enreg = mysqli_fetch_array($res);

$type = "select type from utilisateur";

if($enreg){
   if($type = 'a'){
        header('location:./BACK OFFICE.html');
    }elseif($type = 'e'){
        header('location:./FRONT OFFICE.html');
    }
   
}else{
    header('location:connexion.html');
}
