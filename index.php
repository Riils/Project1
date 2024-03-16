<!DOCTYPE html>
<html>
<body>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        @media only screen and (max-width: 600px) {
            form {
                width: 100%;
            }
        }
    </style>
</head>
<h2>Kalkulator IMT</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Berat badan (kg): <input type="text" name="berat_badan"><br>
  Tinggi badan (m): <input type="text" name="tinggi_badan"><br>
  <input type="submit">
</form>
<div class="hasil">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $imt = $berat_badan / round($tinggi_badan * $tinggi_badan);

    if ($imt < 18.5) {
        $klasifikasi = "Sangat Kurus";
    } elseif ($imt >= 18.5 && $imt < 24.9) {
        $klasifikasi = "Normal";
    } elseif ($imt >= 25 && $imt < 29.9) {
        $klasifikasi = "Gemuk";
    } else {
        $klasifikasi = "Obesitas";
    }

    echo "IMT: " . $imt . "<br>";
    echo "Klasifikasi: " . $klasifikasi;
}
?>
</div>

</body>
</html>