<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Selamat Datang - PMB Online UNIPA</title>
    <style>
        .card-body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .card-body img {
            width: 100px;
        }

        .container {
            margin-top: 180px;
        }

        .col-sm-6 {
            margin: 15px 0;
        }

        @media (min-width: 1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1200px;
            }
        }

        @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1100px;
            }
        }

        @media (min-width: 992px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width: 960px;
            }
        }

        @media (min-width: 768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: 720px;
            }
        }

        @media (min-width: 576px) {

            .container,
            .container-sm {
                max-width: 540px;
            }
        }

        @media (max-width: 575px) {

            .container,
            .container-sm {
                max-width: 400px;
            }
        }

        div#footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(http://simunipa.unipa.ac.id/styles/images1/header2.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
            padding: 20px 0;
        }

        div#header {
            position: fixed;
            top: 0;
            width: 100%;
            left: 0;
            text-align: center;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(http://simunipa.unipa.ac.id/styles/images1/header2.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .btn-primary {
            color: #fff;
            background-color: #842b90;
            border: 0;
        }

        .card {
            border-radius: 10px;
        }

        .btn-check:active+.btn-primary,
        .btn-check:checked+.btn-primary,
        .btn-primary.active,
        .btn-primary:active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #003685 !important;
            border: 0 !important;
        }

        body {
            background-image: url(http://simunipa.unipa.ac.id/gtakademik/assets/versi_3.0/img/grid.png);
            background-position: center;
        }

        a {
            color: #0d6efd;
            text-decoration: none;
        }

        a:hover {
            color: #fff;
            background-color: #ecf0f6;
            border-radius: 10px;
            opacity: .5;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="header">
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <a href="<?php echo site_url(); ?>" target='_blank'>
                        <div class="card-body">
                            <img src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop-outline.svg">
                            <p class="btn btn-primary w-100 mt-3">Portal PMB</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <a href="https://bpak.unipa.ac.id/undangansesama/" class="" target='_blank'>
                        <div class="card-body">
                            <img src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop-outline.svg">
                            <p class="btn btn-primary w-100 mt-3">Undangan Sesama</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="footer">
            Copyright BPAK UNIPA &copy; 2021. Hak cipta dilindungi undang-undang.
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>