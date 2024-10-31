<html>
 <head>
  <title>
   Penghuni Kost
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
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
      <li class="mb-4">
       <a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/beranda') ?>">
        <i class="fas fa-home mr-2">
        </i>
        Beranda
       </a>
      </li>
      <li class="mb-4">
       <a class="flex items-center p-2 hover:bg-teal-600 rounded" href="<?= base_url('admin/kamar') ?>">
        <i class="fas fa-bed mr-2">
        </i>
        Kamar Kost
       </a>
      </li>
      <li class="mb-4">
       <a class="flex items-center p-2 bg-teal-600 rounded" href="<?= base_url('admin/penyewa') ?>">
        <i class="fas fa-users mr-2">
        </i>
        Penyewa Kost
       </a>
      </li>
      <li class="mb-4">
       <a class="flex items-center p-2 hover:bg-teal-600 rounded" href="#">
        <i class="fas fa-file-invoice-dollar mr-2">
        </i>
        Tagihan
       </a>
      </li>
      <li class="mb-4">
       <a class="flex items-center p-2 hover:bg-teal-600 rounded" href="#">
        <i class="fas fa-chart-line mr-2">
        </i>
        Laporan
       </a>
      </li>
      <li class="mb-4">
       <a class="flex items-center p-2 hover:bg-teal-600 rounded" href="#">
        <i class="fas fa-exclamation-circle mr-2">
        </i>
        Komplain
       </a>
      </li>
      <li class="mb-4">
       <a class="flex items-center p-2 hover:bg-teal-600 rounded" href="#">
        <i class="fas fa-user-circle mr-2">
        </i>
        Akun Penghuni
       </a>
      </li>
      <li class="mt-8">
       <a class="flex items-center p-2 hover:bg-teal-600 rounded" href="#">
        <i class="fas fa-sign-out-alt mr-2">
        </i>
        Keluar
       </a>
      </li>
     </ul>
    </nav>
   </div>

   <!-- Main Content -->
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
    <div class="flex items-center space-x-4 mb-6">
     <button class="bg-teal-600 text-white px-4 py-2 rounded flex items-center">
      <i class="fas fa-plus mr-2">
      </i>Tambah</button>

     <button class="bg-teal-600 text-white px-4 py-2 rounded flex items-center">
      <i class="fas fa-edit mr-2">
      </i>Edit</button>

     <button class="bg-teal-600 text-white px-4 py-2 rounded flex items-center">
      <i class="fas fa-trash mr-2">
      </i>Delete</button>

     <div class="flex items-center space-x-2">
      <label class="text-gray-600" for="filter">
       Filter
      </label>
      <select class="border border-gray-300 rounded px-2 py-1" id="filter">
       <option>
        -----Pilih-----
       </option>
      </select>
     </div>
     <div class="flex items-center border border-gray-300 rounded px-2 py-1">
      <input class="outline-none" placeholder="Search" type="text"/>
      <i class="fas fa-search text-gray-600">
      </i>
     </div>
    </div>
    <table class="w-full bg-white rounded shadow">
     <thead>
      <tr class="bg-gray-200 text-gray-600">
       <th class="p-2">
        Kode Penghuni
       </th>
       <th class="p-2">
        Nama
       </th>
       <th class="p-2">
        Kamar
       </th>
       <th class="p-2">
        Tanggal Masuk
       </th>
       <th class="p-2">
        Alamat
       </th>
       <th class="p-2">
        Tanggal Keluar
       </th>
       <th class="p-2">
        No Telp
       </th>
      </tr>
     </thead>
     <tbody>
      <tr class="border-b">
       <td class="p-2">
        KP001
       </td>
       <td class="p-2">
        Nabila Asy Syifa
       </td>
       <td class="p-2">
        KA001
       </td>
       <td class="p-2">
        2023-01-12
       </td>
       <td class="p-2">
        Tegal
       </td>
       <td class="p-2">
        2023-02-11
       </td>
       <td class="p-2">
        085492821133
       </td>
      </tr>
      <tr>
       <td class="p-2">
        KP002
       </td>
       <td class="p-2">
        Jessica
       </td>
       <td class="p-2">
        KM005
       </td>
       <td class="p-2">
        2023-01-08
       </td>
       <td class="p-2">
        Blitar
       </td>
       <td class="p-2">
        2023-02-11
       </td>
       <td class="p-2">
        089677243382
       </td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>