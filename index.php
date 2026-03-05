<?php
require_once "Ayarlar/ayar.php";
require_once "Ayarlar/Fonksiyonlar.php";
require_once "Ayarlar/sitesayfalari.php";

if (isset($_REQUEST["SK"])) {
    $SayfaKoduDegeri = $_REQUEST["SK"];
} else {
    $SayfaKoduDegeri = 0;
}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="Robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $SiteBaslik; ?> </title>
    <meta name="Description" content="<?php echo $SiteAciklama; ?>">
    <meta name="Keywords" content="<?php echo $SiteAnahtarKelime; ?>">
    <script src="Frameworks/JQuery/jquery-4.0.0.js" language="javascript"></script>
    <script type="text/javascript" src="Ayarlar/Fonksiyonlar.js" language="javascript"></script>
    <link rel="icon" type="image/png" href="Görseller/Logo.png">
    <link type="text/css" rel="stylesheet" href="Ayarlar/stil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="margin: 0; padding: 0;">
    <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif;">
        
        <tr bgcolor="#bc1010">
            <td height="40" align="center">
                <img src="Görseller/manşet.png" alt="Manşet Görseli" style="display: block;">
            </td>
        </tr>

        <tr>
            <td bgcolor="#fdf2f8" height="45" align="right" style="padding-right: 20px; border-bottom: 1px solid #f3e8ee;">
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="padding: 0 5px;">
                            <a href="xxxx"><img src="Görseller/UyeGirişi.png" width="22" border="0" style="vertical-align: middle;"></a>
                        </td>
                        <td style="padding-right: 20px;">
                            <a href="xxxx" style="text-decoration: none; color: #555; font-size: 13px; vertical-align: middle;">Giriş Yap</a>
                        </td>

                        <td style="padding: 0 5px;">
                            <a href="xxxx"><img src="Görseller/Uye Ol.png" width="22" border="0" style="vertical-align: middle;"></a>
                        </td>
                        <td style="padding-right: 20px;">
                            <a href="xxxx" style="text-decoration: none; color: #555; font-size: 13px; vertical-align: middle;">Yeni Üye Ol</a>
                        </td>

                        <td style="padding: 0 5px;">
                            <a href="xxxx"><img src="Görseller/sepet.png" width="22" border="0" style="vertical-align: middle;"></a>
                        </td>
                        <td>
                            <a href="xxxx" style="text-decoration: none; color: #555; font-size: 13px; vertical-align: middle;">Alışveriş Sepeti</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr bgcolor="#ffffff">
            <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="150" align="left" style="padding: 10px;"> 
                            <img src="Görseller/Logo.png" alt="logo" width="100" height="100">
                        </td>
                        <td align="right">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr align="right">
                                    <td class="anamenu" style="padding:15px;"><a href="#">Anasayfa</a></td>
                                    <td class="anamenu" style="padding:15px;"><a href="#">Topuklu Ayakkabı</a></td>
                                    <td class="anamenu" style="padding:15px;"><a href="#">Çizme</a></td>
                                    <td class="anamenu" style="padding:15px;"><a href="#">Babet</a></td>
                                    <td class="anamenu" style="padding:15px;"><a href="#">Sandalet</a></td>
                                    <td class="anamenu" style="padding:15px;"><a href="#">Spor Ayakkabı</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td align="center" style="padding: 20px 0;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" bgcolor="#f9f9f9" style="padding: 100px 0; border: 1px dashed #ccc;">
                          <?php
