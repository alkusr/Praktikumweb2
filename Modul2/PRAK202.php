<title>PRAK202 - Muhammad Alkausar</title>

<!-- Error Color -->
<style>.error {color: red;}</style>

<body>
    <?php

    // variable
    $nama = "";
    $nim = "";
    $gender = "";
    $Error1 = "";
    $Error2 = "";
    $Error3 = "";

    // Error Message
    if ($_POST) {
        if (empty($_POST["nama"])) {
            $Error1 = "Nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }
        if (empty($_POST["nim"])) {
            $Error2 = "NIM tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }
        if (empty($_POST["gender"])) {
            $Error3 = "Jenis kelamin tidak boleh kosong";
        } else {
            $gender = $_POST["gender"];
        }
    }
    ?>

    <!-- Form -->
    <form method="post" action="">

        Nama: <input type="text" name="nama" value="<?php echo $nama ?>">
        <span class="error">* <?php echo $Error1 ?> </span><br>

        NIM: <input type="text" name="nim" value="<?php echo $nim ?>">
        <span class="error">* <?php echo $Error2 ?> </span><br>

        jenis kelamin: 
        <span class="error">* <?php echo $Error3 ?> </span><br>

        <input type="radio" name="gender" 
        <?php if (isset($gender) && $gender == "Laki-Laki") echo "checked"; ?> value="Laki-Laki">
        Laki-laki <br>
        <input type="radio" id="p" name="gender" 
        <?php if (isset($gender) && $gender == "Perempuan") echo "checked"; ?> value="Perempuan">
        Perempuan<br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (!empty($nama) && !empty($nim) && !empty($gender)) {
        echo $nama . "<br>" . $nim . "<br>" . $gender . "<br>";
    }
    ?>
</body>