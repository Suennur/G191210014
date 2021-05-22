<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="still.css" type="text/css">
<?php
    if(isset($_POST['giris'])){
        $d1 = $_POST['username'];
        $d2 = $_POST['pass'];
        echo "Kullanıcı Adınız: $d1<br />";
        echo "Şifreniz: $d2<br />";
    }
?>
<a href="index.html">Anasayfa</a>