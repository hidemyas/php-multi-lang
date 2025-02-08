<?php
session_start();
if (empty($_SESSION['site_lang'])){
    include "lang-tr.php";
}else{
    if ($_SESSION['site_lang'] == "TR"){
        include "lang-tr.php";
    }else{
        include "lang-en.php";
    }
}
?>
<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Çoklu Dil</title>
</head>
<body>
    <table width="1000" align="center" border="0">
        <tbody>
        <tr>
            <td><?php echo ANASAYFA;?></td>
            <td><?php echo HAKKIMIZDA;?></td>
            <td><?php echo ILETISIM;?></td>
            <td><?php echo URUNLER;?></td>
            <td><a href="select.php?lang=TR" style="text-decoration: none">TR</a> | <a href="select.php?lang=EN" style="text-decoration: none">EN</a> </td>
        </tr>
        </tbody>
    </table>
</body>
</html>
