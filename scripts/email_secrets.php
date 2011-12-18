<?php

$game = parse_ini_file('db/game.ini', true);

$send_email = false;
if (2 == count($argv)) {
  $send_email = true;
}

foreach ($game as $secret => $player) {
  $santa = $player['santa'];
  $santa_email = $player['santa_email'];

  if ($send_email and $santa_email) {

    // email the kk santas

    $to      = $santa_email;
    $subject = 'Your Leskowsky Family KrisKringle secret code...';
    $message = <<<MSG
Hello $santa,

Find out who your Kris Kringle is!

Visit: http://kriskringle.leskowsky.net
And type in your secret code: $secret

Notes:
1. You're not allowed to spend more than $25.
2. Have fun!
MSG;

    mail($to, $subject, $message);
    echo "Email sent to $to\n";
  } else {

    // let's see codes and santas

    $santa = str_pad($santa, 12);
    $santa_email = str_pad($santa_email, 33);

    echo "$santa $santa_email $secret\n";
  }
}
