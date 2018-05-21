</<?php
include "header.php";
include "footer.php"; ?>
<style>
table {
	padding: 0px;
	margin-top: 0.75em;
	margin-bottom: 0.75em;
	background: white;
	text-align: left;
  align:center;
  border-radius: 15;
}
</style>
<form action="proses_simpan.php" method="POST">
<h1><center><font color="black">Edit Akun</center></font></h1>
<table border="0" cellspacing="2" cellpadding="15" align="center">
<tr>
  <td>Username</td>
  <td>:</td>
  <td><input type="text" name="user"></td>
</tr>
<tr>
  <td>nama</td>
  <td>:</td>
  <td><input type="text" name="nama"></td>
</tr>
<tr>
  <td>No Telpon</td>
  <td>:</td>
  <td><input type="text" name="no_tlpn"></td>
</tr>
<tr>
  <td>Alamat</td>
  <td>:</td>
  <td><input type="text" name="alamat"></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="submit" value="Simpan"></td>
