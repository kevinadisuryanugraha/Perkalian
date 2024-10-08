<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border='1px' cellpadding="10" cellspacing="10">
        <tbody>
            <?php
            $num1 = 1;
            while ($num1 <= 10) {
                echo '<tr>';
                $num2 = 1;
                while ($num2 <= 10) {
                    $hasil = $num1 * $num2;
                    if ($hasil % 2 == 0) {
                        echo '<td  style="color:white; background-color:red;">' . $hasil . '</td>';
                    } else {
                        echo '<td>' . $hasil . '</td>';
                    }
                    $num2++;
                }
                echo '</tr>';
                $num1++;
            }
            ?>
        </tbody>
    </table>
    </center>
</body>
</html>