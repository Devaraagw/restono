<html>
 <head>
  <title>Griya Oliver Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body onLoad='startTime()' class="bg-gray-100" >
  <div class="flex">

   <!-- Sidebar -->
   <div class="w-1/5 bg-teal-700 text-white min-h-screen p-4">
    <div class="flex items-center mb-8">
     <img alt="Griya Oliver Logo" class="mr-2" height="70" src="<?= base_url('assets/img/griya.svg'); ?>" width="130"/>
     <!-- <span class="text-xl font-bold">
      Griya Oliver
     </span> -->
    </div>
    <nav>
     <ul>
      <li class="mb-4"><a class="flex items-center p-2 bg-teal-600 rounded" href="<?= base_url('admin/beranda') ?>">
        <i class="fas fa-home mr-2"></i>Beranda</a>
      </li>
      <li class="mb-4"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/kamar') ?>">
        <i class="fas fa-bed mr-2"></i>Kamar Kost</a>
      </li>
      <li class="mb-4"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/penyewa') ?>">
        <i class="fas fa-users mr-2"></i>Penyewa Kost</a>
      </li>
      <li class="mb-4"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/transaksi') ?>">
        <i class="fas fa-file-invoice-dollar mr-2"></i>Transaksi</a>
      </li>
      <li class="mb-4"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/konfirmasi') ?>">
        <i class="fas fa-check-circle mr-2"></i>Konfirmasi</a>
      </li>
      <li class="mb-4"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/laporan') ?>">
        <i class="fas fa-chart-bar mr-2"></i>Laporan</a>
      </li>
      <li class="mt-8"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="#">
        <i class="fas fa-sign-out-alt mr-2"></i>Keluar</a>
      </li>
      
     </ul>
    </nav>
   </div>

   <!-- Main Content -->
   <div class="w-4/5 p-8">
    <div class="flex justify-between items-center mb-8">
     <h1 class="text-2xl font-bold text-teal-700">
      Beranda
     </h1>
     <div class="flex items-center">
      <span class="mr-4" id="waktu">
       01:22:14
      </span>
      <span class="mr-4" id="tanggal">
       02 January 2023
      </span>
      <div class="flex items-center">
       <img alt="User Avatar" class="rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/tHtpVwEeJuwdBC5eVFzQ8vWGRXwHiYel4KdL9NM6SfnX9ufcC.jpg" width="30"/>
       <span>
        nico
       </span>
      </div>
     </div>
    </div>
    <div class="grid grid-cols-5 gap-4 mb-8">
     <div class="bg-white p-4 rounded shadow text-center">
      <i class="fas fa-users text-2xl text-teal-700 mb-2">
      </i>
      <div class="text-2xl font-bold">
       2
      </div>
      <div>
       Penghuni Kost
      </div>
     </div>
     <div class="bg-white p-4 rounded shadow text-center">
      <i class="fas fa-bed text-2xl text-teal-700 mb-2">
      </i>
      <div class="text-2xl font-bold">
       2
      </div>
      <div>
       Kamar Kost
      </div>
     </div>
     <div class="bg-white p-4 rounded shadow text-center">
      <i class="fas fa-exclamation-circle text-2xl text-teal-700 mb-2">
      </i>
      <div class="text-2xl font-bold">
       3
      </div>
      <div>
       Jumlah Komplain
      </div>
     </div>
     <div class="bg-white p-4 rounded shadow text-center">
      <i class="fas fa-file-invoice-dollar text-2xl text-teal-700 mb-2">
      </i>
      <div class="text-2xl font-bold">
       3
      </div>
      <div>
       Jumlah Tagihan
      </div>
     </div>
     <div class="bg-white p-4 rounded shadow text-center">
      <i class="fas fa-coins text-2xl text-teal-700 mb-2">
      </i>
      <div>
       Total Pendapatan
      </div>
      <div class="text-2xl font-bold text-teal-700">
       Rp 1.500.000
      </div>
     </div>
    </div>
    <div class="bg-white p-8 rounded shadow text-center">
     <h2 class="text-2xl font-bold text-teal-700 mb-4">
      Halo, nico
     </h2>
     <p>
      Selamat datang di Griya Oliver. Aplikasi ini memudahkan dalam mengelola bisnis kost Anda dengan mudah dan praktis.
     </p>
    </div>
   </div>
  </div>
        <script>
            function startTime() {
                const today = new Date();
                let date = today.getDate();
                let month = today.getUTCMonth();
                let year = today.getFullYear();
                let h = today.getHours();
                let m = today.getMinutes();
                let s = today.getSeconds();
                date = checkTime(date);
                month = bulan(month);
                month = checkTime(month);
                m = checkTime(m);
                s = checkTime(s);

                const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                const d = new Date();
                let day = days[d.getDay()];

                document.getElementById("hari").innerHTML = day;
                document.getElementById("tanggal").innerHTML = date + "/" + month + "/" + year;
                document.getElementById("waktu").innerHTML = h + ":" + m + ":" + s;
                setTimeout(startTime, 1000);
            }

            function bulan(b) {
                if (b < 13) {
                    b = 1 + b
                }; // add zero in front of numbers < 10
                return b;
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i
                }; // add zero in front of numbers < 10
                return i;
            }
        </script>
 </body>
</html>