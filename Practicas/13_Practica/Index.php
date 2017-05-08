<!DOCTYPE html>
<html lang="es">
    <head>
        <!--This document was created to provide a blank file for future projects using Bootstratp-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Input Validator</title><!--Insert Project Name-->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet"><!--Define your own Style document-->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Insert a Text Here
                        </div>
                        <div class="panel-body">
                            <form name="ITCUser" onsubmit="return validateInput()" method="post">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Go!</button>
                                    </span>
                                    <input name="fuser" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2">
                                    <span class="input-group-addon" id="basic-addon2">@itcelaya.edu.mx</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!--JavaScript Validator Method for one Form Input-->
        <script src="js/check.js"></script>
    </body>
</html>