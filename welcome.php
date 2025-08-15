<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="welcome.php?page=home">Home</a></li>
            <li><a href="welcome.php?page=nilai">Nilai</a></li>
            <li><a href="welcome.php?page=kehadiran">Kehadiran</a></li>
            <li><a href="welcome.php?page=jadwal">Jadwal</a></li>
            <li><a href="welcome.php?page=pengaturan">Pengaturan</a></li>
            <li><a href="welcome.php?page=laporan">Laporan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="content">
        <?php
        switch($page) {
            case 'home':
                echo "<h1>Selamat Datang di Dashboard</h1><h2>Halo, saya Al Ghazali</h2>
                <p>
                Saya adalah seorang siswa di sekolah Ibnul Qayyim yang saat ini sedang duduk di kelas XI jurusan RPL (Rekayasa Perangkat Lunak).<br>
                Saya memiliki minat dalam bidang IT, dan saya selalu berusaha untuk meningkatkan pengetahuan dan keterampilan saya setiap hari.<br>
                Di dashboard ini, saya dapat melihat nilai, kehadiran, jadwal pelajaran, dan berbagai informasi penting lainnya yang mendukung kegiatan belajar saya.
                </p>";
                break;

            case 'nilai':
                echo "<h1>Halaman Nilai</h1><p>Menampilkan data nilai siswa.</p>";
                break;

            case 'kehadiran':
                echo "<h1>Halaman Kehadiran</h1><p>Menampilkan data kehadiran siswa.</p>";
                break;

            case 'jadwal':
                echo "<h1>Halaman Jadwal</h1><p>Menampilkan jadwal pelajaran.</p>";
                break;

            case 'pengaturan':
                echo "<h1>Halaman Pengaturan</h1><p>Pengaturan akun dan preferensi.</p>";
                break;

            case 'laporan':
                echo "<h1>Halaman Laporan</h1>";
                ?>
                <h3>Laporan Siswa</h3>
                <div class="form-conta">
                    <h4>Tambah Siswa Baru</h4>
                    <form action="tambah.php" method="post" enctype="multipart/form-data">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" required>

                        <label for="nis">NIS:</label> 
                        <input type="text" id="nis" name="nis" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>   

                        <label for="jurusan">Jurusan:</label>
                        <input type="text" id="jurusan" name="jurusan" required>

                        <label for="gambar">Gambar:</label> 
                        <input type="file" id="gambar" name="gambar" accept="image/*" required> 

                        <input type="submit" value="Tambah Siswa">
                    </form>


                    <h4>Catatan:</h4>
                    <p>Pastikan untuk mengupload gambar siswa dengan format yang didukung (misalnya JPG, PNG).</p>
                    <p>Data siswa yang ditambahkan akan langsung muncul di daftar siswa.</p>        
                    <p>Untuk mengedit atau menghapus data siswa, gunakan tautan yang tersedia di setiap baris.</p>
                    <p>Jika ada pertanyaan atau masalah, silakan hubungi admin sekolah.</p>
                </div>
                <?php
                break;

            default:
                echo "<h1>404 - Halaman tidak ditemukan!</h1>";
        }
        ?>
    </div>
</body>
</html>
