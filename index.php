<?php
include "header.php";

if(isset($_GET["home"])){
  include "home.php";
}
else if(isset($_GET["kategori"])){
  include "kategori.php";
}
else if(isset($_GET["masuk_akun.php"])){
  include "masuk_akun.php";
}
else if(isset($_GET["kategori/girls"])){
  include "girls.php";
}
else if(isset($_GET["kategori/boys"])){
  include "boys.php";
}
else if(isset($_GET["kategori/cosplay"])){
  include "sketsa.php";
}
else if(isset($_GET["kategori/groups"])){
  include "groups.php";
}
else if(isset($_GET["kategori/fight"])){
  include "fight.php";
}
else if(isset($_GET["kategori/chibi"])){
  include "chibi.php";
}

include "footer.php";

 ?>
