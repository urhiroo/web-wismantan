<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Selamat datang di WIS-MANTAN</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>               
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">WIS-MANTAN</a>

        <ul class="nav_items">
          <li class="nav_item">
            <a href="index.php" class="nav_link">Home</a>
            <a href="my_order.php" class="nav_link">My Order</a>
            <a href="about.php" class="nav_link">About</a>
          </li>
        </ul>

        <button class="button" id="form-open">Login</button>
      </nav>
    </header>

    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <div class="form login_form">
          <form action="index.php" method="post">
            <h2>Login</h2>

            <div class="input_box">
              <input type="text" name="username" placeholder="Enter your Username" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" name="pw" placeholder="Enter your password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Remember me</label>
              </span>
              <a href="#" class="forgot_pw">Forgot password?</a>
            </div>

            <button type="submit" name="button" class="button">Login Now</button>

            <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
          </form>
        </div>

        <div class="form signup_form">
          <form action="#">
            <h2>Signup</h2>

            <div class="input_box">
              <input type="text" name="username" placeholder="Enter your username" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password"  name="pw" placeholder="Create password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" name="pw" placeholder="Confirm password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button type="submit" name="submit" class="button">Signup Now</button>

            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
        </div>
    </section>

    <div class="title">
        <h1>WIS-MANTAN</h1>
        <p>Solusi untuk menemukan tempat liburan khusus di daerah kalimantan</p>  
        <img src="Group 2.png" alt="Gambar">
    </div>


    <script src="script.js"></script>

  </body>
</html>
<?php
include "koneksi.php";
session_start();

if (isset($_POST['button'])) {
    $username = $_POST['username'];
    $pw = $_POST['pw'];
    $sql = "SELECT * FROM pengguna where username = '$username' and pw = '$pw' ";
    $result = mysqli_query($mysqli, $sql);
    $return = mysqli_fetch_array($result);

    if ($return) {
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['pw'] = $_POST['pw'];

        echo "<script>alert('Selamat datang $username');
                document.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Username atau password salah!');
            document.location.href = 'index.php'</script>";
    }

}
?>
