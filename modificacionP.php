<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/estiloCampos.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 align=center>Edición de registro</h1>
    <div class="container">
        <br>
        <br>
        <form class="row g-3" action="profesionalPrehospitalario.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="apellidop" id="nombre" aria-describedby="helpId" placeholder="Apellido Paterno">
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="apellidom" id="nombre" aria-describedby="helpId" placeholder="Apellido Materno">
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo electrónico">
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Numero de teléfono">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Técnico en Atencion Medica Prehospitalaria:</label>
                                    <select class="form-select" name="nivelTecnico" id="lang">
                                        <option value="basico">Nivel Básico</option>
                                        <option value="intermedio">Nivel Intermedio</option>
                                        <option value="avanzado">Nivel Avanzado</option>
                                        <option value="medico">Médico</option>
                                        <option value="otro">Otro</option>                   
                                    </select>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <label class="">Nivel de Certificación:</label>
                                    <select class="form-select" name="nivelCertificacion" id="lang">
                                        <option value="conocer">CONOCER ECO0307.01</option>
                                        <option value="Universitario">Técnico Superior Universitario</option>
                                        <option value="licenciatura">Licenciatura</option>
                                        <option value="urgencias medicas">Técnico en Urgencias Médicas</option>
                                        <option value="otro">Otro</option>                   
                                    </select>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <label >Capacitación Continua:</label>
                                    <select class="form-select" name="capacitacion" id="lang">
                                        <option value="bls">BLS</option>
                                        <option value="phtls">PHTLS</option>
                                        <option value="acls">ACLS</option>
                                        <option value="amls">AMLS</option>
                                        <option value="pals">PALS</option>
                                        <option value="nals">NALS</option>
                                        <option value="pepp">PEPP</option>
                                        <option value="gems">GEMS</option>
                                        <option value="otros">Otros</option>                
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label >Años de Experiencia:</label>
                                    <input type="text" class="form-control" name="experiencia" id="anios" aria-describedby="helpId" placeholder="Años de experiencia">
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <label >Municipio de Residencia</label>
                                <select class="form-select" name="municipio" id="lang">
                                    <option value="mexicali">Mexicali</option>
                                    <option value="tecate">Tecate</option>
                                    <option value="tijuana">Tijuana</option>
                                    <option value="playas rosarito">Playas de Rosarito</option>
                                    <option value="ensenada">Ensenada</option>
                                    <option value="san quintin">San Quintín</option>
                                    <option value="san felipe">San Felipe</option>              
                                </select>
                                </div>
                                <br>
                            </div>   
                            <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="modificar" class="btn btn-warning">Editar registro</button>
                                </div>            
                        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>