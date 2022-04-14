<title>Prak3 No.2 | Muhammad Alkausar</title>

<style>
    .UKURAN {
        width: 32px;
        height: 32px;
    }
</style>

<form action="" method="post">
    Tinggi &emsp; &emsp; &emsp;  : 
    <input type="text" name="tinggi"> <br>
    Alamat Gambar : 
    <input type="text" name="url"> <br>
    <input type="submit" value="cetak" name="submit">
</form>

<?php 
if (isset($_POST['submit'])) {

        $tinggi = $_POST['tinggi'];
        $url = $_POST['url'];

        $a = 1;
        while ($a <= $tinggi) {

            $b = 1;
            while ($b < $a) {
                echo "&emsp;"."&emsp;";
                $b++;
            }

            $c = $tinggi;
            while ($c >= $a) {
                echo "<img src='$url'class='UKURAN'>";
                $c--;
            }
            
            echo '<br>';
            $a++;
        }
    }
 ?>