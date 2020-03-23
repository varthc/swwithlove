<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
/*var_dump(openssl_get_cert_locations());
echo "openssl.cafile: ", ini_get('openssl.cafile'), "\n";
echo "curl.cainfo: ", ini_get('curl.cainfo'), "\n";*/
require_once __DIR__ . '/vendor/autoload.php';

use SWAPI\SWAPI;

$swapi = new SWAPI;
$film = $swapi->films()->get(1);

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>Star Wars | Review with love</title>
  <meta name="description" content="A Star Wars review site with my baby">
  <meta name="author" content="varthc">

  <link rel="icon" href="./images/favicon.ico" type="image/ico" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/styles.css?<?= time() ?>">
</head>

<body>
  <div class="container">
    <section class="intro">
      A long time ago, in a galaxy far,<br> far away....
    </section>
    <section class="content">
      <h1>
        Próxima Película: <?= $film->title; ?>
      </h1>

      <div class="row">

        <div class="col">
          <div class="deathStar">
            <div class="circle"></div>
            <div class="trait"></div>
            <span id="days"></span>
          </div>
          <label>Días</label>
        </div>
        <div class="col">
          <div class="deathStar">
            <div class="circle"></div>
            <div class="trait"></div>
            <span id="hours"></span>
          </div>
          <label>Horas</label>
        </div>
        <div class="col">
          <div class="deathStar">
            <div class="circle"></div>
            <div class="trait"></div>
            <span id="mins"></span>
          </div>
          <label>Mins</label>
        </div>
        <div class="col">
          <div class="deathStar">
            <div class="circle"></div>
            <div class="trait"></div>
            <span id="secs"></span>
          </div>
          <label>Secs</label>
        </div>
      </div>
    </section>
  </div>

  <footer>
    © C / (varthc)
  </footer>
  <script src="./scripts/script.js?<?= time() ?>"></script>
  <script src="./scripts/timer.js?<?= time() ?>"></script>
</body>

</html>