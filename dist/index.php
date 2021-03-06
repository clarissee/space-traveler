<?php
    require 'inc/config.php';

    // query the database to get scores
    $query = $pdo->query('SELECT * FROM scores ORDER BY score DESC limit 999');
    $scores = $query->fetchAll();

    $count = 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#211e47">
  <meta name="apple-mobile-web-app-title" content="Space Traveler">
  <meta name="application-name" content="Space Traveler">
  <meta name="theme-color" content="#ffffff">
  <title>Space Traveler</title>
  <link rel="stylesheet" href="assets/css/app.min.css">
</head>
<body>
  <div class="opening">
    <div class="opening--left">
      <img class="opening--left--img" src="assets/img/left_door.svg" alt="">
      <div class="opening--left--container">
        <img class="opening--left--container--logo"src="assets/img/logo.svg" alt="Space Traveler button">
      </div>
      <div class="opening--left--title">
        <h1>Space</h1>
      </div>
    </div>
    <div class="opening--right">
      <img class="opening--right--img" src="assets/img/right_door.svg" alt="">
      <div class="opening--right--title">
        <h1>Traveler</h1>
      </div>
    </div>
  </div>
  <div class="stars"></div>
  <div class="sky"></div>
  <div class="menu">
    <div class="menu--select">
      <a href="#" class="menu--select--item menu--select--item--current" data-select="0">Vaisseau</a>
      <a href="#" class="menu--select--item" data-select="1">Foreuse</a>
      <a href="#" class="menu--select--item" data-select="2">Classement</a>
    </div>
    <div class="menu--vaiseau menu--onglet">
      <a href="#" class="menu--item" data-item="0">
        <img src="assets/img/generator.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Générateur<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">1k</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">1k</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">1k</span>
          </div>
        </div>
      </a>
      <a href="#" class="menu--item" data-item="1">
        <img src="assets/img/post_comb.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Post-combustion<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">100</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">100</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">100</span>
          </div>
        </div>
      </a>
      <a href="#" class="menu--item" data-item="2">
        <img src="assets/img/reactor_anti.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Réacteur à anti-matières<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">100</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">100</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">100</span>
          </div>
        </div>
      </a>
      <a href="#" class="menu--item" data-item="3">
        <img src="assets/img/battery.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Batterie supplémentaire<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">500</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">500</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">500</span>
          </div>
        </div>
      </a>
      <a href="#" class="menu--item" data-item="4">
        <img src="assets/img/wing_aero.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Ailettes aerodynamique<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">320</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">500</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">250</span>
          </div>
        </div>
      </a>
      <a href="#" class="menu--item" data-item="5">
        <img src="assets/img/solar_panel.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Panneaux solaire<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">400</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">400</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">400</span>
          </div>
        </div>
      </a>
      <a href="#" class="menu--item" data-item="6">
        <img src="assets/img/arm_robot.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Bras Articulé<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">800</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">800</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">800</span>
          </div>
        </div>
      </a>
      <div class="menu--item--place"></div>
    </div>
    <div class="menu--foreuse menu--onglet">
      <a href="#" class="menu--item" data-item="7">
        <img src="assets/img/robot_bleu.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Foreuse à silicium<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">100</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">100</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">100</span>
          </div>
        </div>
      </a>
      <a href="#" class="menu--item" data-item="8">
        <img src="assets/img/robot_rouge.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Foreuse à carbon<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">100</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">100</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">100</span>
          </div>
        </div>
      </a>
      <a href="#" class="menu--item" data-item="9">
        <img src="assets/img/robot_vert.svg" alt="" class="menu--item--img">
        <div class="menu--item--title">Foreuse à fer<span class="menu--item--title--lvl">lv.1</span></div>
        <div class="menu--item--resources">
          <div class="menu--item--resources--fer">
            <img src="assets/img/fer.svg" alt="" class="menu--item--resources--fer--img">
            <span class="menu--item--resources--fer--price">500</span>
          </div>
          <div class="menu--item--resources--silicium">
            <img src="assets/img/silicium.svg" alt="" class="menu--item--resources--silicium--img">
            <span class="menu--item--resources--silicium--price">500</span>
          </div>
          <div class="menu--item--resources--carbon">
            <img src="assets/img/carbon.svg" alt="" class="menu--item--resources--carbon--img">
            <span class="menu--item--resources--carbon--price">500</span>
          </div>
        </div>
      </a>
    </div>
