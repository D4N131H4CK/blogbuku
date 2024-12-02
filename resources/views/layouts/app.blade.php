<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik LP3I - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #0a0a29;
            color: white;
            padding: 4rem 0;
        }

        .navbar-custom {
            background-color: #0a0a29;
        }

        .book-card {
            transition: transform 0.3s;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }

        .book-image-container {
            position: relative;
            margin: -100px auto 40px;
            max-width: 300px;
            z-index: 10;
        }

        .book-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .nav-link.active {
            font-weight: bold;
            border-bottom: 2px solid white;
        }

        .book-card {
            transition: transform 0.3s;
            cursor: pointer;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 1rem;
            background-color: #fff;
        }

        .card-title {
            color: #333;
            font-size: 1rem;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/lp3i.png') }}" alt="Politeknik LP3I Logo"
                    style="width: 180px; height: 70px; margin-right: 1px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-items">
                        <a href="#Persiapanawal" class="nav-link">Persiapan awal</a>
                    </li>
                    <li class="nav-items">
                        <a href="#bukulainnya" class="nav-link">Buku Lainnya</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
