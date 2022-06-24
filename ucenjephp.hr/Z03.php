<!-- // Stranica prima 4 parametara i ispisuje ih jedno 
// pored drugom svaki u svom panelu (callout)
// na large širini -->

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'zaglavlje.php'; ?>
  </head>
<body>
    <div class="grid-container">
    <?php include_once 'izbornik.php'; ?>
    <!-- Start tijelo -->
    <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell">
        <div class="callout">
        <div class="grid-x grid-margin-x" id="tijelo">
        <div class="cell large-3">
          <div class="success callout">
            Edunova
          </div>
        </div>
        <div class="cell large-3">
          <div class="warning callout">  
            Osijek
          </div>
        </div>
        <div class="cell large-3">
          <div class="alert callout">
            Ponedjeljak
          </div>
        </div>
        <div class="cell large-3">
          <div class="alert callout">
            utorak
          </div>
        </div>
      </div>
    <!-- End tijelo -->
    <?php 
    // čitati https://www.tutorialrepublic.com/php-tutorial/php-include-files.php
    require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>
