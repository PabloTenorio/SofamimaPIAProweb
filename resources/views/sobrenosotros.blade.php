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
    <link rel="stylesheet" href="css/sobrenosotros.css">

    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FLATICON -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
</head>
<body>
    @include('partials.navdos')

    <section class="sobrenosotros-box">
        <div>
            <div class="d-flex flex-wrap flex-column justify-content-between align-items-center">
                <h1 class="display-5 fw-bold responsiveabouttittle mt-5">Diseñando Calidad desde 1970</h1>
                <nav class="breadcrumb">
                    <a href="/">Home</a>
                    <span class="breadcrumb-item active" aria-current="page">Sobre nosotros</span>
                </nav>
            </div>
            <div class="text-center">
                <h3 class="mb-5"><b>Con más de 50 años de experiencia, nos hemos consolidado <br> como líderes en la fabricación de salas y sofás.</b></h3>
                <div class="col-md-12"><p>Para nosotros, cada mueble es un compromiso con la elegancia y la durabilidad. Elegimos cuidadosamente cada material y supervisamos cada paso del proceso de fabricación para asegurar que nuestros productos no solo sean estéticamente impresionantes, sino también excepcionalmente cómodos y duraderos. Nuestra experiencia es su garantía de calidad y buen gusto.</p></div>
            </div>
        </div>
    </section>
      
      <section class="mt-5" id="tradicion">
        <div class="vertical-element">
          <div class="container">
            <div class="row d-flex align-items-center bg-light">
              <div class="col-md-6">
                <div class="image-holder">
                  <img src="images/cierrese-encima-foto-cortar-madera-segueta.jpg" class="img-fluid" alt="about-us">
                </div>
              </div>
              <div class="col-md-6">
                <div class="section-element p-5">
                  <h2><b>Tradición en Cada Detalle</b></h2>
                  <p>Desde hace más de 50 años, nos dedicamos a la creación de salas y sofás que definen la elegancia y el confort. Utilizando materiales de primera  garantizamos la satisfacción de nuestros clientes más exigentes. Nuestra historia es un viaje de pasión y perfección en cada detalle.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="vertical-element py-5" id="herencia">
          <div class="container">
            <div class="row d-flex align-items-center bg-light">
              <div class="col-md-6">
                <div class="section-element p-5">
                  <h2><b>Herencia de Calidad y Diseño</b></h2>
                  <p>Nuestra experiencia se traduce en diseños que no solo dan vida a tus espacios, sino que también ofrecen una comodidad y durabilidad excepcionales. Cada sofá es una obra de arte, creada para satisfacer a los gustos más refinados.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="image-holder text-right">
                  <img src="images/cerca-zapatero-trabajando-cuero-textil.jpg" class="img-fluid" alt="about-us">
                </div>
              </div>
            </div>
          </div>  
        </div>
      </section> 
      
      <section class="video" id="bienvenido">
        <div class="container">
          <div class="row">
            <div class="video-content" data-aos="fade-in">
              <div class="video-bg">
                <iframe width="100%" height="600" src="https://www.youtube.com/embed/0mS-0LZXRCY?si=wzEBnlSYQGmKDUSW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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

    @include('partials.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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