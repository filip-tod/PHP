<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- START zagljavlje -->
    <header>
        <?php require_once 'zaglavlje.php'; ?>
    </header>
    <!-- END zaglavlje -->

    <!-- START tijelo -->
    <main>
        <div class="callout">
            <div class="gornji-tekst">
                <h5>Stranica prima 3 GET parametra (x, y, z) koji su cijeli brojevi
                    te ispisuje najveći primljeni broj
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <?php
            $p1= isset($_GET['p2']) ? $_GET['p1'] : 0;
            $p2 = isset($_GET['p2']) ? $_GET['p2'] : 0;
            $p3 = isset($_GET['p3']) ? $_GET['p3'] : 0;
            ?>

            <!-- <ul>
                <li>Prvi parametar: <?php echo $_GET['p1']; ?></li>
                <li>Drugi parametar: <?php echo $_GET['p2']; ?></li>
                <li>Treći parametar: <?php echo $_GET['p3']; ?></li>
            </ul> -->

            <div>
                <b>Najveći broj: </b>
                <?php
               if (isset($_GET['p1']) && isset($_GET['p2']) && isset($_GET['p3'])) {
                    if ($p1 > $p2 && $p1 > $p3) {
                        echo $p1;
                    } else if ($p2 > $p1 && $p2 > $p3) {
                        echo $p2;
                    } else if ($p3 > $p1 && $p3 > $p2) {
                        echo $p3;
                    }
                }
                ?>
            </div>
        </div>
    </main>
    <!-- END tijelo -->

    <!-- START podnožje -->
    <footer>
        <?php require_once 'podnozje.php'; ?>
    </footer>
    <!-- END podnožje -->


    <!-- JavaScript -->
    <?php require_once 'jsskripte.php'; ?>
</body>

</html>