<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SofaMima | BLOG</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/navdos.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/blog.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FLATICON -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
</head>
<body>
    @include('partials.navdos')

    <section class="box d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="blog">Blog</h1>
                </div>
                @foreach ($blog as $blog)
                    <div class="row mb-5">
                        <div class="col-12">
                            <h3 class="titulo-blog">{{$blog->titulo}}</h3>
                        </div>
                        <div class="col-6">
                            <img class="w-100" src="{{asset('images/notas/' . $blog->imagen1)}}" alt="">
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <p>Nota #{{$blog->id}} |</p>
                                <p>{{$blog->fecha}}</p>
                            </div>
                            <p class="texto-blog">{{$blog->texto}}</p>
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