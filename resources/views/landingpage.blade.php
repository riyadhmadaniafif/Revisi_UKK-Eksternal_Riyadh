<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Website Galeri Foto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Galeri Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://unsplash.com">Download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard2">Data Galeri Foto & Gambar</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dokumentasi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://www.indonesia.go.id">Nasional</a></li>
                                <li><a class="dropdown-item" href="https://www.wikipedia.org">Internasional</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.google.com">Mencari Sesuatu Yang Lain ?</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Ingin Menemukan Sesuatu ?" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                
                <img src="https://images.pexels.com/photos/758742/pexels-photo-758742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="d-block w-100" alt="...">
                    
                <div class="carousel-caption d-none d-md-block">
                    <a href="/register" type="button" class="btn btn-primary">Daftar</a>
                    <a href="/login" type="button" class="btn btn-primary">Masuk</a>
                    <br>
                    <br>
                    <h5>Selamat Datang !</h5>
                    <p>Ini adalah Website Galeri Foto</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/2450221/pexels-photo-2450221.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="/register" type="button" class="btn btn-primary">Daftar</a>
                    <a href="/login" type="button" class="btn btn-primary">Masuk</a>
                    <br>
                    <br>
                    <h5>Selamat Datang !</h5>
                    <p>Ini adalah Website Galeri Foto</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1518723/pexels-photo-1518723.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="/register" type="button" class="btn btn-primary">Daftar</a>
                    <a href="/login" type="button" class="btn btn-primary">Masuk</a>
                    <br>
                    <br>
                    <h5>Selamat Datang !</h5>
                    <p>Ini adalah Website Galeri Foto</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>
