<?php
$name=$_POST['Nom'];
$pren=$_POST['Prenome'];
$email=$_POST['email'];
$class=$_POST['classe'];
$pass1 = $_POST['password1'];
$pass2 = $_POST['password2'];
$checkbox=$_POST['checkbox'];
$pseudo=$name+" "+$pren;
if(!empty($name) || !empty($pren) || !empty($email) || !empty($class) || !empty($pass1) || !empty($pass2) || !empty($checkbox)){

    $co = mysqli_connect("localhost", "root", "") or dir("erreur");
    mysqli_select_db($co, "onlineuniversityeducation") or die("erreur de selection de BD");

    $req = "select * from utilisateur where u_nom='$name', u_prenom='$pren', u_email='$email', u_pwd='$pass1', u_pseudo='$pseudo'";
    $req_Class="select * from classe where clas_libelle='$class'";
    $res = mysqli_query($co,$req); 
    $res_class = mysqli_query($co,$req_Class); 
    $enreg = mysqli_fetch_assoc($res);
    
    if($pass1=$pass2){
        $INSERT_U = "INSERT Into utilisateur values (u_nom,u_prenom,u_email,u_pwd,u_pseudo)";
        $INSERT_C = "INSERT Into classe values ($class)";
     }else {
     echo "Passwords do not match";
    }
    }



