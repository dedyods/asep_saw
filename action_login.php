<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
// fungsi md5 di atas untuk enkripsi kedalam bentuk md5

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn, "SELECT * FROM admin where username='$username' and password='$password'");
$row = mysqli_fetch_array($data);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// cek jika username dan password yang di input di temukan, buat session dan alihkan halaman ke halaman admin(folder admin),
// jika tidak, alihkan kembali ke halaman depan sambil mengirim pesan gagal
if ($cek > 0) {
	$_SESSION['username'] = $row['username'];
	$_SESSION['level'] = $row['level'];
	$_SESSION['nama'] = $row['nama'];
	$nama = $_SESSION['nama'];
	header("location:administrator/index.php");
} else {
	header("location:index.php?pesan=gagal");
}
