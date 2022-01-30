@extends('blog.template.fondo')
@section('Barra')
<li class="nav-item">
  <a class="nav-link" href="/inicio">Inicio</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="blog">Blog</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="contacto">Contacto</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="login">Iniciar Secion
    <span class="sr-only">(current)</span>
  </a>
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
            <h4>Login</h4>
            <h2>¡Bienvenido!</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<section class="contact-us">
  <div class="container">
    <div class="col-lg-auto">
      <div class="down-contact">
        <div class="row">
          <div class="col-lg-12">
            <div class="sidebar-item contact-form">
              @yield('Form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection