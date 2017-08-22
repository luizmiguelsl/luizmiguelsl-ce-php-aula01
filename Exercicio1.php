<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            text-align : center;
        }
    </style>
</head>
<body>
    <h1>
        PHP - Atividade 01
    </h1>

    Considerando que A seja igual a 10 e B seja igual a 20, eis os seguintes cálculos:
    <br>
    <br>

    <table style="width:100%" border="1">
        <tr>
            <td> 
                Operação
            </td>
            <td> 
                Resultado
            </td>
        </tr>

        <tr>
            <td> 
                A + B
            </td>
            <td> 
                <?php $n1 = 10 ;
                      $n2 = 20 ;
                      $resultado = $n1 + $n2  ;
                      echo $resultado;
                ?>
            </td>
        </tr>

        <tr>
            <td> 
                A - B
            </td>
            <td> 
                <?php $n1 = 10 ;
                      $n2 = 20 ;
                      $resultado = $n1 - $n2  ;
                      echo $resultado;
                ?>
            </td>
        </tr>

        <tr>
            <td> 
                A * B
            </td>
            <td> 
                <?php $n1 = 10 ;
                      $n2 = 20 ;
                      $resultado = $n1 * $n2  ;
                      echo $resultado;
                ?>
            </td>
        </tr>

        <tr>
            <td> 
                A / B
            </td>
            <td> 
                <?php $n1 = 10 ;
                      $n2 = 20 ;
                      $resultado = $n1 / $n2  ;
                      echo $resultado;
                ?>
            </td>
        </tr>

        <tr>
            <td> 
                B<sup>A</sup>
            </td>
            <td> 
                <?php $n1 = 10 ;
                      $n2 = 20 ;
                      $resultado = pow($n2, $n1);
                      echo number_format ($resultado,2,',','.');    
                      
                ?>
            </td>
        </tr>
    </table>

</body>
</html>