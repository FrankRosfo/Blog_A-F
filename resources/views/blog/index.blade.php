@extends('blog.template.fondo')
@section('Logotipo')
<a class="navbar-brand" href="inicio" ><h2>Blog A/F<em>.</em></h2></a>
@endsection
@section('Barra')
<li class="nav-item active">
  <a class="nav-link" href="inicio">Inicio
    <span class="sr-only">(current)</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="blog">Blog</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="contacto">Contacto</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="logout">Cerrar Secion</a>
</li>
@endsection
@section('Contenido')
@if(auth()->check())
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      <div class="item">
        <img src="assets/images/Image1.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Conceptos</span>
            </div>
            <a href="1_sistemas"><h4>Sistemas de información</h4></a>
            <ul class="post-info">
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/Image2.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Evolución</span>
            </div>
            <a href="2_sistemas"><h4>Sistemas de información</h4></a>
            <ul class="post-info">
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/Image3.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Conceptos</span>
            </div>
            <a href="3_sistemas"><h4>Cliente-Servidor</h4></a>
            <ul class="post-info">
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/Image4.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Sistemas</span>
            </div>
            <a href="4_sistemas"><h4>Computadoras Centrales y Dedicadas</h4></a>
            <ul class="post-info">
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/Image5.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Sistemas</span>
            </div>
            <a href="5_sistemas"><h4>Conexion Libre y atravez de Redes</h4></a>
            <ul class="post-info">
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/Image6.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Sistemas</span>
            </div>
            <a href="6_sistemas"><h4>Arquitectura Cliente-Servidor</h4></a>
            <ul class="post-info">
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="blog-posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image1.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Conceptos</span>
                  <a href="1_sistemas"><h4>Sistemas de Información</h4></a>
                  <p>Un sistema de información es un conjunto de datos que interactúan entre sí con un fin común. La importancia de un sistema de información radica en la eficiencia en la correlación de una gran cantidad de datos ingresados a través de procesos diseñados para cada área con el objetivo de producir información válida para la posterior toma de decisiones.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a>UPT</a>,</li>
                          <li><a>Tecámac</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="https://www.facebook.com/profile.php?id=100064101466027">Facebook</a>,</li>
                          <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link">Instagram</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image2.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Evolución</span>
                  <a href="2_sistemas"><h4>Sistemas de información</h4></a>
                  <p>1950 - 1960: procesamiento de datos electrónicos, sistema de procesamiento de transacciones. Durante este período, el papel de SI fue principalmente para realizar actividades como el procesamiento de transacciones, el mantenimiento de registros y la contabilidad. SI se utilizó principalmente para el procesamiento electrónico de datos.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a>UPT</a>,</li>
                          <li><a>Tecámac</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="https://www.facebook.com/profile.php?id=100064101466027">Facebook</a>,</li>
                          <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link">Instagram</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image3.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Conceptos</span>
                  <a href="3_sistemas"><h4>Cliente-Servidor</h4></a>
                  <p>Empezó a ser aceptado a finales de los años 80’ para referirse a las PC’s en red.<br>Su funcionamiento es de la siguiente manera, se tiene una máquina cliente que requiere un servicio de una máquina servidor, y éste realiza la función para la que está programado.Desde el punto de vista funcional, es una arquitectura distribuida que permite a los usuarios finales obtener acceso a la información aún en los entornos multiplataforma.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a>UPT</a>,</li>
                          <li><a>Tecámac</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="https://www.facebook.com/profile.php?id=100064101466027">Facebook</a>,</li>
                          <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link">Instagram</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="blog">Ver más Posts</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Ultimos Comentarios</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a>
                      <h5>Interesante tu blog como portafolio de Evidencias, muy bueno y muy interesante</h5>
                      <span>Ene 28, 2022</span>
                    </a></li>
                    <li><a>
                      <h5>Buena información y un gran blog el que hiciste, mucha suerte y gracias por la información</h5>
                      <span>Ene 18, 2022</span>
                    </a></li>
                    <li><a>
                      <h5>Me gusto el diseño de tu blog, es muy bueno y muy interesante excelente trabajo</h5>
                      <span>Ene 10, 2022</span>
                    </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item categories">
                <div class="sidebar-heading">
                  <h2>Trabajos Realizados</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a href="#">- Hobbies/F</a></li>
                    <li><a href="#">- Uso Orientado a Objetos</a></li>
                    <li><a href="#">- Juego Clasico</a></li>
                    <li><a href="#">- QSMN/F</a></li>
                    <li><a href="#">- Batalla Naval</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item tags">
                <div class="sidebar-heading">
                  <h2>Lenguajes de Programación</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">Php</a></li>
                    <li><a href="#">C++</a></li>
                    <li><a href="#">C#</a></li>
                    <li><a href="#">Laravel</a></li>
                    <li><a href="#">C</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@endsection