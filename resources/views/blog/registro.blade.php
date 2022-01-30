@extends('blog.template.sesion')
@section('Form')
<div class="sidebar-heading">
    <h2>Registro "NO INGRESAR SU CONTRASEÑA REAL NO NOS HACEMOS RESPONSABLES"</h2>
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
            <div class="col-sm-12">
                <fieldset>
                    <input name="cpassword" type="text" id="cpassword" placeholder="Confirmar Contraseña" required="">
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="main-button">Registrar</button>
                </fieldset>
            </div>
        </div>
    </form>
</div>
@endsection