if (!$SayfaKoduDegeri || $SayfaKoduDegeri == "" || $SayfaKoduDegeri == 0) {
   include ($Sayfa[0]);
} else {
   include ($Sayfa[$SayfaKoduDegeri]);
}
?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        
       <tr>
    <td style="background-color: #ffffff; padding: 40px 0 20px 0; border-top: 2px solid #e2e2e2;">
        <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0" style="color: #555555; font-family: Arial, sans-serif; font-size: 13px;">
            <tr valign="top">


                <td width="200" style="padding: 0 15px;">
                    <p style="color: #333333; font-size: 15px; font-weight: bold; margin-bottom: 6px;">Kurumsal</p>
                    <div style="width: 120px; height: 2px; background-color: #bc1010; margin-bottom: 14px;"></div>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Hakkımızda</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Banka Hesaplarımız</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Havale Bildirim Formu</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Kargom Nerede</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">İletişim</a></p>
                </td>

              


                <td width="220" style="padding: 0 15px;">
                    <p style="color: #333333; font-size: 15px; font-weight: bold; margin-bottom: 6px;">Üyelik ve Hizmetler</p>
                    <div style="width: 120px; height: 2px; background-color: #bc1010; margin-bottom: 14px;"></div>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Yeni Üye Ol</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Giriş Yap</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Sık Sorulan Sorular</a></p>
                </td>

                


                <td width="250" style="padding: 0 15px;">
                    <p style="color: #333333; font-size: 15px; font-weight: bold; margin-bottom: 6px;">Sözleşmeler</p>
                    <div style="width: 120px; height: 2px; background-color: #bc1010; margin-bottom: 14px;"></div>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Üyelik Sözleşmesi</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Kullanım Koşulları</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Gizlilik Sözleşmesi</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Mesafeli Satış Sözleşmesi</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">Teslimat Koşulları</a></p>
                    <p style="margin: 7px 0;"><a href="#" style="color: #666666; text-decoration: none;">İptal İade Değişim Koşulları</a></p>
                </td>

               


                <td style="padding: 0 15px; text-align: center;">
                    <p style="color: #333333; font-size: 15px; font-weight: bold; margin-bottom: 6px;">Bizi Takip Edin</p>
                    <div style="width: 120px; height: 2px; background-color: #bc1010; margin: 0 auto 18px auto;"></div>
                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="padding: 5px;">
                                <a href="#" style="display:inline-block; width:38px; height:38px; line-height:38px; border-radius:50%; background:#1DA1F2; text-align:center; color:#fff; font-size:18px; text-decoration:none;">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </td>
                            <td style="padding: 5px;">
                                <a href="#" style="display:inline-block; width:38px; height:38px; line-height:38px; border-radius:50%; background:#1877F2; text-align:center; color:#fff; font-size:18px; text-decoration:none;">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </td>
                            <td style="padding: 5px;">
                                <a href="#" style="display:inline-block; width:38px; height:38px; line-height:38px; border-radius:50%; background:radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); text-align:center; color:#fff; font-size:18px; text-decoration:none;">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;">
                                <a href="#" style="display:inline-block; width:38px; height:38px; line-height:38px; border-radius:50%; background:#E60023; text-align:center; color:#fff; font-size:18px; text-decoration:none;">
                                    <i class="fa-brands fa-pinterest"></i>
                                </a>
                            </td>
                            <td style="padding: 5px;">
                                <a href="#" style="display:inline-block; width:38px; height:38px; line-height:38px; border-radius:50%; background:#FF0000; text-align:center; color:#fff; font-size:18px; text-decoration:none;">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </td>
                            <td style="padding: 5px;">
                                <a href="#" style="display:inline-block; width:38px; height:38px; line-height:38px; border-radius:50%; background:#25D366; text-align:center; color:#fff; font-size:18px; text-decoration:none;">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="8" style="padding: 20px 15px 10px 15px; border-top: 1px solid #e0e0e0; text-align: center;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:5px 10px; background:#fff;">
                                    <i class="fa-brands fa-cc-visa" style="color:#1A1F71; font-size:22px;"></i>
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:5px 10px; background:#fff;">
                                    <i class="fa-brands fa-cc-mastercard" style="color:#EB001B; font-size:22px;"></i>
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:5px 10px; background:#fff;">
                                    <i class="fa-brands fa-cc-amex" style="color:#2E77BC; font-size:22px;"></i>
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:5px 10px; background:#fff;">
                                    <i class="fa-brands fa-cc-paypal" style="color:#003087; font-size:22px;"></i>
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:6px 10px; background:#fff; font-size:11px; font-weight:bold; color:#333; vertical-align:middle;">
                                    <i class="fa-solid fa-lock" style="color:#2ecc71; margin-right:4px;"></i>3D Secure
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:6px 10px; background:#fff; font-size:11px; font-weight:bold; color:#333; vertical-align:middle;">
                                    <i class="fa-solid fa-shield-halved" style="color:#3498db; margin-right:4px;"></i>SSL
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:6px 10px; background:#fff; font-size:11px; font-weight:bold; color:#009640;">
                                    <i class="fa-solid fa-building-columns" style="margin-right:4px;"></i>Garanti
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:6px 10px; background:#fff; font-size:11px; font-weight:bold; color:#003087;">
                                    <i class="fa-solid fa-building-columns" style="margin-right:4px;"></i>İş Bankası
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:6px 10px; background:#fff; font-size:11px; font-weight:bold; color:#bc1010;">
                                    <i class="fa-solid fa-building-columns" style="margin-right:4px;"></i>Yapı Kredi
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:6px 10px; background:#fff; font-size:11px; font-weight:bold; color:#e67e22;">
                                    <i class="fa-solid fa-box" style="margin-right:4px;"></i>Yurtiçi
                                </div>
                            </td>

                            <td style="padding: 5px 8px;">
                                <div style="display:inline-block; border:1px solid #e0e0e0; border-radius:6px; padding:6px 10px; background:#fff; font-size:11px; font-weight:bold; color:#d35400;">
                                    <i class="fa-solid fa-truck" style="margin-right:4px;"></i>Aras
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="8" style="padding: 12px 0; border-top: 1px solid #e0e0e0; text-align: center; color: #aaaaaa; font-size: 12px;">
                    &copy; <?php echo date('Y'); ?> Tüm Hakları Saklıdır.
                </td>
            </tr>
        </table>
    </td>
</tr>
    </table>
</body>
</html>
<?php 
$VeriTabaniBaglantisi = null;
?>