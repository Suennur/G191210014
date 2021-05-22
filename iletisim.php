<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="still.css" type="text/css">
<?php
    if(isset($_POST['gonder'])){
        $d1 = $_POST['name'];
        $d2 = $_POST['surname'];
        $d3 = $_POST['bd'];
        $d4 = $_POST['mail'];
        $d5 = $_POST['telnu'];
        $d6 = $_POST['cinsiyet'];
        echo "Sayın $d1 $d2,<br />";
        echo "Bilgileriniz şöyledir:<br />";
        echo "Doğum tarihiniz: $d3<br />";
        echo "E-posta adresi: $d4<br />";
        echo "Telefon numaranız: $d5<br />";
        echo "Cinsiyetiniz: $d6<br />";
    }
?>
<a href="index.html">Anasayfa</a>
