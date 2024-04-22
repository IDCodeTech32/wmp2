// Menangani peristiwa klik pada kategori Hardware & Networking
document.getElementById('hardwareNetworking').addEventListener('click', function () {
    fetchData('HARDWARE & NETWORKING');
  });

  // Menangani peristiwa klik pada kategori Software Development
  document.getElementById('softwareDevelopment').addEventListener('click', function () {
    fetchData('SOFTWARE DEVELOPMENT');
  });

  // Menangani peristiwa klik pada kategori Administrasi IT
  document.getElementById('administrasiIT').addEventListener('click', function () {
    fetchData('ADMINISTRASI IT');
  });

  // Menangani peristiwa klik pada kategori IT Vendor Project
  document.getElementById('itVendorProject').addEventListener('click', function () {
    fetchData('IT VENDOR PROJECT');
  });

  // Fungsi untuk mengambil data dari server berdasarkan kategori yang dipilih
  function fetchData(category) {
    // Mengubah judul header
    document.querySelector('.card-header h6').textContent = category;

    // Membuat permintaan AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'getData.php?category=' + encodeURIComponent(category), true);

    // Menangani respon dari permintaan AJAX
    xhr.onload = function () {
      if (xhr.status >= 200 && xhr.status < 300) {
        var data = JSON.parse(xhr.responseText);

        // Dapatkan referensi tbody di tabel
        var tbody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];

        // Bersihkan isi tbody sebelum menambahkan data baru
        tbody.innerHTML = '';

        // Variabel penghitung untuk nomor urutan
        var counter = 1;

        // Iterasi melalui data dan tambahkan ke tabel
        data.forEach(function (item) {
          // Buat elemen row baru untuk setiap item data
          var row = document.createElement('tr');

          // Tambahkan kolom nomor
          var noCol = document.createElement('td');
          noCol.textContent = counter++; // Tampilkan nilai penghitung dan kemudian tingkatkan nilainya
          noCol.style.width = '3%'; // Mengatur lebar kolom nomor
          row.appendChild(noCol);

          // Buat kolom untuk setiap properti item
          var targetCol = document.createElement('td');
          targetCol.textContent = item.target;
          targetCol.style.width = '39%'; // Mengatur lebar kolom target
          var waktuCol = document.createElement('td');
          waktuCol.textContent = item.waktu;
          waktuCol.style.width = '6%'; // Mengatur lebar kolom waktu
          var picCol = document.createElement('td');
          picCol.textContent = item.pic;
          picCol.style.width = '6%'; // Mengatur lebar kolom pic

          // Tambahkan kolom ke row
          row.appendChild(targetCol);
          row.appendChild(waktuCol);
          row.appendChild(picCol);

          // Tambahkan row ke tbody
          tbody.appendChild(row);
        });
      } else {
        console.error(xhr.statusText);
      }
    };

    // Mengirim permintaan
    xhr.send();
  }