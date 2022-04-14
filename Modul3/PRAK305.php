<title>Prak3 No.5 | Muhammad Alkausar</title>

<form action="" method="post">
    <input type="text" name="input">
    <input type="submit" value="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $kata = $_POST['input'];
    $arrayKata = str_split($kata);
    $jumlah = count($arrayKata);

    foreach ($arrayKata as $key => $value) {
        for ($i = 0; $i < $jumlah; $i++) {
            if ($i == 0) {
                echo strtoupper($value);
            } else {
                echo strtolower($value);
            }
        }
    }
}
?>