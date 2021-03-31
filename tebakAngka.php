<?php
$pilihan = isset($_GET["pilihan"]) ? $_GET["pilihan"] : false;

$tahap = isset($_GET["tahap"]) ? $_GET["tahap"] : 3;

$awal = isset($_GET["awal"]) ? false : true;
if ($awal == true) {
    $comp = rand(1, 10);
    if ($comp == 1) {
        $comp = '1';
    } else if ($comp == 2) {
        $comp = '2';
    } else if ($comp == 3) {
        $comp = '3';
    } else if ($comp == 4) {
        $comp = '4';
    } else if ($comp == 5) {
        $comp = '5';
    } else if ($comp == 6) {
        $comp = '6';
    } else if ($comp == 7) {
        $comp = '7';
    } else if ($comp == 8) {
        $comp = '8';
    } else if ($comp == 9) {
        $comp = '9';
    } else if ($comp == 10) {
        $comp = '10';
    }
}

$comp = isset($_GET["comp"]) ? $_GET["comp"] : $comp;
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Bootstarp Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Tebak Angka</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="judulTebak mb-5 mt-2">TEBAK ANGKA</h1>
                <p class="font-monospace">Tebak angka yang dimaksud dari 1 sampai 10, Kamu memiliki 3 kesempatan.</p>
            </div>
        </div>
    </div>

    <div id="tampil">
        <?php if ($tahap == 3) : ?>
            <div class="container mt-5 tombol">
                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="?pilihan=<?= '1'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="satu">
                            <img src="img/satu.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '2'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="dua">
                            <img src="img/dua.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '3'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="tiga">
                            <img src="img/tiga.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-2">
                        <a href="?pilihan=<?= '4'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="empat">
                            <img src="img/empat.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '5'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="lima">
                            <img src="img/lima.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '6'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="enam">
                            <img src="img/enam.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="?pilihan=<?= '7'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="tujuh">
                            <img src="img/tujuh.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '8'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="delapan">
                            <img src="img/delapan.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '9'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="sembilan">
                            <img src="img/sembilan.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-2">
                        <a href="?pilihan=<?= '10'; ?>&tahap=<?= 2; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="sepuluh">
                            <img src="img/sepuluh.png" height="100px">
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($tahap == 2) : ?>
            <div class="container mt-5 tombol">
                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="?pilihan=<?= '1'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="satu">
                            <img src="img/satu.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '2'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="dua">
                            <img src="img/dua.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '3'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="tiga">
                            <img src="img/tiga.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-2">
                        <a href="?pilihan=<?= '4'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="empat">
                            <img src="img/empat.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '5'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="lima">
                            <img src="img/lima.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '6'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="enam">
                            <img src="img/enam.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="?pilihan=<?= '7'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="tujuh">
                            <img src="img/tujuh.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '8'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="delapan">
                            <img src="img/delapan.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '9'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="sembilan">
                            <img src="img/sembilan.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-2">
                        <a href="?pilihan=<?= '10'; ?>&tahap=<?= 1; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="sepuluh">
                            <img src="img/sepuluh.png" height="100px">
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($tahap == 1) : ?>
            <div class="container mt-5 tombol">
                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="?pilihan=<?= '1'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="satu">
                            <img src="img/satu.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '2'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="dua">
                            <img src="img/dua.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '3'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="tiga">
                            <img src="img/tiga.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-2">
                        <a href="?pilihan=<?= '4'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="empat">
                            <img src="img/empat.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '5'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="lima">
                            <img src="img/lima.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '6'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="enam">
                            <img src="img/enam.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-2">
                        <a href="?pilihan=<?= '7'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="tujuh">
                            <img src="img/tujuh.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '8'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="delapan">
                            <img src="img/delapan.png" height="100px">
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="?pilihan=<?= '9'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="sembilan">
                            <img src="img/sembilan.png" height="100px">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-2">
                        <a href="?pilihan=<?= '10'; ?>&tahap=<?= 3; ?>&comp=<?= $comp; ?>&awal=<?= false; ?>" class="sepuluh">
                            <img src="img/sepuluh.png" height="100px">
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php if ($awal == false) : ?>
        <?php if ($tahap < 3) : ?>
            <?php if ($pilihan < $comp) : ?>

                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" id="hasil">
                        <div class="card-body font-monospace p-4">
                            <?= 'Pilihan kamu terlalu rendah,' . '<br>' . 'Ayo masih ada ' . $tahap . ' kesempatan lagi!' ?>
                            <br>
                            <div class="float-end mt-3">
                                <a href="#tampil" class="btn btn-light" id="close">Oke</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($pilihan > $comp) : ?>
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" id="hasil">
                        <div class="card-body font-monospace p-4">
                            <?= 'Pilihan kamu terlalu besar,' . '<br>' . 'Ayo masih ada ' . $tahap . ' kesempatan lagi!' ?>
                            <br>
                            <div class="float-end mt-3">
                                <a href="#tampil" class="btn btn-light" id="close">Oke</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($pilihan == $comp) : ?>
                <div class="kotak">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <div class="card text-white bg-success mb-3" style="max-width: 20rem;" id="hasil">
                            <div class="card-body font-monospace p-4">
                                <?= 'Anda BENAR..!' . '<br>' . 'angka yang dimaksud adalah ' . $comp ?>
                                <br>
                                <div class="float-end mt-3">
                                    <a href="tebakAngka.php" class="btn btn-danger">Main Lagi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php else : ?>

            <?php if ($pilihan == $comp) : ?>
                <div class="kotak">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <div class="card text-white bg-success mb-3" style="max-width: 20rem;" id="hasil">
                            <div class="card-body font-monospace p-4">
                                <?= 'Anda BENAR..!' . '<br>' . 'angka yang dimaksud adalah ' . $comp ?>
                                <br>
                                <div class="float-end mt-3">
                                    <a href="tebakAngka.php" class="btn btn-danger">Main Lagi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php else : ?>
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="card text-white bg-danger mb-3" style="max-width: 20rem;" id="hasil">
                        <div class="card-body font-monospace p-4">
                            <?= 'Anda GAGAL!' . '<br>' . 'angka yang dimaksud adalah ' . $comp ?>
                            <br>
                            <div class="float-end mt-3">
                                <a href="tebakAngka.php" class="btn btn-primary" id="close">Main Lagi</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>