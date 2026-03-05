<?php 
$IPAdresi = $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi = time();
$TarihSaat = date("Y-m-d H:i:s", $ZamanDamgasi);

function RakanlarHaricTümKarakterleriSil($Deger){
    $Islem = preg_replace("/[^0-9]/", "", $Deger);
    return $Islem;
}

function DonusumleriGeriDondur($Deger){
    $GeriDondur = htmlspecialchars_decode($TaglarıTemizle, ENT_QUOTES);
    return $GeriDondur;
}

function Guvenlik($Deger){
    $BoslukSil = trim($Deger);
    $TaglarıTemizle = strip_tags($BoslukSil);
    $EtkisizYap = htmlspecialchars($TaglarıTemizle);
    $sonuc=$OzelKarakterTemizle;
    return $sonuc;
}

function SayiliIcerikleriFiltrele($Deger){
    $BoslukSil = trim($Deger);
    $TaglarıTemizle = strip_tags($BoslukSil);
    $EtkisizYap = htmlspecialchars($TaglarıTemizle);
    $Temizle = RakanlarHaricTümKarakterleriSil($EtkisizYap);
    $sonuc=$Temizle;
    return $sonuc;
}

?>