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
<div class="container">
    <br>
    <br>
<form class="row g-3" action="" method="post">
                        <div class="row">
                            
                            
                            <div class="col-md-6">
                                <label class="" for="">Seleccione el tipo de establecimiento que registrará:</label>
                                <br>
                                <br>
                                                <select class="form-select" name="tipoE" id="lang">
                                                    <option value="Hospital">Hospital</option>
                                                    <option value="Empresa de traslados">Empresa de Traslados</option>
                                                    <option value="Asociación civil">Asociación Civil</option>
                                                    <option value="Dependencia">Dependencia Gubernamental</option>                
                                                </select>
                            </div>
                            <div class="col-md-6">
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
                                                name="entreP" id="entrecallepropie" aria-describedby="helpId" placeholder="Entre Calle y Calle">
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
                            
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="correoR" id="correorepresestable" aria-describedby="helpId" placeholder="Correo electrónico">
                            </div>
                            
                            <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="modificar" class="btn btn-warning">Editar registro</button>

                                    
                            </div>
                        </div>                 
                         
                        <br>
                        
                                        
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