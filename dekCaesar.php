<?php
 $kalimat = $_GET["kata"];
 $key = $_GET["key"];
 $nmfile = "enkripsi.txt";
 $fp = fopen($nmfile,"r"); // buka file hasil enkripsi
 $isi = fread($fp,filesize($nmfile));

 for($i=0;$i<strlen($kalimat);$i++)
 {
 $kode[$i]=ord($kalimat[$i]); // rubah ASII ke desimal
 $b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
 $c[$i]=chr($b[$i]); //rubah desimal ke ASCII
 }
 echo "kalimat ciphertext : ";
 for($i=0;$i<strlen($kalimat);$i++)
 {
 echo $kalimat[$i];
 }
 echo "<br>";
 echo "hasil dekripsi =";
 for ($i=0;$i<strlen($isi);$i++)
 {
 echo $c[$i];
 }
 echo "<br>";
?> 