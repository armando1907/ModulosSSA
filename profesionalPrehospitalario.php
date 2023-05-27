<?php include('bd.php'); ?>

<?php

$objConexion=new Conexion();
$profesionales=$objConexion->Consultar("SELECT * FROM `profesional`");
$apellido=[];

if(!empty($_GET['id'])){
  $id=$_GET['id'];
  echo $id;
}

if($_POST){
    $accion=$_POST['accion'];
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellidop=$_POST['apellidop'];
    $apellidom=$_POST['apellidom'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $nivelTecnico=$_POST['nivelTecnico'];
    $nivelCertificacion=$_POST['nivelCertificacion'];
    $capacitacion=$_POST['capacitacion'];
    $experiencia=$_POST['experiencia'];
    $municipio=$_POST['municipio'];
    switch($accion){
        case 'insertar':
            $objConexion=new Conexion();
            $sql="INSERT INTO `profesional` (`id`, `nombre`, `apellidoP`, `apellidoM`, `correo`, `telefono`, `nivelTecnico`, `nivelCertificacion`, `capacitacion`, `experiencia`, `municipio`) VALUES (NULL,'$nombre','$apellidop','$apellidom','$correo','$telefono','$nivelTecnico','$nivelCertificacion','$capacitacion','$experiencia','$municipio');";
            $objConexion->ejecutar($sql);
        break;
        case 'modificar':
            //UPDATE `profesional` SET `nombre` = 'Modificado' WHERE `profesional`.`id` = 1;
            $objConexion=new Conexion();
            $sql="UPDATE `profesional` SET `nombre` = '$nombre', `apellidoP` = '$apellidop', `apellidoM` = '$apellidom', `correo` = '$correo', `telefono` = '$telefono', `nivelTecnico`='$nivelTecnico',`nivelCertificacion`='$nivelCertificacion',`capacitacion`='$capacitacion',`experiencia` = '$experiencia' WHERE `profesional`.`id` = $id;";
            $objConexion->ejecutar($sql);
        break;
        case 'eliminar':
            $objConexion=new Conexion();
            //DELETE FROM `profesional` WHERE `profesional`.`id` = 36
            $sql="DELETE FROM `profesional` WHERE `profesional`.`id` = $id";
            $objConexion->ejecutar($sql);
        break;
        case 'buscar':
            $objConexion=new Conexion();
            //$sql="SELECT * FROM `profesional` WHERE `apellidoP`='$buscando'";
            $apellido=$objConexion->Consultar("SELECT * FROM `profesional` WHERE `apellidoP`='$apellidop'");
            //$objConexion->ejecutar($sql);
        break;

    } 
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inicio - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/estiloCampos.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css ">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
        <script src="js/eventoModal.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">CRUD</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form action="profesionalPrehospitalario.php" method="post" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input name="search" class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><a class="dropdown-item" href="#!">Actividad</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login.html">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inicio</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Página principal
                            </a>
                            <div class="sb-sidenav-menu-heading">Modulos</div>
                          
                                
                                    <a class="nav-link" href="profesionalPrehospitalario.php">Profesional Prehospitalario<a>
                                    <a class="nav-link" href="establecimientos.php">Establecimientos</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Inicio de Sesion como:</div>
                        Profesional Prehospitalario
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <br>
                <table class="table table-striped tabladatatable dt-responsive">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Correo</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Técnico en Atención Médica Prehospitalaria</th>
          <th scope="col">Nivel de Certificación</th>
          <th scope="col">Capacitación Continua</th>
          <th scope="col">Años de Experiencia en el Sistema de Atención Médica Prehospitalaria</th>
          <th scope="col">Municipio de Residencia</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($profesionales as $profesional){ ?>
        <tr>
            <th scope="row"><?php echo $profesional['id'] ?></th>
            <td><?php echo $profesional['nombre'] ?></td>
            <td><?php echo $profesional['apellidoP'] ?></td>
            <td><?php echo $profesional['apellidoM'] ?></td>
            <td><?php echo $profesional['correo'] ?></td>
            <td><?php echo $profesional['telefono'] ?></td>
            <td><?php echo $profesional['nivelTecnico'] ?></td>
            <td><?php echo $profesional['nivelCertificacion'] ?></td>
            <td><?php echo $profesional['capacitacion'] ?></td>
            <td><?php echo $profesional['experiencia'] ?></td>
            <td><?php echo $profesional['municipio'] ?></td>
            <td>  
              <a href="profesionalPrehospitalario.php?id=<?php=$profesional['id']?>" class="btn btn-warning btn-xs btnEditarCurso"><i class="fas fa-pencil-alt"></i></a>
              <a href="profesionalPrehospitalario.php?id= <?php $profesional['id'] ?> " name="accion" class="btn btn-danger btn-xs btnEliminarCurso" idCurso="00389"><i class="fa fa-times-circle"></i></a>
              <a href="profesionalPrehospitalario.php?id= <?php $profesional['id'] ?> " name="accion" class="btn btn-primary btn-xs btnShow" idCurso="00389" data-toggle="modal" data-target="#modalShow"> <i class="fa fa-eye"></i></a>
            </td>
            <?php } ?>
            </tr>
           </tbody>
    </table>
    <!-- Modal editar curso -->
    <div class="modal fade" id="modalEditarCurso" role="dialog">
      <div class="modal-dialog modal-lg">
        <form role="form" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>EDITAR CURSO</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <div class="input-group">
                  <select class="form-control input-lg" name="editarCurso" id="curso_E" required>
                    <option value="">CURSO</option>
                                            <option>RCP NIVEL COMUNITARIO</option>
                                            <option>RCP NIVEL PROFESIONAL DE LA SALUD</option>
                                            <option>PRIMER RESPONDIENTE EN PRIMEROS AUXILIOS </option>
                                        </select>
                  <select class="form-control input-lg" name="sector" id="sector_E">
                    <option value="" disabled selected hidden>SECTOR</option>
                    <option value="SECTOR PÚBLICO">SECTOR PÚBLICO</option>
                    <option value="SECTOR PRIVADO">SECTOR PRIVADO</option>
                    <option value="ASOCIACIÓN CIVIL">ASOCIACIÓN CIVIL</option>
                    
                  </select>
                  <input type="hidden" name="idCurso" id="idCurso">
                  <input type="hidden" name="jurisdiccion" id="jurisdiccion_E">
                  <input type="hidden" name="instructor" id="instructor_E">
                  <input type="text" name="dependencia" id="dependencia_E" class="form-control input-lg" style="text-transform:uppercase" placeholder="Dependencia" required>
                </div>
              </div>
              <div class="form-group">
                <div class="panel"><b>FECHA DE INICIO:</b></div>
                <input type="date" name="inicio" id="inicio_E" class="form-control" required>
              </div>
              <div class="form-group">
                <div class="panel"><b>FECHA DE CONCLUSIÓN:</b></div>
                <input type="date" name="conclusion" id="conclusion_E" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="number" name="alumnos" id="alumnos_E" class="form-control input-lg" style="text-transform:uppercase" placeholder="Número de alumnos" min="1" max="15" required>
              </div>
              <div class="form-group">
                <label>LUGAR DE IMPARTICIÓN:</label>
                <div class="input-group">
                  <!-- <input type="text" name="calle" id="calle" class="form-control input-lg" style="text-transform:uppercase" placeholder="D" required >
                  <input type="number" name="numExt" id="numExt" class="form-control input-lg" style="text-transform:uppercase" placeholder="122" required>
                  <input type="text" name="numInt" id="numInt" class="form-control input-lg" style="text-transform:uppercase" placeholder="1233">      -->
                  
                  <input type="text" name="calle" id="calle_E" class="form-control input-lg" style="text-transform:uppercase" placeholder="Calle" required >
                  <input type="number" name="numExt" id="numExt_E" class="form-control input-lg" style="text-transform:uppercase" placeholder="Número exterior" required>
                  <input type="text" name="numInt" id="numInt_E" class="form-control input-lg" style="text-transform:uppercase" placeholder="Número interior">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="colonia" id="colonia_E" class="form-control input-lg" style="text-transform:uppercase" placeholder="Colonia" required>
                  <input type="number" name="cp" id="cp_E" class="form-control input-lg" style="text-transform:uppercase" placeholder="Código postal" required>
                  <select class="form-control input-lg" name="municipio" id="municipio_E" required>
                    <option value="" disabled selected hidden>MUNICIPIO</option>
                    <option value="TIJUANA">TIJUANA</option>
                    <option value="ROSARITO">ROSARITO</option>
                    <option value="MEXICALI">MEXICALI</option>
                    <option value="TECATE">TECATE</option>
                    <option value="ENSENADA">ENSENADA</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">GUARDAR</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">SALIR</button>
            </div>
                      </div>
        </form>
      </div>
    </div> 
    <?php//Tabla Bootstrap?>
    
                    <?php //Arriba es una prueba ?>
                    <div class="container">
                        <h1 class="mt-4">Profesional Prehospitalario</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Profesional Prehospitalario</li>
                        </ol>
                        <form class="row g-3" action="profesionalPrehospitalario.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Id">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="apellidop" id="nombre" aria-describedby="helpId" placeholder="Apellido Paterno">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="apellidom" id="nombre" aria-describedby="helpId" placeholder="Apellido Materno">
                                </div>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo electrónico">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Numero de teléfono">
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <label >Años de Experiencia:</label>
                                    <input type="text" class="form-control" name="experiencia" id="anios" aria-describedby="helpId" placeholder="Años de experiencia">
                                </div>
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
                            
                                
                                <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="insertar" class="btn btn-success">Agregar registro</button>
                                    <button type="submit" name="accion" value="modificar" class="btn btn-warning">Editar registro</button>
                                    <button type="submit" name="accion" value="eliminar" class="btn btn-danger">Borrar registro</button>
                                    <button type="submit" name="accion" value="buscar" class="btn btn-primary">Buscar registro</button>
                                </div>
                            </div>
                            
                            
                               
                                          
                        </form>
                        <br>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                              Panel Profesional Prehospitalario
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Apellido paterno</th>
                                                    <th scope="col">Apellido Materno</th>
                                                    <th scope="col">Correo electrónico</th>
                                                    <th scope="col">Teléfono</th>
                                                    <th scope="col">Técnico en Atención Médica Prehospitalaria</th>
                                                    <th scope="col">Nivel de Certificación</th>
                                                    <th scope="col">Capacitación Continua</th>
                                                    <th scope="col">Años de Experiencia en el Sistema de Atención Médica Prehospitalaria</th>
                                                    <th scope="col">Municipio de Residencia</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($profesionales as $profesional){ ?>
                                                    <tr>
                                                        <td><?php echo $profesional['id'] ?></td>
                                                        <td><?php echo $profesional['nombre'] ?></td>
                                                        <td><?php echo $profesional['apellidoP'] ?></td>
                                                        <td><?php echo $profesional['apellidoM'] ?></td>
                                                        <td><?php echo $profesional['correo'] ?></td>
                                                        <td><?php echo $profesional['telefono'] ?></td>
                                                        <td><?php echo $profesional['nivelTecnico'] ?></td>
                                                        <td><?php echo $profesional['nivelCertificacion'] ?></td>
                                                        <td><?php echo $profesional['capacitacion'] ?></td>
                                                        <td><?php echo $profesional['experiencia'] ?></td>
                                                        <td><?php echo $profesional['municipio'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> 
                            </div>
                            <br>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                              Busqueda:
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Apellido paterno</th>
                                                    <th scope="col">Apellido Materno</th>
                                                    <th scope="col">Correo electrónico</th>
                                                    <th scope="col">Teléfono</th>
                                                    <th scope="col">Técnico en Atención Médica Prehospitalaria</th>
                                                    <th scope="col">Nivel de Certificación</th>
                                                    <th scope="col">Capacitación Continua</th>
                                                    <th scope="col">Años de Experiencia en el Sistema de Atención Médica Prehospitalaria</th>
                                                    <th scope="col">Municipio de Residencia</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($apellido as $registro){ ?>
                                                    <tr>
                                                        <td><?php echo $registro['id'] ?></td>
                                                        <td><?php echo $registro['nombre'] ?></td>
                                                        <td><?php echo $registro['apellidoP'] ?></td>
                                                        <td><?php echo $registro['apellidoM'] ?></td>
                                                        <td><?php echo $registro['correo'] ?></td>
                                                        <td><?php echo $registro['telefono'] ?></td>
                                                        <td><?php echo $registro['nivelTecnico'] ?></td>
                                                        <td><?php echo $registro['nivelCertificacion'] ?></td>
                                                        <td><?php echo $registro['capacitacion'] ?></td>
                                                        <td><?php echo $registro['experiencia'] ?></td>
                                                        <td><?php echo $registro['municipio'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    
                    
            
            
        </main>
        <br>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
              <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2023</div>
                <div>
                  <a href="#">&middot; Privacy Policy</a>
                  &middot;
                  <a href="#">Terms &amp; Conditions</a>
                </div>
              </div>
          </div>
        </footer>
    </div>
                    </div>
                    
                
                    
                    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
      </div>
      
    </body>
</html>