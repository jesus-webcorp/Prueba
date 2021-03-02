<?php 
    $total = 5000;
    $actual = rand(1, $total); //1234
    $porcentaje = round(($actual/$total) * 100, 1);
?>

<style>
    .inner{
        height: 25px;
        width: <?php echo $porcentaje ?>%;
        background-color: red;
        color: white;
        text-align: center;
    }
</style>

    
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="estilos.css">
            <title>Progress bar dinamico</title>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h3>Porcentaje de litros donados de sangre</h3>

                        <div class="barra" >
                            <div class="inner progress-bar-striped progress-bar-animated">
                                <?php echo $porcentaje; ?>%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </body>       
    </html>
    
