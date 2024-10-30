<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
    <style>
        table {
            width: 65%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center; /* Mengatur teks agar berada di tengah */
        }
    </style>
</head>
<body>

<h2>Tabel Harga Barang</h2>
<table>
    <tr>
        <th>No</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>

    <?php
    $Produk = [
        ["Minyak Telon", 20, 31790],
        ["Diapers", 25, 51880],
        ["Baby Oil", 15, 28890],
        ["Shampo Baby", 20, 20670],
        ["Bedak", 25, 19860],
        ["Baju Bayi", 20, 35500],
        ["Jumper", 25, 25999]
    ];

    foreach ($Produk as $index => $Prduk) {
        $jumlah = $Prduk[1] * $Prduk[2]; 
        echo "<tr>
                <td>" . ($index + 1) . "</td>
                <td>{$Prduk[0]}</td>
                <td>{$Prduk[1]}</td>
                <td>Rp " . number_format($Prduk[2], 0, ',', '.') . "</td>
                <td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>
              </tr>";
    }
    ?>

</table>
</body>
</html>