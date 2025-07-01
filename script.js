document.addEventListener("DOMContentLoaded", function () {
  const books = [
    "Mewarnai", "Membaca", "Bintang", "Matahari", "Hello", "Selena", "Hujan", "Bulan", "Lumpu", "Nebula", "Pulang", "Tentang kamu",
    "Matahari Minor", "Negeri Para Bedebah", "Pergi", "Pulang Pergi", "Rindu", "Mariposa", "172 Days", "Algoritma Pemrograman", 
    "Aplikasi komputer", "Dasar Logika Informatika", "Dasar-Dasar Teknik Informatika", "Turbo Pascal"
  ];

  const bookList = document.getElementById("book-list");
  const bookSelect = document.getElementById("book");

  books.forEach((book) => {
    // Tambah ke daftar koleksi
    const bookItem = document.createElement("div");
    bookItem.textContent = book;
    

    // Tambah ke opsi pemesanan
    const option = document.createElement("option");
    option.value = book;
    option.textContent = book;
    bookSelect.appendChild(option);
  });
});
