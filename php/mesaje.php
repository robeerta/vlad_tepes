<?php
$conexiune=new mysqli('localhost','id13523907_dracula_user','#Nut#123456789','id13523907_dracula_bd');
if(mysqli_connect_errno()){
    exit('Conectare esuata: '.mysqli_connect_error());
}
else{
 echo '<body background="imagini/21.jpg" text="white">';

 
  echo '<h2>Mesaje</h2>';
 echo '<ol>';
 $rezultat = $conexiune->query("SELECT * FROM contact ");
 if ($rezultat->num_rows > 0)
 {   
     while($linie = $rezultat->fetch_assoc())
      {  
       $nume_prenume=$linie['nume_prenume'];
       $email=$linie['email'];
       $mesaj=$linie['mesaj'];
       $data=$linie['data'];
       $ora=$linie['ora'];
       echo '<li>Numele și prenumele: <b>'.$nume_prenume.'</b> Email : <b>'.$email.'</b> Mesaj: <b>'.$mesaj.'</b> Data: <b>'.$data.'</b> Ora: <b>'.$ora.'</b><BR><BR></li>';
     }
   }
   echo '</ol>';
 echo '<h2 style="text-align:center;"><a href="admin.html">Înapoi la pagina administrator</a></h2>';  
 echo '</body>';
}
$conexiune->close();
?>