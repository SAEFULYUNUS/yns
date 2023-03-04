<?php 
 $host = 'localhost'; 
 $db = 'db_siswa'; 
 $user = 'root'; 
 $pass = ''; 
  
 $conn = new PDO('mysql:host='.$host.';dbname='.$db.'', $user, $pass);   
 if($conn){ 
     echo 'connect'; 
 }else{ 
     echo 'not connect'; 
 } 
  
 ?>