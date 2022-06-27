<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/deb77c354c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="login1.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin">
          <form action="system_login.php" class="sign-in-form" method="post">
            <h1>Selamat Datang Diportal Akademik</h1>
            <h2>Universitas Negeri Konoha</h2>
            <img src="https://cf.shopee.co.id/file/8c0e30e992e002b8e3ea6537b055d0ab_tn">
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" id="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" />
            </div>
            <button type="submit" value="Login" class="btn solid" name="login_dosen">Dosen</button>
            <button type="submit" value="Login" class="btn solid" name="login_mhs">Mahasiswa</button>
          </form>
        </div>
      </div>
  </body>
</html> 