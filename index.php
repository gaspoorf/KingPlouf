<?php 
/*________ SESSION ________*/
session_start();

/*________ PAGE INFOS ________*/
$title = "Règne à l'IUT de Chambéry";
$page_name = "index";

/*________ HEADER ________*/
require_once('layout/header.php'); ?>

<!-- INDEX -->
    <div class="title flex-between-center flex-column no-select">
        <img class="no-drag" src="assets/images/kingplouf.webp" alt="kingplouf-logo" width="140" height="195">
        <h1>King <span>Plouf</span></h1>
        <a href="reign.php" class="primary-button">Je prends le trône</a>
    </div>
    <img class="background" src="assets/images/background.webp" alt="background">
  </div>
  <!-- SCRIPTS -->
  <script>
      sessionStorage.setItem('timerSeconds', '0');
  </script>
  <script src="assets/js/alert.js"></script>
  <?php if (isset($_SESSION['alert'])): ?>
    <script>
        alertMessage("<?php echo $_SESSION['alert']; ?>");
    </script>
    <?php unset($_SESSION['alert']); ?>
  <?php endif; ?>
  <script src="assets/js/quote.js"></script>
</body>
</html>
