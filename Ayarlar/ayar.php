<?php   
try {

    $VeriTabaniBaglantisi = new PDO("mysql:host=localhost;dbname=phpayakkabi;charset=utf8mb4", "root", "");
    

} catch (PDOException $hata) {
   // echo "Bağlantı hatası: " . $hata->getMessage(); // bu alanı kapattık cunku sıte hata yaparsa kullanıcılar bu hatayı görmesin
    die();
}

$AyarlarSorgusu = $VeriTabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi = $AyarlarSorgusu->rowCount();
$Ayar = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);

if ($AyarSayisi > 0) {
$SiteAdi             = $Ayar["SiteAdi"];
$SiteBaslik          = $Ayar["SiteTitle"];
$SiteAciklama        = $Ayar["SiteDesciription"];
$SiteAnahtarKelime   = $Ayar["SiteKeywords"];
$SiteTelifHakki      = $Ayar["SiteCopyrigthMetni"];
$SiteLogosu          = $Ayar["SiteLogosu"];
$SiteEmail           = $Ayar["SiteEmail"];
$SiteEmailSifresi    = $Ayar["SiteEmailSifresi"];
}
else {
    // echo "Site ayar sorgusu hatası";   // bu alanı kapattık cunku sıte hata yaparsa kullanıcılar bu hatayı görmesin
    die();
}

?>