<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Journey - Register </title>
    <link rel="stylesheet" href="plank/css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="/simpanuser" method="POST">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Pengguna</span>
            <input type="text" name="nama" placeholder="Masukkan Nama" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Masukkan Email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password"  placeholder="Masukkan Password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <small>Sudah punya akun? <a href="/auth">login</a> sekarang</small>
      </form>
    </div>
  </div>

</body>
</html>
