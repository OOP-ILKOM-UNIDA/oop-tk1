<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" >
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['nama'] ?></td>
        </tr> 
        <tr>
            <td>Nomor Induk Mahasiswa</td>
            <td>:</td>
            <td><?php echo $_POST['nim'] ?></td>
        </tr> 
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $_POST['tgllahir'] ?></td>
        </tr> 
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $_POST['jk'] ?></td>
        </tr> 
    </table>       
</body>
</html>