<?php
/*________ SESSION ________*/
session_start();

/*________ IF POST ________*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  /*________ IF THEME POSTED ________*/
  if (isset($_POST['theme'])) {
    if ($_POST['theme'] == "medieval") {
      $theme = "médiéval";
    } elseif ($_POST['theme'] == "classical") {
      $theme = "classique";
    } elseif ($_POST['theme'] == "zen") {
      $theme = "zen";
    } elseif ($_POST['theme'] == "electro") {
      $theme = "électro";
    } elseif ($_POST['theme'] == "hardcore") {
      $theme = "hardcore";
    } elseif ($_POST['theme'] == "reggae") {
      $theme = "reggae";
    } elseif ($_POST['theme'] == "space") {
      $theme = "spatial";
    } else {
      $theme = false;
    }
    if ($theme) {
      $_SESSION['alert'] = 'Ambiance adaptée, mon sir. Votre royaume est maintenant ' . $theme . ' !';
    } else {
      $_SESSION['alert'] = 'Ambiance inconnue, mon sir. Veuillez choisir un thème valide !';
    }

    /*________ INCLUDES ________*/
    require_once('functions/sanitizeColor.php');
    require_once('functions/toggleTheme.php');

    /*________ SANITIZE DATA ________*/
    $red = sanitizeColor($_POST['red']);
    $blue = sanitizeColor($_POST['blue']);
    $green = sanitizeColor($_POST['green']);

    /*________ TOGGLE THEME ________*/
    toggleTheme($red, $blue, $green);
  }
}

/*________ PAGE INFOS ________*/
$title = "Votre règne";
$page_name = "reign";

/*________ HEADER ________*/
require_once('layout/header.php'); ?>
<!-- REIGN -->
    <div class="title flex-center-center flex-column">
      <h1 id="timer">00:00:00</h1>
      <p>Cliquez à votre guise pour choisir le thème de votre royaume</p>
    </div>
    <!-- THEMES -->
    <div class="themes flex-center-center flex-wrap">
      <div class="theme flex-start-center flex-column" id="medieval">
        <img src="assets/images/themes/medieval.webp" alt="medieval-theme" width="55" height="90">
        <h3>Médiéval</h3>
        <form action="" method="post">
          <input type="hidden" name="red" value="0">
          <input type="hidden" name="blue" value="1">
          <input type="hidden" name="green" value="1">
          <input type="hidden" name="theme" value="medieval">
        </form>
      </div>
      <div class="theme flex-start-center flex-column" id="classical">
        <img src="assets/images/themes/classical.webp" alt="classical-theme" width="55" height="90">
        <h3>Classique</h3>
        <form action="" method="post">
          <input type="hidden" name="red" value="1">
          <input type="hidden" name="blue" value="1">
          <input type="hidden" name="green" value="1">
          <input type="hidden" name="theme" value="classical">
        </form>
      </div>
      <div class="theme flex-start-center flex-column" id="zen">
        <img src="assets/images/themes/zen.webp" alt="zen-theme" width="55" height="90">
        <h3>Zen</h3>
        <form action="" method="post">
          <input type="hidden" name="red" value="0">
          <input type="hidden" name="blue" value="0">
          <input type="hidden" name="green" value="1">
          <input type="hidden" name="theme" value="zen">
        </form>
      </div>
      <div class="theme flex-start-center flex-column" id="electro">
        <img src="assets/images/themes/electro.webp" alt="electro-theme" width="55" height="90">
        <h3>Électro</h3>
        <form action="" method="post">
          <input type="hidden" name="red" value="1">
          <input type="hidden" name="blue" value="1">
          <input type="hidden" name="green" value="0">
          <input type="hidden" name="theme" value="electro">
        </form>
      </div>
      <div class="theme flex-start-center flex-column" id="hardcore">
        <img src="assets/images/themes/hardcore.webp" alt="hardcore-theme" width="55" height="90">
        <h3>Hardcore</h3>
        <form action="" method="post">
          <input type="hidden" name="red" value="1">
          <input type="hidden" name="blue" value="0">
          <input type="hidden" name="green" value="0">
          <input type="hidden" name="theme" value="hardcore">
        </form>
      </div>
      <div class="theme flex-start-center flex-column" id="reggae">
        <img src="assets/images/themes/reggae.webp" alt="reggae-theme" width="55" height="90">
        <h3>Reggae</h3>
        <form action="" method="post">
          <input type="hidden" name="red" value="1">
          <input type="hidden" name="blue" value="0">
          <input type="hidden" name="green" value="1">
          <input type="hidden" name="theme" value="reggae">
        </form>
      </div>
      <div class="theme flex-start-center flex-column" id="space">
        <img src="assets/images/themes/space.webp" alt="space-theme" width="55" height="90">
        <h3>Spatial</h3>
        <form action="" method="post">
          <input type="hidden" name="red" value="0">
          <input type="hidden" name="blue" value="1">
          <input type="hidden" name="green" value="0">
          <input type="hidden" name="theme" value="space">
        </form>
      </div>
    </div>
    <button class="tertiary-button">Je lègue le trône</button>
    <video muted loop src=""></video>
    <img class="background" src="assets/images/background.webp" alt="background">
  </div>
  <!-- SCRIPTS -->
  <script src="assets/js/main.js"></script>
  <script>
    /*___________PLAY POSTED THEME___________*/
    <?php if(isset($_POST['theme'])) : ?>
      playTheme('<?php echo $_POST['theme']; ?>');
      <?php unset($_POST['theme']); ?>
    <?php endif; ?>
  </script>
  <script src="assets/js/alert.js"></script>
  <?php if (isset($_SESSION['alert'])): ?>
    <script>
        alertMessage("<?php echo $_SESSION['alert']; ?>");
    </script>
    <?php unset($_SESSION['alert']); ?>
  <?php endif; ?>
</body>
</html>