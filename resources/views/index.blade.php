<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SofaMima | HOME</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FLATICON -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
</head>
<body>
    @include('partials.nav')

    <!-- SLIDER -->
    <section class="box">
      <div class="bienvenida">
        <div class="container-fluid">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-8">
              <h1>Descubre el Confort y Estilo con Nuestra Exclusiva Colección de Sofás</h1>
            </div>
            <div class="col-12">
              <p>Ve nuestras salas exclusivas y elige tu favorita.</p>
              <a href="/catalogo"><button class="btn-slider-catalog">VISITA NUESTRO CATALOGO</button></a>
            </div>
          </div>
        </div>
      </div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="imagenuno-mainslider"></div>
              </div>
              <div class="carousel-item">
                <div class="imagendos-mainslider"></div>
              </div>
              <div class="carousel-item">
                <div class="imagentres-mainslider"></div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- PARALLAX -->
    <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 d-flex align-items-center justify-conte-center">
              <div class="parallax-imguno">
                <a href="/catalogo"><button class="btn-parallax">Ver Salas</button></a>
              </div>
            </div>
            <div class="col-12">
              <div class="parallax-imgdos">
                <a href="/catalogo"><button class="btn-parallax">Ver Comedores</button></a>
              </div>
            </div>
            </div>
            <div class="col-12">
              <div class="parallax-imgtres">
                <a href="/catalogo"><button class="btn-parallax">Ver Sillones</button></a>
              </div>
            </div>
            </div>
          </div>
        </div>
    </section>

    <!-- TENDENCIAS -->
    <section class="box d-flex align-items-center justify-content-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h2>Nuevas Tendencias Disponibles</h2>
          </div>
          <div class="col-3">
            <div class="hover-effect">
              <div class="card-tendencias position-relative">
                <a href="/catalogo">
                  <img src="images/Gary.webp" alt="" class="img-fluid" draggable="false">
                </a>
                <a href="/catalogo">
                  <div class="btn-hidden">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">Gary</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="hover-effect">
              <div class="card-tendencias position-relative">
                <a href="/catalogo">
                  <img src="images/Modulos.webp" alt="" class="img-fluid" draggable="false">
                </a>
                <a href="/catalogo">
                  <div class="btn-hidden">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">Modulos</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="hover-effect">
              <div class="card-tendencias position-relative">
                <a href="/catalogo">
                  <img src="images/Toronto.webp" alt="" class="img-fluid" draggable="false">
                </a>
                <a href="/catalogo">
                  <div class="btn-hidden">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">Toronto</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="hover-effect">
              <div class="card-tendencias position-relative">
                <a href="/catalogo">
                  <img src="images/Torreon.webp" alt="" class="img-fluid" draggable="false">
                </a>
                <a href="/catalogo">
                  <div class="btn-hidden">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">Torreon</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- RAZONES -->
    <section class="box section-color d-flex align-items-center justify-content-center">
      <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-12 titulo-razon">
            <h1>Razones para Elegirnos</h1>
          </div>
          <div class="col-8 subtitulo-razon">
            <p>Nos dedicamos a ofrecer lo mejor en cada proyecto tenemos un compromiso latente con la calidad y la satisfacción del cliente.</p>
          </div>
          <div class="row">
            <div class="col-3 razones">
              <img width="40" height="40" viewBox="0 0 24 24" src="images/calidad.svg" alt="">
              <div>
                <p><b>Calidad</b></p>
                <p>Alta gama y durabilidad en cada producto.</p>
              </div>
            </div>
            <div class="col-3 razones">
              <img width="40" height="40" viewBox="0 0 24 24" src="images/sofa.svg" alt="">
              <div>
                <p><b>Diseño</b></p>
                <p>Estética y funcionabilidad en diseños exclusivos.</p>
              </div>
            </div>
            <div class="col-3 razones">
              <img width="40" height="40" viewBox="0 0 24 24" src="images/tiempo-de-descanso.svg" alt="">
              <div>
                <p><b>Confort</b></p>
                <p>Muebles orgónomicos para máximo confort.</p>
              </div>
            </div>
            <div class="col-3 razones">
              <img width="40" height="40" viewBox="0 0 24 24" src="images/editar.svg" alt="">
              <div>
                <p><b>Personalización</b></p>
                <p>Elige color y detalles para cada estilo unico.</p>
              </div>
            </div>
            <div class="col-3 razones">
              <img width="40" height="40" viewBox="0 0 24 24" src="images/apreton-de-manos.svg" alt="">
              <div>
                <p><b>Confianza</b></p>
                <p>Servicio post-venta para satisfacción completa.</p>
              </div>
            </div>
            <div class="col-3 razones">
              <img width="40" height="40" viewBox="0 0 24 24" src="images/cliente.svg" alt="">
              <div>
                <p><b>Servicio</b></p>
                <p>Asesoramiento y soporte en tu compra.</p>
              </div>
            </div>
            <div class="col-3 razones">
              <img width="40" height="40" viewBox="0 0 24 24" src="images/innovacion.svg" alt="">
              <div>
                <p><b>Innovación</b></p>
                <p>Diseño vanguardistas con las utlimas tendecnias.</p>
              </div>
            </div>
            <div class="col-3 razones">
              <img width="40" height="40" viewBox="0 0 24 24" src="images/favoritos.svg" alt="">
              <div>
                <p><b>Exclusividad</b></p>
                <p>Muebles unicos para personalización distintiva.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- RESEÑÁS -->
    <section class="box section-color d-flex align-items-center justify-content-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 titulo-reseñas">
            <h1>Reseñás</h1>
          </div>
          <div class="col-12">
            <div class="center d-flex align-items-center justify-content-center">
              <div class="testimonial-item text-center">
                <blockquote>
                  <p>"Increíble calidad en la sala 'Torreón'. Los bordados son un detalle encantador y la tela es tan resistente como elegante. ¡Es el centro de atención en mi sala de estar!"</p>
                  <div class="review-title text-uppercase">Reseña de "Sala Torreón" por Sofía R.</div>
                </blockquote>
              </div>
              <div class="testimonial-item text-center">
                <blockquote>
                  <p>"El comedor 'Viena' superó todas mis expectativas. La madera es robusta y el acabado impecable. Las sillas son bastante cómodas."</p>
                  <div class="review-title text-uppercase">Reseña de "Comedor Viena" por Carlos M.</div>
                </blockquote>
              </div>
              <div class="testimonial-item text-center">
                <blockquote>
                  <p>"La sala 'Toronto' es la definición de comodidad y estilo. Las patas son sólidas y estables, y la tela es suave al tacto. ¡Ha transformado completamente el ambiente de mi hogar!"”</p>
                  <div class="review-title text-uppercase">Reseña de "Sala Toronto" por Ana G.</div>
                </blockquote>
              </div>
              <div class="testimonial-item text-center">
                <blockquote>
                  <p>"Me enamoré de la sala 'Córdoba' desde el momento en que la vi. La calidad del sillón es notable, especialmente en las costuras y el soporte."</p>
                  <div class="review-title text-uppercase">Reseña de "Sala Córdoba" por Luis E.</div>
                </blockquote>
              </div>
              <div class="testimonial-item text-center">
                <blockquote>
                  <p>"La sala 'Módulos' es versátil y moderna. Perfecta para mi espacio limitado, y la calidad es evidente en cada detalle. ¡Es una compra que definitivamente volvería a hacer!"</p>
                  <div class="review-title text-uppercase">Reseña de "Sala Módulos" por María P.</div>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- OTROS -->
    <section class="box d-flex align-items-center justify-content-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h2>OTROS</h2>
          </div>
          <div class="col-3">
            <div class="hover-effect">
              <div class="card-tendencias position-relative">
                <a href="/catalogo">
                  <img src="images/Set de mesas de marmol.webp" alt="" class="img-fluid" draggable="false">
                </a>
                <a href="/catalogo">
                  <div class="btn-hidden">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">MESAS DE MARMOL</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="hover-effect">
              <div class="card-tendencias position-relative">
                <a href="/catalogo">
                  <img src="images/Set Negro de mesas marmol.webp" alt="" class="img-fluid" draggable="false">
                </a>
                <a href="/catalogo">
                  <div class="btn-hidden">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">MESAS DE MARMOL</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="hover-effect">
              <div class="card-tendencias position-relative">
                <a href="/catalogo">
                  <img src="images/Sillon.webp" alt="" class="img-fluid" draggable="false">
                </a>
                <a href="/catalogo">
                  <div class="btn-hidden">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">SILLON</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="hover-effect">
              <div class="card-tendencias position-relative">
                <a href="/catalogo">
                  <img src="images/Recamara.webp" alt="" class="img-fluid" draggable="false">
                </a>
                <a href="/catalogo">
                  <div class="btn-hidden">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">RECÁMARA</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('partials.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/nav.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $(document).ready(function(){
    $('.center').slick({
    infinite: false,
    centerMode: false,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  });
</script>

</html>