@extends('blog.template.details')
@section('Barra')
<li class="nav-item active">
  <a class="nav-link" href="8_sistemas">Detalles
    <span class="sr-only">(current)</span>
  </a>
</li>
@endsection
@section('Imagen')
<img src="assets/images/Image8.jpg" alt="">
@endsection
@section('Titulo')
<span>Sistemas de Información</span>
<a><h4>Deacuerdo a su Arquitectura</h4></a>
<p>Los sistemas de información, de manera general se pueden clasificar de tres formas según sus propósitos generales, en este sentido Peralta (2008) clasifica los sistemas de información en tres tipos fundamentales:
<h6>Sistemas Transaccionales:</h6><p>Son Sistemas de Información que logran la automatización de procesos operativos dentro de una organización ya que su función primordial consiste en procesar transacciones tales como pagos, cobros, entradas, salidas, etc.</p>
<h6>Sistemas de Soporte a la Toma de Decisiones:</h6><p>Son Sistemas de Información que apoyan el proceso de toma de decisiones.</p>
<h6>Sistemas Estratégicos:</h6><p>Son sistemas de información desarrollado en las organizaciones con el fin de lograr ventajas competitivas, a través del uso de la tecnología de información.
<br><br>En dependencia del enfoque (tres en total), según reporta Peña (2006), los sistemas de información se pueden agrupar en una cierta clasificación, que brinda una idea esencial de su estructura y funcionamiento.
<br><br>De acuerdo al elemento principal de proceso de la información, los sistemas de información pueden ser de tres tipos (Manual, Mecanizadas y Bath):
</p>
<h6>Manuales:</h6><p>Cuando el hombre auxiliado por cierto equipo (máquinas de escribir, sumadoras, archivos, etc.) realiza las principales funciones de recopilación, registro, almacenamiento, cálculo y generación de información.</p>
<h6>Mecanizadas:</h6><p>Cuando cierta maquinaria realiza las principales funciones de procesamiento. Para los sistemas mecanizados que hacen uso de un computador, de acuerdo al tipo de interacción Hombre-Máquina, los sistemas de información pueden ser de dos tipos (Batch y en Línea]
<br>Bratch:El usuario proporciona los datos necesarios para la ejecución de un proceso y espera a que el computador termine la tarea para recibir los resultados.
<br>En Linea:Existe un diálogo directo entre el usuario y el computador durante la ejecución de un proceso.
<br><br>En cuanto a la organización física de los principales recursos de procesamiento de datos, los sistemas de información pueden ser de tipo:
</p>
<h6>Procesos centralizados:</h6><p>Los recursos se encuentran ubicados en un área física determinada, por lo que su acceso se realiza en las misma instalación o desde lugares retirados, mediante líneas de comunicación de datos (telefónicas, microondas, satélite, etc.).</p>
<h6>Proceso distribuido:</h6><p>Los recursos se encuentran diseminados en diversos lugares de una zona territorial (ciudad, país, continente, etc.), por lo que el procesamiento se realiza en el propio lugar donde se originan los datos, existiendo la posibilidad de compartir información entre las diversas instalaciones, mediante la información de una “Red de Comunicación”.</p>

@endsection