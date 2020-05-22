<?php

$co = mysqli_connect("localhost", "root", "") or die("erreur");
mysqli_select_db($co,"elue") or die("erreur de selection de BD");

if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["text"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $idDoc="select * FROM document ORDER by doc_id DESC";
    $res=mysqli_query($co,$idDoc) or die("requete erone");
    $enregID=mysqli_fetch_array($res);
    $docID=$enregID[0]+1;
    
    $sql = "INSERT INTO document VALUES('$docID','$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}



















/*
$text = $_POST['text'];
//$file = $_POST['file'];

$idDoc="select * FROM document ORDER by doc_id DESC";
$res=mysqli_query($co,$idDoc) or die("requete erone");
$enregID=mysqli_fetch_array($res);
$docID=$enregID[0]+1;
if(is)
    $save_doc = "INSERT INTO document values ('$docID','$text','image','imag')";

    $resulta = mysqli_query($co,$save_doc)or die ("verifier ta requete INSERT_U".mysqli_error());
    if($resulta){
    echo "oui";
}else{
    echo "non";
}
*/