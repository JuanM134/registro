<html lang="es">

    <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Trabajadores</title>


    </head>


    <body>

                <?php

                if(isset($_POST['btn']) && $_POST['btn'] == 'Registrar') {

                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $cedula = $_POST['cedula'];
                    $departamento = $_POST['departamento'];
                    $lugar = $_POST['lugar'];
                    $salario = $_POST['salario'];
                    
                    
                    $nombre2 = $_POST['nombre2'];
                    $apellido2 = $_POST['apellido2'];
                    $cedula2 = $_POST['cedula2'];
                    $departamento2 = $_POST['departamento2'];
                    $lugar2 = $_POST['lugar2'];
                    $salario2 = $_POST['salario2'];
                    
                    
                    $nombre3 = $_POST['nombre3'];
                    $apellido3 = $_POST['apellido3'];
                    $cedula3 = $_POST['cedula3'];
                    $departamento3 = $_POST['departamento3'];
                    $lugar3 = $_POST['lugar3'];
                    $salario3 = $_POST['salario3'];

                    if(!empty($nombre) && !empty($apellido) && !empty($cedula) && !empty($departamento)
                    && !empty($lugar) && !empty($salario) && !empty($nombre2) && !empty($apellido2) && !empty($cedula2) && !empty($departamento2)
                    && !empty($lugar2) && !empty($salario2) && !empty($nombre3) && !empty($apellido3) && !empty($cedula3) && !empty($departamento3)
                    && !empty($lugar3) && !empty($salario3)){

                        if(!is_numeric($nombre) && !is_numeric($apellido) && is_numeric($cedula) && !is_numeric($departamento)
                     && !is_numeric($lugar) && is_numeric($salario) && !is_numeric($nombre2) && !is_numeric($apellido2) && is_numeric($cedula2) && !is_numeric($departamento2)
                     && !is_numeric($lugar2) && is_numeric($salario2) && !is_numeric($nombre3) && !is_numeric($apellido3) && is_numeric($cedula3) && !is_numeric($departamento3)
                     && !is_numeric($lugar3) && is_numeric($salario3)){

                            $trabajador = array('Nombre'=>$nombre, 'Apellido'=>$apellido, 'Cedula'=>$cedula, 'Departamento de Trabajo'=>$departamento,
                            'Lugar de Trabajo'=>$lugar, 'Salario en Bs'=>$salario);
                            
                            
                            echo "Trabajador 1: ";
                            echo "<br>";
                            echo "<br>";


                            foreach($trabajador as $informacion=>$empleado)
                                    {
                                    echo  " " . $informacion . ":  " . $empleado. " ";
                                    echo "<br>";
                                    }
                                    
                             $trabajador2 = array('Nombre'=>$nombre2, 'Apellido'=>$apellido2, 'Cedula'=>$cedula2, 'Departamento de Trabajo'=>$departamento2,
                            'Lugar de Trabajo'=>$lugar2, 'Salario en Bs'=>$salario2);
                            echo "<br>";
                            echo "Trabajador 2: ";
                            echo "<br>";
                            echo "<br>";
                            
                           foreach($trabajador2 as $informacion2=>$empleado2)
                                    {
                                    echo  " " . $informacion2 . ":  " . $empleado2. " ";
                                    echo "<br>";
                                    }
                                    
                             $trabajador3 = array('Nombre'=>$nombre3, 'Apellido'=>$apellido3, 'Cedula'=>$cedula3, 'Departamento de Trabajo'=>$departamento3,
                            'Lugar de Trabajo'=>$lugar3, 'Salario en Bs'=>$salario3);
                            echo "<br>";
                            echo "Trabajador 3: ";
                            echo "<br>";
                            echo "<br>";
                            
                           foreach($trabajador3 as $informacion3=>$empleado3)
                                    {
                                    echo  " " . $informacion3 . ":  " . $empleado3. " ";
                                    echo "<br>";
                                    }
                                    
                            echo "<br>";
                            echo "<a href='index.html'> <-- Volver para atrás</a>";
                        

                        }else{

                        echo "Los datos ingresados son incorrectos";
                        echo "<a href='index.html'>Volver para atrás</a>";


                    }

                    }else{

                        echo "Los datos están vacíos, por favor añada un valor";
                        echo "<a href='index.html'>Volver para atrás</a>";

                    }

                }else{

                    echo "Debe pulsar el botón de calcular";
                    echo "<a href='index.html'>Volver al atrás</a>";

                }

                ?>


    </body>

</html>
