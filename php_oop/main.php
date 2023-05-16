<?php
    echo "Putri Dwi Agnesya / 21081010142 <br><br>";

    require_once('CDMusic.php');
    $CDMusic = new CDMusic ("Rain", 290000, 5);
    $CDMusic->setPrice(290000);
    $CDMusic->setDiscount(5);
    $CDMusic->setArtist("Taeyeon SNSD");
    $CDMusic->setGenre("Musik Pop Jazz");

    echo "========================= Detail CD Music =========================<br><br>";
    echo "Judul : ".$CDMusic->getName();
    echo "<br>";
    echo "Harga awal : Rp.290000<br>";
    echo "Harga tambah 10%: Rp.".$CDMusic->getPrice();
    echo "<br>";
    echo "Artist : ".$CDMusic->getArtist();
    echo "<br>";
    echo "Genre : ".$CDMusic->getGenre();
    echo "<br>";
    echo "Diskon yang Berlaku : ".$CDMusic->getDiscount()."%";
    echo "<br>";
    echo "Harga Setelah Mendapat Diskon : Rp.".(100-$CDMusic->getDiscount())/100*$CDMusic->getPrice();
    echo "<br>";

    require_once('CDCabinet.php');
    $CDCabinet = new CDCabinet ("Kayu Mas", 500000, 0);
    $CDCabinet->setPrice(500000);
    $CDCabinet->setDiscount(0);
    $CDCabinet->setCapacity("400");
    $CDCabinet->setModel("Kayu Susun");

    echo "<br><br>";
    echo "======================== Detail CD Cabinet ==========================<br><br>";
    echo "Judul : ".$CDCabinet->getName();
    echo "<br>";
    echo "Harga awal : Rp.500000<br>";
    echo "Harga tambah 15% : Rp.".$CDCabinet->getPrice();
    echo "<br>";
    echo "Kapasitas : ".$CDCabinet->getCapacity();
    echo "<br>";
    echo "Model : ".$CDCabinet->getModel();
    echo "<br>";
    echo "Diskon Berlaku : ".$CDCabinet->getDiscount()."%";
    echo "<br>";
    echo "Harga Setelah Mendapat Diskon : Rp.".(100 - $CDCabinet->getDiscount())/100 * $CDCabinet->getPrice();
?>