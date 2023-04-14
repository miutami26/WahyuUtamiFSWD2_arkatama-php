<!DOCTYPE html>
<html>

<head>
    <title>Biodata Diri</title>
    <style type="text/css">
    body {
        background-color: #f2f2f2;
        font-family: sans-serif;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
        border: 1px solid #ccc;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    table td,
    table th {
        padding: 10px;
        border: 1px solid #ccc;
    }

    img {
        display: block;
        margin: 0 auto;
    }
    </style>
</head>

<body>
    <h1>Biodata Diri</h1>
    <table>
        <tr>
            <th>Foto</th>
            <td><img src="img/foto.jpg" alt="Foto" width="90" height="120"></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?php echo "Wahyu Utami"; ?></td>
        </tr>
        <tr>
            <th>TTL</th>
            <td><?php echo "Ketapang, 26 Agustus 2002"; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo "Perempuan"; ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo "Jl. Brigjen Khatamso Kab. Ketapang"; ?></td>
        </tr>
        <tr>
            <th>Riwayat Pendidikan</th>
            <td>
                <ul>
                    <li><?php echo "SDN 12 Sungai Melayu Rayak"; ?></li>
                    <li><?php echo "SMPN PGRI Sungai Melayu Rayak"; ?></li>
                    <li><?php echo "MAN 1 KETAPANG"; ?></li>
                    <li><?php echo "Politeknik Negeri Ketapang D3 (Teknologi Informasi)"; ?></li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Hobby</th>
            <td><?php echo "Membaca Novel"; ?></td>
        </tr>
    </table>
</body>

</html>