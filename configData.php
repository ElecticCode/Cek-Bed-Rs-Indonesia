<?php 
    $APIUpdateData = "https://data.covid19.go.id/public/api/update.json";
    $kontenAPIUpdateData = file_get_contents($APIUpdateData);
    $dataUpdateData = json_decode($kontenAPIUpdateData, true);

    $penambahanKasusPositif = $dataUpdateData['update']['penambahan']['jumlah_positif'];
    $penambahanKasusPositif = number_format($penambahanKasusPositif);
    $totalJumlahKasusPositif = $dataUpdateData['update']['total']['jumlah_positif'];
    $totalJumlahKasusPositif = number_format($totalJumlahKasusPositif);
    $penambahanDirawat = $dataUpdateData['update']['penambahan']['jumlah_dirawat'];
    $penambahanDirawat = number_format($penambahanDirawat);
    $totalJumlahDirawat = $dataUpdateData['update']['total']['jumlah_dirawat'];
    $totalJumlahDirawat = number_format($totalJumlahDirawat);
    $penambahanKasusSembuh = $dataUpdateData['update']['penambahan']['jumlah_sembuh'];
    $penambahanKasusSembuh = number_format($penambahanKasusSembuh);
    $totalJumlahKasusSembuh = $dataUpdateData['update']['total']['jumlah_sembuh'];
    $totalJumlahKasusSembuh = number_format($totalJumlahKasusSembuh);
    $penambahanKasusMeninggal = $dataUpdateData['update']['penambahan']['jumlah_meninggal'];
    $penambahanKasusMeninggal = number_format($penambahanKasusMeninggal);
    $totalJumlahKasusMeninggal = $dataUpdateData['update']['total']['jumlah_meninggal'];
    $totalJumlahKasusMeninggal = number_format($totalJumlahKasusMeninggal);
?>

<?php 
    $APIUpdateDataTesdanVaksin = "https://data.covid19.go.id/public/api/pemeriksaan-vaksinasi.json";
    $kontenUpdateDataTesdanVaksin = file_get_contents($APIUpdateDataTesdanVaksin);
    $dataUpdateDataTesdanVaksin = json_decode($kontenUpdateDataTesdanVaksin, true);

    //total spesimen diperiksa
    $penambahanJumlahSpesimenDiperiksaPcrTcm = $dataUpdateDataTesdanVaksin['pemeriksaan']['penambahan']['jumlah_spesimen_pcr_tcm'];
    $totalJumlahSpesimenDiperiksaPcrTcm = $dataUpdateDataTesdanVaksin['pemeriksaan']['total']['jumlah_spesimen_pcr_tcm'];
    
    $penambahanJumlahSpesimenDiperiksaAntigen = $dataUpdateDataTesdanVaksin['pemeriksaan']['penambahan']['jumlah_spesimen_antigen'];
    $totalJumlahSpesimenDiperiksaAntigen = $dataUpdateDataTesdanVaksin['pemeriksaan']['total']['jumlah_spesimen_antigen'];
    
    $totalSpesimenDiperiksaPerHari = $penambahanJumlahSpesimenDiperiksaAntigen+$penambahanJumlahSpesimenDiperiksaPcrTcm;
    $totalSpesimenDiperiksaPerHari = number_format($totalSpesimenDiperiksaPerHari);
    $totalSpesimenDiperiksa = $totalJumlahSpesimenDiperiksaPcrTcm + $totalJumlahSpesimenDiperiksaAntigen;
    $penambahanJumlahSpesimenDiperiksaAntigen = number_format($penambahanJumlahSpesimenDiperiksaAntigen);
    $penambahanJumlahSpesimenDiperiksaPcrTcm = number_format($penambahanJumlahSpesimenDiperiksaPcrTcm);
    $totalJumlahSpesimenDiperiksaAntigen = number_format($totalJumlahSpesimenDiperiksaAntigen);
    $totalJumlahSpesimenDiperiksaPcrTcm = number_format($totalJumlahSpesimenDiperiksaPcrTcm);
    $totalSpesimenDiperiksa = number_format($totalSpesimenDiperiksa);

    // total orang diperiksa
    $penambahanJumlahOrangDiperiksaPcrTcm = $dataUpdateDataTesdanVaksin['pemeriksaan']['penambahan']['jumlah_orang_pcr_tcm'];
    $totalJumlahSpesimenOrangDiperiksaPcrTcm = $dataUpdateDataTesdanVaksin['pemeriksaan']['total']['jumlah_orang_pcr_tcm'];

    $penambahanJumlahorangDiperiksaAntigen = $dataUpdateDataTesdanVaksin['pemeriksaan']['penambahan']['jumlah_orang_antigen'];
    $totalJumlahorangDiperiksaAntigen = $dataUpdateDataTesdanVaksin['pemeriksaan']['total']['jumlah_orang_antigen'];

    $totalOrangDiperiksaPerHari = $penambahanJumlahOrangDiperiksaPcrTcm+$penambahanJumlahorangDiperiksaAntigen;
    $totalOrangDiperiksaPerHari = number_format($totalOrangDiperiksaPerHari);
    $totalOrangDiperiksa = $totalJumlahSpesimenOrangDiperiksaPcrTcm + $totalJumlahorangDiperiksaAntigen;
    $penambahanJumlahorangDiperiksaAntigen = number_format($penambahanJumlahorangDiperiksaAntigen);
    $penambahanJumlahOrangDiperiksaPcrTcm = number_format($penambahanJumlahOrangDiperiksaPcrTcm);
    $totalJumlahSpesimenOrangDiperiksaPcrTcm = number_format($totalJumlahSpesimenOrangDiperiksaPcrTcm);
    $totalJumlahorangDiperiksaAntigen = number_format($totalJumlahorangDiperiksaAntigen);
    $totalOrangDiperiksa = number_format($totalOrangDiperiksa);
