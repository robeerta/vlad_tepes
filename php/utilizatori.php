<?php
$conexiune=new mysqli('localhost','id13523907_dracula_user','#Nut#123456789','id13523907_dracula_bd');
if(mysqli_connect_errno()){
    exit('Conectare esuata: '.mysqli_connect_error());
}
else{
 echo '<body background="imagini/21.jpg" text="white">';

 
  echo '<h2>Utilizatori</h2>';
 echo '<ol>';
 $rezultat = $conexiune->query("SELECT * FROM useri ");
 if ($rezultat->num_rows > 0)
 {   
     while($linie = $rezultat->fetch_assoc())
      {  
       $nume=$linie['nume'];
       $prenume=$linie['prenume'];
       $user=$linie['username'];
       $parola=$linie['parola'];
       $email=$linie['email'];
       echo '<li>Nume: <b>'.$nume.'</b> Prenume: <b>'.$prenume.'</b> User: <b>'.$user.'</b> Parolă: <b>'.$parola.'</b> Email: <b>'.$email.'</b><BR><BR></li>';
     }
   }
   echo '</ol>';
 echo '<h2 style="text-align:center;"><a href="admin.html">Înapoi la pagina administrator</a></h2>';  
 echo '</body>';
}
$conexiune->close();
?>