<title>PRAK204 - Muhammad Alkausar</title>

<body>
    <?php
    $nilai = "";
    
    if(isset($_POST['nilai'])):
        $nilai = round($_POST["nilai"]);
        endif;
    ?>

    <form method="post" action="">
        Nilai: <input type="number" name="nilai" value="<?php echo $nilai ?>"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (is_numeric($nilai)){
        if ($nilai==0){
            echo "<h2>Hasil: Nol</h2>";
        } elseif ($nilai>0 && $nilai<10) {
            echo "<h2>Hasil: Satuan</h2>";
        } elseif ($nilai>=10 && $nilai<20) {
            echo "<h2>Hasil: Belasan</h2>";
        } elseif ($nilai>=20 && $nilai<100) {
            echo "<h2>Hasil: Puluhan</h2>";
        } elseif ($nilai>=100 && $nilai<1000) {
            echo "<h2>Hasil: Ratusan</h2>";
        }  elseif ($nilai<0 || $nilai>999) {
            echo "<h2>Anda Menginput Melebihi Limit Bilangan</h2>";
        }
    }
    ?>
</body>