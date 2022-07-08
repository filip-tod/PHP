<?php
$num1 = isset($_GET['num1']) ? $_GET['num1'] : '';
$num2 = isset($_GET['num2']) ? $_GET['num2'] : '';
$num3 = isset($_GET['num3']) ? $_GET['num3'] : '';

?>
<!-- // Složiti post formu koja prima tri cijela broja 
// i ispisuje najveći -->

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
        
      <form method="GET" action="">
              <label>broj 1
              <input  placeholder="Enter a number"
               type="number" name="num1" value="<?$num1?>"/>
              </label>
              <label>broj 2
              <input  placeholder="Enter a number"
              type="number" name="num2" value="<?$num2?>"/>
              </label>
              <label>broj 3
              <input  placeholder="Enter a number"
               type="number" name="num3" value="<?$num3?>" />
              </label>
              <hr />
                      
        
            <input type="submit" name="Predaj" value="Predaj">
         </form>
<p>najveći broj u nizu je : </p>


              <?php
$niz=[$num1,$num2,$num3];
$najveci=max($niz);

echo $najveci;





              ?>

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
