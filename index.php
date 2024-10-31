<?php

function diskonJikaAda($belanjaTotal) {
    if ($belanjaTotal > 100) {
        return $belanjaTotal * 0.1;
    }
    return 0;
}

function prosesBelanja($belanjaTotal) {
    $diskon = diskonJikaAda($belanjaTotal);
    $totalSetelahDiskon = $belanjaTotal - $diskon;

    if ($diskon > 0) {
        echo "Anda berbelanja dengan total $" . $belanjaTotal . ", dan anda berhak mendapatkan diskon 10%. <br>
              Total yang perlu dibayar = $ " . $belanjaTotal . " - $" . $diskon . " = $" . $totalSetelahDiskon;
    } else {
        echo "Total belanja anda adalah $" . $belanjaTotal . ". Diskon tidak tersedia.";
    }
}

prosesBelanja(1000);
?>
