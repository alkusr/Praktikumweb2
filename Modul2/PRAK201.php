<title>PRAK201 - Muhammad Alkausar</title>
<form>
    <div>
        <h3>
            <label>Urut Nama</label> <br>
        </h3>
            <?php 
            $nilaiA = $nilaiB = $nilaiC = "";
            $nilaiA = @$_GET['nilaiA'];
            $nilaiB = @$_GET['nilaiB'];
            $nilaiC = @$_GET['nilaiC'];
             ?>
            Nama 1 : <input type="text" name="nilaiA" value="<?php echo $nilaiA ?>"><br>
            Nama 2 : <input type="text" name="nilaiB" value="<?php echo $nilaiB ?>"><br>
            Nama 3 : <input type="text" name="nilaiC" value="<?php echo $nilaiC ?>"><br>
            <button>Urutkan</button>
        </div>
</form>
<?php
    if ($nilaiA<$nilaiB){
        if ($nilaiB<$nilaiC) {
            $satu=$nilaiA; $dua=$nilaiB; $tiga=$nilaiC;
        }else{
            if ($nilaiA<$nilaiC) {
                $satu=$nilaiA; $dua=$nilaiC; $tiga=$nilaiB;
            }else{
                $satu=$nilaiC; $dua=$nilaiA; $tiga=$nilaiB;
            }
        }
    }else{
        if ($nilaiB<$nilaiC) {
            if ($nilaiA<$nilaiC) {
                $satu=$nilaiB; $dua=$nilaiA; $tiga=$nilaiC;
            }else{
                $satu=$nilaiB; $dua=$nilaiC; $tiga=$nilaiA;
            }
        }else{
            if ($nilaiC<$nilaiA) {
                if ($nilaiA<$nilaiB) {
                    $satu=$nilaiC; $dua=$nilaiA; $tiga=$nilaiB;
                }else{
                    $satu=$nilaiC; $dua=$nilaiB; $tiga=$nilaiA;
                }
            }
        }
    }

    if (!empty($satu)) {
        echo "<h3>Output</label></h3>";
        echo "{$satu}<br>{$dua}<br>{$tiga}<br>";
    }        
?>