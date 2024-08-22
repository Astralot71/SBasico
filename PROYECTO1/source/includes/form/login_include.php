<div class="container">
  <div class="row justify-content-end">
    <div class="col-md-8 text-center ">
      <!-- <div class="justify-content-center"> -->
        <img src="source/image/logosis1.png" alt="" class="img-fluid h-75 ">
        
      <!-- </div> -->
    </div>
    <div class="col-md-4">
      <div class="card mt-5 " id="login">
        <div class="card-body">
          <div class=" row justify-content-center ">
            <div class="col-6 ">
              <img src="source/image/ugel.png" alt="" class="img-fluid">
            </div>
          </div>
          <h3 class="card-title text-center">Iniciar Sesión</h3>
          <form>
            <div class="mb-3">
              <label class="form-label">Ingrese su Usuario</label>
              <input type="text" class="form-control" id="user" placeholder="Ingrese su D.N.I" oninput="validarNumeros(event)">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
          </form>
          <div class="mt-3 text-center">
            <a href="#">¿Olvidaste tu contraseña?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>