<!-- Soal 5 -->
<!-- PHP [Associative Array]-->
<?php
$list = ['A1'=>'Samsung Galaxy S22', 'A2'=>'Samsung Galaxy S22+', 'A3'=>'Samsung Galaxy A03', 'A4'=>'Samsung Galaxy Xcover 5'];
?>
<!-- HTML [Table] -->
<html>
    <body>
        <table border = "1">
            <tr>
                <td class = "header">
                    Daftar Smartphone Samsung
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $list['A1']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $list['A2']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $list['A3']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $list['A4']; ?>
                </td>
            </tr>
        </table>
    </body>    
</html>
<!-- CSS [Style] -->
<style>
.header {
    font-weight: bold;
    background-color: red;
    font-size: x-large;
    padding-top: 20;
    padding-bottom: 20;
}
</style>
