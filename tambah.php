<?php 
// buat koneksi
$conn=mysqli_connect("localhost","root","","phpdatabase");

// cek apakah button submit sudah ditekan atau belum
if(isset($_POST['submit'])){
    // ambil nama dari tiap element dalam form yang disimpan di variable
    $nama=$_POST["Nama"];
    $nim=$_POST["Nim"];
    $email=$_POST["Email"];
    $jurusan=$_POST["Jurusan"];
    $gambar=$_POST["Gambar"];
    
//    query inset data 
$query = "INSERT INTO mahasiswa 
                VALUES 
                ('3','$nama','$nim','$email','$jurusan','$gambar')";
mysqli_query($conn,$query);
 
// cek sukses data ditambah menggunakan mysqli_effected_rows
// jika kita var_dump maka akan muncul int(1) jika gagal makan akan muncul int(-1)
// var_dump(mysqli_effected_rows($conn));
if( mysqli_affected_rows($conn) > 0){
    echo "data berhasil disimpan";
}
else{
    echo"gagal!";
    echo"<br>";
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
