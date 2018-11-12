<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/jquery-3.3.1.js"></script>
    <script src="./js/enviodatos.js"></script>
</head>

<body>


    

    <div class="container" padding="5px">
        <div id="App" class="row pt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h2>INICIO SECCION</h2>
                        <h2>INICIO SECCION</h2>

                    </div>

                    <div>
                        <div class="form-group">
                            <input type="text" id="cuenta" name="cuenta" placeholder="CUENTA" class="form-control" required="true" name="user">
                        </div>



                        <div class="form-group">
                            <input type="text" id="nombre" name="nombre" placeholder="NOMBRE" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" id="apellido" name="apellido" placeholder="APELLIDO" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" id="cod-clase" name="cod-clase" placeholder="CODIGO DE CLASE" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" id="descripcion" name="descripcion" placeholder="DESCRIPCION" class="form-control">
                        </div>
                        <input type="button" id="btnEnviar" name="btnEnviar" value="save" class="btn btn-primary btn-block">
                    </div>
                        
                </div>
            </div>
            <div class="col-md-8">

            </div>
        </div>
    </div>

</body>

</html>