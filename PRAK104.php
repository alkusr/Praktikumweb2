<!-- Soal 4 -->
<!-- PHP [Indexed Array] -->
<?php
$list = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
?>
<!-- HTML [Table]-->
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
                    <?php echo $list[0]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $list[1]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $list[2]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $list[3]; ?>
                </td>
            </tr>
        </table>
    </body>    
</html>
<!-- CSS [Style] -->
<style>
.header {
    font-weight: bold;
}
</style>