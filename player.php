<?php

$game = parse_ini_file('db/game.ini', true);

$kk = false;
if (isset($_GET['s'])) {
  $secret = $_GET['s'];
  if (isset($game[$secret])) {
    $santa = $game[$secret];
    $kk = $santa['kk'];
  }
}

if (!$kk) {
  $msg = urlencode('Oh Snap! Please try again.');
  header('Location: /?err=' . $msg);
  exit;
}

?>

<?php include 'header.php' ?>

<div class="container">
  <h1 class="left">Your kris kringle is...</h1>
  <div class="head-wrapper">
    <img src="img/heads/<?php echo strtolower($kk) ?>.jpg">
  </div>
</div>

<?php include 'footer.php' ?>