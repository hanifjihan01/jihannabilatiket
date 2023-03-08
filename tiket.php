<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pemesanan Tiket Konser</title>
    <link href="style.css" rel="stylesheet">
    
</head>
<body>

    <center><div class="container">
    <center><h1>Pemesanan Tiket Konser</h1></center>
    <form method="POST" action="output.php">
    <table>
        <tr>
            <td>Nama :</td>
            <td><input type="text" name="nama"></td>    
        </tr>
        <tr>
            <td>Masukkan ID :</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" placeholder="jihan123@gmail.com" name="email"></td>
        </tr>
        <tr>
            <td>Nomor Telepon :</td>
            <td><input type="text" name="notelp"></td>
        </tr>
        <tr>
            <td>Pilihan Tempat Konser :</td>
            <td><input type="radio" name="konser" value="regular">Regular</td>
        </tr>
        <tr>
            <td></td>
          <td><input type="radio" name="konser" value="premium">Premium</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="konser" value="deluxe">Deluxe</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="konser" value="vvip">VVIP</td>
        </tr>
        <tr>
            <td>Jumlah Tiket :</td>
            <td><input type="text" placeholder="Masukkan jumlah tiket" name="tiketjl"></td>
        </tr>
        <tr>
            <td>Ada Pertanyaan?</td>
        </tr>
        <tr>
            <td><textarea name="mantap" placeholder="Masukkin pesan disini"></textarea></td>
        </tr>
    </table>
            <input type="reset" value="cancel">
            <input type="submit" value="Continue">
</form>
</div></center>
</body>
</html>