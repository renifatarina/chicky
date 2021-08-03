<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body align="center">

<h2>Data Kontak Pesan</h2>
<table width="720" border="1" cellpadding="5" cellspacing="0" align="center">
    <tr>
        <th width="30"> No. </th>
        <th width="30"> Nama </th>
        <th width="50"> Email</th>
        <th width="30"> No HP</th>
        <th width="100"> Pesan </th>
        <th width="75"> Kelola</th>
    </tr>

    <?php
        include "config.php";

        $sql = "SELECT nama, email, no_hp, pesan FROM contact";
        $hasil = mysqli_query($config, $sql);
        $no = 1;
        
        while ($data = mysqli_fetch_array($hasil)) {
    ?>
    <tr>
        <td align="center"><?= $no; ?></td>
        <td align="center"><?= $data['nama']; ?></td>
        <td align="center"><?= $data['email']; ?></td>
        <td align="center"><?= $data['no_hp']; ?></td>
        <td align="center"><?= $data['pesan']; ?></td>
        <td align="center">
				<a href="contact_hapus.php?nama=<?php echo $data['nama'];?>">Hapus</a>
			</td>
    </tr>
    <?php
        $no++;
        }
        echo "</table>"; 
    ?>

</body>
</html>