@extends('blog.template.fondo')
@section('Barra')
<li class="nav-item">
  <a class="nav-link" href="/inicio">Inicio</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="blog">Blog
    <span class="sr-only">(current)</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="contacto">Contacto</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="login">Cerrar Secion</a>
</li>
@endsection

@section('Contenido')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Blog</h4>
            <h2>Recientes Posts</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-thumb-01.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Lifestyle</span>
                  <a href="post-details.html"><h4>Donec tincidunt leo</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 31, 2020</a></li>
                    <li><a href="#">12 Comments</a></li>
                  </ul>
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-thumb-02.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Lifestyle</span>
                  <a href="post-details.html"><h4>Suspendisse et metus</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 22, 2020</a></li>
                    <li><a href="#">26 Comments</a></li>
                  </ul>
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-thumb-03.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Lifestyle</span>
                  <a href="post-details.html"><h4>Donec tincidunt leo</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 18, 2020</a></li>
                    <li><a href="#">42 Comments</a></li>
                  </ul>
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-thumb-04.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Lifestyle</span>
                  <a href="post-details.html"><h4>Mauris ac dolor ornare</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 16, 2020</a></li>
                    <li><a href="#">28 Comments</a></li>
                  </ul>
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-thumb-05.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Lifestyle</span>
                  <a href="post-details.html"><h4>Donec tincidunt leo</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 12, 2020</a></li>
                    <li><a href="#">16 Comments</a></li>
                  </ul>
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-thumb-06.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Lifestyle</span>
                  <a href="post-details.html"><h4>Mauris ac dolor ornare</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 10, 2020</a></li>
                    <li><a href="#">3 Comments</a></li>
                  </ul>
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tecámac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
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