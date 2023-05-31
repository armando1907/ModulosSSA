<?php include('bd.php'); ?>

<?php

//lo de abajo es lo mismo que en el otro modulo, es un ejemplo nomas


$objConexion=new Conexion();
$profesionales=$objConexion->Consultar("SELECT * FROM `establecimientos`");
$nombrepropie=[];
// print_r($profesionales);

if(!empty($_GET['idestablecimientos'])){
    $idestablecimientos=$_GET['idestablecimientos'];
    echo $idestablecimientos;
  }


if($_POST){
    $accion=$_POST['accion'];
    $idestablecimientos=$_POST['idestablecimientos'];
    $hospital=$_POST['hospital'];
    $asosiacioncivil=$_POST['asosiacioncivil'];
    $dependenciaguberna=$_POST['dependenciaguberna'];
    $nombrepropie=$_POST['nombrepropie'];
    $rfcpropie=$_POST['rfcpropie'];
    $curppropie=$_POST['curppropie'];
    $direccionpropie=$_POST['direccionpropie'];
    $coloniapropie=$_POST['coloniapropie'];
    $delegacionpropie=$_POST['delegacionpropie'];
    $localidadpropie=$_POST['localidadpropie'];
    $codigopostalpropie=$_POST['codigopostalpropie'];
    $entidadfepropie=$_POST['entidadfepropie'];
    $entercallepropie=$_POST['entercallepropie'];
    $telefonopropie=$_POST['telefonopropie'];
    $correopropie=$_POST['correopropie'];
    $nombreestable=$_POST['nombreestable'];
    $rfcestable=$_POST['rfcestable'];
    $direccionestable=$_POST['direccionestable'];
    $coloniaestable=$_POST['coloniaestable'];
    $delegacionestable=$_POST['delegacionestable'];
    $localidadestable=$_POST['localidadestable'];
    $codigopostaestable=$_POST['codigopostaestable'];
    $entidadestable=$_POST['entidadestable'];
    $entrecalleestable=$_POST['entrecalleestable'];
    $telefonoestable=$_POST['telefonoestable'];
    $correoestable=$_POST['correoestable'];
    $horarioestable=$_POST['horarioestable'];
    $fechaestable=$_POST['fechaestable'];
    $nomrepresestable=$_POST['nomrepresestable'];
    $curprepreestable=$_POST['curprepreestable'];
    $correoreprestable=$_POST['correoreprestable'];
    $nomautoriestable=$_POST['nomautoriestable'];
    $curpautoriestable=$_POST['curpautoriestable'];
    $correoautoriestable=$_POST['correoautoriestable'];


    switch($accion){
        case 'insertar':
            $objConexion=new Conexion();
            $sql="INSERT INTO `establecimientos` (`idestablecimientos`, `hospital`, `asosiacioncivil`, `dependenciaguberna`, `nombrepropie`, `rfcpropie`, `curppropie`, `direccionpropie`, `coloniapropie`, `delegacionpropie`, `localidadpropie`, `codigopostalpropie`, `entidadfepropie`, `entercallepropie`, `telefonopropie`, `correopropie`, `nombreestable`, `rfcestable`, `direccionestable`, `coloniaestable`, `delegacionestable`,`localidadestable`,`codigopostaestable`, `entidadestable`, `entrecalleestable`, `telefonoestable`, `correoestable`, `horarioestable`, `fechaestable`, `nomrepresestable`, `curprepreestable`, `correoreprestable`, `nomautoriestable`, `curpautoriestable`, `correoautoriestable`) VALUES (NULL,'$hospital','$asosiacioncivil','$dependenciaguberna','$nombrepropie','$rfcpropie','$curppropie','$direccionpropie','$coloniapropie','$delegacionpropie','$localidadpropie','$codigopostalpropie','$entidadfepropie','$entercallepropie','$telefonopropie','$correopropie','$nombreestable','$rfcestable','$direccionestable','$coloniaestable','$delegacionestable','$localidadestable','$codigopostaestable','$entidadestable','$entrecalleestable','$telefonoestable','$correoestable','$horarioestable','$fechaestable','$nomrepresestable','$curprepreestable','$correoreprestable','$nomautoriestable','$curpautoriestable','$correoautoriestable');";
            $objConexion->ejecutar($sql);
        break;
        case 'modificar':
            //UPDATE `profesional` SET `nombre` = 'Modificado' WHERE `profesional`.`id` = 1;
            $objConexion=new Conexion();
            $sql="UPDATE `establecimientos` SET `hospital` = '$hospital', `asosiacioncivil` = '$asosiacioncivil', `dependenciaguberna` = '$dependenciaguberna', `nombrepropie` = '$nombrepropie', `rfcpropie` = '$rfcpropie', `curppropie`='$curppropie',`direccionpropie`='$direccionpropie',`coloniapropie`='$coloniapropie',`delegacionpropie` = '$delegacionpropie',`codigopostalpropie` = '$codigopostalpropie',`entidadfepropie` = '$entidadfepropie',`entercallepropie` = '$entercallepropie',`telefonopropie` = '$telefonopropie',`correopropie` = '$correopropie',`nombreestable` = '$nombreestable',`rfcestable` = '$rfcestable',`direccionestable` = '$direccionestable',`coloniaestable` = '$coloniaestable',`delegacionestable` = '$delegacionestable',`codigopostaestable` = '$codigopostaestable',`entidadestable` = '$entidadestable',`entrecalleestable` = '$entrecalleestable',`telefonoestable` = '$telefonoestable',`correoestable` = '$correoestable',`horarioestable` = '$horarioestable',`fechaestable` = '$fechaestable',`nomrepresestable` = '$nomrepresestable',`curprepreestable` = '$curprepreestable',`correoreprestable` = '$correoreprestable',`nomautoriestable` = '$nomautoriestable',`curpautoriestable` = '$curpautoriestable',`correoautoriestable` = '$correoautoriestable' WHERE `establecimientos`.`idestablecimientos` = $idestablecimientos;";
            $objConexion->ejecutar($sql);
        break;
        case 'eliminar':
            $objConexion=new Conexion();
            //DELETE FROM `profesional` WHERE `profesional`.`id` = 36
            $sql="DELETE FROM `establecimientos` WHERE `establecimientos`.`idestablecimientos` = $idestablecimientos";
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
                    <div class="container">
                        <h1 class="mt-4">Establecimientos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Establecimientos</li>
                        </ol>
                        <form class="row g-3" action="" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="idestablecimientos" id="idestablecimientos" aria-describedby="helpId" placeholder="Id establecimientos">
                            </div>
                            
                            <div class="col-md-4">
                                <label class="" for="">Hospital Publico:</label>
                                                <select class="form-select" name="lenguajes" id="lang">
                                                    <option value="javascript">Hospital General Tijuana</option>
                                                    <option value="php">Hospital General Tecate</option>
                                                    <option value="java">Hospital General Playas de Rosarito</option>
                                                    <option value="golang">Hospital General Mexicali</option>
                                                    <option value="javascript">Hospital General Ensenada</option>
                                                    <option value="php">Otro</option>
                                                    <option value="java">ISSSTE Fray Junípero Serra</option>
                                                    <option value="golang">ISSSTE Mexicali</option>
                                                    <option value="javascript">ISSSTE Ensenada</option>
                                                    <option value="php">ISSSTECALI Tijuana</option>
                                                    <option value="java">ISSSTECALI Mexicali</option>
                                                    <option value="golang">ISSSTECALI Ensenada</option>
                                                    <option value="javascript">Hospital Materno Infantil Mexicali</option>
                                                    <option value="php">Hospital Materno Infantil Tijuana</option>
                                                    <option value="java">Otro</option>
                                                                      
                                                </select>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-4">
                                <label class="" for="">Hospital Privado:</label>
                                                <select class="form-select" name="lenguajes" id="lang">
                                                    <option value="javascript">Cruz Roja Mexicana Delegación Tijuana</option>
                                                    <option value="php">Otro</option>                   
                                                </select>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                name="empresatranslado" id="empresatranslado" aria-describedby="helpId" placeholder="Empresa de Traslados">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="telefono" id="telefono" aria-describedby="helpId" placeholder="Asociación Civil">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text"
                                                 name="telefono" id="telefono" aria-describedby="helpId" placeholder="Dependencia Gubernamental">
                            </div>
                        </div>
                            <h5>Datos del Propietario:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                
                                    <input class="form-control" type="text"
                                                     name="nombrepropie" id="nombrepropie" aria-describedby="helpId" placeholder="Nombre del Propietario o Razón Social">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                    name="rfcpropie" id="rfcpropie" aria-describedby="helpId" placeholder="RFC">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                                     name="curppropie" id="curppropie" aria-describedby="helpId" placeholder="CURP">
                                </div>
                            </div>
                            
                           
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="direccionpropie" id="direccionpropie" aria-describedby="helpId" placeholder="Dirección">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="coloniapropie" id="coloniapropie" aria-describedby="helpId" placeholder="Colonia">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="delegacionpropie" id="delegacionpropie" aria-describedby="helpId" placeholder="Delegación">
                            </div>
                        </div> 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="localidadpropie" id="localidadpropie" aria-describedby="helpId" placeholder="Localidad">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                name="codigopostalpropie" id="codigopostalpropie" aria-describedby="helpId" placeholder="Código Postal">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entidadfepropie" id="entidadfepropie" aria-describedby="helpId" placeholder="Entidad Federativa">
                            </div>
                        </div> 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                name="entercallepropie" id="entercallepropie" aria-describedby="helpId" placeholder="Entre Calle y Calle">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="telefonopropie" id="telefonopropie" aria-describedby="helpId" placeholder="Teléfono">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                 name="correopropie" id="correopropie" aria-describedby="helpId" placeholder="Correo electrónico">
                            </div>
                        </div> 
                        
                            
                            <h5>Datos del Establecimiento:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
   
                                           
                                    <input class="form-control" type="text"
                                     name="nombreestable" id="nombreestable" aria-describedby="helpId" placeholder="Razón Social o Denominación del Establecimiento">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                     name="rfcestable" id="rfcestable" aria-describedby="helpId" placeholder="RFC">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                                     name="direccionestable" id="direccionestable" aria-describedby="helpId" placeholder="Dirección">
                                </div>
                            </div>
                            
                                 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="coloniaestable" id="coloniaestable" aria-describedby="helpId" placeholder="Colonia">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="delegacionestable" id="delegacionestable" aria-describedby="helpId" placeholder="Delegación">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="localidadestable" id="localidadestable" aria-describedby="helpId" placeholder="Localidad">
                            </div>
                            
                        </div>         
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="codigopostaestable" id="codigopostaestable" aria-describedby="helpId" placeholder="Código Postal">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entidadestable" id="entidadestable" aria-describedby="helpId" placeholder="Entidad Federativa">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entrecalleestable" id="entrecalleestable" aria-describedby="helpId" placeholder="Entre Calle y Calle">
                            </div>
                        </div>            
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="telefonoestable" id="telefonoestable" aria-describedby="helpId" placeholder="Teléfono">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="correoestable" id="correoestable" aria-describedby="helpId" placeholder="Correo electrónico">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                name="horarioestable" id="horarioestable" aria-describedby="helpId" placeholder="Horario">
                            </div>
                        </div>                 
                        <div class="row">
                           
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                name="fechaestable" id="fechaestable" aria-describedby="helpId" placeholder="Fecha de inicio de actividades">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="nomrepresestable" id="nomrepresestable" aria-describedby="helpId" placeholder="Nombre del Representante Legal">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="curprepreestable" id="curprepreestable" aria-describedby="helpId" placeholder="CURP">
                            </div>
                        </div>  
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="correoreprestable" id="correoreprestable" aria-describedby="helpId" placeholder="Correo electrónico">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="nomautoriestable" id="nomautoriestable" aria-describedby="helpId" placeholder="Nombre de la Persona Autorizada">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="curpautoriestable" id="curpautoriestable" aria-describedby="helpId" placeholder="CURP">
                            </div>
                        </div>                 
                        <div class="row">
                            
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="correoautoriestable" id="correoautoriestable" aria-describedby="helpId" placeholder="Correo electrónico">
                            </div>
                            <div class="btn-group col-md-6" role="group" aria-label="Button group name">
                                <button type="submit" name="accion" value="insertar" class="btn btn-success">Agregar registro</button>
                                <button type="submit" name="accion" value="modificar" class="btn btn-warning">Editar registro</button>
                                <button type="submit" name="accion" value="eliminar" class="btn btn-danger">Borrar registro</button>
                            </div>
                        </div> 
                                        
                                </form>
                       <br>
                       <br>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    Panel Establecimientos
                                </div>
                                <div class="card-body">
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Hospital</th>
                                                    <th scope="col">Empresa de Traslados</th>
                                                    <th scope="col">Asociación Civil</th>
                                                    <th scope="col">Dependencia Gubernamental</th>
                                                    <th scope="col">Propietario</th>
                                                    <th scope="col">RFC</th>
                                                    <th scope="col">CURP</th>
                                                    <th scope="col">Dirección</th>
                                                    <th scope="col">Colonia</th>
                                                    <th scope="col">Delegación</th>
                                                    <th scope="col">Localidad</th>
                                                    <th scope="col">Código Postal</th>
                                                    <th scope="col">Entidad Federativa</th>
                                                    <th scope="col">Entre Calle y Calle</th>
                                                    <th scope="col">Teléfono</th>
                                                    <th scope="col">Correo electrónico</th>
                                                    <th scope="col">Establecimiento</th>
                                                    <th scope="col">RFC</th>
                                                    <th scope="col">Dirección</th>
                                                    <th scope="col">Colonia</th>
                                                    <th scope="col">Delegación</th>
                                                    <th scope="col">Localidad</th>
                                                    <th scope="col">Código Postal</th>
                                                    <th scope="col">Entidad Federativa</th>
                                                    <th scope="col">Entre Calle y Calle</th>
                                                    <th scope="col">Telefono</th>
                                                    <th scope="col">Correo electrónico</th>
                                                    <th scope="col">Horario</th>
                                                    <th scope="col">Inicio de Actividades</th>
                                                    <th scope="col">Representante Legal</th>
                                                    <th scope="col">CURP</th>
                                                    <th scope="col">Correo electrónico</th>
                                                    <th scope="col">Persona Autorizada</th>
                                                    <th scope="col">CURP</th>
                                                    <th scope="col">Correo electrónico</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($profesionales as $establecimientos){ ?>
                                                    <tr>
                                                        <td><?php echo $establecimientos['idestablecimientos'] ?></td>
                                                        <td><?php echo $establecimientos['hospital'] ?></td>
                                                        <td><?php echo $establecimientos['empresatranslado'] ?></td>
                                                        <td><?php echo $establecimientos['asosiacioncivil'] ?></td>
                                                        <td><?php echo $establecimientos['dependenciaguberna'] ?></td>
                                                        <td><?php echo $establecimientos['nombrepropie'] ?></td>
                                                        <td><?php echo $establecimientos['rfcpropie'] ?></td>
                                                        <td><?php echo $establecimientos['curppropie'] ?></td>
                                                        <td><?php echo $establecimientos['direccionpropie'] ?></td>
                                                        <td><?php echo $establecimientos['coloniapropie'] ?></td>
                                                        <td><?php echo $establecimientos['delegacionpropie'] ?></td>
                                                        <td><?php echo $establecimientos['localidadpropie'] ?></td>
                                                        <td><?php echo $establecimientos['codigopostalpropie'] ?></td>
                                                        <td><?php echo $establecimientos['entidadfepropie'] ?></td>
                                                        <td><?php echo $establecimientos['entercallepropie'] ?></td>
                                                        <td><?php echo $establecimientos['telefonopropie'] ?></td>
                                                        <td><?php echo $establecimientos['correopropie'] ?></td>
                                                        <td><?php echo $establecimientos['nombreestable'] ?></td>
                                                        <td><?php echo $establecimientos['rfcestable'] ?></td>
                                                        <td><?php echo $establecimientos['direccionestable'] ?></td>
                                                        <td><?php echo $establecimientos['coloniaestable'] ?></td>
                                                        <td><?php echo $establecimientos['delegacionestable'] ?></td>
                                                        <td><?php echo $establecimientos['localidadestable'] ?></td>
                                                        <td><?php echo $establecimientos['codigopostaestable'] ?></td>
                                                        <td><?php echo $establecimientos['entidadestable'] ?></td>
                                                        <td><?php echo $establecimientos['entrecalleestable'] ?></td>
                                                        <td><?php echo $establecimientos['telefonoestable'] ?></td>
                                                        <td><?php echo $establecimientos['correoestable'] ?></td>
                                                        <td><?php echo $establecimientos['horarioestable'] ?></td>
                                                        <td><?php echo $establecimientos['fechaestable'] ?></td>
                                                        <td><?php echo $establecimientos['nomrepresestable'] ?></td>
                                                        <td><?php echo $establecimientos['curprepreestable'] ?></td>
                                                        <td><?php echo $establecimientos['correoreprestable'] ?></td>
                                                        <td><?php echo $establecimientos['nomautoriestable'] ?></td>
                                                        <td><?php echo $establecimientos['curpautoriestable'] ?></td>
                                                        <td><?php echo $establecimientos['correoautoriestable'] ?></td>

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
    </body>
</html>