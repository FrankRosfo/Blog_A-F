@extends('blog.template.details')
@section('Barra')
<li class="nav-item active">
  <a class="nav-link" href="6_sistemas">Detalles
    <span class="sr-only">(current)</span>
  </a>
</li>
@endsection
@section('Imagen')
<img src="assets/images/Image6.jpg" alt="">
@endsection
@section('Titulo')
<span>Sistemas</span>
<a><h4>Arquitectura Cliente-Servidor</h4></a>
<p>En esta arquitectura la computadora de cada uno de los usuarios, llamada cliente, produce una demanda de
    informaci&oacute;n a cualquiera de las computadoras que proporcionan informaci&oacute;n, conocidas como servidores estos
    &uacute;ltimos responden a la demanda del cliente que la produjo.
<br><br>Los clientes y los servidores pueden estar conectados a una red local o una red amplia, como la que se
puede implementar en una empresa o a una red mundial como lo es la Internet.
<br><br>Bajo este modelo cada usuario tiene la libertad de obtener la informaci&oacute;n que requiera en un momento
dado proveniente de una o varias fuentes locales o distantes y de procesarla como seg&uacute;n le convenga. Los distintos
servidores tambi&eacute;n pueden intercambiar informaci&oacute;n dentro de esta arquitectura.
</p>
@endsection
