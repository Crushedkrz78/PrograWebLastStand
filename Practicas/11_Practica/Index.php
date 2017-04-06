<!DOCTYPE html>
<html lang="es">
    <head>
        <!--This document was created to provide a blank file for future projects using Bootstratp-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>PHP Formularios</title><!--Insert Project Name-->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet"><!--Define your own Style document-->
    </head>
    <body>
        <div class="container-fluid"><!--Main Container-->
            <div class="jumbotron"><!--Page Header-->
                <h1>Práctica con PHP</h1>
            </div><!--End of Page Header-->
            <div class="row">
                <form data-toggle="validator" role="form" action="Index.php" method="post">
                    <div class="form-group">
                        <div class="col-xs-4 col-xs-offset-4">
                            <label>Ingrese un texto</label>
                            <input class="form-control" type="text" id="test1" name="hola" placeholder="Ingrese texto..." required>    
                        </div>
                        <div class="col-xs-4 col-xs-offset-4">
                            <button type="submit" class="btn btn-default">Finish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!--End of Main container-->
        
        <div class="container-fluid">
            <div class="header-container">
                <div class="jumbotron">
                    <h1>Practice form for Data Processing</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <form action="methods/proc.php" method="post" data-toggle="validator" role="form">
                            <div class="col-xs-4 col-xs-offset-2">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" name="user" placeholder="Usuario" required>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-default">Acceder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            #print_r($_POST);
            if(isset($_POST)){
                print_r($_POST);
            }
            else
            {
                #NothingToDo
            }
        ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!--Bootstrap Validator-->
        <script src="js/validator.js"></script>
    </body>
</html>