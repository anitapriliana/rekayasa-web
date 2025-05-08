<?php
function curl($url){ // fungsi utk mengambil data dr URL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// alamat localhost untuk file getWisata.php, ambil hasil export JSON
$send = curl("http://localhost/praktikum/rekayasa_web/praktikum_2/get_Wisata.php");

// mengubah JSON menjadi array
$data = json_decode($send, TRUE);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto;
            width: auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 15px;
            text-align: center;
        }
        th {
            font-weight: bold;
            background-color: #f2f2f2;
        }
        .container {
            width: 100%;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; margin-bottom: 15px;">Daftar Objek Wisata</h1>
    
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>KOTA</th>
                    <th>LANDMARK</th>
                    <th>TARIF</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo strtoupper($row["kota"]); ?></td>
                    <td><?php echo strtoupper($row["landmark"]); ?></td>
                    <td><?php echo $row["tarif"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>