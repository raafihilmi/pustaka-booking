<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Daftar Buku</title>
 <style>
  th {
   padding: 1rem;
   background-color: #FC4100;
   color: white;
  }

  td {
   text-align: left;
   padding: 0.6rem;
  }

  tr:nth-child(even) {
   background-color: #f2f2f2;
  }

  tr:hover {
   background-color: #FFC55A;
  }
 </style>
</head>

<body>
 <h1>Daftar Buku</h1>
 <table>
  <tr>
   <th>Judul Buku</th>
   <th>Pengarang</th>
   <th>Penerbit</th>
   <th>Tahun Terbit</th>
   <th>ISBN</th>
   <th>Stok</th>
   <th>Dipinjam</th>
   <th>Dibooking</th>
  </tr>
  <?php foreach ($buku as $row): ?>
   <tr>
    <td>
     <?= $row->judul_buku ?>
    </td>
    <td>
     <?= $row->pengarang ?>
    <td>
     <?= $row->penerbit ?>
    </td>
    <td>
     <?= $row->tahun_terbit ?>
    </td>
    <td>
     <?= $row->isbn ?>
    </td>
    <td>
     <?= $row->stok ?>
    </td>
    <td>
     <?= $row->dipinjam ?>
    </td>
    <td>
     <?= $row->dibooking ?>
    </td>
   </tr>
  <?php endforeach; ?>
 </table>
</body>

</html>