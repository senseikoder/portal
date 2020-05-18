<?php include('inc/head.inc') ?>

  <div class="container container-md registro">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="display-4">Portal Web</h2>
      </div>
    </div>

    <div class="row">
      
      <div class="col-md-6 offset-md-3">
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          <legend>Registro</legend>
          
          <div class="form-group">
            <input type="text" class="form-control" id="usuario" placeholder="Usuario">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="clave" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="clave2" placeholder="Confirmar Contraseña">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="apellido" placeholder="Apellido">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="cedula" placeholder="Cedula">
          </div>
          <div class="form-group">
            <input type="date" id="fechanac" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="direccion" placeholder="Dirección">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="estado" placeholder="Estado">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="codigopostal" placeholder="Código postal">
          </div>
          
          <button type="button" class="btn btn-primary" id="registrar">Registrar</button>

          <a href="index.php" class="float-right">Iniciar sesión</a>
        </form>
      </div>

    </div>

  </div>

  <?php include('inc/foot.inc') ?>
