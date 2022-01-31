@extends('blog.template.details')
@section('Barra')
<li class="nav-item active">
  <a class="nav-link" href="3_sistemas">Detalles
    <span class="sr-only">(current)</span>
  </a>
</li>
@endsection
@section('Imagen')
<img src="assets/images/Image3.jpg" alt="">
@endsection
@section('Titulo')
<span>Conceptos</span>
<a><h4>Cliente-Servidor</h4></a>
<p>Arquitectura Cliente servidor. Esta arquitectura consiste básicamente en un cliente que realiza peticiones a otro programa (el servidor) que le da respuesta. Aunque esta idea se puede aplicar a programas que se ejecutan sobre una sola computadora es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.
<br>La interacción cliente-servidor es el soporte de la mayor parte de la comunicación por redes. Ayuda a comprender las bases sobre las que están construidos los algoritmos distribuidos.</p>
<h6>Cliente:</h6><p>Programa ejecutable que participa activamente en el establecimiento de las conexiones. Envía una petición al servidor y se queda esperando por una respuesta. Su tiempo de vida es finito una vez que son servidas sus solicitudes, termina el trabajo.</p>
<h6>Servidor:</h6><p>Es un programa que ofrece un servicio que se puede obtener en una red. Acepta la petición desde la red, realiza el servicio y devuelve el resultado al solicitante. Al ser posible implantarlo como aplicaciones de programas, puede ejecutarse en cualquier sistema donde exista TCP/IP y junto con otros programas de aplicación.</p>
@endsection