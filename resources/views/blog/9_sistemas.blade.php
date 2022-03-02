@extends('blog.template.details')
@section('Barra')
<li class="nav-item active">
  <a class="nav-link" href="9_sistemas">Detalles
    <span class="sr-only">(current)</span>
  </a>
</li>
@endsection
@section('Imagen')
<img src="assets/images/Image9.jpg" alt="">
@endsection
@section('Titulo')
<span>Proceso de Diagramaci&oacute;n</span>
<a><h4>Arquitectura Cliente-Servidor</h4></a>
<p>Combinaci&oacute;n de un cliente que interactúa con el usuario, y un servidor que interact&uacute;a
    con los recursos a compartir. El proceso del cliente proporciona la interfaz entre el usuario y
    el resto del sistema. El proceso del servidor actúa como un motor de software que maneja recursos compartidos
    tales como bases de datos, impresoras, M&oacute;dem, etc.
<br><br>Las tareas del cliente y del servidor tienen diferentes requerimientos en cuanto a
    recursos de c&oacute;mputo como velocidad del procesador, memoria, velocidad y capacidades del disco e
    input-output devices.
<br><br>Se establece una relaci&oacute;n entre procesos distintos, los cuales pueden ser ejecutados en la
    misma m&aacute;quina o en m&aacute;quinas diferentes distribuidas a lo largo de la red.
<br><br>Existe una clara distincin de funciones basadas en el concepto de ”servicio”, que se
    establece entre clientes y servidores.
<br><br>La relaci&oacute;n establecida puede ser de muchos a uno, en la que un servidor puede dar servicio
    a muchos clientes, regulando su acceso a los recursos compartidos.
<br><br>Los clientes corresponden a procesos activos en cuanto a que son estos los que hacen
    peticiones de servicios. Estos &uacute;ltimos tienen un car&aacute;cter pasivo, ya que esperan peticiones de los clientes.
<br><br>No existe otra relaci&oacute;n entre clientes y servidores que no sea la que se establece a trav&eacute;s
    del intercambio de mensajes entre ambos. El mensaje es el mecanismo para la petici&oacute;n y entrega de solicitudes
    de servicios.
<br><br>El ambiente es heterog&eacute;neo. La plataforma de hardware y el sistema operativo del cliente y
    del servidor no son siempre los mismos. Precisamente una de las principales ventajas de esta arquitectura es
    la posibilidad de conectar clientes y servidores independientemente de sus plataformas.
<br><br>El concepto de escalabilidad tanto horizontal como vertical es aplicable a cualquier sistema
    Cliente-Servidor. La escalabilidad horizontal permite agregar m&aacute;s estaciones de trabajo activas sin afectar
    significativamente el rendimiento. La escalabilidad vertical permite mejorar las caracter&iacute;sticas del servidor
    o agregar m&uacute;ltiples servidores.
<br><br><img src="assets/images/Image9_1.jpg" alt="">
</p>
@endsection
