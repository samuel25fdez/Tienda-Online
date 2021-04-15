<div class="col-md-6">
<label for="inputEmail4" class="form-label">Correo Electrónico</label>
<input type="email" class="form-control" id="inputEmail4" name="email" <?php  $validador->mostrar_email()  ?>>

<?php

$validador->mostrar_error_email();

?>





</div>
<div class="col-md-6">
<label for="inputPassword4" class="form-label">Nombre de Usuario</label>
<input type="text" class="form-control" id="inputPassword4" name="nombre" <?php  $validador->mostrar_nombre()  ?>>
<?php $validador->mostrar_error_nombre()?>
</div>
<div class="col-12">
<label for="inputAddress" class="form-label">Contraseña</label>
<input type="password" class="form-control" id="inputAddress" name="password">
<?php $validador->mostrar_error_password()?>
</div>
<div class="col-12">
<label for="inputAddress2" class="form-label">Repite Contraseña</label>
<input type="password" class="form-control" id="inputAddress2" name="password2">
<?php $validador->mostrar_error_password2()?>
</div>
<div class="col-md-6">
<label for="inputCity" class="form-label">Ciudad</label>
<input type="text" class="form-control" id="inputCity">
</div>
<div class="col-md-6">
<label for="inputCity" class="form-label">Ciudad</label>
<input type="text" class="form-control" id="inputCity">
</div>
<div class="col-md-4">
<label for="inputState" class="form-label">País</label>
<select id="inputState" class="form-select">
    <option selected>Choose...</option>
    <option>España</option>
    <option>Francia</option>
    <option>Alemania</option>
</select>
</div>
<div class="col-md-2">
<label for="inputZip" class="form-label">Código Postal</label>
<input type="text" class="form-control" id="inputZip">
</div>
<div class="col-12">
<div class="form-check">
    
    
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary" name="enviar">Sign in</button>
</div>