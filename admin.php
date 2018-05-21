<!DOCTYPE html>
<html>
  <head>
    <title>Animeee</title>
  </head>
<body>
  <style>
  body{
    height:100%;
    background: grey;
  }
  footer{
    height:40px;
    line-height:10px;
    width: 98.5%;
    background:#333;
    color:#fff;

    position:absolute;
    bottom:0px;
  }
  header{
    height:130px;
    line-height:5px;
    width: 99.7%;
    background:url(header.jpg);
    color:#fff;

    position:relative;
    up:0px;
  }

  </style>
  <header>
    <center>
      <p><font color="black" size="1pt" >||</font></p>
      <p><font color="black" size="1pt" >||</font></p>
      <p><font face="Bradley Hand ITC" size="20pt"><b>ANIMEEE WALLPAPER</b></p></font>
      <p><font color="black" size="1pt" >||</font></p>
</center>
    <center>
    <h><font size="5pt">Halaman Admin</font></h>
  </center>
    </header>
    <center>
      <h1>AKUN YANG TERDAFTAR</h1>
<?php
  include "koneksi.php";
  $query="SELECT* FROM akun";
  $data=mysqli_query($koneksi, $query);

echo '<table border="1px">
  <thead>
    <tr>
      <td><center><font color="white" size="5px">NO</font></td>
      <td><center><font color="white" size="5px">User</font></td>
      <td><center><font color="white" size="5px">Email</font></td>
      <td><center><font color="white" size="5px">Password</font></td>
      <td><center><font color="white" size="5px">Nama</font></td>
      <td><center><font color="white" size="5px">Nomor Telpon</font></td>
      <td><center><font color="white" size="5px">Alamat</font></td>
    </tr>
    </thead>
    <tbody>';

  while($row= mysqli_fetch_array($data))
{
echo
  '<tr>
  <td>'.$row['no'].'</td>
  <td>'.$row['user'].'</td>
  <td>'.$row['email'].'</td>
  <td>'.$row['password'].'</td>
  <td>'.$row['nama'].'</td>
  <td>'.$row['no_tlpn'].'</td>
  <td>'.$row['alamat'].'</td>
  </tr>';
}
echo '
</tbody>
</table>';
?>
    <?php
include "footer.php";
    ?>
  <!-- navbar -->
