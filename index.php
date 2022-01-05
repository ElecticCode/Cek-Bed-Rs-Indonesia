<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cek Lokasi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- js buat jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style.css">

        <!-- Fontawesome CSS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <link rel="stylesheet" href="footer.css">

    </head>
    <?php 
        include "configData.php";
        $dataProvinsi = getProv();
    ?>
    <body>
        <main>
            <div id="GetLocation">
                <div class="container GetLocation-container">
                    <p class="GetLocation-Title">Cek Ketersediaan Bed
                        <br>
                        Rumah Sakit</p>
                    <div class="form-container">
                        <p class="GetLocation-Desc">Pilih Lokasi Pengecekkan Ketersediaan Bed Rumah Sakit</p>
                        <form
                            action="Cek Rumah Sakit/Daftar Rumah Sakit/DaftarRumahSakit.php"
                            method="get">
                            <div class="radio-toolbar">
                                <input type="radio" id="Covid-Option" name="type" value="1" required="required">
                                <label for="Covid-Option">
                                    Covid
                                    <i class="iconChecked fas fa-check"></i>
                                </label>

                                <input type="radio" id="NonCovid-Option" name="type" value="2">
                                <label for="NonCovid-Option">
                                    Non-Covid
                                    <i class="iconChecked fas fa-check"></i>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Select Provinsi</label>
                                <br>
                                <select
                                    required="required"
                                    class="selectOption"
                                    name="provinsi"
                                    id="provinsi"
                                    onchange="getKota(this.value)"
                                    require="require">
                                    <option value="">Select Provinsi</option>
                                    <?php 
                                for ($i=0; $i < count($dataProvinsi); $i++) { ?>
                                    <option value='<?php echo $dataProvinsi[$i]['id']?>'>
                                        <?php echo $dataProvinsi[$i]['name'] ?>
                                    </option>
                                    <?php }
                            ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kota">Select Kota</label>
                                <br>
                                <select
                                    required="required"
                                    class="selectOption"
                                    name="kota"
                                    id="kota"
                                    require="require">
                                    <option value="">Masukkan Provinsi Anda</option>
                                </select>
                            </div>
                            <button class="buttonKirim" type="submit">kirimkan</button>
                        </form>
                    </div>
                </div>
            </div>
            <footer>
                <div class="container">
                    <p>Design and Developed by
                        <span>Electic Code</span>
                        @Covid Editon</p>
                </div>
            </footer>
        </main>

        <script type="text/javascript">
            function getKota(idKota) {
                $('#kota').html('<option>Sedang Mengambil Data Kota</option>')
                $.ajax({
                    type: 'post',
                    url: 'configData.php',
                    data: {
                        kodeProv: idKota
                    },
                    success: function (data) {
                        $('#kota').html(data);
                    }
                })
            }
        </script>
    </body>
</html>