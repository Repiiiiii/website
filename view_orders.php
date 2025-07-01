<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan - Book Haven</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Book Haven</h1>
        <h2>Daftar Pesanan</h2>
    </header>
    <main>
        <section id="orders">
            <h3>Pesanan Masuk</h3>
            <pre>
<?php
// Menampilkan isi file tanpa memaksa pengunduhan
$order = file_get_contents('orders.txt');
echo htmlspecialchars($order);
?>
            </pre>
            <li><a href="indek.html">Home</a></li>
        </section>
    </main>
    <footer>
      <p>&copy; Temukan dunia baru di setiap halaman</p>
      <p>&copy; Selamat membaca dengan layanan rental buku kami!</p>
      <p>&copy; Hubungi kami untuk info lebih lanjut dan nikmati koleksi terbaik kami</p>
    </footer>
</body>
</html>
