<html>
<head>
<title>Transaksi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100 font-sans">
  <div class="flex">

       <!-- Sidebar -->
   <div class="w-1/5 bg-teal-700 text-white min-h-screen p-4">
    <div class="flex items-center mb-8">
     <img alt="Griya Oliver Logo" class="mr-2" height="70" src="<?= base_url('assets/img/griya.svg'); ?>" width="130"/>
    </div>
    <nav>
     <ul> 
      <li class="mb-4"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/beranda') ?>">
        <i class="fas fa-home mr-2"></i>Beranda</a>
      </li>
      <li class="mb-4"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/kamar') ?>">
        <i class="fas fa-bed mr-2"></i>Kamar Kost</a>
      </li>
      <li class="mb-4"><a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/penyewa') ?>">
        <i class="fas fa-users mr-2"></i>Penyewa Kost</a>
      </li>
      <li class="mb-4"><a class="flex items-center p-2 bg-teal-600 rounded" href="<?= base_url('admin/transaksi') ?>">
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

   <!-- main content -->
   <div class="w-4/5 p-6">
    <div class="flex justify-between items-center mb-6">
     <h1 class="text-3xl font-bold text-teal-700">
      Penghuni Kost
     </h1>
     <div class="flex items-center space-x-4">
      <div class="text-gray-600">
       <i class="fas fa-clock">
       </i>
       <span>
        03:36:43
       </span>
      </div>
      <div class="text-gray-600">
       <i class="fas fa-calendar-alt">
       </i>
       <span>
        02 January 2023
       </span>
      </div>
      <div class="bg-gray-300 p-2 rounded-full">
       <i class="fas fa-user">
       </i>
      </div>
     </div>
    </div>
    <div class="flex mb-4">
     <button class="bg-teal-600 text-white px-4 py-2 rounded mr-2 flex items-center">
      <i class="fas fa-plus mr-2"> </i> Tambah </button>
     <div class="ml-auto flex items-center">
      <label class="mr-2" for="filter">Filter</label>
      <select class="border border-gray-300 rounded px-2 py-1 mr-2" id="filter">
       <option>Pilih</option>
       <option value="lantai-1">Lantai 1</option>
       <option value="lantai-2">Lantai 2</option>
      </select>
      <input class="border border-gray-300 rounded px-2 py-1 mr-2" placeholder="Search" type="text"/>
      <button class="bg-teal-600 text-white px-4 py-2 rounded">Selengkapnya</button>
     </div>
    </div>
    <div class="container mx-auto mt-10">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">No Faktur</th>
                    <th class="py-2 px-4 border-b">Kamar</th>
                    <th class="py-2 px-4 border-b">ID User</th>
                    <th class="py-2 px-4 border-b">Tanggal Masuk</th>
                    <th class="py-2 px-4 border-b">Tanggal Keluar</th>
                    <th class="py-2 px-4 border-b">Lama Menginap</th>
                    <th class="py-2 px-4 border-b">Tarif</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Telpon</th>
                    <th class="py-2 px-4 border-b">Pesan</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b text-center">1</td>
                    <td class="py-2 px-4 border-b text-center">5cdd13d92b4a7</td>
                    <td class="py-2 px-4 border-b text-center">004</td>
                    <td class="py-2 px-4 border-b text-center">1</td>
                    <td class="py-2 px-4 border-b text-center">2019-05-17</td>
                    <td class="py-2 px-4 border-b text-center">2019-05-18</td>
                    <td class="py-2 px-4 border-b text-center">1</td>
                    <td class="py-2 px-4 border-b text-center">100000</td>
                    <td class="py-2 px-4 border-b text-center">afri yulianti</td>
                    <td class="py-2 px-4 border-b text-center">098765476</td>
                    <td class="py-2 px-4 border-b text-center">saya booking dulu!!</td>
                    <td class="py-2 px-4 border-b text-center">
                        <button class="bg-green-500 text-white px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b text-center">2</td>
                    <td class="py-2 px-4 border-b text-center">5cdd13e92a6a5</td>
                    <td class="py-2 px-4 border-b text-center">005</td>
                    <td class="py-2 px-4 border-b text-center">1</td>
                    <td class="py-2 px-4 border-b text-center">2022-06-30</td>
                    <td class="py-2 px-4 border-b text-center">2022-07-02</td>
                    <td class="py-2 px-4 border-b text-center">2</td>
                    <td class="py-2 px-4 border-b text-center">2000000</td>
                    <td class="py-2 px-4 border-b text-center">udin</td>
                    <td class="py-2 px-4 border-b text-center">087654678876</td>
                    <td class="py-2 px-4 border-b text-center">a</td>
                    <td class="py-2 px-4 border-b text-center">
                        <button class="bg-green-500 text-white px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>