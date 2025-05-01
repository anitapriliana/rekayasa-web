<?php
$jsonData = '{"nama": "Anita", "umur": 25, "pekerjaan": "Programmer"}';

$phpObject = json_decode($jsonData);

echo "Akses dari Object:<br>";
echo "Nama: " . $phpObject->nama . "<br>";
echo "Umur: " . $phpObject->umur . "<br>";
echo "Pekerjaan: " . $phpObject->pekerjaan . "<br><br>";

$phpArray = json_decode($jsonData, true);

// mengakses nilai object
echo "Akses dari Array:<br>";
echo "Nama: " . $phpArray['nama'] . "<br>";
echo "Umur: " . $phpArray['umur'] . "<br>";
echo "Pekerjaan: " . $phpArray['pekerjaan'] . "<br>";
?>
