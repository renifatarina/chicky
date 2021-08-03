<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notifikasi Pesan</title>
</head>
<body style="margin: 0; padding: 0;">
  <?php
      include "config.php";

      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $no_hp = $_POST['no_hp'];
      $pesan = $_POST['pesan'];

      $sql = "INSERT INTO contact (nama, email, no_hp, pesan) VALUES ('$nama', '$email', '$no_hp', '$pesan');";
      
      $hasil = mysqli_query($config, $sql);
  ?>

  <div class="box" style="@import url('https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap'); background-color : #440A67; font-family: 'Londrina Solid', cursive; text-align: center; color: white; height : 30vh; padding-top: 30px; letter-spacing: 2px;">
    <?php if ($hasil) { ?>
      <h2>Pesan Terkirim!</h2>
      <h3>Silakan tekan <a href="../index.html" style="color: inherit;">Chiky</a> untuk kembali ke halaman awal. </h3>
    <?php } else { ?>
      <h2>Pesan Tidak Terkirim! Harap ulangi lagi.</h2>
      <h3>Silakan tekan <a href="../index.html" style="color: inherit;">Chiky</a> untuk kembali ke halaman awal. </h3>
    <?php } ?>
  </div>
  
</body>
</html>
