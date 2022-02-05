
<?php
  require "includes\config.php";
  require "includes\dp.php";
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $config['title'] ?></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <header class="header">
  <div class="container">
  <div class="header_inner">
  <div class="header_logo"><?php echo $config['title'] ?></div>
  <div class="header_timer"><?php
   echo date("l jS F Y h:i:s a") ?></div>
  <nav class="nav">
    <?php if (!isset($_SESSION['logged_user'])) : ?>
  <a class="nav_link" href="create_ac.php">create</a>
  <a class="nav_link " href="login.php">Login</a>
<?php endif;?>
  </nav>
  </div>
</div>
  </header>

  <div class="intro">
  <div class="container">
  <div class="intro_inner">
    <?php if (isset($_SESSION['logged_user'])) : ?>
  <h1 class="intro_title">Hi, <?php echo $_SESSION['logged_user']->login; ?>!</h1>
<?php endif; ?>

<?php if (!isset($_SESSION['logged_user'])) : ?>
  <a class="btn" href="login.php">Log in</a>
<?php else:?>
  <a class="btn" href="logout.php">Выйти</a>
  <?php endif;?>
  </div>
  </div>
  </div>
  </body>
</html>
