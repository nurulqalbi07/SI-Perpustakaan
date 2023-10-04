<?php
    session_start();
    include 'koneksi.php';

    if(isset($_POST['submit'])) {

        //cek keberadaan akun
        $cek = mysqli_query($conn, "SELECT * FROM admin 
        WHERE username ='".htmlspecialchars($_POST['username'])."' AND password = '".($_POST['password'])."' ");

        if(mysqli_num_rows($cek) > 0) {
            $a = mysqli_fetch_object($cek);

            $_SESSION['stat_login'] = true;
            $_SESSION['id'] = $a->id_admin;
            $_SESSION['nama'] = $a->nama_admin;
            echo '<script>window.location="index.php"</script>';
        }else{
            echo '<script>alert("Login Gagal, Username atau Password Salah")</script>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components." />
    <meta name="msapplication-tap-highlight" content="no" />

    <link href="style.css" rel="stylesheet" />
  </head>
<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <label for="username" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input id="username" class="form-content" type="" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
      </form>
    </div>
  </div>
</body>

</html>