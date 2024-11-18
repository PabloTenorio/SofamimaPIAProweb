<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SofaMima | CATÁLOGO</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/navdos.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/catalogo.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FLATICON -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
</head>
<body>
    @include('partials.navdos')

    <section class="d-flex align-items-center justify-content-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 margin-top">
                    <h1>CATÁLOGO</h1>
                </div>
                @foreach ($catalogo as $catalogo)
                    <div class="col-3">
                        <div class="hover-effect">
                            <div class="card-tendencias position-relative">
                                <a href="">
                                    <img class="img-fluid" draggable="false" src="{{asset('images/admin/' . $catalogo->imagen)}}" alt="">
                                </a>
                                <a href="">
                                <div class="btn-hidden">
                                    <span class="text-uppercase fs-5 mt-3" style="color: white;">{{$catalogo->name}}</span>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/nav.js"></script>

</html>