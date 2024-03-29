<?php

$product = [
    [
        "nama" => "Anggur",
        "harga" => "53.000",
        "deskripsi" => "Setiap buah, seperti memetik kenikmatan langsung dari rebahan anggur."
    ],
    [
        "nama" => "Apel",
        "harga" => "52.000",
        "deskripsi" => "Jadilah segar dan bersemangat seperti aroma apel yang memikat, tetap berkilau di dalam setiap tantangan!"
    ],
    [
        "nama" => "Blewah",
        "harga" => "23.000",
        "deskripsi" => "Segarkan hari Anda dengan kelezatan alami: Blewah, buah segar yang membawa kebahagiaan!"
    ],
    [
        "nama" => "Duku",
        "harga" => "18.500",
        "deskripsi" => "Dengan setiap gigitan, rasakan kenikmatan duku yang memikat hatimu."
    ],
    [
        "nama" => "Durian",
        "harga" => "155.000",
        "deskripsi" => "Tergoda oleh kelezatan, diselubungi aroma menggoda, selamatkan rasa dari durian, pengalaman tak terlupakan dalam setiap gigitan!"
    ],
    [
        "nama" => "Nanas",
        "harga" => "73.000",
        "deskripsi" => "Rasakan kelezatan yang segar dan menyegarkan dengan nanas, sahabat yang menyegarkan untuk setiap kesempatan!"
    ],
    [
        "nama" => "Pepaya",
        "harga" => "27.000",
        "deskripsi" => "Pepaya: Buah Segar untuk Energimu yang Bercahaya!"
    ],
    [
        "nama" => "Pisang",
        "harga" => "36.000",
        "deskripsi" => "Setiap buah, seperti memetik kenikmatan langsung dari rebahan anggur."
    ],
    [
        "nama" => "Semangka",
        "harga" => '37.000',
        "deskripsi" => "Setiap buah, seperti memetik kenikmatan langsung dari rebahan anggur."
    ],
];

// foreach($product as $post){
//     echo "<h2>".$post["nama"]."</h2>";
//     echo "<p>Rp.".$post["harga"].",00-<p>";
//     echo "<hr>";
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-lg-4">
                <div class="card card-primary card-outline">
                    <?php
                    foreach($product as $post){
                    ?>
                  <div class="card-header text-center">
                    <h5 class="m-0 font-weight-bold"><?php echo $post["nama"]; ?></h5>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img
                          class="img-fluid"
                          src="Asset/Img/<?php echo $post["nama"]; ?>.png"
                          alt="Gambar Anggur"
                          width="200"
                          height="200"
                        />
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <p class="card-text">
                          Semangka: Segarnya kesegaran dalam setiap gigitan!
                        </p>
                        <span class="font-weight-bold">Rp.<?php echo $post["harga"]; ?>/Kg</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary"
                      ><span>Masukkan ke keranjang </span
                      ><i class="bi bi-cart"></i
                    ></a>
                  </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
    
</body>
</html> -->