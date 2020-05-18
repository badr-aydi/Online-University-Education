<?php
$co = mysqli_connect("localhost", "root", "") or die("erreur");
mysqli_select_db($co,"onlineuniversityeducation") or die("erreur de selection de BD");
$name=$_POST['Nom'];
$pren=$_POST['Prenome'];
$email=$_POST['email'];

//$class=$_POST['classe'];

$pass1 = $_POST['password1'];

$pass2 = $_POST['password2'];
//$checkbox=$_POST['checkbox'];

$id="select * FROM etudient ORDER by id DESC";
$res1=mysqli_query($co,$id) or die("requete erone");
$enreg=mysqli_fetch_array($res1);
$n=$enreg[0]+1;
/*$INSERT_U = "INSERT Into etudient  (nom,pre.nom,email,pwd) values ($name,$pren,$email,$pass1)";*/
//$INSERT_U = "INSERT INTO etudient values ('$n','$name','$pren','$email','$pass1')";
if($pass1==$pass2){
    $INSERT_U = "INSERT INTO etudient values ('$n','$name','$pren','$email','$pass1')"; 
    
    $res = mysqli_query($co,$INSERT_U)or die ("verifier ta requete INSERT_U".mysqli_error());
    if($res)
    echo("correctement insére");
    
 }else {
 echo "Passwords do not match";
}
//$res = mysqli_query($co,$INSERT_U);

   
    
    /*
$pseudo=$name+" "+$pren;
if(!empty($name) || !empty($pren) || !empty($email) || !empty($class) || !empty($pass1) || !empty($pass2) || !empty($checkbox)){

    $co = mysqli_connect("localhost", "root", "") or dir("erreur");
    mysqli_select_db($co, "onlineuniversityeducation") or die("erreur de selection de BD");

    $req = "select * from utilisateur where u_nom='$name', u_prenom='$pren', u_email='$email', u_pwd='$pass1', u_pseudo='$pseudo'";
    $req_Class="select * from classe where clas_libelle='$class'";
    $res = mysqli_query($co,$req); 
    $res_class = mysqli_query($co,$req_Class); 
    $enreg = mysqli_fetch_assoc($res);
    
    
*/


