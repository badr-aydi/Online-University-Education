<?php













$co = mysqli_connect("localhost", "root", "") or dir("erreur");
mysqli_select_db($co, "onlineuniversityeducation") or die("erreur de selection de BD");
$req = "select * from utilisateur";
$res = mysqli_query($co, $req);
$enreg = mysqli_fetch_assoc($res);
print_r($enreg);
