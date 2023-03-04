<?php 
  
 Class Kendaraan {  
     var $warna;  
     var $jenis; 
     var $bahan_bakar;  
     public function berjalan_maju(){ 
        echo 'saya bisa berjalan maju'; 
     } 
  
     public function berjalan_belok(){ 
         echo 'saya bisa berjalan belok'; 
     } 
  
     public function mundur(){ 
         echo 'saya bisa berjalan mundur'; 
      }  
  
 } 
  
 Class MakhlukHidup { 
     var $pernapasan = 'Paru-paru'; 
  
     public function bernafas(){   
         echo 'saya bernapas dengan '.$this->pernapasan; 
     } 
  
     public function makan(){ 
         echo 'saya makan nasi'; 
     } 
 } 
  
 $mobil = new Kendaraan();  
 $manusia = new MakhlukHidup(); 
 $manusia->bernafas(); 
  
 ?>