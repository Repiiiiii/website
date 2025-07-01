<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan - Book Haven</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        footer {
            position: fixed;
            left: 0;
            padding: 10px ;
        }
    </style>
</head>
<body>
    <header>
        <h1>Book Haven</h1>
    </header>
    <main>
        <section id="thank-you-message">
            <p>Terima Kasih Telah Mengunjungi Web Kami, Pesananmu Telah Disimpan.</p>
        </section>
        <li><a href="indek.html">Home</a></li>
    </main>
    <pre>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = $_POST['book'];
    $name = $_POST['name'];
    $tanggal = $_POST['tanggal'];

    $order = 
    "Buku: " . $book . "\n" .
    "Nama: " . $name . "\n" .
    "Tanggal: " .$tanggal .  "\n". PHP_EOL . PHP_EOL;
    
    file_put_contents('orders.txt', $order, FILE_APPEND);
}
?>
    </pre>
    <footer>
      <p>&copy; Temukan dunia baru di setiap halaman</p>
      <p>&copy; Selamat membaca dengan layanan rental buku kami!</p>
      <p>&copy; Hubungi kami untuk info lebih lanjut dan nikmati koleksi terbaik kami</p>
    </footer>
</body>
</html>
