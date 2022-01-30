@extends('blog.template.fondo')
@section('Barra')
<li class="nav-item active">
  <a class="nav-link" href="/inicio">Inicio
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
  <a class="nav-link" href="login">Iniciar Secion</a>
</li>
@endsection
@section('Contenido')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      <div class="item">
        <img src="assets/images/banner-item-01.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Conceptos</span>
            </div>
            <a href="post-details.html"><h4>Sistemas de información</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 12, 2020</a></li>
              <li><a href="#">12 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/banner-item-02.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Evolución</span>
            </div>
            <a href="post-details.html"><h4>Sistemas de información</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 14, 2020</a></li>
              <li><a href="#">24 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/banner-item-03.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Conceptos</span>
            </div>
            <a href="post-details.html"><h4>Cliente-Servidor</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 16, 2020</a></li>
              <li><a href="#">36 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/banner-item-04.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Sistemas</span>
            </div>
            <a href="post-details.html"><h4>Computadoras Centrales y Dedicadas</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 18, 2020</a></li>
              <li><a href="#">48 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/banner-item-05.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Sistemas</span>
            </div>
            <a href="post-details.html"><h4>Conexion Libre y atravez de Redes</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 24, 2020</a></li>
              <li><a href="#">64 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/banner-item-06.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Sistemas</span>
            </div>
            <a href="post-details.html"><h4>Arquitectura Cliente-Servidor</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 26, 2020</a></li>
              <li><a href="#">72 Comments</a></li>
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
                  <img src="assets/images/blog-post-01.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Conceptos</span>
                  <a href="post-details.html"><h4>Sistemas de Información</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 31, 2020</a></li>
                    <li><a href="#">12 Comments</a></li>
                  </ul>
                  <p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for more info. Thank you.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Instagram</a></li>
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
                  <img src="assets/images/blog-post-02.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Evolución</span>
                  <a href="post-details.html"><h4>Sistemas de información</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 24, 2020</a></li>
                    <li><a href="#">36 Comments</a></li>
                  </ul>
                  <p>You can support us by contributing a little via PayPal. Please contact <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">TemplateMo</a> via Live Chat or Email. If you have any question or feedback about this template, feel free to talk to us. Also, you may check other CSS templates such as <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Instagram</a></li>
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
                  <img src="assets/images/blog-post-03.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Conceptos</span>
                  <a href="post-details.html"><h4>Cliente-Servidor</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 14, 2020</a></li>
                    <li><a href="#">48 Comments</a></li>
                  </ul>
                  <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Instagram</a></li>
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
@endsection