<!--LEADERBOARD -->
    <div class="menu--classement menu--onglet">
         <div class="btn-save"><span class="btn-save-score">Save your score</span></div>
        <?php foreach($scores as $_score): ?>
            <div class="menu--classement--data">
                <span class="classement_number">
                    <? echo $count++ ?>
                </span>
                <span class="classement_name">
                    <?= $_score->name ?>
                </span>
                <span class="classement_score">
                    <?= $_score->score ?>
                </span>
            </div>
        <?php endforeach; ?>
    </div>

  </div>
  <div class="planet">
    <a href="#" class="planet--item planet--item--bleu" data-planete="0">
      <img src="assets/img/planet_bleu.svg" alt="">
    </a>
    <a href="#" class="planet--item planet--item--rouge" data-planete="1">
      <img src="assets/img/planet_rouge.svg" alt="">
    </a>
    <a href="#" class="planet--item planet--item--vert" data-planete="2">
      <img src="assets/img/planet_vert.svg" alt="">
    </a>
  </div>
  <div class="popup">
    <div class="popup--item">
      <div class="popup--item--txt">
      </div>
    </div>
  </div>
  <div class="mountain">
    <img src="assets/img/univers_rouge.svg" alt="" class="mountain--img">
    <img src="assets/img/amelioration_generator.svg" alt="" class="mountain--generator">
    <img src="assets/img/robot_bleu.svg" alt="" class="mountain--robotB">
    <img src="assets/img/robot_vert.svg" alt="" class="mountain--robotV">
    <img src="assets/img/robot_rouge.svg" alt="" class="mountain--robotR">
  </div>
  <div class="rocket">
    <img src="assets/img/fuselage.svg" alt="" class="rocket--fuselage">
    <img src="assets/img/flame.svg" alt="" class="rocket--flame">
    <img src="assets/img/wing.svg" alt="" class="rocket--wing active">
    <img src="assets/img/amelioration_aero.svg" alt="" class="rocket--aero">
    <img src="assets/img/amelioration_post.svg" alt="" class="rocket--post">
    <img src="assets/img/amelioration_react.svg" alt="" class="rocket--anti">
    <img src="assets/img/amelioration_battery.svg" alt="" class="rocket--batt">
    <img src="assets/img/amelioration_solar.svg" alt="" class="rocket--sola">
    <img src="assets/img/amelioration_arm.svg" alt="" class="rocket--arms">
  </div>
  <div class="distance">
    <div class="distance--title">
      Distance<br/>
      <span class="distance--title--value">0</span>.AL
    </div>
  </div>
  <div class="resources">
    <div class="resources--item">
      <img src="assets/img/fer.svg" alt="" id="target-iron" class="resources--item--img">
      <div id="info-iron" class="resources--item--score">0</div>
    </div>
    <div class="resources--item">
      <img src="assets/img/silicium.svg" alt="" id="target-silicon" class="resources--item--img">
      <div id="info-silicon" class="resources--item--score">0</div>
    </div>
    <div class="resources--item">
      <img src="assets/img/carbon.svg" alt="" id="target-carbon" class="resources--item--img">
      <div id="info-carbon" class="resources--item--score">0</div>
    </div>
  </div>
  <div class="energy">
    <img src="assets/img/energy_logo.svg" alt="" class="energy--logo">
    <div class="energy--bar">
      <div class="energy--bar--full"></div>
    </div>
    <span class="energy--value">0/1000</span>
  </div>
  <div class="popup--energy">
    <div class="popup--energy--item">
      Un générateur est nécessaire pour alimenter le vaisseau,
      les réservoires doivent être plein pour pouvoir décoller.
    </div>
  </div>
  <div class="particles-container">
    <div class="ressources"></div>
    <div class="indication"></div>
    <div class="multiplier"></div>
    <div class="autoclicker"></div>
  </div>

  <!-- LEADERBOARD -->
  <div class="modal-name">
      <div class="modal-name--container">
          <label for="">Votre nom d'astronaute</label>
          <input class="user-name" type="text" placeholder="Entrez votre nom" />
          <button class="btn-name">Explorer</button>
      </div>
  </div>

<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="assets/js/app.min.js"></script>
</body>
</html>
