<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplecar</title>
</head>
<body>
    
    <form action="13_ciclo_for.php" method="post">
<h3>Esta es tu calculadora hecha en php con switch y ciclos for</h3>
        <input type="submit" name="boton" value="1">
        <input type="submit" name="boton" value="2">
        <input type="submit" name="boton" value="3">
        <input type="submit" name="boton" value="4">
        <input type="submit" name="boton" value="5">
        <input type="submit" name="boton" value="6">
        <input type="submit" name="boton" value="7">
        <input type="submit" name="boton" value="8">
        <input type="submit" name="boton" value="9">
        <input type="submit" name="boton" value="10">
        <br><br/>
    </form>

</body>
</html>



<?php
    // verificamos que el POST tenga datos y asignamos el valor a una variable

    if ($_POST) 
    {  
        $numero = $_POST['boton'];


        // creamos el switch con la variable y cada uno de los posibles casos

        switch ($numero)
        {

            case '1':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break; 
            
            case '2':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break;   
                
            case '3':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break; 
            
            case '4':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break;

            case '5':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break; 
            
            case '6':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break;

            case '7':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break; 
            
            case '8':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break;

            case '9':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break; 
            
            case '10':
                
                // Creamos el ciclo for

                for ($numeroInicial=1; $numeroInicial <= 10; $numeroInicial++) 
                { 
                    $res = $numeroInicial * $numero;
                        echo $numero.' x '.$numeroInicial.' = '.$res.'<br/>';
                }
                break;

        }
            
        
    }
?>

