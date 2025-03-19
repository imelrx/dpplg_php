<?php
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31");
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = array("2024", "2025", "2026");

//Senin, 10 - Mar - 2025

echo $hari[1] .", ".$tanggal[9]." - ".$bulan[2]." - ".$tahun[1];
echo "<br>";
//Selasa, 18 - Mar - 2025
echo $hari[2] .", ".$tanggal[17]." - ".$bulan[2]." - ".$tahun[1];
echo "<hr>";

echo "<hr>";
//main looping nambah otomatis
for ($i = 30; $i >= 10; $i--){
    echo $i;
    echo "<br>";
}

echo "<hr>";
//main looping nambah otomatis
for ($i = 1; $i < 31; $i++){
    echo $i;
    echo "<br>";
}

//hari menggunakan for,
$jml_hari = count($hari);
for($h = 0; $h < $jml_hari; $h++ ){
    echo $hari[$h];
    echo "<br>";
}
echo "<hr>";
//tanggal menggunakan foreach,
foreach ($tanggal as $tgl) {
    echo $tgl;
    echo "<br>";

}

echo "<hr>";
//bulan menggunakan while,
$b = 0;
$jml_bulan = count($bulan);
while ($b < $jml_bulan) {
    echo $bulan[$b];
    echo "<br>";
    $b++;
}

echo "<hr>";
//tahun menggunakan do while
$t = 0;
$jml_tahun = count($tahun);
do {
    echo $tahun[$t];
    echo "<br>";
    $t++;
}while ($t < $jml_tahun);

echo "<hr>";
//lagu anak ayam 
for ($i = 30; $i > 1; $i--) {
    echo "Anak ayam turunlah $i, mati satu tinggal " . ($i - 1);
    echo "<br>";
}
echo "Anak ayam tinggal $i, mati satu tinggal induknya";

echo "<hr>";
//mawar yang dimiliki sholeh
$mawarS = [];
for ($mawar = 21; $mawar >= 10; $mawar--) {
    $mawarS[] = "$mawar, ";
    echo "Mawar yang dimiliki Sholeh: $mawar, ";
    echo "<br>";
}
echo "Jumlah mawar yang dimiliki Sholeh: " . count($mawarS);
echo "<br>";

//Mawar yang akan diberikan ke ibunya
$mawar_beri = [];
$jumlah_beri = 0;
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    $mawar_beri[] = $mawar;
    echo "Mawar yang diberikan Sholeh kepada ibunya adalah nomor $mawar<br>";
    $jumlah_beri++;
}
echo "Jumlah mawar yang diberikan Sholeh: $jumlah_beri<br>";
echo "<hr>";

echo " 🎶Playlist lagu Ambyar : <br><br>";

$lagu = [
    "galau" => "Mesin Waktu - Budi Doremi",
    "bersemangat" => "Selamat Pagi - Ran",
    "marah" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"
];

//lagu ambyar berdasarkan mood
$lagu_ambyar = [
    "galau" => [
        "judul" => "Mesin Waktu", 
        "penyanyi" => "Budi Doremi"
    ],
    "bersemangat" => [
        "judul" => "Selamat Pagi", 
        "penyanyi" => "Ran"
    ],
    "marah" => [
        "judul" => "Yang Patah Tumbuh, yang Hilang Berganti", 
        "penyanyi" => "Banda Neira"
    ]
];

foreach ($lagu_ambyar as $mood => $semua){
    echo "Ketika ambyar sedang " . $mood . ", dia mendengarkan lagu " . $semua['judul'] . " oleh " . $semua['penyanyi'] . "<br>";
}

?>