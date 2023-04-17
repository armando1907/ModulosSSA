<?php include('../templates/cabecera.php'); ?>

<div class="col-md-5">
  <form action="" method="post">
    <div class="card">
    <div class="card-header">
      CRUD PARAMEDICOS
    </div>
    <div class="card-body">
        <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input type="text"
        class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">NOMBRE</label>
        <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="NOMBRE COMPLETO">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">CORREO</label>
      <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="CORREO ELECTRONICO">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">TELEFONO</label>
        <input type="text"
        class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="NUMERO DE TELEFONO">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">TECNICO EN ATENCION MEDICA PREHOSPITALARIA:</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">NIVEL BASICO</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">NIVEL INTERMEDIO</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">NIVEL AVANZADO</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">MEDICO</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">OTRO</label>
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label">NIVEL DE CERTIFICACION:</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">CONOCER ECO0307.01</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">TECNICO SUPERIOR UNIVERSITARIO</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">LICENCIATURA</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">TECNICO EN URGENCIAS MEDICAS</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">OTRO</label>
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label">CAPACITACION CONTINUA:</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">BLS</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">PHTLS</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">ACLS</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">AMLS</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">PALS</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">NALS</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">PEPP</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">GEMS</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">OTROS</label>
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label">AÑOS DE EXPERIENCIA EN EL SISTEMA DE ATENCION MEDICA PREHOSPITALARIA:</label>
        <input type="text"
        class="form-control" name="anios" id="anios" aria-describedby="helpId" placeholder="AÑOS DE EXPERIENCIA">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">MUNICIPIO DE RESIDENCIA</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">MEXICALI</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">TECATE</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">TIJUANA</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">PLAYAS DE ROSARITO</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">ENSENADA</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">SAN QUINTIN</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="" id="">
      <label class="form-check-label" for="">SAN FELIPE</label>
    </div>
</div>
    <div class="btn-group" role="group" aria-label="Button group name">
      <button type="button" class="btn btn-success">AGREGAR</button>
      <button type="button" class="btn btn-warning">EDITAR</button>
      <button type="button" class="btn btn-danger">BORRAR</button>
    </div>
    </div>
  </div>
  </form>
  
    
<div class="col-md-7">
  <div class="card">
    <div class="card-header">
      PANEL PARAMEDICOS
    </div>
    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CORREO</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">TECNICO EN ATENCION MEDICA PREHOSPITALARIA</th>
            <th scope="col">NIVEL DE CERTIFICACION</th>
            <th scope="col">CAPACITACION CONTINUA</th>
            <th scope="col">AÑOS DE EXPERIENCIA EN EL SISTEMA DE ATENCION MEDICA PREHOSPITALARIA</th>
            <th scope="col">MUNICIPIO DE RESIDENCIA</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td scope="row">1</td>
            <td>*NOMBRE*</td>
            <td>*CORREO*</td>
            <td>*TELEFONO*</td>
            <td>*TECNICO*</td>
            <td>*NIVEL*</td>
            <td>*CAPACITACION*</td>
            <td>*AÑOS*</td>
            <td>*MUNICIPIO*</td>
          </tr>
          <tr class="">
            <td scope="row">2</td>
            <td>*NOMBRE*</td>
            <td>*CORREO*</td>
            <td>*TELEFONO*</td>
            <td>*TECNICO*</td>
            <td>*NIVEL*</td>
            <td>*CAPACITACION*</td>
            <td>*AÑOS*</td>
            <td>*MUNICIPIO*</td>
          </tr>
          <tr class="">
            <td scope="row">3
            </td>
            <td>*NOMBRE*</td>
            <td>*CORREO*</td>
            <td>*TELEFONO*</td>
            <td>*TECNICO*</td>
            <td>*NIVEL*</td>
            <td>*CAPACITACION*</td>
            <td>*AÑOS*</td>
            <td>*MUNICIPIO*</td>
          </tr>
        </tbody>
      </table>
    </div>
    
</div>
    </div>
  </div>


<?php include('../templates/pie.php'); ?>
