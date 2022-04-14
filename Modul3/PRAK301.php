<title>Prak3 No.1 | Muhammad Alkausar</title>
<form action="" method="post">
    Jumlah Peserta:
    <input type="text" name="jumlah"><br>
    <input type="submit" name="submit" value="Cetak">
</form>

<?php 
if (isset($_POST['submit'])) {
    $JUMLAH = $_POST['jumlah'];

    $REPEAT = 1;
    while ($REPEAT <= $JUMLAH) {
        if ($REPEAT % 2 == 0) {echo "<h1 style=\"color:green\">Peserta ke-$REPEAT</h1>";} 
        else {echo "<h1 style=\"color:red\">Peserta ke-$REPEAT</h1>";}
        $REPEAT++;
    }
} 
?>