?>
<?php 
    // vaksinasi
    $totalVaksinasiKe1 = $dataUpdateDataTesdanVaksin['vaksinasi']['total']['jumlah_vaksinasi_1'];
    $totalVaksinasiKe1 = number_format($totalVaksinasiKe1);
    $penambahanVaksinasiKe1 = $dataUpdateDataTesdanVaksin['vaksinasi']['penambahan']['jumlah_vaksinasi_1'];
    $penambahanVaksinasiKe1 = number_format($penambahanVaksinasiKe1);
    $totalVaksinasiKe2 = $dataUpdateDataTesdanVaksin['vaksinasi']['total']['jumlah_vaksinasi_2'];
    $totalVaksinasiKe2 = number_format($totalVaksinasiKe2);
    $penambahanVaksinasiKe2 = $dataUpdateDataTesdanVaksin['vaksinasi']['penambahan']['jumlah_vaksinasi_2'];
    $penambahanVaksinasiKe2 = number_format($penambahanVaksinasiKe2);
?>

<?php 
    // buat function get data
    function getProv () {
        $apiGetProvinsi = "https://rs-bed-covid-api.vercel.app/api/get-provinces";
        $kontenGetProvinsi = file_get_contents($apiGetProvinsi);
        $dataProvinsi = json_decode($kontenGetProvinsi, true);
        $dataProvinsi = $dataProvinsi["provinces"];

        return $dataProvinsi;
    }

    function getKota($kodeProv) {
        $apiGetKota = "https://rs-bed-covid-api.vercel.app/api/get-cities?provinceid=$kodeProv";
        $kontenKota = file_get_contents($apiGetKota);
        $dataKota = json_decode($kontenKota,true);
        $dataKota = $dataKota["cities"];

        return $dataKota;
    }

    if(isset($_POST['kodeProv'])){
        $kodeProv = $_POST["kodeProv"];
        $dataKota = getKota($kodeProv);

        $varName = "name";
        for ($i=0; $i < count($dataKota); $i++) { 
		 	echo '<option value='.$dataKota[$i]['id'].'>'.$dataKota[$i]['name'].'</option>';
        }
    }
    function getListHospital ($kodeProv,$kodeKota,$type){
        $apiGetHospital = "https://rs-bed-covid-api.vercel.app/api/get-hospitals?provinceid=$kodeProv&cityid=$kodeKota&type=$type";
        $kontenHospital = file_get_contents($apiGetHospital);
        $data = json_decode($kontenHospital,true);
        $dataHospital = $data['hospitals'];
        return $dataHospital;
    }

    function getInformasiProvinsi($kodeProv){
        $dataProvinsi = getProv();
        
        for ($i=0; $i < count($dataProvinsi) ; $i++) { 
            if ($dataProvinsi[$i]['id'] == $kodeProv) {
                return $dataProvinsi[$i]['name'];
            }
        }
        $errorProv = "kodeProv Salah";
        return  $errorProv;
    }

    function getInformasiKota($kodeProv,$kodeKota) {
        $dataKota = getKota($kodeProv);

        for ($i=0; $i < count($dataKota); $i++) { 
            if ($dataKota[$i]['id'] == $kodeKota) {
                return $dataKota[$i]['name'];
            }
        }
        $errorKota = "kodeKota Salah";
        return  $errorKota;
    }
?>