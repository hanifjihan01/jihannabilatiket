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
    <table>
        <tr>
            <td>Nama :</td>
            <td><?php echo $_POST['nama'];  ?> </td> 
        </tr>
        <tr>
            <td>Masukkan ID :</td>
            <td><?php echo $_POST['id'];  ?> </td> 
        </tr>
        <tr>
            <td>Email :</td>
            <td><?php echo $_POST['email'];  ?> </td> 
        </tr>
        <tr>
            <td>Nomor Telepon :</td>
            <td><?php echo $_POST['notelp'];  ?> </td> 
        </tr>
        <tr>
            <td>Pilihan Tempat Konser :</td>
            <td><?php echo $_POST['konser'];  ?> </td> 
        </tr>
        <tr>
            <td>Jumlah Tiket :</td>
            <td><?php echo $_POST['tiketjl'];  ?> </td> 
        </tr>
        <tr>
            <td><?php echo $_POST['mantap'];  ?> </td> 
        </tr>
    </table>
</div></center>
</body>
</html>