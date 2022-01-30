@extends('blog.template.sesion')
@section('Form')
<div class="sidebar-heading">
    <h2>Registro</h2>
</div>
<div class="content">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-12">
                <fieldset>
                    <input name="email" type="text" id="email" placeholder="Correo" required="">
                </fieldset>
            </div>
            <div class="col-sm-12">
                <fieldset>
                    <input name="password" type="text" id="password" placeholder="Contraseña" required="">
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="main-button">Ingresar</button>
                </fieldset>
            </div>
        </div>
    </form>
</div>
@endsection