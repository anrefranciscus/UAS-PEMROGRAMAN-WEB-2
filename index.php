<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login Form Design | CodeLab</title> -->
    <link rel="stylesheet" href="./process/style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">
        Login 
      </div>
        <form action="./process/proseslogin.php" method="post">
              <div class="field">
                <input type="text" name="username" required>
                <label>Username</label>
              </div>
        <div class="field">
              <input type="password" name="password" required>
              <label>Password</label>
            </div>
        <div class="content">
              <div class="checkbox">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
              </div>
        <div class="pass-link">
          <a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
              <input type="submit" value="Login">
              </div>
          <div class="signup-link">
               Tidak Punya Akun ? <a href="./process/daftar.php">Signup Now</a></div>
        </form>
</div>
</body>
</html>
