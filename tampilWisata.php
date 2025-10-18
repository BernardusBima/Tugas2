<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/pertemuan2/getWisata.php");

$data = json_decode($send, TRUE);

foreach($data as $row) {
    echo $row["id_wisata"]."<br/>";
    echo $row["kota"]."<br/>";
    echo $row["landmark"]."<br/>";
    echo $row["tarif"]."<br/><hr/>";
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Daftar Wisata</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 600px; max-width: 100%; }
        th, td { border: 1px solid #333; padding: 8px 10px; text-align: left; }
        th { background: #f0f0f0; }
        .center { text-align: center; }
    </style>
</head>
<body>
    <h2>Daftar Wisata</h2>
    <table>
        <thead>
            <tr>
                <th class="center">KOTA</th>
                <th class="center">LANDMARK</th>
                <th class="center">TARIF</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // perulangan: tampilkan field sesuai nama kunci JSON
            foreach ($data as $row) {
                // proteksi apabila key tidak ada
                $kota = isset($row['kota']) ? htmlspecialchars(strtoupper($row['kota'])) : '-';
                $landmark = isset($row['landmark']) ? htmlspecialchars(strtoupper($row['landmark'])) : '-';
                $tarif = isset($row['tarif']) ? htmlspecialchars($row['tarif']) : '-';
                echo "<tr>
                        <td>{$kota}</td>
                        <td>{$landmark}</td>
                        <td>{$tarif}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>