<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Daftar Pengguna</title>
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
 <h1>Daftar User</h1>
 <table>
  <tr>
   <th>Nama Pengguna</th>
   <th>Email</th>
  </tr>
  <?php foreach ($users as $user): ?>
   <tr>
    <td>
     <?= $user->username ?>
    </td>
    <td>
     <?= $user->email ?>
    </td>
   </tr>
  <?php endforeach; ?>
 </table>
</body>

</html>