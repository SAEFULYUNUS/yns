<?php  
 include 'pegawai.php'; 
 $params = new Pegawai(); 
  
 $data_pegawai = $params::list_pegawai(); 
  
 foreach($data_pegawai as $list){ 
     echo $list."<br>"; 
 } 
  
 ?>