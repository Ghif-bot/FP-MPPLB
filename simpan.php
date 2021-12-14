<?php// Load file koneksi.php
    include 'config-admin.php'; // Ambil Data yang Dikirim dari Form
    $nama = $_POST['nama'];
    $descr = $_POST['descr'];
    $harga = $_POST['harga'];
    $foto = $_POST['foto']['nama'];
    $telp = $_POST['telp'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];// Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$foto;// Set path folder tempat menyimpan fotonya
    $path = "images/".$fotobaru;// Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak  // Proses simpan ke Database  
        $sql = $pdo->prepare("INSERT INTO siswa VALUES(:nama-p,:deskripsi,:harga,:foto,:telp)");  
        $sql->bindParam(':nama-p', $nama);  
        $sql->bindParam(':deskripsi', $descr);  
        $sql->bindParam(':harga', $harga);  
        $sql->bindParam(':foto', $fotobaru);  
        $sql->bindParam(':telp', $telp);    
        $sql->execute(); // Eksekusi query insert  
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak    
    // Jika Sukses, Lakukan :    
        header("location: admin-tambah.php"); // Redirect ke halaman index.php  
    }else{    // Jika Gagal, Lakukan :    
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";    
        echo "<br><a href='tambah.php'>Kembali Ke Form</a>";   
    }
}else{  // Jika gambar gagal diupload, Lakukan :  
    echo "Maaf, Gambar gagal untuk diupload.";  
    echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
    }
?>