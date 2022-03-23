<title>PRAK203 - Muhammad Alkausar</title>

<body>
    <?php
    $nilai = "";
    $dari = "";
    $ke = "";
    
    if(isset($_POST['nilai'])):
        $nilai = $_POST["nilai"];
        endif;
    if(isset($_POST['dari'])):
        $dari = $_POST["dari"];
        endif;
    if(isset($_POST['ke'])): 
        $ke = $_POST["ke"];   
        endif;
    ?>

    <form method="post" action="">

        Nilai: <input type="number" name="nilai" value="<?php echo $nilai ?>"><br>

        Dari: <br>
        <input type="radio" id="c" name="dari" 
        <?php if (isset($dari) && $dari == "Celcius") echo "checked"; ?> value="Celcius">
        Celcius <br>
        <input type="radio" id="f" name="dari" 
        <?php if (isset($dari) && $dari == "Farenheit") echo "checked"; ?> value="Farenheit">
        Farenheit <br>
        <input type="radio" id="r" name="dari" 
        <?php if (isset($dari) && $dari == "Rheamur") echo "checked"; ?> value="Rheamur">
        Rheamur <br>
        <input type="radio" id="k" name="dari" 
        <?php if (isset($dari) && $dari == "Kelvin") echo "checked"; ?> value="Kelvin">
        Kelvin <br>

        Ke: <br>
        <input type="radio" id="C" name="ke" 
        <?php if (isset($ke) && $ke == "Celcius") echo "checked"; ?> value="Celcius">
        Celcius <br>
        <input type="radio" id="F" name="ke" 
        <?php if (isset($ke) && $ke == "Farenheit") echo "checked"; ?> value="Farenheit">
        Farenheit <br>
        <input type="radio" id="R" name="ke" 
        <?php if (isset($ke) && $ke == "Rheamur") echo "checked"; ?> value="Rheamur">
        Rheamur <br>
        <input type="radio" id="K" name="ke" 
        <?php if (isset($ke) && $ke == "Kelvin") echo "checked"; ?> value="Kelvin">
        Kelvin <br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    //Rumus1
    if ($dari=="Farenheit") {
        $nilai1 = ($nilai-32)*5/9;
    } elseif ($dari=="Kelvin") {
        $nilai1 = $nilai-273.15;
    } elseif ($dari=="Rheamur") {
        $nilai1 = $nilai/0.8;
    } else {$nilai1 = $nilai;}

    //Rumus2
    if ($ke=="Farenheit") {
        $nilai2 = ($nilai1*1.8) + 32;
    }elseif ($ke=="Kelvin") {
        $nilai2 = $nilai1+273.15;
    } elseif ($ke=="Rheamur") {
        $nilai2 = $nilai1*0.8;
    } else {$nilai2 = $nilai;}

    
    if (!empty($nilai)){
        if ($ke=="Farenheit") {
            echo "<h2>Hasil Konversi: " . round($nilai2,2) . " °F</h2>";
        } elseif ($ke=="Kelvin") {
            echo "<h2>Hasil Konversi: " . round($nilai2,2) . " °K</h2>";
        } elseif ($ke=="Rheamur") {
            echo "<h2>Hasil Konversi: " . round($nilai2,2) . " °R</h2>";
        } else {
            echo "<h2>Hasil Konversi: " . round((int)$nilai,2) . " °C</h2>";}
    }
    ?>
</body>