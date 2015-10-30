<?php
header("Content-type:application/jSon");

require_once("NobetciEczane.class.php"); // Sınıfımızı Sayfamıza Dahil Ettik 

$eczane = new NobetciEczane("erzurum"); // Sınıfı Başlattık 


/**
* 
* Verileri json,array,text olarak çekebiliriz.
* Text olarak çektiğimiz verilere özel ayraçlar kullanılmıştır bu ayraçlardan bölme yaparak kullanabilirsiniz.
* 
*/
echo $eczane->Getir("json"); // Nöbetçi Eczanelerimizi jSon Olarak Çektik 



?>
