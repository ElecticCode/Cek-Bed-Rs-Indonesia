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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail Rumah Sakit</title>
</head>

<body>

    <div id="navbarLocation">

    </div>

    <main>
        <div id="daftarRumahSakit">
            <div class="container" style="border: 1px solid black">
                <div class="daftarRumahSakit-content row">
                    <button class="buttonBacktoSearch">
                        <a href="../Cek Bed Covid/DaftarRumahSakit.php">Kembali ke Daftar Rumah Sakit</a>
                    </button>
                    <div id="daftarRumahSakit">
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-md-8">
                                    <h5 class="hospitalName">
                                        <?php echo $dataDetails['name']; ?>
                                    </h5>
                                    <h6 class="hospitalAddress">
                                        <?php echo $dataDetails['address']; ?>
                                    </h6>
                                    <h6 class="infoUpdate">
                                        <?php
                                                echo $dataDetails['phone'];
                                            ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-md-8">
                                    <?php
                                                    for ($i=0; $i < count($dataDetails['bedDetail']); $i++) { 
                                                ?>
                                    <h6 class="time">
                                        Update terakhir :
                                        <?php echo $dataDetails['bedDetail'][$i]['time']; ?>
                                    </h6>
                                    <h5 class="infoKelas">
                                        <?php echo $dataDetails['bedDetail'][$i]['stats']['title']; ?>
                                    </h5>
                                    <h6>
                                        Kasur yang disediakan :
                                        <?php echo $dataDetails['bedDetail'][$i]['stats']['bed_available']; ?>
                                    </h6>
                                    <h6>
                                        Kasur yang kosong :
                                        <?php echo $dataDetails['bedDetail'][$i]['stats']['bed_empty']; ?>
                                    </h6>
                                    <h6>
                                        Antrian :
                                        <?php echo $dataDetails['bedDetail'][$i]['stats']['queue']; ?>
                                    </h6>
                                    <?php
                                                    }?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 row1-rightSide">
                                            <?php 
                                                $availabel = $dataHospital[$i]['bed_availability'];
                                                if ($availabel > 0) { ?>
                                                    <h6 class="informasiTersedia">
                                                        Tersedia : 
                                                        <span>
                                                            <?php
                                                                echo $dataHospital[$i]['bed_availability'];     
                                                            ?>
                                                        </span>
                                                    </h6>
                                                <?php } else { ?>
                                                    <h6 class="noAvailability">
                                                        Maaf, Bed Penuh !
                                                    </h6>
                                                <?php }
                                            ?>
                                            
                                            <h6>
                                                <?php 
                                                    $antrian = $dataHospital[$i]['queue'];

                                                    if ($antrian == 0) {
                                                        echo "Tidak Ada Antrian";
                                                    } else if ($antrian > 0){
                                                        echo "Antri $antrian";
                                                    }
                                                ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="card-body row card-row2">
                                        <div class="col-md-6">
                                            <button class="buttonCall">
                                                <i class="fas fa-phone"></i>
                                                <a href="tel:<?php echo $dataHospital[$i]['phone']?>">
                                                    <?php echo $dataHospital[$i]['phone']?>
                                                </a>    
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row row2-rightSide">
                                                <div class="col-6">
                                                    <button class="buttonHospitalInformation">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <a href="https://www.google.co.id/maps/search/<?php echo $dataHospital[$i]['name'];?>">Maps</a>
                                                    </button>
                                                </div>
                                                <div class="col-6 buttonInformasiRight">
                                                    <form action="../Details Rumah Sakit/DetailsRumahSakit.php" method="get">
                                                        <input type="hidden" value="<?php echo $dataHospital[$i]['id'] ?>" name="idRumahSakit">
                                                        <input type="hidden" value="<?php echo $type ?>" name="covidOrNonCovid">
                                                        <button type="submit" class="buttonHospitalInformation">
                                                            <a>Details</a>
                                                        </button>    
                                                    </form>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body row">
                                        <div class="col-8">
                                            <h5>
                                                <?php echo $dataHospital[$i]['name']; ?>
                                            </h5>
                                            <h6>
                                                <?php echo $dataHospital[$i]['address']; ?>
                                            </h6>
                                            <h6>
                                            <?php
                                                echo $dataHospital[$i]['available_beds'][0]['info'];
                                            ?>
                                            </h6>
                                        </div>
                                        <div class="col-4">
                                            <?php 
                                                $availabel = $dataHospital[$i]['available_beds'][0]['available'];
                                                if ($availabel > 0) { ?>
                                                    <h6>
                                                        Tersedia, <span><?php echo $dataHospital[$i]['available_beds'][0]['bed_class']?></span>
                                                    </h6>
                                                    <h6>
                                                    <?php
                                                        echo $dataHospital[$i]['available_beds'][0]['available'];
                                                    ?>
                                                    </h6>
                                            <?php    } else if ($availabel == 0) { ?>
                                                    <h6 class="noAvailability">
                                                        Maaf, Bed Penuh !</span>
                                                    </h6>
                                            <?php }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="card-body row card-row2">
                                        <div class="col-md-6">
                                            <button class="buttonCall">
                                                <i class="fas fa-phone"></i>
                                                <a href="tel:<?php echo $dataHospital[$i]['phone']?>">
                                                    <?php echo $dataHospital[$i]['phone']?>
                                                </a>    
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row row2-rightSide">
                                                <div class="col-6">
                                                    <button class="buttonHospitalInformation">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <a href="https://www.google.co.id/maps/search/<?php echo $dataHospital[$i]['name'];?>">Maps</a>
                                                    </button>
                                                </div>
                                                <div class="col-6 buttonInformasiRight">
                                                    <button class="buttonHospitalInformation">
                                                        <a href="https://www.google.co.id/maps/search/<?php echo $dataHospital[$i]['name'];?>">Details</a>
                                                    </button>    
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div> -->
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>