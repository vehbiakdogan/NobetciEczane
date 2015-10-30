# NobetciEczane
Php ile Günlük Nöbetçi Eczane Listesini Json,Text,Array Olarak Veren Php Sınıfı

Eczanelere Ait Veriler <a href="http://hastanebul.com.tr" target="_blank">hastanebul.com.tr</a>  Sitesinden Alınmıştır. 

<h2>Çalışma Mantığı</h2>

Öncelikle Php Sınıfımızı Sayfaya Dahil Edelim.

``php
require_once("NobetciEczane.class.php");
``
Daha Sonra Sınıfımızı Başlatalım. 
``php

$eczane = new NobetciEczane("erzurum"); // Hangi İli İstiyorsak Parametre Olarak O ili Verelim

``

Daha Sonra Nöbetçi Eczanelerimizi Çekelim.

``php
echo $eczane->Getir("json"); // json,array,text Veri Türünde Verilerimizi Çekebiliriz.

``

Genel Olarak Tam Kodumuz Şöyle. 
``php

header("Content-type:application/jSon");

require_once("NobetciEczane.class.php"); // Sınıfımızı Sayfamıza Dahil Ettik 

$eczane = new NobetciEczane("erzurum"); // Sınıfı Başlattık 

echo $eczane->Getir("json"); // Nöbetçi Eczanelerimizi jSon Olarak Çektik 




``
