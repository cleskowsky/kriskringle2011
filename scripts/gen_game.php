<?php

$players = $santas = array(
  array('Max', 'max.schwade@gmail.com'),
  array('Csilla', 'cschwade@sympatico.ca'),
  array('Grampa', ''),
  array('Christel', ''),
  array('Eva', 'eves_mailbox@yahoo.ca'),
  array('Hedi', ''),
  array('Christian', 'christian@leskowsky.net'),
  array('Carmen', 'carmenw_79@hotmail.com'),
  array('Andrea', 'silverweed@hotmail.com'),
  array('Sacha', 'milestonemotorsports@gmail.com'),
  array('James', 'daihoc107@hotmail.com'),
  array('Kalia', ''),
  array('Tom', 'allofmystuff@hotmail.com'),
  array('Lorna', 'lolasletters25@hotmail.com')
);

shuffle($players);

// generate game

$kriskringles = array();

foreach ($santas as $santa) {

  $santa_name  = $santa[0];
  $santa_email = $santa[1];

  // select santa's kk

  $player = array_shift($players);
  $player_name = $player[0];
  if ($player_name === $santa_name) {
    array_push($players, $player);
    $player = array_shift($players);
    $player_name = $player[0];
  }

  // generate secret code

  $alphas = range('a', 'z');
  shuffle($alphas);
  $secret_code = join('', array_slice($alphas, 0, 4));

  $kriskringles[$secret_code] = array(
    'santa'       => $santa_name,
    'santa_email' => $santa_email,
    'kk'          => $player_name
  );
}

// write game to stdout

foreach ($kriskringles as $secret_code => $player) {
  $santa = $player['santa'];
  $santa_email = $player['santa_email'];
  $kk = $player['kk'];
  echo <<<TMPL
[$secret_code]
santa = $santa
santa_email = $santa_email
kk = $kk


TMPL;
}
