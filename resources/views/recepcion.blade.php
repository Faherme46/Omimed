<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/recept.css">

    <title>Formulario de Recepcionista</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="modal fade" id="miModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><center>Paciete</center></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <?php
                    if(isset($_GET['find'])){
                        if($_GET['find']=='1'){
                            echo "Encontrado";
                            echo $_GET['cc'];
                        }else{
                            echo "No encontrado";
                        }}
                    ?>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <div>
        <h1 align="center">RECEPCIONISTA</h1>
    </div>




    <div class="content">
        <!-- Aquí coloca el contenido de tu página -->
        <form action="recepcion" align="center" class="row g-3 needs-validation" method="POST">
            @csrf
            <div class="col-md-6 offset-md-3">
                <label for="validationServer01" class="form-label">DOCUMENTO DE IDENTIDAD</label>
                <input type="text" class="form-control" placeholder="Número de documento" id="cc"
                    name="cc">
                <div class="valid-feedback">CORRECTO</div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Botón</button>
            </div>
        </form>
    </div>
    <?php

        if (isset($_GET['find'])){
        ?>

        <script>
            $(document).ready(function() {
                $("#miModal").modal('show');
            });
        </script>
    <?php
        }
    ?>


</body>

</html>
