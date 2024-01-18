<?php
    // cek tombol submitnya bree
if( isset($_POST["submit"]) ) {
    // cek username&password lol
    if( $_POST["username"] == "acham" && $_POST["password"] == 
    "9722" ) {
    
    // nek bener, lanjut halaman
        header("location: admin.php");
        exit;
    } else {
    // nek salah, tampilkan salah
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <h1>Login admin</h1>
    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic">username / password lu salah pea!</p>
    <?php endif;?>
    <ul>
      <form action="" method="post">
        <li>
          <label for="username">Username :</label>
          <input type="text" name="username" id="username" />
        </li>
        <li>
          <label for="password">Password :</label>
          <input type="password" name="password" id="password" />
        </li>
        <li>
          <button type="submit" name="submit">Login</button>
        </li>
      </form>
    </ul>
  </body>
</html>