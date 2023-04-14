<html>
    <head>
        <title>HALAMAN FORM LOGIN</title>
    </head>
    <body>
        <h1>SILAHKAN LOGIN! </h1>
    <form method="POST" action="halaman.php">
        <div class="kotak_login">
            <form action="ceklogin.php" method="post" role="form">
            <div>
        <label>Email</label> <br>
        <input name="email" type="email" placeholder="Masukkan email">
    </div>
    <div>
        <label>Kata Sandi</label> <br>
        <input name="password" type="password" placeholder="Masukkan kata sandi">
    </div>
</form>
<?php 
$email = @$_POST['email'];
$password = @$_POST['password'];
if ($email) {
    echo "<strong>Email:</strong> {$email} <br>";
}

if ($password) {
    echo "<strong>Kata Sandi:</strong> {$password} <br>";
}
?>
                <input type="submit" class="tombol_login" value="login">
            </form>
        </div>
    </body>
</html>    