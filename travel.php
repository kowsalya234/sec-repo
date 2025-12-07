<!DOCTYPE html>
<html>
<head>
    <title>TRAVEL SAFE INSURANS</title>
</head>
<body style="background-color: #ffe6f2;"><!-- warna background -->

<div class="kotak">
<!-- title dan perenggan  -->
<center><h1>TRAVEL SAFE INSURANS</h1>
<p class="center">Kami menyediakan insurans yang murah untuk perjalanan anda</p>

<!-- Form untuk input data pelanggan -->
<form action="paparan.php" method="post">
<table border="0" cellpadding="6">

<tr>
    <td>Nama:</td>
    <td><input type="text" name="nama" required></td>
</tr>

<tr>
    <td>No Kad Pengenalan:</td>
    <td><input type="text" name="ic" required></td>
</tr>

<tr>
    <td>Nombor Telefon:</td>
    <td><input type="text" name="telefon" required></td>
</tr>

<tr>
    <td>E-Mail:</td>
    <td><input type="email" name="email" required></td>
</tr>

<tr>
    <td>Nama & Alamat Penerima:</td>
    <td><textarea name="alamat" rows="3" required></textarea></td>
</tr>

<tr>
    <td>Kategori Umur:</td>
    <td>
        <select name="kategori" required>
            <option value="bawah13">Bawah 13 tahun</option>
            <option value="13-59">13–59 tahun</option>
            <option value="60atas">60 tahun ke atas</option>
        </select>
    </td>
</tr>

<tr>
    <td>Tempat Perjalanan:</td>
    <td>
        <select name="lokasi" required>
            <option value="negeri">Dalam negeri</option>
            <option value="antarabangsa">Antarabangsa</option>
        </select>
    </td>
</tr>

<tr>
    <td>Perlindungan Covid-19:</td>
    <td>
        <select name="covid" required>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>
    </td>
</tr>
<!-- button sumit dan reset -->
<tr>
    <td></td>
    <td>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </td>
</tr>

</table>
</form>


</div>

</body>
</html>
