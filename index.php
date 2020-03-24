<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
/*var_dump(openssl_get_cert_locations());
echo "openssl.cafile: ", ini_get('openssl.cafile'), "\n";
echo "curl.cainfo: ", ini_get('curl.cainfo'), "\n";*/
/*require_once __DIR__ . '/vendor/autoload.php';

use SWAPI\SWAPI;

$swapi = new SWAPI;
$film = $swapi->films()->get(1);*/

$films = array(
  'Ep. IV - New Hope',
  'Ep. V - Empire Strikes Back',
  'Ep. VI - Return of the Jedi',
  'Ep. I - The Phantom Menace',
  'Ep. II - Attack of the Clones',
  'Ep. III - Revenge of the Sith',
  'Rogue One',
  'Ep. VII - The Force Awakens',
  'Ep. VIII - The Last Jedi',
  'Ep. IX - Rise of Skywalker',
);

function datediffInWeeks($date1, $date2)
{
  if ($date1 > $date2) return datediffInWeeks($date2, $date1);
  $first = DateTime::createFromFormat('m/d/Y', $date1);
  $second = DateTime::createFromFormat('m/d/Y', $date2);
  return floor($first->diff($second)->days / 7);
}

$isBigger = date('m/d/Y') > '03/23/2020' ? 1 : 0;
$weeks = (datediffInWeeks('03/23/2020', date('m/d/Y')) + $isBigger);
?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>Star Wars | Reviewing the Saga with Naranjita</title>
  <meta name="description" content="A Star Wars review site with Naranjita">
  <meta name="author" content="varthc">

  <link rel="icon" href="./images/favicon.ico" type="image/ico" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/styles.css?<?= time() ?>">
  <link rel="stylesheet" type="text/css" href="./styles/fullpage.css?<?= time() ?>" />
  <link rel="stylesheet" type="text/css" href="./styles/examples.css?<?= time() ?>" />
</head>

<body>
  <header>
    <!-- <div id="container">
      <div id="burger">
        <div class="bun top"></div>
        <div class="filling"></div>
        <div class="bun bottom"></div>
      </div>
    </div>

    <nav>
      <ul>
        <li class="red">
          <a href="#" title="Home">🏡</a>
        </li>
        <li class="green">
          <a href="#">Jedi</a>
        </li>
        <li>
          <a href="#">Sith</a>
        </li>
      </ul>
    </nav>
-->
  </header>

  <ul id="menu">
    <li data-menuanchor="home" class="active"><a href="#home">Home</a></li>
    <li data-menuanchor="iv"><a href="#iv">Ep. IV</a></li>
  </ul>
  <div id="fullpage">
    <div class="section " id="section0">
      <div class="container">
        <section class="intro">
          A long time ago, in a galaxy far,<br> far away....
        </section>
        <section class="content">
          <img src="./images/iv/sw_logo.png" style="width:50%;">
          <h1>
            Próxima Película: <?= $films[$weeks] ?>
          </h1>

          <div class="row">

            <div class="col-md-3">
              <div class="deathStar">
                <div class="circle"></div>
                <div class="trait"></div>
                <span id="days"></span>
              </div>
              <label>Días</label>
            </div>
            <div class="col-md-3">
              <div class="deathStar">
                <div class="circle"></div>
                <div class="trait"></div>
                <span id="hours"></span>
              </div>
              <label>Horas</label>
            </div>
            <div class="col-md-3">
              <div class="deathStar">
                <div class="circle"></div>
                <div class="trait"></div>
                <span id="mins"></span>
              </div>
              <label>Mins</label>
            </div>
            <div class="col-md-3">
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
    </div>
    <div class="section" id="section1">
      <h1>Episode IV: A New Hope</h1>
      <p>Nos encontramos en un
        periodo de guerra civil. Las
        naves espaciales rebeldes,
        atacando desde una base
        oculta, han logrado su
        primera victoria contra
        el malvado Imperio
        Galáctico.
      </p>
      <p>Durante la batalla, los
        espías rebeldes han
        conseguido apoderarse de
        los planos secretos del
        arma total y definitiva del
        Imperio, la ESTRELLA
        DE LA MUERTE,
        una estación espacial
        acorazada, llevando en sí
        potencia suficiente para
        destruir a un planeta
        entero.
      </p>
      <p>
        Perseguida por los
        siniestros agentes del
        Imperio, la Princesa Leia
        vuela hacia su patria, a
        bordo de su nave espacial,
        llevando consigo los
        planos robados, que
        pueden salvar a su pueblo
        y devolver la libertad a la
        galaxia…
      </p>
      <div class="row images">
        <div class="col-md-4">
          <img src="./images/iv/vader_obiwan.jpg" class="img-fluid">
        </div>
        <div class="col-md-4">
          <img src="./images/iv/leia_r2d2.png" class="img-fluid">
        </div>
        <div class="col-md-4">
          <img src="./images/iv/luke_stormtrooper.jpg" class="img-fluid">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 text-right">
          <img src="./images/iv/poster.jpg" class="img-fluid">
        </div>
        <div class="col-md-6 text-left data">
          <label>Año de Estreno</label> 1977
          <label>Personajes</label> 
          <ul>
          <li>Princesa Leia - Carrie Fisher </li>
          <li>Luke Skywalker - Mark Hamill </li>
          <li>Han Solo - Harrison Ford </li>
          <li>Darth Vader - Voz: James Earl Jones </li>
          <li>Obi Wan Kenobi (Old Ben) - Sir Alec Guinness </li>
          </ul>
        </div>
      </div>
    </div>
    <footer>
      © C / (varthc)
    </footer>
  </div>

  <script src="./scripts/script.js?<?= time() ?>"></script>
  <script src="./scripts/timer.js?<?= time() ?>"></script>

  <script type="text/javascript" src="./scripts/fullpage.js"></script>

  <script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
      menu: '#menu',
      anchors: ['home', 'iv'],
      autoScrolling: false,
      licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE'
    });
  </script>

</body>

</html>