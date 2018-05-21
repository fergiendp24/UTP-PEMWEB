<html>
<style>

{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body{

    background: url("background.jpg");
    background-size: 40cm 20cm;
}

div.konten{
    background: #ffffff;
    width: 350px;
    margin: 40px auto 0;
    border-radius: 16px;
    min-height: 256px;
    overflow: hidden;
}

div.kepala{
    background: #f85252;
    padding: 10px 22px;
    height: 60px;
}

div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
}

div.lock{
    background-position: center;
    background-size: 38px;
    display: inline-block;
    width: 25px;
    height: 25px;
    margin-top: 0;
    float: left;
    margin-right: 10px;
}

div.artikel{
    padding:10px 22px 0;
    color: #808080;
}

div.artikel div.grup{
    margin: 16px 0;
}

div.artikel div.grup label,
div.artikel div.grup input{
    display: block;
}

div.artikel div.grup label{
    font-size: 13px;
}

div.artikel div.grup input[type="text"],
div.artikel div.grup input[type="password"]{
    width: 100%;
    height: 30px;
    padding: 0 10px;
    background: #eeeeee;
    border:none;
    color: #808080;
}

div.artikel div.grup input[type="submit"]{
    background: #33cd77;
    padding: 4px 16px;
    margin: 0 auto;
    border: 1px solid #33cd77;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
}

div.artikel div.grup input[type="submit"]:hover{
    background: #28a45e;
}
</style>
<head>
  <form name="mendaftar" action="proses_mendaftar.php" method="POST">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Mendaftar</h2>
        </div>
        <div class="artikel">
                <div class="grup">
                    <label for="user">Username</label>
                    <input type="text" required name="user" placeholder="Masukkan Username Anda">
                </div>
                <div class="grup">
                    <label for="email">E-mail Address</label>
                    <input type="text" required name="email" placeholder="Masukkan Alamat Email Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="text" required name="password" placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                    <label for="nama">Nama</label>
                    <input type="text" required name="nama" placeholder="Masukkan Nama Anda">
                </div>
                <div class="grup">
                    <label for="no_tlpn">No Telpon</label>
                    <input type="text" required name="no_tlpn" placeholder="Masukkan No Telpon Anda">
                </div>
                <div class="grup">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" required placeholder="Masukkan Alamat Anda">
                </div>
                <div class="grup">
                  <input type="submit" name="mendaftar" value="Mendaftar">
                </div></form>
                  <form name="batal" action="login.php">
              <div class="grup">
                <input type="submit" name="batal" value="Batal">
              </div>
            </form>
        </div>
    </div>
</body>
</html>
