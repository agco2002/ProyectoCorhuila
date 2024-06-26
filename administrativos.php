<?php
require_once 'config/config.php';
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplicativo Corhuila</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="inicio.php">Sistema Aplicativo Web</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuración</a></li>
                        
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="index.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Corhuila</div>
                            <a class="nav-link" href="inicio.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="eventos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Eventos
                            </a>
                            <a class="nav-link" href="administrativos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Administrativos
                            </a>
                            <a class="nav-link" href="usuarios.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Usuarios
                            </a>
                            
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registrar Usuarios</h1>
                        <hr>
                            

          
                        <script>
                          function confirmacion(){
                              var respuesta = confirm("¿Confirma que desea borrar el Registro?");
                          if(respuesta == true){
                              return true;
                          }else {
                          return false;
                          }
                          }
                      
                          function confirmacion_editar(){
                              var respuesta = confirm("¿Confirma que desea editar el Registro?");
                          if(respuesta == true){
                              return true;
                          }else {
                          return false;
                          }
                          }
                      
                      </script>
                      
                        <!-- Content Wrapper. Contains page content -->
                        <div class="content-wrapper">
                          <!-- Content Header (Page header) -->
                          <div class="content-header">
                            
                          </div>
                          <!-- /.content-header -->
                         
                      
                         <!-- INICIO FORMULARIO CAMBIO DE CONTRASEÑA -->
                         <br>
                         <div class="card container col-md-6">
                          <div class="card-body login-card-body">
                      
                            <div class="card-body register-card-body">
                            <h4 class="login-box-msg">Registra Un Nuevo Usuario</h4>
                      
                            <form action="conexion_registro.php" method="POST">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre completo" required>
                                <div class="input-group-append">
                                  
                                </div>
                              </div>
                              <div class="input-group mb-3">
                                <input type="email" class="form-control" id="correo" name="correo"  placeholder="Correo Electrónico" required>
                                <div class="input-group-append">
                                  
                                </div>
                              </div>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" id="usuario" name="usuario"   placeholder="Usuario" required>
                                <div class="input-group-append">
                                  
                                </div>
                              </div>
                              <div class="input-group mb-3">
                                <input type="password" class="form-control" id="contraseña" name="contraseña"   placeholder="Contraseña" required>
                                <div class="input-group-append">
                                  
                                </div>
                              </div>
                              <!-- /.col -->
                              <div class="row">
                              <div class="col-12">
                              <input  type="submit" class="btn btn-success btn-block" value="Registrar Usuario">
                                
                              </div>
                            </div>
                              <!-- /.col -->
                            </form>
                          </div>
                          </div>
                          <!-- /.login-card-body -->
                        </div>
                        <!-- FIN FORMULARIO CAMBIO DE CONTRASEÑA -->
                        <section class="content">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-12">
                                    
                      <br><br>
                                <div class="card">
                                  <div class="card-header">
                                    <h3 class=" text-center">Usuarios Registrados:</h3>
                                    <br>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <form action="search_users.php" method="GET" class="d-flex">
                                            <input type="text" name="search_term" class="form-control me-2" placeholder="Buscar usuario">
                                            <button type="submit" class="btn btn-outline-success">Buscar</button>
                                          </form>
                                        </div>
                                      </div>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>Id:</th>
                                        <th>Nombres:</th>
                                        <th>Correo:</th>
                                        <th>Usuario:</th>
                                        <th>Fecha Ingreso</th>
                                        <th>Fecha Salida</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                        include 'config/config.php';
                        
                                        $sql = $conexion->query("SELECT * FROM registro_usuarios");
                        
                                        while ($resultado = $sql->fetch_assoc()) {
                                        ?>
                        
                                            <tr>
                                                <th scope="row"><?php echo $resultado['id']?></th>
                                                <th scope="row"><?php echo $resultado['nombre']?></th>
                                                <th scope="row"><?php echo $resultado['correo']?></th>
                                                <th scope="row"><?php echo $resultado['usuario']?></th>
                                                <th scope="row"><?php echo $resultado['fecha_llegada']?></th> 
                                                <th scope="row"><?php echo $resultado['fecha_salida']?></th>                      
                                                <th>
                                                    <a href="editar_registro_usuarios.php?id=<?php echo $resultado['id']?>" class="btn btn-success btn-block" onclick="return confirmacion_editar()">Editar</a>
                                                    <a href="Eliminar_registro_usuarios.php?id=<?php echo $resultado['id']?>" class="btn btn-success btn-block" onclick="return confirmacion()">Eliminar</a>
                                                </th>
                                            </tr>
                      
                                      <?php
                                      }
                                      ?>
                                  </tbody>
                                    </table>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
                      </div>
                            
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
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
