<?php
//kod ini hanya berjalan bila pengguna tekan submit.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil semua input dari borang
    $nama = $_POST['nama'];
    $ic = $_POST['ic'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $covid = $_POST['covid'];

    // Kira harga asas ikut kategori umur dan lokasi
    $harga = 0;
    if ($kategori == "bawah13") {
        if ($lokasi == "negeri") {
            $harga = 20;
        } else {
            $harga = 35;
        }
    } elseif ($kategori == "13-59") {
        if ($lokasi == "negeri") {
            $harga = 35;
        } else {
            $harga = 55;
        }
    } elseif ($kategori == "60atas") {
        if ($lokasi == "negeri") {
            $harga = 70;
        } else {
            $harga = 120;
        }
    }

    // Tambahan Covid 80%
    if ($covid == "ya") {
        $tambahan = $harga * 0.8;
    } else {
        $tambahan = 0;
    }

    // Jumlah akhir
    $jumlah = $harga + $tambahan;

    // Tukar kategori dan lokasi kepada teks yg lebih boleh difahami oleh pengguna
    if ($kategori == "bawah13") $kategoriText = "Bawah 13 tahun";
    elseif ($kategori == "13-59") $kategoriText = "13-59 tahun";
    elseif ($kategori == "60atas") $kategoriText = "60 tahun ke atas";

    if ($lokasi == "negeri") $lokasiText = "Dalam Negeri";
    elseif ($lokasi == "antarabangsa") $lokasiText = "Antarabangsa";

    // Tarikh hari ini
    $tarikh = date("d-M-Y");

} else {
    // Jika form belum submit, redirect ke borang
    header("Location: travel.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>TRAVEL SAFE INSURANS</title>
    <style>
        body {
            background-color: #ffe6f2; /* warna background */
            font-family: "Times New Roman", serif;   /* jenis font */
        }

        .kotak {
        width: 70%;                  /* lebar kotak  */
        margin: 30px auto;          
       background: white;           /* warna latar putih */
       padding: 25px;               /* jarak antara tepi kotak dan kandungan */
       border-radius: 8px;          /* bucu kotak bulat */
      border: 2px solid #000;      /* garisan tepi kotak hitam tebal  */
       }


        table {
            width: 100%;                   /* lebar table  */
            margin-top: 10px;               /* jarak atas table */
            border-collapse: collapse;      /* buang garisan berganda antara <td> */
        }

        td {
            padding: 8px 5px;   /* jarak dalam sel*/
            border: none; /* tiada garisan row */
            font-size: 18px;    /* saiz tulisan */
        }

        td:first-child {
            width: 40%;  /* lebar td pertama*/        
            text-align: right; /* align kanan */
            font-weight: bold;  /* font bold */
            padding-right: 15px;
        }

        td:last-child {
            text-align: left;  /* sel terakhir align kiri */
        }

        .jumlah {
            font-weight: bold;  /*font bold*/
            font-size: 20px; /* saiz font */
        }

        a {  /* link kembali */

            display: inline-block;
            background-color: #ff99cc; /* warna link */

            color: black; /* color */
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

       
    
    </style>
</head>

<body>

<center><h2>TRAVEL SAFE INSURANS</h2>

<p>Terima Kasih <b><?php echo htmlspecialchars($nama); ?></b> kerana menggunakan perkhidmatan kami.</p>
<p>Bukti pembayaran ini telah diemel ke <b><?php echo htmlspecialchars($email); ?></b></p>

<div class="kotak">

<table>
 <!-- Nama Pelanggan -->
    <tr>
        <td>Nama Pelanggan :</td>
        <td><?php echo htmlspecialchars($nama); ?></td>
    </tr>
 <!-- No IC -->
    <tr>
        <td>No IC :</td>
        <td><?php echo htmlspecialchars($ic); ?></td>
    </tr>
<!-- No telefon -->
    <tr>
        <td>No Telefon :</td>
        <td><?php echo htmlspecialchars($telefon); ?></td>
    </tr>
<!-- alamat -->
    <tr>
        <td>Alamat :</td>
        <td><?php echo nl2br(htmlspecialchars($alamat)); ?></td>
    </tr>
<!-- kategori umur -->
    <tr>
        <td>Kategori Umur :</td>
        <td><?php echo htmlspecialchars($kategori); ?></td>
    </tr>
<!-- tempat perjalanan -->
    <tr>
        <td>Tempat Perjalanan :</td>
        <td><?php echo htmlspecialchars($lokasi); ?></td>
    </tr>
<!-- covid -->
    <tr>
        <td>Perlindungan Covid-19 :</td>
        <td><?php echo htmlspecialchars($covid); ?></td>
    </tr>
<!-- harga basic-->
    <tr>
        <td>Harga Asas :</td>
        <td>RM<?php echo number_format($harga,2); ?></td>
    </tr>
<!-- harga tambahan covid -->
    <tr>
        <td>Harga Tambahan Covid-19 :</td>
        <td>RM<?php echo number_format($tambahan,2); ?></td>
    </tr>

    <tr>
        <td class="jumlah">Jumlah Bayaran :</td>
        <td class="jumlah">RM<?php echo number_format($jumlah,2); ?></td>
    </tr>

    <tr>
        <td>Tarikh :</td>
        <td><?php echo $tarikh; ?></td>
    </tr>
</table>

<br>
<a href="travel.php">Kembali</a>

</div>

</body>
</html>
