</<?php
include "proses_akun.php";
include "header.php";
include "footer.php"; ?>
<style>
table {
	padding: 0px;
	margin-top: 0.75em;
	margin-bottom: 0.75em;
	background: white;
	text-align: left;
  border-radius: 15;
}
div.data{
	text-align: left;
}
</style>
<h1><center><font color="black">Akun Anda</font></center></h1>
<table border="0" cellspacing="2" cellpadding="15" align="center">
<tr align="left" bgcolor="gray">
</tr>
<tr>
<div class="data"><td>Username</td><td>:</td><td><?php echo $user_session;?></td></div>
</tr>
<tr>
<div class="data"><td>Nama</td><td>:</td><td><?php echo $nama_session; ?></td></div>
</tr>
<tr>
<div class="data"><td>Nomor Telpon</td><td>:</td><td><?php echo $no_tlpn_session; ?></td></div>
</tr>
<tr>
<div class="data"><td>Alamat</td><td>:</td><td><?php echo $alamat_session; ?></td></div>
</tr>
</table>
<center>
<h><font size="3pt"><a href=edit.php><input type="submit" value="Edit Profile"></font></h>
<h><font size="3pt"><a href=login.php><input type="submit" value="Logout"></font></h>
<h><font size="3pt"><a href=hapus.php><input type="submit" value="Hapus akun"></font></h>
</center>
