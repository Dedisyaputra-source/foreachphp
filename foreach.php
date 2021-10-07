<?php
$artikel = array(
    (object)array(
        'judul' => 'BPOM: Efikasi Vaksin Corona Zifivax 77,47% terhadap Varian Delta',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nemo veniam nam. Atque fugit quidem corrupti ipsa laborum consequatur sunt repudiandae, odio omnis quod. Illum porro praesentium velit vel a!',
        'gambar' => 'berita1.1.jpg'
    ),
    (object)array(
        'judul' => 'Tok! DPR Sahkan UU Perpajakan, Tarif PPN 11 Persen Mulai 1 April 2022',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nemo veniam nam. Atque fugit quidem corrupti ipsa laborum consequatur sunt repudiandae, odio omnis quod. Illum porro praesentium velit vel a!',
        'gambar' => 'berita2.jpg'
    ),
    (object)array(
        'judul' => 'Mengenal Rio Maholtra, Paspampres Pemecah Rekor Atletik di PON Papua',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nemo veniam nam. Atque fugit quidem corrupti ipsa laborum consequatur sunt repudiandae, odio omnis quod. Illum porro praesentium velit vel a!',
        'gambar' => 'berita3.jpg'
    ),
    (object)array(
        'judul' => '5 Pemain Italia yang Tampil Memble saat Keok dari Spanyol',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nemo veniam nam. Atque fugit quidem corrupti ipsa laborum consequatur sunt repudiandae, odio omnis quod. Illum porro praesentium velit vel a!',
        'gambar' => 'gambar4.jpg'
    ),
    (object)array(
        'judul' => 'Ikut Tim SAR Cari Orang Hilang, Ternyata Korban yang Dicari Adalah Dia Sendiri',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nemo veniam nam. Atque fugit quidem corrupti ipsa laborum consequatur sunt repudiandae, odio omnis quod. Illum porro praesentium velit vel a!',
        'gambar' => 'gambar5.jpg'
    ),
    (object)array(
        'judul' => 'Wanita Ini Daur Ulang Plastik Jadi Batu Bata yang Lebih Kuat dari Beton',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nemo veniam nam. Atque fugit quidem corrupti ipsa laborum consequatur sunt repudiandae, odio omnis quod. Illum porro praesentium velit vel a!',
        'gambar' => 'gambar6.jpg'
    )
);
$corousel = array(
    (object)array(
        'judul' => 'Berita Pertama',
        'text' => 'Jokowi: Komcad Dikerahkan Jika Negara dalam Keadaan Perang',
        'gambar' => 'berita1.jpg'
    ),
    (object)array(
        'judul' => 'Berita Kedua',
        'text' => 'Alasan Pemerintah Hapus AMT di UU HPP: Jaga Usaha & Iklim Investasi Kondusif',
        'gambar' => 'hero2.jpg'
    ),
    (object)array(
        'judul' => 'Berita Pertama',
        'text' => 'Atlet Kuningan Raih Medali Emas di PON XX Papua Meski Baru Sembuh dari Cedera',
        'gambar' => 'hero3.jpg'
    ),
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>blog</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="image/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">setting</a></li>
                            <li><a class="dropdown-item" href="#">log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach ($corousel as $key => $value) { ?>
                <?php $active = $key == 0 ? 'active' : ''  ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $key; ?> " class="<?= $active; ?>" aria-current="true" aria-label="Slide 1"></button>
            <?php } ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($corousel as $key => $value) { ?>
                <?php $active = $key == 0 ? 'active' : ''  ?>
                <div class="carousel-item <?= $active; ?>">
                    <img src="image/<?= $value->gambar; ?>" class="d-block w-100 image-slider" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><?= $value->judul; ?></h3>
                        <h4><?= $value->text; ?></h4>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="card-container tagline">
        <div class="row">
            <div class="col col-md-4 my-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <div class="icon"><i class="far fa-check-circle"></i></div>
                        <h6 class="card-subtitle mb-2 ">Terpercaya</h6>
                        <p class="card-text">Lorem, ipsum dolor sit amet </p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 my-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <div class="icon"><i class="far fa-check-circle"></i></div>
                        <h6 class="card-subtitle mb-2 ">Terpercaya</h6>
                        <p class="card-text">Lorem, ipsum dolor sit amet </p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 my-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <div class="icon"><i class="far fa-check-circle"></i></div>
                        <h6 class="card-subtitle mb-2 ">Terpercaya</h6>
                        <p class="card-text">Lorem, ipsum dolor sit amet </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" container my-5 konten-container">
        <h3 class="title text-center my-5">Berita Terbaru</h3>
        <div class="row">
            <?php foreach ($artikel as $key => $articles) { ?>
                <div class="col col-md-4 my-3">
                    <div class="card">
                        <img src="image/<?= $articles->gambar ?>" class="card-img-top" alt="..." height="150">
                        <div class="card-body">
                            <h5><?= $articles->judul; ?>1</h5>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>