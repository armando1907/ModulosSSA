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
        case'eliminarf':
            $objConexion=new Conexion();
            $sql="DELETE FROM 'profesional'";
            $objConexion->ejecutar($sql);
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
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">CRUD</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
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
                                    Perfil
                                </a>
                            <div class="sb-sidenav-menu-heading">Modulos</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    
                                   
                                </a>
  
                                    <a class="nav-link" href="profesionalPrehospitalario.php">Profesional Prehospitalario</a>
                                    <a class="nav-link" href="establecimientos.php">Establecimientos</a>
  
         
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
                    <?php //Ventana Modal ?>
                    <div class="container">
                        <h1 class="mt-4">Profesional Prehospitalario</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Profesional Prehospitalario</li>
                        </ol>
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Registrar de cursos prehospitalarios
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Registro de curso prehospitalario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                                <br>
                                <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="insertar" class="btn btn-success">Agregar registro</button>
                                </div>
                            </div>               
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<br>
                        <br>
                        <?php//Tabla Bootstrap?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Panel Establecimientos
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Técnico en Atención Médica Prehospitalaria</th>
                                    <th>Nivel de Certificación</th>
                                    <th>Capacitación Continua</th>
                                    <th>Años de Experiencia en el Sistema de Atención Médica Prehospitalaria</th>
                                    <th>Municipio de Residencia</th>
                                    <th>Editar</th>
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
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-pencil-alt"></i></button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                                <br>
                                <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="modificar" class="btn btn-warning">Editar registro</button>
                                    <button type="submit" name="accion" value="eliminar" class="btn btn-danger">Borrar registro</button>
                                </div>
                            </div>               
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
                                            </td>
                                    <?php } ?>
                                        </tr>
                                </tbody>
                            </table>                                    
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