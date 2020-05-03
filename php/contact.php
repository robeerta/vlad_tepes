<?php
$conexiune=new mysqli('localhost','id13523907_dracula_user','#Nut#123456789','id13523907_dracula_bd');
if(mysqli_connect_errno()){
    exit('Conectare esuata: '.mysqli_connect_error());
}
else{
    $nume1=$_POST['name'];
    $email1=$_POST['email'];
    $mesaj1=$_POST['comments'];
    
    $today=getdate();
    $data=$today['mday'].'/'.$today['mon'].'/'.$today['year'];
    $today['hours']=$today['hours']+3;//se obtine ora Romaniei
    $ora=$today['hours'].':'.$today['minutes'].':'.$today['seconds'];
    
    $rezultat=$conexiune->query("INSERT INTO contact (nume_prenume,email,mesaj,data,ora) VALUES ('$nume1','$email1','$mesaj1','$data','$ora')");
}
$conexiune->close();

?>