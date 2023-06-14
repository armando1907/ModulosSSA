<?php include('bd.php'); ?>

<?php
$objConexion=new Conexion();
$establecimientos2=$objConexion->Consultar("SELECT * FROM `establecimientos`");

if(isset($_GET['borrar'])){
    $objConexion=new Conexion();
    $sql="DELETE FROM `establecimientos` WHERE `establecimientos`.`idEstablecimiento` = ".$_GET['borrar'];
    $objConexion->ejecutar($sql);
}

if($_POST){
    $accion=$_POST['accion'];
    $idEstablecimiento=$_POST['idEstablecimiento'];
    $tipoE=$_POST['tipoE'];
    $establecimiento=$_POST['establecimiento'];
    $nombreP=$_POST['nombreP'];
    $rfcP=$_POST['rfcP'];
    $curpP=$_POST['curpP'];
    $direccionP=$_POST['direccionP'];
    $coloniaP=$_POST['coloniaP'];
    $delegacionP=$_POST['delegacionP'];
    $localidadP=$_POST['localidadP'];
    $codigoP=$_POST['codigoP'];
    $entidadP=$_POST['entidadP'];
    $entreP=$_POST['entreP'];
    $telefonoP=$_POST['telefonoP'];
    $correoP=$_POST['correoP'];
    $nombreE=$_POST['nombreE'];
    $rfcE=$_POST['rfcE'];
    $direccionE=$_POST['direccionE'];
    $coloniaE=$_POST['coloniaE'];
    $delegacionE=$_POST['delegacionE'];
    $localidadE=$_POST['localidadE'];
    $codigoE=$_POST['codigoE'];
    $entidadE=$_POST['entidadE'];
    $entreE=$_POST['entreE'];
    $telefonoE=$_POST['telefonoE'];
    $correoE=$_POST['correoE'];
    $horarioE=$_POST['horarioE'];
    $fechaE=$_POST['fechaE'];
    $nombreR=$_POST['nombreR'];
    $curpR=$_POST['curpR'];
    $correoR=$_POST['correoR'];

    switch($accion){
        case 'insertar':
            $objConexion=new Conexion();
            $sql="INSERT INTO `establecimientos` (`idEstablecimiento`, `tipoE`, `establecimiento`, `nombreP`, `rfcP`, `curpP`, `direccionP`, `coloniaP`, `delegacionP`,`localidadP`,`codigoP`,`entidadP`,`entreP`,`telefonoP`,`correoP`,`nombreE`,`rfcE`,`direccionE`,`coloniaE`,`delegacionE`,`localidadE`,`codigoE`,`entidadE`,`entreE`,`telefonoE`,`correoE`,`horarioE`,`fechaE`,`nombreR`,`curpR`,`correoR`) VALUES (NULL, '$tipoE', '$establecimiento', '$nombreP', '$rfcP', '$curpP', '$direccionP', '$coloniaP', '$delegacionP','$localidadP','$codigoP','$entidadP','$entreP','$telefonoP','$correoP','$nombreE','$rfcE','$direccionE','$coloniaE','$delegacionE','$localidadE','$codigoE','$entidadE','$entreE','$telefonoE','$correoE','$horarioE','$fechaE','$nombreR','$curpR','$correoR');";
            $objConexion->ejecutar($sql);
        break;
        case 'modificar':
            $objConexion=new Conexion();
            $sql="UPDATE `establecimientos` SET `tipoE`='$tipoE', `establecimiento` = '$establecimiento', `nombreP` = '$nombreP', `rfcP` = '$rfcP', `curpP` = '$curpP', `direccionP` = '$direccionP', `coloniaP`='$coloniaP', `delegacionP` = '$delegacionP',`localidadP` = '$localidadP',`codigoP`='$codigoP',`entidadP` = '$entidadP',`entreP` = '$entreP',`telefonoP` = '$telefonoP',`correoP` = '$correoP',`nombreE`='$nombreE',`rfcE`='$rfcE',`direccionE` = '$direccionE',`coloniaE` = '$coloniaE',`delegacionE` = '$delegacionE',`localidadE` = '$localidadE',`codigoE` = '$codigoE',`entidadE`='$entidadE',`entreE`='$entreE',`telefonoE`='$telefonoE',`correoE`= '$correoE',`horarioE`='$horarioE',`fechaE`='$fechaE',`nombreR` = '$nombreR',`curpR` = '$curpR',`correoR` = '$correoR' WHERE `establecimientos`.`idEstablecimiento` = $idEstablecimiento;";
            $objConexion->ejecutar($sql);
        break;
        case 'eliminar':
            $objConexion=new Conexion();
            $sql="DELETE FROM `establecimientos` WHERE `establecimientos`.`idEstablecimiento` = $idEstablecimiento";
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
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Modulos
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="profesionalPrehospitalario.php">Profesional Prehospitalario</a>
                                    <a class="nav-link" href="establecimientos.php">Establecimientos</a>
                                </nav>
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
                    <?php //Ventana Modal ?>
                    <div class="container">
                        <h1 class="mt-4">Establecimientos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Establecimientos</li>
                        </ol>
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Registrar establecimiento
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar registro de curso prehospitalario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                        <form class="row g-3" action="" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="" for="">ID del establecimiento a registrar:</label>
                                <input type="text" class="form-control" name="idEstablecimiento" id="idestablecimientos" aria-describedby="helpId" placeholder="Id">
                            </div>
                            <div class="col-md-4">
                                <label class="" for="">Seleccione el tipo de establecimiento que registrará:</label>
                                                <select class="form-select" name="tipoE" id="lang">
                                                    <option value="Hospital">Hospital</option>
                                                    <option value="Empresa de traslados">Empresa de Traslados</option>
                                                    <option value="Asociación civil">Asociación Civil</option>
                                                    <option value="Dependencia gubernamental">Dependencia Gubernamental</option>                
                                                </select>
                            </div>
                            <div class="col-md-4">
                            <label class="" for="">Nombre del establecimiento:</label>
                            <br>
                            <br>
                           
                                <input class="form-control" type="text"
                                                name="establecimiento" id="empresatranslado" aria-describedby="helpId" placeholder="Nombre establecimiento">
                            </div>
                            
                        </div>   
                        <br>
                        <br>
                            <h5>Datos del Propietario:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                
                                    <input class="form-control" type="text"
                                                     name="nombreP" id="nombrepropie" aria-describedby="helpId" placeholder="Nombre del Propietario o Razón Social">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                    name="rfcP" id="rfcpropie" aria-describedby="helpId" placeholder="RFC">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                                     name="curpP" id="curppropie" aria-describedby="helpId" placeholder="CURP">
                                </div>
                            </div>
                            
                           
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="direccionP" id="direccionpropie" aria-describedby="helpId" placeholder="Dirección">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="coloniaP" id="coloniapropie" aria-describedby="helpId" placeholder="Colonia">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="delegacionP" id="delegacionpropie" aria-describedby="helpId" placeholder="Delegación">
                            </div>
                        </div> 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="localidadP" id="localidadpropie" aria-describedby="helpId" placeholder="Localidad">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                name="codigoP" id="codigopostalpropie" aria-describedby="helpId" placeholder="Código Postal">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entidadP" id="entidadfepropie" aria-describedby="helpId" placeholder="Entidad Federativa">
                            </div>
                        </div> 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                name="entreP" id="entercallepropie" aria-describedby="helpId" placeholder="Entre Calle y Calle">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="telefonoP" id="telefonopropie" aria-describedby="helpId" placeholder="Teléfono">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                 name="correoP" id="correopropie" aria-describedby="helpId" placeholder="Correo electrónico">
                            </div>
                        </div> 
                        <br>
                        <br>
                            
                            <h5>Datos del Establecimiento:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
   
                                           
                                    <input class="form-control" type="text"
                                     name="nombreE" id="nombreestable" aria-describedby="helpId" placeholder="Razón Social o Denominación del Establecimiento">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                     name="rfcE" id="rfcestable" aria-describedby="helpId" placeholder="RFC">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                                     name="direccionE" id="direccionestable" aria-describedby="helpId" placeholder="Dirección">
                                </div>
                            </div>
                            
                                 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="coloniaE" id="coloniaestable" aria-describedby="helpId" placeholder="Colonia">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="delegacionE" id="delegacionestable" aria-describedby="helpId" placeholder="Delegación">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="localidadE" id="localidadestable" aria-describedby="helpId" placeholder="Dirección">
                            </div>
                        </div>         
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="codigoE" id="codigopostaestable" aria-describedby="helpId" placeholder="Código Postal">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entidadE" id="entidadestable" aria-describedby="helpId" placeholder="Entidad Federativa">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entreE" id="entrecalleestable" aria-describedby="helpId" placeholder="Entre Calle y Calle">
                            </div>
                        </div>            
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="telefonoE" id="telefonoestable" aria-describedby="helpId" placeholder="Teléfono">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="correoE" id="correoestable" aria-describedby="helpId" placeholder="Correo electrónico">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                name="horarioE" id="horarioestable" aria-describedby="helpId" placeholder="Horario">
                            </div>
                        </div>                 
                        <div class="row">
                           
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                name="fechaE" id="fechaestable" aria-describedby="helpId" placeholder="Fecha de inicio de actividades">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="nombreR" id="nomrepresestable" aria-describedby="helpId" placeholder="Nombre del Representante Legal">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="curpR" id="curpreprestable" aria-describedby="helpId" placeholder="CURP">
                            </div>
                        </div>  
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="correoR" id="correorepresestable" aria-describedby="helpId" placeholder="Correo electrónico">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" name="accion" value="insertar" class="btn btn-success">Agregar registro</button>
                            </div>
                        </div>                 
                        <br>
                        <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    
                                </div>
                                        
                                </form>
                                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<?php//Tabla Bootstrap?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Panel  de establecimientos
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Tipo de establecimiento</th>
                                    <th>Establecimiento</th>
                                    <th>Propietario</th>
                                    <th>RFC</th>
                                    <th>CURP</th>
                                    <th>Dirección</th>
                                    <th>Colonia</th>
                                    <th>Delegación</th>
                                    <th>Localidad</th>
                                    <th>Código Postal</th>
                                    <th>Entidad Federativa</th>
                                    <th>Entre Calle y Calle</th>
                                    <th>Teléfono</th>
                                    <th>Correo electrónico</th>
                                    <th>Establecimiento</th>
                                    <th>RFC</th>
                                    <th>Dirección</th>
                                    <th>Colonia</th>
                                    <th>Delegación</th>
                                    <th>Localidad</th>
                                    <th>Código Postal</th>
                                    <th>Entidad Federativa</th>
                                    <th>Entre Calle y Calle</th>
                                    <th>Telefono</th>
                                    <th>Correo electrónico</th>
                                    <th>Horario</th>
                                    <th>Inicio de Actividades</th>
                                    <th>Representante Legal</th>
                                    <th>CURP</th>
                                    <th>Correo electrónico</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($establecimientos2 as $establecimientos){ ?>
                                        <tr>
                                            <th scope="row"><?php echo $establecimientos['idEstablecimiento'] ?></th>
                                            <td><?php echo $establecimientos['tipoE'] ?></td>
                                            <td><?php echo $establecimientos['establecimiento'] ?></td>
                                            <td><?php echo $establecimientos['nombreP'] ?></td>
                                            <td><?php echo $establecimientos['rfcP'] ?></td>
                                            <td><?php echo $establecimientos['curpP'] ?></td>
                                            <td><?php echo $establecimientos['direccionP'] ?></td>
                                            <td><?php echo $establecimientos['coloniaP'] ?></td>
                                            <td><?php echo $establecimientos['delegacionP'] ?></td>
                                            <td><?php echo $establecimientos['localidadP'] ?></td>
                                            <td><?php echo $establecimientos['codigoP'] ?></td>
                                            <td><?php echo $establecimientos['entidadP'] ?></td>
                                            <td><?php echo $establecimientos['entreP'] ?></td>
                                            <td><?php echo $establecimientos['telefonoP'] ?></td>
                                            <td><?php echo $establecimientos['correoP'] ?></td>
                                            <td><?php echo $establecimientos['nombreE'] ?></td>
                                            <td><?php echo $establecimientos['rfcE'] ?></td>
                                            <td><?php echo $establecimientos['direccionE'] ?></td>
                                            <td><?php echo $establecimientos['coloniaE'] ?></td>
                                            <td><?php echo $establecimientos['delegacionE'] ?></td>
                                            <td><?php echo $establecimientos['localidadE'] ?></td>
                                            <td><?php echo $establecimientos['codigoE'] ?></td>
                                            <td><?php echo $establecimientos['entidadE'] ?></td>
                                            <td><?php echo $establecimientos['entreE'] ?></td>
                                            <td><?php echo $establecimientos['telefonoE'] ?></td>
                                            <td><?php echo $establecimientos['correoE'] ?></td>
                                            <td><?php echo $establecimientos['horarioE'] ?></td>
                                            <td><?php echo $establecimientos['fechaE'] ?></td>
                                            <td><?php echo $establecimientos['nombreR'] ?></td>
                                            <td><?php echo $establecimientos['curpR'] ?></td>
                                            <td><?php echo $establecimientos['correoR'] ?></td>
                                            <td>  
                                            <a href="modificacionE.php?editar=<?php echo $establecimientos['idEstablecimiento']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            </td>
                                            <td>
                                            <a href="establecimientos.php?borrar=<?php echo $establecimientos['idEstablecimiento']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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