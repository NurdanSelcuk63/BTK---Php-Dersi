<?php 
$IPAdresi = $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi = time();
$TarihSaat = date("Y-m-d H:i:s", $ZamanDamgasi);


function Guvenlik($Deger){
    $BoslukSil = trim($Deger);
    $TaglarıTemizle = strip_tags($BoslukSil);
    $OzelKarakterTemizle = htmlspecialchars($TaglarıTemizle);
    $sonuc=$OzelKarakterTemizle;
    return $sonuc;
}

?>