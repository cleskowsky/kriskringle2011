<?php

$game = parse_ini_file('db/game.ini', true);

$kk = false;
if (isset($_GET['c'])) {
  $code = $_GET['c'];
  if (isset($game[$code])) {
    $santa = $game[$code];
    $kk = $santa['kk'];
  }
}

if (!$kk) {
  $msg = urlencode('Please try again.');
  header('Location: /?err=' . $msg);
  exit;
}

?>

<div class="container">
  <p>Your KK is...</p>
  <img src="img/heads/<?php echo strtolower($kk) ?>.jpg">
</div>
