<html>
 <head>
  <title>Kamar Kost</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-sans">
  <div class="flex h-screen">

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
      <li class="mb-4"><a class="flex items-center p-2 bg-teal-600 rounded" href="<?= base_url('admin/kamar') ?>">
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
   <div class="w-4/5 p-6">
    <div class="flex justify-between items-center mb-6">
     <h1 class="text-3xl font-bold text-teal-700">Kamar Kost</h1>
     <div class="flex items-center">
      <span class="mr-4">03:28:35</span>
      <span class="mr-4">02 January 2023</span>
      <i class="fas fa-user-circle text-2xl">
      </i>
     </div>
    </div>
    <div class="flex mb-4">
     <button class="bg-teal-600 text-white px-4 py-2 rounded mr-2 flex items-center">
      <i class="fas fa-plus mr-2"> </i> Tambah </button>
     <!-- <button class="bg-teal-600 text-white px-4 py-2 rounded mr-2 flex items-center">
      <i class="fas fa-edit mr-2">
      </i>
      Edit
     </button> -->
     <!-- <button class="bg-teal-600 text-white px-4 py-2 rounded flex items-center">
      <i class="fas fa-trash mr-2">
      </i>
      Delete
     </button> -->
     <div class="ml-auto flex items-center">
      <label class="mr-2" for="filter">Filter</label>
      <select class="border border-gray-300 rounded px-2 py-1 mr-2" id="filter">
       <option>Pilih Lantai</option>
       <option value="lantai-1">Lantai 1</option>
       <option value="lantai-2">Lantai 2</option>
      </select>
      <input class="border border-gray-300 rounded px-2 py-1 mr-2" placeholder="Search" type="text"/>
      <button class="bg-teal-600 text-white px-4 py-2 rounded">Selengkapnya</button>
     </div>
    </div>
    <table class="min-w-full bg-white border">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Kamar</th>
                    <th class="py-2 px-4 border">Lantai</th>
                    <th class="py-2 px-4 border">Tipe</th>
                    <th class="py-2 px-4 border">Tarif</th>
                    <th class="py-2 px-4 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border text-center">001</td>
                    <td class="py-2 px-4 border text-center">2</td>
                    <td class="py-2 px-4 border text-center">Single</td>
                    <td class="py-2 px-4 border text-center"> Rp 550.000</td>
                    <td class="py-2 px-4 border text-center">
                        <button class="bg-green-500 text-white px-4 py-2 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Detail</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border text-center">002</td>
                    <td class="py-2 px-4 border text-center">1</td>
                    <td class="py-2 px-4 border text-center">Double</td>
                    <td class="py-2 px-4 border text-center"> Rp 650.000</td>
                    <td class="py-2 px-4 border text-center">
                        <button class="bg-green-500 text-white px-4 py-2 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
   </div>
  </div>
 </body>
</html>