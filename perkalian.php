<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
    <h2>Tabel Perkalian 1-10</h2>
    <table>
        <tbody>
            <?php
            // Isi tabel
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    $hasil = $i * $j;
                    echo "<td>$hasil</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
        </center>
</body>
</html>
