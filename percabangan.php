<!DOCTYPE html>
<html lang="id">
<head>
    <title>Percabangan</title>
</head>
<body>
<form action="percabangan.php" method="POST">
    Nilai :<input type="number" name="nilai" id="nilai">
    <input type="submit" value="Submit" class="btn btn-primary">
</form>

<?php
// Buat Variabel menangkap data
$nilai = $_POST["nilai"];

// if else

if ($nilai >= 85 && $nilai <= 100) {
    echo "Nilai : A";
}elseif ($nilai >= 70 && $nilai <=84) {
    echo "Nilai : B";
}elseif ($nilai >= 56 && $nilai <=69) {
    echo "Nilai : C";
}elseif ($nilai >= 36 && $nilai <=55) {
    echo "Nilai : D";
}elseif ($nilai >= 0 && $nilai <=35) {  
    echo "Nilai : E";
}else{
    echo "Nilai : I";
}

//Switch

switch ($nilai) {
    case $nilai >= 85 && $nilai <= 100:
        echo "Sangat memuaskan";
        break;
    case $nilai >= 70 && $nilai <= 84:
        echo "Memuaskan";
        break;
    case $nilai >= 56 && $nilai <= 69:
        echo "Cukup";
        break;
    case $nilai >= 36 && $nilai <= 55:
        echo "Kurang";
        break;
    case $nilai >= 0 && $nilai <= 35:
        echo "Sangat Kurang";
        break;
    default:
    echo "Tidak ada";
    break;
    
}
?>

</body>
</html>