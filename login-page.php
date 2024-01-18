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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Page</title>
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .Poppins {
      font-family: "Poppins", sans-serif;
    }
  </style>
  <body>
    <main
      class="Poppins bg-blue-400 mt-20 p-10 rounded-3xl text-center mx-auto max-w-[500px]">
      <div class="ClassName">
        <div class="ClassName">
          <img
            src="../PHP-Login/src/assets/games.jpeg"
            class="w-14 mx-auto rounded-full"
            alt="" />
        </div>
        <h1 class="mt-5 text-3xl tracking-tighter font-semibold">Login admin</h1>
        <div class="ClassName"></div>
      </div>
      <?php if( isset($error) ) : ?>
      <p style="color: red; font-style: italic">
        username / password lu salah pea!
      </p>
      <?php endif;?>
      <ul class="mt-6">
        <form action="" method="post">
          <li class="ClassLabel grid">
            <label for="username font-semibold">Username </label>
            <input
              class="p-2 mt-3 text-sm rounded-lg"
              type="text"
              name="username"
              placeholder="Username"
              id="username" />
          </li>
          <li class="ClassLabel mt-6 grid">
            <label for="password font-semibold">Password </label>
            <input
              class="p-2 mt-3 text-sm rounded-lg"
              type="password"
              name="password"
              placeholder="Password"
              id="password" />
          </li>
          <li
            class="mt-12 bg-gray-200 w-32 p-2 hover:scale-95 duration-200 rounded-full mx-auto">
            <button class="font-semibold" type="submit" name="submit">
              Login
            </button>
          </li>
        </form>
      </ul>
    </main>
  </body>
</html>
