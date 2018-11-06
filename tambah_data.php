<?php 
require 'functions.php';
//cek apakah button sbmit sudah di tekan 
if(isset($_POST['submit'])){
    // cek sukses data di tambah menggunakan function tambah pada function.php

    if(tambah($_POST)>0){
        echo"
        <script>
        alert('data berhasil di simpan')  ;
        document.location.href='index.php';
        </script>";

    }else{
        echo
        "<script>
        alert('data berhasil di simpan')  ;
        document.location.href='tambah_data.php';
        </script>;
   ";
   echo "<br>";
   echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device, initial-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>

</head>
<body>
   <h1> Tambah Data Mahasiswa</h1>
    <form action="" method = "post">
   <ul>
        <li>
            <!-- for pada label terhubung dengan id jadi jika label nama di klik maka textfield nama akan aktif jua  -->
            <label for="Nama">Nama</label>
           <!-- untuk mengisi name besar kecilnya harus sesuai dengan fieldnya  -->
           <input type="text " name="Nama" id="Nama">
            </li> 

           <li>
          <label for="Nim">Nim</label>
          <input type="text" name="Nim" id="Nim "> 
           </li>

          <li>
          <label for="Email">Email</label>
          <input type="text" name="Email" id="Email "> 
           </li>

         <li>
          <label for="Jurusan">Jurusan</label>
          <input type="text" name="Jurusan" id="Jurusan"> 
           </li>
       <li>
          <label for="Gambar">Gambar</label>
          <input type="text" name="Gambar" id="Gambar "> 
           </li>

           <li>
          <button type="submit" name="submit">Tambah</button> 
           </li> 
        </ul> 
    </form>
</body>
</html>
