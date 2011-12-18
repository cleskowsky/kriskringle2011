<?php

$players = $santas = array(
  'Max',
  'Csilla',
  'Grampa',
  'Christel',
  'Eve',
  'Hedi',
  'Christian',
  'Carmen',
  'Andrea',
  'Sacha',
  'James',
  'Kalia',
  'Tom',
  'Lorna'
);

shuffle($players);

// generate game

$kriskringles = array();

foreach ($santas as $santa) {

  // select santa's kk

  $player = array_shift($players);
  if ($player === $santa) {
    array_push($players, $player);
    $player = array_shift($players);
  }

  // generate access code

  $alphas = range('a', 'z');
  shuffle($alphas);
  $access_code = join('', array_slice($alphas, 0, 4));

  $kriskringles[$access_code] = array(
    'santa' => $santa,
    'kk'    => $player
  );
}

// write game to stdout

foreach ($kriskringles as $access_code => $player) {
  $santa = $player['santa'];
  $kk = $player['kk'];
  echo <<<TMPL
[$access_code]
santa = $santa
kk = $kk


TMPL;
}
