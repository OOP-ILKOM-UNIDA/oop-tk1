<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemen Form</title>
</head>
<body>
    <h2>Silahkan Mengisi Data!</h2>
    <form method="POST" action="hasil.php">
        <table rules="rows">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder= "Masukan Nama..." style="width: 95%;"></td>
            </tr>
            <tr>
                <td>Nomor Induk Mahasiswa</td>
                <td><input type="text" name="nim" placeholder= "Masukan NIM..."style="width: 95%;"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgllahir"style="width: 95%;"></td>
            </tr> 
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="laki-laki">laki-laki
                <input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr> 
             
        </table>
        <br>
                <button type="submit" name="submit" value="submit">kirim</button>
    </form>           
</body>
</html>