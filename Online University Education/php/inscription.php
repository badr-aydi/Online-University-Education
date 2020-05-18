<?php

session_start();
header('location:inscription.php');


$co = mysqli_connect("localhost", "root", "") or die("erreur");
mysqli_select_db($co,"elue") or die("erreur de selection de BD");


$nom=$_POST['Nom'];
$prenom=$_POST['Prenome'];
$email=$_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
//$checkbox=$_POST['checkbox'];

$id="select * FROM utilisateur ORDER by id DESC";
$res1=mysqli_query($co,$id) or die("requete erone");
$enreg=mysqli_fetch_array($res1);
$n=$enreg[0]+1;

if($password1!=$password2){
    $INSERT_U = "INSERT INTO utilisateur values ('$n','e','$nom','$prenom','$email','$password1')"; 
    
    $res = mysqli_query($co,$INSERT_U)or die ("verifier ta requete INSERT_U".mysqli_error());
    if($res)
    echo("correctement insére");
   
 }else {
 echo "Passwords do not match";
}




