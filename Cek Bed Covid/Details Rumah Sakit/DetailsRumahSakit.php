<?php 
    include "../../configData.php";
    $idRS = $_GET['idRumahSakit'];
    $type = $_GET['covidOrNonCovid'];

    $dataDetails = getDetailRS($idRS,$type);
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <link rel="stylesheet" href="DetailsRumahSakit.css">

        <!-- Fontawesome CSS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <title>Detail Rumah Sakit</title>
    </head>
    <body>

        <div id="navbarLocation"></div>

        <main>
            <div id="detailsRumahSakit">
                <div class="container" style="border: 1px solid red;">
                    <div class="detailsRumahSakit-content row">
                        <div class="navInformation">
                            <h1 class="detailsRumahSakit-title">
                                Details Rumah Sakit
                            </h1>
                            <h6>
                                <?php echo $dataDetails['name'] ?>
                            </h6>
                            <h6>
                                <?php echo $dataDetails['address'] ?>
                            </h6>
                            <button class="buttonCall">
                                <i class="fas fa-phone"></i>
                                <a href="tel:<?php echo $dataDetails['phone']?>">
                                    <?php echo $dataDetails['phone']?>
                                </a>
                            </button>
                        </div>
                        <?php 
                            for ($i=0; $i < count($dataDetails['bedDetail']); $i++) { ?>
                                <div class="card">
                                    <div class="card-body row">
                                        <button
                                            class="btn btn-primary"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseExample<?php echo $i ?>"
                                            aria-expanded="false"
                                            aria-controls="collapseExample<?php echo $i ?>">
                                            <h4>
                                                <?php echo $dataDetails['bedDetail'][$i]['stats']['title'] ?>
                                            </h4>
                                            <h6>
                                                <?php  echo $dataDetails['bedDetail'][$i]['time']?>
                                            </h6>
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseExample<?php echo $i ?>">
                                        <div class="card card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <h6>Bed Tersedia</h6>
                                                    <h6>
                                                        <?php echo  $dataDetails['bedDetail'][$i]['stats']['bed_available']?>
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <h6>Bed Kosong</h6>
                                                    <h6>
                                                        <?php echo  $dataDetails['bedDetail'][$i]['stats']['bed_empty']?>
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <h6>Antrian</h6>
                                                    <h6>
                                                        <?php echo  $dataDetails['bedDetail'][$i]['stats']['queue']?>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php    }
                        ?>
                    </div>
                </div>
            </div>
        </main>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    </body>
</html>