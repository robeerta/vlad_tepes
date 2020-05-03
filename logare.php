<?php
$conexiune=new mysqli('localhost','id13523907_dracula_user','#Nut#123456789','id13523907_dracula_bd');
if(mysqli_connect_errno()){
    exit('Conectare esuata: '.mysqli_connect_error());
}
else{
    $utilizator1=$_POST['user'];
    $parola1=$_POST['pass'];
    $rezultat=$conexiune->query("SELECT * FROM useri WHERE username='$utilizator1' AND parola='$parola1'");
    if ($rezultat->num_rows > 0) {
           if($utilizator1=="admin")
              echo '<script language="JavaScript"> self.close(); window.open("admin.html"); </script>';
            else
              echo '<script language="JavaScript"> self.close(); window.open("index1.html"); </script>';
              
	     }
    else 
    echo '<script language="JavaScript">alert("Utilizator sau parola incorecte");self.close(); window.open("index.html"); </script> ';
}
$conexiune->close();

?>